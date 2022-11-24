<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\State;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function employee()
    {
        $list = Department::all();
        $state = State::all();

        return view ('user.employee_reg', compact ('list', 'state'));
    }

    public function list()
    {
        return view ('user.employee_list');
    }
}
