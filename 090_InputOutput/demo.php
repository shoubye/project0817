<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style >
        .fail{color : red}
    </style>

</head>
<body>

<?php
    $scorelisr = array(100 , 98 , 50 , 95 , 45 , 59 , 23);
?>

    
        <ul>
            <?php foreach( $scorelisr as $score) { ?>
             
                <?php if($score >= 60){?>  
                    <!-- 可把 [ php echo $score ]換成 [ = $score ]-->
                    <li><?php echo $score; ?></li>

                <?php } else {?>  
                    <li class = "fail"><?php echo $score; ?></li>
                <?php }?>

            <?php }?>
        </ul>

</body>
</html>