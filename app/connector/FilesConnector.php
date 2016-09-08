<?php

namespace App\Connector;

class FilesConnector implements Connector
{

	/**
	 * ファイル出力の際に頭に付ける文字列
	 * ファイル名は fileName_YYYYMMDD-HHiiss.txt になる
	 * 
	 * @var string
	 */
	private $fileName;

	/**
	 * コンストラクタ
	 * 
	 * @param type $fileName
	 */
	public function __construct($fileName)
	{
		$this->fileName = $fileName;
	}

	/**
	 * 保存するデータを受け取って、実際の保存処理を行う
	 * 
	 * @param array $books
	 */
	public function saveData(array $books)
	{
		$fp = fopen('data/' . $this->fileName . '_' . date('Ymd-His', time()) . '.txt', 'w');
		foreach ($books as $book) {
			fwrite($fp, 'ISBN : ' . $book->isbn . PHP_EOL);
			fwrite($fp, 'Title : ' . $book->title . PHP_EOL);
			fwrite($fp, 'Author : ' . $book->author . PHP_EOL . PHP_EOL);
		}
		fclose($fp);
	}

}
