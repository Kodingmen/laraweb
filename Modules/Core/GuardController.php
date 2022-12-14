<?php
namespace Module\Core;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

abstract class GuardController extends Controller{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}