@extends('layouts.app')
@section('page_title')
कार्यालय
@endsection

@section('breadcum_title')
<li><a href="{{route('employee.index')}}">कार्यालय</a></li>
@endsection

@section('form_title')
कार्यालय बिबरण।
@endsection

@section('content')
<!-- Main content -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">कार्यालय बिबरण।</h3>
        <a href="{{route('karyalaya.create')}}" class=" fa fa-plus btn btn-md btn-info"
            style="float:right;display:inline-table;"> नयाँ कार्यालय </a>

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
                                    <th>क्रम सं</th>
                                    <th>मन्त्रालय</th>
                                    <th>निर्देशनालय</th>
                                    <th>कार्यालय कोड</th>
                                    <th>कार्यालय</th>
                                    <th>दरबन्दि संख्या</th>
                                    {{-- <th>कार्यरत संख्या</th>
                                    <th>रिक्त पद संख्या</th> --}}
                                    <th>Operation</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($karyalayas as $kar)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$kar->ministry['ministry_name']}}</td>
                                    <td>
                                        @if($kar->nirdeshanalaya_id == null)
                                        -
                                        @else
                                        {{$kar->nirdeshanalayas['nir_name']}}
                                        @endif
                                    </td>
                                    <td>{{$kar->karyalaya_code}}</td>
                                    <td>{{$kar->kar_name}},{{$kar->karyalaya_address}}</td>
                                    <td>{{$kar->employee_number}}</td>
                                    {{-- <td>
                                        @php
                                        $a=0;
                                        @endphp
                                        @for ($i = 0; $i < $pad_info->count(); $i++)
                                            @php
                                            $a=0;
                                            @endphp

                                            @if ($pad_info[$i]->kar_id == $kar->id)
                                                @php
                                                $item=$pad_info[$i]->total;
                                                @endphp
                                                @php
                                                $a=$a+1;
                                                break;
                                                @endphp
                                            @endif
                                            @endfor
                                            @if ($a==1)
                                                {{$item}}
                                            @else
                                            -
                                            @endif
                                    </td>
                                    <td>
                                        @php
                                        $c=0;
                                        @endphp
                                        @for ($i = 0; $i < $pad_info->count(); $i++)
                                            @php
                                            $c=0;
                                            @endphp
                                            @if ($pad_info[$i]->kar_id==$kar->id)
                                            @php
                                            $free=$kar->employee_number - $pad_info[$i]->total
                                            @endphp
                                            @php
                                            $c=$c+1;
                                            break;
                                            @endphp
                                            @endif
                                            @endfor
                                            @if ($c==1)
                                            {{$free}}
                                            @else
                                            {{$kar->employee_number}}
                                            @endif
                                    </td> --}}
                                    <td>
                                        <a href="{{route('karyalaya.edit',['karyalaya'=>$kar->id ]) }}"
                                            class="fa fa-edit"></a><span>   | </span>
                                        <a href="{{route('ministry_karyalaya.view_karyalaya_report',['karyalaya'=>$kar->id ]) }}"
                                            class="fa fa-eye">View</a><span>  | </span>
                                        {{-- <a href="{{route('karyalaya.view_detail_karyalaya_report',['karyalaya'=>$kar->id ]) }}"
                                            class="fa fa-print"></a> --}}
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