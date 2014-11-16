<?php
class AddreminderTest extends Testcase
{
	public	function AddreminderTest(){
		$myrec= new rec();
			$myrec->setOwnerId('1');

		$myrec->setInfo("info");
		$myrec->setAmount('100');
		$myrec->setDate('2014-11-14');

		$this->assertEquals('1',$myrec->ownerId);
		$this->assertEquals('info',$myrec->info);
		$this->assertEquals('100',$myrec->amount);
		$this->assertEquals('2014-11-14',$myrec->type);
	}

}