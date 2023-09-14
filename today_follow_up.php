<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/koho/template/datatable-basic-init.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jul 2023 10:02:24 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedart</title>
  <!-- Google font-->
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
                <h3>Today FollowUp</h3>
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
                    <h3>PDF Generation</h3>
                  </div>
                  <div class="card-body">
                    <div >
                      <button class="btn btn-info" style="margin-bottom: 1em;" id="week"> Weekly FollowUp's &nbsp;&nbsp;<i class="fa-regular fa-circle-down" style="font-size: 1.4em;"></i> </button>
                      &emsp;
                      <button class="btn btn-info" style="margin-bottom: 1em;" id="month"> Monthly FollowUp's &nbsp;&nbsp;<i class="fa-regular fa-circle-down" style="font-size: 1.4em;"></i>  </button>
                    </div>
                  </div>
                  <h3 style="margin-left: 1.7em;margin-top:0px">Lead Types</h3>
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
                    <div class="table-responsive">
                      <!-- class="table-responsive" -->
                      <table id="tbl">
                        <!-- <thead>
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
                            <th>Action</th>
                          </tr>
                        </thead> -->

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
var dataTable;
var lead_page;

document.getElementById('week').addEventListener('click', generatePDF);
document.getElementById('month').addEventListener('click', generatePDFMonth);

function generatePDF() {
  $.ajax({
    url: 'ajax/today_follow_up/weekly.php',
    type: 'post',
    contentType: false,
    processData: false,
    success: (response) => {
      let res = JSON.parse(response);
      let pdfDetails = res.data1;
      let pdfDetails1 = res.data2;
      const content = [];
      
      content.push({ text: 'WedArt Photography - Weekly Followup', style: 'header', alignment: 'center', fontSize: 20 });
      content.push({ text: ' ', style: 'header' });

      function generateTable(data) {
        const table = {
          table: {
            widths: ['*', '*'],
            body: []
          }
        };
        function createKeyValuePair(key, value) {
          return [
            { text: key, bold: true, border: [] },
            { text: value || '', border: [] }
          ];
        }
        function createKeyValuePair1(key, value) {
          return [
            { text: key, bold: true, border: [false, false, false, true] }, // Add a border at the bottom of the key cell
            { text: value || '', border: [false, false, false, true] } // Add a border at the bottom of the value cell
          ];
        }
        data.forEach((obj) => {
          table.table.body.push(createKeyValuePair('Lead ID', obj.id));
          table.table.body.push(createKeyValuePair('Booking ID', obj.lead_no));
          table.table.body.push(createKeyValuePair('Name', obj.name));
          table.table.body.push(createKeyValuePair('Phone', obj.phone));
          table.table.body.push(createKeyValuePair('Estimated Amount', obj.estimated_amount));
          table.table.body.push(createKeyValuePair('Event Date', obj.event_date));
          table.table.body.push(createKeyValuePair('FollowUp Date', obj.follow_up_date));
          table.table.body.push(createKeyValuePair('Approach Topic', obj.approach));
          table.table.body.push(createKeyValuePair('Response', obj.response));
          table.table.body.push(createKeyValuePair1(' ', " "));
          table.table.body.push([{ text: ' ', border: [] }, { text: ' ', border: [] }]);
        });

        return table;
      }

      content.push({ text: `General Photography (count: ${pdfDetails.length} )`, style: 'header' });
      content.push(generateTable(pdfDetails));
      content.push({ text: `Baby Photography (count: ${pdfDetails1.length} )`, style: 'header' });
      content.push(generateTable(pdfDetails1));

      const docDefinition = {
        content: content,
        styles: {
          header: {
            fontSize: 16,
            bold: true,
            margin: [0, 0, 0, 10],
          },
        },
      };

      pdfMake.createPdf(docDefinition).open();
    }
  });
}

