<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class JobsController extends Controller
{
    public function index()
    {
    	$jobs = Job::with('company')->get();
    	return response()->json($jobs);
    }
}
