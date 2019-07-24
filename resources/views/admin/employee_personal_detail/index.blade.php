@extends('layouts.app')
@section('page_title')
कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">कर्मचारी</a></li>
@endsection

@section('form_title')
कर्मचारी बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">कर्मचारी बिबरण।</h3>
    <a href="{{route('employeepersonaldetail.create')}}" class="btn btn-md btn-primary"
      style="float:right;display:inline-table;">नयाँ कर्मचारी थप्नुहोस</a>

  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body" id="uniform-style">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>सि.</th>
                  <th>संकेत न</th>
                  <th>प्रदेश संकेत नं
                  </th>
                  <th>कर्मचारी प्रकार</th>
                  <th>नाम</th>
                  <th>नियुक्ति मिति</th>
                  <th>कार्यालय</th>
                  <th>सेवा</th>
                  <th>समूह</th>
                  <th>उपसमूह</th>
                  <th>मन्त्रालय</th>
                  <th>निर्देशनालय</th>


                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($emp_personal_records as $employee)
                @if($employee->employee_status == '1')
                  <tr>
                @else
                  <tr bgcolor="red">
                @endif
                
                  <td>{{$loop->iteration}}</td>
                  <td>{{$employee->employee_number}}</td>
                  <td>{{$employee->employee_id}}</td>
                  <td>
                    @if($employee->employee_type == "samayojan")
                    समायोजन
                    @elseif($employee->employee_type == "kaam_kaaj")
                    कामकाज
                    @elseif($employee->employee_type == "naya")
                    नयाँ
                    @elseif($employee->employee_type == "karar")
                    करार
                    @endif
                  </td>
                  <td>{{$employee->personal_detail['first_name']}}</td>
                  <td>{{$employee->appointed_date}}</td>
                  <td>{{$employee->karyalaya['kar_name']}}</td>
                  <td> {{$employee->sewa['sewa_name']}} </td>
                  <td>{{$employee->samuha['samuha_name']}}</td>
                  <td>{{$employee->upasamuha['upasamuha_name']}}</td>
                  <td>{{$employee->ministry['ministry_name']}}</td>
                  <td>{{$employee->nirdeshanalaya['nir_name']}}</td>
                  {{-- <td><img src="/{{$employee->image}}" alt="Image" style="height:50px;width:50px"></td> --}}
                  <td>
                    {{-- <a href="{{route('employeepersonaldetail.edit',['employee'=>$employee->id ]) }}"
                    class="fa fa-edit">Edit </a> --}}
                    <a href="{{route('employeeallrecords.operate',['employee'=>$employee->employee_id ]) }}"
                      class=" fa fa-user">
                      operate</a>
                    <a href="{{route('employeeallrecord.view_employee_report',['employeeallrec'=>$employee->employee_id ]) }}"
                      class="fa fa-eye">View</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
</div>
<!-- /.content -->
{{-- </div> --}}
<!-- /.content-wrapper -->
@endsection