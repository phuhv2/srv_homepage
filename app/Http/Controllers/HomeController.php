<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

}
