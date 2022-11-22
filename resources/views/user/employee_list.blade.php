@extends('layouts.app')


@section('content')

{{-- <div class="container-fluid py-6">
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
          @endforeach
      </tbody>
  </table>

</div>

</div> --}}

<div class="gradient-custom">

<div class="container-fluid gradient-custom border-none">
  <div class="row justify-content-center overview">
      <div class="col-md-12">
          <div class="card bg-transparent trans ">
              {{-- <div class="card-header bg-transparent border-none">Employees{{ __('Dashboard') }} --}}
              <div class="row text-white ml-2 mr-0 mt-4">
                  <div class="col-8">
                      <h4 class="heading-setting">Employee List</h4>
                  </div>

                  <div class="col-4 mt-2">
                      <a href="{{route ('users.employee_reg')}}" class="btn btn-sm btn-primary">Register Employee</a>
                  </div>   
              </div>

              <div class="card-body">
                                        <div class="table-grid">
                                            <div class="row table_head">
                                                  <div class="col">EMPLOYEE_ID</div>
                                                  <div class="col">NAME</div>
                                                  <div class="col">AGE</div>
                                                  <div class="col">GENDER</div>
                                                  {{-- <div class="col">STATE OF ORIGIN</div> --}}
                                                  <div class="col">DEPARTMENT</div>
                                                  {{-- <div class="col">EMAIL</div>
                                                  <div class="col">CONTACT NO</div> --}}
                                                  <div class="col">SALARY</div>
                                                  <div class="col">ACTION</div>
                                                  {{-- <hr class="mb-0" style="color: white"> --}}
                                            </div>
                                        

                                                @foreach ($list as $employee)
                                                        <div class="row table_border">
                                                            {{-- <div class=""></div> --}}
                                                          <div class="col">{{$employee->id}}</div>
                                                          <div class="col"> {{$employee->last_name}} {{$employee->first_name}} </div>
                                                          <div class="col"> {{$employee->age}} </div>
                                                          <div class="col"> {{$employee->gender}} </div>
                                                          {{-- <div class="col"> {{$employee->state_name}} </div> --}}
                                                          <div class="col"> {{$employee->dept_name}} </div>
                                                          {{-- <div class="col"> {{$employee->email}} </div>
                                                          <div class="col"> {{$employee->contact_no}} </div> --}}
                                                          <div class="col"> {{$employee->salary}} </div>
                                                          <div class=" col td-actions text-right">
                                                               {{-- <a href="#" class="btn btn-sm btn-secondary"
                                                                  data-toggle="tooltip" data-placement="bottom"> 
                                                                   <i class="tim-icons icon-pencil text-black">More Details</i>
                                                              </a> --}}
                                                              
                                                              <a href="/employee/individual/{$id}" class="btn btn-sm btn-primary"
                                                                  data-toggle="tooltip" data-placement="bottom">
                                                                  <i class="bi bi-vector-pen">Edit</i>
                                                                  {{-- <i class="tim-icons icon-pencil text-black"></i> --}}
                                                              </a>
                                                          </div>
                                                        </div>
                                                      {{-- </tr> --}}

                                                      {{-- <tr class="tr-setting col">
                                                          <td>Namesssssss</td>
                                                          <td>productsssssssss</td>
                                                          <td>total cat</td>
                                                          <td>creatoionnnn</td>
                                                          <td>fjfujhgujhj</td>
                                                          <td class="td-actions text-right">
                                                               <a href="#" class="btn btn-sm btn-secondary"
                                                                  data-toggle="tooltip" data-placement="bottom"> 
                                                                   <i class="tim-icons icon-pencil">More Details</i>
                                                              </a>
                                                              <a href="#" class="btn btn-sm btn-secondary"
                                                                  data-toggle="tooltip" data-placement="bottom">
                                                                  <i class="tim-icons icon-pencil">Edit</i>
                                                              </a>
                                                              <form action="#" method="post"
                                                                  class="d-inline"> --}}
                                                                  {{-- @csrf
                                                                  @method('delete') --}}
                                                                  {{-- <button type="button" class="btn btn-primary" data-toggle="tooltip"
                                                                      data-placement="bottom" title="Delete Category"
                                                                      onclick="confirm('Are you sure you want to delete this category? All products belonging to it will be deleted and the records that contain it will not be accurate.') ? this.parentElement.submit() : ''">
                                                                      Delete<i class="tim-icons icon-simple-remove"></i>
                                                                  </button> --}}
                                                              </form>
                                                  @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>                        
    </div>
</div>

@endsection