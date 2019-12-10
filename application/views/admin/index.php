<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fontawesome-free/css/all.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/dist/css/adminlte.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/summernote/summernote-bs4.css'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 <!--  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fullcalendar/main.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fullcalendar-interaction/main.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fullcalendar-daygrid/main.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fullcalendar-timegrid/main.min.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/fullcalendar-bootstrap/main.min.css'); ?>"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'); ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<style type="text/css">
  .wrap {
  text-align: center;
  vertical-align: middle;
  border-radius: 4px;
}
.wrap h1{
  font-size: 30px;
  padding:50px; 
}
.track {
  display: inline-block;
  width: 350px;
  height: 0;
  border-top: 8px dotted #a1a1a1;
}

.ghosts {
  display: block;
  position: relative;
  top: 0px;
  backgound-color: #fff;
}
.ghosts .ghost-1, .ghosts .ghost-2 {
  display: block;
  position: absolute;
  width: 45px;
  height: 55px;
  border-top-left-radius: 50%;
  border-top-right-radius: 50%;
  top: -35px;
}
.ghosts .ghost-1 .foot-1, .ghosts .ghost-1 .foot-2, .ghosts .ghost-1 .foot-3, .ghosts .ghost-2 .foot-1, .ghosts .ghost-2 .foot-2, .ghosts .ghost-2 .foot-3 {
  transform: rotate(45deg);
  display: block;
  position: absolute;
  width: 13px;
  height: 13px;
  background-color: #222;
  border-radius: 2px;
  top: 51px;
}
.ghosts .ghost-1:before, .ghosts .ghost-1:after, .ghosts .ghost-2:before, .ghosts .ghost-2:after {
  content: "";
  display: block;
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: blue;
  border: 4px solid #fff;
  border-radius: 50%;
  top: 13px;
}
.ghosts .ghost-1 {
  background-color: #01dbd7;
  left: -40px;
}
.ghosts .ghost-1 .foot-1 {
  left: 1px;
}
.ghosts .ghost-1 .foot-2 {
  left: 16px;
}
.ghosts .ghost-1 .foot-3 {
  left: 30px;
}
.ghosts .ghost-1:before {
  left: 15px;
}
.ghosts .ghost-1:after {
  left: 30px;
}
.ghosts .ghost-2 {
  background-color: #fe2601;
  left: 100%;
  margin-left: -5px;
}
.ghosts .ghost-2 .foot-1 {
  left: 1px;
}
.ghosts .ghost-2 .foot-2 {
  left: 16px;
}
.ghosts .ghost-2 .foot-3 {
  left: 30px;
}
.ghosts .ghost-2:before {
  left: 2px;
}
.ghosts .ghost-2:after {
  left: 18px;
}

.pacman {
  width: 0px;
  height: 0px;
  position: relative;
  top: 0px;
  animation: movepacman 3.5s linear infinite;
}

.loader {
  display: inline-block;
  position: relative;
}
.loader .topchomp, .loader .bottomchomp {
  display: block;
  position: absolute;
  width: 0px;
  height: 0px;
  border: 30px solid #fef200;
  border-radius: 50%;
  top: -48px;
}
.loader .topchomp {
  border-right-color: transparent;
  animation: topchomp 0.3s linear infinite;
}
.loader .topchomp:before {
  content: "";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  background-color: #222;
  border-radius: 50%;
  top: -22px;
  left: -5px;
  z-index: 999;
}
.loader .bottomchomp {
  border-top-color: transparent;
  border-right-color: transparent;
  animation: bottomchomp 0.3s linear infinite;
}

@keyframes topchomp {
  0%, 100% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(45deg);
  }
}
@keyframes bottomchomp {
  0%, 100% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(-45deg);
  }
}
@keyframes movepacman {
  0% {
    left: 17%;
  }
  45% {
    left: 83%;
    transform: rotateY(0deg);
  }
  50% {
    left: 83%;
    transform: rotateY(180deg);
  }
  95% {
    left: 17%;
    transform: rotateY(180deg);
  }
  100% {
    left: 17%;
    transform: rotateY(0deg);
  }
}
</style>
<!-- <div id="loader" style="z-index:9999;position: fixed;width: 100%;height:100%;background: rgba(255,255,255,.8);display: flex;align-items: center;justify-content: center">
  <div class="wrap">
    <div class="track">
      <div class="ghosts">
        <div class="ghost-1">
          <div class="foot-1"></div>
          <div class="foot-2"></div>
          <div class="foot-3"></div>
        </div>
        <div class="ghost-2">
          <div class="foot-1"></div>
          <div class="foot-2"></div>
          <div class="foot-3"></div>
        </div>
      </div>
      <div class="pacman-shadow"></div>
      <div class="pacman">
        <div class="loader">
          <div class="topchomp"></div>
          <div class="bottomchomp"></div>
        </div>
      </div>
    </div>
    <h1>Harap Tunggu</h1>
  </div>
</div> -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('include/sidebar');?>
  <!-- End Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?=$titleNav;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php $this->load->view($link_view);?>
    <!-- End content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://adminlte.io">Admin Company Profile - PKK</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript">
  var BASE_URL = '<?= site_url('/') ?>';
