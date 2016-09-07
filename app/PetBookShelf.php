<?php

namespace App;

class PetBookShelf extends BookShelf
{

	public function save()
	{
		$recoder = new Recoder($this->books, 'file'); //ファイル出力
		$recoder->exe();
	}

}
