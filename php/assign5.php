<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Game</title>
</head>
<body>
    <form action="" method="POST">
            <label>Guess the number between 1-100:</label>
            <input type="number" value="num" name="number">
            <input type="submit" value="click" name="click1">
    </form>
    <?php
   
    $num1=rand(1,100);
    
   
    if(isset($_POST['click1']))
    {
        $entredvalue=$_POST['number'];

        if($entredvalue==$num1)
        {
            echo "Guess is correct";
        }
        else if($entredvalue<$num1)
        {
            echo "Guess is lower";
        }
        else if($entredvalue>$num1)
        {
            echo "Guess is higher";
        }
    }

    
    ?>
</body>
</html>
