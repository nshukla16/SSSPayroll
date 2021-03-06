@extends('include.layout')
@section('header')
@foreach($data as $datas)
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title> {{ $datas->company_name}} | fggDashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet"
    href="/SSSPayroll/resources/views/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="/SSSPayroll/resources/views/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">

  <!-- jQuery -->
  <script src="/SSSPayroll/resources/views/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/SSSPayroll/resources/views/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
    $(document).ready(function () {
      $(".alert").delay(5000).slideUp(300);
    });
  </script>
  <!-- pdf convert js-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/SSSPayroll/resources/views/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/SSSPayroll/resources/views/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/SSSPayroll/resources/views/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/SSSPayroll/resources/views/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/SSSPayroll/resources/views/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/SSSPayroll/resources/views/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/SSSPayroll/resources/views/plugins/moment/moment.min.js"></script>
  <script src="/SSSPayroll/resources/views/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/SSSPayroll/resources/views/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
  </script>
  <!-- Summernote -->
  <script src="/SSSPayroll/resources/views/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/SSSPayroll/resources/views/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/SSSPayroll/resources/views/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/SSSPayroll/resources/views/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/SSSPayroll/resources/views/dist/js/demo.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{url('index')}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link" onclick="return window.history.back();">Back</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/SSSPayroll/resources/views/dist/img/user1-128x128.jpg" alt="User Avatar"
                  class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/SSSPayroll/resources/views/dist/img/user8-128x128.jpg" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/SSSPayroll/resources/views/dist/img/user3-128x128.jpg" alt="User Avatar"
                  class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="home" class="brand-link">
        <img src="/SSSPayroll/resources/views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
          {{$datas->company_name}}
        </span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="resources/views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="{{url('index')}}" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa fa-users"></i>
                <p>
                  Employees
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="margin-left: 10px;font-size: 0.95rem">
                <li class="nav-item">
                  <a href="{{url('employeelist')}}" class="nav-link">
                    <i class="fa fa-list-alt nav-icon"></i>
                    <p>List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('add_employee')}}" class="nav-link">
                    <i class="fa fa-user-plus nav-icon"></i>
                    <p>New</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('department')}}" class="nav-link">
                <i class="nav-icon fa fa-address-card"></i>
                <p>
                  Department
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('branchlist')}}" class="nav-link">
                <i class="nav-icon fa fa-cogs"></i>
                <p>
                  Branch
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('working_day')}}" class="nav-link">
                <i class="nav-icon fa fa-list-ol"></i>
                <p>
                  Working Days Master
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('holiday_day')}}" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  Holiday Master
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>

            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-rocket"></i>
                <p>
                  Leave Management
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="margin-left: 10px;font-size: 0.95rem">
                <li class="nav-item">
                  <a href="{{url('leave_type')}}" class="nav-link">
                    <i class="fa fa-list-alt nav-icon"></i>
                    <p>Leave Type</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fa fa-user-plus nav-icon"></i>
                    <p>Leave Request</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="{{url('attendance1')}}" class="nav-link">
                <i class="nav-icon fa fa-rocket"></i>
                <p>
                  Attendance Report
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    @endforeach
    <script type="text/javascript">
      function myFunction(input, tables) {
        var filter, tr, td, tds, i, txtValue, table, j;
        // console.log(input.value);
        // input = document.getElementById("myInput");
        filter = input.toUpperCase();
        table = document.getElementById(tables);
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[1];

          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
              // console.log(txtValue);
            } else {
              td = tr[i].getElementsByTagName("td")[2];

              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                  // console.log(txtValue);

                } else {
                  td = tr[i].getElementsByTagName("td")[3];

                  if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = "";
                      // console.log(txtValue);

                    } else {
                      td = tr[i].getElementsByTagName("td")[4];

                      if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                          // console.log(txtValue);

                        } else {
                          td = tr[i].getElementsByTagName("td")[5];

                          if (td) {
                            txtValue = td.textContent || td.innerText;
                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                              tr[i].style.display = "";
                              // console.log(txtValue);

                            } else {
                              td = tr[i].getElementsByTagName("td")[6];

                              if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                  tr[i].style.display = "";
                                  // console.log(txtValue);

                                } else {
                                  td = tr[i].getElementsByTagName("td")[7];

                                  if (td) {
                                    txtValue = td.textContent || td.innerText;
                                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                      tr[i].style.display = "";
                                      // console.log(txtValue);

                                    } else {
                                      td = tr[i].getElementsByTagName("td")[8];

                                      if (td) {
                                        txtValue = td.textContent || td.innerText;
                                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                          tr[i].style.display = "";
                                          // console.log(txtValue);

                                        } else {
                                          td = tr[i].getElementsByTagName("td")[9];

                                          if (td) {
                                            txtValue = td.textContent || td.innerText;
                                            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                              tr[i].style.display = "";
                                              // console.log(txtValue);

                                            } else {
                                              tr[i].style.display = "none";
                                              console.log(txtValue);

                                            }
                                          }
                                        }
                                      }
                                    }
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }
      }

      function change_st(id, table, val) {
        console.log(id + '*' + table + '*' + val);
        var url = '{{ route("change_status")}}';
        var token = "{{ csrf_token()}}";
        $.ajax({
          method: "post",
          url: url,
          data: {
            'table': table,
            'id': id,
            'val': val,
            '_token': token
          },
          dataType: 'json',
          success: function (response) {
            if (response.success == 'true') {
              alert(response.msg);
              console.log("success", response.msg);
              // window.location.href="employeelist";
            } else {
              alert(response.msg);
              console.log("failed", response.msg);

            }
          }
        });
      }
    </script>
    @endsection