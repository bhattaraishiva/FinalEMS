@extends('layouts.report_layout')

@section('report_heading')

कार्यालय
@endsection

@section('report_body')
@section('report_title')
कार्यालय
@endsection

@section('back_button')
{{ route('karyalaya.index') }}
@endsection

<div class="card-body" id="uniform-style">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>क्रम सं</th>
                <th>मन्त्रालय</th>
                <th>निर्देशनालय</th>
                <th>कार्यालय</th>
                <th>दरबन्दि संख्या</th>
                <th>कार्यरत संख्या</th>
                <th>रिक्त पद संख्या</th>
                <th id="hide_on_print">Report</th>
                <th id="hide_on_print">Detail Report</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyalayas as $kar)
            <tr id="table_height"
                <td>{{$loop->iteration}}</td>
                <td>{{$kar->ministry->ministry_name}}</td>
                <td>{{$kar->nirdeshanalaya->nir_name}}</td>
                <td>{{$kar->kar_name}},{{$kar->karyalaya_address}} [{{$kar->karyalaya_code}}]</td>
                <td>{{$kar->employee_number}}</td>
                <td>
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
                <td>@php
                    $c=0;
                    @endphp
                    @for ($i = 0; $i < $pad_info->count(); $i++)
                        @php
                        $c=0;
                        @endphp
                        @if ($pad_info[$i]->kar_id==$kar->id)
                        @php
                        $free=$kar->employee_number-$pad_info[$i]->total
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
                </td>
                <td id="hide_on_print"><a href="{{route('karyalaya.view_karyalaya_report',['karyalaya'=>$kar->id ]) }}"
                    class="fa fa-eye">view</a>
                </td>
                <td id="hide_on_print"><a href="{{route('karyalaya.view_detail_karyalaya_report',['karyalaya'=>$kar->id ]) }}" class="fa fa-eye">View detail</a></td>



            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection