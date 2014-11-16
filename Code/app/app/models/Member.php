<?php


class Member{
	private $id ;
	private $ownerId ;
	private $userName ;
	private $name ;
	private $point ;
	private $balance ;
	private $password ;

	public function __construct()
	{
		$this->id = Null;   
		$this->ownerId = Null;   
		$this->userName = Null;   
		$this->name = Null; 
		$this->point = 0 ;
		$this->balance = 0; 
		$this->password = Null; 
	}


//Set status
	public function setId ($val){
		$this->id = $val;
	}

	public function setOwnerId ($val){
		$this->ownerId = $val;
	}

	public function setUserName ($val){
		$this->userName = $val;
	}


	public function setName ($val){
		$this->name = $val;
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

	public function getOwnerId (){
		return $this->ownerId;
	}

	public function getUserName (){
		return $this->userName;
	}

	public function getName (){
		return $this->name;
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