
<div class="content container">
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-lg-8">                         
                    <!-- code here-->
                    <?php
                    $limit = 10;
                    $sql = $main->selectCount("post", "id");
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $r = $result->fetch_assoc();
                    $max_count = $r["count(id)"];
                    $page = 1;
                    $offset = 0;
                    if (isset($_REQUEST["pg"])) {
                        $page = $_REQUEST["pg"];
                        $tempLimit = $limit;
                        $tempLimit = $limit * $page;
                        $offset = $tempLimit - $limit;
                    } else {
                        $limit = $limit * $page;
                        $offset = 0;
                    }
                    $i = 0;
                    $sql = $main->select("post", $_SESSION["db_1"]).$main->whereSingleLike(array("title"=>$main->filterPost("s")));
                    
                  //  $sql = $main->select("post", $_SESSION["db_1"]);//.$main->searchFullText(array("1"=>"title"),array("title"=>$main->filterPost("s"))) .$main->orderBy("DESC","id");//. $main->limitWithOffset($offset, $limit);
                    //echo "<br><br><br>".$sql;die;
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $i = 0;
                   // $count=  mysqli_num_rows($result);
                    //if($count!=0){
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <div class="panel panel-danger">
                            <button type="button" class="close"style="padding: 8px; color: #000;"><i class="fa fa-ellipsis-h fa-1x" aria-hidden="true"></i></button>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-lg-4" id="container">
                                       <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">
                                        <img src="<?php echo $row["img"]; ?>" alt="Image"  class="image">
                                        <div id="middle">
                                            <div id="text"><i class="fa fa-link fa-2x"></i></div>
                                        </div>
                                        <div class="alert alert-dismissible alert-success calert">
                                             <?php echo $row["category"];?>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 ">
                                        <h3><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>"><?php echo $row["title"]; ?></a></h3>
                                        <div><div class="form-group">
                                                <table> <tr>
                                                    <td><i class="fa fa-user"></i> <?php echo $row["byw"];?> </td>
                                                    <td><i class="fa fa-comment"></i> <?php 
                                                    $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row["id"]));
                                                        $rslt=$main->adminDB[$_SESSION["db_1"]]->query($sl);
                                                        $rp=$rslt->fetch_assoc();
                                                    echo $rp["comment"];?> Comments</td>
                                                    <td><i class="fa fa-eye"></i> <?php echo $rp["view"];?> Views</td>
                                                    </tr></table>
                                            </div></div>
                                        <!--<div class="short-desc"><?php //echo $row["description"]; ?></div>-->
                                        <span><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">[Download Here]</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    //}
                    $sql = $main->select("post", $_SESSION["db_1"]).$main->searchFullText(array("1"=>"title","2"=>"description","3"=>"category"),array("title"=>$main->filterPost("s"))) .$main->orderBy("DESC","id");//. $main->limitWithOffset($offset, $limit);
                    //echo "<br><br><br>".$sql;die;
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $i = 0;
                    $count=  mysqli_num_rows($result);
                    if($count!=0){
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <div class="panel panel-danger">
                            <button type="button" class="close"style="padding: 8px; color: #000;"><i class="fa fa-ellipsis-h fa-1x" aria-hidden="true"></i></button>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-lg-4" id="container">
                                       <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">
                                        <img src="<?php echo $row["img"]; ?>" alt="Image"  class="image">
                                        <div id="middle">
                                            <div id="text"><i class="fa fa-link fa-2x"></i></div>
                                        </div>
                                        <div class="alert alert-dismissible alert-success calert">
                                             <?php echo $row["category"];?>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 ">
                                        <h3><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>"><?php echo $row["title"]; ?></a></h3>
                                        <div><div class="form-group">
                                                <table> <tr>
                                                    <td><i class="fa fa-user"></i> <?php echo $row["byw"];?> </td>
                                                    <td><i class="fa fa-comment"></i> <?php 
                                                    $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row["id"]));
                                                        $rslt=$main->adminDB[$_SESSION["db_1"]]->query($sl);
                                                        $rp=$rslt->fetch_assoc();
                                                    echo $rp["comment"];?> Comments</td>
                                                    <td><i class="fa fa-eye"></i> <?php echo $rp["view"];?> Views</td>
                                                    </tr></table>
                                            </div></div>
                                        <!--<div class="short-desc"><?php //echo $row["description"]; ?></div>-->
                                        <span><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">[Download Here]</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    }else{
                        echo $main->printMessage("Sorry, but nothing matched your search keyword ".$main->filterPost("s").". Please try again with some different keywords. ","danger");
                    }
                    ?>
               <!--    <div class="form-group">
                        <div class="col-lg-6">
                            <ul class = "pagination pagination-sm" style="float: right;">
                                <?php
                                $i = 0;
                                $k = 1;
                                $fl = 0;
                                if ($k == $page) {
                                    $t = $page - 1;
                                    ?> <li class = 'disabled'><a href="#">&laquo;</a></li><?php
                                } else {
                                    ?> <li><a href = 'javascript:void(0)' onclick="return postURL3('<?php echo $obj->encdata("C_OpenLink2") . "&v=" . $obj->encdata("V_PostDataTable") . "&pg=" . $k; ?>', '#display', '1');">&laquo;</a></li><?php
                                    }

                                    while ($i < $max_count) {
                                        if ($k == $page) {
                                            $fl = $k;
                                            ?><li class = 'disabled'> <a href="#"><?php echo $k; ?></a></li><?php
                                        } else {
                                            ?><li><a href ='javascript:void(0)' onclick="return postURL3('<?php echo $obj->encdata("C_OpenLink2") . "&v=" . $obj->encdata("V_PostDataTable") . "&pg=" . $k; ?>', '#display', '1');"> <?php echo $k; ?></a></li><?php
                                        }
                                        $k++;
                                        $i = $i + $limit;
                                    }
                                    $k--;
                                    if ($fl == $k) {
                                        $t = $page + 1;
                                        ?> <li class = 'disabled'><a href="#">&raquo;</a></li><?php
                                    } else {
                                        $t = $page + 1;
                                        ?> <li><a href = 'javascript:void(0)' onclick="return postURL3('<?php echo $obj->encdata("C_OpenLink2") . "&v=" . $obj->encdata("V_PostDataTable") . "&pg=" . $t; ?>', '#display', '1');">&raquo;</a></li><?php
                                    }
                                    ?>



                            </ul>
                        </div>
                    </div>
-->

                </div><!--//news-wrapper-->
                <?php $main->isLoadView("sidebar", false, array()); ?>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page--> 
</div><!--//content-->
</div><!--//wrapper-->
