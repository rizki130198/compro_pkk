<!DOCTYPE HTML>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title;?></title>
  <!-- Bootstrap CSS -->
  <!-- Favicon Icon -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" type="text/css" href="<?=base_url('admin/css/bootstrap.min.css');?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/css/material-dashboard.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('admin/css/demo.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css'); ?>">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<<<<<<< HEAD
<body class="">
  <div class="wrapper "> <!--TOP NAV-->
    <?php $this->load->view('include/sidebar');?>
    <!--TOP NAV-->

    <?php $this->load->view($link_view);?>
=======
<body class="" style="overflow-y: hidden;">
  <div id="loader" style="z-index:9999;position: fixed;width: 100%;height:100%;background: rgba(255,255,255,.8);
  display: flex;
  align-items: center;
  justify-content: center">
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
</div>
<div class="wrapper "> <!--TOP NAV-->
  <?php $this->load->view('include/sidebar');?>
  <!--TOP NAV-->
  <div class="main-panel">
    <?php $this->load->view('include/navbar');?>
    <?php $this->load->view($link_view);?>
    <footer class="footer">
      <div class="container-fluid">
        <p class="pull-left" style="margin-left: 17px;">
          &copy; 2019 <a href="">Admin Company Profile - PKK</a>.
        </p>
        <nav class="pull-right" style="margin-right: 12px;">
>>>>>>> ce6a3962af69cfe28e8fb991a5bb1326590812d4

        </nav>
      </div>
    </footer>
  </div>
  <div class="ps-scrollbar-y-rail" style="top: 0px; height: 950px; right: 0px;">
    <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 404px;"></div>
  </div>
</div>
<!-- //DIV MAIN -->
</div>
<!-- jquery main JS -->
<<<<<<< HEAD
<script type="text/javascript">
  var BASE_URL = '<?= site_url('/') ?>';
</script>
<script src="<?=base_url('/')?>admin/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url('/')?>admin/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=base_url('/')?>admin/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="<?=base_url('/')?>admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=base_url('/')?>admin/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?=base_url('/')?>admin/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
<script src="<?=base_url('/')?>admin/js/admin.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<?php if ($this->uri->segment(2)=='berita') { ?>
  <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
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
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script type="text/javascript">
  $(document).ready(function(){
   $('#tableberita').DataTable();
   $('#tablehome').DataTable();
   $('#tabletentang').DataTable();
   $('#tablekontak').DataTable();
   $('#tablealamat').DataTable();
=======
<script type="text/javascript" src="<?=base_url('assets/js/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/material.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/arrive.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/perfect-scrollbar.jquery.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/bootstrap-notify.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/material-dashboard.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/demo.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.nicescroll.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('admin/js/jquery.dataTables.min.js');?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script type="text/javascript">
  jQuery(window).load(function () {
    jQuery('#loader').fadeOut('slow');
  });
</script>
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
      searchPlaceholder: "Cari Berita",
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
      searchPlaceholder: "Cari Berita",
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
      searchPlaceholder: "Cari Berita",
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
      searchPlaceholder: "Cari Berita",
    }
  });
>>>>>>> ce6a3962af69cfe28e8fb991a5bb1326590812d4
 });
</script>
</body>
<div class="col-md-12">
  <?php if ($this->session->flashdata('gagal')) { ?>
    <div id="error" class="card-panel" style="background: #3D4242;color:#FFF;margin:20px 0;">
      <div  class="card-content">
        <script type="text/javascript" charset="utf-8" >
          $.toast({
            heading: 'Warning',
            text: "<?=$this->session->flashdata('gagal')?>",
            position: 'top-right',
            stack: false,
            hideAfter: 5000, 
            icon: 'warning'
          });
        </script>
      </div>
    </div>
  <?php }elseif($this->session->flashdata('sukses')){ ?>
    <div id="sukses" class="card-panel" style="background: #4CAF50;color:#FFF;margin:20px 0;">
      <div  class="card-content">
        <script type="text/javascript" charset="utf-8" >
          $.toast({
            heading: 'Success',
            text: "<?=$this->session->flashdata('sukses')?>",
            position: 'top-right',
            stack: false,
            hideAfter: 5000, 
            icon: 'success'
          });
        </script>
      </div>
    </div>
  <?php } ?>
</div>
</html>