<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wedart</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
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
                      <div class="col-lg-2"></div>
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
                    <div class="col-lg-2"></div>
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
    <!--DataTable-->
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script> 

    <script src="../assets/js/tooltip-init.js"></script>
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <!--mur -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>  

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

    var uploadedFile = null;
    $("#pdf").on("change", function() {
        var file = this.files[0];
        if (file && file.type === "application/pdf") {
            uploadedFile = file;
            var pdfPreview = `<iframe class="pdf-preview" src="${URL.createObjectURL(file)}" width="100%" height="600"></iframe>`;
            $("#prePDF").html(pdfPreview);
        } else {
            toastr.error("Please select a valid PDF file.");
        }
    });
    var uploadedVideo = null;
    $("#video").on("change", function() {
        var file = this.files[0];
        if (file && file.type.includes("video/")) {
            uploadedVideo = file;
            var videoPreview = `
                  <video class="video-preview" width="100%" height="auto" controls>
                  <source src="${URL.createObjectURL(file)}" type="${file.type}">
                      Your browser does not support the video tag.
                  </video>`;
            $("#preVideo").html(videoPreview);
        } else {
            toastr.error("Please select a valid video file.");
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
        var fetchPDF = data[0].portfolio_file;
        var fetchVideo = data[0].sample_video_file;
        $('#prePDF').html(`
        <iframe 
          class="pdf-preview" 
          src="ajax/general_settings/files/featured_files/${data[0].id}/${fetchPDF}"
          width="100%" height="600">`);
        $('#preVideo').html(`
        <video class="video-preview" width="100%" height="auto" controls>
          <source src="ajax/general_settings/files/featured_files/${data[0].id}/${fetchVideo}" >
              Your browser does not support the video tag.
        </video>`);
      }
    })
    };fetchdata();


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
      border: 1px solid grey;
      border-radius: 8px; 
    }
  </style>

</body>

</html>