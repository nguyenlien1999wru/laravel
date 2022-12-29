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
}
