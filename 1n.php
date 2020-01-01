
<html>
<head>

<h1 align="center">INVOICE</H1>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script>
$(document).ready(function(e){
	var html='<p /><div>SLNO:<input type="text" name="slno"   id="childslno" required>NAME:<input type="text" name="name"   id="childname" required>QUANTITY:<input type="text" name="quantity"  id="childquantity" required>PRICE:<input type="text" name="price" id="childprice" required> <a href="#" id="remove">x</a> </div>';
	var maxrows=2;
	var x=1;
	$("#add").click(function(e){
		if(x<=maxrows){

		$("#container").append(html);
		x++;
		}
	});
	$("#container").on('click','#remove',function(e){

		$(this).parent('div').remove();
		x--;
	});

});
</script>
<STYLE>
body
{
	background-color:;
}



</STYLE>
</head>
<body>
<form action="n.php" method="post">
<link rel="stylesheet" type="text/css" href="elements.css" >
<div class="check">
From,<br> 
Areksoft Technologies,<br>
1st Floor, Phoenix Building, Uppal,<br>
Hyderabad, Telangana, India.<br>
Phone:+91 9398 9494 51<br>
Email:info@areksoft.com
</address><br>
<br>
<BR>
<BR>
<BR>
<BR>

<h5>To:</h5>
Customer_Name: <input type="text" name="sname" ><br>
Customer_Address:<input type="text" name="address" ><br>
Customer_Phone:<input type="text" name="phone"><br>
Customer_Email:<input type="text" name="email"><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
<div style="width: 500px; float:right; height:250px; background:#fff; margin:30px;margin-top:-425px;" class="container">
<?php
//$date=date("y/m/d");
//$duedate=strftime("%Y-%m-%d", strtotime("$date +7 day"));
$dt=date("Y/m/d");
$date=date( "Y-m-d", strtotime( "$dt +7 day" ) );
   session_start();  
  
   if (!isset($_SESSION['counter'])) {  
      $_SESSION['counter'] = 1;  
   } else {  
      $_SESSION['counter']++;  
   }  
 //  echo ("Page Views: ".$_SESSION['counter']);  
?>  


INVOICENUM:<input type="text" name="invoicenum" value="<?php echo $_SESSION['counter']; ?>"><br>
ORDERID:<input type="text" name="orderid"value="<?php echo $_SESSION['counter']; ?>"><br>
DATE:<input type="date" name="date" value="<?php echo date("y/m/d");?>"><br>
BALANCE:<input type="text" name="balance"><br>
PAID:<input type="text" name="paid"><br>
DUEDATE:<input type="date" name="duedate" value="<?php  echo $date;?>"><br>
</div>
<div id="container" >
SLNO:<input type="text" name="slno"  class="slno"  id="slno" required value="<?php echo $_SESSION['counter']; ?>">
NAME:<input type="text" name="name"   id="name" class="name" required>
QUANTITY:<input type="text" name="quantity"  id="quantity"  class="quantity" required>
PRICE:<input type="text" name="price" id="price" class="price"  required>
		</div>
			<input type="submit"  id ="submit" value="SUBMIT"><a href="#" id="add">ADD</a> 
</form>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"> 
    </script> 
    <script src=  "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> 
    </script> 
</body>
</html>
