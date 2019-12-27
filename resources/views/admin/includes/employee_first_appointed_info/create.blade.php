<h3 id="section_header3">सुरु नियुक्ति विवरण</h3>
<div class="row">
    <div class="col-sm-3">
        <label for="pad">पद  : <sup>*</sup></label>
        <select name="kaamkaj_first_pad" id="first_pad_id" class="form-control">
            <option value="">पद छान्नुहोस् :</option>
            @foreach ($pads as $pad)
            <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">सेवा छान्नुहोस् : <sup>*</sup></label>
        <select name="kaamkaj_first_sewa" id="sewa_id" class="form-control  dynamic" data-dependent='samuha_id'>
            <option value="">सेवा :</option>
            @foreach ($sewas as $sewa)
            <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">समुह : <sup>*</sup></label>
        <select name="kaamkaj_first_samuha" id="samuha_id" class="form-control dynamic" data-dependent='upasamuha_id'>
             <option>पहिले सेवा छान्नुहोस् </option>
        </select>
    </div>
    <div class="col-sm-3">
        <label for="name">उप-समुह : <sup>*</sup></label>
        <select name="kaamkaj_first_upasamuha" id="upasamuha_id" class="form-control">
             <option>पहिले समुह छान्नुहोस् </option>
        </select>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-2">
        <label for="shreni">श्रेणी : <sup>*</sup></label>
        <select name="kaamkaj_first_shreni" id="shreni" class="form-control">
            <option value="">छैन</option>
            @foreach ($shrenis as $shreni)
            <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">तह :<sup>*</sup></label>
        <select name="kaamkaj_first_taha" id="taha" class="form-control">
            <option value="">छैन</option>
            @foreach ($tahas as $taha)
            <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-2">
        <label for="name">नियुक्ती मिति : <sup>*</sup></label>
        <div id="datepicker">
            <input class="form-control" type="text" name="kaamkaj_first_appointed_date" id="np-datepicker_kaamkaj_first_job1" placeholder="YYYY-MM-DD"/>
            <input id="dateAD1" type="text" name="kaamkaj_first_appointed_date_ad" hidden/>
        </div>
        {{-- <input class="form-control nepali-calendar" name="kaamkaj_first_appointed_date" type="text" id="nepaliDate7"
            placeholder="YYYY-MM-DD"> --}}
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालय : <sup>*</sup></label>
        <input type="text" name="kaamkaj_first_karyalaya_name" class=" form-control " id="start_karyalaya"
            placeholder="कार्यालय">
    </div>
    <div class="col-sm-3">
        <label for="name">कार्यालयमा हाजिर मिति  : <sup>*</sup></label>
        <div id="datepicker">
            <input class="form-control" type="text" name="kaamkaj_first_attendance_date" id="np-datepicker_kaamkaj_first_job2" placeholder="YYYY-MM-DD"/>
            <input id="dateAD2" type="text" name="kaamkaj_first_attendance_date_ad" hidden/>
        </div>
        {{-- <input type="text" class=" form-control nepali-calendar" id="nepaliDate8" placeholder="YYYY-MM-DD"
            name="kaamkaj_first_attendance_date" > --}}
    </div>
</div>