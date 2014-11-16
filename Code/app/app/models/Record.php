<?php


class Record{
	private $id ;
	private $ownerId ;
	private $amount ;
	private $info ;
	private $type ;
	private $category ;


	public function __construct()
	{
		$this->id = NULL;
		$this->ownerId = NULL;
		$this->amount = NULL ;
		$this->info = NULL ;
		$this->type = NULL;
		$this->category = NULL ;
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

	public function setType ($val){
		$this->type = $val;
	}


	public function setCategory ($val){
		$this->category = $val;
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

	public function getType (){
		return $this->type;
	}


	public function getCategory (){
		return $this->category;
	}

	//used to find total amount of category($val)
	public function countCategory($val){
		$temp = RecordDB::where('ownerId','=',Auth::user()->id)->where('category','=',$val)->get();
		$return = 0;
		for ($i=0; $i<count($temp) ; $i++) { 
			$return = $return+$temp[$i]->amount;
		}
		return $return ;
	}


} 

?>