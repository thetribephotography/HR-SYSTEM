@extends('layouts.app')


@section('content')

<div class="container-fluid py-6">
  <div class="card"></div>
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered ">
    <thead class="table-gray">
        <tr>
            <th scope="col">EMPLOYEE_ID</th>
            <th scope="col">FIRST NAME</th>
            <th scope="col">LAST NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CONTACT NO.</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($list as $employee)
            
        
        <tr>
            <th scope="row">{{$employee->id}}</th>
            <td>{{$employee->first_name}} </td>
            <td>  {{$employee->last_name}}  </td>
            <td>{{$employee->email}}</td>
            <td>{{$employee->contact_no}}</td>
          </tr>
          {{-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@mdo</td>
            <td>@twitter</td>
          </tr> --}}

          @endforeach
      </tbody>
  </table>

</div>

</div>


@endsection