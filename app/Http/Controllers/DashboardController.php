<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        return view('admin.home.home');
    }
    public function Company(){

        return view('admin.company.company');
    }
    public function job(){

        return view('admin.job.job');
    }
    public function employ(){

        return view('admin.employ.employe');
    }
}
