@extends('layouts.report_layout')
@section('document_report_title')
मन्त्रालय
@endsection
@section('report_heading')
मन्त्रालय
@endsection

@section('report_body')
@section('report_title')
मन्त्रालय
@endsection

@section('back_button')
{{ route('ministry.index') }}
@endsection

<div class="form-group">
    <div id="form-info">मन्त्रालयको बिबरण</div>

    <hr>
    <table class="table table-hover table-bordered">
        <thead align="left" id="table_head">
            <tr style="height:10%">
                <th>क्रम सं</th>
                <th>मन्त्रालय</th>
                <th>कार्यालय</th>
            </tr>
        </thead>
        <tbody align="left">

            @foreach($ministries as $ministry)
            <tr >
                <td>{{$loop->iteration}}</td>
                <td>{{$ministry->ministry_name}}</td>
                <td>
                    @foreach ($ministry_karyalayas as $ministry_karyalaya)
                    @if ($ministry_karyalaya->ministry_id == $ministry->id)
                    <li>{{$ministry_karyalaya->kar_name}}</li>
                    @endif
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection