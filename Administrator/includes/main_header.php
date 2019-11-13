<!DOCTYPE html>
<html lang="en">
<head>        
<title>Bslate Education - Main Header</title>
<style type="text/css">

#sc_label {

    color: #606060;
	font-size:20px;
	font-family:"Comic Sans MS", cursive, sans-serif;
	text-shadow:0px 0px 3px white;
	-webkit-text-shadow:0px 0px 3px white;
	-moz-text-shadow:0px 0px 3px white;
	
    -webkit-animation: mymove 5s infinite; /* Chrome, Safari, Opera */
    animation: mymove 5s infinite;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes mymove {
    from {color: #0066CC;}
    to {color: tomato;}
}

/* Standard syntax */
@keyframes mymove {
   from {color: #0066CC;}
    to {color: tomato;}
}


</style>

</head>
    <body class="pace-done">



<!--  page header   -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    
                    <!--
                    <img src="bslate.png" style="width:200px;height:40px;margin-top:-10px;" alt="">
                    -->
                    
                    <span style="font-size:20px;color:white;">FarmerWatcher</span>
                    </a>
                <ul class="nav navbar-nav visible-xs-block">
                    <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="glyphicon glyphicon-retweet"></i></a></li>
                    <li><a class="sidebar-mobile-main-toggle"><i class="glyphicon glyphicon-align-center"></i></a></li>
                </ul>
				
            </div>

            <div class="navbar-collapse collapse" id="navbar-mobile" style="border:0px solid pink;">
			

                <ul class="nav navbar-nav" style="border:0px solid black;">
                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="glyphicon glyphicon-align-center"></i></a></li>

                    <li class="dropdown">
                         <!--<a href="javascript:void()" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-retweet"></i>
                            <span class="visible-xs-inline-block position-right">Updates</span>
                            <span class="badge bg-warning-400">!</span>
                        </a>
                       <div class="dropdown-menu dropdown-content">
                            <div class="dropdown-content-heading">Updates</div>
                            <ul class="media-list dropdown-content-body width-350">
                                 <li class="media">
                                    <div class="media-left">
                                        <a href="javascript:void()" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                                    </div>
                                    <div class="media-body">
                                    <a href="javascript:void()">Circular</a><br>
                                       dcqwdcwdqdwq 
                                        <div class="media-annotation">2016-Oct-04</div>
                                    </div>
                                </li><li class="media">
                                    <div class="media-left">
                                        <a href="javascript:void()" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="glyphicon glyphicon-screenshot"></i></a>
                                    </div>
                                    <div class="media-body">
                                    <a href="javascript:void()">Occurance</a><br>
                                       e108180105 - ali  
                                        <div class="media-annotation">2016-Oct-29</div>
                                    </div>
                                </li> 
                            </ul>
                        </div>-->
						
                    </li>
					
                </ul>
				<div class="col-sm-6" id="sc_label" style="text-align:center;margin:6px 0px 0px 30px;border:0px solid red;">
				
				<span style="text-align:center;font-size:18px;font-weight:bold;">
				<?php echo("Welcome To Administrator Panel");?>
				</span>
				
				</div>
                <!--<p class="navbar-text"><span class="label bg-success">Online</span></p>-->
                <ul class="nav navbar-nav navbar-right" style="border:0px solid blue;width:250px;">
                    <!--                    <li class="dropdown language-switch">
                                            <a class="dropdown-toggle" data-toggle="dropdown">
                                                <img src="/css/assets/images/flags/gb.png" class="position-left" alt="">
                                                English
                                                <span class="caret"></span>
                                            </a>
                    
                                            <ul class="dropdown-menu">
                                                <li><a class="deutsch"><img src="/css/assets/images/flags/de.png" alt=""> Deutsch</a></li>
                                                <li><a class="ukrainian"><img src="/css/assets/images/flags/ua.png" alt=""> ??????????</a></li>
                                                <li><a class="english"><img src="/css/assets/images/flags/gb.png" alt=""> English</a></li>
                                                <li><a class="espana"><img src="/css/assets/images/flags/es.png" alt=""> Espa�a</a></li>
                                                <li><a class="russian"><img src="/css/assets/images/flags/ru.png" alt=""> ???????</a></li>
                                            </ul>
                                        </li>-->
 
                    <li class="dropdown dropdown-user" style="border:0px solid red;width:200px;text-align:right;">
                                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="./supporting/placeholder.jpg" alt="">
                                <span><?php echo(substr($_SESSION['admin_name'],0,14)); ?></span>
                                <i class="glyphicon glyphicon-menu-down"></i>
                            </a>
                                                <ul class="dropdown-menu">
                                                           <!-- <li><a href="javascript:void()"><i class="glyphicon glyphicon-user"></i>Profile</a></li>
															<li><a href="change_password.php"><i class="glyphicon glyphicon-random"></i>Change Password</a></li>
															
                                                        <li><a href="/index.php/user/profile/changepassword"><i class="icon-lock2"></i>Change Password</a></li>-->
                            <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i>Log Out</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        
		
		<!--  page header stop   -->
		
		


</body></html>