@extends('layouts.app')
@section('page_title')
तह
@endsection

@section('breadcum_title')
<li><a href="{{route('taha.index')}}">तह</a></li>

@endsection

@section('form_title')
तह बिबरण।
@endsection

@section('content')

    <!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">तह बिबरण।</h3>
    <a href="{{route('taha.create')}}" class=" fa fa-plus btn btn-md btn-info"
      style="float:right;display:inline-table;"> नयाँ तह</a>
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
                  <th>तह</th>
                  <th>Status</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tahas as $taha)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$taha->taha_name}}</td>
                  <td>
                    @if ($taha->status=='1')
                    <span class="label label-success">Available</span>
                    @else
                    <span class="label label-warning">UnAvailable</span>
                    @endif
                  </td>
                  <td><a href="{{route('taha.edit',['taha'=>$taha->id ]) }}"
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

