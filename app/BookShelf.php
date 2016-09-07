<?php

namespace App;

abstract class BookShelf
{

	/**
	 * Bookの配列
	 *
	 * @var array
	 */
	protected $books;

	/**
	 * コンストラクタ
	 *
	 */
	public function __construct()
	{
		$this->books = [];
	}

	/**
	 * Bookを追加
	 *
	 * @param Book $book
	 */
	public function add(Book $book)
	{
		$this->books[] = $book;
	}

	/**
	 * 本の増減がある時は必ずsaveメソッドを実装する	 
	 */
	abstract function save();
}
