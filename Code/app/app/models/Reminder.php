<?php


class Reminder{
	private $id ;
	private $ownerId ;
	private $amount ;
	private $info ;
	private $date ;

	public function __construct()
	{
		$this->id = NULL;
		$this->ownerId = NULL;
		$this->amount = NULL ;
		$this->info = NULL ;
		$this->date = NULL ;
	}


	//Set status
	public function setId ($val){
		$this->id = $val;
	}

	public function setOwnerId ($val){
		$this->ownerId = $val;
	}

	public function setAmount ($val){
		$this->amount = $val;
	}

	public function setInfo ($val){
		$this->info = $val;
	}

	public function setDate ($val){
		$this->date = $val;
	}


	//Get stat
	public function getId (){
		return $this->id;
	}

	public function getOwnerId (){
		return $this->ownerId;
	}

	public function getAmount (){
		return $this->amount;
	}

	public function getInfo (){
		return $this->info;
	}

	public function getDate (){
		return $this->date;
	}
}