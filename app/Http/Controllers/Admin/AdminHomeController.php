<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
public function index()
{
$viewData = [];
$viewData["title"] = "Admin Page - Admin - B13 STORE";
return view('admin.home.index')->with("viewData", $viewData);
}
}
