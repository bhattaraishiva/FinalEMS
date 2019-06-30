@extends('layouts.app')
@section('page_title')
कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employee.index')}}">कर्मचारी</a></li>

@endsection
@section('content')
<div class="box">

  <div class="box-header with-border">
    <h3 class="box-title">कर्मचारी बिबरण।</h3>
    <a href="{{route('employee.create')}}" class="btn btn-md btn-success" style="float:right;display:inline-table;">नया
      कर्मचारी थप्नुहोस</a>
  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>सिन</th>
                <th>कर्मचारी संकेत् न</th>
                <th>प्रदेश संकेत् न</th>
                <th>नाम</th>
                <th>कार्यालय</th>
                <th>नियुक्ती गरिएको</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Operate</th>
                <th>ViewReport</th>
              </tr>
            </thead>
            <tbody>

              @foreach($employees as $employee)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$employee->employee_number}}</td>
                <td>{{$employee->id}}</td>
                <td>{{$employee->first_name}} {{$employee->middle_name}} {{ $employee->last_name}}</td>
                <td>{{$employee->karyalaya['kar_name']}}</td>
                <td>{{$employee->hire_date}}</td>
                <td>
                  @if ($employee->emp_status=='1')
                  <span class="badge badge-success">Active</span>

                  @else
                  <span class="badge badge-warning">Inactive</span>

                  @endif
                </td>
                <td><a href="{{route('employee.edit',['employee'=>$employee->id ]) }}" class="fa fa-edit">Edit</a>
                </td>
                <td><a href="{{route('employeerecord.operate',['employee'=>$employee->id ]) }}"
                    class=" fa fa-arrows-alt">Operate</a></td>
                <td><a href="{{route('employeerecord.view_employee_report',['employeerec'=>$employee->id ]) }}"
                    class="fa fa-eye">View</a></td>

                </form>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection