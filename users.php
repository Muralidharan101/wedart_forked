<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/base-input.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:19 GMT -->

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
    <?php include 'header.php'; ?>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <?php include 'sidebar.php'; ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body" id="targetElement">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3 >Users</h3>
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
                  <h3 id="tit">User Creation</h3>
                </div>

                <div class="card-body">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Enter User Name</label>
                        <input class="form-control" style="border: 1px solid #e0dddd" id="user_name">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Enter Mobile Number</label>
                        <input class="form-control" oninput="onlynum(this)" style="border: 1px solid #e0dddd" id="user_mobile">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Password</label>
                        <input class="form-control" type="password" style="border: 1px solid #e0dddd" id="user_password">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Select Branch</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="user_branch">
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Select Role</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="user_role">
                            <option value="admin">ADMIN</option>
                            <option value="branch_user">BRANCH USER</option>
                            <option value="corporate_user">CORPORATE USER</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  
                  <div class="text-end">
                    <button class="btn btn-danger" style="opacity: 0" id="cancelbtn" onclick="window.location.reload()">Cancel Edit</button>
                    <button class="btn btn-primary" id="addbtn" type="submit">Create User</button>
                  </div>
                </div>

                

              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Users</h3>
                </div>
                <div class="card-body">
                  <!--map list-->
                  <div class="table-responsive">
                    <table id="tbl">
                      <thead>
                        <tr>
                          <td>SNo</td>
                          <td>Name</td>
                          <td>Mobile</td>
                          <td>Branch</td>
                          <td>Role</td>
                          <td>Action</td>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
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
              <h3 class="modal-title" id="exampleModalLabel">Confirm Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure to Delete?</div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="setid('')">Close</button>
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
    <!--DataTable-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> 

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>  

    <!--Toster-->
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
    var dataTable;

    function onlynum(e) {
      var input = e.value.replace(/[^0-9]/g, '');  
      e.value = input; 
    }

    function setid(ob) {
      console.log('clicked', ob)
      deleteid = ob;
    }
    function setedit(id, name, mobile, role, branch_id, branch, password){
      var targetElement = document.getElementById('targetElement');
      targetElement.scrollIntoView({ behavior: 'smooth' });
      document.getElementById('cancelbtn').style.opacity = '1';
      console.log(id, name, mobile, role, branch, password); deleteid = id;
      document.getElementById('tit').innerHTML = 'Edit User '+ name;
      document.getElementById('user_name').value = name; document.getElementById('user_mobile').value = mobile;
      document.getElementById('user_password').value = ""
      var brn = document.getElementById('user_branch');
      while(brn.firstChild){
        brn.removeChild(brn.firstChild)
      }
      var optbran = document.createElement('option');
      optbran.value = branch_id;
      optbran.text = branch;
      optbran.selected = true;
      brn.appendChild(optbran);fetchselectdata();
      var rol = document.getElementById('user_role');
      var abtn = document.getElementById('addbtn'); 
      abtn.textContent = 'Update User'; 
      abtn.removeEventListener('click', postreq);
      abtn.addEventListener('click', editreq);
      document.getElementById('tit').textContent = 'Update User ( ' + name + ' )';

      while(rol.firstChild){
        rol.removeChild(rol.firstChild)
      }
      var optionValues = [
        {'value': role,'text':role}, 
        {'value': 'admin','text': "Admin"},
        {'value': 'branch_user','text':'Branch User'}, 
        {'value': 'corporate_user', 'text': 'Corparate User'}];
        optionValues.map(oj => {
          var option = document.createElement('option');
          option.value = oj.value;
          option.textContent = oj.text.toUpperCase();
          rol.appendChild(option);
        })
    }

    function fetchdata(){
      $.ajax({
      url: 'ajax/user/user_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        data = result.data; 
        console.log(result.data)
        var count = 0; var temp = [];
        data.map(obj => {
          var tryed = `
                <i
                  onclick="setedit('${obj.id}','${obj.name}','${obj.mobile}','${obj.role}','${obj.branch_id}','${obj.branch_name}','${obj.password}')"
                  data-feather="edit-2" 
                  style="cursor:pointer">
                </i>
                <i
                  onclick="setid(${obj.id})"
                  data-feather="trash-2" 
                  data-bs-toggle="modal" 
                  data-original-title="test"
                  data-bs-target="#exampleModal"
                  style="cursor:pointer;color:red">
                </i>`;
          temp.push(
            {
              'count': ++count,
              'name': obj.name,
              'mobile': obj.mobile,
              'branch':obj.branch_name.toUpperCase(),
              'role': obj.role, 
              'action': tryed
            })
          if(dataTable){
            dataTable.destroy();
          }
          dataTable = $('#tbl').DataTable({
          "pageLength": 10,
          "columns": [
            {"data": "count"},  
            {"data": "name"},
            {"data": "mobile"}, 
            {"data": "branch"},
            {"data": "role"},
            {"data": "action"} 
          ]
          });
          dataTable.clear().rows.add(temp).draw();
          feather.replace();
        })
          feather.replace()
      }
    })
    }fetchdata();

    function postreq() {
      var nameinput = $('#user_name').val();
      var passwordinput = $('#user_password').val();
      var mobileinput = $('#user_mobile').val();
      var branchinput = $('#user_branch').val();
      var roleinput = $('#user_role').val();
      var created_by; 
      if(getCookie("name") != ""){
        created_by = getCookie("name")
      } else {
        created_by = sessionStorage.getItem('name');
      }

      if(nameinput == '')
      {
        toastr.error('Enter user name');
      }
      else if(passwordinput == '')
      {
        toastr.error('Enter password');
      }
      else if(mobileinput == '')
      {
        toastr.error('Enter Mobile number');
      }
      else if(branchinput == '' || branchinput == "choose")
      {
        toastr.error('Select Branch');
      }
      else if(roleinput == '' || roleinput == 'choose')
      {
        toastr.error('Select role');
      }
      else
      {
        var fd = new FormData();
        fd.append('user_name', nameinput);
        fd.append('user_mobile', mobileinput);
        fd.append('user_password', passwordinput);
        fd.append('user_branch', branchinput);
        fd.append('user_role', roleinput);
        fd.append('created_by', created_by)
        $.ajax({
          url: 'ajax/user/user_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#user_name').val('');$('#user_password').val('');$('#user_mobile').val('');
              fetchdata();
              // fetchdata();
            } else if (result.status == 'Available') {
              toastr.error(result.remarks);
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
    }

    function editreq() {
      var nameinput = $('#user_name').val();
      var passwordinput = $('#user_password').val();
      var mobileinput = $('#user_mobile').val();
      var branchinput = $('#user_branch').val();
      var roleinput = $('#user_role').val();
      if(nameinput == '')
      {
        toastr.error('Enter user name');
      } 
      else if(mobileinput == '')
      {
        toastr.error('Enter Mobile number');
      }
      else if(branchinput == '')
      {
        toastr.error('Select Branch');
      }
      else if(roleinput == '')
      {
        toastr.error('Select role');
      }
      else
      {
        var fd = new FormData();
        fd.append('id', deleteid)
        fd.append('user_name', nameinput);
        fd.append('user_mobile', mobileinput);
        fd.append('user_password', passwordinput);
        fd.append('user_branch', branchinput);
        fd.append('user_role', roleinput);
        $.ajax({
          url: 'ajax/user/user_edit.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              setTimeout(function() {
                window.location.reload();
              }, 2000);
            } else if (result.status) {
              toastr.error(result.remarks);
            } else {
              toastr.error('Sry, Error with the Backend');
            }
          }
        })
      }
    }

    function deletesource() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/user/user_remove.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if(result.status == 'Success')
          {
              toastr.success(result.remarks);
              fetchdata();
              setid('')
          } else
          {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }

    function fetchselectdata(){
      $.ajax({
      url: 'ajax/branch/branch_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        var branch_data = result.data;
        var selet = document.getElementById('user_branch');
        var opgrp = document.createElement("optgroup")
        opgrp.label = 'All Branches';
        selet.appendChild(opgrp);
        branch_data.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.branch_name;
        selet.appendChild(newOption);
        });
      }
    })
    };fetchselectdata();

    const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
    });
    const config = { childList: true, subtree: true };
    observer.observe(document.body, config);
    
  </script>


<style>
    .badge:hover{
      cursor: pointer;
    }
    .ho{
      cursor: pointer;
    }
</style>

</body>

</html>