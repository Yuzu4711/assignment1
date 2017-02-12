<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>{pagetitle}</title>
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/js/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img style='margin-top:-20px' src='/assets/img/team_logo.png' width='150' height='70' /></a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/Gundam.jpg" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a class="active-menu"  href="/"><i class="fa fa-dashboard fa-3x"></i> Homepage </a>
                    </li>
                      <li>
                        <!--Parts Page-->
                        <a  href="/Inventory"><i class="fa fa-desktop fa-3x"></i> Parts </a>
                    </li>
                    <li>
                        <a  href="/Assembly"><i class="fa fa-qrcode fa-3x"></i> Assembly </a>
                    </li>
                           <li  >
                        <a  href="/History"><i class="fa fa-bar-chart-o fa-3x"></i> History </a>
                    </li>           
                                       
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> About<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/About">Yuzu</a>
                            </li>
                            <li>
                                <a href="/About">Daniel</a>
                            </li>
                            <li>
                                <a href="/About">Jonathan</a>        
                            </li>
                            <li>
                                <a href="/About">Carson</a>        
                            </li>
                            <li>
                                <a href="/About">Kevin</a>        
                            </li>
                        </ul>
                      </li>   
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <div id="container">

                            {content}

                        </div>            
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
                </div>
                <div class='panel-footer text-center'> 
                    © 2017 Yuzu (Daniel Tian, Jonathan Huang, Kevin Mitchell, Carson Yamamoto) 
                        <img src='/assets/img/team_logo.png' width='70' height='35' />
                </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CHARTS SCRIPTS-->
    <script src="assets/js/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
