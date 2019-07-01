@extends('layouts.app')
@section('page_title')
उप-समुह
@endsection

@section('breadcum_title')
<li><a href="{{route('upasamuha.index')}}">उप-समुह</a></li>
@endsection

@section('form_title')
उप-समुह बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box" id="uniform-style">
    <div class="box-header with-border">
    <h3 class="box-title" id="uniform-style">उप-समुह बिबरण।</h3>
    <a href="{{route('upasamuha.create')}}" class=" fa fa-plus btn btn-md btn-info"
      style="float:right;display:inline-table;"> नयाँ उप-समुह</a>
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
                                    <th>समुह</th>
                                    <th>उप-समुह</th>
                                    <th>स्थिति</th>
                                    <th>सम्पादन</th>
                                    {{-- <th>Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($upasamuhas as $upasamuha)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$upasamuha->sewa['sewa_name']}}</td>
                                    <td>{{$upasamuha->samuha['samuha_name']}}</td>
                                    <td>{{$upasamuha->upasamuha_name}}</td>
                                    <td>
                                        @if ($upasamuha->status=='1')
                                        <span class="label label-success">Available</span>
                                        @else
                                        <span class="label label-warning">UnAvailable</span>

                                        @endif
                                    </td>
                                    <td><a href="{{route('upasamuha.edit',['upasamuha'=>$upasamuha->id ]) }}"
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