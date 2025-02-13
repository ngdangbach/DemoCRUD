@extends ('employee.master')
@section ('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
    {{$message}}
</div>
@endif

<h1 class="text-primary mt-3 mb-4 text-center"><b>Employee Management</b></h1><br>

<div class="card">
  <div class="card-header">
    <a href="{{route('employee.create')}}" class="btn btn-success btn-sm">Add</a>
  </div>
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($employees)>0)
                @foreach ($employees as $employee)
                <tr>
                    <td scope="row">{{$employee->EmployeeID}}</td>
                    <td>{{$employee->EmployeeName}}</td>
                    <td>{{$employee->EmployeeEmail}}</td>
                    <td>{{$employee->EmployeeGender}}</td>
                    <td>
                        <form method="POST" action="{{ route('employee.show',$employee->EmployeeID) }}">
                            @csrf
                            @method('GET')                           
                            <a href ="{{ route('employee.show',$employee->EmployeeID) }}" class=""></a>
                            <button type="submit" class="btn btn-success btn-sm" >Show</button>
                        </form>    
                        <form method="POST" action="{{ route('employee.edit',$employee->EmployeeID) }}">
                            @csrf 
                            @method('GET')                                                   
                            <a href ="{{ route('employee.edit',$employee->EmployeeID) }}" class=""></a>                            
                            <button type="submit" class="btn btn-warning btn-sm" >Edit</button>
                        </form>                
                        <form method="POST" action="{{ route('employee.destroy', $employee->EmployeeID) }}">
                            @csrf 
                            @method('DELETE')                          
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>                   
                    </td>
                </tr>
                @endforeach
            @else 
                <tr>
                    <td>No Data Found</td>
                </tr>
            @endif
        </tbody>
    </table>
  </div>
</div>
@endsection('content')


