<!DOCTYPE html>
<html lang="en">


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
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>General Settings</h3>
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
                  <h3>File Upload(PDF)</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="mb-3">
                          <label class="form-label" for="category">Portfolio<span style="font-size: 10px"> (maximum file size 5MB)</span></label>
                          <input 
                            class="form-control" 
                            type="file" accept=".pdf" 
                            style="background-color: #faf5f5" id="pdf">
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="mb-3">
                          <label class="form-label">PDF Preview</label>
                          <div class="doc"  id="prePDF">
                            <!--doc-->
                          </div>
                        </div>
                      </div>
                  </div>  
                </div>
              </div>

              <div class="card">
                <div class="card-header pb-0">
                  <h3>Video Upload</h3>
                </div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="mb-3">
                        <label class="form-label" for="inpt">Sample Video<span style="font-size: 10px"> (maximum file size 50MB)</span></label>
                        <input 
                          class="form-control" 
                          type="file" accept="video/*" 
                          style="background-color: #faf5f5" 
                          id="video">
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="mb-3">
                        <label class="form-label">Video Preview</label>
                        <div class="doc" id="preVideo">
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>

              <div class="text-end">
                <div class="mb-3">
                  <label class="form-label" style="color:transparent;width:100%" id="dot">.</label>
                  <button class="btn btn-primary" id="addbtn" type="submit" style="padding: 0.5em 1.5em;">
                    Create
                  </button>
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

      <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="exampleModalLabel">Action</h3>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are You Sure To Delete</div>
            <div class="modal-footer">
              <button class="btn btn-primary" type="button" data-bs-dismiss="modal" onclick="setid('')">Cancel</button>
              <button class="btn btn-danger" type="button" data-bs-dismiss="modal" onclick="deletereq()">Delete</button>
            </div>
          </div>
        </div>
      </div> -->

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
    var data;
    var deleteid;
    var dataTable;
    const fileInput = document.getElementById('pdf');
    const pdfPreview = document.getElementById('prePDF');
    const videoInput = document.getElementById('video');
    const videoPreview = document.getElementById('preVideo');
    
    fileInput.addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function() {
          pdfPreview.innerHTML = '';
          const embedElement = document.createElement('embed');
          embedElement.src = reader.result;
          embedElement.width = '100%';
          embedElement.height = '500px';
          pdfPreview.appendChild(embedElement);
        };
        reader.readAsDataURL(file);
      } else {
        pdfPreview.innerHTML = ''; 
      }
    });

    videoInput.addEventListener('change', function(event) {
      const file = event.target.files[0];
      console.log('wori')
      if (file) {
        const reader = new FileReader();
        reader.onload = function() {
          videoPreview.innerHTML = '';
          const videoElement = document.createElement('video');
          videoElement.src = reader.result;
          videoElement.controls = true;
          videoElement.width = '100%';
          videoPreview.appendChild(videoElement);
        };
        reader.readAsDataURL(file);
      } else {
        videoPreview.innerHTML = ''; 
      }
    });


    $(document).ready(function() {
    $('#addbtn').click(function() {
        var pdf = $('#pdf')[0].files[0];
        var video = $('#video')[0].files[0];

        if (!pdf) {
            toastr.error('Please upload a PDF');
        } else if (pdf.size > 5 * 1024 * 1024) {
            toastr.error('PDF file size is too large');
        } else if (!video) {
            toastr.error('Please upload a video');
        } else if (video.size > 50 * 1024 * 1024) {
            toastr.error('Video file size is too large');
        } else {
            $('#addbtn').prop('disabled', true).html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Uploading...'
            );

            var fd = new FormData();
            fd.append('pdf', pdf);
            fd.append('video', video);

            jQuery.ajax({
                url: 'ajax/general_settings/file_upload.php',
                method: 'post',
                contentType: false,
                processData: false,
                data: fd,
                success: function(response) {
                    var result = JSON.parse(response);
                    if (result.status === 'Success') {
                        toastr.success('Files Uploaded Successfully');
                        $('#addbtn').prop('disabled', false).html('Create');
                        $('#pdf, #video').val('');
                        fetchdata();
                    } else {
                        toastr.error(result.remarks || 'Failed to upload');
                        $('#addbtn').prop('disabled', false).html('Create');
                    }
                },
                error: function() {
                    toastr.error('An error occurred during upload');
                    $('#addbtn').prop('disabled', false).html('Create');
                }
            });
        }
    });
    });

    function fetchdata(){
      $.ajax({
      url: 'ajax/general_settings/general_settings_list.php',
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
                  onclick="setid('${obj.id}')" 
                  data-feather="trash-2" 
                  data-bs-toggle="modal" 
                  data-original-title="test"
                  data-bs-target="#exampleModal"
                  style="cursor:pointer">
                </i>`;
          temp.push(
            {
              'count': ++count,
              'pdf': obj.portfolio_file, 
              'video':obj.sample_video_file,
              'action': tryed})
          });
          if(dataTable){
            dataTable.destroy();
          }
        dataTable = $('#tbl').DataTable({
        "pageLength": 10,
        "columns": [
          {"data": "count"},  
          {"data": "pdf"},
          {"data": "video"}, 
          {"data": "action"}  
        ]
        });
        dataTable.clear().rows.add(temp).draw();
        feather.replace();
      }
    })
    };fetchdata();

    // function setid(ob) {
    //   deleteid = ob;
    // }

    // function deletereq() {
    //   var fd = new FormData();
    //   fd.append('id', deleteid);
    //   $.ajax({
    //     url: 'ajax/general_settings/general_settings_remove.php',
    //     data: fd,
    //     type: 'post',
    //     contentType: false,
    //     processData: false,
    //     success: function (response) {
    //       var result = JSON.parse(response);
    //       if(result.status == 'Success'){
    //           toastr.success(result.remarks);
    //           setid('');fetchdata();
    //       } else {
    //         toastr.error('Sry, Error with the Backend');
    //       }
    //     }
    //   })
    // }


    const observer = new MutationObserver(function(mutationsList, observer) {
    feather.replace();
    });
    const config = { childList: true, subtree: true };
    observer.observe(document.body, config);
    
  </script>

  <style>
    @media only screen and (max-width: 991px) {
      #dot{
        display: none;
      }
    }
    .doc{
      min-height: 180px;
      padding: 2em;
      border: 1px solid #f2f2f2;
      border-radius: 8px; 
    }
  </style>

</body>

</html>