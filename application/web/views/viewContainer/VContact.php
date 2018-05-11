
<div class="content container">
    <div class="page-wrapper">

        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-lg-8">                         
                    <div class="panel panel-danger">

                        <div class="panel-body">
                            <div class="form-group">
                                <legend>Contact Us Via Email</legend>
                                <div id="msg"></div>
                                <form action="#" method="post" id="myForm" onsubmit="return postData('<?php echo $obj->encdata("C_sendMail_1"); ?>', '#msg', '#myForm')">
                                    <div class="form-group">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Name <span id="require">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" required="" placeholder="Enter Name" autocomplete="off">
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
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Mobile No. <span id="require">*</span></label>
                                                <input type="text" class="form-control" name="mobile" id="mobile" required="" maxlength="10" pattern="^\d{10}$" placeholder="Enter Mobile No." autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Subject <span id="require">*</span></label>
                                                <input type="text" class="form-control" name="subject" id="subject" required="" placeholder="Enter Subject" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <label>Message <span id="require">*</span></label>
                                            <textarea name="message" id="message" class="form-control" placeholder="Message type here" required=""style="height: 200px;"></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12"><br>
                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form> 
                            </div>
                        </div>
                    </div>

                </div><!--//news-wrapper-->
                <?php $main->isLoadView("sidebar", false, array()); ?>
            </div><!--//page-row-->
        </div><!--//page-content-->
    </div><!--//page--> 
</div><!--//content-->
</div><!--//wrapper-->
