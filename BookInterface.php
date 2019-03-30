<?php

/**
 * Interface BookInterface
 */
interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}
