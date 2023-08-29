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
    <!-- Page Header Ends-->
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
                <h3>Leads</h3>
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
                  <h3>Lead Creation</h3>
                </div>

                <hr style="margin-bottom:10px;">

                <div class="card-body">
                  <div class="mb-3 row" style="margin-left: 0.5em;">
                    <div class="form-check radio radio-primary col-lg-2">
                      <input 
                        class="form-check-input" 
                        name="lead" id="wedding" 
                        checked
                        type="radio" value="true" onchange="radioChange()">
                      <label class="form-check-label" for="wedding">Wedding Leads</label>
                    </div>

                    <div class="form-check radio radio-primary col-lg-2">
                      <input 
                        class="form-check-input" 
                        name="lead" id="baby" 
                        type="radio" value="false" onchange="radioChange()">
                      <label class="form-check-label" for="baby">Baby's Event</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-12"><br>
                      <h3>Client Details</h3><br>
                    </div>
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
                        <label class="form-label" for="inpt">Select Source</label>
                        <select class="form-select" style="border: 1px solid #e0dddd" id="source">
                          <option value="choose" selected disabled> - Choose -</option>
                        </select>
                      </div>
                    </div>

                  </div> 

                  <hr>

                  <div class="row">
                    <div class="col-lg-12"><br>
                      <h3>Service Details</h3><br>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Select Service Category  <span style="color:red">*</span></label>
                        <select 
                          class="form-select" 
                          type="select" 
                          style="border: 1px solid #e0dddd" id="service_category"
                          onchange="fetfun()"><!--HEre-->
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Select Service <span style="color:red">*</span></label>
                        <select 
                          class="form-select" 
                          type="select" 
                          style="border: 1px solid #e0dddd" id="service_type">
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

                    <div class="col-lg-7">
                      <div class="mb-3">
                        <div class="row" style="display: none;">
                          <div class="col-lg-8">
                              <label class="form-label">Select Additional Service</label>
                              <select 
                                disabled 
                                class="form-select" 
                                type="select" 
                                style="border: 1px solid #e0dddd" 
                                id="service">
                              </select>
                          </div>
                          <div class="col-lg-4">
                              <label class="form-label"> .</label><br>
                              <input class="btn btn-light" id="addservice" type="button" value="Add Service" />
                          </div>
                        </div>
                        <label class="form-label">Select Additional Services</label>
                        <div id="listcheckbox"
                        class="cusdiv">
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-5">
                      <div class="mb-3">
                        <label class="form-label">Other Info</label>
                        <textarea class="form-control"  
                          type="text" rows="6"
                          style="border: 1px solid #e0dddd" 
                          id="otherinfo"
                          placeholder="Enter other informations about the lead"></textarea>
                      </div>
                    </div>
                  </div>

                  <hr>
                  
                  <div class="row">
                    <div class="col-lg-12"><br>
                      <h3>Follow Ups</h3><br>
                    </div>
                    <div class="col-lg-12">
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label">Follow Up Category</label>
                          <select id="follow_up_cateogry" class="form-select">
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label">Follow-Up Date</label>
                        <input class="form-control" 
                          type="date" style="border: 1px solid #e0dddd" id="followup">
                      </div>
                    </div>

                    <div class="col-lg-8">
                      <div class="mb-3">
                        <label class="form-label">FollowUp Details</label>
                        <textarea class="form-control"  
                          type="text" rows="6"
                          style="border: 1px solid #e0dddd" 
                          id="follow_up_status"
                          ></textarea>
                      </div>
                    </div>

                  </div>
                  
                  <div class="text-end">
                    <button class="btn btn-primary" id="addbtn" type="submit">Create Lead</button>
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
    var lab1 = document.getElementById('lab1'); var inpt1 = document.getElementById('inpt1');//event or age
    var lab2 = document.getElementById('lab2'); var inpt2 = document.getElementById('inpt2');//mandapam or sex
    var lab3 = document.getElementById('lab3'); var inpt3 = document.getElementById('inpt3');//date or datetime
    var leadno = document.getElementById('leadno');
    var source_id= document.getElementById('source');
    var c_name = document.getElementById('c_name');
    var gender = document.getElementById('sex');
    var contact = document.getElementById('contact');
    var followup = document.getElementById('followup');
    var service_category = document.getElementById('service_category');
    var service = document.getElementById('service');
    var service_type = document.getElementById('service_type');
    var EstimatedAmount = document.getElementById('E_Amount');
    var follow_up_status = document.getElementById('follow_up_status');
    var follow_up_category = document.getElementById('follow_up_cateogry');
    var other_info = document.getElementById('otherinfo');
    var arr = []; var selected_services = [];
    var wedding = document.getElementById('wedding');
    var baby = document.getElementById('baby');

    function onlynum(e) {
      var input = e.value.replace(/[^0-9]/g, '');  
      e.value = input; 
    }

    document.getElementById("addbtn").addEventListener("click", postreq);
    // document.getElementById("addservice").addEventListener("click", selectService);

    function radioChange(){
      if(wedding.checked){
        lab1.innerHTML = 'Event'; lab2.innerHTML= 'Mandapam'; lab3.innerHTML = `Event Date  <span style="color:red">*</span>`;
        inpt1.type = 'text'; inpt2.type = 'text'; inpt3.type = 'date'; sex.style.display = 'none';
        inpt1.value = ''; inpt2.value = ''; inpt3.value = '';
        inpt1.oninput = function(){}
      } else {  
        lab1.innerHTML = 'Age'; lab2.innerHTML= 'Gender'; lab3.innerHTML = `Event Date/Time  <span style="color:red">*</span>`;
        inpt1.type = 'text'; inpt2.type = 'hidden'; inpt3.type = 'datetime-local'; sex.style.display = 'block';
        inpt1.value = ''; inpt2.value = ''; inpt3.value = '';
        inpt1.oninput = function() {
            onlynum(inpt1);
        };
      }
    }radioChange();

    function getSource(){
      $.ajax({
      url: 'ajax/source/source_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        var source_array = result.data;

        var slet = document.getElementById('source');
        slet.innerHTML = '';  
        const defaultOption = document.createElement("option");
          defaultOption.value = "";
          defaultOption.text = "Select an option";
          defaultOption.disabled = true; defaultOption.selected = true;
        slet.appendChild(defaultOption)

        source_array.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.source_data;
        slet.appendChild(newOption);
        });
      }
      })
      $.ajax({
        url: 'ajax/follow_up/follow_up_list.php',
        type: 'get',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          var follow_category = result.data;

          var slet = document.getElementById('follow_up_cateogry');
          slet.innerHTML = '';  
          const defaultOption = document.createElement("option");
            defaultOption.value = "";
            defaultOption.text = "Select an option";
            defaultOption.disabled = true; defaultOption.selected = true;
          slet.appendChild(defaultOption)

          follow_category.forEach(option => {
          const newOption = document.createElement("option");
          newOption.value = option.follow_up_name;
          newOption.text = option.follow_up_name;
          slet.appendChild(newOption);
          });
        }
      })
    }getSource();

    function fetfun(){
      fetchselectdata();
      getAdditionalService();
    }

    function fetchservicecategory(){
      $.ajax({
      url: 'ajax/service_category/service_category_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        var service_category = result.data;

        var slet = document.getElementById('service_category');
        slet.innerHTML = '';  
        const defaultOption = document.createElement("option");
          defaultOption.value = "";
          defaultOption.text = "- Select -";
          defaultOption.disabled = true; defaultOption.selected = true;
        slet.appendChild(defaultOption)

        service_category.forEach(option => {
        const newOption = document.createElement("option");
        newOption.value = option.id;
        newOption.text = option.type_name;
        slet.appendChild(newOption);
        });
      }
    })
    };fetchservicecategory();

    function fetchselectdata(){
      $.ajax({
      url: 'ajax/service/service_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        var service = result.data;

        var slet = document.getElementById('service_type');
        slet.innerHTML = '';  
        const defaultOption = document.createElement("option");
          defaultOption.value = "";
          defaultOption.text = "Select an option";
          defaultOption.disabled = true; defaultOption.selected = true;
        slet.appendChild(defaultOption)

        service.forEach(option => {
          console.log(service_category.value , option.type_id, option.service_name)
        if(service_category.value == option.type_id){
          const newOption = document.createElement("option");
          newOption.value = option.id;
          newOption.text = option.service_name;
          slet.appendChild(newOption);
          }
        });
      }
    })
    };

    function getAdditionalService(){
      selected_services = [];
      document.getElementById('listcheckbox').innerHTML = '';
      $.ajax({
      url: 'ajax/additional_service/additional_service_list.php',
      type: 'get',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        var service_array = result.data;
        createCheckboxes(service_array);
      }
    })
    }

    function createCheckboxes(arg) {
      var container = document.getElementById('listcheckbox');
      var count = 0;

      arg.forEach(function (service) {
        if(service_category.value == service.type_id){
        var checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.value = service.id;
        checkbox.id = service.id;
        checkbox.dataset.service = service.additional_service_name;
        checkbox.classList.add('checkbox_animated');
        checkbox.addEventListener('change', handleCheckboxChange);

        var label = document.createElement('label');
        label.textContent = service.additional_service_name;
        label.htmlFor = service.id;
        label.classList.add('cuslabel')

        var divele = document.createElement('div')
        divele.appendChild(checkbox);divele.appendChild(label);
        container.appendChild(divele);
        ++count;
       }  
      });
      if(count < 1){
        container.innerHTML = "No Additional Services";
      }
    }

    function handleCheckboxChange(event) {
      var checkbox = event.target;
      var serviceId = parseInt(checkbox.value);
      var serviceName = checkbox.dataset.service;

      if (checkbox.checked) {
        selected_services.push({ 'id': serviceId, 'service': serviceName });
      } else {
        selected_services = selected_services.filter(function (service) {
          return service.id !== serviceId;
        });
      }
      console.log(selected_services);
    }
    
    function postreq() {
      var fd = new FormData();
      if(c_name.value == ''){
        toastr.error('Enter Name')
      } else if(contact.value == ''){
        toastr.error('Enter Contact')
      } else if (inpt3.value == ''){
        toastr.error('Enter Event Date')
      } else if (service_category.value == ''){
        toastr.error('Select Service Category')
      } else if (service_type.value == ''){
        toastr.error('Select Service')
      } else {
      
      fd.append('lead_no',leadno.value)
      fd.append('source_id',source.value)
      fd.append('name', c_name.value)
      fd.append('phone',contact.value)
      fd.append('other_info',other_info.value)
      fd.append('esimated_amount', EstimatedAmount.value)
      fd.append('service_category', service_category.value)
      fd.append('main_service', service_type.value)
      fd.append('service', JSON.stringify(selected_services))
      fd.append('follow_up_category', follow_up_category.value);
      fd.append('follow_up', followup.value);
      fd.append('follow_up_details', follow_up_status.value);
      
      if(wedding.checked){
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
        url: 'ajax/lead_creation/lead_creation.php',
        data: fd,
        type: 'post',
        contentType: false,
        processData: false,
        success: function (response) {
          var result = JSON.parse(response);
          if (result.status == 'Success') {
            toastr.success(result.remarks);
            // setTimeout(() => {
            //   window.location.href='list_lead.php'
            // }, 2000)
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
    #listcheckbox{
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }
</style>

</body>

</html>