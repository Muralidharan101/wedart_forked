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
  <title>Koho - Premium Admin Template</title>
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
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Blog Days</h3>
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
                  <h3>Blog Days Creation</h3>
                </div>

                <div class="card-body">

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Blog</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="blog"></select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Blog Days</label>
                        <select 
                          class="form-select" 
                          style="border: 1px solid #e0dddd" 
                          id="blog_day"
                          onchange="listday('add')"></select>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Day Count</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="day_count"></select>
                      </div>
                    </div>
                  </div>
                  <div class="text-end">
                      <button class="btn btn-primary" id="addbtn" type="submit">Create Blog Days</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h3>All Blogs Days</h3>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tbl">
                      <thead>
                        <tr>
                          <td>SNo</td>
                          <td>Blog Name</td>
                          <td>Refferer Name</td>
                          <td>Days Count</td>
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
                      <label class="form-label">Blog</label>
                      <select class="form-control" style="border: 1px solid #e0dddd" id="edit1">
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Refferer</label>
                      <select 
                        class="form-control" 
                        style="border: 1px solid #e0dddd" 
                        id="edit2"
                        onchange="listday('edit')">
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Day Count</label>
                      <select class="form-control" style="border: 1px solid #e0dddd" id="edit3">
                      </select>
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
    var data = [];
    var deleteid;
    var editname;
    var dataTable;
    var blogDetails;
    var dayDetails;

    function setid(id, blogId, b_Name, day_Id, ref_name, day_Count) {
      deleteid = id;
      var editblog = document.getElementById('edit1');
      var editday = document.getElementById('edit2');
      var editdaycount = document.getElementById('edit3');
      editblog.innerHTML = ""; editday.innerHTML = ""; editdaycount.innerHTML ="";
      editblog.innerHTML = `<option value="${blogId}">${b_Name}</option>`; 
      editday.innerHTML = `<option value="${day_Id}">${ref_name}</option>`;
      editdaycount.innerHTML =`<option value="${day_Count}">${day_Count}</option>`;
      fetchSelect();
    }

    function postreq() {  
      var blog_id = $('#blog').val();
      var day_id = $('#blog_day').val();
      var day = $('#day_count').val();

      if(blog_id == ''){
        toastr.error('Select Blog');
      } else if(day_id == '') {
        toastr.error('Select Blog Day');
      } else if(day == '') {
        toastr.error('Select Day Count');
      } else {
        var fd = new FormData();
        fd.append('blog_id', blog_id);
        fd.append('blog_days_id', day_id);
        fd.append('day_count', day);
        $.ajax({
          url: 'ajax/blog_days/blog_days_creation.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              fetchSelect();
              fetchdata();
            } else if (result.status == 'Available') {
              toastr.error(result.remarks);
            } else {
              toastr.error('Sorry, Error with the Backend');
            }
          }
        })
      }
    }

    function fetchdata(){
      $.ajax({
      url: 'ajax/blog_day/blog_day_list.php',
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
                  onclick="setid('${obj.id}','${obj.blog_id}','${obj.blog_name}','${obj.blog_days_id}','${obj.ref_name}','${obj.day_count}')" 
                  data-feather="edit-2" 
                  data-bs-toggle="modal" 
                  data-original-title="test"
                  data-bs-target="#exampleModal"
                  style="cursor:pointer">
                </i>`;
          temp.push(
            {
              'count': ++count,
              'b_name': obj.blog_name, 
              'ref_name': obj.ref_name,
              'day_count': obj.day_count,
              'action': tryed})
          });
          if(dataTable){
            dataTable.destroy();
          }
        dataTable = $('#tbl').DataTable({
        "pageLength": 10,
        "columns": [
          {"data": "count"},  
          {"data": "b_name"},
          {"data": "ref_name"},
          {"data": "day_count"}, 
          {"data": "action"}  
        ]
        });
        dataTable.clear().rows.add(temp).draw();
        feather.replace();
      }
    })
    };fetchdata();

    function editreq() {  
      var inpt1 = $('#edit1').val();
      var inpt2 = $('#edit2').val();
      var inpt3 = $('#edit3').val();
      if(inpt1 == ''){
        toastr.error('Select Blog');
      } else if(inpt2 == '') {
        toastr.error('Select Referrer');
      } else if(inpt3 == '') {
        toastr.error('Selct Days Count');
      } else {
        var fd = new FormData();
        fd.append('id', deleteid);
        fd.append('blog_id', inpt1);
        fd.append('blog_days_id', inpt2);
        fd.append('day_count', inpt3);
        $.ajax({
          url: 'ajax/blog_day/blog_day_edit.php',
          data: fd,
          type: 'post',
          contentType: false,
          processData: false,
          success: function (response) {
            var result = JSON.parse(response);
            if (result.status == 'Success') {
              toastr.success(result.remarks);
              fetchdata();
            } else {
              toastr.error('Sorry, Error with the Backend');
            }
          }
        })
      }
    }

    function deletereq() {
      var fd = new FormData();
      fd.append('id', deleteid);
      $.ajax({
        url: 'ajax/blog_days/blog_days_remove.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if(result.status == 'Success'){
              toastr.success(result.remarks);
              setid('');fetchdata();
          } else {
            toastr.error('Sorry, Error with the Backend');
          }
        }
      })
    }    

    function fetchSelect (){
      $.ajax({
      url: 'ajax/blog/blog_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        blogDetails = result.data;

        var slet = document.getElementById('blog');
        slet.innerHTML = '';  
        const defaultOption = document.createElement("option");
          defaultOption.value = "";
          defaultOption.text = "Select an option";
          defaultOption.disabled = true; defaultOption.selected = true;
        slet.appendChild(defaultOption)

        blogDetails.forEach(option => {
          const newOption = document.createElement("option");
          newOption.value = option.id;
          newOption.text = option.blog_name;
          slet.appendChild(newOption);
        });
      }
      })
      $.ajax({
      url: 'ajax/day/day_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        dayDetails = result.data;
        var slet = document.getElementById('blog_day');
        slet.innerHTML = '';  
        const defaultOption = document.createElement("option");
          defaultOption.value = "";
          defaultOption.text = "Select an option";
          defaultOption.disabled = true; defaultOption.selected = true;
        slet.appendChild(defaultOption)

        dayDetails.forEach(option => {
          const newOption = document.createElement("option");
          newOption.value = option.id;
          newOption.text = option.ref_name + " - ( " + option.days_count + " )";
          slet.appendChild(newOption);
        });
      }
      })
    } fetchSelect();

    function editSelect(){
      var slet1 = document.getElementById('edit1');
      var slet2 = document.getElementById('edit2');
      blogDetails.forEach(option => {
          const newOption = document.createElement("option");
          newOption.value = option.id;
          newOption.text = option.blog_name;
          slet1.appendChild(newOption);
      });
      dayDetails.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.ref_name + " - ( " + option.days_count + " )";
        slet2.appendChild(newOption);
      });
    }

    function listday(arg){
      if(arg == "add"){
        var selec = document.getElementById('day_count');
        selec.innerHTML = '';
        var day = $('#blog_day').val();
        var totalDays;
        dayDetails.map(obj => {
          if(obj.id == day){
            totalDays = obj.days_count;
          }
        })
        if(totalDays > 0){
          for (var i = 1; i <= totalDays; i++) {
            var newOption = document.createElement("option");
            newOption.value = i;
            newOption.text = i;
            selec.appendChild(newOption);
          }
        } else {
          var newOption = document.createElement("option");
          newOption.value = "0";
          newOption.text = "0";
          selec.appendChild(newOption);
        }
      } else {
        var selec1 = document.getElementById('edit3');
        selec1.innerHTML = '';
        var day1 = $('#edit2').val();
        var totalDays;
        dayDetails.map(obj => {
          if(obj.id == day1){
            totalDays = obj.days_count;
          }
        })
        if(totalDays > 0){
          for (var i = 1; i <= totalDays; i++) {
            var newOption = document.createElement("option");
            newOption.value = i;
            newOption.text = i;
            selec1.appendChild(newOption);
          }
        } else {
          var newOption = document.createElement("option");
          newOption.value = "0";
          newOption.text = "0";
          selec1.appendChild(newOption);
        }
      }     
    }
  </script>


<style>
    .badge:hover{
      cursor: pointer;
    }
    .ho{
      cursor: pointer;
    }
    @media only screen and (max-width: 991px) {
      #dot{
        display: none;
      }
    }
    .lnk{
      background: transparent;
      color:  blue !important;
      border: none;
    }
</style>

</body>

</html>