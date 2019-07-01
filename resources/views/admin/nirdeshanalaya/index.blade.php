@extends('layouts.app')
@section('page_title')
निर्देशनालय
@endsection

@section('breadcum_title')
<li><a href="{{route('ministry.index')}}">निर्देशनालय</a></li>

@endsection

@section('form_title')
निर्देशनालय बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box box-info" id="uniform-style">
  <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">निर्देशनालय बिबरण।</h3>
    <a href="{{route('nirdeshanalaya.create')}}" class=" fa fa-plus btn btn-md btn-info"
      style="float:right;display:inline-table;"> नयाँ निर्देशनालय</a>
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
                        <th>मन्त्रालय</th>
                        <th>निर्देशनालय </th>
                        <th>Status</th>
                        <th>Edit</th>
                        {{-- <th>Delete</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($nirdeshanalayas as $nir)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$nir->ministry->ministry_name}}</td>
                            <td>{{$nir->nir_name}}</td>
                            <td>
                                @if ($nir->status=='1')
                                    <span class="label label-success">Available</span>
                                @else
                                    <span class="label label-warning">UnAvailable</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('nirdeshanalaya.edit',['nirdeshanalaya'=>$nir->id ]) }}" class="fa fa-edit">Edit</a>
                            </td>
                            {{-- <td>
                                <form action="{{route('nirdeshanalaya.destroy',['nirdeshanalaya'=>$nir->id ])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button  class="btn btn-sm btn-danger" type="submit">Delete</button>
                                </form>
                            </td> --}}
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
