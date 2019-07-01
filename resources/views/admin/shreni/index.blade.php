@extends('layouts.app')
@section('page_title')
श्रेणी
@endsection

@section('breadcum_title')
<li><a href="{{route('shreni.index')}}">श्रेणी</a></li>

@endsection

@section('form_title')
श्रेणी बिबरण।
@endsection

@section('content')

    <!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">श्रेणी बिबरण।</h3>
    <a href="{{route('shreni.create')}}" class=" btn btn-md btn-info" style="float:right;display:inline-table; font-family:'Lohit Devanagari';"><span class="fa fa-plus"></span> नयाँ श्रेणी</a>
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
                  <th>श्रेणी</th>
                  <th>Status</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($shrenis as $shreni)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$shreni->shreni_name}}</td>
                  <td>
                    @if ($shreni->status=='1')
                    <span class="label label-success">Available</span>
                    @else
                    <span class="label label-warning">UnAvailable</span>
                    @endif
                  </td>
                  <td><a href="{{route('shreni.edit',['shreni'=>$shreni->id ]) }}"
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

