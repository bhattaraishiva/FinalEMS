<h3 id="section_header2">नयाँ</h3>
<div class="row">
        <div class="col-sm-3">
                <label for="name">सिफारिस मिति : <sup>*</sup></label>
                <input type="text" class="form-control" name="naya_sifaris_date" nepali-calendar" id="nepaliDate23"
                    placeholder="YYYY-MM-DD">
            </div>
        <div class="col-sm-3">
                <label for="name">नियुक्ति मिति : <sup>*</sup></label>
                <input type="text" class="form-control" name="naya_appointed_date" nepali-calendar" id="nepaliDate24"
                    placeholder="YYYY-MM-DD">
        </div>

    <div class="col-sm-2">
        <label for="name">सेवा  : <sup>*</sup></label>
        <select name="naya_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='naya_samuha_id'>
            <option value="">सेवा छान्नुहोस्:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="naya_samuha" id="naya_samuha_id" class="form-control  dynamic"
            data-dependent='naya_upasamuha_id'>
            <option>पहिले सेवा छान्नुहोस् </option>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="naya_upasamuha" id="naya_upasamuha_id" class="form-control">
            <option>पहिले समुह छान्नुहोस् </option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="naya_shreni" id="naya_shreni" class="form-control">
            <option value="">छैन </option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह : <sup>*</sup></label>
        <select name="naya_taha" id="naya_taha" class="form-control">
            <option value="">छैन</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय : <sup>*</sup></label>
        <select name="naya_ministry_id" id="ministry_id" class="form-control  dynamic" data-dependent='naya_kar_id'>
            <option value="">मन्त्रालय छान्नुहोस्</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय : <sup>*</sup></label>
            <select name="naya_nirdeshanalaya" id="naya_nirdeshanalaya_id" class="form-control  dynamic">
                <option value="">छैन</option>
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय : <sup>*</sup></label>
            <select name="naya_karyalaya" id="naya_kar_id" class="form-control  dynamic" data-dependent="naya_pad_id">
            <option>पहिले मन्त्रालय छान्नुहोस् </option>
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद : <sup>*</sup></label>
            <select name="naya_pad" id="naya_pad_id" class="form-control">
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
        <label for="name"> हाजिर भएको मिति : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate25" placeholder="YYYY-MM-DD"
            name="naya_attendance_date" >
    </div>

</div>