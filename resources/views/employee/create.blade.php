@extends('employee.master')
@section('content')

<div class="card">
    <div class="card-header">
        <b>Add Employee</b>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('employee.store')}}" enctype="multipart/form-data">
            @csrf           
            <div class="row-mb-3">
                <label for="EmployeeName" class="col-sm-2 col-label-form">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="EmployeeName" id="EmployeeName" class="form-control"/>
                </div>
            </div>
            <div class="row-mb-3">
                <label for="EmployeeEmail" class="col-sm-2 col-label-form">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="EmployeeEmail" id="EmployeeEmail" class="form-control"/>
                </div>
            </div>
            <div class="row-mb-3">
                <label for="EmployeeGender" class="col-sm-2 col-label-form">Gender</label>
                <div class="col-sm-10">
                    <input type="text" name="EmployeeGender" id="EmployeeGender" class="form-control"/>
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="{{route('employee.index')}}" class="btn btn-secondary">Return</a>
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>  
</div>
@endsection('content')
