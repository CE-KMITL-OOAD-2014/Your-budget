<?php
class RecordController extends BaseController{

//logic to add income record
	public function addIncome(){
		$Record = new Record ;
		$RecordRepo = new RecordInterface ;
		$Record->setOwnerId(Auth::user()->id);
		$Record->setAmount(Input::get('amount'));
		$Record->setInfo(Input::get('info'));
		$Record->setType(1);
		$Record->setCategory(0);
		$RecordRepo->saveRepository($Record);

		$user = User::find(Auth::user()->id);
		$user->balance = (Auth::user()->balance)+(Input::get('amount')); 
		$user->save();	

		return Redirect::to('list');
	}

//logic to add outcome record
	public function addOutcome(){
		$Record = new Record ;
		$RecordRepo = new RecordInterface ;
		$Record->setOwnerId(Auth::user()->id);
		$Record->setAmount(Input::get('amount'));
		$Record->setInfo(Input::get('info'));
		$Record->setType(2);
		$Record->setCategory(Input::get('category'));
		$RecordRepo->saveRepository($Record);

		$user = User::find(Auth::user()->id);
		$user->balance = (Auth::user()->balance)-(Input::get('amount')); 
		$user->save();	

		return Redirect::to('list');
	}

//logic to add reminder record
	public function addReminder(){
		$Reminder = new Reminder ;
		$ReminderRepo = new ReminderInterface ;
		$Reminder->setOwnerId(Auth::user()->id);
		$Reminder->setAmount(Input::get('amount'));
		$Reminder->setInfo(Input::get('info'));
		$Reminder->setDate(Input::get('date'));
		$ReminderRepo->saveRepository($Reminder);
		return Redirect::to('list');
	}

//logic to remove income record
	public function removeOutcome(){
		$user = User::find(Auth::user()->id);
		$user->balance = (Auth::user()->balance)+(Input::get('amount')); 
		$user->save();
		RecordDB::destroy(Input::get('delete'));
		return Redirect::to('list');
	}

//logic to remove income record
	public function removeIncome(){
		$user = User::find(Auth::user()->id);
		$user->balance = (Auth::user()->balance)-(Input::get('amount')); 
		$user->save();
		RecordDB::destroy(Input::get('delete'));
		return Redirect::to('list');
	}

//logic to remove reminder record
	public function removeReminder(){
		ReminderDB::destroy(Input::get('delete'));
		return Redirect::to('list');
	}

//logic to remove reminder and giving a point for complete reminder 
	public function achiveReminder(){
		$user = User::find($temp=Auth::user()->id);
		$user->point = (Auth::user()->point)+10; 
		$user->save();	
		ReminderDB::destroy(Input::get('complete'));
	return Redirect::to('list');
	}

//logic to show all list of record
	public function listRecord(){
		$tempIncome = RecordDB::where('type','=',1)->where('ownerId', '=' , Auth::user()->id)->orderBy('created_at','desc')->get();
		$tempOutcome = RecordDB::where('type','=',2)->where('ownerId', '=' , Auth::user()->id)->orderBy('created_at','desc')->get();
		$tempReminder = ReminderDB::where('ownerId', '=' , Auth::user()->id)->orderBy('created_at','desc')->get();
		return  View::make('index')->with(array('listIncome'=>$tempIncome,'listOutcome'=>$tempOutcome,'listReminder'=>$tempReminder));
	}


}






