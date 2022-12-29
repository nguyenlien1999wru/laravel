<?php
namespace App\Repository;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    /**
     * ĐúNG Rồina
     */
    public function __construct()
    {
        $this->setModel();
    }
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }
    abstract public function getModel();

    public function index($query, $paginate)
    {
        $result =  $this->model::where($query);
        if($paginate){
            return $result->paginate($paginate);
        }
        return $result->get();
    }
}
