<!--Modal-->
<!-- Trigger the modal with a button -->

<!-- Modal -->

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">&times;</button>
        <!-- Modal content-->
        <div class="modal-content" style="height: 450px;">

            <div class="modal-body" id="rk">
                
               

            </div>

        </div>

    </div>
</div>
<!--end Modal-->
<!-- ******FOOTER****** --> 
<footer class="footer">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-12">
                    <div id="SC_TBlock_448685" class="SC_TBlock">loading...</div> 
                </div><br><br>
                <div class="footer-col col-md-12">
                    <p>Disclaimer:- https://worldfree4u2.com does not host any files on it’s servers. All files or contents hosted on third party websites. https://worldfree4u2.com does not accept responsibility for contents hosted on third party websites. We just index those links which are already available in internet. All My Post are Free Available On INTERNET Posted By Somebody Else, I’m Not VIOLATING Any COPYRIGHTED LAW. If Anything Is Against LAW, Please Notify Me So That It Can Be Removed.</p>
                </div><!--//foooter-col--> 
                
                <form action="#" method="post" id="myNForm" onsubmit="return postData('<?php echo $obj->encdata('C_Newsletter');?>','#mk','#myNForm')">
                    <div id="mk" style="width: 150px; height: 100px;"></div>
                <div class="footer-col col-lg-5">
                    <label class="control-label col-lg-4" style="padding: 0;"><h3>NEWSLETTER</h3></label>
                    <div class="col-lg-4"style="padding: 0;" >
                        <input type="email" name="email" class="form-control" style="height: 25px;" placeholder="Email *" required="">
                    </div>
                    <div class="col-lg-4" style="padding: 0;">
                        <input type="submit" class="btn btn-success btn-sm" style="height: 25px; padding: 3px;" value="Subscribe">
                    </div>
                </div>
                </form>
                <div  style="float: right; bottom: 0px;">

                    <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VPrivacyPolicy");?>" target="blank">Privacy Policy</a> | <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VCookiesPolicy");?>" target="blank">Cookies Policy</a> | <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VDisclaimer"); ?>" target="blank">Declaimer</a> | <a href="/?r=<?php echo $obj->encdata("C_OpenLink") . "&v=" . $obj->encdata("VAboutUs"); ?>" target="blank">About Us</a>

                </div>      
            </div><!--//foooter-col-->   
        </div>   
    </div>        

    <div class="bottom-bar">
        <div class="container">
            <div class="row">
                <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright @ 2017 WorldFree4u2.com | Powered by <a href="http://worldfree4u2.com/" target="blank">WorldFree4u2</a></small>
                <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                    <li><a target="blank" href="#" ><i class="fa fa-twitter"></i></a></li>
                    <li><a target="blank" href="https://www.facebook.com/Worldfree4u2com-148896715735481" ><i class="fa fa-facebook"></i></a></li>
                    <li><a target="blank" href="#" ><i class="fa fa-youtube"></i></a></li>
                    <li><a target="blank" href="#" ><i class="fa fa-instagram"></i></a></li>

                    <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                </ul><!--//social-->
            </div><!--//row-->
        </div><!--//container-->
    </div><!--//bottom-bar-->
</footer><!--//footer-->

<!-- *****CONFIGURE STYLE****** -->  
<div class="config-wrapper hidden-xs">
    <div class="config-wrapper-inner">
        <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
        <div id="config-panel" class="config-panel">
            <p>Choose Colour</p>
            <ul id="color-options" class="list-unstyled list-inline">
                <li class="default active" ><a data-style="assets/css/styles.css" data-logo="assets/images/logo.png"  href="#" onclick="sendAjaxforCSS('assets/css/styles.css', 'assets/images/logo.png')"></a></li>
                <li class="green"><a data-style="assets/css/styles-green.css" data-logo="assets/images/logo-green.png"  onclick="sendAjaxforCSS('assets/css/styles-green.css', 'assets/images/logo-green.png')" href="#"></a></li>
                <li class="purple"><a data-style="assets/css/styles-purple.css" data-logo="assets/images/logo-purple.png" onclick="sendAjaxforCSS('assets/css/styles-purple.css', 'assets/images/logo-purple.png')"  href="#"></a></li>
                <li class="red"><a data-style="assets/css/styles-red.css" data-logo="assets/images/logo-red.png"  onclick="sendAjaxforCSS('assets/css/styles-red.css', 'assets/images/logo-red.png')" href="#"></a></li>

            </ul><!--//color-options-->
            <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
        </div><!--//configure-panel-->
    </div><!--//config-wrapper-inner-->
