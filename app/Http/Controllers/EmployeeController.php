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


    function deleteEmployee(Request $req){
        $id=$req->id;
        $newEmployee=new Employee();
        $newEmployee->deleteEmployee($id);
    }

    function updateEmployee(Request $req){
        $id=$req->id;
        $newEmployee=new Employee();
        $newEmployee->updateEmployee($id,$req->all());
    }

    function employeeById(Request $req){
        $id=$req->id;
        $newEmployee=new Employee();
        $data=$newEmployee->employeeById($id);
        return response()->json($data);
    }
}
