<?php

namespace Mitsubachi\BookShelf;

class BookShelf
{
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
    public function __construct($books)
    {
        $this->books = $books;
    }

    /**
     * 蔵書を検索し、条件に一致するBookオブジェクトの配列を返す
     * 
     * @param array $conditions
     * @return array
     */
    public function search($conditions)
    {
        
    }

}