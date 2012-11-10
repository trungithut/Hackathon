<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>North Texas Food Bank</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]--> 
</head>
<body class="gradient">
<div id="wrapper">
  <div id="top_header"><img src="images/name.png" alt="North Texas Food Bank"> </div>
  <div id="top_menu" class="gradient">
<ul>
                            <li><a id="home_link" href="/?page=home" >Home</a></li>
                            <li><a id="status_link" href="/?page=status">Request</a></li>
                            <li><a id="video_link" href="/?page=videocall">Video Call</a></li>
                        </ul>
  </div>
  <div id="main" class="gradient">
    <div id="content">
<?php  
	  	$page = (!empty($_GET['page']) ? $_GET['page'] : null); 
			if ($page==null || $page=="home")
				include "home.php";
			else
				include $page.".php";
		?>
	</div>
  </div>
</div>
<div id="footer"> <span> © 2012 Developed by UT Dallas </span> </div>
</body>
</html>
