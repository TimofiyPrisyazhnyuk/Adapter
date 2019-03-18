<?php

namespace DesignPatterns\Structural\Adapter\Tests;

use Adapter\Book;
use Adapter\EBookAdapter;
use Adapter\Kindle;

require __DIR__ . "/../BookInterface.php";
require __DIR__ . "/../EBookInterface.php";

foreach (glob("*.php") as $filename) {
    if (file_exists($file = __DIR__ . '/../' . $filename)) {
        require_once $file;
    }
}

class AdapterTest
{
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

(new AdapterTest())->test();