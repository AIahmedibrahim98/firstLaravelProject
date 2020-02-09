<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBcontroller extends Controller
{
function index(){
    // $result = DB::select('select * from jobs');\
    // $result = DB::insert('insert into jobs (name,max_salary,min_salary) values (?, ?,?)', ["IT ", 9000,3000]);
    // $result = DB::update('update jobs set max_salary = 90000 where name = ?', ['IT']);
    // dd($result);
    dd(Job::all());
}
}
