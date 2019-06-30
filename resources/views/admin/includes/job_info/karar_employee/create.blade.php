<h3 id="section_header2">करार</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="name">करार निर्णय मिति : <sup>*</sup></label>
        <input type="text" class="form-control" name="karar_appointed_date" nepali-calendar" id="nepaliDate19" 
            placeholder="YYYY-MM-DD">
    </div>
    <div class="col-sm-3">
        <label for="name">करार लागु हुने अवधिः मिति: <sup>*</sup></label>
        <input type="text" class="form-control" name="karar_start_date" nepali-calendar" id="nepaliDate20" 
            placeholder="YYYY-MM-DD">
        देखि<input type="text" class="form-control" name="karar_end_date" nepali-calendar" id="nepaliDate21" 
            placeholder="YYYY-MM-DD">सम्म
    </div>

    <div class="col-sm-2">
        <label for="name">सेवा : <sup>*</sup></label>
        <select name="karar_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='karar_samuha_id'>
            <option value="">सेवा:</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="karar_samuha" id="karar_samuha_id" class="form-control  dynamic" data-dependent='karar_upasamuha_id'>
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="karar_upasamuha" id="karar_upasamuha_id" class="form-control">
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="karar_shreni" id="karar_shreni" class="form-control">
            <option value="">श्रेणी :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह :<sup>*</sup></label>
        <select name="karar_taha" id="karar_taha" class="form-control">
            <option value="">तह :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2 ">
        <label for="name">मन्त्रालय : <sup>*</sup></label>
        <select name="karar_ministry_id" id="ministry_id" class="form-control  dynamic"
            data-dependent='karar_kar_id'>
            <option value="">मन्त्रालय:</option>
            @foreach ($ministries as $ministry)
            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">निर्देशनालय: <sup>*</sup></label>
            <select name="karar_nirdeshanalaya" id="karar_nirdeshanalaya_id" class="form-control  dynamic">
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">कार्यालय : <sup>*</sup></label>
            <select name="karar_karyalaya" id="karar_kar_id" class="form-control  dynamic">
            </select>
        </div>
    </div>
    <div class="col-md-2 ">
        <div class="form-group">
            <label for="name">पद :<sup>*</sup></label>
            <select name="karar_pad" id="karar_pad_id" class="form-control">
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
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate22" placeholder="YYYY-MM-DD"
            name="karar_attendance_date" >
    </div>

</div>