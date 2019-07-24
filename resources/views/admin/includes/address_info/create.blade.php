<div id="header-style">
        <p style="font-size:23px;">ठेगाना सम्बन्धि विवरण </p>
</div>
<br>
<div class="form-group">
        <center><h4 style="font-weight:bold;">स्थाई ठेगाना </h4><hr></center>
        <div class="row">
                <div class="col-sm-2">
                        <label for="name">प्रदेश : <sup>*</sup></label>
                        <select name="ppradesh_id" id="pradesh_id" class="form-control chosen dynamic"
                                data-dependent='district_id'>
                                <option>प्रदेश:</option>
                                @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                                @endforeach
                        </select>
                </div>
                <div class="col-sm-2">
                        <label for="name">जिल्ला : <sup>*</sup></label>
                        <select name="pdistrict_id" id="district_id" class="form-control  dynamic"
                                data-dependent="palika_id">
                                 <option>पहिले प्रदेश छान्नुहोस् </option>
                        </select>
                </div>
                <div class="col-sm-2">
                        <label for="name">पालिका : <sup>*</sup></label>
                        <select name="ppalika_id" id="palika_id" class="form-control   dynamic">
                             <option>पहिले जिल्ला छान्नुहोस् </option>
                        </select>
                </div>

                <div class="col-sm-2">
                        <label for="name">वडा नं : <sup>*</sup></label>
                        <select name="permanent_wardno" id="permanent_wardno" class="form-control chosen">
                                <option value="1">१</option>
                                <option value="2">२</option>
                                <option value="3">३</option>
                                <option value="4">४</option>
                                <option value="5">५</option>
                                <option value="6">६</option>
                                <option value="7">७</option>
                                <option value="8">८</option>
                                <option value="9">९</option>
                                <option value="10">१०</option>
                                <option value="11">११</option>
                                <option value="12">१२</option>
                                <option value="13">१३</option>
                                <option value="14">१४</option>
                                <option value="15">१५</option>
                                <option value="16">१६</option>
                                <option value="17">१७</option>
                                <option value="18">१८</option>
                                <option value="19">१९</option>
                                <option value="20">२०</option>
                                <option value="21">२१</option>
                                <option value="22">२२</option>
                                <option value="23">२३</option>
                                <option value="24">२४</option>
                                <option value="25">२५</option>
                                <option value="26">२६</option>
                                <option value="27">२७</option>
                                <option value="28">२८</option>
                                <option value="29">२९</option>
                                <option value="30">३०</option>
                                <option value="31">३१</option>
                                <option value="32">३२</option>
                        </select>
                </div>
                <div class="col-sm-4">
                        <label for="name"> गाँउ / टोल :</label>
                        <input class="form-control" type="text" name="permanent_tole" id="permanent_tole"
                                placeholder="गाँउ / टोल " >
                </div>
        </div>
        <hr>
        <center><h4 style="font-weight:bold;">हालको ठेगाना </h4><hr></center>
         <!-- <h4> <input type="checkbox" name="addresstoo" onclick="FillAddress(this.form)">
                <em>Check this box if Permanent Address and Temporary Address are the same.</em><br />
        </h4> -->
        <div class="row">
                <div class="col-sm-2">
                        <label for="name">प्रदेश : <sup>*</sup></label>
                        <select name="cpradesh_id" id="pradesh_id" class="form-control chosen dynamic" data-dependent='cdistrict_id'>
                                <option>प्रदेश:</option>
                                @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                                @endforeach
                        </select>
                </div>

                <div class="col-sm-2">
                        <label for="name">जिल्ला : <sup>*</sup></label>
                        <select name="cdistrict_id" id="cdistrict_id" class="form-control  dynamic"
                                data-dependent="cpalika_id">
                             <option>पहिले प्रदेश छान्नुहोस् </option>

                        </select>
                </div>

                <div class="col-sm-2">
                        <label for="name">पालिका : <sup>*</sup></label>
                        <select name="cpalika_id" id="cpalika_id" class="form-control   dynamic">
                           <option>पहिले जिल्ला छान्नुहोस् </option>
                       </select>

                </div>

                <div class="col-sm-2">
                        <label for="name">वडा नं : <sup>*</sup></label>
                        <select name="current_wardno" id="current_wardno" class="form-control chosen">
                                <option value="1">१</option>
                                <option value="2">२</option>
                                <option value="3">३</option>
                                <option value="4">४</option>
                                <option value="5">५</option>
                                <option value="6">६</option>
                                <option value="7">७</option>
                                <option value="8">८</option>
                                <option value="9">९</option>
                                <option value="10">१०</option>
                                <option value="11">११</option>
                                <option value="12">१२</option>
                                <option value="13">१३</option>
                                <option value="14">१४</option>
                                <option value="15">१५</option>
                                <option value="16">१६</option>
                                <option value="17">१७</option>
                                <option value="18">१८</option>
                                <option value="19">१९</option>
                                <option value="20">२०</option>
                                <option value="21">२१</option>
                                <option value="22">२२</option>
                                <option value="23">२३</option>
                                <option value="24">२४</option>
                                <option value="25">२५</option>
                                <option value="26">२६</option>
                                <option value="27">२७</option>
                                <option value="28">२८</option>
                                <option value="29">२९</option>
                                <option value="30">३०</option>
                                <option value="31">३१</option>
                                <option value="32">३२</option>
                        </select>
                </div>
                <div class="col-sm-4">
                        <label for="name"> गाँउ / टोल : </label>
                        <input class="form-control" type="text" name="current_tole" id="current_tole"
                                placeholder="गाँउ / टोल " >
                </div>
        </div>
</div>
<hr>
<script type="text/javascript" src="{{asset('js/addresscopy.js')}}"></script>
