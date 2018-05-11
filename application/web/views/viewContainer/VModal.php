
<style type="text/css">
    	
	.modal-newsletter {	
		color: #999;
		width: 625px;
		font-size: 15px;
	}
	.modal-newsletter .modal-content {
		padding: 30px;
		border-radius: 0;		
		border: none;
	}
	.modal-newsletter .modal-header {
		border-bottom: none;   
        position: relative;
		border-radius: 0;
	}
	.modal-newsletter h4 {
		color: #000;
		font-size: 30px;
		margin: 0;
		font-weight: bold;
	}
	.modal-newsletter .close {
		position: absolute;
		top: -15px;
		right: -15px;
		text-shadow: none;
		opacity: 0.3;
		font-size: 24px;
	}
	.modal-newsletter .close:hover {
		opacity: 0.8;
	}
	.modal-newsletter .icon-box {
		color: #7265ea;		
		display: inline-block;
		z-index: 9;
		text-align: center;
		position: relative;
		margin-bottom: 10px;
	}
	.modal-newsletter .icon-box i {
		font-size: 110px;
	}
	.modal-newsletter .form-control, .modal-newsletter .btn {
		min-height: 46px;
		border-radius: 0;
	}
	.modal-newsletter .form-control {
		box-shadow: none;
		border-color: #dbdbdb;
	}
	.modal-newsletter .form-control:focus {
		border-color: #f95858;
		box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
	}
    .modal-newsletter .btn {
        color: #fff;
		background: #f95858;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
		padding: 6px 20px;
		min-width: 150px;
		margin-left: 6px !important;
        border: none;
    }
	.modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
		box-shadow: 0 0 8px rgba(249, 88, 88, 0.4);
		background: #f72222;
		outline: none;
	}
	.modal-newsletter .input-group {
		margin-top: 30px;
	}
	.hint-text {
		margin: 100px auto;
		text-align: center;
	}
</style>

<div id="myNewsletterModal" class="modal fade">
	<div class="modal-dialog modal-newsletter">
		<div class="modal-content">
                    <div id="ms"></div>
                    <form action="#" method="post" id="myNForm" onsubmit="return postData('<?php echo $obj->encdata('C_Newsletter');?>','#ms','#myNForm')">
				<div class="modal-header">
					<h4>Subscribe to our newsletter</h4>	
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
				</div>
				<div class="modal-body">					
					<p>Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>
					<div class="input-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
						<span class="input-group-btn">
							<input type="submit" class="btn btn-primary" value="Subscribe">
						</span>
					</div>
				</div>
			</form>			
		</div>
	</div>
</div>
