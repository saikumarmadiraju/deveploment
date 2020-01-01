<html>
	<div style="width: 700px; float:left; height:500px; background:#E6E6FA; margin-MIDDLE:10px" class="container">
	<form method="post" action="pn.php">
  <input type="text" name="id" placeholder="enter the slno" />
  <input type="submit" name="search" value="search"/>
  </form>
<?php
$invoicenum=$_POST['invoicenum'];
$orderid=$_POST['orderid'];
$date=$_POST['date'];
$paid=$_POST['paid'];
$duedate=strftime("%Y-%m-%d", strtotime("$date +7 day"));
$sname=$_POST['sname'];
$caddress=$_POST['address'];
$cphone=$_POST['phone'];
$cemail=$_POST['email'];
$price=$_POST['price'];
$quantity=$_POST['quantity'];
$total=$price*$quantity;
$gst=($total*3)/100;
$subtotal=$gst+$total;
$discount=(10/100)*$subtotal;
$totalamount=$subtotal-$discount;
$balance=$totalamount-$paid;
$slno=$_POST['slno'];
$name=$_POST['name'];
$conn = mysqli_connect("localhost","root","","sai");  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
echo 'Connected successfully';  
echo '<br/>';
/*$sql = 'CREATE Database mydb';  
if(mysqli_query( $conn,$sql)){  
  echo "Database mydb created successfully.";  
}else{  
echo "Sorry, database creation failed ".mysqli_error($conn);  
}*/
/*$sql="create table myvoice(invoicenum int not null auto_increment  primary key,orderid int not null ,dates date,balance int,paid int,duedate date,cname varchar(20),caddress varchar(20),cphone int,cemail varchar(20),slno int,name varchar(20),quantity int,price int,total int,gst int,subtotal int,discount int,totalamount int";
if(mysqli_query( $conn,$sql)){  
  echo "table  created successfully.";  
}else{  
echo "Sorry, creation failed ".mysqli_error($conn);  
}*/
$sql="insert into myvoice(invoicenum,orderid,dates,balance,paid,duedate,cname,caddress,cphone,cemail,slno,name,quantity,price,total,gst,subtotal,discount,totalamount)values($invoicenum,$orderid,$date,$balance,$paid,$duedate,'".$sname."','".$caddress."',$cphone,'".$cemail."',$slno,'".$name."',$quantity,$price,$total,$gst,$subtotal,$discount,$totalamount)";

if(mysqli_query($conn, $sql)){  
 echo "inserted  successfully";  
 echo "<br/>";
}else{  
echo "Could not inserted into the  table: ". mysqli_error($conn);  
}
$retval = mysqli_query(  $conn,"select * from myvoice" );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   while($row = mysqli_fetch_array($retval)) {
      echo "invoicenum:{$row['invoicenum']}  <br> ".
		


         "--------------------------------<br>";
   }


mysqli_close($conn);

?>