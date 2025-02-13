@extends ('employee.master')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6">Employee's Information</div>
            <div class="col col-md-6">
                <a href="{{route('employee.index')}}" class="btn btn-primary btn-sm float-end">View all</a>
            </div> 
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>ID</b></div>
            <div class="col-sm-10">
                {{$employee->EmployeeID}}
            </div>           
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Name</b></div>
            <div class="col-sm-10">
                {{$employee->EmployeeName}}
            </div>           
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Email</b></div>
            <div class="col-sm-10">
                {{$employee->EmployeeEmail}}
            </div>           
        </div>
        <div class="row mb-3">
            <div class="col-sm-2 col-label-form"><b>Gender</b></div>
            <div class="col-sm-10">
                {{$employee->EmployeeGender}}
            </div>           
        </div>
        <a href="{{route('employee.index')}}" class="btn btn-secondary">Return</a>
    </div>
</div>

@endsection('content')
