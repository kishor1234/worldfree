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
                    <script>
                        function failed(e) {
                            // video playback failed - show a message saying why
                            switch (e.target.error.code) {
                                case e.target.error.MEDIA_ERR_ABORTED:
                                    alert('You aborted the video playback.');
                                    break;
                                case e.target.error.MEDIA_ERR_NETWORK:
                                    alert('A network error caused the video download to fail part-way.');
                                    break;
                                case e.target.error.MEDIA_ERR_DECODE:
                                    alert('The video playback was aborted due to a corruption problem or because the video used features your browser did not support.');
                                    break;
                                case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
                                    alert('The video could not be loaded, either because the server or network failed or because the format is not supported.');
                                    break;
                                default:
                                    alert('An unknown error occurred.');
                                    break;
                            }
                        }
                    </script>

                    <video style="width: 750px;" src="<?php echo $_SESSION["vurl"]; ?>" type='video/x-matroska; codecs="theora, vorbis"' autoplay controls onerror="failed(event)"  ></video>


                </div><!--//news-wrapper-->
                <?php $main->isLoadView("sidebar", false, array()); ?>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page--> 
</div><!--//content-->
</div><!--//wrapper-->
<?php $main->isLoadview("VModal", false, array()); ?>