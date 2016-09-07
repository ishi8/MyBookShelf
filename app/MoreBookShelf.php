<?php

namespace App;

class MoreBookShelf extends BookShelf
{

	public function save()
	{
		$recoder = new Recoder($this->books); //第二引数を省略すれば標準出力
		$recoder->exe();
	}

}
