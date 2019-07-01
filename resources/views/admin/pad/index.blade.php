@extends('layouts.app')
@section('page_title')
पद
@endsection

@section('breadcum_title')
<li><a href="{{route('pad.index')}}">पद</a></li>
@endsection

@section('form_title')
पद बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">पद बिबरण।</h3>
        <a href="{{route('pad.view_report')}}" class="fa fa-eye btn btn-success" style="float:right;"> पद रिपोर्ट  </a>
        <a href="{{route('pad.create')}}" class="fa fa-plus btn btn-md btn-info" style="float:right;"> नयाँ पद </a>
    </div>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>क्र.सं.</th>
                                    <th>पद</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pads as $pad)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$pad->pad_name}}</td>
                                    <td>
                                        @if ($pad->status=='0')
                                        <span class="label label-success">Available</span>
                                        @else
                                        <span class="label label-warning">UnAvailable</span>
                                        @endif
                                    </td>
                                    <td><a href="{{route('pad.edit',['pad'=>$pad->id ]) }}"
                                            class="fa fa-edit">Edit</a>
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