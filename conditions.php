<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>conditions</title>

</head>
<body>
    <?php
    $name = "venkat";
    $read = false;
    if($read){
        $message = "you are  $name";
    }
    else{
        $message = "you have  not  $name";
    }

    ?>
    <?php
    echo " $message";
     ?>
</body>
</html>