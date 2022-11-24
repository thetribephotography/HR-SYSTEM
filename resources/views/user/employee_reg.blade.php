@extends('layouts.app')


@section('content')

<div class="d-flex">

    <div class="d-flex flex-column flex-shrink-0 p-3 col-2 border-end position-sticky sidebar collapse fixed-top myNav" style="height: 100vh; background-color:#f1edf8;">
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="{{route ('home')}}" class="nav-link active-page" aria-current="page">
            <i class='bi bi-speedometer' style="color: #000000;"></i>
              <span>DashBoard</span>
          </a>
        </li>
        <li>
          <a href=" {{route ('users.employee_reg')}} " class="nav-link">
            <i class='bi bi-person-fill-add'></i>
            Register Employee
          </a>
        </li>
        <li>
          <a href=" {{route ('employees.show') }} " class="nav-link">
            <i class='bi bi-person-lines-fill'></i>
            Employee List
          </a>
        </li>
      </ul>
  
    </div>
  


{{-- <div class="d-flex flex-column flex-shrink-0 p-2 bg-white col-12 col-lg-10" id="main"> --}}
<div class="container-fluid mt-2">
    <div class="card">
        <div class="card-body">
<form class="" method="POST" action="{{route ('employees.register') }}" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="mb-3 col">
            <label for="firstname" class="form-label">First Name</label>
          <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="lastname" class="form-label">Last Name</label>
          <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender">
              <option selected>Choose...</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
        </div>
        <div class="mb-3 col">
          <label for="age" class="form-label">Age</label>
          {{-- <span class="input-group-text">$</span> --}}
          <input type="number" class="form-control" id="age" name="age" placeholder="">
        </div>
      </div>

      <div class="mb-3 row">
      <div class="mb-3 col">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      </div>
      <div class="mb-3 col">
        <label for="contact" class="form-label">Contact No.</label>
        <input type="number" class="form-control" id="contact" name="contact" placeholder="">
      </div>
    </div>

    <div class="mb-3 row">
    <div class="col">
      <label for="origin" class="form-label">State Of Origin</label>
      <select class="form-select" id="origin" name="origin">
        <option selected>Choose...</option>
        @foreach($state as $state)
        <option value="{{$state->id}}">{{$state->state_name}}</option>
        @endforeach
      </select>
  </div>
    </div>

    <div class="mb-3 row">
      <div class="mb-3 col">
        <label for="dept" class="form-label">Department</label>
        <select class="form-select" id="dept" name="dept">
          <option selected>Choose...</option>
          @foreach ($list as $dept)
          <option value="{{$dept->id}}">{{$dept->dept_name}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3 col">
        <label for="salary" class="form-label">Salary</label>
        {{-- <span class="input-group-text">$</span> --}}
        <input type="number" class="form-control" id="salary" name="salary" placeholder="">
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary" id="">Register</button>
    </div>
  </form>
</div>
</div>
</div>
{{-- </div> --}}
</div>


@endsection