<h3 id="section_header2">काम काज</h3>
@include('admin.includes.employee_first_appointed_info.create')
<hr>
@include('admin.includes.employee_before_pradesh.create')
<hr>

<h3 id="section_header3">संघबाट प्रदेशमा कामकाज गर्न खटाइएको विवरण </h3>
<div class="row">
    <div class="col-sm-3">

        <label for="name">कामकाज गर्न खटाइएको निर्णय मिति  : <sup>*</sup></label>
        <input  type="text" class="form-control" name="kaamkaj_appointed_date" nepali-calendar" id="nepaliDate10" 
            placeholder="YYYY-MM-DD">

    </div>
    <div class="col-sm-3">
        <label for="name">मु.म.म.प.का.मा हाजिर भएको मिति : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate11" placeholder="YYYY-MM-DD"
            name="kaamkaj_chief_ministry_attendance_date" >
    </div>
    <div class="col-sm-2">
        <label for="name">सेवा  : <sup>*</sup></label>
        <select name="kaamkaj_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='kaam_kaj_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="col-sm-2">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="kaamkaj_samuha" id="kaam_kaj_samuha_id" class="form-control  dynamic"
            data-dependent='kaam_kaj_upasamuha_id'>

        </select>
    </div>

    <div class="col-sm-2">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="kaamkaj_upasamuha" id="kaam_kaj_upasamuha_id" class="form-control">

        </select>
    </div>

</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="kaamkaj_shreni" id="kaamkaj_shreni" class="form-control">
            <option value="">श्रेणी :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह : : <sup>*</sup></label>
        <select name="kaamkaj_taha" id="kaamkaj_taha" class="form-control">
            <option value="">तह :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय : : <sup>*</sup></label>
        <select name="kaamkaj_ministry_id" id="ministry_id" class="form-control  dynamic" data-dependent='kar_id'>
            <option value="">मन्त्रालय:</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय: : <sup>*</sup></label>
            <select name="kaamkaj_nirdeshanalaya" id="nirdeshanalaya_id" class="form-control  dynamic" >
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय : <sup>*</sup></label>
            <select name="kaamkaj_karyalaya" id="kar_id" class="form-control  dynamic" >
            </select>
        </div>
    </div>

    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद : : <sup>*</sup></label>
            <select name="kaamkaj_pad" id="pad_id" class="form-control">
                @foreach ($pads as $pad)
                    <option value="{{$pad->id}}"> {{$pad->pad_name}}</option> 
                @endforeach
            </select>

        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-4">
        <label for="name">कामकाज गर्न खटाएको मिति(मु.म.म.प.का.बाट)  : <sup>*</sup></label>
        <input class="form-control nepali-calendar" name="kaamkaj_chief_ministry_implement_date" type="text" id="nepaliDate12" 
            placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-4">
        <label for="name">कार्यालयमा हाजिर मिति : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate13" placeholder="YYYY-MM-DD"
            name=" kaamkaj_attendance_date" >
    </div>

</div>