<div id="header-style">
    <p  style="font-size:23px;">समायोजन विवरण </p>
</div>
<br>
{{-- @include('admin.includes.employee_first_appointed_info.create') --}}
<h3 id="section_header3">सुरु नियुक्ति विवरण</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="pad">पद   : <sup>*</sup></label>
        <select name="samayojan_first_pad" id="first_pad_id" class="form-control">
            <option value="">पद :</option>
            @foreach ($pads as $pad)
            <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">सेवा   : <sup>*</sup></label>
        <select name="samayojan_first_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='first_samayojan_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">समुह  : <sup>*</sup></label>
        <select name="samayojan_first_samuha" id="first_samayojan_samuha_id" class="form-control dynamic" data-dependent='first_samayojan_upasamuha_id'>
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">उप-समुह  : <sup>*</sup></label>
        <select name="samayojan_first_upasamuha" id="first_samayojan_upasamuha_id" class="form-control">
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी  : <sup>*</sup></label>
        <select name="samayojan_first_shreni" id="shreni" class="form-control">
            <option value="">श्रेणी :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह :  : <sup>*</sup></label>
        <select name="samayojan_first_taha" id="taha" class="form-control">
            <option value="">तह :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">नियुक्ती मिति  : <sup>*</sup></label>
        <input class="form-control nepali-calendar" name="samayojan_first_appointed_date" type="text" id="nepaliDate15"
            placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालय  : <sup>*</sup></label>
        <input type="text" name="samayojan_first_karyalaya_name" class=" form-control " id="start_karyalaya"
            placeholder="कार्यालय">
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालयमा हाजिर मिति   : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate16" placeholder="YYYY-MM-DD"
            name="samayojan_first_attendance_date" >
    </div>
</div>
{{-- samayojan_before pradesh employee info --}}
<hr>
{{-- @include('admin.includes.employee_before_pradesh.create') --}}
<h3 id="section_header3">प्रदेशमा काम काज गर्नु अघिको नोकरी विवरण </h3>
<div class="row">
    <div class="col-sm-3">
        <label for="pad">पद   : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_pad" id="before_pradesh_pad_id" class="form-control">
            <option value="">पद :</option>
            @foreach ($pads as $pad)
            <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">सेवा   : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_sewa" id="sewa_id" class="form-control  dynamic"
            data-dependent='samayojan_before_pradesh_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">समुह  : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_samuha" id="samayojan_before_pradesh_samuha_id" class="form-control  dynamic"
            data-dependent='samayojan_before_pradesh_upasamuha_id'>
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">उप-समुह  : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_upasamuha" id="samayojan_before_pradesh_upasamuha_id" class="form-control">
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-3">
        <label for="shreni">श्रेणी  : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_shreni" id="shreni" class="form-control">
            <option value="">श्रेणी :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">तह : <sup>*</sup></label>
        <select name="samayojan_before_pradesh_taha" id="taha" class="form-control">
            <option value="">तह :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालय : <sup>*</sup></label>
        <input type="text" name="samayojan_before_pradesh_karyalaya" class=" form-control " id="before_pradesh_karyalaya"
            placeholder="कार्यालय">
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालयमा हाजिर मिति : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate17" placeholder="YYYY-MM-DD"
            name="samayojan_before_pradesh_attendance_date" >
    </div>
</div>

<hr>
{{-- this is samayojan info --}}
<h3 id="section_header3">समायोजन विवरण</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="name">समायोजन निर्णय मिति  : <sup>*</sup></label>
        <input type="text" class="form-control" name="samayojan_appointed_date" nepali-calendar" id="nepaliDate14"
            placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-3">
        <label for="name">प्रदेशमा कामकाज गरिरहेको ?  :</label><br>
        <input type="checkbox" name="samayojan_worked_at_pradesh" id="worked_at_pradesh" value="yes"> हो
    </div>
    <div class="col-sm-2">
        <label for="name">सेवा   : <sup>*</sup></label>
        <select name="samayojan_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='samayojan_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह  : <sup>*</sup></label>
        <select name="samayojan_samuha" id="samayojan_samuha_id" class="form-control  dynamic"
            data-dependent='samayojan_upasamuha_id'>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह  : <sup>*</sup></label>
        <select name="samayojan_upasamuha" id="samayojan_upasamuha_id" class="form-control">
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी  : <sup>*</sup></label>
        <select name="samayojan_shreni" id="kaamkaj_shreni" class="form-control">
            <option value="">श्रेणी :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह : <sup>*</sup></label>
        <select name="samayojan_taha" id="kaamkaj_taha" class="form-control">
            <option value="">तह :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय :  <sup>*</sup></label>
        <select name="samayojan_ministry_id" id="ministry_id" class="form-control  dynamic" data-dependent='samayojan_kar_id'>
            <option value="">मन्त्रालय:</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय:  : <sup>*</sup></label>
            <select name="samayojan_nirdeshanalaya" id="samayojan_nirdeshanalaya_id" class="form-control  dynamic">
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय  : <sup>*</sup></label>
            <select name="samayojan_karyalaya" id="samayojan_kar_id" class="form-control  dynamic" >
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद : <sup>*</sup></label>
            <select name="samayojan_pad" id="samayojan_pad_id" class="form-control">
                    @foreach ($pads as $pad)
                    <option value="{{$pad->id}}"> {{$pad->pad_name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-3">
        <label for="name">मु.म.म.प.का.मा हाजिर भएको मिति  : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate18" placeholder="YYYY-MM-DD"
            name="samayojan_chief_ministry_attendance_date" >
    </div>

</div>