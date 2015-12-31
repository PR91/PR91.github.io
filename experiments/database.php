<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <?php
   $link = mysql_connect('localhost', 'root', 'raspberry');
   if (!$link) {
       die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   mysql_close($link);
   ?> </body>
</html>
