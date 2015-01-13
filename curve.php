<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="jquery.throttle.js"></script>
<script language="javascript" type="text/javascript" src="jquery.typorize.js"></script>
<script language="javascript" type="text/javascript" src="jquery.curvedtext.js"></script>
<script language="javascript" type="text/javascript" src="demo.js"></script>
</head>
<body>
    <?php
        if(isset($_POST))
        {
            $a = $_POST['text8'];
            echo $a;
    ?>
            <div id="text1"><?php echo $a;?></div>
    <?php
        } 
    ?>
</body>
</html>