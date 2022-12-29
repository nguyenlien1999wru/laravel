<?php
namespace App\Repository;

interface BaseRepositoryInterface
{


    public function index($query, $paginate);

    public function create();

    public function update();

    public function delete();


}
