<?php
session_start();
if(isset($_SESSION['username']))
{

echo "
    <table>
        <tr>
            <td><a href=''>profile</a></td>
            <td><a href=''>database</a></td>
            <td><a href=''>about</a></td>
            <td><a href=''>information</a></td>
        </tr>
    </table>";
 
}
else
{
    echo "login again";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    
</body>
</html>