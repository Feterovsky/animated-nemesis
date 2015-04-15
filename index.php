<!DOCTYPE html>
<html>

<head>
<style>
  body {background-color:lightgrey}
  h1   {color:blue}
  p    {color:#001452}
  h2    {color:#FF3300}
  a:link    {color:#000000; background-color:transparent; text-decoration:none}
a:visited {color:#yellow; background-color:transparent; text-decoration:none}
a:hover   {color:#ff0000; background-color:transparent; text-decoration:underline}
a:active  {color:#ff0000; background-color:transparent; text-decoration:underline}
</style>
</head>

<body>
<h1>This is a heading</h1>
<h2>This is a <br>custom <br>heading</h1>
<p>This is a paragraph.</p>


<?php // update.php
  $fh   = fopen("testfile.txt", 'r+') or die("Failed to open file");
  $text = fgets($fh);

  fseek($fh, 0, SEEK_END);
  fwrite($fh, "$text") or die("Could not write to file");
  fclose($fh);

  echo "File 'testfile.txt' successfully updated";
?>



















</br> 



<a>Enter call duration</a><input type="text" id="callduration"></input> 
<button onclick="document.getElementById('result').value = document.getElementById('callduration').value*10+50" >Calculate Bill</button>
<br> <a>Result</a><input type="text" id="result" readonly="yes"></input>

</body>

</html>