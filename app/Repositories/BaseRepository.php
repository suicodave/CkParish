<?php

namespace App\Repositories;


class BaseRepository
{
    protected $model;

    function all($columns = [])
    {
        return $this->model::all();
    }

    function paginate($items = 15)
    {
        return $this->model::paginate($items);
    }
}
