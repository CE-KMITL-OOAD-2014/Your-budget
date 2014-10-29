<?php
class AddincomeTest extends Testcase
{
	public fuction AddIncomeTest(){
		$myrec = new rec();
		$myrec->setInfo("info");
		$myrec->setAmount(100);
		$myrec->setType(1);

		$this->assertEquals(info, $myrec->info);
		$this->assertEquals(100, $myrec->amount);
		$this->assertEquals(1, $myrec->type);
	}
}
>?