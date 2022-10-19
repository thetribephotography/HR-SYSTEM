<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
use App\Models\User;


class EmployeeController extends Controller
{
    public function register(Request $request){
        $validated = $request->validate([
          'firstname' => 'required',
          'lastname' => 'required', 
          'email' => 'required',
          'contact' => 'required',
        ]);

        $employee = new Employee;

        $employee->first_name = $request->firstname;
        $employee->last_name = $request->lastname;
        $employee->email = $request->email;
        $employee->contact_no = $request->contact;

        $employee->save();

        // $employee->redirect('autumn-name')->with (exmaple_most_onlift);

        return redirect ('/home')->with('Employee Successfull');
    }
}
