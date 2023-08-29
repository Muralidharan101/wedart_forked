<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/koho/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:01:29 GMT -->
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
</head>

  <body onload="checkCookie()">
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card">
            <div>
              
              <div class="login-main"> 
              <div class="cntr">
                <div class="logodiv">
                </div>
              </div>
                <div class="theme-form">
                  <h2 class="text-center">Sign in to account</h2>
                  <br>
                  <div class="form-group">
                    <label class="col-form-label">Phone Number</label>
                    <input class="form-control" id="phone" type="text" 
                          oninput="onlynum(this);" style="border: 1px solid #e0dddd">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" id="password" name="login[password]" style="border: 1px solid #e0dddd">
                      <div class="show-hide"><span class="show">                         </span></div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <div style="margin-top: 2em;">
                      <input id="remember" type="checkbox"  checked="">
                      <label class="text-muted" for="remember">Keep me logged in</label>
                    </div>
                    <div class="text-end mt-3">
                      <button class="btn btn-primary btn-block w-100" id="sign_in">Sign in</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
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
        var phonePattern = /^\d{10}$/;
        var but = document.getElementById('sign_in');

        function onlynum(e) {
          var input = e.value.replace(/[^0-9]/g, '');  
          e.value = input; 
        }

        function getCookie(cname) {
          let name = cname + "=";
          let decodedCookie = decodeURIComponent(document.cookie);
          let ca = decodedCookie.split(';');
          for (let i = 0; i < ca.length; i++) {
              let c = ca[i];
              while (c.charAt(0) == ' ') {
                  c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                  return c.substring(name.length, c.length);
              }
          }
          return "";
        }

        function checkCookie() {
          let role = getCookie("role");
          let name = getCookie("name");
          let mobile = getCookie("phone");

          if (name != "" && role != "" && mobile != "") {
           window.location.href = 'list_lead.php';
          } 
        }

        function setCookie(cname, cvalue, exdays) {
          const d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          let expires = "expires="+ d.toUTCString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        but.addEventListener('click', () => {
          var phone = document.getElementById('phone').value;
          var password = document.getElementById('password').value;
          var remember = document.getElementById('remember');
          if (!phonePattern.test(phone)) {
            toastr.error('Please enter a valid 10-digit phone number');
          } else if (password === '') {
            toastr.error('Enter Password');
          } else {
            var fd = new FormData();
            fd.append('phone', phone);
            fd.append('password', password);
            $.ajax({
              url: 'ajax/login/login.php',
              data: fd,
              type: 'post',
              contentType: false,
              processData: false,
              success: function(response) {
                var res = JSON.parse(response);
                if (res.status === "Success") {
                  res.data.map(obj => {
                    if ((obj.role === "admin" || obj.role === "branch_user" || obj.role === "corporate_user") && remember.checked) {
                      setCookie('name', obj.name, 365);
                      setCookie('phone', obj.mobile, 365);
                      setCookie('role', obj.role, 365);
                      window.location.href = 'list_lead.php';
                    } else if ((obj.role === "admin" || obj.role === "branch_user" || obj.role === "corporate_user") && !remember.checked) {
                      sessionStorage.setItem('name', obj.name);
                      sessionStorage.setItem('phone', obj.mobile);
                      sessionStorage.setItem('role', obj.role);
                      window.location.href = 'list_lead.php';
                    } else {
                      toastr.error('Invalid Role! Contact Admin');
                    }
                  });
                } else if (res.status === "Failure") {
                  toastr.error('Invalid Credential. Check Phone & Password');
                } else {
                  toastr.error('Server Error');
                }
              }
            });
          }
        });

      </script>


        <style>
        .cntr{
          display: flex;
          justify-content: center;
          margin-bottom: 1em;
        }
        .logodiv{
          background-image: url('wedart.jpeg');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: fixed;
          height: 60px;
          width: 150px;
        }
      </style>
  </body>

<!-- Mirrored from admin.pixelstrap.com/koho/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:01:29 GMT -->
</html>