</div><!--//config-wrapper-->
</div>
<!-- Javascript -->          
<script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
<script src="assets/ap/aasksoft editor/jquery.lazy.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>

<script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 

<script type="text/javascript" src="assets/js/main.js"></script>   
<script src="assets/js/jquery.cookie.min.js" type="text/javascript"></script>
<script>
                    function sendAjaxforCSS(path, logo)
                    {
                        $.post("/?r=<?php echo $obj->encdata("C_ChangeTheam"); ?>", {path: path, logo: logo}, function (data) {
                        });
                    }
                    function onLoading()
                    {
                        $("#cover").show();
                        $("#msg").html("<center><img src='logo.gif' style='width:100px;' /><h4 style='color:#000;'><strong>Please Wait.!</strong></h4></center>");
                    }
                    function offLoading()
                    {
                        $("#msg").html("");
                        $("#cover").hide();
                    }
                    function postURL(file, display, id)
                    {
                        onLoading();
                        $.post("/?r=" + file, {id: id}, function (data) {
                            offLoading();
                            $(display).html(data);
                            $("#m").show();
                            printMessage('<?php echo $obj->encdata("C_PrintMessage"); ?>', "#m");
                        });
                        return false;
                    }
                    function post(file, display, id)
                    {
                        
                        onLoading();
                        $.post("/?r=" + file, {message:jQuery("textarea#msg").val(),name:$("#reportname").val(),email:$("#reportemail").val(),post_id:$("#post_id").val()}, function (data) {
                            offLoading();
                            $(display).html(data);
                            
                        });
                        return false;
                    }
                    function printMessage(file, display)
                    {
                        $.post("/?r=" + file, {}, function (data) {
                            $(display).html(data);
                        });
                    }
                    function postData(file, display, form)
                    {

                        var data = new FormData($(form)[0]);
                        onLoading();
                        $.ajax({
                            type: "POST",
                            url: '/?r=' + file,
                            data: data, //$("#studetnReg").serialize(), // serializes the form's elements.,
                            enctype: "multipart/form-data",
                            contentType: false,
                            processData: false,
                            success: function (data)
                            {
                                offLoading();
                                $(display).html(data);
                                $(form)[0].reset();

                            }});

                        return false;
                    }
                    $(function () {
                        $('.lazy').lazy();
                    });
</script>
<script type="text/javascript">
	$(document).ready(function(){
	    
             if ($.cookie('pop') == null) {
                 $('.modal-content').resizable({
      //alsoResize: ".modal-dialog",
      minHeight: 300,
      minWidth: 300
    });
    $('.modal-dialog').draggable();

    $('#myNewsletterModal').on('show.bs.modal', function() {
      $(this).find('.modal-body').css({
        'max-height': '100%'
      });
    });
                     $('#myNewsletterModal').modal('show');
                     $.cookie('pop', '7');
                 }
  
		
      
	});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110926232-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110926232-1');
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5871156475594643",
    enable_page_level_ads: true
  });
</script>
<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "448685",
    domain : "n.ads3-adnow.com"
  });
</script>
<script type="text/javascript">
  (sc_adv_out = window.sc_adv_out || []).push({
    id : "448686",
    domain : "n.ads1-adnow.com"
  });
</script>
<script>
    $(document).ready(function(){
  $('a').attr('target', '_blank');
  
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="//st-n.ads1-adnow.com/js/adv_out.js"></script>
<script type="text/javascript" src="//st-n.ads3-adnow.com/js/adv_out.js"></script>

</body>
</html> 

