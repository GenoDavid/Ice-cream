<?php 
if(!isset($_POST['submit']))
$username =$_POST['username'];
$password =$_POST['password'];
$con=mySqli_connect("localhost:3306","root","","form");
$sql="select * from form_table Where username='$username' AND password='$password'"
$result=mySqli_query($con,$sql);
$checkresult=mySqli_num_rows($result);
if ($checkresult>0) {
    echo "login successfully"
}
else{
    echo "not added data"
}
?/