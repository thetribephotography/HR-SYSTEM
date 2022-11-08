@extends('layouts.app')

@section('content')
<div class="container-fluid gradient-custom bg-transparent border-none">
    <div class="row justify-content-center overview">
        <div class="col-md-12">
            <div class="card bg-transparent trans">
                {{-- <div class="card-header bg-transparent border-none">Employees{{ __('Dashboard') }} --}}
                <div class="row heading-setting text-white">
                    <div class="col-8">
                        <h4 class="ml-4">Employees</h4>
                    </div>

                    <div class="col-4 text-right">
                        <a href="{{route ('users.employee_reg')}}" class="btn btn-sm btn-primary">Register Employee</a>
                        <a href="{{route ('employees.show')}}" class="btn btn-sm btn-primary">Employee List</a>
                    </div>   
                </div>

                <div class="card-body bg-transparent border-none">
    
                                        <div class="">
                                            <table class="table table-borderless table-responsive" id=""> 
                                                <thead class=" text-white">
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Total Category Product</th>
                                                    <th scope="col">Creation Time</th>
                                                    <th scope="col">Action</th>
                                                </thead>
                                                {{-- gy-3 --}}
                                                <tbody class="inner_div overflow-hidden">
                                                   <div class="">
                                                        <tr class="tr-setting col ">
                                                            <td>Namesssssss</td>
                                                            <td>productsssssssss</td>
                                                            <td>total cat</td>
                                                            <td>creatoionnnn</td>
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
                                                                    class="d-inline">
                                                                    {{-- @csrf
                                                                    @method('delete') --}}
                                                                    {{-- <button type="button" class="btn btn-primary" data-toggle="tooltip"
                                                                        data-placement="bottom" title="Delete Category"
                                                                        onclick="confirm('Are you sure you want to delete this category? All products belonging to it will be deleted and the records that contain it will not be accurate.') ? this.parentElement.submit() : ''">
                                                                        Delete<i class="tim-icons icon-simple-remove"></i>
                                                                    </button> --}}
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr class="col">
                                                            <td>Namesssssss</td>
                                                            <td>productsssssssss</td>
                                                            <td>total cat</td>
                                                            <td>creatoionnnn</td>
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
                                                                    class="d-inline">
                                                                    {{-- @csrf
                                                                    @method('delete') --}}
                                                                    {{-- <button type="button" class="btn btn-primary" data-toggle="tooltip"
                                                                        data-placement="bottom" title="Delete Category"
                                                                        onclick="confirm('Are you sure you want to delete this category? All products belonging to it will be deleted and the records that contain it will not be accurate.') ? this.parentElement.submit() : ''">
                                                                        Delete<i class="tim-icons icon-simple-remove"></i>
                                                                    </button> --}}
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer py-4">
                                        <nav class="d-flex justify-content-end" aria-label="...">
                                           <p>nigboooo</p>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
