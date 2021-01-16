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


    function deleteEmployee($id){
        DB::table('employee')->where('id',$id)->delete();
    }


    function updateEmployee($id,$data){
        DB::table('employee')->where('id',$id)->update($data);
    }
    function employeeById($id){
        $data=DB::table('employee')->where('id',$id)->get()->first();
        return $data;
    }
    
}
