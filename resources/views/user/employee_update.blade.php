@extends('layouts.app')


@section('content')

<div class="container fluid mt--5">
<div class="card border border-primary shadow-0 ">
    <div class="card-header">Employee Information</div>
    <div class="card-body">
        
        <form action="{{route ('employees.update', $ind->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
      <div class="row">
        <div class="mb-3 col">
            <label for="firstname" class="">First Name</label>
          <input type="text" name="firstname" value=" {{$ind->first_name}} " id="firstname" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="lastname" class="">Last Name</label>
          <input type="text" name="lastname" value="{{$ind->last_name}}" id="lastname" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender">           
              <option value="{{$ind->gender}}">
                @if($ind->gender == 1)
                Male
              </option>
              <option value="2"> Female </option>
              <option value=" {{$ind->gender}} "> 
                @else
                Female
              </option>
              <option value="1"> Male</option>
              @endif
            </select>
        </div>
        <div class="mb-3 col">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" value="{{ $ind->age }}" name="age">
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col">
          <p class="p_style">Email:</p>
          <input type="email" class="form-control" id="email" name="email" value=" {{$ind->email}} " placeholder="name@example.com">
        </div>
        <div class="mb-3 col">
          <p class="p_style"> Contact.No:</p>
          <input type="number" class="form-control" id="contact" name="contact" value="{{$ind->contact_no}}" placeholder="">
        </div>
  
      </div>

      <div class="row">
        <div class="col">
          <label for="origin" class="form-label">State Of Origin</label>
          <select class="form-select" id="origin" name="origin">
            <option value=" {{$ind->state_id}} " selected> {{$ind->state_name}} </option>
            @foreach($state as $state)
            <option value=" {{$state->id}} "> {{$state->state_name}} </option>
            @endforeach
          </select>
      </div>
        <div class="mb-3 col">
          <label for="dept" class="form-label">Department</label>
          <select class="form-select" id="dept" name="dept">
            <option value="{{$ind->dept_id}}" selected> {{$ind->dept_name}} </option>
            @foreach ($depart as $depart)
            <option value=" {{$depart->id}} ">{{$depart->dept_name}}</option>
            @endforeach
          </select>
        </div> 
        </div> 

        <div class="row">
          <div class="mb-3 col">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" class="form-control" value="{{$ind->salary}}" id="salary" name="salary" placeholder="">
          </div>
          <div class="mb-3 col">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status">
              @if ($ind->status == 1)
              <option value="{{$ind->status}}" selected> Active </option>
              <option value="2">Inactive</option>

              @else 

              <option value="{{$ind->status}}" selected> Inactive </option>
              <option value="1">Active</option>

              @endif
            </select>
          </div>
        </div>
  
      <button type="submit" class="btn btn-success">Update</button>

    </form>
    </div>
  </div>
</div>


@endsection