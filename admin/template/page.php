<?php
/**
 * Created by PhpStorm.
 * User: luthfi
 * Date: 11/02/2015
 * Time: 14:00
 */
    $num_keluhan = GetNumKeluhan();
    $active = "";
    if (isset($_REQUEST['keluhan']))
    {
        $content = "keluhan.php";
    }
    else if (isset($_REQUEST['keluhan_masuk']))
    {
        $content = "keluhan_masuk.php";
        $active = "masuk";
    }
    else if (isset($_REQUEST['keluhan_terverifikasi']))
    {
        $content = "keluhan_terverifikasi.php";
        $active = "verified";
    }
    else
    {
        $content = "keluhan_masuk.php";
        $active = "masuk";
    }
    $list_taman = GetAllTaman();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="http://alvarez.is/demo/dashio/favicon.png">

    <title>Administrator - Home | Sistem Pengaduan Taman Kota Bandung</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
<!-- **********************************************************************************************************************************************************
TOP BAR CONTENT & NOTIFICATIONS
*********************************************************************************************************************************************************** -->
<!--header start-->
<header class="header black-bg">
    <!--logo start-->
    <a href="index.php" class="logo"><b>Sistem Pengaduan Taman <span>Kota Bandung</span></b></a>
    <!--logo end-->
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li><a class="logout" href="index.php?logout">Logout</a></li>
        </ul>
    </div>
</header>
<!--header end-->

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
<section class="wrapper">
<!-- page start-->
<div class="row mt">
<div class="col-sm-3">
    <section class="panel">
        <div class="panel-body">
            <a href="#"  class="btn btn-compose">
                <i class="fa fa-pencil"></i>  Buat Laporan
            </a>
            <ul class="nav nav-pills nav-stacked mail-nav">
                <li class="<?php if ($active=='masuk') echo 'active'; ?>"><a href="index.php?keluhan_masuk"> <i class="fa fa-inbox"></i> Keluhan Masuk  <?php if ($num_keluhan >0){ ?><span class="label label-theme pull-right inbox-notification"><?php echo $num_keluhan ?></span><?php } ?></a></li>
                <li class="<?php if ($active=='verified') echo 'active'; ?>"><a href="index.php?keluhan_terverifikasi"> <i class="fa fa-check-circle"></i> Keluhan Terverifikasi  </a></li>
                <li class="<?php if ($active=='user') echo 'active'; ?>"><a href="#"> <i class="fa fa-user"></i> Manajemen Pengguna  </a></li>
                <li class="<?php if ($active=='setting') echo 'active'; ?>"><a href="#"> <i class="fa fa-cog"></i> Setelan  </a></li>
            </ul>
        </div>
    </section>
    <section class="panel">
        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked labels-info ">
                <li> <h4>Daftar Taman</h4> </li>
                <?php foreach ($list_taman as $taman){ ?>
                <li> <a href="#"> <img src="../assets/img/tree.png" class="img-circle" width="20"><?php echo $taman['nama']; ?> <p><?php echo $taman['alamat']; ?></p></a></li>
                <?php } ?>
            </ul>
            <a href="#"> + Tambah Taman</a>
        </div>
    </section>
</div>
<div class="col-sm-9">
<?php
    include($content);
?>
</div>
</div>




</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

<!--main content end-->

<!-- js placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>
<script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="../assets/js/common-scripts.js"></script>

<!--script for this page-->

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>