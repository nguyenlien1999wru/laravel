<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\RepositoryInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use function Termwind\renderUsing;


abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    //khởi tạo
    public function __construct()
    {
        $this->setModel();
    }


    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }
    public function index($query, $paginate)
    {
        if(!$paginate){
            return $this->model->where($query)->get();
        }
        return $this->model->where($query)->paginate($paginate);
    }
    public function delete($id)
    {
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        echo ("User Record deleted successfully.");
        return redirect()->route('index');
    }

    public function add($query, $request){
        $request->validate([
            'name'=>'require',
        ]);
        User::create($request->all());
        return redirect()->$this->userRepo->index();
        $this->model->where($query)->put();
    }
     public function update($request, array $data){
         $request->validate([
             'name'=>'require',
         ]);
         $data->update($request->all());
         return redirect()->route(index);
    }


//    public function put($query, $paginate)
//    {
//        if(!$paginate){
//            return $this->model->where($query)->get();
//        }
//        return $this->model->where($query)->paginate($paginate);
//    }


}
