root@test:/var/www/html# cat testscript/testexec.php
<?php
shell_exec("/home/hudsonfoster25/Documents/flaps.py/cmdprmt_servo/centerdown");
header('Location: http://192.168.1.222/testscript/index.html?success=true');
?>
