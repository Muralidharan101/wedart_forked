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


        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">


              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h3>Lead Types</h3>
                  </div>
                  <div class="card-body">
                    <div class="row" style="margin-left: 0.5em;">
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="wedding" checked type="radio" value="true" onchange="radioChange()">
                        <label class="form-check-label" for="wedding">Adult Studio</label>
                      </div>

                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="baby" type="radio" value="false" onchange="radioChange()">
                        <label class="form-check-label" for="baby">Baby Studio</label>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <thead>
                          <tr style='text-align: center'>
                            <th scope="col">Lead No</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th id="th1"></th>
                            <th id="th2"></th>
                            <th id="th3"></th>
                            <th>Service</th>
                            <th>Status</th>
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
</body>
<script>
  var link;
  var dataTable;

  function radioChange() {
    if (document.getElementById('wedding').checked) {
      link = 'ajax/lead_creation/lead_for_wedding.php';
    } else {
      link = 'ajax/lead_creation/lead_for_baby_list.php';
    }
    if (dataTable) {
      dataTable.destroy(); // Destroy the existing DataTable instance
    }
    createTable();
  }
  radioChange();

  document.addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('edit-icon')) {
      var leadData = event.target.getAttribute('data-lead');
      window.location.href = `manage_lead.php?dat=${leadData}`;
    }

    if (event.target && event.target.classList.contains('follow-up-icon')) {
      var leadData = event.target.getAttribute('data-lead');
      window.location.href = `follow_up_entry.php?dat=${leadData}`;
    }
  });

  const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
  });
  const config = {
    childList: true,
    subtree: true
  };
  observer.observe(document.body, config);



  function createTable() {
    dataTable = $('#tbl').DataTable({
      "pageLength": 10
    });
    $.ajax({
      url: link,
      type: 'get',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        var leads = result.data;
        var dataTableData = [];

        if (document.getElementById('wedding').checked) {
          document.getElementById('th1').textContent = 'Event';
          document.getElementById('th2').textContent = 'Event Date';
          document.getElementById('th3').textContent = 'Mandapam';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            }
            statusdisplay.style.cursor = 'pointer';
            statusdisplay.textContent = obj.lead_status;
            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'wedding'
            }))

            var dataRow = [
              obj.id,
              obj.name,
              obj.phone,
              obj.event,
              obj.event_date,
              obj.mandapam,
              val,
              statusdisplay.outerHTML,
              `
                            <i class="follow-up-icon"
                              data-lead="${dat}"
                              data-action="follow_up"
                              data-feather="message-circle"
                              style="cursor: pointer"
                              title=""></i>`
            ];
            dataTableData.push(dataRow);
            feather.replace();
          });
        } else {
          document.getElementById('th1').textContent = 'Age';
          document.getElementById('th2').textContent = 'Sex';
          document.getElementById('th3').textContent = 'Date & Time';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            }
            statusdisplay.style.cursor = 'pointer';
            statusdisplay.textContent = obj.lead_status;

            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'baby'
            }))
            var dataRow = [
              obj.id,
              obj.name,
              obj.phone,
              obj.age,
              obj.sex,
              obj.event_dateTime,
              val,
              statusdisplay.outerHTML,
              `
                          <i 
                            data-feather="message-circle"
                            onclick="window.location.href = 'follow_up_entry.php?dat=${dat}'"
                            style="cursor: pointer"
                            title=""></i>`
            ];

            dataTableData.push(dataRow);
          });
        }

        dataTable.clear().rows.add(dataTableData).draw();
        feather.replace();
      }
    });

  }
</script>
<style>
  i {
    cursor: pointer !important;
  }

  i:hover {
    color: blue !important;
  }
</style>


</html>