<?php
  $link = mysql_connect('192.168.70.51','mysql','');
  if ($link)
    echo "Success...";
  else
    echo "Failure...";
  mysql_close();
  phpinfo();
?>
