<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:24 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <title>Wedart</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
</head>

<body>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
      <div class="header-wrapper row m-0">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Koho .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="index.html">
              <!-- <img height="40" width="140" src="wedart.jpeg" alt="er"> -->
            </a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0">
          <div class="input-group" style="background-color: transparent;">
            <img class="img-fluid for-light" height="40" width="110" src="wedart.jpeg" alt="">
          </div>
        </div>
        <div class="nav-right col-6 pull-right right-header p-0">
          <ul class="nav-menus">

            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="d-flex profile-media"><img class="b-r-50" src="../assets/images/dashboard/profile.png" alt="">
                <div class="flex-grow-1"><span>Helen Walter</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="login.php"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper">
            <a href="index.html" data-bs-original-title="" title="">
              <img class="img-fluid for-light" style="opacity: 0;" src="../assets/images/logo/logo.png" alt="">
              <img class="img-fluid for-dark" style="opacity: 0;" src="../assets/images/logo/logo-dark.png" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-left status_toggle middle sidebar-toggle">
                <line x1="17" y1="10" x2="3" y2="10"></line>
                <line x1="21" y1="6" x2="3" y2="6"></line>
                <line x1="21" y1="14" x2="3" y2="14"></line>
                <line x1="17" y1="18" x2="3" y2="18"></line>
              </svg>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="index.html" data-bs-original-title="" title="">
              <img class="img-fluid for-light" style="opacity: 0;" src="../assets/images/logo/logo-icon.png" alt="">
              <img class="img-fluid for-dark" style="opacity: 0;" src="../assets/images/logo/logo-icon-dark.png" alt="">
            </a>
          </div>
          <nav class="sidebar-main">
            <div class="left-arrow disabled" id="left-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
              </svg>
            </div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar" data-simplebar="init" style="display: block;">
                <div class="simplebar-wrapper" style="margin: 0px 0px -30px;">
                  <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                  </div>
                  <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px;bottom: 0px;height: 100vh;">
                      <div class="simplebar-content-wrapper" style="height: auto;overflow: hidden scroll;height: 100vh !important;">
                        <div class="simplebar-content" style="padding: 0px 0px 30px;">

                          <li class="back-btn"><a href="index.html" data-bs-original-title="" title=""><img class="img-fluid for-light" src="../assets/images/logo/logo-icon.png" alt=""><img class="img-fluid for-dark" src="../assets/images/logo/logo-icon-dark.png" alt=""></a>
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                          </li>

                          <li class="sidebar-main-title">
                            <div>
                              <h4>User Navigations</h4>
                            </div>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="database"></i><span>Master Data</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="source.php">Source</a></li>
                              <li><a href="service_category.php">Service Category</a></li>
                              <li><a href="service.php">Service</a></li>
                              <li><a href="additional_service.php">Additional Service</a></li>
                              <li><a href="branch.php">Branch</a></li>
                              <li><a href="users.php">Users</a></li>
                              <li><a href="blog_creation.php">Blogs</a></li>
                              <li><a href="day_creation.php">Blog Days</a></li>
                              <li><a href="general_settings.php">General Settings</a></li>
                            </ul>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="trending-up"></i><span>Leads</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="lead_creation.php">Lead Creation</a></li>
                              <li><a href="list_lead.php">Leads & Baby Studio</a></li>
                              <li><a href="today_follow_up.php">Today FollowUp</a></li>
                              <li><a href="closed_lead.php">Closed Leads</a></li>
                            </ul>
                          </li>

                          <li class="sidebar-list"> <a class="sidebar-link sidebar-title" href="javascript:void(0)"><i data-feather="dollar-sign"></i><span>Transactions</span></a>
                            <ul class="sidebar-submenu">
                              <li><a href="transaction_report.php">Transaction Reports</a></li>
                            </ul>
                          </li>
                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="simplebar-placeholder" style="width: auto; height: 2453px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                  <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                  <div class="simplebar-scrollbar" style="height: 2551px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                </div>
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">

        <div class="container-fluid" id="listfollowup">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>FollowUp</h3>
              </div>
            </div>
          </div>
        </div>


        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>Client Details</h3>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-check-label">Name</label>&emsp;
                        <label class="form-check-label" style="color: blue" id="namelab">(null)</label>
                      </div>
                      <div class="mb-3">
                        <label class="form-check-label">Event-Date</label>&emsp;
                        <label class="form-check-label" style="color: blue" id="event_date">(null)</label>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="mb-3">
                        <label class="form-check-label">Service</label>&emsp;
                        <label class="form-check-label" style="color: blue" id="service">(null)</label>
                      </div>
                      <div class="mb-3">
                        <label class="form-check-label">Additional Service</label>&emsp;
                        <label class="form-check-label" style="color: blue" id="a_s">
                          <!-- <span 
                                          class="badge badge-pill badge-light"
                                          style="color:black; background-color: lightgrey">
                                              Photography
                                      </span> -->
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card" id="listfollowup">
                <div class="card-header pb-0">
                  <h3 style="display:inline;">FollowUp Activity</h3>
                  <div style="float: right;margin: 0.7em">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal" onclick="trignew()" id="newFollowUpBtn">
                      <div style="display: flex; justify-content: center;align-items:center">
                        <i data-feather="plus"></i> &nbsp; New FollowUp
                      </div>
                    </button>
                    <button class="btn btn-info" data-bs-toggle="modal" data-original-title="test" data-bs-target="#ModelClose" id="closeLeadBtn">Close Lead</button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <!-- class="table-responsive" -->
                    <table id="tbl">
                      <thead>
                        <tr style='text-align: center'>
                          <th scope="col">SNo</th>
                          <th>Date</th>
                          <th>Approach Topic</th>
                          <th>Response</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!--data-->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>


          </div>

        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-10 p-0 footer-left">
                <p class="mb-0">Copyright 2022 © Wedart</p>
              </div>
              <div class="col-2 p-0 footer-right"> <i class="fa fa-heart font-danger"> </i></div>
            </div>
          </div>
        </footer>

        <!--followup add, edit-->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Action</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label" for="edit">Select FollowUp Date</label>
                  <input class="form-control" type="date" style="border: 1px solid #e0dddd" id="f_date">
                </div>
                <div class="mb-3">
                  <label class="form-label" for="edit">Approach Topic</label>
                  <input class="form-control" style="border: 1px solid #e0dddd" id="a_topic">
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" id="add_or_edit">Add</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>

        <!--followup response add, edit-->

        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Add Response</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3">
                      <label class="form-label" for="edit">Enter Response</label>
                      <textarea class="form-control" style="border: 1px solid #e0dddd" rows="5" id="editRes"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="postResponse()">Add Response</button>
              </div>
            </div>
          </div>
        </div>

        <!--close lead-->

        <div class="modal fade" id="ModelClose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Close Lead</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body overflow-auto">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="mb-3">
                      <label class="h2">Converted</label>
                      <div style="float:right">
                        <label class="switch">
                          <input type="checkbox" onchange="convertCheck()" id="convert_check" checked><span class="switch-state"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <!-- <hr> -->
                  </div>
                  <div class="col-lg-5">
                    <div class="mb-3">
                      <label class="h2">Blog</label>
                      <div style="float:right">
                        <label class="switch">
                          <input type="checkbox" onchange="blogCheck()" id="blog_check" checked><span class="switch-state"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1"></div>
                </div>

                <div id="disppay">
                  <br><br>
                  <h3>Payment Method</h3>
                  <hr>
                  <div class="row">

                    <div class="col custom-radio-ml">
                      <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="bank" type="radio" checked="" name="payment" value="BANK TRANSFER">
                        <label class="form-check-label" for="bank">Bank Transfer</label>
                      </div>
                    </div>

                    <div class="col custom-radio-ml">
                      <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="upi" type="radio" name="payment" value="UPI">
                        <label class="form-check-label" for="upi">UPI</label>
                      </div>
                    </div>

                    <div class="col custom-radio-ml">
                      <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="check" type="radio" name="payment" value="CHECK">
                        <label class="form-check-label" for="check">Check</label>
                      </div>
                    </div>

                    <div class="col custom-radio-ml">
                      <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="cash" type="radio" name="payment" value="CASH">
                        <label class="form-check-label" for="cash">Cash</label>
                      </div>
                    </div>

                    <div class="col custom-radio-ml">
                      <div class="form-check radio radio-primary">
                        <input class="form-check-input" id="dd" type="radio" name="payment" value="DD">
                        <label class="form-check-label" for="dd">DD</label>
                      </div>
                    </div>

                    <div class="col-lg-12"><br>
                      <div class="row">
                        <div class="md-3 col-lg-5">
                          <label class="form-lalel">Enter Total Amount</label><br>
                          <input class="form-control" type="number" value="0" style="border: 1px solid #e0dddd" id="payment_amount">
                        </div>
                        <div class="md-3 col-lg-5">
                          <label class="form-lalel">Paid Amount</label><br>
                          <input class="form-control" type="number" value="0" style="border: 1px solid #e0dddd" id="paid_amount">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="disp">
                  <br><br>
                  <h3>Blog Options</h3>
                  <hr>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label class="form-label">Select Blog</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="blog">
                          <option value="" selected disabled> - Select - </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label class="form-label">Select Blog Days</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="days">
                          <option value="" selected disabled> - Select - </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="mb-3">
                <div class="text-end">
                  <button class="btn btn-danger" data-bs-dismiss="modal">Cancel
                  </button>
                  <button class="btn btn-success" style="margin: auto 2em auto 1em;" onclick="closeREQ()">
                    Close Lead
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  
  <!-- latest jquery-->
  <script src="../assets/js/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/bootstrap/popper.min.js"></script>
  <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <script src="../assets/js/scrollbar/simplebar.js"></script>
  <script src="../assets/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/js/config.js"></script>
  <script src="../assets/js/sidebar-menu.js"></script>
  <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <!-- <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.js"></script>

  <script src="../assets/js/tooltip-init.js"></script>
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>
<script>
  var link;
  var dataTable;
  const urlParams = new URLSearchParams(window.location.search).get('dat');
  const decodedData = JSON.parse(decodeURIComponent(urlParams));
  var data = [];
  var datobj = {};
  var followUpID;
  var event;

  function clearinput() {
    document.getElementById('a_topic').value = '';
    document.getElementById('f_date').value = '';
  }

  function trignew() {
    clearinput();
    event = 'add'
  }

  document.getElementById('add_or_edit').addEventListener('click', () => {
    if (event == 'add') {
      newFollowUp()
    }
    if (event == 'edit') {
      updateReq();
    }
  })

  function blogCheck() {
    if (document.getElementById('blog_check').checked == true) {
      document.getElementById('disp').style.display = 'block';
    } else {
      document.getElementById('disp').style.display = 'none';
    }
  }
  blogCheck();

  function convertCheck() {
    var blg = document.getElementById('blog_check');
    if (document.getElementById('convert_check').checked == true) {
      document.getElementById('disppay').style.display = 'block';
      blg.checked = true;
      blg.disabled = false;
      blogCheck()
    } else {
      document.getElementById('disppay').style.display = 'none';
      blg.checked = false;
      blg.disabled = true;
      blogCheck()
    }
  }
  convertCheck();

  function fetchselect() {
    var blogdata;
    var daysdata;
    $.ajax({
      url: 'ajax/blog/blog_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        blogdata = result.data;
        var selblog = document.getElementById('blog');
        blogdata.map(obj => {
          var opt = document.createElement('option');
          opt.text = obj.blog_name;
          opt.value = obj.id;
          selblog.appendChild(opt);
        })
      }
    })
    $.ajax({
      url: 'ajax/day/day_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        daysdata = result.data;
        var selblog = document.getElementById('days');
        daysdata.map(obj => {
          var opt = document.createElement('option');
          opt.text = obj.days_count;
          opt.value = obj.id;
          selblog.appendChild(opt);
        })
      }
    })
  }
  fetchselect();

  function checkStatus(arg) {
    if (arg == 'closed' || arg == 'converted') {
      document.getElementById('newFollowUpBtn').style.display = 'none';
      document.getElementById('closeLeadBtn').style.display = 'none'
    }
  }

  function fetchdata() {    
    var fd = new FormData();
    fd.append('lead_id', decodedData.lead_id);
    fd.append('lead', decodedData.lead);
    $.ajax({
      url: 'ajax/follow_up_data/follow_up_data_list.php',
      data: fd,
      type: 'post',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        if (result.status == 'Success') {
          data = result.data;createTable();
          data.map((item, index) => {
            var sts_val = item.lead_status;
            checkStatus(sts_val)
            var test = JSON.parse(item.service);
            var val = test.map(ob => (`
            <span class="badge badge-pill badge-light"
                  style="color:black; background-color: lightgrey">
                  ${ob.service}
            </span>`)).join('');
            var sval = `
            <span class="badge badge-pill badge-light"
                  style="color:black; background-color: lightgrey">
                  ${item.service_name}
            </span>`;
            if(index == 0){
              datobj = {'name' : item.name, 'eventdate': item.event_dateTime || item.event_date, 'service': sval, 'info': val}
            }
          });
          document.getElementById('namelab').innerHTML = datobj.name;document.getElementById('event_date').innerHTML = datobj.eventdate;
          document.getElementById('service').innerHTML = datobj.service; document.getElementById('a_s').innerHTML = datobj.info;
        }
      }
    })
  }fetchdata();

  function setid(type, id, date, approach) {
    console.log(type, id, date, approach);
    followUpID = id;
    if (type == 'res') {
      document.getElementById('editRes').value = '';
    }
    if (type == 'edit') {
      event = type;
      document.getElementById('f_date').value = date;
      document.getElementById('a_topic').value = approach;
    }
  }

  function createTable() {
    // <i
    //       data-bs-toggle="modal" data-original-title="test"
    //       data-bs-target="#exampleModal"
    //       onclick="setid('edit', '${obj.id}', '${obj.follow_up_date}', '${obj.approach}')"
    //       data-feather="edit"></i>
    var count = 0;
    var dat = [];
    count = 0;
    data.map(obj => {
      var val = '';
      if (obj.response != null || obj.response != 'null') {
        val = obj.response
      }
      dat.push({
        'id': ++count,
        'date': obj.follow_up_date,
        'topic': obj.approach,
        'response': val,
        'but': `
        <i
          onclick="setid('res', '${obj.id}')"
          data-bs-toggle="modal" data-original-title="test"
          data-bs-target="#Modal" 
          data-feather="message-square"></i>`
      })
    })
    if (dataTable) {
      dataTable.destroy();
    }
    dataTable = $('#tbl').DataTable({
      "pageLength": 10,
      "columns": [{
          "data": "id"
        },
        {
          "data": "date"
        },
        {
          "data": "topic"
        },
        {
          "data": "response"
        },
        {
          "data": "but"
        }
      ]
    });
    dataTable.clear().rows.add(dat).draw();
  }

  function newFollowUp() {
    var inpt1 = $('#f_date').val();
    var inpt2 = $('#a_topic').val();
    var currentDate = new Date();
    if (inpt1 < currentDate) {
      toastr.error('Select Valid Date')
    } else if (inpt1 == '') {
      toastr.error('Select Date');
    } else if (inpt2 == '') {
      toastr.error('Enter Topic');
    } else {
      var fd = new FormData();
      fd.append('lead_id', decodedData.lead_id);
      fd.append('follow_up_date', inpt1);
      fd.append('approach', inpt2)
      fd.append('lead', decodedData.lead);
      $.ajax({
        url: 'ajax/follow_up_data/follow_up_data_creation.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            fetchdata();
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }
  }

  function postResponse() {
    var inputvalue = $('#editRes').val();
    if (inputvalue == '') {
      toastr.error('Enter Valid Response');
    } else {
      var fd = new FormData();
      fd.append('id', followUpID);
      fd.append('response', inputvalue);
      $.ajax({
        url: 'ajax/follow_up_data/follow_up_response_creation.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            $('#editRes').val('');
            fetchdata();
          } else if (result.status == 'Available') {
            toastr.error(result.remarks);
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }
  }

  function closeREQ() {
    var fd = new FormData();
    const PAY = document.querySelector('input[name="payment"]:checked');
    var blogvalue = document.getElementById('blog');
    var dayvalue = document.getElementById('days');
    var sucesscount = 0;

    if (document.getElementById('convert_check').checked == true) {
      var amt = $('#payment_amount').val();
      var paidamt = $('#paid_amount').val();
      console.log(amt, paidamt)
      if (amt == '' || paidamt == '' || parseInt(amt) < parseInt(paidamt)) {
        toastr.warning('Enter vaild amount')
      } else {
        fd.append('converted', true)
        fd.append('payment_method', PAY.value)
        fd.append('amount', amt)
        fd.append('paid_amount', paidamt)
          ++sucesscount;
      }
    } else {
      fd.append('converted', false)
        ++sucesscount
    }

    if (document.getElementById('blog_check').checked == true) {
      if (blogvalue.value == '') {
        toastr.warning('Select Blog')
      } else if (dayvalue.value == '') {
        toastr.warning('Select Blog Days')
      } else {
        fd.append('blog', true);
        fd.append('blog_id', blogvalue.value)
        fd.append('day_id', dayvalue.value)
        if (sucesscount == 1) {
          postCloseData()
        }
      }
    } else {
      fd.append('blog', false)
      if (sucesscount == 1) {
        postCloseData()
      }
    }

    function postCloseData() {
      fd.append('lead_id', decodedData.lead_id)
      fd.append('lead', decodedData.lead)
      $.ajax({
        url: 'ajax/lead_closing/closed_lead_creation_and_update.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            setTimeout(() => {
              window.location.href = 'closed_lead.php';
            }, 1000);
          } else {
            toastr.error('Sry, Error with the Backend');
            setTimeout(() => {
              window.location.href = 'list_lead.php';
            }, 1000);
          }
        }
      })
    }
  }

  function updateReq() {
    var inpt1 = $('#f_date').val();
    var inpt2 = $('#a_topic').val();
    var currentDate = new Date();
    if (inpt1 < currentDate) {
      toastr.error('Select Valid Date')
    } else if (inpt1 == '') {
      toastr.error('Select Date');
    } else if (inpt2 == '') {
      toastr.error('Enter Topic');
    } else {
      var fd = new FormData();
      fd.append('id', followUpID);
      fd.append('lead_id', decodedData.lead_id);
      fd.append('follow_up_date', inpt1);
      fd.append('approach', inpt2)
      fd.append('lead', decodedData.lead);
      $.ajax({
        url: 'ajax/follow_up_data/follow_up_data_update.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function(response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            fetchdata();
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }
  }

  const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
  });
  const config = {
    childList: true,
    subtree: true
  };
  observer.observe(document.body, config);
</script>
<style>
  i {
    cursor: pointer !important;
  }

  i:hover {
    color: blue !important;
  }
</style>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  td {
    padding: 10px;
    text-align: center;
  }

  @media only screen and (max-width: 991px) {
    #dot {
      display: none;
    }
  }
</style>


</html>