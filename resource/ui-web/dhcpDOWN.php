<?php require_once('auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
$data = json_decode(file_get_contents('/usr/local/bin/0conf'), true);
$data['address']['oh'] = "";
$newJsonString = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('/usr/local/bin/0conf', $newJsonString);

exec('sudo pihole -a disabledhcp');
?>
<?php }?>