@extends('layouts.app')


@section('content')

<div class="container fluid mt--5">
<div class="card border border-primary shadow-0 ">
    <div class="card-header">Employee Information</div>
    <div class="card-body">
        @csrf
        <form action="" method="POST">
      {{-- <h5 class="card-title"></h5> --}}
      {{-- <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the
        card's content.
      </p> --}}
      <div class="row">
        <div class="mb-3 col">
            {{-- <label for="firstname" class="">First Name</label> --}}
            <p class="p_style"> First Name:</p>
          <input type="text" name="firstname" value=" {{$ind->first_name}} " id="firstname" class="border_non" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            {{-- <label for="lastname" class="p_style">Last Name:</label> --}}
            <p class="p_style"> Last Name:</p>
          <input type="text" name="lastname" value="{{$ind->last_name}}" id="lastname" class="border_non" placeholder="Last name" aria-label="Last name">
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender">
              <option selected> {{ $ind->gender }} </option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
        </div>
        <div class="mb-3 col">
          {{-- <label for="age" class="form-label">Age</label> --}}
          <p class="p_style"> Age:</p>
          {{-- <span class="input-group-text">$</span> --}}
          <input type="number" class="form-control" id="age" value="{{ $ind->age }}" name="age">
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col">
          {{-- <label for="email" class="form-label">Email address</label> --}}
          <p class="p_style">Email:</p>
          <input type="email" class="form-control" id="email" name="email" value=" {{$ind->email}} " placeholder="name@example.com">
        </div>
        <div class="mb-3 col">
          {{-- <label for="contact" class="form-label">Contact No.</label> --}}
          <p class="p_style"> Contact.No:</p>
          <input type="number" class="form-control" id="contact" name="contact" value="{{$ind->contact_no}}" placeholder="">
        </div>
  
      </div>

      <div class="row">
        <div class="col">
          <label for="origin" class="form-label">State Of Origin</label>
          <select class="form-select" id="origin" name="origin">
            <option selected>{{$ind->state_id}}</option>
            @foreach($ind as $state)
            <option value="">{{$state->state_id}}</option>
            @endforeach
          </select>
      </div>
      </div>
      <div class="row">
        <div class="mb-3 col">
          <label for="dept" class="form-label">Department</label>
          <select class="form-select" id="dept" name="dept">
            <option selected>{{$ind->dept_id}}</option>
            @foreach ($ind as $dept)
            <option value="">{{$dept->dept_id}}</option>
            @endforeach
          </select>
        </div>
  
      <button type="submit" class="btn btn-primary">Button</button>

    </form>
    </div>
  </div>

  {{-- <div class="card text-center border border-primary shadow-0 ">
    <div class="card-header">Personal Information</div>
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text">
        Some quick example text to build on the card title and make up the bulk of the
        card's content.
      </p>
  
      <button type="button" class="btn btn-primary">Button</button>
    </div>
  </div> --}}
</div>


@endsection