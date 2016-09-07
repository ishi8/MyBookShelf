<?php

require_once 'vendor/autoload.php';

define('BOOKS_NUMBER', 3);

$moreShelf = new \App\MoreBookShelf();
$petShelf = new \App\PetBookShelf();

$faker = Faker\Factory::create('ja_JP');
$faker->addProvider(new \Library\BookFaker($faker));

for ($i = 0; $i < BOOKS_NUMBER; $i++) {

	$book = new \App\Book();
	$book->setIsbn($faker->isbnStr);
	$book->setTitle($faker->title);
	$book->setAuthor($faker->name);

	$moreShelf->add($book);
	$petShelf->add($book);
}

$moreShelf->save();
$petShelf->save();
