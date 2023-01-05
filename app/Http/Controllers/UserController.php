<?php

namespace App\Http\Controllers;

use App\Repository\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }
    public function index(Request $request){
        $query =[];
        return $this->userRepo->index($query, null);
    }
    public function create($table)
    {
        Schema::create('user', function ( $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->string('email');
        });
        return $this->userRepo->create($table);
    }
   public function update($post_id, array $post_data)
    {
        Post::find($post_id);update($post_data);
    }
    public function delete($id){
        $result = $this->model->where([['is_delete','=',0],['id','=',$id]])->first();


    }
}
