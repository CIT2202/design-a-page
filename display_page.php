<?php
$txt_colour=$_POST['txt_colour'];
$heading_txt=$_POST['heading_txt'];
?>


<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>This is your page</title>
</head>
<style>
body{
    background-color:#153641;
    color:<?php echo $txt_colour; //printing the colour value so it can be used by CSS ?>;
    font-family:Arial, Helvetica, Sans-serif;
}
</style>
<body>

<?php
echo "<h1>{$heading_txt}</h1>";
?>
<p>This is a paragraph</p>
</body>
</html>
