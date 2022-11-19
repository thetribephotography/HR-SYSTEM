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
            <label for="lastname" class="">Last Name</label>
          <input type="text" name="lastname" value="{{$ind->last_name}}" id="lastname" class="border_non" placeholder="Last name" aria-label="Last name">
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