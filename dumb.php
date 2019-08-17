<?php
function randomCode() {
  function randL() {
    $r = rand(1,3);
    return $r;
  }
  function randH() {
    $r = rand(3,5);
    return $r;
  }
  $a = chr(rand(65,90));
  $b = substr(md5(rand()), randL(), randH());
  $c = chr(rand(65,90));
  $d = substr(md5(rand()), randL(), randH());

  $rand = $a.''.$b.''.$c.''.$d;
  return $rand;
}
if($_SERVER['REQUEST_METHOD'] == "POST") {
  $msg = randomCode();
}

?>
<html>
<form action="" method="post">
    <input type="submit" value="Generate Random Code" />
</form>
<?php if(isset($msg)){echo $msg;}?>
</html>
