<?php

namespace Tests;

use Book;
use EBookAdapter;
use Kindle;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class AdapterTest
 * @package Tests
 */
class AdapterTest
{
    /**
     * Test adapter.
     */
    public function test()
    {
        $book = new Book();
        $book->open();
        $book->turnPage();
        print_r($book->getPage());
        $bookE = new EBookAdapter(new Kindle());

        $bookE->open();
        print_r($bookE->getPage());
    }
}

// Run test.
(new AdapterTest())->test();