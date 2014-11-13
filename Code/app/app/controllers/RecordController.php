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

	public function remove(){
		$temp = RecordDB::find('id','=','9')->get();
		RecordDB::destroy($temp[0]);
		// echo $temp->info;




	}
}






