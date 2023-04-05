if(mysqli_num_rows($result)>0)
// 	 {
// 	 	 echo "<table border='1'>
// 	 <tr>
// 	 <th>Id</th>
// 	 <th>Username</th>
// 	 <th>Email</th>
// 	 <th>Password</th>
// 	 </tr>";
​
// 	 while($row=mysqli_fetch_array($result))
// 	 {    
// 	 	echo "<tr><form action=secm.php method=post>";
// 	 	echo "<td><input type=text name=id readonly value='".$row['id']."'></td> ";
// 	 	echo "<td><input type=text name=username value='".$row['uname']."'></td> ";
// 	 	echo "<td><input type=text name=email value='".$row['email']."'></td> ";
// 	 	echo "<td><input type=text name=password value='".$row['passwordd']."'></td> ";
	 	
// 	 	echo "<td><input type=submit value=Update name=update>";
// 	 	echo "<td><input type=submit value=Delete name = delete>";
// 	 	echo "</form></tr>";
// 	 }
// }
// else
// {
// echo "No rows found";
// } 
// echo "</table>";
// }
// if(isset($_POST['update']))
// {
// 	$con = mysqli_connect('localhost','root','','sectionm');  
​
    
//   if(!$con)  
//   {  
//       echo 'not connect to the server';  
//   } 
//  $name = $_POST['username'];
//  $eid = $_POST['id'];
​
//   $sql="UPDATE validname SET uname='$name' WHERE id='$eid'";
//   if(mysqli_query($con,$sql))
//   {
//   	echo "updated";
//   }
// }
​
// if(isset($_POST['delete']))
// {
// 	echo "delete click";
// }