<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>North Texas Food Bank</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script> 
    </head>

    <body>
        <div class="wrapper">
            <div class="header"><div class="header_l"><div class="header_r"><ul>
                            <li><a id="home_link" href="/ntfb/?page=home" >Home</a></li>
                            <li><a id="status_link" href="/ntfb/?page=status">Status</a></li>
                            <li><a id="inventory_link" href="/ntfb/?page=forecast">Forecast</a></li>
                            <li><a id="transaction_link" href="/ntfb/?page=transaction">Transaction</a></li>
                            <li><a id="video_link" href="/ntfb/?page=callAgency">Video Call</a></li>
                        </ul></div></div></div>
						<div class="middle">
			      <?php  
	  	$page = (!empty($_GET['page']) ? $_GET['page'] : null); 
			if ($page==null || $page=="home")
				include "home.php";
			else
				include $page.".php";
		?></div>
        <div class="footer">Developed by <a href="#">The University of Texas at Dallas</a></div>
    </body>
</html>