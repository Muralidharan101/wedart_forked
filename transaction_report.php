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
  <!--range picker-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> 
  
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
                <h3>Transaction Report</h3>
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
                    <h3>Transaction Date Range</h3>
                  </div>
                  <div class="card-body">
                    <div class="row" style="margin-left: 0.5em;">
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="wedding" checked type="radio" value="true" onchange="radioChange()">
                        <label class="form-check-label" for="wedding">Leads</label>
                      </div>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="baby" type="radio" value="false" onchange="radioChange()">
                        <label class="form-check-label" for="baby">Baby's Event</label>
                      </div>
                    </div><br>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="md-3">
                                <label class="form-label" for="daterange">Date Range</label>
                                <input 
                                  type="text" 
                                  class="form-control" 
                                  style="border: 1px solid #e0dddd;" 
                                  name="daterange"  />
                            </div>
                        </div>
                    </div> <br>
                    <div>
                      <button class="btn btn-primary" onclick="gend()">Generate Report</button>
                    </div>
                  </div>

                
                <div class="card-body" id="disptable" style="display: none;">
                    
                    <div class="table-responsive" >
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <thead>
                          <tr style='text-align: center'>
                            <th scope="col">Quotation No</th>
                            <th>Lead No</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Transaction Date</th>
                            <th>Total Amount</th>
                            <th>Paid Amount</th>
                            <th>Payment Method</th>
                            <th>Payment Remarks</th>
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
      </div>
        <!-- footer start-->
        <?php include 'footer.php'; ?>
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

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>

    <!--date range picker-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    
</body>




<script>
var lead;
var dataTable;
var leads = [];
var start ;
var end;

const currentDate = new Date();
const year = currentDate.getFullYear();
const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
const day = currentDate.getDate().toString().padStart(2, '0');
const formattedDate = `${year}-${month}-${day}`;

start = formattedDate;
end = formattedDate;

$(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'center',
    locale: {
      format: 'DD-MM-YYYY',
      placeholder: 'Select Date Range',
    }  
  }, function(st, en, label) {
    console.log("A new date selection was made: " + st.format('YYYY-MM-DD') + ' to ' + en.format('YYYY-MM-DD'));
    start = st.format('YYYY-MM-DD'); end = en.format('YYYY-MM-DD');
  });
});

function gend(){
    if((start != '' && end != '') && (start != undefined && end != undefined)){
        radioChange();
        document.getElementById('disptable').style.display = 'block';
    } else {
        toastr.error('Select Valid Date Range');
    }
}

function radioChange() {
    if (document.getElementById('wedding').checked) {
        lead = 'wedding';
    } else {
        lead = 'baby';
    }
    if (dataTable) {
        dataTable.destroy();
    }
    createTable();
}; radioChange();


  function createTable() {  
    dataTable = $('#tbl').DataTable({
        "pageLength": 10
    });
    var fd = new FormData();
    fd.append('lead', lead)
    fd.append('start', start)
    fd.append('end', end)
    $.ajax({
        url: 'ajax/lead_closing/transaction_report.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var result = JSON.parse(response);
            leads = result.data;
            var dataTableData = [];
            leads.forEach(obj => {
                    var dataRow = [
                        obj.id,
                        obj.lead_id,
                        obj.name,
                        obj.phone,
                        obj.date,
                        obj.amount,
                        obj.paid_amount,
                        obj.payment_method,
                        obj.payment_remarks,
                    ];
                    dataTableData.push(dataRow);
                });
            dataTable.clear().rows.add(dataTableData).draw();
            feather.replace();
        }
    });
  }




document.addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('edit-icon')) {
        var leadData = event.target.getAttribute('data-lead');
        window.location.href = `/wedart/template/manage_lead.php?dat=${leadData}`;
    }

    if (event.target && event.target.classList.contains('follow-up-icon')) {
        var leadData = event.target.getAttribute('data-lead');
        window.location.href = `/wedart/template/follow_up_entry.php?dat=${leadData}`;
    }
});

const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
});
const config = { childList: true, subtree: true };
observer.observe(document.body, config);
</script>
<style>
  i {
    cursor: pointer !important;
  }
  i:hover{
    color: blue !important;
  }
</style>


</html>