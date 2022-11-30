<?php

namespace Module\Dashboard\Controllers;

use Module\Core\BaseController;

class Controller extends BaseController{

    public function __construct()
    {
        $this->middleware(['auth:admins'])->except('excepts');
    }

}
