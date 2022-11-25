<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Employee;
use App\Models\User;
use App\Models\Department;
use App\Models\State;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function register(Request $request){
            

        $validated = $request->validate([
          'firstname' => 'required',
          'lastname' => 'required', 
          'email' => 'required',
          'contact' => 'required',
          'gender' => 'required',
          'age' => 'required',
          'dept' => 'required',
          'origin' => 'required',
          'salary' =>'required',

        ]);

        $employee = new Employee;

        $employee->first_name = $request->firstname;
        $employee->last_name = $request->lastname;
        $employee->email = $request->email;
        $employee->contact_no = $request->contact;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->state_id = $request->origin;
        $employee->dept_id = $request->dept;
        $employee->salary = $request->salary;
        // $employee->status = $status;

        $employee->save();

        // dd($employee);

        return redirect ('/home')->with('Employee Successfull');
    }

    public function show(){

        // $list = Employee::all();

        $list = DB::table('employees')
        ->join('departments', 'departments.id', '=', 'employees.dept_id')
        ->join('states', 'states.id', '=', 'employees.state_id')
        ->select('departments.dept_name as dept_name', 'departments.id as dept_id', 'states.state_name as state_name', 'states.id as state_id', 'employees.*')
        ->get();

        // return $list;
        return view('user.employee_list', compact('list'));  
    }

    public function individual($id, Request $request){

      $ind = Employee::find($id);

      // $fire = $request->id;

      // $ind = DB::table('employees')
      // ->join('departments', 'departments.id', '=', 'employees.dept_id')
      // ->join('states', 'states.id', '=', 'employees.state_id')
      // ->select('departments.dept_name as dept_name', 'departments.id as dept_id', 'states.state_name as state_name', 'states.id as state_id', 'employees.*')
      // ->where('employees.id', $id)
      // ->get();

      // $ind = DB::table('employees')->find($id);

      // return $ind;

      // dd($ind);

      return view('user.employee_update', compact('ind'));
    }

    public function update(Request $request){
      if ($request->all() == ''){
        return view ('/home')->with ('No Update Made');
      } else{
      $data = Employee::find($request->id);

      $data->first_name = $request->firstname;
      $data->last_name = $request->lastname;
      $data->gender = $request->gender;
      $data->email = $request->email;
      $data->contact_no = $request->contact;
      $data->age = $request->age;
      $data->state_id = $request->origin;
      $data->dept_id = $request->dept;
      $data->salary = $request->salary;
      $data->status = $request->status;

      // dd($data);

      $data->update();

      // upload = Employee::where('id', $id)->update(all());

      // return $data;





      return view ('/home')->with ('Update Successful');

    }
    }
}
