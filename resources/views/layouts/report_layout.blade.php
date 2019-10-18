<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('document_report_title')</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/manual/style.css')}}">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">

</head>
<body>
    <div class="content">
        <div >
                <center><img src="{{asset('images/logo.svg')}}" alt="logo" style="height:100px;"></center>
                <div id="report_layout">
                    कर्मचारी व्यवस्थापन प्रणाली , प्रदेश  नम्बर ५ बुटवल,नेपाल<br>
                    @yield('report_heading') बिबरण
                </div>
        </div>
    </div>
    <br>
<hr>
    <div class="" id ="uniform-style">
            <div class="" id="report_layout">
                @yield('report_title') रिपोर्ट बिबरण
                <a href="" id="hide_on_print" onclick=printit(); target="_blank" class="fa fa-print" style="float:right;">print</a>
                <a href="@yield('back_button')" id="hide_on_print" style="float:left;"><i class="fas fa-fast-backward"></i>back</a>
            </div>
            <script>
               function printit(){
                window.print();
                }
            </script>

            <div class="card-body" id="report_layout">
              {{-- {{ csrf_field() }} --}}
                @csrf
                @yield('report_body')
            </div>
            <div>
                <strong>
                    <label>प्रिन्ट गर्ने: {{Auth::user()->name}}</label>
                    <p>मिति: {{ date("Y-m-d , H:i:s")}} </p>
                </strong>
            </div>
    </div>
</body>
</html>