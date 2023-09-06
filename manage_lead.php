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
                <!-- <h3>Leads</h3> -->
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
                  <h3>Edit Lead</h3>
                </div>
                <hr style="padding: 0px;margin:15px 0px 0px 0px">
                <div class="card-body">

                  <div class="row">
                    <!--Hidden-->
                    <div class="col-lg-6" style="display: none;">
                      <div class="mb-3">
                        <label class="form-label">Lead No</label>
                        <input class="form-control" style="border: 1px solid #e0dddd;" id="leadno">
                      </div>
                    </div>
                    <!--end Hiddin-->

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Name <span style="color:red">*</span></label>
                        <input class="form-control" style="border: 1px solid #e0dddd" type="text" id="c_name">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Contact No <span style="color:red">*</span></label>
                        <input class="form-control" 
                          type="text" 
                          oninput="onlynum(this);"  style="border: 1px solid #e0dddd" id="contact">
                      </div>                     
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" id="lab3"></label>
                        <input class="form-control" type="datetime" style="border: 1px solid #e0dddd" id="inpt3">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" id="lab1"></label>
                        <input class="form-control" type="text" style="border: 1px solid #e0dddd" id="inpt1">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" id="lab2"></label>
                        <input class="form-control" style="border: 1px solid #e0dddd" id="inpt2">
                        <select class="form-select" style="border: 1px solid #e0dddd" id="sex">
                          <option value="" disabled selected> -Select- </option>
                          <option value="boy">Boy</option>
                          <option value="girl">Girl</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Estimated Amount</label>
                        <input
                          class="form-control" 
                          style="border: 1px solid #e0dddd" type="text" 
                          oninput="onlynum(this);" id="E_Amount">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Other Info</label>
                        <textarea class="form-control"  
                          type="text" rows="6"
                          style="border: 1px solid #e0dddd" 
                          id="otherinfo"
                          placeholder="Enter other informations about the lead"></textarea>
                      </div>
                    </div>

                      <div class="col-lg-4" id="leadDiv">
                        <div class="mb-3">
                          <label class="form-label">Lead Status</label>
                          <select class="form-select" style="border: 1px solid #e0dddd" id="lead_status_select">
                            <!--lead status-->
                          </select>
                        </div>
                      </div>

                  </div> 

                  <hr>
                  
                  <div class="text-end">
                    <button class="btn btn-primary" id="addbtn" type="submit">Update</button>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div>
      <!-- footer start-->
      <?php include 'footer.php'; ?>



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
    const urlParams = new URLSearchParams(window.location.search).get('dat');
    const decodedData = JSON.parse(decodeURIComponent(urlParams));
    var lab1 = document.getElementById('lab1'); var inpt1 = document.getElementById('inpt1');//event or age
    var lab2 = document.getElementById('lab2'); var inpt2 = document.getElementById('inpt2');//mandapam or sex
    var lab3 = document.getElementById('lab3'); var inpt3 = document.getElementById('inpt3');//date or datetime

    var c_name = document.getElementById('c_name');
    var gender = document.getElementById('sex');
    var contact = document.getElementById('contact');
    var other_info = document.getElementById('otherinfo');
    var EstimatedAmount = document.getElementById('E_Amount');
    var lead_status = document.getElementById('lead_status_select');
    var link;
    var leadDetails;
    
    function onlynum(e) {
      var input = e.value.replace(/[^0-9]/g, '');  
      e.value = input; 
    }

    document.getElementById("addbtn").addEventListener("click", postreq);

    function checkLead(){
      if(decodedData.lead == 'wedding'){
        lab1.innerHTML = 'Event'; lab2.innerHTML= 'Mandapam'; lab3.innerHTML = 'Event Date';
        inpt1.type = 'text'; inpt2.type = 'text'; inpt3.type = 'date'; gender.style.display = 'none';
        inpt1.value = ''; inpt2.value = ''; inpt3.value = '';
        link = 'ajax/lead_creation/lead_for_wedding.php';
        inpt1.oninput = function(){}
      } if(decodedData.lead == 'baby') {  
        lab1.innerHTML = 'Age'; lab2.innerHTML= 'Gender'; lab3.innerHTML = `Event Date/Time <span style="color:red">*</span>`;
        inpt1.type = 'text'; inpt2.type = 'hidden'; inpt3.type = 'datetime-local'; gender.style.display = 'block';
        inpt1.value = ''; inpt2.value = ''; inpt3.value = '';
        link = 'ajax/lead_creation/lead_for_baby_list.php';
        inpt1.oninput = function() {
            onlynum(inpt1);
        };
      }
      fetchleaddetails();
    }; checkLead();

    function fetchleaddetails(){
      var fd = new FormData();
      fd.append('lead_status', 'all')
      $.ajax({
      url: link,
      data: fd,
      type: 'post',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        var leads = result.data;
        if(decodedData.lead == 'wedding'){
          leads.map(obj => {
            if(obj.id == decodedData.lead_id){
              leadDetails = {
                'id' : obj.id,
                'name': obj.name, 
                'contact': obj.phone, 
                'inpt1': obj.event_date, 
                'inpt2' : obj.event, 
                'inpt3': obj.mandapam,
                'estimated_amount': obj.estimated_amount,
                'other_info': obj.other_info,
                'lead_status': obj.lead_status
              }
            }
          })
          if(leadDetails.lead_status != "converted" || leadDetails.lead_status != "closed"){
            lead_status.innerHTML = 
            `<option value=${leadDetails.lead_status} selected >${leadDetails.lead_status}</option>
             <option value="cold">Cold</option>
             <option value="hot">Hot</option>
             <option value="ready">Ready</option>`;
          }
          inpt2.value = leadDetails.inpt3
        } else {
          leads.map(obj => {
            if(obj.id == decodedData.lead_id){
              leadDetails = {
                'id' : obj.id, 
                'name': obj.name,
                'contact': obj.phone, 
                'inpt1': obj.event_dateTime, 
                'inpt2' : obj.age, 
                'inpt3': obj.sex,
                'estimated_amount': obj.estimated_amount,
                'other_info': obj.other_info,
                'lead_status': obj.lead_status
              }
            }
          })
          gender.innerHTML = 
              `<option value=${leadDetails.inpt3} selected >${leadDetails.inpt3}</option>
               <option value='boy'>boy</option>
               <option value='girl'>girl</option>`;
          if(leadDetails.lead_status != "converted" || leadDetails.lead_status != "closed"){
            lead_status.innerHTML = 
            `<option value=${leadDetails.lead_status} selected >${leadDetails.lead_status}</option>
             <option value="cold">Cold</option>
             <option value="hot">Hot</option>
             <option value="ready">Ready</option>`;
          }
        }
        console.log(leadDetails)
        c_name.value = leadDetails.name;
        contact.value = leadDetails.contact;
        EstimatedAmount.value = leadDetails.estimated_amount;
        other_info.value = leadDetails.other_info;
        inpt1.value = leadDetails.inpt2;
        inpt3.value = leadDetails.inpt1;
        if(leadDetails.lead_status == "converted" || leadDetails.lead_status == "closed"){
          document.getElementById('leadDiv').style.display = 'none'
        }
      }
      })
    } 

    
    function postreq() {
      var fd = new FormData();
      if(c_name.value == ""){
        toastr.error('Enter Name')
      } else if (contact.value == ""){
        toastr.error('Enter Contact')
      } else if (inpt3.value == ""){
        toastr.error('Enter Event Date/Time')
      } else {
      
      fd.append('id', decodedData.lead_id)
      fd.append('name', c_name.value)
      fd.append('phone',contact.value)
      fd.append('other_info',other_info.value)
      fd.append('estimated_amount', EstimatedAmount.value)

      if(leadDetails.lead_status != "converted" || leadDetails.lead_status != "closed"){
        fd.append('lead_status', lead_status.value)
      }
      
      if(decodedData.lead == 'wedding'){
        fd.append('wedding',true);
        fd.append('event', inpt1.value)
        fd.append('event_date', inpt3.value)
        fd.append('mandapam',inpt2.value)
      } else {
        fd.append('baby',true);
        fd.append('age', inpt1.value)
        fd.append('event_dateTime', inpt3.value)
        fd.append('sex',sex.value)
      }
      $.ajax({
        url: 'ajax/lead_creation/lead_edit.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            setTimeout(() => {
              window.location.href='list_lead.php'
            }, 1300)
          } else if (result.status == 'Available') {
            toastr.error(result.remarks);
          } else {
            toastr.error('Sry, Error with the Backend');
          }
        }
      })
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
    input:focus{
      box-shadow: 0px 0px 4px var(--theme-default) !important;
    }
    textarea:focus{
      box-shadow: 0px 0px 4px var(--theme-default) !important;
    }
    .cusdiv{
      border: 2px solid #e0dddd; 
      background-color: transparent;
      min-height: 150px;
      padding: 10px;
    }
    .cuslabel{
      padding-right: 20px;
      cursor: pointer;
    }
</style>

</body>

</html>