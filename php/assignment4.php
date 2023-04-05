<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style >
        td {
            border: 5px solid rgb(137, 237, 44 );
            background-color: rgb(53, 224, 209);
            color: rgba(237, 88, 44 );
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Enter a string for MD5:</td>
                </label>
                <td><input type="text" name="string"></td>
                <td><input type="submit" name="md5" value="md5"></td>
            </tr>
            <tr>
                <td>enter a number for Number Format :</td>
                <td><input type="number" name="number"></td>
                <td><input type="submit" name="Number_format" value="Number_format"></td>
            </tr>
            <tr>
                <td>enter string for str_replace:</td>
                <td><input type="text" name="remove_string" ></td>
                <td><input type="submit" name="Str_replace" value="Str_replace" id=""></td>
            </tr>
            <tr>
                <td>add string </td>
                <td><input type="text" name="add_string" ></td>
                <td><input type="submit" name="Rtrim" value="Rtrim" id=""></td>
            </tr>
            <tr>
                <td>enter a string compare with for strcasecmp:</td>
                <td><input type="text" name="compare_string" ></td>
                <td><input type="submit" name="Strcasecmp" value="Strcasecmp" id=""></td>
            </tr>
            <tr>
                <td>enter a substring for strcasecmp:</td>
                <td><input type="text" name="substring" ></td>
                <td><input type="submit" name="Strcasecmp" value="Strcasecmp" id=""></td>
            </tr>
            <tr>
                <td>enter index value for Substr</td>
                <td><input type="number" name="substr"></td>
                <td><input type="submit" name="Substr" value="Substr" id=""></td>
            </tr>
            <tr>
                <td>enter a string to chop for chop_string:</td>
                <td><input type="text" name="chop_string"></td>
                <td><input type="submit" name="Chop" value="Chop" id=""></td>
            </tr>
            <tr>
                <td>enter string to convert in hexadecimal:</td>
                <td><input type="text" name="bin2hex"></td>
                <td><input type="submit" name="bin2Hex" value="bin2Hex"></td>
            </tr>
            <tr>
                <td>enter a number for string inside another string:</td>
                <td><input type="text" name="strpos"></td>
                <td><input type="submit" name="strpos" value="strpos" id="">
            </tr>
            <tr>
                <td>enter a number to convert ascii value of the 1st char:</td>
                <td><input type="text" name="ord"></td>
                <td><input type="submit" name="ord" value="ord" id=""></td>
            </tr>
            <tr>
                <td>for length of string:</td>
                <td><input type="text" name="str_len"></td>
                <td><input type="submit" name="str_len" value="str_len" id=""></td>
            </tr>
            <tr>
                <td>change string to lower case:</td>
                <td><input type="text" name="strtolower"></td>
                <td><input type="submit" name="strtolower" value="strtolower" id=""></td>
            </tr>
        </table>
        </tr>
        </table>
    </form>
</body>

</html>

<?php

$string = $_POST['string'];
$number = $_POST['number'];
$remove_string = $_POST['remove_string'];
$add_string = $_POST['add_string'];
$compare_string = $_POST['compare_string'];
$substing = $_POST['substring'];
$substr = $_POST['substr'];
$chop_string = $_POST['chop_string'];
$strtolower =$_POST['strtolower'];
$bin2hex=$_POST['bin2hex'];
$strpos=$_POST['strpos'];
$str_len=$_POST['str_len'];

if(isset($_POST['Md5'])){
    echo md5($string);
}
if(isset($_POST['Number_format'])){
    echo number_format($number);
}
if(isset($_POST['ord'])){
    echo ord($string);
}
if(isset($_POST['Rtrim'])){
    echo rtrim($string);
}
if(isset($_POST['str_replace'])){
    echo str_replace($remove_string,$add_string,$string);
}
if(isset($_POST['str_len'])){
    echo strlen($string);
}
if(isset($_POST['strcasecmp'])){
    echo strcasecmp($string,$compare_string);
}
if(isset($_POST['strpos'])){
    echo strpos($string,$substing);
}
if(isset($_POST['substr'])){
    echo substr($string,$substr);
}
if(isset($_POST['strtolower'])){
    echo strtolower($string);
}
if(isset($_POST['Bin2Hex'])){
    echo bin2hex($string);
}
if(isset($_POST['Chop'])){
    echo chop($string,$chop_string);
}

?>

