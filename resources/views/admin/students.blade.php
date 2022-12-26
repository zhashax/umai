@extends('layouts.app')

@section('title')
    Calendar | Admin Panel
@endsection

@section('content')
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Calendar | Umai - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Admin & Dashboard Template" name="description" />
        <meta content="Zhas" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- Plugin css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/@fullCalendar/core/main.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/libs/@fullCalendar/daygrid/main.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/libs/@fullCalendar/bootstrap/main.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/libs/@fullCalendar/timegrid/main.min.css')}}" type="text/css">
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{ route('admin.view') }}" class="logo logo-dark">
                                <span class="logo-sm">
                                    {{ config('app.name') }}
                                </span>
                                <span class="logo-lg">
                                    {{ config('app.name') }}
                                </span>
                            </a>

                            <a href="{{ route('admin.view') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    {{ config('app.name') }}
                                </span>
                                <span class="logo-lg">
                                    {{ config('app.name') }}
                                </span>
                            </a>
                        </div>

       

                    </div>

                    <div class="d-flex">

                        


                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>


                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-1.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()?Auth::user()->name :Auth::guest()."guest" }}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ri-wallet-2-line align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end mt-1">11</span><i class="ri-settings-2-line align-middle me-1"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="ri-lock-unlock-line align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src="{{ asset('assets/images/users/avatar-1.jpg')}}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{ Auth::user()? Auth::user()->name:Auth::guest() }}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('admin.view') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('user.students') }}" class=" waves-effect">
                                    <i class="fas fa-graduation-cap	"></i>
                                    <span>Students</span>
                                </a>
                            </li>
                
                           

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- sidebar here -->
                        <button type="button" id="formButton">+ add student </button>
                        <br><br>

                        <div id="apear">

                            <div class="page-content">
                                <div class="container-fluid">
                      
                                    <!-- start page title -->
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mb-sm-0">Форма заполнения</h4>
                      
                                                <div class="page-title-right">
                                                    <ol class="breadcrumb m-0">
                                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Формы</a></li>
                                                        <li class="breadcrumb-item active">Элементы форм</li>
                                                    </ol>
                                                </div>
                      
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end page title -->
                                    <form name="add-student-form" id="add-student-form" method="post" action="{{ url('store-student-form') }}">
                                      @csrf  
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                      
                                                  {{-- start row --}}
                                                    <div class="row mb-3">
                                                      <label for="fullname" class="col-sm-2 col-form-label">fio</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="fullname" name="fullname" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="address" class="col-sm-2 col-form-label">address</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="address" name="address" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="email" class="col-sm-2 col-form-label">email</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="email" name="email" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="sex" class="col-sm-2 col-form-label">sex</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="sex" name="sex" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="mobile" class="col-sm-2 col-form-label">mobile</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="mobile" name="mobile" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="mobile" class="col-sm-2 col-form-label">class</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="class" name="class" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="schoolname" class="col-sm-2 col-form-label">schoolname</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="school_name" name="school_name" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="discounts" class="col-sm-2 col-form-label">discounts</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="discounts" name="discounts" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="row mb-3">
                                                      <label for="discounts" class="col-sm-2 col-form-label">comment</label>
                                                        <div class="col-sm-10">
                                                          <input  type="text" id="comment" name="comment" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                      
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                      
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                      </form>
                                   
                                 
                            </div>
                          </div>
                          </div>

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Ученики</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Таблицы</a></li>
                                            <li class="breadcrumb-item active">Таблица Учеников</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        
                            
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>email</th>
                                                <th>sex</th>
                                                <th>mobile</th>
                                                <th>class</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                             @foreach ($students as $student)
                                             <tr>
                                               <td>{{ $student['fullname'] }}</td> 
                                               <td>{{ $student['address'] }}</td> 
                                               <td>{{ $student['email'] }}</td> 
                                               <td>{{ $student['sex'] }}</td> 
                                               <td>{{ $student['mobile'] }}</td> 
                                               <td>{{ $student['class'] }}</td> 
                                             </tr>  
                                             @endforeach   
                                        
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        

                        
                    </div> <!-- container-fluid -->
                </div>
                
            
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Umai.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Zhas
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-1.jpg')}}" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-2.jpg')}}" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{ asset('assets/css/bootstrap-dark.min.css')}}" data-appStyle="{{ asset('assets/css/app-dark.min.css')}}">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-3.jpg')}}" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{ asset('assets/css/app-rtl.min.css')}}">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script>
            $(document).ready(function() {
  $("#formButton").click(function() {
    $("#apear").toggle();
  });
});
        </script>
        <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- plugin js -->
        <script src="{{ asset('assets/libs/moment/min/moment.min.js')}}"></script>
        <script src="{{ asset('assets/libs/jquery-ui-dist/jquery-ui.min.js')}}"></script>
        <script src="{{ asset('assets/libs/@fullCalendar/core/main.min.js')}}"></script>
        <script src="{{ asset('assets/libs/@fullCalendar/bootstrap/main.min.js')}}"></script>
        <script src="{{ asset('assets/libs/@fullCalendar/daygrid/main.min.js')}}"></script>
        <script src="{{ asset('assets/libs/@fullCalendar/timegrid/main.min.js')}}"></script>
        <script src="{{ asset('assets/libs/@fullCalendar/interaction/main.min.js')}}"></script>

        <!-- Calendar init -->
        <script src="{{ asset('assets/js/pages/Calendar.init.js')}}"></script>

        <script src="{{ asset('assets/js/app.js')}}"></script>

    </body>
</html>
@endsection