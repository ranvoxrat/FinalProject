<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Home | Ferus Shop</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/price-range.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
  <link rel="stylesheet" href="css/header.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head><!--/head-->


<?php
if (isset($_SESSION['gcCart'])) {
  if (@count($_SESSION['gcCart']) > 0) {
    $cart = '<span class="carttxtactive">('.@count($_SESSION['gcCart']).')</span>';
  }

}
?>

<script type="text/javascript">


</script>
</head>

<body style="background-color:white" onload="totalprice()">

  <header id="header"><!--header-->
    <div class="header-middle "><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-md-4 clearfix">
            <div class="logo pull-left">
              <a href="<?php echo web_root;?>"><img src="images/Logo/ShopLogo.png" width="30%" alt="" /></a>
            </div>
          </div>
          <div class="col-md-8 clearfix">
            <div class="shop-menu clearfix pull-right">
              <ul class="nav navbar-nav">
                <li>
                <form action="<?php echo web_root ?>index.php?q=product" method="POST">
                <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                  <g>
                    <path
                      d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                    </path>
                  </g>
                </svg>
                <input placeholder="Search" type="text" name="search" class="input">
              </div>
                </form>
               
                  <!-- <form >
                    <div class="search_box pull-right">
                      <input type="text" name="search" placeholder="Search" />
                    </div>
                  </form> -->
                </li>
                <li><a href="<?php echo web_root; ?>index.php?q=cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <?php if (isset($_SESSION['CUSID'])) { ?>

                  <li><a href="<?php echo web_root ?>index.php?q=profile"><i class="fa fa-user"></i> Account</a></li>
                  <li><a href="<?php echo web_root ?>logout.php"><i class="fa fa-lock"></i> Logout</a></li>
                <?php } else { ?>
                  <li><a data-target="#smyModal" data-toggle="modal" href=""><i class="fa fa-lock"></i> Login</a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
             
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?php web_root ?>index.php" class="active">Home</a></li>
                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <?php
                    $mydb->setQuery("SELECT * FROM `tblcategory`");
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                      echo '<li><a href="index.php?q=product&category=' . $result->CATEGORIES . '" >' . $result->CATEGORIES . '</a></li>';
                    } ?>
                  </ul>
                </li>


                <li><a href="<?php web_root ?>index.php?q=product">Products</a></li>
                <li><a href="<?php web_root ?>index.php?q=contact">Contact</a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->
  <?php
  require_once $content;
  ?>
  <footer id="footer"><!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>FERUS</span>-Shop</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="address">
              <img src="images/home/map.png" alt="" />
              <p>Bulacan State University-Sarmiento Campus</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Service</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Online Help</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Change Location</a></li>
                <li><a href="#">FAQ’s</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Quick Shop</h2>
              <ul class="nav nav-pills nav-stacked">
                <?php
                $mydb->setQuery("SELECT * FROM `tblcategory` LIMIT 6");
                $cur = $mydb->loadResultList();
                foreach ($cur as $result) {
                  echo '<li><a href="index.php?q=product&category=' . $result->CATEGORIES . '" >' . $result->CATEGORIES . '</a></li>';
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>Policies</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privecy Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-widget">
              <h2>About Ferus Shop</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">Company Information</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Store Location</a></li>
                <li><a href="#">Affillate Program</a></li>
                <li><a href="#">Copyright</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!--/Footer-->
  <!-- modalorder -->
  <div class="modal fade" id="myOrdered">
  </div>
  <?php include "LogSignModal.php"; ?>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js"
    charset="UTF-8"></script>
  <script src="<?php echo web_root; ?>js/jquery.scrollUp.min.js"></script>
  <script src="<?php echo web_root; ?>js/price-range.js"></script>
  <script src="<?php echo web_root; ?>js/jquery.prettyPhoto.js"></script>
  <script src="<?php echo web_root; ?>js/main.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/gmaps.js"></script>
  <script src="js/contact.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script>
  <script type="text/javascript">
    $(document).on("click", ".proid", function () {
      // var id = $(this).attr('id');
      var proid = $(this).data('id')
      // alert(proid)
      $(".modal-body #proid").val(proid)
             
    });

  </script>
  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
      selector: "[data-toggle=tooltip]",
      container: "body"
    })
    // popover demo
    $("[data-toggle=popover]")
      .popover()
  </script>
  <script>
    $('.carousel').carousel({
      interval: 5000 //changes the speed
    })
  </script>
  <script type="text/javascript">
    document.onreadystatechange = function () {
      $('#date_picker').datetimepicker({
        format: 'mm/dd/yyyy',
        language: 'en',
        weekStart: 1,
        todayBtn: 1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
      });
      function validatedate() {           
        var todaysDate = new Date();
        var txtime = document.getElementById('ftime').value
        var tprice = document.getElementById('alltot').value
        var BRGY = document.getElementById('BRGY').value
        var onum = document.getElementById('ORDERNUMBER').value
        var mytime = parseInt(txtime);
        var todaytime = todaysDate.getHours();
        if (txtime == "") {
          alert("You must set the time enable to submit the order.")
        } else
          if (mytime < todaytime) {
            alert("Selected time is invalid. Set another time.")
          } else {
            window.location = "index.php?page=7&price=" + tprice + "&time=" + txtime + "&BRGY=" + BRGY + "&ordernumber=" + onum;
          }
      }
    }
  </script>
  <script type="text/javascript">
    document.onreadystatechange=function(){
      $('.form_curdate').datetimepicker({
      language: 'en',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
    $('.form_bdatess').datetimepicker({
      language: 'en',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
    }
  </script>
  <script>
  document.onreadystatechange=function(){                     
    function checkall(selector) {
      if (document.getElementById('chkall').checked == true) {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
          chkelement.item(i).checked = true;
        }
      }
      else {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
          chkelement.item(i).checked = false;
        }
      }
    }
    function checkNumber(textBox) {
      while (textBox.value.length > 0 && isNaN(textBox.value)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
      }
      textBox.value = trim(textBox.value);
    }
    //
    function checkText(textBox) {
      var alphaExp = /^[a-zA-Z]+$/;
      while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
      }
      textBox.value = trim(textBox.value);
    }
  }
  </script>

</body>

</html>