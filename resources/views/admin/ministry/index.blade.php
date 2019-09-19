@extends('layouts.app')
@section('page_title')
मन्त्रालय
@endsection

@section('breadcum_title')
<li><a href="{{route('ministry.index')}}">मन्त्रालय</a></li>

@endsection

@section('form_title')
मन्त्रालय बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">मन्त्रालय बिबरण।</h3>
    <a href="{{route('ministry.create')}}" class=" btn btn-md btn-info"
      style="float:right;display:inline-table;"><span class="fa fa-plus"></span> नयाँ मन्त्रालय</a>
      <a href="{{route('ministry.view_report')}}" class="fa fa-eye btn btn-success" style="float:right;"> मन्त्रालय रिपोर्ट  </a>

  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body login-font">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>क्र.सं.</th>
                  <th>मन्त्रालय</th>
                  <th>Status</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ministries as $ministry)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ministry->ministry_name}}</td>
                  <td>
                    @if ($ministry->status=='1')
                    <span class="label label-success">Available</span>
                    @else
                    <span class="label label-warning">UnAvailable</span>
                    @endif
                  </td>
                  <td><a href="{{route('ministry.edit',['ministry'=>$ministry->id ]) }}"
                      class="fa fa-edit">Edit</a><span>  | </span>
                      <a href="{{route('ministry.view_ministry_report',['ministry'=>$ministry->id ]) }}"
                        class="fa fa-eye">View</a><span>  | </span>
                         {{-- <a href="{{route('ministry.view_detail_ministry_report',['ministry'=>$ministry->id ]) }}"
                          class="fa fa-print">Detail
                        </a> --}}
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





