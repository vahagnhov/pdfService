<?php

namespace App\Repositories\Interfaces;


interface PDFRepositoryInterface
{
    public function searchFor($text);

    public function createOrUpdate($name, $size, $pdf);
}