<?php

require_once 'vendor/autoload.php';

$books = [];

$total = 3;

$replace = rand(0, $total);

for ($i = 1; $i <= $total; $i++) {

	$book = new Mitsubachi\BookShelf\Book();

	if ($i === $replace) {
		$book->setIsbn('ISBN000-0-0000-0000-0');
	} else {
		$book->setIsbn(Mitsubachi\BookShelf\Faker::isbn());
	}

	$book->setTitle(Mitsubachi\BookShelf\Faker::title());
	$book->setAuthor(Mitsubachi\BookShelf\Faker::author());
	$books[] = $book;
}

//booksの中身表示用
//var_dump($books);
//echo '********************' . PHP_EOL;
//echo '********************' . PHP_EOL;

$shelf = new Mitsubachi\BookShelf\BookShelf($books);


echo '<<< ISBNが「000-0-0000-0000-0」の本の検索結果 >>>' . PHP_EOL;
$searched_with_isbn = $shelf->search(['isbn' => 'ISBN000-0-0000-0000-0']);
$shelf->outputBooks($searched_with_isbn, 'isbn');


echo '<<< TITLEに「オブジェクト指向」を含む本の検索結果 >>>' . PHP_EOL;
$searched_with_title = $shelf->search(['title' => 'オブジェクト指向']);
$shelf->outputBooks($searched_with_title, 'title');


echo '<<< 著者に「Williams」を含む本の検索結果 >>>' . PHP_EOL;
$searched_with_author = $shelf->search(['author' => 'Williams']);
$shelf->outputBooks($searched_with_author, 'author');

