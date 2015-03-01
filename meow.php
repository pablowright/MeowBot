<?php
// Check if action is set
if(isset($_POST["action"]))
{
    switch($_POST["action"])
    {
        case "number_submit" :
            // Submission from the number submit form
            header("Location: ".$_SERVER["PHP_SELF"]."?MEOWS=".$_POST["number"]);
            die();
        default :
            die("Unknown action : ".$_POST["action"]);
            break;
    }
}
?>

<html>
<head>

<meta content="text/html; charset=ISO-8859-1"
http-equiv="content-type">
<title>MEOW!</title>
</head>
<body alink="#000000" link="#000000" vlink="#000000">
<table
style="text-align: left; width: 100%; background-color: black; height: 100%; margin-left: auto; margin-right: auto;"
border="0" cellpadding="3" cellspacing="3">
<tbody>
<tr>
<td style="vertical-align: top; text-align: center;">
<table
style="text-align: left; width: 100%; background-color: #FF8C00; height: 100%; margin-left: auto; margin-right: auto;"
border="0" cellpadding="2" cellspacing="2">
<tbody>
<tr>
<td style="vertical-align: middle; text-align: center;"><big><big><big><big><br>
<br>
<span style="font-family: Helvetica,Arial,sans-serif;">


    <?php
    if(isset($_GET["MEOWS"]))
    {
        // Display the number if it is set.
       $num = $_GET["MEOWS"]; 
        switch ($num) {
        
    case "1":
       $string1 = "meow meow?";
       $num ="2";
       break;
    case "2":
       $string1 = "meow meow meow?";
       $num ="3";
       break;
    case "3":
       $string1 = "meow meow meow meow!";
       $num ="4";
       break;
    case "4":
      $string1 = "meow meow meow meow meow.";
      $num ="5";
      break;
    case "5":
      $string1 = "meow meow meow meow meow meow?";
      $num ="6";	
      break;
    case "6":
      $string1 = "meow meow meow meow meow meow meow?!";
      $num ="7";	
      break;
    case "7":
      $string1 = "meow! meow! meow! meow! meow! meow! meow! meow!";
      $num ="8";	
      break;
    case "8":
      $string1 = "&iquest;meow?";
      $num ="9";	
      break;
    case "9":
      $string1 = "meow meow meow meow meow meow meow meow meow.....";
      $num ="10";	
      break;
    case "10":
      $string1 = "miaou";
      $num = "11";
      break;
    case "11":
      $string1 = "miauler";
      $num = "12";
      break;
    case "12":
      $string1 = "mjau";
      $num = "13";
      break;
    case "13":
      $string1 = "n’yao";
      $num = "14";
      break;
    case "14":
      $string1 = "meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meeeeeoooooow";
      $num = "15";
      break;
    case "15":
      $string1 = "meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow?";
      $num = "16";
      break;
    case "16":
      $string1 = "&iexcl;meow!";
      $num = "17";
      break;
    case "17":
      $string1 = "m&eacute;ow";
      $num = "18";
      break;
    case "18":
      $string1 = "#meow";
      $num = "19";
      break;
    case "19":
      $string1 = "@meow";
      $num = "20";
      break;
    case "20":
      $string1 = "meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow meow?";
      $num = "21";
      break;
    default:
        // exit("No more meows. Kitty has left the building.");
       $string1 =  "No more meows. Kitty has left the building.";
        }
 
    $string2 = "http://anti-robot.org";
    // echo "$string1"." "."$string2";  
    $string3 = "$string1"." "."$string2";
    // echo "$string3";         
?>

        <center> <?php echo "$string1"; ?><br /></center>
        
</span></big></big></big></big><br
style="font-family: Helvetica,Arial,sans-serif;">
<big><big><big><big><big><big><span
style="font-family: Helvetica,Arial,sans-serif;"></span><br
style="font-family: Helvetica,Arial,sans-serif;">
<small style="font-family: Helvetica,Arial,sans-serif;"><small><small>
 
        <?php
 //   } else {
        // Display the form
        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]."?MEOWS=$num" ?>" method="post">
        
        
        <input type="submit" name="$num" value="MEOW?" />
        </form>
        <?php
        
        } else {
        ?>
        <P>
        meow?
        <form action="<?php echo $_SERVER["PHP_SELF"]."?MEOWS=1" ?>" method="post">
        
        
        <input type="submit" name="$num" value="MEOW?" />
        </form>
        <?php
             
    }
    ?>
    
</small></small></small><br>
</big></big></big></big></big></big><br><P>
<table
style="text-align: left; width: 100%; background-color: #FF8C00; height: 30px;"
border="0" cellpadding="3" cellspacing="2">
<tbody>
<tr>
<td
style="vertical-align: bottom; font-family: Helvetica,Arial,sans-serif;"><a
href="http://www.anti-robot.org"><img style="width: 29px; height: 20px;" src="/images/black-flg-1-28px.png" alt="" align="top" hspace="5" vspace="0"></a><small>
</small></td>
<td
style="vertical-align: bottom; font-family: Helvetica,Arial,sans-serif; text-align: right;"><small><a
href="http://www.anti-robot.org" style="text-decoration: none;">www.anti-robot.org. No rights reserved.</a></small></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>


</html>
