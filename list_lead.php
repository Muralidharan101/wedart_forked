<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:24 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedart</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
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
                        <label class="form-check-label" for="wedding">General Photography</label>
                      </div>

                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead" id="baby" type="radio" value="false" onchange="radioChange()">
                        <label class="form-check-label" for="baby">Baby Photography</label>
                      </div>
                    </div><br>

                    <div class="row">
                      <div class="col-lg-5">
                        <div class="mb-3">
                          <label class="form-label">Lead Status</label>
                          <select class="form-select" style="border: 1px solid #e0dddd" id="lead_status_select" onchange="radioChange()">
                            <option value="all" selected>All</option>
                            <option value="open">Open</option>
                            <option value="cold">Cold</option>
                            <option value="hot">Hot</option>
                            <option value="ready">Ready</option>
                            <option value="converted">Converted</option>
                            <option value="closed">Closed</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="row" style="margin-left: 0.5em;">
                      <div class="col-lg-12" style="margin-left: -1em;">
                        <h3>Lead Status</h3>
                      </div><br><br>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead_status" id="cold" checked type="radio" value="true">
                        <label class="form-check-label" for="cold">Cold</label>
                      </div>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead_status" id="hot" type="radio" value="true">
                        <label class="form-check-label" for="hot">Hot</label>
                      </div>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead_status" id="ready" type="radio" value="true">
                        <label class="form-check-label" for="ready">Ready</label>
                      </div>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead_status" id="converted" type="radio" value="true">
                        <label class="form-check-label" for="converted">Converted</label>
                      </div>
                      <div class="form-check radio radio-primary col-lg-2">
                        <input class="form-check-input" name="lead_status" id="closed" type="radio" value="true">
                        <label class="form-check-label" for="closed">Closed</label>
                      </div>
                    </div> -->
                    <br>

                    <div class="table-responsive">
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <thead>
                          <tr style='text-align: center'>
                            <th scope="col">Lead No</th>
                            <th>Booking No</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th id="th1"></th>
                            <th id="th2"></th>
                            <th id="th3"></th>
                            <th>Estimated</th>
                            <th>Status</th>
                            <th style="min-width: 80px;">Action</th>
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

    <!-- PDF Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" integrity="sha512-a9NgEEK7tsCvABL7KqtUTQjl69z7091EVPpw5KxPlZ93T141ffe1woLtbXTX+r2/8TtTvRX/v4zTL2UlMUPgwg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" integrity="sha512-pAoMgvsSBQTe8P3og+SAnjILwnti03Kz92V3Mxm0WOtHuA482QeldNM5wEdnKwjOnQ/X11IM6Dn3nbmvOz365g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  var UserRole;
  var UserBranch;

  function radioChange() {
    if (document.getElementById('wedding').checked) {
      link = 'ajax/lead_creation/lead_for_wedding.php';
    } else {
      link = 'ajax/lead_creation/lead_for_baby_list.php';
    }
    if (dataTable) {
      dataTable.destroy(); 
    }
    createTable();
  }
  radioChange();

  function downloadPDF(param_ID, param_LEAD){
    let fd = new FormData();
    fd.append('id', param_ID);
    fd.append('lead', param_LEAD);
    $.ajax({
      url: 'ajax/lead_creation/download_pdf.php',
      data: fd,
      type: 'post',
      contentType: false,
      processData: false,
      success: function (response) {
        var result = JSON.parse(response);
        let lead_data = result.data;
        if (result.status == 'Success') {
          console.log(lead_data[0]);
          if(param_LEAD == 'wedding'){
            generatePDF(lead_data[0])
          }
          else {
            generatePDFBaby(lead_data[0])
          }
        } else if (result.status == 'Failed') {
          toastr.error(result.remarks);
        } else {
          toastr.error('Sorry, Error with the Backend');
        }
      }
    })
  }

  function generatePDFBaby(pdfDetails) {
    const Add_services = JSON.parse(pdfDetails.service);
    const additionalServices = Add_services.map((obj) => ({
      text: obj.service + " - ₹ " + obj.additional_service_cost + " ",
      margin: [20, 5],
      border: [],
    }));
    let addServTot = 0;
    Add_services.map(obj => {
      addServTot += parseInt(obj.additional_service_cost);
    })
    let total = parseInt(pdfDetails.service_cost) + addServTot;
    const table = {
      widths: ['auto', '*'],
      padding: [30, 30, 30, 30],
      body: [
        [{ text: 'Lead ID', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.id, border: [], margin: [20, 5] }],
        [{ text: 'Booking ID', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.lead_no, border: [], margin: [20, 5] }],
        [{ text: 'Name', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.name, border: [], margin: [20, 5] }],
        [{ text: 'Phone', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.phone, border: [], margin: [20, 5] }],
        [{ text: 'Gender', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.sex, border: [], margin: [20, 5] }],
        [{ text: 'Age', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.age, border: [], margin: [20, 5] }],
        [{ text: 'Event Date/Time', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.event_datetime, border: [], margin: [20, 5] }],
        [{ text: 'Estimated Amount', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.estimated_amount, border: [], margin: [20, 5] }],
        [{ text: 'Other Info', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.other_info, border: [], margin: [20, 5] }],
        [{ text: '', bold: true, margin: [20, 5], border: [] }, { text: "", border: [], margin: [20, 5] }],
        [{ text: 'Service', bold: true, margin: [20, 5] }, { text: pdfDetails.service_name + " - ₹ " + pdfDetails.service_cost, margin: [20, 5] }],
        [
          { text: 'Additional Services', bold: true, margin: [20, 5] }, 
          additionalServices
        ],
        [{ text: 'Total', bold: true, margin: [20, 5] }, { text: " ₹ " + total, margin: [20, 5] }]
      ],
    };
    const docDefinition = {
      content: [
        { text: 'WedArt Photography', style: 'header', alignment: 'center', fontSize: 24, },
        { text: '', style: 'header' },
        { text: 'Lead Information', style: 'header' },
        {
          table: {
            body: [
              [{ table: table, style: 'tableStyle' }],
            ],
          },
          layout: 'noBorders',
        },
      ],
      styles: {
        header: {
          fontSize: 18,
          bold: true,
          margin: [0, 0, 0, 10],
        },
        subheader: {
          fontSize: 14,
          bold: true,
          margin: [0, 10, 0, 5],
        },
        tableStyle: {
          margin: [0, 0, 0, 0],
        },
      },
    };
    pdfMake.createPdf(docDefinition).open();
  }

  function generatePDF(pdfDetails) {
    const Add_services = JSON.parse(pdfDetails.service);
    const additionalServices = Add_services.map((obj) => ({
      text: obj.service + " - ₹ " + obj.additional_service_cost + " ",
      margin: [20, 5],
      border: [],
    }));
    let addServTot = 0;
    Add_services.map(obj => {
      addServTot += parseInt(obj.additional_service_cost);
    })
    let total = parseInt(pdfDetails.service_cost) + addServTot;
    const table = {
      widths: ['auto', '*'],
      padding: [30, 30, 30, 30],
      body: [
        [{ text: 'Lead ID', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.id, border: [], margin: [20, 5] }],
        [{ text: 'Booking ID', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.lead_no, border: [], margin: [20, 5] }],
        [{ text: 'Name', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.name, border: [], margin: [20, 5] }],
        [{ text: 'Phone', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.phone, border: [], margin: [20, 5] }],
        [{ text: 'Mandapam', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.mandapam, border: [], margin: [20, 5] }],
        [{ text: 'Estimated Amount', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.estimated_amount, border: [], margin: [20, 5] }],
        [{ text: 'Event', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.event, border: [], margin: [20, 5] }],
        [{ text: 'Event Date', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.event_date, border: [], margin: [20, 5] }],
        [{ text: 'Other Info', bold: true, margin: [20, 5], border: [] }, { text: pdfDetails.other_info, border: [], margin: [20, 5] }],
        [{ text: '', bold: true, margin: [20, 5], border: [] }, { text: "", border: [], margin: [20, 5] }],
        [{ text: 'Service', bold: true, margin: [20, 5] }, { text: pdfDetails.service_name + " - ₹ " + pdfDetails.service_cost, margin: [20, 5] }],
        [
          { text: 'Additional Services', bold: true, margin: [20, 5] }, 
          additionalServices
        ],
        [{ text: 'Total', bold: true, margin: [20, 5] }, { text: " ₹ " + total, margin: [20, 5] }]
      ],
    };
    const docDefinition = {
      content: [
        { text: 'WedArt Photography', style: 'header', alignment: 'center', fontSize: 24, },
        { text: '', style: 'header' },
        { text: 'Lead Information', style: 'header' },
        {
          table: {
            body: [
              [{ table: table, style: 'tableStyle' }],
            ],
          },
          layout: 'noBorders',
        },
      ],
      styles: {
        header: {
          fontSize: 18,
          bold: true,
          margin: [0, 0, 0, 10],
        },
        subheader: {
          fontSize: 14,
          bold: true,
          margin: [0, 10, 0, 5],
        },
        tableStyle: {
          margin: [0, 0, 0, 0],
        },
      },
    };
    pdfMake.createPdf(docDefinition).open();
  }

  // function getCookie(cname) {
  //   let name = cname + "=";
  //   let decodedCookie = decodeURIComponent(document.cookie);
  //   let ca = decodedCookie.split(';');
  //   for (let i = 0; i < ca.length; i++) {
  //       let c = ca[i];
  //       while (c.charAt(0) == ' ') {
  //           c = c.substring(1);
  //       }
  //       if (c.indexOf(name) == 0) {
  //           return c.substring(name.length, c.length);
  //       }
  //   }
  //   return "";
  // }

  function createTable() {
    let clmn = [];
  if (document.getElementById('wedding').checked){
    clmn = [
            { title: "Lead ID" },
            { title: "Booking ID" },
            { title: "Name" },
            { title: "Mobile No" },
            { title: "Event" },
            { title: "Event Date" },
            { title: "Mandapam" },
            { title: "Estimated" },
            { title: "Status" },
            { title: "Action", }
        ]
  } else {
    clmn = [
            { title: "Lead ID" },
            { title: "Booking ID" },
            { title: "Name" },
            { title: "Mobile No" },
            { title: "Age" },
            { title: "Gender" },
            { title: "Event Date/Time" },
            { title: "Estimated" },
            { title: "Status" },
            { title: "Action" }
        ]
  }
    dataTable = $('#tbl').DataTable({
      "pageLength": 10,
      "columnDefs": [
        { "targets": [0], "minWidth": 70 }  
      ],
      columns: clmn
    });
    let role = getCookie('role');
    let branch = getCookie('branch_id');
    if(role && branch){
        UserRole = role;
        UserBranch = branch;
    } else {
        UserRole = sessionStorage.getItem('role');
        UserBranch = sessionStorage.getItem('branch_id');
    }
    var fd = new FormData();
    var led_sts = $('#lead_status_select').val();
    console.log(UserRole, UserBranch);
    fd.append('lead_status', led_sts);
    fd.append('user_role', UserRole);
    fd.append('branch_id', UserBranch);
    $.ajax({
      url: link,
      data: fd,
      type: 'post',
      contentType: false,
      processData: false,
      success: function(response) {
        var result = JSON.parse(response);
        var leads = result.data;
        var dataTableData = [];

        if (document.getElementById('wedding').checked) {
          // document.getElementById('th1').textContent = 'Event';
          // document.getElementById('th2').textContent = 'Event-Date';
          // document.getElementById('th3').textContent = 'Mandapam';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-secondary');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else if(obj.lead_status === 'converted') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            } else if(obj.lead_status === 'hot'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if(obj.lead_status === 'cold'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-info');
            } else if(obj.lead_status === 'ready'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-primary');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-dark');
            }
            statusdisplay.textContent = obj.lead_status;
            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'wedding'
            }))

            var dataRow = [
              obj.id,
              obj.lead_no,
              obj.name,
              obj.phone,
              obj.age ? obj.age : obj.event,
              obj.sex ? obj.sex : obj.event_date,
              obj.event_dateTime ? obj.event_dateTime : obj.mandapam,
              obj.estimated_amount,
              statusdisplay.outerHTML,
              `<i class="fa-regular fa-pen-to-square" 
                  style="font-size: 22px;margin-right:10px;"
                  onclick="window.location.href = 'manage_lead.php?dat=${dat}'"></i>
               <i class="follow-up-icon fa-solid fa-arrow-up-right-from-square"
                  data-lead="${dat}"
                  data-action="follow_up"
                  style="cursor: pointer;font-size: 20px;margin-right:10px;"></i>
               <i class="fa-regular fa-circle-down"
                  style="cursor: pointer;font-size: 20px;"
                  onclick="downloadPDF('${obj.id}', 'wedding')"></i>`
            ];
            dataTableData.push(dataRow);
            feather.replace();
          });
          document.getElementById('baby').checked = false;
          document.getElementById('wedding').checked = true;
        } else {
          // document.getElementById('th1').textContent = 'Age';
          // document.getElementById('th2').textContent = 'Gender';
          // document.getElementById('th3').textContent = 'Date & Time';
          leads.forEach(obj => {
            var test = JSON.parse(obj.service);
            var val = test.map(ob => (`
                        <span class="badge badge-pill badge-light"
                              style="color:black; background-color: lightgrey">
                              ${ob.service}
                        </span><br>`)).join('');
            var statusdisplay = document.createElement('span');
            if (obj.lead_status === 'open') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-secondary');
            } else if (obj.lead_status === 'closed') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-danger');
            } else if(obj.lead_status === 'converted') {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-success');
            } else if(obj.lead_status === 'hot'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-warning');
            } else if(obj.lead_status === 'cold'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-info');
            } else if(obj.lead_status === 'ready'){
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-primary');
            } else {
              statusdisplay.classList.add('badge', 'badge-pill', 'badge-dark');
            }
            statusdisplay.style.cursor = 'pointer';
            statusdisplay.textContent = obj.lead_status;

            var dat = encodeURIComponent(JSON.stringify({
              'lead_id': obj.id,
              'lead': 'baby'
            }))
            var dataRow = [
              obj.id,
              obj.lead_no,
              obj.name,
              obj.phone,
              obj.event ? obj.event : obj.age,
              obj.event_date ? obj.event_date : obj.sex,
              obj.mandapam ? obj.mandapam : obj.event_dateTime,
              obj.estimated_amount,
              statusdisplay.outerHTML,
              `<i class="fa-regular fa-pen-to-square" 
                  style="font-size: 22px;margin-right:10px;"
                  onclick="window.location.href = 'manage_lead.php?dat=${dat}'"></i>
              <i class="follow-up-icon fa-solid fa-arrow-up-right-from-square"
                data-lead="${dat}"
                data-action="follow_up"
                style="cursor: pointer;font-size: 20px;margin-right:10px;"></i>
              <i class="fa-regular fa-circle-down"
                style="cursor: pointer;font-size: 20px;"
                onclick="downloadPDF('${obj.id}', 'baby')"></i>`
            ];

            dataTableData.push(dataRow);
          });
          document.getElementById('wedding').checked = false;
          document.getElementById('baby').checked = true;
        }

        dataTable.clear().rows.add(dataTableData).draw();
        feather.replace();
      }
    });

  }

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