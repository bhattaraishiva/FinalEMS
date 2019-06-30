<form id="upgrade" action="{{route('employeerecord.storeActivity')}}" method="post">
    <div class="row">
        <span class="badge badge-warning" style="font-size:20px;">कर्मचारी पदोन्नति बिबरण परिवर्तन गर्नुहोस</span>

    </div>
    @csrf
    @method('post')
    <div class="row" id="uniform-style">
        <div class="form-group col-md-3">
            <input type="text" name="employee_activity" hidden value="upgrade">
            <input type="text" name="oldpad" hidden value="{{$employee->pad_id}}">
            <input type="text" name="employee_id" hidden value="{{$employee->id}}">

            <label for="name">मन्तरालय चयन गर्नुहोस:</label>
            <select name="ministry_id" id="ministry" class="form-control">
                @foreach ($ministries as $ministry)
                @if($employee->ministry->id == $ministry->id)
                <option selected value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                @else
                <option value="{{$ministry->id}}">{{$ministry->ministry_name}}</option>
                @endif
                @endforeach
            </select>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">निर्देशनालय चयन गर्नुहोस:</label>
                <select name="nirdeshanalaya" id="nirdeshanalaya" class="form-control">
                    @foreach ($nirdeshanalayas as $nirdeshanalaya)
                    @if($employee->nir_id == $nirdeshanalaya->id)
                    <option selected value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @else
                    <option value="{{$nirdeshanalaya->id}}">{{$nirdeshanalaya->nir_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कार्यालय चयन गर्नुहोस</label>
                <select name="karyalaya" id="karyalaya" class="form-control">
                    @foreach ($karyalayas as $karyalaya)
                    @if($karyalaya->id == $employee->kar_id)
                    <option selected value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                    @else
                    <option value="{{$karyalaya->id}}">{{$karyalaya->kar_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">तह चयन गर्नुहोस</label>
                <select name="taha" id="taha" class="form-control">
                    @foreach ($tahas as $taha)
                    @if ($taha->id == $employee->taha_id)
                    <option selected value="{{$taha->id}}">{{$taha->taha_name}}</option>
                    @else
                    <option value="{{$taha->id}}">{{$taha->taha_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">श्रेणी चयन गर्नुहोस</label>
                <select name="shreni" id="shreni" class="form-control">
                    @foreach ($shrenis as $shreni)
                    @if($shreni->id == $employee->shreni_id)
                    <option selected value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                    @else
                    <option value="{{$shreni->id}}">{{$shreni->shreni_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="name">पद चयन गर्नुहोस</label>
                <select name="pad" id="pad" class="form-control">
                    @foreach ($pads as $pad)
                    @if($pad->id == $employee->pad_id)
                    <option selected value="{{$pad->id}}">{{$pad->pad_name}}</option>
                    @else
                    <option value="{{$pad->id}}">{{$pad->pad_name}}</option>
                    @endif
                    @endforeach
                </select>

            </div>
        </div>
        <div class="col-md-3">
            <label for="name">नियुक्ति गरिएको मिति</label>
            <input class="form-control" value="{{$employee->hire_date}}"  name="hdate" id="hdate" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">समायोजनमा पदस्थापन मिति:</label>
            <input class="form-control" value="{{$employee->adjustment_placement_date}}" 
                name="adjustment_placement_date" id="adjustment_placement_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">हाजिरी मिती:</label>
            <input class="form-control" value="{{$employee->attendance_date}}"  name="attendance_date"
                id="attendance_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">समायोजन पूर्व कार्यरतभए सो मिति :</label>
            <input class="form-control" value="{{$employee->before_adjustment_placement_date}}" 
                name="before_adjustment_placement_date" id="before_adjustment_placement_date" readonly>
        </div>
        <div class="col-md-3">
            <label for="name">पदोन्नति गरिएको मिति</label>

            <input class="form-control"  name="upgradedate" class=" form-control nepali-calendar"  id="nepaliDate6" required placeholder="YYYY-MM-DD">
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">कर्मचारीको पर्कार</label>
                {{-- <option value="{{$employee->emp_type}}">{{$employee->emp_type}}</option> --}}

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
        <div class="col-md-3 form-group">
            <label for="name">कर्मचारी संकेत् नम्बर</label>
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