function generatePDFMonth() {
  $.ajax({
    url: 'ajax/today_follow_up/monthly.php',
    type: 'post',
    contentType: false,
    processData: false,
    success: (response) => {
      let res = JSON.parse(response);
      let pdfDetails = res.data1;
      let pdfDetails1 = res.data2;
      const content = [];
      
      content.push({ text: 'WedArt Photography - Monthly Followup', style: 'header', alignment: 'center', fontSize: 20 });
      content.push({ text: ' ', style: 'header' });

      function generateTable(data) {
        const table = {
          table: {
            widths: ['*', '*'],
            body: []
          }
        };
        function createKeyValuePair(key, value) {
          return [
            { text: key, bold: true, border: [] },
            { text: value || '', border: [] }
          ];
        }
        function createKeyValuePair1(key, value) {
          return [
            { text: key, bold: true, border: [false, false, false, true] }, // Add a border at the bottom of the key cell
            { text: value || '', border: [false, false, false, true] } // Add a border at the bottom of the value cell
          ];
        }
        data.forEach((obj) => {
          table.table.body.push(createKeyValuePair('Lead ID', obj.id));
          table.table.body.push(createKeyValuePair('Booking ID', obj.lead_no));
          table.table.body.push(createKeyValuePair('Name', obj.name));
          table.table.body.push(createKeyValuePair('Phone', obj.phone));
          table.table.body.push(createKeyValuePair('Estimated Amount', obj.estimated_amount));
          table.table.body.push(createKeyValuePair('Event Date', obj.event_date));
          table.table.body.push(createKeyValuePair('FollowUp Date', obj.follow_up_date));
          table.table.body.push(createKeyValuePair('Approach Topic', obj.approach));
          table.table.body.push(createKeyValuePair('Response', obj.response));
          table.table.body.push(createKeyValuePair1(' ', " "));
          table.table.body.push([{ text: ' ', border: [] }, { text: ' ', border: [] }]);
        });
        return table;
      }
      content.push({ text: `General Photography (count: ${pdfDetails.length} )`, style: 'header' });
      content.push(generateTable(pdfDetails));
      content.push({ text: `Baby Photography (count: ${pdfDetails1.length} )`, style: 'header' });
      content.push(generateTable(pdfDetails1));

      const docDefinition = {
        content: content,
        styles: {
          header: {
            fontSize: 16,
            bold: true,
            margin: [0, 0, 0, 10],
          },
        },
      };

      pdfMake.createPdf(docDefinition).open();
    }
  });
}

function radioChange() {
    if (document.getElementById('wedding').checked) {
        lead_page = 'wedding';
    } else {
        lead_page = 'baby';
    }
    if (dataTable) {
        dataTable.destroy();
    }
    createTable();
} radioChange();


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
            { title: "Action" }
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
    fd.append('lead', lead_page);
    fd.append('user_role', UserRole);
    fd.append('branch_id', UserBranch);
    $.ajax({
        url: 'ajax/today_follow_up/list_today.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var result = JSON.parse(response);
            let leads = result.data;
            var dataTableData = [];
            if (document.getElementById('wedding').checked) {
                // document.getElementById('th1').textContent = 'Event';
                // document.getElementById('th2').textContent = 'Event Date';
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
                    statusdisplay.style.cursor = 'pointer';
                    statusdisplay.textContent = obj.lead_status;                    
                    var urldat = encodeURIComponent(JSON.stringify({'lead_id': obj.id, 'lead': 'wedding'}))
                    
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
                        `<i class="follow-up-icon"
                          onclick="window.location.href = 'follow_up_entry.php?dat=${urldat}'"
                          data-feather="external-link"
                          style="cursor: pointer"
                          title=""></i>`
                    ];
                    dataTableData.push(dataRow);
                    feather.replace(); 
                });
                document.getElementById('baby').checked = false;
                document.getElementById('wedding').checked = true;
            } else {
                // document.getElementById('th1').textContent = 'Age';
                // document.getElementById('th2').textContent = 'Sex';
                // document.getElementById('th3').textContent = 'Event Date-Time';
                leads.forEach(obj => {
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

                    var dat = encodeURIComponent(JSON.stringify({'lead_id': obj.id, 'lead': 'baby'}))
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
                        `<i class="follow-up-icon"
                          onclick="window.location.href = 'follow_up_entry.php?dat=${dat}'"
                          data-feather="external-link"
                          style="cursor: pointer"></i>`
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


  window.addEventListener('popstate', function (event) {
    window.location.reload();
  });

  window.addEventListener('beforeunload', function (event) {
    event.preventDefault();
    window.location.reload();
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