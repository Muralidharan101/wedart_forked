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
    <!-- Page Header Ends -->
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
                <h3>Services</h3>
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
                  <h3>Service Creation</h3>
                </div>

                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-4">
                        <div class="mb-4">
                          <label class="form-label" for="category">Select service category</label>
                          <select class="form-select digits" style="border: 1px solid #e0dddd" id="category">
                            <option value="" selected disabled>- Select -</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" for="inpt">Enter Service</label>
                          <input class="form-control" style="border: 1px solid #e0dddd" id="inpt">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" style="color:transparent">.</label><br>
                          <button class="btn btn-primary" id="addbtn" type="submit">Create Service</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Services</h3>
                </div>
                <div class="card-body">
                  <!--map list-->
                  <div class="table-responsive">
                    <table id="tbl">
                      <thead>
                        <tr>
                          <td>SNo</td>
                          <td>Service Category</td>
                          <td>Service</td>
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
              <h3 class="modal-title" id="exampleModalLabel">Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-4">
                      <label class="form-label" for="editselect">Select service category</label>
                      <select class="form-select digits" style="border: 1px solid #e0dddd" id="editselect">
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label" for="edit">Enter Service</label>
                      <input class="form-control" style="border: 1px solid #e0dddd" id="edit">
                    </div>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-success" type="button" data-bs-dismiss="modal" onclick="editreq()">Edit</button>
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
    var editname; 
    var editselectid; 
    var editselectvalue;
    var service_categorys;
    var dataTable;

    function setid(id, type, type_id, ser_name) {
      console.log(id, type, type_id, ser_name)
      deleteid = id; editname = ser_name; 
      document.getElementById('edit').value = ser_name; 
      editselect = type_id; editselectvalue = type;
      var sel = document.getElementById('editselect');
      var setoption = document.createElement('option')
      setoption.value = type_id;
      setoption.text = type;
      while (sel.firstChild) {
        sel.removeChild(sel.firstChild);
      }
      const optgroup = document.createElement('optgroup');
      optgroup.label = 'Selected Service';
      sel.appendChild(optgroup)
      sel.appendChild(setoption);
      fetcheditselectdata()
    }
    
    function fetchdata(){
      $.ajax({
      url: 'ajax/service/service_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        data = result.data;
        var count = 0; var temp = [];
        data.map(obj => {
          var tryed = `
                <i
                  onclick="setid('${obj.id}','${obj.type_name}','${obj.type_id}','${obj.service_name}')" 
                  data-feather="edit-2" 
                  data-bs-toggle="modal" 
                  data-original-title="test"
                  data-bs-target="#exampleModal"
                  style="cursor:pointer">
                </i>`;
          temp.push(
            {
              'count': ++count,
              'type_name': obj.type_name, 
              'service_name':obj.service_name,
              'action': tryed})
          });
          if(dataTable){
            dataTable.destroy();
          }
        dataTable = $('#tbl').DataTable({
        "pageLength": 10,
        "columns": [
          {"data": "count"},  
          {"data": "type_name"},
          {"data": "service_name"}, 
          {"data": "action"}  
        ]
        });
        dataTable.clear().rows.add(temp).draw();
        feather.replace();
      }
    })
    };fetchdata();


    function postreq() {
      var selectinpt = $('#category').val();
      var servicename = $('#inpt').val();

      if(selectinpt == '')
      {
        toastr.error('Select category');
      }
      else if(servicename == '')
      {
        toastr.error('Enter service');
      }
      else
      {
        var fd = new FormData();
        fd.append('service_category', selectinpt);
        fd.append('service', servicename)
        $.ajax({
          url: 'ajax/service/service_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              $('#inpt').val('');
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

    function editreq() {
      var selectinpt = $('#editselect').val();
      var servicename = $('#edit').val();

      if(servicename == '')
      {
        toastr.error('Enter service');
      }
      else
      {
        var fd = new FormData();
        fd.append('id',deleteid)
        fd.append('service_category', selectinpt);
        fd.append('service', servicename)
        $.ajax({
          url: 'ajax/service/service_edit.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
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

    

    function deletereq() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/service/service_remove.php',
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
              setid('');fetchdata();
          } else
          {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
    }

    //getting service category
    function fetchselectdata(){
      $.ajax({
      url: 'ajax/service_category/service_category_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        service_categorys = result.data;
        var slet = document.getElementById('category');
        service_categorys.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.type_name;
        slet.appendChild(newOption);
        });
      }
    })
    };fetchselectdata();
    function fetcheditselectdata(){
      var editslet = document.getElementById('editselect');
      const optgroup = document.createElement('optgroup');
      optgroup.label = 'All Services';
      editslet.appendChild(optgroup)
      service_categorys.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.type_name;
        editslet.appendChild(newOption)
      });
    };
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
  i{
    cursor: pointer !important;
  }
</style>

</body>

</html>