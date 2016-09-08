<?php

namespace App;

class Recorder
{

	/**
	 * 本の配列
	 * 
	 * @var array
	 */
	private $books;

	/**
	 * 保存媒体
	 * 
	 * @var 空、またはConnectorインターフェースを採用したクラスのインスタンスを渡す
	 */
	private $connector;

	/**
	 * コンストラクタ
	 * 
	 * @param array $books
	 * @param object $connector
	 */
	public function __construct(Array $books, $connector = null)
	{
		$this->books = $books;
		$this->connector = $connector;
	}

	/**
	 * Connectorを使った保存を実行
	 * 接続先の指定が無い場合は標準出力へ
	 */
	public function exe()
	{
		if ($this->connector) {
			$this->connector->saveData($this->books);
		} else {
			//接続先が省略された場合は標準出力へ
			foreach ($this->books as $book) {
				echo 'ISBN : ' . $book->isbn . PHP_EOL;
				echo 'Title : ' . $book->title . PHP_EOL;
				echo 'Author : ' . $book->author . PHP_EOL . PHP_EOL;
			}
			echo '標準出力への出力が完了しました' . PHP_EOL;
		}
	}

}
