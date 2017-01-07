<html>
<head>
<title> Obinna Obike php tip calculator </title>
</head>
<h4> Tip Calculator </h4>
<br>
<br>
<h1> Tip Calculator </h1>
<body>
<form method = "post">
Bill subtotal: $ <input type="text" name="subtotal" value="<?php echo $_POST["subtotal"];?>"><br><br>
Tip percentage: 
<br><br>
<input type="radio" name="tip-percentage" <?php if (isset($_POST["tip-percentage"]) && $_POST["tip-percentage"] ===.10) echo "checked";?> value=.10> 10% <br>

<input type="radio" name="tip-percentage" <?php if (isset($_POST["tip-percentage"]) && $_POST["tip-percentage"] ===.15) echo "checked";?> value=.15> 15% <br>

<input type="radio" name="tip-percentage" <?php if (isset($_POST["tip-percentage"])&& $_POST["tip-percentage"] ===.20) echo "checked";?> value=.20> 20% <br>

<input type="submit" value="Submit"><br><br>
</form>
<?php
$subtotal =  $_POST["subtotal"];
$tip = $_POST["tip-percentage"];
if(is_numeric($subtotal) && isset($tip))
{if($tip == .10)
 {echo "Tip: " .$tip*$subtotal;
  $total = $subtotal + $tip*$subtotal;
  echo "<br><br>Total: " .$total;}
elseif($tip == .15)
 {echo "Tip: " .$tip*$subtotal;
  $total = $subtotal + $tip*$subtotal;
  echo "<br><br>Total: " .$total;}
elseif($tip == .20)
 {echo "Tip: " .$tip*$subtotal;
  $total = $subtotal + $tip*$subtotal;
  echo "<br><br>Total: " .$total;}
}?>
</body>
</html>

