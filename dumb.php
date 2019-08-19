<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
  $msg = chr(mt_rand(65,90)).''.strtolower(substr(md5(mt_rand()), 1, 3)).''.strtoupper(substr(md5(mt_rand()), 1, 3));
}
?>
<html>
<form action="" method="post">
    <input type="submit" value="Generate Random Code" />
</form>
<?php if(isset($msg)){echo $msg;}?>
</html>