</script>
<!-- jQuery -->
<script type="text/javascript" src="<?=base_url('admin/plugins/jquery/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- <script type="text/javascript" src="<?=base_url('admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script> -->
<script type="text/javascript" src="<?=base_url('admin/dist/js/adminlte.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/dist/js/demo.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/moment/moment.min.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<!-- <script type="text/javascript" src="<?=base_url('admin/plugins/fullcalendar/main.min.js'); ?>"></script> -->
<!-- <script type="text/javascript" src="<?=base_url('admin/plugins/fullcalendar-daygrid/main.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/fullcalendar-timegrid/main.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/fullcalendar-interaction/main.min.js'); ?>"></script> -->
<script type="text/javascript" src="<?=base_url('admin/plugins/fullcalendar-bootstrap/main.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/dist/js/pages/dashboard.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/datatables/jquery.dataTables.js');?>"></script> 
<script type="text/javascript" src="<?=base_url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script> 
<script type="text/javascript" src="<?=base_url('admin/js/admin.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<script>
        $(document).ready(function(){
            var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                    left:'prev,next today',
                    center:'title',
                    right:'month,agendaWeek,agendaDay'
                },
                events:"<?php echo base_url(); ?>adminController/load",
                selectable:true,
                selectHelper:true,
                select:function(start, end, allDay)
                {
                    $("#modlaisi").modal('show');
                    $('#tambaheventadmin').on('click', function(event) {
                      if($('#judulagenda').val() != null)
                      {
                        var start = moment(start).format("Y-MM-DD HH:mm:ss");
                        var end = moment(end).format("Y-MM-DD HH:mm:ss");
                        $.ajax({
                          url:"<?php echo base_url(); ?>adminController/insert",
                          type:"POST",
                          data:{title:$('#judulagenda').val(), desc:$('#deskripsiagenda').val(), start:start, end:end},
                          success:function()
                          {
                            calendar.fullCalendar('refetchEvents');
                            alert("Berhasil di Tambah");
                          }
                        });

                      }
                    $("#modlaisi").modal('hide');
                    });
                },
                editable:true,
                eventResize:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");

                    var title = event.title;
                    var desc = event.desc;
                    var id = event.id;

                    $.ajax({
                        url:"<?php echo base_url(); ?>adminController/update",
                        type:"POST",
                        data:{title:title, desc:desc, start:start, end:end, id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Acara di Update");
                        }
                    })
                },
                eventDrop:function(event)
                {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var desc = event.desc;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>adminController/update",
                    type:"POST",
                    data:{title:title, desc:desc, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Acara di update");
                    }
                })
            },
            eventClick:function(event, jsEvent, view) {

              $('#modalTitle').html(event.title);
              $('#modalBody').text(event.desc);
              $('#tanggalModal').modal('show');
              $("#hapuseventadmin").click(function() {
                if(confirm("Yakin Ingin Hapus Data ini ?"))
                {
                  var id = event.id;
                  $.ajax({
                    url:"<?php echo base_url(); ?>adminController/delete",
                    type:"POST",
                    data:{id:id},
                    success:function()
                    {
                      calendar.fullCalendar('refetchEvents');
                      alert('Acara di Hapus');
                      $('#tanggalModal').modal('hide');
                    }
                  })
                }
              });
            },
          });
        });

    </script>
<?php if ($this->uri->segment(2)=='berita' OR $this->uri->segment(1)=='tambah_berita' OR $this->uri->segment(2)=='edit_berita') { ?>
  <script type="text/javascript" src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
  <script type="text/javascript">
     $(document).ready(function() {
                      CKEDITOR.replace('editor', {
                skin: 'kama',
                enterMode: CKEDITOR.ENTER_BR,
                shiftEnterMode:CKEDITOR.ENTER_P,
                toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
                { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
                { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
                { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
                { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
                { name: 'links', items: [ 'Link', 'Unlink' ] },
                { name: 'insert', items: [ 'Image'] },
                { name: 'spell', items: [ 'jQuerySpellChecker' ] },
                { name: 'table', items: [ 'Table' ] }
              ],
          });

      })
  </script>
<?php } ?>
<!-- <script type="text/javascript">
  jQuery(window).load(function () {
    jQuery('#loader').fadeOut('slow');
  });
</script> -->
<script type="text/javascript">
  $(document).ready(function(){
   $('#tableberita').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
    ],
    responsive: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Cari Berita",
    }
  });
   $('#tablehome').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
    ],
    responsive: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Cari Menu Home",
    }
  });
   $('#tabletentang').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
    ],
    responsive: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Cari Deskripsi About",
    }
  });
   $('#tablekontak').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
    ],
    responsive: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Cari Kontak",
    }
  });
   $('#tablealamat').DataTable({
    "pagingType": "full_numbers",
    "lengthMenu": [
    [10, 25, 50, -1],
    [10, 25, 50, "All"]
    ],
    responsive: true,
    language: {
      search: "_INPUT_",
      searchPlaceholder: "Cari Alamat",
    }
  });
 });
</script>
<?php if ($this->session->flashdata('gagal')) { ?>
<div id="error">
  <script type="text/javascript" charset="utf-8" >
    $.toast({
      type: 'error',
      title: "<?=$this->session->flashdata('gagal')?>",
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  </script>
</div>
<?php }elseif($this->session->flashdata('sukses')){ ?>
<div id="sukses">
  <script type="text/javascript" charset="utf-8" >
    $.toast({
      type: 'success',
      title: "<?=$this->session->flashdata('sukses')?>",
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
  </script>
</div>
<?php } ?>
</body>
</html>