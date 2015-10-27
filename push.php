 <?php
session_start();


function initiate(){
    echo'
    <div id="mainScreen">
    <form action="index.php" method="post">
        <p>Enter A Unique Identifier:</p>
        <label for="uid">UID:</label>
        <input type="text" name="uid" id="uid" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}

if(isset($_POST['enter'])){
    if($_POST['uid'] != ""){
        $_SESSION['uid'] = stripslashes(htmlspecialchars($_POST['uid']));
    }
    else{
        echo '<span class="error">Please type in a Unique Identifier </span>';
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>HTTP Push</title>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<?php
if(!isset($_SESSION['uid'])){
    initiate();
}
else{
?>

<div id="beatView"><?php
    if(file_exists("beat.html") && filesize("beat.html") > 0){
        $fileHandler = fopen("beat.html", "r");
        $beatContents = fread($fileHandler, filesize("beat.html"));
        fclose($fileHandler);

        echo $beatContents;
    }
    ?>
    </div>
    <form name="message" action="">
        <input name="msg" type="text" id="msg" size="100" />
        <input name="sendMsg" type="submit"  id="sendMsg" value="Send" />
    </form>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    //When user will submit the form
    $("#sendMsg").click(function(){ 
        var clientmsg = $("#msg").val();
        $.post("post.php", {text: clientmsg});              
        $("#msg").attr("value", "");
        return false;
    });

    //Loading the beat file 
    function loadBeat(){        
         var prevHeight = $("#beatView").attr("scrollHeight") - 20;
        $.ajax({
            url: "beat.html",
            cache: false,
            success: function(html){        
                $("#beatView").html(html); //Insert log into beatView file
                var currentHeight = $("#beatView").attr("scrollHeight") - 20;
                if(currentHeight > prevHeight){
                    $("#beatView").animate({ scrollTop: currentHeight }, 'normal'); //Autoscroll 
                }               
            },
        });
    }
    setInterval (loadBeat, 1000);   //Check the beat every second


});
</script>
<?php
}
?>
</body>
</html>