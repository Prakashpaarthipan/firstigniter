<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Register</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png"> -->
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap4.3.1.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/datatablesBS4.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/select2.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/jqueryconfirm.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome/css/font-awesome.min.css');?>">
       
    </head>
    <style>
    	body,html {
			  height: 100%;
			}
    </style>
    <body class="text-center">
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container h-100">
					<div class="row align-items-center h-100">
                        <div class="col-md-8 mx-auto">                            
                       <img class="mb-4" src="<?php echo base_url('img/Angular_logo.png');?>" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
				        <form method="post" action=""  class="" role="form" align="center">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-left">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control text-left" id="inputEmail3" placeholder="Email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label  text-left ">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control text-left" id="inputPassword3" placeholder="Password">
                            </div>
                          </div>
                          <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0 text-left">Radios</legend>
                              <div class="col-sm-10 text-left">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                  <label class="form-check-label" for="gridRadios1">
                                    First radio
                                  </label>
                                </div>
                                <div class="form-check text-left">
                                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
                                    Second radio
                                  </label>
                                </div>
                               
                              </div>
                            </div>
                          </fieldset>
                         
                          <div class="form-group row ">
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Register</button>
                            </div>
                          </div>
                        </form>
                    </div>
   					 </div>
			</div>
        </div>
     
 
        <script src="<?php echo base_url('js/jquery-3.4.1.min.js');?>"></script> 
        <script src="<?php echo base_url('js/jquery-ui.min.js');?>"></script>  
        <script src="<?php echo base_url('js/bootstrap4.3.1.min.js');?>"></script> 
        <script src="<?php echo base_url('js/popper.min.js');?>"></script>
         <script src="<?php echo base_url('js/datatablesBS4.min.js');?>"></script>  
        <script src="<?php echo base_url('js/select2.min.js');?>"></script>
        <script src="<?php echo base_url('js/jqueryconfirm.js');?>"></script>        

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>