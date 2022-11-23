@extends('layouts.app')

@section('content')

{{-- <div class="row heading-setting text-white">
    <div class="col-8">
        <h4 class="ml-4">Employees</h4>
    </div>

    <div class="col-4 text-right">
        <a href="{{route ('users.employee_reg')}}" class="btn btn-sm btn-primary">Register Employee</a>
        <a href="{{route ('employees.show')}}" class="btn btn-sm btn-primary">Employee List</a>
    </div>   
</div> --}}

<div class="d-flex">
    <div class="d-flex flex-column flex-shrink-0 p-3 col-2 border-end position-sticky sidebar collapse fixed-top myNav" style="height: 100vh; background-color:#f1edf8;">
        {{-- <a href="/" class="d-flex align-items-center justify-content-around gap-3 mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <span class="fs-4 fw-bold">BuMIs</span>
        </a> --}}
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active-page" aria-current="page">
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

      <div class="d-flex flex-column flex-shrink-0 p-2 bg-white col-12 col-lg-10" id="main">

        <div class="px-3 pb-2" id="custom-cards">
        <h4 class=" mb-4 mt-3">Employees Information</h4>
            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 pb-5">

              <div class="col">
                <div class="card card-cover overflow-hidden rounded-4 shadow-lg" style="background: linear-gradient(to top right, #540de4, #af8af8); border: none;">
                    <div class="bg-white ms-3 mt-3 mb-4 d-flex rounded-4 align-items-center justify-content-center" style="width: 15%;">
                        <i class='bx bx-donate-heart fs-1' style='color:#4e09d7'  ></i>
                    </div>
                  <div class="d-flex flex-column h-100 ps-3 pt-0 pb-4 text-white text-shadow-1">
                    <p class="h4 lh-1 fw-bold">Total number of Employees</p>
                    <p class="h4 lh-1 fw-bold">156</p>
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div class="card card-cover overflow-hidden rounded-4 shadow-lg" style="background: linear-gradient(to top right, #f68207, #c3f846); border: none;">
                    <div class="bg-white ms-3 mt-3 mb-4 d-flex rounded-4 align-items-center justify-content-center" style="width: 15%;">
                        <i class='bx bx-plus-medical fs-1' style='color:#010000'  ></i>
                    </div>
                  <div class="d-flex flex-column h-100 ps-3 pt-0 pb-4 text-white text-shadow-1">
                    <p class="h4 lh-1 fw-bold">Employees (Male)</p>
                    <p class="h4 lh-1 fw-bold">75</p>
                  </div>
                </div>
              </div>
        
              <div class="col">
                <div class="card card-cover overflow-hidden rounded-4 shadow-lg" style="background: linear-gradient(to top right, #540de4, #af8af8); border: none;">
                    <div class="bg-white ms-3 mt-3 mb-4 d-flex rounded-4 align-items-center justify-content-center" style="width: 15%;">
                        <i class='bx bx-check-double fs-1' style='color:#030303'  ></i>
                    </div>
                  <div class="d-flex flex-column h-100 ps-3 pt-0 pb-4 text-white text-shadow-1">
                    <p class="h4 lh-1 fw-bold">Employees (Female)</p>
                    <p class="h4 lh-1 fw-bold">81</p>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="px-4 d-flex flex-row-reverse gap-3">
            <div class="pt-2 col-6 border rounded-4 shadow d-flex flex-column align-items-center justify-content-center">
              <h2>Statistics</h2>
            
              <canvas id="myChart" style="width: 100%;"></canvas>
            </div>

            <div class="col-6 border rounded-4 shadow py-3 px-2">
                <h2 class="mb-3 text-center">Departments</h2>

              <canvas id="myBarChart" style="width: 100%;"></canvas>

            </div>
        </div>
      </div>
</div>






{{-- <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class=" bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-4">
                   <p class="mb-2">Today Sales</p>
                   <b class="mb-0">{{ $count = DB::table('solds')->count(); }}</b>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class=" bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-4">
                       <p class="mb-2">No . Of Users</p>
                       <b class="mb-0">{{ $count = DB::table('users')->count(); }}</b>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
                <div class=" bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Products</p>
                        <b class="mb-0">{{ $count = DB::table('products')->count(); }}</b>
                    </div>
                </div>
            </div>
        <div class="col-sm-6 col-xl-3">
            <div class=" bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-4">
                   <p class="mb-2">Total Categories</p>
                    <b class="mb-0">{{ $count = DB::table('productcategories')->count(); }}</b>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
