<?php
class AuthenticationController extends BaseController{

//logic for control user login process
	public function logIn()
	{
		$credential = Input::only('userName', 'password'); 
		if (Auth::attempt($credential)) {
			return Redirect::intended('home');
		}
		return Redirect::to('') -> with ('notice','Your password or username is incorrect');
	}

//logic for control user logout process
	public function logOut()
	{
		Auth::logout();
		return Redirect::to('') ;	
	}

//logic for control user register process
	public function register(){
		$Member = new Member;
		$MemberRepo = new MemberInterface;
		$Member->setUserName(Input::get('userName'));
		$Member->setName(Input::get('name'));
		$Member->setPassword(Hash::make(Input::get('password')));
		$MemberRepo->saveRepository($Member);
		return Redirect::to('') ;//-> with ('notice','register success');
	}
}
