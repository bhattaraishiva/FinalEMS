@extends('layouts.app')

@section('page_title')
कर्मचारी
@endsection

@section('breadcum_title')
<li><a href="{{route('employee.index')}}">कर्मचारी</a></li>

@endsection


@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

<div class="box box-info" id="uniform-style">
    <div class="box-header with-border">
        <h3 class="box-title">व्यक्तिगत विवरण सम्पादन :{{$employee->first_name}} {{$employee->last_name}} </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post"  action="{{route('employeepersonaldetail.update',['employee'=>$employee->id ])}} enctype="multipart/form-data"">
        @csrf
        @method('put')
        <div class="box-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3">
                        <label for="inputEmail3">कर्मचारी संकेत् नम्बर </label>
                        <input type="text" class="form-control" id="employee_number" name="employee_number"
                    value="{{$employee->employee_number}}" required>
                    </div>

                    <div class="col-sm-3">
                        <label for="inputPassword3">पहिलो नाम (देवनागरि)</label>
                        <input class="form-control" type="text" name="fname" id="fname"  value="{{$employee->first_name}}"
                            required>
                    </div>

                    <div class="col-sm-3">
                        <label for="name">बिचको नाम(देवनागरि) </label>
                        <input class="form-control" type="text" name="mname" id="mname"  value="{{$employee->middle_name}}">
                    </div>

                    <div class="col-sm-3">
                        <label for="name">थर(देवनागरिमा) </label>
                        <input class="form-control" type="text" name="lname" id="lname"  value="{{$employee->last_name}}" required>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">पहिलो नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="efname" id="efname"
                        value="{{$employee->eng_first_name}}" required style="text-transform: uppercase;">
                    </div>

                    <div class="col-sm-3">
                        <label for="name">बिचको नाम(अंग्रेजी ठूलो अक्षरमा)</label>
                        <input class="form-control" type="text" name="emname" id="emname"
                        value="{{$employee->eng_middle_name}}" style="text-transform: uppercase;">
                    </div>

                    <div class="col-sm-3">
                        <label for="name">थर(अंग्रेजी ठूलो अक्षरमा) </label>
                        <input class="form-control" type="text" name="elname" id="elname"
                        value="{{$employee->eng_last_name}}" required style="text-transform: uppercase;">
                    </div>

                    <div class="col-sm-3">
                        <label for="name">जन्म मिति </label>
                        <input class=" form-control nepali-calendar" id="nepaliDate5" required value="{{$employee->dob}}"
                            name="dob">
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">लिङ्ग</label>
                        <select class="form-control" name="gender" id="gender">
                            @if ($employee->gender == 'm'){
                                <option  selected value="m">पुरुष</option>
                               }
                            @elseif($employee->gender == 'f'){
                                <option selected value="f">महिला</option>

                            }

                            @endif
                            <option value="m">पुरुष</option>
                            <option value="f">महिला</option>
                            <option value="o">अन्य</option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="name">जाति </label>
                        <select class="form-control chosen" name="caste">
                            @if ($employee->gender == 'ब्राह्मण'){
                                <option selected value="ब्राह्मण">ब्राह्मण </option>

                            }
                           @elseif($employee->gender == 'दलित'){
                            <option selected value="दलित">दलित</option>

                           }
                            @elseif($employee->gender == 'जनजाती'){
                                <option selected value="जनजाती">जनजाती</option>

                           }

                           @elseif($employee->gender == 'छेत्री'){
                            <option selected value="छेत्री">छेत्री</option>

                        }

                            @endif
                            <option value="ब्राह्मण">ब्राह्मण </option>
                            <option value="छेत्री">छेत्री</option>
                            <option value="जनजाती">जनजाती</option>
                            <option value="दलित">दलित </option>
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="name">समुदाय </label>
                        <select class="form-control chosen" name="community">
                                @if ($employee->community == 'तराई'){
                                    <option selected value="तराई">तराई </option>

                                }
                               @elseif($employee->community == 'पहाड'){
                                <option selected value="पहाड">पहाड</option>

                               }
                                @elseif($employee->community == 'हिमाल'){
                                    <option selected value="हिमाल">हिमाल</option>

                               }

                                @endif
                            <option value="तराई">तराई </option>
                            <option value="पहाड">पहाड</option>
                            <option value="हिमाल">हिमाल</option>
                        </select>
                    </div>

                    <div class="col-sm-3 form-group">
                        <label for="name">नागरिकता नं:</label>
                        <input class="form-control" type="text" name="national_id" id="national_id"
                        value="{{$employee->national_id}}" required>
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">नागरिकता जारी मिति </label>

                        <input class="form-control" type="text" name="national_id_issue_date" id="nepaliDate6" required
                        value="{{$employee->national_id_issue_date}}" required>
                    </div>

                    <div class="col-sm-3">
                        <label for="name">नागरिकता जारी जिल्ला </label>
                        <select name="national_id_issue_district" id="national_id_issue_district"
                            class="form-control chosen">

                            @foreach ($districts as $district)
                            <option value="{{$district->district_id}}">{{$district->district_name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <label for="name">फोटो </label>
                        <input type="text" value="{{$employee->image}}" hidden name="old_image">
                        <input class="form-control" type="file" name="image" id="image" onchange="readURL(this)">
                    </div>

                    <div class="col-sm-3" style="height:90px; width:90px; background-color: aliceblue;">
                        @if ($employee->image)
                            <img src="/{{$employee->image}}" alt="Image" style="height:90px;width:90px">
                            old

                        @endif
                        <img src="#" id="pic" > new

                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <label for="name">मोबाइल नं: </label>
                        <input class="form-control" type="text" name="mobile_no" id="mobile_no" maxlength="10" value="{{$employee->mobile_no}}"
                            required>
                    </div>
                    <div class="col-sm-3">
                        <label for="name">इ-मेल ठेगाना</label>
                        <input class="form-control" type="email" name="email" id="email"  value="{{$employee->email}}"
                            required>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer form-group">
            {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
            <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->

<!--/.col (right) -->
@endsection