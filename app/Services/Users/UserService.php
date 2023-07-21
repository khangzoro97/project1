<?php


namespace App\Services\Users;

use App\Mail\ForgotPassword;
use App\Mail\ForgotUserCode;
use App\Repositories\UserRepository;
use App\Services\BaseService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserService extends BaseService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getListUser()
    {
        return $this->userRepository->all();
    }
}
