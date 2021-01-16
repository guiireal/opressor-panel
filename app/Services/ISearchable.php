<?php

namespace App\Services;

interface ISearchable
{
    public function search(string $query): array;
}
