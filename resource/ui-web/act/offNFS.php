<?php require_once('../auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
$NFSpoint = $_GET['NFSpoint'];
putenv("NFSpoint=$NFSpoint");
shell_exec('sudo /opt/de_GWD/ui-offNFS $NFSpoint');
?>
<?php }?>