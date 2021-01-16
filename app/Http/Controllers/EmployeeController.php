<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
class EmployeeController extends Controller{


    function employee(){
        $emplyee=new Employee();
        $emp=$emplyee->getEmployee();
        return response()->json($emp);
    }


    function addEmployee(Request $req){

        
        $newEmployee=new Employee();
        $newEmployee->addEmployee($req->all());
    }
}
