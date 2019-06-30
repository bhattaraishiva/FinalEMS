@extends('layouts.app')
@section('page_title')
कर्मचारी
@endsection
@section('breadcum_title')
<li><a href="{{route('employeepersonaldetail.index')}}">कर्मचारी</a></li>
@endsection
@section('form_title')
कर्मचारी बिबरण।
@endsection
@section('box_title')
कर्मचारी बिबरण विस्तृतमा
@endsection
@section('content')
<!-- right column -->
@if (count($errors) > 0)
<ul class="list-group ">
    @foreach ($errors->all() as $error)
    <li class="alert alert-danger alert-dismissible">
        {{$error}}
    </li>
    @endforeach
</ul>
@endif

<div class="box box-info" id="uniform-style">
    <div class="box-header with-border">
        <h2 class="box-title">व्यक्तिगत विवरण </h2>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" enctype="multipart/form-data" action="{{route('employeepersonaldetail.store')}}" >
        @csrf
        <div class="box-body">
            {{-- <ul class=" nav nav-tabs" id="myTab" role="tablist">
               
                <li class="nav-item active">
                    <a class="nav-link " data-toggle="tab" href="#personal_info" role="tab"
                        aria-controls="personal_info">व्यक्तिगत विवरण </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " data-toggle="tab" href="#family_info" role="tab"
                        aria-controls="family_info">पारिवारिक विवरण </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#address_info" role="tab"
                        aria-controls="address_info">ठेगाना</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="tab" href="#job_info" role="tab" aria-controls="job_info">नोकरी
                        विवरण </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#educational_info" role="tab"
                        aria-controls="educational_info">शैक्षिक विवरण</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#training_info" role="tab"
                        aria-controls="training_info">तालिम</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#foreign_tour_info" role="tab"
                        aria-controls="foreign_tour_info">वैदेशिक भ्रमण
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#educational_tour_info_" role="tab"
                        aria-controls="educational_tour_info">अध्यन</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#leave_info" role="tab"
                        aria-controls="leave_info">बिदा</a>
                </li>
            </ul> --}}

            {{-- <hr> --}}
            {{-- <div class=" tab-content">
                <div class="tab-pane active" id="personal_info" role="tabpanel">
                    @include('admin.includes.personal_info.create')

                </div>
                <div class="tab-pane" id="family_info" role="tabpanel">
                    @include('admin.includes.family_info.create')

                </div>
                <div class="tab-pane" id="address_info" role="tabpanel">@include('admin.includes.address_info.create')
                </div>
                <div class="tab-pane" id="job_info" role="tabpanel">@include('admin.includes.job_info.create')</div>
                <div class="tab-pane" id="educational_info" role="tabpanel">@include('admin.includes.job_info.create')
                </div>
                <div class="tab-pane" id="training_info" role="tabpanel">@include('admin.includes.training_info.create')
                </div>
                <div class="tab-pane" id="foreign_tour_info" role="tabpanel">
                    @include('admin.includes.foreign_tour_info.create')</div>
                <div class="tab-pane" id="educational_tour_info" role="tabpanel">
                    @include('admin.includes.educational_tour_info.create')</div>
                <div class="tab-pane" id="leave_info" role="tabpanel">@include('admin.includes.leave_info.create')</div>
            </div> --}}
            <div> @include('admin.includes.personal_info.create') </div>
            <div> @include('admin.includes.family_info.create') </div>
            <div> @include('admin.includes.address_info.create') </div>
            <div> @include('admin.includes.job_info.create') </div>
            <div> @include('admin.includes.education_detail.create') </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer form-group">
                <div>
                        <input type="checkbox" name="confirmsave" id="confirmsave"> सबै विवरण सहि छन्।
                        <button class=" form-control btn btn-info" id="saveactivity" type="submit" disabled style="font-size:18px;">सुरक्षित
                            गर्नुहोस</button>
                    </div>
            {{-- <button type="submit" class=" form-control btn btn-info pull-right">सुरक्षित गर्नुहोस</button> --}}
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<!-- /.box -->

<!--/.col (right) -->
@endsection