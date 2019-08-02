@extends('layouts.report_layout')
@section('document_report_title')
कार्यालय रिपोर्ट
@endsection
@section('report_heading')

{{ $karyalaya->kar_name}} कार्यालय
@endsection

@section('report_body')
@section('report_title')
कार्यालय
@endsection

@section('back_button')
{{ route('ministry.index') }}
@endsection

<div class="form-group">
    <div id="form-info">कार्यालयको बिबरण</div>
    <div class="row">
        <div class="col-md-4">
            <label for="name">कार्यालय : </label><span> {{  $karyalaya->kar_name}},{{$karyalaya->karyalaya_address}}
                [{{ $karyalaya->karyalaya_code}}]</span>
        </div>
        <div class="col-md-4">
            <label for="name">मन्त्रालय :</label><span> {{$karyalaya->ministry->ministry_name}}</span>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">निर्देशनालय :</label><span>
                    @foreach ($nirdeshanalayas as $nir)
                    @if ($nir->id == $karyalaya->nirdeshanalaya_id)
                    {{$nir->nir_name}}
                    @endif
                    @endforeach
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">दरबन्दि संख्या :</label><span>
                    {{$karyalaya->employee_number}}
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">रिक्त पद संख्या :</label><span>
                    {{$emptypad}}
                </span>
            </div>
        </div>

        {{-- <div class="col-md-3">
                <div class="form-group">
                    <label for="name">पद :</label><span>
                        @foreach ($karyalaya_employees as $karyalaya_employee)
                        <li>{{$karyalaya_employee->pad->pad_name}}</li>
        @endforeach
        </span>
    </div>
</div> --}}

</div>
</div>
<hr>
<table class="table table-hover table-bordered">
    <thead align="left">
        <tr>
            <th>क्रम सं</th>
            <th>पद</th>
            <th>जम्मा</th>
            <th>कार्यरत संख्या</th>
            <th>रिक्त संख्या</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kar_allpads as $pad)
        <tr align="left">
            <td>{{$loop->iteration}}</td>
            {{-- pads return multiple records as it is hasmany relation ship so use first() or get(0)to get the value --}}
            <td >
                {{$pad->pads->first()->pad_name}}
            </td>
            <td>
                {{$pad->pad_qty}}
            </td>
            <td>
                @php
                $emptypad=0;
                @endphp
                @if ($karyalaya_allworking_pads->count() > 0)
                    @for ($i = 0; $i < $karyalaya_allworking_pads->count(); $i++)
                        @php
                            $emptypad=0;
                            if ($karyalaya_allworking_pads[$i]->pad_id == $pad->pad_id){

                                $working_pad = $karyalaya_allworking_pads[$i]->total;
                                // $emptypad = $working_pad - $pad->pad_qty ;
                                // echo($working_pad);
                                break;
                            }
                            else
                            $working_pad = 0;
                                // echo(0);
                        @endphp
                    @endfor
                @else
                    @php
                        $working_pad=0;
                    @endphp
                @endif
                            {{$working_pad}}
            </td>
            <td>
                @php
                $emptypad=0;
                @endphp
                @if ($karyalaya_allworking_pads->count() > 0)
                    @for ($i = 0; $i < $karyalaya_allworking_pads->count(); $i++)
                        @php
                        $emptypad=0;
                        if ($karyalaya_allworking_pads[$i]->pad_id == $pad->pad_id){

                        $working_pad = $karyalaya_allworking_pads[$i]->total;
                        $emptypad = $working_pad - $pad->pad_qty ;
                        // echo($emptypad);
                        break;
                        }

                        else
                        $emptypad= $pad->pad_qty;
                        @endphp
                    @endfor

                @else
                @php
                  $emptypad = $pad->pad_qty;
                @endphp
                @endif
                {{$emptypad}}
                {{-- @if ($emptypad > 0)
                    {{$emptypad}}
                @else
                {{$pad->pad_qty}}
                @endif --}}

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection