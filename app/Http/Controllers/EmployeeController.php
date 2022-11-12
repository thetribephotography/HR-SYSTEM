<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
use App\Models\User;
use App\Models\Department;
use App\Models\State;


class EmployeeController extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
          'firstname' => 'required',
          'lastname' => 'required', 
          'email' => 'required',
          'contact' => 'required',
          'gender' => 'required',
        //   'dept' => 'required',
        //   'origin' => 'required',
          'salary' =>'required',

        ]);

        $status = 1;

        // $gend = $request->gender;

        // if(gend == 1){
        //     $actgender = 'Male';
        // } else{
        //     $actgender = Female;
        // }

        $employee = new Employee;

        $employee->first_name = $request->firstname;
        $employee->last_name = $request->lastname;
        $employee->email = $request->email;
        $employee->contact_no = $request->contact;
        $employee->gender = $request->gender;
        // $employee->state_id = $request->origin;
        // $employee->dept_id = $request->dept;
        $employee->salary = $request->salary;
        // $employee->status = $status;

        $employee->save();

        dd($employee);

        // $employee->redirect('autumn-name')->with (exmaple_most_onlift);

        // return redirect ('/home')->with('Employee Successfull');
    }

    public function show(){

        $list = Employee::all();

        return view('user.employee_list', compact('list'));
    }
}
