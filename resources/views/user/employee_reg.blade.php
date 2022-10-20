@extends('layouts.app')


@section('content')
<div class="container-fluid mt--7">
    <div class="card">
        <div class="card-body">
<form class="" method="POST" action="{{route ('employees.register') }}">
    @csrf
    <div class="row">
        <div class="mb-3 col">
            <label for="firstname" class="form-label">First Name</label>
          <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
            <label for="lastname" class="form-label">Last Name</label>
          <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last name" aria-label="Last name">/
        </div>
      </div>

      <div class="mb-3 row">
      <div class="mb-3 col">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      </div>
      <div class="mb-3 col">
        <label for="contact" class="form-label">Contact No.</label>
        <input type="number" class="form-control" id="contact" name="contact" placeholder="">
      </div>
    </div>
      
    {{-- <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div> --}}
    {{-- <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div> --}}
    {{-- <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div> --}}
    <div class="col-12">
      <button type="submit" class="btn btn-primary" id="">Register</button>
    </div>
  </form>
</div>
</div>
</div>



@endsection