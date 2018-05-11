<aside class="page-sidebar  col-lg-4">  
 <!--<section class="widget has-divider">
        <div class="panel panel-default">
           
            <a href="http://host.aasksoft.com/?r=WUpWZmZPdFU2Ylp2dGM5MVJnRWIzZz09&v=WS85NWRvRUhxM2hVZFVKM1pBSWk0UT09" target='blank'>
               <img class='lazy' src='loading.gif' data-src="http://worldfree4u2.com/59.png" alt="Image"  class="image">
                                        </a>
            
        </div>
       
        
        
    </section>-->
  
    <div class="panel panel-default">
        <div class="panel-body">
             <legend><strong>TODAY UPDATED SERIES</strong></legend>
             <div class="form-group">
             <?php
             $cdate=date("Y-m-d");
             $result=$main->adminDB[$_SESSION["db_1"]]->query($main->select("post",$_SESSION["db_1"]).$main->whereBetweenDate("isDate",array("isDate"=>$cdate." 00:00:00","isDates"=>$cdate." 23:59:59"),"AND").$main->orderBy("DESC","isDate").$main->limitWithOutOffset("10"));
             while($row=$result->fetch_assoc())
               {
                   echo "<div class='col-lg-6'>";
                   echo "<p> <a href='/?r=".$obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"])."'>".$row["title"]."</a></p>";
                   echo "<a href='/?r=".$obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VSingleMovie") . "&c=" . $obj->encdata($row["id"])."'><img class='lazy' src='loading.gif' data-src='".$row["img"]."' alt='Image Baner'></a>";
                   echo "</div>";
               }
               ?>
        </div>
        </div>
        
    </div>
<!-- <section class="widget has-divider" style="100px;">
        <div class="panel panel-default">
           
       <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/BeQgUcgHyOf/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:62.5% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/BeQgUcgHyOf/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by #Click (@pankajuc)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-01-22T16:08:20+00:00">Jan 22, 2018 at 8:08am PST</time></p></div></blockquote> <script async defer src="//www.instagram.com/embed.js"></script>
                    </div>
       
        
    </section>-->
    <section class="widget has-divider">
         <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="title" style="color:red;">Sorry For The Ads But Ads is Our Only Way To Maintain The Server & Service </h3>
            </div>
        </div>
    </section>
    <section class="widget">
        
            <div id="SC_TBlock_448686" class="SC_TBlock">loading...</div> 
       
    </section><!--//widget-->

</aside>