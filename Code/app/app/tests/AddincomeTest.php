<?php
class AddincomeTest extends Testcase
{
	public	function testAddIncome(){
		$myrec= new Record();
		$myrec->setOwnerId('1');
		$myrec->setInfo("info");
		$myrec->setAmount('100');
		$myrec->setType('1');
		$myrec->setCategory('Food');

		$this->assertEquals('1',$myrec->ownerId);
		$this->assertEquals('Food',$myrec->category);
		$this->assertEquals('info',$myrec->info);
		$this->assertEquals('100',$myrec->amount);
		$this->assertEquals('1',$myrec->type);
	}
}