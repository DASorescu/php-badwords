<?php 
$paragraph = "There was something in the sky. What exactly was up there wasn't immediately clear. But there was definitely something in the sky and it was getting bigger and bigger.";

// echo $paragraph;

$badword = $_GET['badword'];
$replaced_paragraph = str_replace($badword,'***',$paragraph);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $paragraph ?></p>
    <h2><?php echo strlen($paragraph) ?></h2>
    <p><?php echo $replaced_paragraph?></p>
</body>
</html>
