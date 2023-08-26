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
                <h3>Services Category</h3>
              </div>

            </div>
          </div>
        </div>

        <!--Raj Code-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">

              <div class="card">
                <div class="card-header pb-0">
                  <h3>Service Category Creation</h3>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Enter Service Category</label>
                        <input class="form-control" style="border: 1px solid #e0dddd" id="inpt">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <label class="form-label" style="color:transparent">.</label><br>
                      <button class="btn btn-primary" id="addbtn" type="submit">Create Service Category</button>
                    </div>
                  </div>
                </div>

                

              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Service Category</h3>
                </div>
                <div class="card-body" id="listdata">
                  <!--map list-->
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
                    <label class="form-label" for="edit">Enter Service Category</label>
                    <input class="form-control" style="border: 1px solid #e0dddd" id="edit">
                  </div>
                </div>
              </div>              
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="editreq()">Edit</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" onclick="deletereq()">Delete</button>
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
    document.getElementById("addbtn").addEventListener("click", postreq);
    var data;
    var deleteid;
    var editname;

    function fetchdata(){
      $.ajax({
      url: 'ajax/service_category/service_category_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        if(result.status == 'Success'){
          data = result.data;
          var mdv = document.createElement('div'); mdv.classList = 'bmain';
          mdv .innerHTML = 
          data.map(obj => (
            `<div 
                class="btag" 
                data-bs-toggle="modal" data-original-title="test"
                data-bs-target="#exampleModal" 
                onclick='setid(${obj.id}, "${obj.type_name}")'>
                ${obj.type_name} &nbsp;  
                <i data-feather="edit-2"></i>
              </div>`
          )).join('');
          document.getElementById('listdata').innerHTML = mdv.outerHTML;
          feather.replace()
        } else {
          document.getElementById('listdata').innerHTML = 'No Data'
        }
      }
    })
    }

    function postreq() {
      var inputvalue = $('#inpt').val();

      if(inputvalue == '')
      {
        toastr.error('Enter service category');
      }
      else
      {
        var fd = new FormData();
        fd.append('service_category', inputvalue);

        $.ajax({
          url: 'ajax/service_category/service_category_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            console.log(response)
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#src').val('');
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

    function deletereq() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/service_category/service_category_remove.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          console.log(response)
          var result = JSON.parse(response);
          console.log(result)
          if(result.status == 'Success')
          {
              toastr.success(result.remarks);
              setid('');
              fetchdata();
          } else
          {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }

    function setid(ob, name) {
      deleteid = ob; editname = name;
      document.getElementById('edit').value = name;
    }

    function editreq(){
      var inputvalue = $('#edit').val();
      if(inputvalue == '')
      {
        toastr.error('Enter service category');
      }
      else
      {
        var fd = new FormData();
        fd.append('id',deleteid);
        fd.append('service_category', inputvalue);
        $.ajax({
          url: 'ajax/service_category/service_category_edit.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            console.log(response)
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#edit').val('');
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

    
    fetchdata();
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
    padding: 10px 15px;
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
</style>

</body>

</html>