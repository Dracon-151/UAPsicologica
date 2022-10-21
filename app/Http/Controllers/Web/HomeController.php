<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $breadcrum_info = array(
        "main_title" => "Dashboard",
        "second_level" => "",
        "add_button" => true,
        "ref" => "dashboard"
    );

    public function index()
    {
        $breadcrum_info = $this->breadcrum_info;
        return view('admin.dashboard', compact('breadcrum_info'));
    }
}
