        
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
        <link rel="stylesheet" href="<?php echo base_url('css/el-checkbox.css');?>">
    </head>
     <body class="text-center">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
              <a class="navbar-brand" href="#">Fixed navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="logout()">Logout</button> -->
                  <a class="btn btn-outline-success my-2 my-sm-0" href="<?= base_url();?>dashboard/logout">Logout</a>
                </form>
              </div>
        </nav>
        <div class="container">
                
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
                $(function(){

                        function logout()
                        {

                        }
                });
        </script>
    </body>
</html>