<?php
class AuthenticationController extends BaseController{

	public function logIn()
	{
		$credential = Input::only('userName', 'password'); 
		if (Auth::attempt($credential)) {
			return Redirect::intended('home');
		}
		return Redirect::to('') -> with ('notice','Your password or username is incorrect');
	}

	public function logOut()
	{
		Auth::logout();
		return Redirect::to('') ;	
	}

	public function register(){
		$Member = new Member;
		$MemberRepo = new MemberInterface;
		$Member->setUserName(Input::get('userName'));
		$Member->setName(Input::get('name'));
		$Member->setPassword(Hash::make(Input::get('password')));
		$MemberRepo->saveRepository($Member);
		return Redirect::to('') -> with ('notice','register success');
	}
}
