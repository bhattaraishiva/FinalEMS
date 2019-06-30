@include('includes.header');

<!-- =============================================== -->
@if (Auth::check())
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('backend/dist/img/logo.svg')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span style="color:white" ;font-size:20px;> सेटअप</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right" style="color:white" ;font-size:20px;></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('ministry.index')}}"><i class="fa fa-circle-o"></i>मन्त्रालय</a></li>
          <li><a href="{{route('nirdeshanalaya.index')}}"><i class="fa fa-circle-o"></i>निर्देशनालय</a></li>
          <li><a href="{{route('pad.index')}}"><i class="fa fa-circle-o"></i>पद</a></li>
          <li><a href="{{route('karyalaya.index')}}"><i class="fa fa-circle-o"></i>कार्यालय</a></li>
          <li><a href="{{route('taha.index')}}"><i class="fa fa-circle-o"></i>तह</a></li>
          <li><a href="{{route('shreni.index')}}"><i class="fa fa-circle-o"></i>श्रेणी</a></li>
          <li><a href="{{route('sewa.index')}}"><i class="fa fa-circle-o"></i>सेवा</a></li>
          <li><a href="{{route('samuha.index')}}"><i class="fa fa-circle-o"></i>समुह</a></li>
          <li><a href="{{route('upasamuha.index')}}"><i class="fa fa-circle-o"></i>उप-समुह</a></li>
        </ul>
      </li>
      {{-- <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card"></i>
          <span style="color:white" ;font-size:20px;>कर्मचारी</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('employee.index')}}"><i class="fa fa-address-card"></i> कर्मचारी</a></li>
          <li><a href="{{route('employee.create')}}"><i class="fa fa-user-plus"></i>नया कर्मचारी </a></li>
          <li><a href="#"><i class="fa fa-print"></i> कर्मचारी रिपोर्ट</a></li>
        </ul>
      </li> --}}
      {{-- <li>
        <a href="{{route('karyalaya.print')}}">
          <i class="fa fa-th"></i> <span style="color:white" ;font-size:20px;>कार्यालय रिपोर्ट</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-yellow">New</small>
          </span>
        </a>
      </li> --}}

      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span style="color:white" ;font-size:20px;>कार्यालय</span>
          <span class="pull-right-container" style="color:white" ;font-size:20px;>
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('karyalaya.index')}}"><i class="fa fa-circle-o"></i> कार्यालय </a></li>
          <li><a href="{{route('karyalaya.create')}}"><i class="fa fa-circle-o"></i>नया कार्यालय</a></li>
          {{-- <li><a href="{{route('karyalaya.print')}}"><i class="fa fa-circle-o"></i> कार्यालय रिपोर्ट</a></li> --}}

        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card"></i>
          <span style="color:white" ;font-size:20px;>कर्मचारी</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">11</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('employeepersonaldetail.index')}}"><i class="fa fa-address-card"></i> कर्मचारी</a></li>
          <li><a href="{{route('employeepersonaldetail.create')}}"><i class="fa fa-user-plus"></i>कर्मचारी इन्ट्री</a>
          </li>
          <li><a href="#"><i class="fa fa-print"></i> कर्मचारी रिपोर्ट</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-card"></i>
          <span style="color:white" ;font-size:20px;> रिपोर्ट</span>
          <span class="pull-right-container" style="color:white" ;font-size:20px;>
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('ministry.index')}}"><i class="fa fa-circle-o"></i>मन्त्रालय</a></li>
          <li><a href="{{route('karyalaya.index')}}"><i class="fa fa-circle-o"></i>कार्यालय</a></li>
          <li><a href="{{route('pad.index')}}"><i class="fa fa-circle-o"></i>पद</a></li>
          <li><a href="{{route('employeepersonaldetail.index')}}"><i class="fa fa-circle-o"></i>कर्मचारी</a></li>


        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1 id="uniform-style">
      @yield('page_title')पृष्ठमा
      <small>स्वागत छ.</small>
    </h1>
    <ol class="breadcrumb" id="uniform-style">
      <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> गृह </a></li>
      @yield('breadcum_title')

    </ol>
  </section>

  <!-- Main content -->
  <section class="content" id="uniform-style">

    <div class="box-body">
      @yield('content')
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Operation by :{{ Auth::user()->name }}
    </div>
    <!-- /.box-footer-->
    {{-- </div> --}}
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endif

<!-- =============================================== -->

@include('includes.footer')
</body>

</html>