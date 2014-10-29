<?php
class callSuggest extends Testcase
{
	public fuction SuggestTest(){
		$mysug1 = new suggest();
		$mysug1->setInfo('a');
		$this->assertEquals('a', $mysug1->info);

		$mysug2 = new suggest();
		$mysug2->setInfo('b');
		$this->assertEquals('b', $mysug2->info);

		$mysug3 = new suggest();
		$mysug3->setInfo('c');
		$this->assertEquals('c', $mysug3->info);
	}
}
>?