@extends('layouts.report_layout')

@section('document_report_title')
बिस्तृत रिपोर्ट
@endsection
@section('report_heading')
    @if ($searched_karyalaya->count()>0)
    {{ $searched_karyalaya[0]->kar_name}} कार्यालय, {{$searched_karyalaya[0]->karyalaya_address}}
    @else
        @if ($searched_ministry->count()>0)
        {{ $searched_ministry[0]->ministry_name}} 
        @endif
    @endif
@endsection

@section('report_body')
@section('report_title')
    @if ($searched_karyalaya->count()>0)
    {{ $searched_karyalaya[0]->kar_name}} कार्यालय, {{$searched_karyalaya[0]->karyalaya_address}}
    @else
        @if ($searched_ministry->count()>0)
        {{ $searched_ministry[0]->ministry_name}} 
        @endif
    @endif
@endsection

@section('back_button')
{{ route('masterreport.index') }}
@endsection

<div class="form-group">
    <div id="form-info">कार्यालयको बिबरण</div>
    <div class="row">
        <div class="col-md-3">
            <label for="name">नाम:</label>
            <span id="style_span">
                @if ($searched_karyalaya->count()>0)
                    {{$searched_karyalaya[0]->kar_name}}
                @else
                    --    
                @endif
            </span>
        </div>

         <div class="form-group col-md-3">
            <label for="name">मन्त्रालय :</label><span id="style_span">
                @if ($searched_ministry->count()>0)
                {{$searched_ministry[0]->ministry_name}}
  
                @else
                 --   
                @endif
            </span>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय :</label>
                <span id="style_span">
                    @if ($searched_nirdeshanalaya->count()>0)
                    {{$searched_nirdeshanalaya[0]->nir_name}}
          
                    @else
                    -                        
                    @endif
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">पद:</label>
                <span id="style_span">
                    @if ($searched_pad->count()>0)
                    {{$searched_pad[0]->pad_name}}
                      
                    @else
                    --                        
                    @endif
                </span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">तह/श्रेणी: </label>
                <span id="style_span">
                    @if ($searched_taha->count()>0)
                    {{$searched_taha[0]->taha_name}}/
                       
                    @else
                    --/                       
                    @endif
                    @if ($searched_shreni->count()>0)
                    {{$searched_shreni[0]->shreni_name}}
                       
                    @else
                    --                     
                    @endif
                </span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">सेवा/समूह/उपसमूह: </label>
                <span id="style_span">
                    @if ($searched_sewa->count()>0)
                    {{$searched_sewa[0]->sewa_name}} / 
                    @else
                        --/
                    @endif
                    @if ($searched_samuha->count()>0)
                    {{$searched_samuha[0]->samuha_name}} / 
                    @else
                        --/
                    @endif
                    @if ($searched_upasamuha->count()>0)
                    {{$searched_upasamuha[0]->upasamuha_name}}  
                    @else
                        --
                    @endif
                </span>
            </div>
        </div> 

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">जम्मा  कर्मचारी संख्या : </label>
                <span id="style_span">
                    @if ($search_results->count() > 0 )
                    {{$search_results->count()}} 
                    @else
                        -
                    @endif

                </span>
            </div>
        </div> 
</div>

<hr>
<p style="text-decoration:underline;font-size:large">कार्यरत कर्मचारी विवरण </p>
<table class="table table-hover table-bordered">
    <thead >
        <tr>
            <td>क्रम सं</td>
            <td>नाम थर </td>
            <td>संकेत न </td>
            <td>पद</td>
            <td>तह/श्रेणी </td>
            <td>प्रकार </td>
            <!-- <td>कार्यरत अवधि</td> -->
        </tr>
    </thead>

    <tbody>
        @if(! $search_results->count() > 0 )
        <tr>जानकारी उपलब्ध हुन सकेन </tr>

        @else
        @foreach($search_results as $karyalaya_employee)
        <tr id="table_height">
            <td>{{$loop->iteration}}</td>
            <td>{{$karyalaya_employee->personal_detail['first_name']}}
                {{$karyalaya_employee->personal_detail['middle_name']}}
                {{$karyalaya_employee->personal_detail['last_name']}}
            </td>
            <td>{{$karyalaya_employee->personal_detail['employee_number']}}</td>
            <td>
                @if ($karyalaya_employee->pad_id == null)
                -
                @else
                {{$karyalaya_employee->pad['pad_name']}}
                @endif
            </td>
            <td>
                @if ($karyalaya_employee->taha_id == null)
                -
                @else
                {{$karyalaya_employee->taha['taha_name']}}
                @endif
                /
                @if ($karyalaya_employee->shreni_id == null)
                -
                @else
                {{$karyalaya_employee->shreni['shreni_name']}}

                @endif
            </td>

            <td>
                @if ($karyalaya_employee->employee_type == 'naya')
                नयाँ
                @elseif($karyalaya_employee->employee_type == 'samayojan')
                समायोजन
                @elseif($karyalaya_employee->employee_type == 'karar')
                करार
                @elseif($karyalaya_employee->employee_type == 'kaam_kaj')
                काम काज
                @endif

        </tr>
        @endforeach
        @endif
    </tbody>
</table>

</div>
@endsection