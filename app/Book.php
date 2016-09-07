<?php

namespace App;

class Book
{

	/**
	 * ISBN
	 *
	 * @var string
	 */
	public $isbn;

	/**
	 * タイトル
	 *
	 * @var string
	 */
	public $title;

	/**
	 * 著者
	 *
	 * @var string
	 */
	public $author;

	/**
	 * ISBNをセットする
	 *
	 * @param string $isbn
	 */
	public function setIsbn($isbn)
	{
		$this->isbn = $isbn;
	}

	/**
	 * タイトルをセットする
	 *
	 * @param string $title
	 */
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	 * 著者をセットする
	 *
	 * @param string $author
	 */
	public function setAuthor($author)
	{
		$this->author = $author;
	}

}
