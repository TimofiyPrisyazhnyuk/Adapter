<?php

/**
 * Class Book
 */
class Book implements BookInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * Set page.
     */
    public function open()
    {
        $this->page = 1;
    }

    /**
     * Turn page.
     */
    public function turnPage()
    {
        $this->page++;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }
}
