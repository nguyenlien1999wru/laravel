<?php
namespace App\Repository\User;

use App\Repository\User\UserRepositoryInterface;
use App\Repository\BaseRepository;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
      return   \App\Models\User::class;
    }
    public function test($xxxx)
    {
        return 'hello';
    }

}
