<?php

namespace Mitsubachi\BookShelf;

class BookShelf extends Book {

	/**
	 * Bookオブジェクトの配列
	 *
	 * @var array
	 */
	private $books;

	/**
	 * BookShelf constructor.
	 *
	 * @param array $books
	 */
	public function __construct($books) {
		$this->books = $books;
	}

	/**
	 * 蔵書を検索し、条件に一致するBookオブジェクトの配列を返す
	 * 
	 * @param array $conditions
	 * @return array
	 */
	public function search($conditions) {

		$result = [];

		foreach ($this->books as $book) {
			if (isset($conditions["isbn"]) && $book->isbn === $conditions["isbn"]) {
				$result['isbn'][] = $book;
			}
			if (isset($conditions['title']) && strpos($book->title, $conditions["title"]) !== false) {
				$result['title'][] = $book;
			}
			if (isset($conditions['author']) && strpos($book->author, $conditions["author"]) !== false) {
				$result['author'][] = $book;
			}
		}

		return $result;
	}

	//本の検索結果表示
	public function outputBooks($books, $category) {
		if (isset($books[$category])) {
			foreach ($books[$category] as $key => $book) {
				echo '( 本 - ' . ($key + 1) . ' )' . PHP_EOL;
				echo '本のタイトル : ' . $book->title . PHP_EOL;
				echo '著者 : ' . $book->author . PHP_EOL;
				echo $book->isbn . PHP_EOL . PHP_EOL;
			}
		} else {
			echo '該当する書籍が見つかりませんでした。' . PHP_EOL . PHP_EOL;
		}
		echo '=====' . PHP_EOL . PHP_EOL;
	}

}
