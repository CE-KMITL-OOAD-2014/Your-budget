<?php

class RankingController extends BaseController{
	public function showRank(){
		$rank = User::all()->orderBy('point','desc');
		return View::make('ranking')->with('rank',$rank);
	}
}
