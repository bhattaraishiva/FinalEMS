<h3 id="section_header3">प्रदेशमा काम काज गर्नु अघिको नोकरी विवरण </h3>
<div class="row">
    <div class="col-sm-3">
        <label for="pad">पद  : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_pad" id="before_pradesh_pad_id" class="form-control">
            <option value="">पद छान्नुहोस् :</option>
            @foreach ($pads as $pad)
            <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">सेवा  : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_sewa" id="sewa_id" class="form-control  dynamic"
            data-dependent='before_pradesh_samuha_id'>
            <option value="">सेवा छान्नुहोस् :</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_samuha" id="before_pradesh_samuha_id" class="form-control  dynamic"data-dependent='before_pradesh_upasamuha_id'>
        <option>पहिले सेवा छान्नुहोस् </option>
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_upasamuha" id="before_pradesh_upasamuha_id" class="form-control">
        <option>पहिले समुह छान्नुहोस् </option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-3">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_shreni" id="shreni" class="form-control">
            <option value="">छैन :</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">तह : <sup>*</sup></label>
        <select name="kaamkaj_before_pradesh_taha" id="taha" class="form-control">
            <option value="">छैन :</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालय : <sup>*</sup></label>
        <input type="text" name="kaamkaj_before_pradesh_karyalaya" class=" form-control " id="before_pradesh_karyalaya"
            placeholder="कार्यालय">
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालयमा हाजिर मिति  : <sup>*</sup></label>
        <input type="text" class=" form-control nepali-calendar" id="nepaliDate9" placeholder="YYYY-MM-DD"
            name="kaamkaj_before_pradesh_attendance_date" >
    </div>
</div>