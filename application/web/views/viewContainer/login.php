<style>
    .wrapper1 {
        padding: 20px;

        max-width: 400px;
        margin: 50px auto;
    }

    .demo-1 {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
    }

    .demo-2 {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        max-width: 150px;
    }
</style>
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

                    $sql = $main->select("post", $_SESSION["db_1"]) . $main->orderBy("DESC", "isDate") . $main->limitWithOffset($offset, $limit);
                    $result = $main->adminDB[$_SESSION["db_1"]]->query($sql);
                    $i = 0;
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <div class="panel panel-danger">
                            <button type="button" class="close"style="padding: 8px; color: #000;" data-toggle="modal" data-target="#myModal" onclick="postURL('<?php echo $obj->encdata("C_OpenLink2") . "&v=" . $obj->encdata("VPostReport"); ?>', '#rk', '<?php echo $row["id"]; ?>')" ><i class="fa fa-ellipsis-h fa-1x" aria-hidden="true"></i></button>

                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-lg-4" id="container">
                                        <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">
                                            <img class='lazy' src='loading.gif' data-src="<?php echo $row["img"]; ?>" alt="Image"  class="image">
                                        </a>
                                        <div id="middle">
                                            <div id="text"><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>"><i class="fa fa-link fa-2x"></i></a></div>
                                        </div>
                                        <div class="alert alert-dismissible alert-success calert">
                                            <?php echo $row["category"]; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 ">
                                        <h3><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>"><?php echo $row["title"]; ?></a></h3>
                                        <div><div class="form-group">
                                                <table> <tr>
                                                        <td><i class="fa fa-user"></i> <?php echo $row["byw"]; ?> </td>
                                                        <td><i class="fa fa-comment"></i> <?php
                                                            $sl = $main->select("postcvc", $_SESSION["db_1"]) . $main->whereSingle(array("post_id" => $row["id"]));
                                                            $rslt = $main->adminDB[$_SESSION["db_1"]]->query($sl);
                                                            $rp = $rslt->fetch_assoc();
                                                            echo $rp["comment"];
                                                            ?> Comments</td>
                                                        <td><i class="fa fa-eye"></i> <?php echo $rp["view"]; ?> Views</td>
                                                    </tr></table>
                                            </div></div>
                                        <!--<div class="wrapper1">
    <p class="demo-2"><?php //echo $row["description"];  ?></p></div>-->
                                        <span><a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"]); ?>">[Download Here]</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                    <div class="panel-body">
                        <div class="col-lg-12">
                            <ul class = "pagination pagination-sm" style="float: right;">
                                <?php
                                $i = 0;
                                $k = 1;
                                $fl = 0;
                                if ($k == $page) {
                                    $t = $page - 1;
                                    ?> <li class = 'disabled'><a href="#">&laquo;</a></li><?php
                                    } else {
                                        ?> <li><a href = '/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("login") . "&pg=" . $k; ?>' >&laquo;</a></li><?php
                                    }

                                    while ($i < $max_count) {
                                        if ($k < 3) {
                                            if ($k == $page) {
                                                $fl = $k;
                                                ?><li class = 'disabled'> <a href="#"><?php echo $k; ?></a></li><?php
                                            } else {
                                                ?><li><a href ='/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("login") . "&pg=" . $k; ?>' > <?php echo $k; ?></a></li><?php
                                            }
                                        } else {
                                            if ($k < 4) {
                                                if (isset($_REQUEST["pg"])) {
                                                    ?>
                                                <li class = 'disabled'> <a href="#"><?php echo $_REQUEST["pg"]; ?></a></li>
            <?php } ?>

                                            <li class = 'disabled'> <a href="#">...</a></li><?php
                                        }
                                    }
                                    $k++;
                                    $i = $i + $limit;
                                }
                                $k--;
                                ?>
                                <li><a href ='/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("login") . "&pg=" . $k; ?>' > <?php echo $k; ?></a></li>

                                <?php
                                if ($fl == $k) {
                                    $t = $page + 1;
                                    ?> <li class = 'disabled'><a href="#">&raquo;</a></li><?php
                                    } else {
                                        $t = $page + 1;
                                        ?> <li><a href = '/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("login") . "&pg=" . $t; ?>' >&raquo;</a></li><?php
                                    }
                                    ?>



                            </ul>
                        </div>
                    </div>



                </div><!--//news-wrapper-->
<?php $main->isLoadView("sidebar", false, array()); ?>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page--> 
</div><!--//content-->
</div><!--//wrapper-->
<?php $main->isLoadview("VModal", false, array()); ?>