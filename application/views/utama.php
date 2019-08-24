<!DOCTYPE HTML>
<html lang="zxx">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Koperasi PKK Melati Jaya</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/bootstrap.min.css" media="all" />
  <!-- Slick nav CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/slicknav.min.css" media="all" />
  <!-- Iconfont CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/icofont.css" media="all" />
  <!-- Slick CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/slick.css">

  <link rel="stylesheet" href="<?=base_url('/')?>assets/css/font-awesome.min.css">
  <!-- Owl carousel CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/owl.carousel.css">
  <!-- Popup CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/magnific-popup.css">
  <!-- Switcher CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/switcher-style.css">
  <!-- Animate CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/animate.min.css">
  <!-- Main style CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/style.css" media="all" />
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/custom.css" media="all" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" type="text/css" href="<?=base_url('/')?>assets/css/responsive.css" media="all" />
  <!-- Favicon Icon -->
  <link rel="icon" type="image/png" href="<?=base_url('/')?>assets/img/logo.png" />
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
  <style type="text/css">
    ul.pagination li span a{
      /*border: solid 1px #007bff !important;*/
      color: #555 !important;
      background-color: transparent !important;
      background-image: none !important;
      width: 35px !important;
      height: 35px !important;
      line-height: 35px !important;
      font-size: 14px;
    }
    ul.pagination li.page-item span{
      padding: 0 !important;
    }
    .page-item.active .page-link{
      padding:.5rem .75rem !important;
    }
    ul li a:hover{
      color: #888 !important;
    }
  </style>
  <!--TOP NAV-->
  <?php $this->load->view('include/head');?>
  <!--TOP NAV-->

  <?php $this->load->view($link_view);?>

  <!--FOOTER-->
  <?php $this->load->view('include/foot');?>
  <!--FOOTER-->
  <!-- jquery main JS -->
  <script src="<?=base_url('/')?>assets/js/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="<?=base_url('/')?>assets/js/bootstrap.min.js"></script>
  <!-- Slick nav JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
  <script src="<?=base_url('/')?>assets/js/jquery.slicknav.min.js"></script>
  <!-- Slick JS -->
  <script src="<?=base_url('/')?>assets/js/slick.min.js"></script>  
  <!-- owl carousel JS -->
  <script src="<?=base_url('/')?>assets/js/owl.carousel.min.js"></script>
  <!-- Popup JS -->
  <script src="<?=base_url('/')?>assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Counter JS -->
  <script src="<?=base_url('/')?>assets/js/jquery.counterup.min.js"></script>
  <!-- Counterup waypoints JS -->
  <script src="<?=base_url('/')?>assets/js/waypoints.min.js"></script>
  <!-- YTPlayer JS -->
  <script src="<?=base_url('/')?>assets/js/jquery.mb.YTPlayer.min.js"></script>
  <!-- jQuery Easing JS -->
  <script src="<?=base_url('/')?>assets/js/jquery.easing.1.3.js"></script>
  <!-- Gmap JS -->
  <script src="<?=base_url('/')?>assets/js/gmap3.min.js"></script>
  <!-- Google map api -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
  <!-- Custom map JS -->
  <script src="<?=base_url('/')?>assets/js/custom-map.js"></script>
  <!-- WOW JS -->
  <script src="<?=base_url('/')?>assets/js/wow-1.3.0.min.js"></script>
  <!-- Switcher JS -->
  <script src="<?=base_url('/')?>assets/js/switcher.js"></script>
  <!-- main JS -->
  <script src="<?=base_url('/')?>assets/js/main.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){

     $('#pagination').on('click','a',function(e){
       e.preventDefault(); 
       var pageno = $(this).attr('data-ci-pagination-page');
       loadPagination(pageno);
     });

     loadPagination(0);

     function loadPagination(pagno){
       $.ajax({
        url: '<?=site_url('/main/ajaxPaging/') ?>'+pagno,
        type: 'get',
        dataType: 'json',
        success: function(response){
          $('#pagination').html(response.pagination);
                // console.log(response.pagination);
                createTable(response.result);
              }
            });
     }

     function createTable(result){
       var url = "<?=base_url('assets/img/berita/')?>";
       var urlberita = "<?=site_url('main/detail_b/')?>";
       $('#blog').empty();
       for(index in result){
        var idnya = result[index].idberita;
        var judul = result[index].judul;
        var gambar = result[index].gambar;
        var deskripsi = result[index].deskripsi;
        deskripsi = deskripsi.substr(0, 100) + " ...";
        var created_at = result[index].created_at;

        var body = '<div class="col-lg-4 col-md-6">';
        body += '<div class="single-post">';
        body += '<div class="post-thumbnail">';
        body += '<a href="'+urlberita+idnya+'">';
        body += '<img class="img-berita" src="'+url+gambar+'" alt="blog">';
        body += '</a>';
        body += '</div>';
        body += '<div class="post-author">';
        body += '<i class="icofont icofont-user"></i> Admin ';
        body += '<i class="icofont icofont-calendar" style="padding-left: 10px;"></i> '+created_at+' ';
        body += '</div><div class="post-details">';
        body += '<h4 class="post-title"><a href="'+urlberita+idnya+'">'+judul+'</a></h4>';
        body += '<p>'+deskripsi+'</p>';
        body += '</div>';
        body += '</div>';
        body += '</div>';
        $('#blog').append(body);

      }
    }

  });
</script>
</body>
</html>