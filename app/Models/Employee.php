<?php
namespace App\Models;
use DB;

class Employee{

    function getEmployee(){
        $emp=DB::table('employee')->get();
        return $emp;
    }
}
