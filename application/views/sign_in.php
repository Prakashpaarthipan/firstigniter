<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (isset($this->session->userdata['logged_in'])) {

echo "1";
}

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png"> -->
        <!-- Place favicon.ico in the root directory -->

       
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap4.3.1.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/datatablesBS4.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/select2.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/jqueryconfirm.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/icheck-bootstrap.min.css');?>">
    </head>
    <style>
    	body,html {
			  height: 100%;
			}
			/* remove blue glow effect in button */
			.btn:active,
			.btn:focus,
			.btn.active,
			.btn:active:focus {
			   background-image: none;
			   outline: 0;
			   -webkit-box-shadow: none;
			   box-shadow: none;
			}
			/* remove blue glow effect in text box */
			input[type="text"], textarea {
			outline: none;
			box-shadow:none !important;
			border:1px solid #ccc !important;
			}
			/* modify blue glow effect in text box */
			.form-control:focus {
		        border-color: #ff80ff;
		        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);
		    }
    </style>
    <body class="text-center">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container h-100">
					<div class="row align-items-center h-100">
				        <div class="col-6 mx-auto">
				            <div class="jumbotron">
				               <form method="post" action=""  class="" role="form" align="center">
								    <img class="mb-4" src="<?php echo base_url('img/Angular_logo.png');?>" alt="" width="90" height="90">
								    <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
								    <div class="form-group">				    	
								    		<label for="inputEmail" class="sr-only">Email address</label>
								    		<input type="email" id="inputEmail"  name="inputEmail" class="form-control" placeholder="Email address" required autofocus autocomplete="off" data-toggle="tooltip" data-placement="right" title="Email address">
								    </div>
								    <div class="form-group">
								    	<label for="inputPassword" class="sr-only">Password</label>
								    	<input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required data-toggle="tooltip" data-placement="right" title="Password">
								    </div>
								    <div class="checkbox mb-3">
								        <label>
								            <input type="checkbox" name="remember" id="remember" value="remember-me"> Remember me
								        </label>
								    </div>
								    <input type="hidden" name="hid_function" id="hid_function" value="TEST">
								    <button class="btn btn-lg btn-primary btn-block" name="btn_signin" value="Sign In" type="submit">Sign in</button>
								    <center> OR </center>
								     <button class="btn btn-lg btn-block bg-danger" type="button" style="color:#fff" onclick="redirect('register');">Register</button>
								    <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
								</form>
				            </div>
				        </div>
   					 </div>
			</div>
			<span></span>
        </div>
     
 		
        <script src="<?php echo base_url('js/jquery-3.4.1.min.js');?>"></script>
               
        <script src="<?php echo base_url('js/popper.js');?>"></script>  
        
        <script src="<?php echo base_url('js/jquery-ui.min.js');?>"></script> 
        <script type="text/javascript">
		// Change JQueryUI plugin names to fix name collision with Bootstrap:
		$.widget.bridge('uitooltip', $.ui.tooltip);
		$.widget.bridge('uibutton', $.ui.button);
		</script>
		<script src="<?php echo base_url('js/bootstrap4.3.1.min.js');?>"></script>        
        <script src="<?php echo base_url('js/datatables.min.js');?>"></script>    
        <script src="<?php echo base_url('js/select2.min.js');?>"></script>
        <script src="<?php echo base_url('js/jqueryconfirm.js');?>"></script> 
      
        <script>
        	
        	$(document).ready(function(){        		
			  $('[data-toggle="tooltip"]').tooltip();
			});
           function redirect(page)
           {
           	window.location=page;
           }
        </script>
        
    </body>
</html>