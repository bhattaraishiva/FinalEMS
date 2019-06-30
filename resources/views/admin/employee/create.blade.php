@extends('layouts.app')
@section('page_title')
  कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employee.index')}}">कर्मचारी</a></li>
<li><a href="{{route('employee.create')}}">कर्मचारी बिबरण</a></li>

@endsection


@section('content')

@if (count($errors) > 0)
<ul class="list-group">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

<div class="card card-default">
    <div class="card-header" id="uniform-style">
        कर्मचारी बिबरण राख्नुहोस्।
    </div>

    <div class="card-body" id="uniform-style">
        <form action="{{route('employee.store')}}" method="post">
            {{-- {{ csrf_field() }} --}}
            @csrf

            <div class="form-group">
                <div id="form-info">कर्मचारीको व्यक्तिगत बिबरण</div>
                <div class="row">
                    <div class="col-md-3 give_margin ">
                        <label for="name">कर्मचारी संकेत् नम्बर </label>
                        <input class="form-control" type="text" name="employeenumber" id="employeenumber"
                            placeholder="कर्मचारी संकेत् नम्बर " required>
                    </div>

                    <div class="col-md-3 give_margin">
                        <label for="name">नागरिकता नं:</label>
                        <input class="form-control" type="text" name="national_id" id="national_id"
                            placeholder="नागरिकता नं:" required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">मोबाइल नं:</label>
                        <input class="form-control" type="text" name="mobile_no" id="mobile_no" placeholder="मोबाइल नं:"
                            required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">इ-मेल ठेगाना</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="example@gmail.com"
                            required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">पहिलो नाम(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="fname" id="fname" placeholder="पहिलो नाम "
                            required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">बिचको नाम(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="mname" id="mname" placeholder="बिचको नाम">
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">थर(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="lname" id="lname" placeholder="थर " required>
                    </div>

                    <div class="col-md-3 give_margin">
                        <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="efname" id="fname"
                            placeholder="FIRST NAME IN BLOCK LETTER" required style="text-transform: uppercase;">
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="emname" id="mname"
                            placeholder="MIDDLE NAME IN BLOCK LETTER" style="text-transform: uppercase;">
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) </label>
                        <input class="form-control" type="text" name="elname" id="lname"
                            placeholder="LAST NAME IN BLOCK LETTER" required style="text-transform: uppercase;">
                    </div>

                    {{-- <div class="col-md-3 give_margin">
                        <label for="name">ठेगाना </label>
                        <input class="form-control" type="text" name="address" id="address" placeholder="ठेगाना"
                            required>
                    </div> --}}
                    <div class="col-md-3 give_margin">
                        <label for="name">लिङ्ग</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="m">पुरुष</option>
                            <option value="f">महिला</option>
                            <option value="o">अन्य</option>
                        </select>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">जन्म मिति </label>
                        {{-- <input type="text" value="" name="date" class="date-picker"> --}}
                        <input class=" form-control nepali-calendar"  id="nepaliDate5" required placeholder="YYYY-MM-DD" name="dob">
                    </div>


                    <div class="col-md-3 give_margin">
                        <label for="name">बुबाको नाम</label>
                        <input class="form-control" type="text" name="fathername" id="fathername"
                            placeholder="बुबाको नाम" required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">आमाको नाम</label>
                        <input class="form-control" type="text" name="mothername" id="mothername"
                            placeholder="आमाको नाम">
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">हजुरबुबाको नाम </label>
                        <input class="form-control" type="text" name="gfname" id="gfname" placeholder="हजुरबुबाको नाम "
                            required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">हजुरआमाको नाम </label>
                        <input class="form-control" type="text" name="gmname" id="gmname"
                            placeholder="हजुरआमाबुबाको नाम ">
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">पति/पत्नी नाम </label>
                        <input class="form-control" type="text" name="hwname" id="hwname" placeholder="पति/पत्नी नाम ">
                    </div>

                    {{-- <div class="col-md-3 give_margin">
                                <label for="name">फोटो </label>
                                <input class="form-control" type="file" name="image" id="image" onchange="readURL(this)">
                            </div>
                            <div class="col-md-3 give_margin">
                                <img src="#" id="pic" alt="Image">
                            </div> --}}

                </div>

                <div id="form-info">स्थायी ठेगाना </div>
                <div class="row">

                    <div class="form-group col-md-2">
                        <label for="name">प्रदेश :</label>
                        <select name="pradesh_id" id="pradesh_id" class="form-control  dynamic"
                            data-dependent='district_id'>
                            <option value="">प्रदेश चयन गर्नुहोस्:</option>
                            @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="name">जिल्ला</label>
                            <select name="district_id" id="district_id" class="form-control  dynamic" data-dependent="palika_id">
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">पालिका</label>
                            <select name="palika_id" id="palika_id" class="form-control  dynamic">
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">वडा नं</label>
                            <select name="permanent_wardno" id="permanent_wardno" class="form-control  dynamic">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                <option value="32">32</option>

                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="name"> गाँउ / टोल</label>
                        <input class="form-control" type="text" name="permanent_tole" id="permanent_tole"
                            placeholder="गाँउ / टोल " required>
                    </div>
                </div>

                <div id="form-info">पत्राचार गर्ने ठेगाना</div>
                <div class="row">

                    <div class="form-group col-md-2">
                        <label for="name">प्रदेश :</label>
                        <select name="cpradesh_id" id="pradesh_id" class="form-control  dynamic"
                            data-dependent='cdistrict_id'>
                            <option value="">प्रदेश चयन गर्नुहोस्:</option>
                            @foreach ($pradeshes as $pradesh)
                                <option value="{{$pradesh->pradesh_id}}">{{$pradesh->pradesh_name}} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">

                        <div class="form-group">
                            <label for="name">जिल्ला</label>
                            <select name="cdistrict_id" id="cdistrict_id" class="form-control  dynamic"
                                data-dependent="cpalika_id">
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">पालिका</label>
                            <select name="cpalika_id" id="cpalika_id" class="form-control  dynamic">
                            </select>
                        </div>

                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="name">वडा नं</label>
                            <select name="current_wardno" id="current_wardno" class="form-control  dynamic">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
    
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <label for="name"> गाँउ / टोल</label>
                        <input class="form-control" type="text" name="current_tole" id="current_tole" placeholder="गाँउ / टोल "
                            required>
                    </div>
                </div>



                <div id="form-info">कार्यालय/पद बिबरण</div>
                <div class="row">
                    <div class="form-group col-md-3 give_margin">
                        <label for="name">मन्त्रालय चयन गर्नुहोस्:</label>
                        <select name="ministry_id" id="ministry_id" class="form-control  dynamic"
                            data-dependent='nirdeshanalaya_id'>
                            <option value="">मन्त्रालय चयन गर्नुहोस्:</option>
                            @foreach ($ministries as $ministry)
                            <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">निर्देशनालय चयन गर्नुहोस्:</label>
                            <select name="nirdeshanalaya" id="nirdeshanalaya_id" class="form-control  dynamic"
                                data-dependent="kar_id">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">कार्यालय चयन गर्नुहोस्</label>
                            <select name="karyalaya" id="kar_id" class="form-control  dynamic"
                                data-dependent="pad_id">
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">पद चयन गर्नुहोस</label>
                            <select name="pad" id="pad_id" class="form-control">

                                @foreach ($pads as $pad)
                                <option value="{{$pad->id}}">{{$pad->pad_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">सेवा </label>
                            <select name="sewa" id="sewa_id" class="form-control  dynamic"
                            data-dependent='samuha_id'>
                                <option value="">सेवा चयन गर्नुहोस:</option>
                                @foreach ($sewas as $sewa)
                                <option value="{{$sewa->id}}">{{$sewa->sewa_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">समुह</label>
                            <select name="samuha" id="samuha_id" class="form-control  dynamic"
                            data-dependent='upasamuha_id'>
                               <!--  <option value="">समुह चयन गर्नुहोस:</option>
                                @foreach ($samuhas as $samuha)
                                <option value="{{$samuha->id}}">{{$samuha->samuha_name}}</option>

                                @endforeach -->
                            </select>

                        </div>
                    </div>
                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">उप-समुह</label>
                            <select name="upasamuha" id="upasamuha_id" class="form-control">
                                <option value="">उप-समुह चयन गर्नुहोस:</option>
                                @foreach ($upasamuhas as $upasamuha)
                                <option value="{{$upasamuha->id}}">{{$upasamuha->upasamuha_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>


                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">तह चयन गर्नुहोस:</label>
                            <select name="taha" id="taha" class="form-control">
                                <option value="">तह चयन गर्नुहोस:</option>

                                @foreach ($tahas as $taha)
                                <option value="{{$taha->id}}">{{$taha->taha_name}}</option>

                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">श्रेणी चयन गर्नुहोस</label>
                            <select name="shreni" id="shreni" class="form-control">
                                <option value="">श्रेणी चयन गर्नुहोस:</option>

                                @foreach ($shrenis as $shreni)
                                <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3 give_margin">
                        <label for="name">नियुक्ती गरिएको मिति</label>
                        <input class="form-control" name="hdate" class=" form-control nepali-calendar"  id="nepaliDate6" required placeholder="YYYY-MM-DD"
                            placeholder="नियुक्ती गरिएको मिति" required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">समायोजनमा पदस्थापन मिति </label>
                        <input class="form-control" class=" form-control nepali-calendar"  id="nepaliDate7" required placeholder="YYYY-MM-DD" name="adjustment_placement_date"
                             required>
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">हाजिरी मिती</label>
                        <input class="form-control" class=" form-control nepali-calendar"  id="nepaliDate8" required placeholder="YYYY-MM-DD" name="attendancedate" required
                            >
                    </div>
                    <div class="col-md-3 give_margin">
                        <label for="name">समायोजन पूर्व कार्यरतभए सो मिति </label>
                        <input class="form-control" name="before_adjustment_placement_date" class=" form-control nepali-calendar"  id="nepaliDate9"  placeholder="YYYY-MM-DD">
                    </div>
                    <div class="col-md-3 give_margin">
                        <div class="form-group">
                            <label for="name">कर्मचारीको पर्कार</label>
                            <select name="emp_type" id="emp_type" class="form-control">

                                <option value="काज">काज</option>
                                <option value="पदस्थापन">पदस्थापन</option>
                                <option value="नयाँ">नयाँ</option>
                                <option value="कामकाज">कामकाज</option>
                                <option value="अस्थाई">अस्थाई</option>
                                <option value="करार">करार</option>
                                <option value="अन्य">अन्य</option>


                            </select>

                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-lg btn-success" type="submit" style="float:left">सुरक्षित गर्नुहोस</button>
                    </div>
                </div>

        </form>
    </div>
</div>

@endsection