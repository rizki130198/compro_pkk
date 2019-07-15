<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang - Company Profile PKK</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Switcher CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/switcher-style.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/img/favcion.png" />
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
    <!--TOP NAV-->
    <?php $this->load->view('include/head');?>
    <!--TOP NAV-->

    <?php $this->load->view($link_view);?>

    <!--FOOTER-->
    <?php $this->load->view('include/foot');?>
    <!--FOOTER-->
    <!-- jquery main JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Slick nav JS -->
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- owl carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Counterup waypoints JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- YTPlayer JS -->
    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
    <!-- jQuery Easing JS -->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <!-- Gmap JS -->
    <script src="assets/js/gmap3.min.js"></script>
    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
    <!-- Custom map JS -->
    <script src="assets/js/custom-map.js"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow-1.3.0.min.js"></script>
    <!-- Switcher JS -->
    <script src="assets/js/switcher.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
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
         $('#blog').empty();
         for(index in result){
          var judul = result[index].judul;
          var gambar = result[index].gambar;
          var deskripsi = result[index].deskripsi;
          deskripsi = deskripsi.substr(0, 100) + " ...";
          var created_at = result[index].created_at;

          var body = '<div class="col-lg-4 col-md-6">';
          body += '<div class="single-post">';
          body += '<div class="post-thumbnail">';
          body += '<a href="blog.html">';
          body += '<img src="'+gambar+'" alt="blog">';
          body += '</a>';
          body += '</div><div class="post-details">';
          body += '<div class="post-author">';
          body += '<i class="icofont icofont-user"></i>Admin';
          body += '<i class="icofont icofont-calendar"></i>'+created_at+'';
          body += '</div>';
          body += '<h4 class="post-title"><a href="blog.html">'+judul+'</a></h4>';
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