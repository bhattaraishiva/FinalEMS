<h4 style="color:#e63900;">* अंकित अनिवार्य छन्।</h4>
<div id="header-style">
    <p style="font-size:23px;">व्यक्तिगत विवरण </p>
</div>
<br>
<hr>
<div class="form-group">
    <div class="row">
        <div class="col-sm-3">
            <label>कर्मचारी संकेत् नम्बर : <sup>*</sup></label>
            <input type="text" class="form-control" id="employee_number" name="employee_number"
                placeholder="कर्मचारी संकेत् नम्बर " required value="{{old('employee_number')}}">
        </div>
        <div class="col-sm-3">
            <label for="inputPassword3">पहिलो नाम (देवनागरी) : <sup>*</sup></label>
            <input class="form-control" type="text" name="fname" id="fname" placeholder="पहिलो नाम " required
                value="{{old('fname')}}">
        </div>
        <div class="col-sm-3">
            <label for="name">बिचको नाम(देवनागरी) :</label>
            <input class="form-control" type="text" name="mname" id="mname" placeholder="बिचको नाम"
                value="{{old('mname')}}">
        </div>
        <div class="col-sm-3">
            <label for="name">थर(देवनागरीमा) : <sup>*</sup></label>
            <input class="form-control" type="text" name="lname" id="lname" placeholder="थर " required
                value="{{old('lname')}}">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा) :<sup>*</sup></label>
            <input class="form-control" type="text" name="efname" id="efname" placeholder="FIRST NAME IN BLOCK LETTER"
                required style="text-transform: uppercase;" value="{{old('efname')}}">
        </div>
        <div class="col-sm-3">
            <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा) :</label>
            <input class="form-control" type="text" name="emname" id="emname" placeholder="MIDDLE NAME IN BLOCK LETTER"
                style="text-transform: uppercase;" value="{{old('emname')}}">
        </div>
        <div class="col-sm-3">
            <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) : <sup>*</sup></label>
            <input class="form-control" type="text" name="elname" id="elname" placeholder="LAST NAME IN BLOCK LETTER"
                required style="text-transform: uppercase;" value="{{old('elname')}}">
        </div>

        <div class="col-sm-3">
            <label for="name">जन्म मिति : <sup>*</sup></label>
            <input type="text" class=" form-control nepali-calendar" id="nepaliDate5" required placeholder="YYYY-MM-DD"
                name="dob" value="{{old('dob')}}">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <label for="name">लिङ्ग :<sup>*</sup></label>
            <select class="form-control chosen" name="gender" id="gender">
                <option value="f">महिला</option>
                <option value="m">पुरुष</option>
                <option value="o">अन्य</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="name">जाति : <sup>*</sup></label>
            <select class="form-control chosen" name="caste">
                <option value="b">ब्राह्मण </option>
                <option value="c">क्षेत्री</option>
                <option value="j">जनजाती</option>
                <option value="d">दलित </option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="name">समुदाय : <sup>*</sup></label>
            <select class="form-control chosen" name="community">
                <option value="t">तराई </option>
                <option value="p">पहाड</option>
                <option value="h">हिमाल</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="name">नागरिकता नं :<sup>*</sup></label>
            <input class="form-control" type="text" name="national_id" id="national_id" placeholder="नागरिकता नं:"
                value="{{old('national_id')}}" required>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <label for="name">नागरिकता जारी मिति : <sup>*</sup></label>
            <input class="form-control" type="text" name="national_id_issue_date" id="nepaliDate6" required
                placeholder="YYYY-MM-DD" required value="{{old('national_id_issue_date')}}">
        </div>
        <div class="col-sm-3">
            <label for="name">नागरिकता जारी जिल्ला : <sup>*</sup></label>
            <select name="national_id_issue_district" id="national_id_issue_district" class="form-control chosen">

                @foreach ($districts as $district)
                <option value="{{$district->district_id}}">{{$district->district_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-3">
            <label for="name">फोटो : </label>
            <input class="form-control" type="file" name="image" id="image" onchange="readURL(this)">
        </div>
        <div class="col-sm-3" style="height:90px; width:90px; background-color: aliceblue;">
            <img src="#" id="pic">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <label for="name">सम्पर्क  नं : <sup>*</sup></label>
            <input class="form-control" type="text" name="mobile_no" id="mobile_no" placeholder="सम्पर्क  नं:" value="{{old('mobile_no')}}"" required>
        </div>
        <div class="col-sm-3">
            <label for="name"> इ-मेल :</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com"
                value="{{ old('email') }}">
        </div>
    </div>
    {{-- <a class="btn btn-info pull-right nexttab" href="#">Next</a> --}}
</div>
<hr>