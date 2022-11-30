<?php

namespace Module\Dashboard\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Module\Core\BaseController;

class SettingController extends Controller{

    public function index(){
        return view('dashboard::pages.settings.website');
    }

}
