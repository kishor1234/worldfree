<div class="content container">
    <div class="page-wrapper">

        <?php
$uri = $_SERVER['REQUEST_URI'];
//echo $uri; // Outputs: URI
 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
 $url2=  urlencode($url); // Outputs: Full URL

?>
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-lg-8">                         
                    <!-- code here-->
                    <?php
                    $sql=$main->updateINC(array("view"=>"view + 1"), "postcvc"). $main->whereSingle(array("post_id" => $obj->decdata($_REQUEST["c"])));
                  
                    $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $sql = $main->select("post", $_SESSION["db_1"]) . $main->whereSingle(array("id" => $obj->decdata($_REQUEST["c"])));
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);

                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="panel panel-danger">
                            <button type="button" class="close"style="padding: 8px; color: #000;" data-toggle="modal" data-target="#myModal" onclick="postURL('<?php echo $obj->encdata("C_OpenLink2")."&v=".$obj->encdata("VPostReport");?>','#rk','<?php echo $row["id"];?>')"><i class="fa fa-ellipsis-h fa-1x" aria-hidden="true"></i></button>

                            <div class="panel-body">

                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <header class="page-heading clearfix">
                                            <h1 class="heading-title pull-left"><?php echo $row["title"]; ?></h1>
                                            <div class="breadcrumbs pull-right">
                                                <ul class="breadcrumbs-list">
                                                    <li class="breadcrumbs-label">You are here:</li>
                                                    <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                                                    <li><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VCategoryWise") . "&c=" . $obj->encdata($row["category"]); ?>"><?php echo $row["category"]; ?></a><i class="fa fa-angle-right"></i></li>
                                                    <li class="current short"><?php echo $row["title"]; ?></li>
                                                </ul>
                                            </div><!--//breadcrumbs-->
                                        </header> 
                                    </div>
                                    <div class="col-lg-12">
                                        <div>
                                            <style>
                                                .background-image2 {
                                                    z-index: - 800;
                                                    background-image: url('<?php echo $row["img"]; ?>');
                                                    width:auto;
                                                    height:400px;
                                                    opacity:0.7;
                                                    -webkit-filter: blur(5px);
                                                    -moz-filter: blur(5px);
                                                    -o-filter: blur(5px);
                                                    -ms-filter: blur(5px);
                                                    filter: blur(5px);
                                                }
                                            </style>
                                            <div class="background-image2"> </div>
                                            <div class="col-lg-4 col-lg-offset-4" style="margin-top: -350px; z-index: 800"><img class='lazy' src='loading.gif' data-src="<?php echo $row["img"]; ?>" alt="Image" >
                                                <div id="middle">
                                                    <div id="text"><i class="fa fa-link fa-2x"></i></div>
                                                </div>
                                                <div class="alert alert-dismissible alert-success calert">
                                                    <?php echo $row["category"]; ?>
                                                </div>
                                            </div>

                                        </div>


                                    </div><br><br>
                                    <div class="col-lg-12 ">
                                        <h3><?php echo $row["title"]; ?></h3>
                                        <div><div class="form-group">
                                                <table> <tr>
                                                        <td><i class="fa fa-user"></i> <?php echo $row["byw"]; ?> </td>
                                                        <td><i class="fa fa-comment"></i> <?php 
                                                        $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $obj->decdata($_REQUEST["c"])));
                                                        $rslt=$main->adminDB[$_SESSION["db_1"]]->query($sl);
                                                        $rp=$rslt->fetch_assoc();
                                                        
                                                        echo $rp["comment"]; ?> Comments</td>
                                                        <td><i class="fa fa-eye"></i> <?php 
                                                        echo $rp["view"]; ?> Views</td>
                                                    </tr></table>
                                            </div></div>
                                        <div><?php echo $row["description"]; ?></div>

                                    </div>
                                    <!--<div class="col-lg-12">
                                        <center><a href="<?php //echo $main->slink . urlencode("http://aasksoft.com/"); ?>" target="blank" class="btn btn-success">Download</a> 
                                    </div>-->
                                    <center>
                                        <div class="col-lg-12">
                                            <?php
                                            $sql = $main->select("url", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row['id']));
                                            $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                                            while ($ro = $result->fetch_assoc()) {
                                                echo "<br><br><div class='form-group'>";
                                                
                                                echo "<div class='col-lg-12'>" . $ro["title"] . " <br><br></div>";
                                                
                                               echo "<div class='col-lg-12'><a href='" . $ro["slink"] . "' target='blank' class='btn btn-primary'><i class='fa fa-download'></i> Direct Download ".$ro["size"]."</a><br><br></div>";
                                                
                                                echo "</div><br><br>";
                                            }
                                            ?>
                                        </div><br>
                                    </center>

                                </div>
                            </div>
                            <br><br>
                        </div><br>
                         <div class="col-lg-12">
                             <div class="form-group">
                                 <div class="fb-share-button" data-href="<?php echo $url;?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url;?>&amp;src=sdkpreparse">Share</a></div>
                             </div>
                         </div>
                        <div class="form-group">
                            <div class="col-lg-12">
                                <legend>Comment's</legend>
                                
                                <?php
                                $sql = $main->select("comment", $_SESSION["db_1"]) . $main->where(array("post_id" => $row["id"], "isActive" => "1"), "AND") . $main->limitWithOutOffset("6");
                                $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                                $fl = true;
                                while ($rw = $result->fetch_assoc()) {

                                    if ($fl == true) {
                                        ?>
                                        <blockquote class="panel-danger">
                                            <p><?php echo $rw["message"]; ?></p>
                                            <small><?php echo $rw["name"]; ?> post at <cite title="Source Title"><i class="fa fa-clock-o"></i> <?php echo $rw["isDate"]; ?></cite></small>
                                        </blockquote>
                                        <?php
                                        $fl = false;
                                    } else {
                                        ?>
                                        <blockquote class=" blockquote-reverse panel-primary">
                                            <p><?php echo $rw["message"]; ?></p>
                                            <small><?php echo $rw["name"]; ?> post at <cite title="Source Title"><i class="fa fa-clock-o"></i> <?php echo $rw["isDate"]; ?></cite></small>
                                        </blockquote>
                                        <?php
                                        $fl = true;
                                    }
                                }
                                ?>
                                <p><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VAllCommentByPost") . "&c=" . $obj->encdata($row["id"]); ?>">All Comment</a></p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <br>
                                <legend>Add a Comment</legend>
                                <div id="msg"></div>
                                <span id="require">Your email address will not be published. Required fields are marked </span><br>
                                <span id="require">Note:- Let us know if links are dead,we will update them ASAP</span>
                                <form action="#" method="post" id="myForm" onsubmit="return postData('<?php echo $obj->encdata("C_AddComment"); ?>', '#msg', '#myForm')">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <label>Message <span id="require">*</span></label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Message type here" required=""style="height: 100px;"></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name <span id="require">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" required="" placeholder="Enter Name" autocomplete="off">
                                                <input type="hidden" name="post_id" id="post_id" readonly value="<?php echo $row["id"]; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email <span id="require">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email" required="" placeholder="Enter Email" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-12"><br>
                                            <input type="submit" value="Comment" class="btn btn-danger btn-sm">
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                </div><!--//news-wrapper-->
                <?php $main->isLoadView("sidebar", false, array()); ?>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page--> 
</div><!--//content-->
</div><!--//wrapper-->
