<?php

namespace App\Interfaces;

interface ServiceInterface
{
    public function getList();
    public function getById(int $id);
}
