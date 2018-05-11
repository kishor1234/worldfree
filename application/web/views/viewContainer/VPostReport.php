<div class="form-group">

    <legend>Report</legend>
    <div id="m"></div>
    Your email address will not be published. Required fields are marked <span id="require">*</span>
    <form action="#" method="post" id="myForm" onsubmit="return post('<?php echo $obj->encdata("C_PostReport"); ?>', '#m', '#myForm')">
        <div class="form-group">
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Name <span id="require">*</span></label>
                    <input type="text" class="form-control" name="reportname" id="reportname" required="" placeholder="Enter Name" autocomplete="off">
                    <input type="hidden" name="post_id" id="post_id" readonly value="<?php echo $main->filterPost("id"); ?>">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>Email <span id="require">*</span></label>
                    <input type="email" class="form-control" name="reportemail" id="reportemail" required="" placeholder="Enter Email" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                <label>Message <span id="require">*</span></label><br>
                <span id="require">(Please mention detail report about post, so we can delete post or update post....!)</span>
                <textarea name="msg" id="msg" class="form-control" placeholder="Message type here" required=""style="height: 100px;"></textarea>

            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12"><br>
                <input type="submit" value="Report for Post" class="btn btn-danger btn-sm">
            </div>
        </div>
    </form> 
</div>
