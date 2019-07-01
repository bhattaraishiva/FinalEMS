@extends('layouts.app')
@section('page_title')
सेवा
@endsection

@section('breadcum_title')
<li><a href="{{route('sewa.index')}}">सेवा</a></li>

@endsection

@section('form_title')
सेवा बिबरण।
@endsection

@section('content')
    <!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">सेवा बिबरण।</h3>
    <a href="{{route('sewa.create')}}" class=" fa fa-plus btn btn-md btn-info" style="float:right;display:inline-table;"> नयाँ सेवा</a>
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
                  <th>सेवा</th>
                  <th>Status</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($sewas as $sewa)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$sewa->sewa_name}}</td>
                  <td>
                    @if ($sewa->status=='1')
                    <span class="label label-success">Available</span>
                    @else
                    <span class="label label-warning">UnAvailable</span>
                    @endif
                  </td>
                  <td><a href="{{route('sewa.edit',['sewa'=>$sewa->id ]) }}"
                      class="fa fa-edit">Edit</a><span>  | </span>
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


