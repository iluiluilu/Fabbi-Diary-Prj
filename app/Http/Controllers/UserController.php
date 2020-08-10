<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Repositories\UserRepository\UserRepositoryInterface;

class User extends Controller
{
    protected $_userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->_userRepo = $userRepo;
    }

    public function index()
    {
        $users = $this->userRepo->getAll();
        
        return response()->json($users);
    }
}
