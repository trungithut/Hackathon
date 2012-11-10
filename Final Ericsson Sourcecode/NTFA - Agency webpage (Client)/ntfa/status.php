


<html>
<body>

<form action="insert.php" method="post">
Agenttname:<input type="text" name="AgentName" />
Categoryname: <input type="text" name="CategoryName" />
Product name: <input type="text" name="ProductName" />
Quantity: <input type="text" name="Quantity" />
<input type="submit" />
</form>







<!-- Smart Cart Files Include -->
<link href="styles/smart_cart.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.smartCart-2.0.js"></script>
<script type="text/javascript">
   
    $(document).ready(function(){
    	// Call Smart Cart    	
  		$('#SmartCart').smartCart();
		});
</script>

<form action="insert.php" method="post">
<!-- Smart Cart HTML Starts -->
  <div id="SmartCart" style="height:1200px;" class="scMain">
    <input type="hidden" pimage="products/1.jpg" pprice="2000lb" pdesc="" pcategory="Grain" pname="Rice" pid="">
	<input type="hidden" pimage="products/2.jpg" pprice="5000lb" pdesc="" pcategory="Grain" pname="spaghetti" pid="">
	<input type="hidden" pimage="products/3.jpg" pprice="6000lb" pdesc="" pcategory="Protein" pname="Ground beef" pid="">
	<input type="hidden" pimage="products/4.jpg" pprice="8000lb" pdesc="" pcategory="Protein" pname="Pinto Beans" pid="">
	<input type="hidden" pimage="products/5.jpg" pprice="4000lb" pdesc="" pcategory="Canned Vegs" pname="Green Beans" pid="">
	<input type="hidden" pimage="products/6.jpg" pprice="3000lb" pdesc="" pcategory="Canned Vegs" pname="Corn" pid="">
  </div>
<!-- Smart Cart HTML Ends -->
</form>

</body>
</html>
