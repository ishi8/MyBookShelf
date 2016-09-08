<?php

namespace App;

class MoreBookShelf extends BookShelf
{

	public function save()
	{
		$recorder = new Recorder($this->books); //第二引数を省略すれば標準出力
		$recorder->exe();
	}

}
