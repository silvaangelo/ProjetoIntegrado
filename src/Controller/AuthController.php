<?php

namespace App\Controller;

use App\Service\UserService;

class AuthController extends Controller {

	public function signup($request, $response, $args) {
		$this->view->render($response, 'auth/signup.phtml');
	}

	public function signupPost($request, $response, $args) {
		$params = $request->getParams();

		if($params['action']) {
			try {
				$params = $request->getParams();

				$service = new UserService;
				$service->createNewUser($params);

				return $response->withRedirect('login');
			} catch(\Exception $e) {
				$this->view->render($response, 'auth/signup.phtml', [
					'error' => $e->getMessage(),
					'actualFields' => $params
				]);
			}
		} else {
			return $response->withRedirect('/');
		}
	}

	public function login($request, $response, $args) {
		$this->view->render($response, 'auth/login.phtml');
	}

	public function loginPost($request, $response, $args) {
		var_dump($request->getParams());


	}
}
