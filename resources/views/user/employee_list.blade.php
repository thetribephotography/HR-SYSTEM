@extends('layouts.app')


@section('content')

<div class="gradient-custom">
    <div class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 col-2 border-end position-sticky sidebar collapse fixed-top myNav" style="height: 100vh; background:linear-gradient(to top right,  rgba(149,163,223,0.6), rgba(155,105,201,0.6));">
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

<div class="container-fluid gradient-custom border-none">
  <div class="row justify-content-center overview">
      <div class="col-md-12">
          <div class="card bg-transparent trans ">
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
                                                  <div class="col">DEPARTMENT</div>
                                                  <div class="col">SALARY</div>
                                                  <div class="col">ACTION</div>
                                            </div>
                                        

                                                @foreach ($list as $employee)
                                                        <div class="row table_border">
                                                          <div class="col">{{$employee->id}}</div>
                                                          <div class="col"> {{$employee->last_name}} {{$employee->first_name}} </div>
                                                          <div class="col"> {{$employee->age}} </div>
                                                          <div class="col"> 
                                                            @if ($employee->gender == 1)
                                                                Male
                                                            @else
                                                                Female
                                                            @endif
                                                        </div>
                                                          <div class="col"> {{$employee->dept_name}} </div>
                                                          <div class="col"> {{$employee->salary}} </div>
                                                          <div class=" col td-actions text-right">
                                                               {{-- <a href="#" class="btn btn-sm btn-secondary"
                                                                  data-toggle="tooltip" data-placement="bottom"> 
                                                                   <i class="tim-icons icon-pencil text-black">More Details</i>
                                                              </a> --}}

                                                              <a href="{{route ('employees.individual', $employee->id) }}" class="btn btn-sm btn-primary"
                                                                  data-toggle="tooltip" data-placement="bottom">
                                                                  <i class="bi bi-vector-pen">Edit</i>
                                                                  {{-- <i class="tim-icons icon-pencil text-black"></i> --}}
                                                              </a>
                                                          </div>
                                                        </div>
                                                              </form>
                                                  @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>                        
    </div>
</div>
    </div>

@endsection