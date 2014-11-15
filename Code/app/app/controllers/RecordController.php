<?php
class RecordController extends BaseController{

	public function addIncome(){
		$Record = new Record ;
		$RecordRepo = new RecordInterface ;
		$Record->setOwnerId(Auth::user()->id);
		$Record->setAmount(Input::get('amount'));
		$Record->setInfo(Input::get('info'));
		$Record->setType(1);
		$Record->setCategory(0);
		$RecordRepo->saveRepository($Record);
		return Redirect::to('home');
	}

	public function addOutcome(){
		$Record = new Record ;
		$RecordRepo = new RecordInterface ;
		$Record->setOwnerId(Auth::user()->id);
		$Record->setAmount(Input::get('amount'));
		$Record->setInfo(Input::get('info'));
		$Record->setType(2);
		$Record->setCategory(Input::get('category'));
		$RecordRepo->saveRepository($Record);
		return Redirect::to('home');
	}

	public function addReminder(){
		$Reminder = new Reminder ;
		$ReminderRepo = new ReminderInterface ;
		$Reminder->setOwnerId(Auth::user()->id);
		$Reminder->setAmount(Input::get('amount'));
		$Reminder->setInfo(Input::get('info'));
		$Reminder->setDate(Input::get('date'));
		$ReminderRepo->saveRepository($Reminder);
		return Redirect::to('home');
	}

	public function remove(){
		RecordDB::destroy(Input::get('delete'));
		return Redirect::to('list');
	}


	public function removeReminder(){
		ReminderDB::destroy(Input::get('delete'));
		return Redirect::to('list');
	}

	// public function achiveReminder(){
	// 	ReminderDB::destroy(Input::get('complete'));
	// 	$temp=Auth::user()->point;
	// 	$user = User::find($temp=Auth::user()->id);
	// 	$user->point = (Auth::user()->point)+10; 
	// 	$user->save();	
	// return Redirect::to('list');
	// }

	public function achiveReminder(){
		$user = User::find($temp=Auth::user()->id);
		$user->point = (Auth::user()->point)+10; 
		$user->save();	
		ReminderDB::destroy(Input::get('complete'));
	return Redirect::to('list');
	}


	
	public function listRecord(){
		$tempIncome = RecordDB::where('type','=',1)->where('ownerId', '=' , Auth::user()->id)->get();
		$tempOutcome = RecordDB::where('type','=',2)->where('ownerId', '=' , Auth::user()->id)->get();
		$tempReminder = ReminderDB::where('ownerId', '=' , Auth::user()->id)->get();
		return  View::make('index')->with(array('listIncome'=>$tempIncome,'listOutcome'=>$tempOutcome,'listReminder'=>$tempReminder));
	}

}






