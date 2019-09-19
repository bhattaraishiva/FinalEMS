@extends('layouts.report_layout')
@section('document_report_title')
पद रिपोर्ट
@endsection
@section('report_heading')

पद
@endsection

@section('report_body')
@section('report_title')
पद
@endsection

@section('back_button')
{{ route('pad.index') }}
@endsection

<div class="form-group">
    <div id="form-info">पदको बिबरण</div>
    <hr>
    <table class="table table-hover table-bordered">
        <thead align="left" id="table_head">
            <tr>
                <th>क्रम सं</th>
                <th>पद</th>
                <th>कार्यरत पद संख्या</th>
                <th>रिक्त पद संख्या</th>
                <th>जम्मा</th>
            </tr>
        </thead>
        <tbody align="left">
            @foreach($pads as $pad)
            <tr id="table_height">
                @php
                $i= $loop->iteration;
                $index=$i - 1;
                @endphp
                <td>{{$i}}</td>
                <td>
                    {{$pad->pad_name}}
                </td>
                <td>{{$working_pad_sum[$index]}}</td>
                <td>
                    @php
                    $e = $pad_sum[$index] - $working_pad_sum[$index];
                    @endphp
                    {{$e}}
                </td>
                <td>
                    {{$pad_sum[$index]}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection