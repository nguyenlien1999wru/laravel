<?php

namespace App\Repository;

interface RepositoryInterface
{

    public function index($query, $paginate);

    public function update($id, array $data);
    public function add($query, $request);
    public function delete($id);


}
