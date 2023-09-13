<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:19 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Koho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Koho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
  <title>Wedart</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link
    href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
    rel="stylesheet">
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
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

  <link rel="stylesheet" type="text/css" href="/wedartfiles/customstyle.css">
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
    <?php include 'header.php'; ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include 'sidebar.php'; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <br>
                <h3>Dashboard</h3>
              </div>

            </div>
          </div>
        </div>

        <!--Raj Code-->
        <div class="container-fluid ecommerce-page">
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card sale-chart">
                  <div class="card-body"> 
                    <div class="d-flex">    
                      <div class="flex-shrink-0">          
                        <div class="sale-detail">
                          <div class="icon"><i class="fa-solid fa-arrow-trend-up" style="font-size: 20px;"></i></div>
                          <div class="sale-content">
                            <h3>Total Leads</h3>
                            <p id="dispLeads" style="font-size: 28px;">0  </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="position:absolute; top:20px; right:20px; color:blue; cursor:pointer; ">
                        <div class="icon">
                            <i class="fa-solid fa-arrow-up-right-from-square" onclick="window.location.href = 'list_lead.php'"></i>
                        </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card sale-chart">
                <div class="card-body">
                  <div class="d-flex">    
                    <div class="flex-shrink-0">         
                      <div class="sale-detail">
                        <div class="icon"><i class="fa-regular fa-circle-check" style="font-size: 20px;"></i></div>
                        <div class="sale-content">
                          <h3>Today's FollowUp</h3>
                          <p id="dispFollowUp" style="font-size: 28px;">0</p>
                        </div>
                      </div>
                    </div>
                    <div class="small-chart-view income-chart" id="income-chart"></div>
                  </div>
                  <div style="position:absolute; top:20px; right:20px; color:blue; cursor:pointer; ">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-right-from-square" onclick="window.location.href = 'today_follow_up.php'"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card sale-chart">
                <div class="card-body">
                  <div class="d-flex">    
                    <div class="flex-shrink-0">                
                      <div class="sale-detail">
                        <div class="icon"><i class="fa-solid fa-coins" style="font-size: 18px;"></i></div>
                        <div class="sale-content">
                          <h3>Pending Payment</h3>
                          <p id="dispPendingPay" style="font-size: 28px;">0  </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="position:absolute; top:20px; right:20px; color:blue; cursor:pointer; ">
                    <div class="icon">
                        <i class="fa-solid fa-arrow-up-right-from-square" onclick="window.location.href = 'closed_lead.php'"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- footer start-->
      <?php include 'footer.php'; ?>

      
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label class="form-label" for="edit">Enter Source Name</label>
                    <input class="form-control" style="border: 1px solid #e0dddd" id="edit">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="editreq()">Edit</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" onclick="deletesource()">Delete</button>
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
  <script src="../assets/js/tooltip-init.js"></script>
  <!-- Theme js-->
  <script src="../assets/js/script.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script>
    var lead = document.getElementById('dispLeads');
    var followUp = document.getElementById('dispFollowUp');
    var pendingpay = document.getElementById('dispPendingPay');

    function fetchdata(){
      $.ajax({
        url: 'ajax/dashboard/list.php',
        type: 'get',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
            lead.innerHTML = `&nbsp; &nbsp;` + result.lead_count;
            followUp.innerHTML = `&nbsp; &nbsp;` + result.today_count.follow_date_count;
            pendingpay.innerHTML = `&nbsp; &nbsp;` +result.payment_count;
        }
      })
    }fetchdata();
  </script>


<style>
  .badge:hover{
    cursor: pointer;
  }
  .bmain{
    box-sizing: border-box;
    display: flex;
    flex-wrap: wrap;
  }
  .btag{
    padding: 10px 25px;
    border-radius: 30px;
    background-color: var(--theme-default) !important;
    color: #fff;
    margin-right:10px;
    margin-bottom: 10px;
    display: flex;
    min-width:fit-content;
    justify-content: center;
    align-items: center;
    cursor: pointer;
  }
  @media only screen and (max-width: 991px) {
    #dot{
      display: none;
    }
  }
</style>

</body>

</html>