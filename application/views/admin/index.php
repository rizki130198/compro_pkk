<!DOCTYPE HTML>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Selamat Datang - Company Profile PKK</title>
  <!-- Bootstrap CSS -->
  <!-- Favicon Icon -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url('/')?>admin/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?=base_url('/')?>admin/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper "> <!--TOP NAV-->
    <?php $this->load->view('include/sidebar');?>
    <!--TOP NAV-->

    <?php $this->load->view($link_view);?>

  </div>
  <!-- //DIV MAIN -->
</div>
<!-- jquery main JS -->
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
 });
</script>
</body>
</html>