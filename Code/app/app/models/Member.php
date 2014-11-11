<?php


class Member{
	private $id ;
	private $userName ;
	private $name ;
	private $planType ;
	private $point ;
	private $balance ;
	private $password ;
//	private $recordTable ;
//	private $reminderTable ;


	public function __construct()
	{
		$this->id = Null;   
		$this->userName = Null;   
		$this->name = Null; 
		$this->planType = Null; 
		$this->point = Null 
		$this->balance = Null; 
		$this->password = Null; 
//		$this->recordTable = Null; 
//		$this->reminderTable = Null; 
	}


//Set status
	public function setId ($val){
		$this->id = $val;
	}

	public function setUserName ($val){
		$this->userName = $val;
	}


	public function setName ($val){
		$this->name = $val;
	}

	public function setPlanType ($val){
		$this->planType = $val;
	}

	public function setPoint ($val){
		$this->point = $val;
	}

	public function setBalance ($val){
		$this->balance = $val;
	}

	public function setPassword ($val){
		$this->password = $val;
	}

//Get status
	public function getId (){
		return $this->id;
	}

	public function getUserName (){
		return $this->userName;
	}

	public function getName (){
		return $this->name;
	}

	public function getPlanType (){
		return $this->planType;
	}

	public function getPoint (){
		return $this->point;
	}

	public function getBalance (){
		return $this->balance;
	}

	public function getPassword (){
		return $this->password;
	}


}

?>