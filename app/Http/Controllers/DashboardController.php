<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Qs;
use App\Repositories\UserRepo;

class DashboardController extends Controller
{
    protected $user;
    public function __construct(UserRepo $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        $d=[];
        if(Qs::userIsTeamSAT()){
            $d['users'] = $this->user->getAll();
        }

        return view('pages.dashboard.index',$d);
    }
}
