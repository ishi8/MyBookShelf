<?php

namespace App;

use App\Connector\FilesConnector;

class PetBookShelf extends BookShelf
{

	public function save()
	{
		$recorder = new Recorder($this->books, new FilesConnector('PetBook')); //ファイル出力
		$recorder->exe();
	}

}
