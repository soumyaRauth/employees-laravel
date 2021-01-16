<?php
namespace App\Models;
use DB;

class Employee{

    function getEmployee(){
        $emp=DB::table('employee')->orderBy('id', 'desc')->get();
        return $emp;
    }


    function addEmployee($data){
        DB::table('employee')->insert($data);
    
    }
    
}
