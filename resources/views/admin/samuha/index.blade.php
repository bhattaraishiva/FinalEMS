@extends('layouts.app')
@section('page_title')
समुह
@endsection

@section('breadcum_title')
<li><a href="{{route('samuha.index')}}">समुह</a></li>

@endsection

@section('form_title')
समुह बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">समुह बिबरण।</h3>
    <a href="{{route('samuha.create')}}" class=" fa fa-plus btn btn-md btn-info"
      style="float:right;display:inline-table;"> नयाँ समुह</a>
  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead id ="uniform-style">
                    <tr>
                        <th>क्र.सं.</th>
                        <th>सेवा</th>
                        <th>समुह </th>
                        <th>Status</th>
                        <th>Edit</th>
                        {{-- <th>Delete</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($samuhas as $samuha)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$samuha->sewa->sewa_name}}</td>
                            <td>{{$samuha->samuha_name}}</td>
                            <td>
                                @if ($samuha->status=='1')
                                    <span class="label label-success">Available</span>
                                @else
                                    <span class="label label-warning">UnAvailable</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('samuha.edit',['samuha'=>$samuha->id ]) }}" class="fa fa-edit">Edit</a>
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

