<?php

namespace App;

class Recoder
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
	 * @var 空、'file'のいずれか //DBとかに保存の場合はここの選択肢を増やしていく
	 */
	private $media;

	/**
	 * コンストラクタ
	 * 
	 * @param array $books
	 * @param mixed $media
	 */
	public function __construct(Array $books, $media = null)
	{
		$this->books = $books;
		$this->media = $media;
	}

	/**
	 * 保存実行処理。記録媒体によって処理を分ける
	 */
	public function exe()
	{
		switch ($this->media) {
			case 'file':
				$fp = fopen('data/books_' . date('Ymd-His', time()) . '.txt', 'w');
				foreach ($this->books as $book) {
					fwrite($fp, 'ISBN : ' . $book->isbn . PHP_EOL);
					fwrite($fp, 'Title : ' . $book->title . PHP_EOL);
					fwrite($fp, 'Author : ' . $book->author . PHP_EOL . PHP_EOL);
				}
				fclose($fp);

				echo PHP_EOL . 'ファイル出力が完了しました' . PHP_EOL;
				break;
			default :
				//接続先が省略された場合は標準出力へ
				foreach ($this->books as $book) {
					echo 'ISBN : ' . $book->isbn . PHP_EOL;
					echo 'Title : ' . $book->title . PHP_EOL;
					echo 'Author : ' . $book->author . PHP_EOL . PHP_EOL;
					echo '標準出力への出力が完了しました' . PHP_EOL;
				}
				break;
		}
	}

}
