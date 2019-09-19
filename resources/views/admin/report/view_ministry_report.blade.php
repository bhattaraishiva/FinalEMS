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
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title"> {{$ministry_karyalayas[0]->ministry->ministry_name}} बिबरण।</h3>
    <a href="" id="hide_on_print" onclick=printit(); target="_blank" class="fa fa-print" style="float:right;">print</a>
  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead id="table_head">
                <tr>
                  <th>सिन</th>
                  {{-- <th>मन्त्रालय</th> --}}
                  <th>कार्यालय</th>
                  {{-- <th>Status</th> --}}
                  <th id="hide_on_print">Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ministry_karyalayas as $ministry_karyalaya)
                <tr id="table_height">
                  <td>{{$loop->iteration}}</td>
                  {{-- <td>{{$ministry_karyalaya->ministry->ministry_name}}</td> --}}
                  <td>{{$ministry_karyalaya->kar_name}},{{$ministry_karyalaya->karyalaya_address}}</td>

                  <td id="hide_on_print">
                    <a href="{{route('ministry_karyalaya.view_karyalaya_report',['karyalaya'=>$ministry_karyalaya->id ]) }}"
                      class="fa fa-eye">View</a><span> | </span>
                    {{-- <a href="{{route('ministry.view_detail_ministry_report',['ministry'=>$ministry->id ]) }}"
                    class="fa fa-print">Print
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