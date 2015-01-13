
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>jQuery CurvedText</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.throttle.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.typorize.js"></script>
<script language="javascript" type="text/javascript" src="js/jquery.curvedtext.js"></script>
<script language="javascript" type="text/javascript" src="js/demo.js"></script>
</head>

<body>
<div id="about">
<h1>CurvedText</h1>
<div class="jquery-script-clear"></div>
</div>
<form action="index.php" method="post">
    <input type="text" class="tex" name="text8">
    <input type="submit" name="submit" id="" value="submit">
</form>
<br>
<div>
	<img src="tshirt.png" alt="" width="300px">
</div>
<!--<div id="text1"> Hm, looks like the wonderful arctext plugin. </div>-->
<!--<div id="text2"> And this looks like the amazing circletype plugin! </div>
<div id="text3"> But, what the heck is that? Well, that's a bezier curve! </div>
<div id="text4"> Not impressed yet? Alright, so let's go crazy and align some text on a spiral. But there is a lot more to discover: animations, transformations, customized letters, ...! </div>
<div id="text5"> CurvedText will align text on any curve. Use this plugin to spice up your web typography! </div>-->
<!--<script>
$(document).ready(function() {
    $('.tex').keyup(function(){

        var myval = $(this).val();  
        var dataString = 'myval='+ myval;  
       //alert (dataString);return false;  
       $.ajax({  
           type: "POST",  
           url: "sample.php",  
           data: dataString,  
           success: function(data) {  
               $('.aaaa').html(data)
           }  
       });  
      return false; 
        });
});

</script>

<div class="aaaa">-->
    

<?php
        if(isset($_POST))
        {
            $a = $_POST['text8'];
    ?>
            <div id="text12"><?php echo $a;?></div>
    <?php
        } 
    ?>
</body>
</html>