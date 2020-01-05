@extends('layouts.app')
@section('page_title')
मास्टर रिपोर्ट 
@endsection
@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">कर्मचारी</a></li>
@endsection
@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group ">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger alert-dismissible">
        {{$error}}
        <button type="button" class="close" data-dismiss="alert">X</button>
    </li>
    @endforeach
</ul>
@endif

<div class="box box-info">
    <div class="box with-border" >
        <h2 class="box-title" id="uniform-style" style="text-align:center">विस्तृत खोजी</h2>
    </div>
    <div class="card-body" >
        <form action="{{route('master.search')}}" method="post">
            @csrf
            @method('POST')
            <div class="box-body">
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">मन्त्रालय : </label>
                            <select name="mastersearch_ministry" id="ministry_id" class="form-control  dynamic"
                                data-dependent='mastersearch_karyalaya_id'>
                               <option value="">मन्त्रालय</option>
                                 @foreach ($ministries as $ministry)
                                <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">निर्देशनालय: : </label>
                            <select name="mastersearch_nirdeshanalaya" id="nirdeshanalaya_id" class="form-control ">
                                <option value="">निर्देशनालय</option>
                                @foreach ($nirdeshanalayas as $nirdeshanalaya)
                                <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">कार्यालय : </label>
                            <select name="mastersearch_karyalaya" id="mastersearch_karyalaya_id" class="form-control  dynamic"
                                data-dependent="mastersearch_pad_id">
                                <option value="">कार्यालय</option>
                                @foreach ($karyalayas as $karyalaya)
                                <option value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">पद :</label>
                            <select name="mastersearch_pad" id="mastersearch_pad_id" class="form-control ">
                                <option value="">पद</option>
                                @foreach ($pads as $pad)
                                <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="name">सेवा :</label>
                            <select name="mastersearch_sewa" id="sewa_id" class="form-control  dynamic"
                                data-dependent='mastersearch_samuha_id'>
                                <option value="">सेवा छान्नुहोस् </option>
                                @foreach ($sewas as $sewa)
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">समुह :</label>
                            <select name="mastersearch_samuha" id="mastersearch_samuha_id" class="form-control  dynamic"
                                data-dependent='mastersearch_upasamuha_id'>
                                <option value="">समुह छान्नुहोस्</option>
                                @foreach ($samuhas as $samuha)
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">उप-समुह :</label>
                            <select name="mastersearch_upasamuha" id="mastersearch_upasamuha_id" class="form-control">
                                <option value="">उप-समुह छान्नुहोस्</option>
                                @foreach ($upasamuhas as $upasamuha)
                                <option value="{{$upasamuha->id}}">{{$upasamuha->upasamuha_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="shreni">श्रेणी :</label>
                            <select name="mastersearch_shreni" id="mastersearch_shreni" class="form-control">
                                <option value="">श्रेणी</option>
                                @foreach ($shrenis as $shreni)
                                <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">तह :</label>
                            <select name="mastersearch_taha" id="mastersearch_taha" class="form-control">
                                <option value="">तह</option>
                                @foreach ($tahas as $taha)
                                <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">कर्मचारी प्रकार:</label>
                            <select name="master_search_employee_type" id="master_search_employee_type" class="form-control">
                                <option value="">कर्मचारीको प्रकार</option>
                                <option value="kaam_kaj">काम काज</option>
                                <option value="samayojan">समायोजन</option>
                                <option value="karar">करार</option>
                                <option value="naya">नयाँ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name"> कार्यालय हाजिर मिति:</label>
                            <div id="datepicker">
                                <input class="form-control" type="text" name="mastersearch_attendance_date_nep" id="np-datepicker" placeholder="क्यालेण्डर बाट मिति छान्नुहोस् "/>
                                <input id="dateAD" type="text" name="mastersearch_attendance_date_eng" hidden="" />
                                    {{-- <fieldset> --}}
                                    {{-- <legend class="slide">Nepali(BS) jDatepicker Demo</legend> --}}
                                    {{-- <div class="toggle">
                                      <div class="input"><span class="label">Nepali Date: </span><input id="np-datepicker" type="text"/> </div>
                                      <div class="input"><span class="label">English Date: </span><input id="dateAD" type="text" readonly="readonly" placeholder="filled by jDatepicker"/> </div>
                                    </div> --}}
                                    {{-- </fieldset> --}}
                            </div>
                                
                        </div>

                    </div>
                </div>
                <div class="box-footer form-group">
                    <div class="col-md-6">
                        <input class=" form-control btn btn-warning"  type="reset" value="खाली गर्नुहोस् " style="font-size:18px;">

                    </div>
                    <div class="col-md-6">
                        <button class=" form-control btn btn-success" type="submit" style="font-size:18px;">खोज्नुहोस् </button>
                    </div>
                </div>
            </div>

        </form>

    </div>

</div>

@endsection



