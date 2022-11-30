<?php

namespace Module\Dashboard\Controllers;

use Illuminate\Support\Facades\Auth;
use Module\Core\BaseController;

class IndexController extends Controller{

    public function index(){

        return view('dashboard::pages.index');
    }

    public function blank(){
        return view('dashboard::pages.index');
    }
}
