<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!-->
<?php
$uri = $_SERVER['REQUEST_URI'];
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url2=  urlencode($url); // Outputs: Full URL
$title="";
$cat="";
$img="";
try{
    if(isset($_REQUEST["c"]))
    {
        $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $obj->decdata($_REQUEST["c"])));
        $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
        $r=$result->fetch_assoc();
        $title=$r["title"];
        $cat=$r["category"];
        $img=$r["img"];
    }
} catch (Exception $ex) {

}
 
?>
<html lang="en"> 
    <!--<![endif]-->  

    <title>WorldFree4u2 | <?php echo $title;?></title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"                content="<?php echo $url;?>" />
    <meta property="og:type"               content="<?php echo $cat;?>" />
    <meta property="og:title"              content="<?php echo $title;?>" />
    <meta property="og:description"        content="<?php echo $title;?>" />
    <meta property="og:image"              content="<?php echo $img;?>" />
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico"> 
    <meta name="propeller" content="c9503131af0d4de91fc11d20dc9786bd" />
    <meta name="description" content="WorldFree4u2 help you to Download free tv series 480p mkv, direct download movies, season & episode, download 480p, 720p & 1080p hevc x265 worldfree4u2 HD low size."/>
    <meta name="keywords" content="Worldfree4u, 9xmovies, World4ufree, Khatrimaza, reqzone, ajhdmovies, Moviesak47, mkvtvseries,archive,reqzone,WorldFree4u2, New Hollywod Movies download, TV Series Download, All Cartoon Episode Download, Bollywood Movies Download, worldfree4u2"/>

    

    <meta name="author" content="worldfree4u2.com">
    <link rel="canonical" href="http://worldfree4u2.com/">
    <meta name="copyright" content='WorlFree4u2'>
    <!--<link href="assets/cssff98.css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css"/>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
   <!-- <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="<?php
    if (isset($_SESSION["theam"])) {
        echo $_SESSION["theam"];
    } else {
        echo "assets/css/styles.css";
    }
    ?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background-color: #f1f1f1;
        }
        .phone{color:#FFF;}
        #black{color:#000;

        }
        #border-bottom{
            border-bottom: #f1f1f1 1px solid;
            padding-top: 4px;
            padding-bottom: 4px;

        }
        img{
            width: 100%;
            height: auto;
        }
        #logo{
            width: 800px;
            height: auto;
        }
        @media only screen and (max-width: 500px) {
            #logo {
                width: 100%;
                height: auto;
            }
        }
        @media only screen and (max-width: 768px) {
            #logo {
                width: 100%;
                height: auto;
            }
        }
        @media only screen and (max-width: 600px) {
            #logo {
                width: 100%;
                height: auto;
            }
        }
        .img2{
            width: 30px;
            height: 20px;
        }
        .error{
            color:red;
        }
        #require{
            color:red;
        }

        .calert{
            width: 100px;
            padding: 0;
            padding-left: 20px;
            position: absolute;
            top:0;
            border-radius: 0;
        }
        img{
            width:100%;
            height:auto;
        }

    </style>

</head> 

<body>

    <div class="background-image"></div>
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">              
                    <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                        <li><a target="blank" href="#" ><i class="fa fa-twitter"></i></a></li>
                        <li><a target="blank" href="https://www.facebook.com/Worldfree4u2com-148896715735481" ><i class="fa fa-facebook"></i></a></li>
                        <li><a target="blank" href="#" ><i class="fa fa-youtube"></i></a></li>
                        <li><a target="blank" href="#" ><i class="fa fa-instagram"></i></a></li>

                    </ul><!--//social-icons-->
                    <!--//contact-->
                    <form class="pull-right search-form" role="search" action="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSearch"); ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="s" list="keywordlist" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme"><i class="fa fa-search"></i></button>
                    </form>   
                </div>      
            </div><!--//to-bar-->

        </header><!--//header-->

        <!-- ******NAV****** -->
        <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->

 
 <img src="<?php echo $img;?>" alt="WorldFree4u2" hidden>
                    <img src="logo.png" alt="WorldFree4u2" style="width:50px; height: 50px;">

                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
              
          } else {
              echo "active";
          } ?>"><a href="/">Home</a></li>
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
              if (strcmp($_REQUEST["ct"], "TV Series") == 0) {
                  echo "active";
              }
          } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VperCtg") . "&ct=TV Series"; ?>">TV Series</a></li>
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
              if (strcmp($_REQUEST["ct"], "Animation") == 0) {
                  echo "active";
              }
          } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VperCtg") . "&ct=Animation"; ?>">Animation</a></li>
                        <li class="nav-item dropdown <?php if (isset($_REQUEST["ct"])) {
              if (strcmp($_REQUEST["ct"], "Hollywood") == 0 || strcmp($_REQUEST["ct"], "Bollywood") == 0 || strcmp($_REQUEST["ct"], "Hollywood Hindi") == 0 || strcmp($_REQUEST["ct"], "Bollywood 300mb Movies") == 0 || strcmp($_REQUEST["ct"], "Hollywood Hindi 300 mb Movies") == 0) {
                  echo "active";
              }
          } ?>">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1" data-close-others="false" href="#">Movies <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php
                                $ssl=$main->select("category", $_SESSION["db_1"]);
                                $rslt=$main->adminDB[$_SESSION["db_1"]]->query($ssl);
                                while($rp=$rslt->fetch_assoc()){
                                    ?>
                                <li class="nav-item"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VperCtg") . "&ct=".$rp["category"]; ?>"><?php echo $rp["category"];?></a></li>
                                
                                    <?php
                                }
                                ?>   
                            </ul>
                        </li>

                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
                if (strcmp($_REQUEST["ct"], "Disc") == 0) {
                    echo "active";
                }
            } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VDisclaimer") . "&ct=Disc" ?>">Disclaimer</a></li>
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
                if (strcmp($_REQUEST["ct"], "Dam") == 0) {
                    echo "active";
                }
            } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VDMCAInfo") . "&ct=Dam"; ?>">DMCA Information</a></li>
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
                if (strcmp($_REQUEST["ct"], "hd") == 0) {
                    echo "active";
                }
            } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VHowtoDownload") . "&ct=hd"; ?>">How to Download</a></li>
                        <li class="nav-item <?php if (isset($_REQUEST["ct"])) {
                if (strcmp($_REQUEST["ct"], "Dl") == 0) {
                    echo "active";
                }
            } ?>"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VContact") . "&ct=Dl"; ?>">Contact us</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
      