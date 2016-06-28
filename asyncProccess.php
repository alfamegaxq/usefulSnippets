<?php
exec("php /path/to/myScript.php arg1 arg2  > /dev/null 2>/dev/null &");
/*
  Script is launched in child proccess. Current proccess won't wait
  for child to execute and return result.
  Arguments in myScript.php are accessed simply by $argv
  $argv[0] => /path/to/myScript.php
  $argv[1] => arg1
  $argv[2] => arg2
*/
