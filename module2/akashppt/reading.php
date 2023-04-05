<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Read Records</title>
</head>
<body>
<br>
<?php
   include_once 'configuration.php';
   $query = "SELECT * FROM student";
   $data = mysqli_query($conn,$query);
   $totRec = mysqli_num_rows($data);
   // echo "<pre>";
   // var_dump($data);
   // echo "</pre>";

   if($totRec!=0)
   {
   ?>
   
   <table>
    <tr>
     <th>RollNo.</th>
     <th>Name</th>
     <th>Class</th>
     <th colspan="2">Operations</th>
    </tr>
<?php
  while($result = mysqli_fetch_assoc($data))
  {
  echo "<tr>
<td>".$result['rollno']."</td>
<td>".$result['name']."</td>
<td>".$result['class']."</td>

<td><a href='upadtedata.php?rn=$result[rollno]&nm=$result[name]&cl=$result[class]'>Edit</a> |
<a href='delete.php?rn=$result[rollno]' onclick = 'return DeleteRecord()'>Delete</a></td>
</tr>";
}
}
else
{
echo "No Records found";
}
?>
</table>
<a href="http://localhost:8080/Learnphp/module2/akashppt/forminsertion.php">+ Add More Records</a>
<script>
function DeleteRecord()
{
return confirm("Do u want to delete");
}
</script>
</body>
</html>