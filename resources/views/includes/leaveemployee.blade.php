<form id="leave" action="{{route('employeerecord.storeActivity')}}" method="post">
    <div class="row">
        <span class="badge badge-warning" style="font-size:20px; align:center">कर्मचारी सेवानिवृत्त बिबरण परिवर्तन गर्नुहोस</span>

    </div>
    @csrf
    @method('post')
    <div class="row" id="uniform-style">
        <div class="form-group col-md-3">
            <input type="text" name="employee_activity" hidden value="leave">
            <input type="text" name="oldpad" hidden value="{{$employee->pad_id}}">
            <input type="text" name="employee_id" hidden value="{{$employee->id}}">

            <label for="name">मन्तरालय</label>
            <select name="ministry_id" id="ministry" class="form-control" readonly>
                @foreach ($ministries as $ministry)
                @if($employee->ministry->id == $ministry->id)
                <option selected value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                @else
                <option value="{{$ministry->id}}" hidden>{{$ministry->ministry_name}}</option>
                @endif
                @endforeach
            </select>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय</label>
                <select name="nirdeshanalaya" id="nirdeshanalaya" class="form-control" readonly>
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    @if($employee->nir_id == $nirdeshanalaya->id)
                    <option value="{{$nirdeshanalaya->id}}"> {{$nirdeshanalaya->nir_name}}</option>
                    @endif
                    @endforeach
                </select>


            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कार्यालय</label>
                <select name="karyalaya" id="karyalaya" class="form-control" readonly>
                    @foreach ($karyalayas as $karyalaya)
                    @if($karyalaya->id == $employee->kar_id)
                    <option selected value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                    @else
                    <option hidden value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">तह</label>
                <select name="taha" id="taha" class="form-control" readonly>
                    @foreach ($tahas as $taha)
                    @if ($taha->id == $employee->taha_id)
                    <option selected value="{{$taha->id}}">{{$taha->taha_name}}</option>
                    @else
                    <option hidden value="{{$taha->id}}">{{$taha->taha_name}}</option>
                    @endif
                    @endforeach
                </select>


            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">श्रेणी</label>
                <select name="shreni" id="shreni" class="form-control" readonly>
                    @foreach ($shrenis as $shreni)
                    @if($shreni->id == $employee->shreni_id)
                    <option selected value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                    @else
                    <option hidden value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                    @endif
                    @endforeach
                </select>


            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">पद</label>
                {{-- <input type="text" name="pad" value="{{$oneemployee[0]->pad_id}}" class="form-control"
                placeholder="{{$oneemployee[0]->pad_name}}"> --}}
                <select name="pad" id="pad" class="form-control" readonly>
                    @foreach ($allpads as $paad)

                    @if($paad->id == $employee->pad_id)
                    <option selected value="{{$paad->id}}">{{$paad->pad_name}}</option>
                    @else

                    @endif
                    @endforeach
                </select>

            </div>
        </div>
        <div class="col-md-3">
            <label for="name">नियुक्ति मिति</label>
            <input class="form-control" value="{{$employee->hire_date}}"  name="hdate" id="hdate" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">समायोजनमा पदस्थापन मिति:</label>
            <input class="form-control" value="{{$employee->adjustment_placement_date}}"" name="adjustment_placement_date" id="adjustment_placement_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">हाजिरी मिती:</label>
            <input class="form-control" value="{{$employee->attendance_date}}"  name="attendance_date" id="attendance_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">समायोजन पूर्व कार्यरतभए सो मिति :</label>
            <input class="form-control" value="{{$employee->before_adjustment_placement_date}}"  name="before_adjustment_placement_date" id="before_adjustment_placement_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">सेवानिवृत्त गरिएको मिति</label>
            <input class="form-control" class=" form-control nepali-calendar"  id="nepaliDate5" name="leavedate" id="leavedate" required placeholder="YYYY-MM-DD">
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कर्मचारीको पर्कार</label>
                @if ($employee->emp_type == "काज")
                <input type="text" value="काज" name="emp_type" class="form-control" readonly>
                @elseif($employee->emp_type == "पदस्थापन")
                <input type="text" value="पदस्थापन" name="emp_type" class="form-control" readonly>
                @elseif($employee->emp_type == "नयाँ")
                <input type="text" value="नयाँ" name="emp_type" class="form-control" readonly>
                @elseif($employee->emp_type == "कामकाज")
                <input type="text" value="कामकाज" name="emp_type" class="form-control" readonly>
                @elseif($employee->emp_type == "अस्थाई")
                <input type="text" value="अस्थाई" name="emp_type" class="form-control" readonly>
                @elseif($employee->emp_type == "करार")
                <input type="text" value="करार" name="emp_type" class="form-control" readonly>
                @else
                <input type="text" value="अन्य" name="emp_type" class="form-control" readonly>
                @endif


            </div>

        </div>
        <div class="col-md-3 form-group">
            <label for="name">कर्मचारी संकेत नम्बर</label>
            <input class="form-control" type="text" value="{{$employee->employee_number}}" name="employeenumber"
                id="employeenumber" readonly>

        </div>

    </div>
    <div class="row">
        <div class="form-group">
            <div class="text-center">
                <button class="btn btn-lg btn-success" type="submit" style="float:left">सुरक्षित गर्नुहोस</button>
            </div>
        </div>
    </div>
    <hr>



</form>