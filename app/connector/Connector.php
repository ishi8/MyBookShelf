<?php

namespace App\Connector;

interface Connector
{

	/**
	 * Recorderクラスのexeメソッドで呼び出すため
	 * Connectorクラスには必ずsaveDataメソッドの実装が必要
	 * 
	 * @param array $books
	 */
	public function saveData(Array $books);
}
