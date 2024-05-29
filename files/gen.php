<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $r = $_POST['termed'];
    if(!is_dir($r)){
    mkdir("../$r");
    } else {
	die('Directory is taken! Choose another one.');
    }
    $webhook = $_POST['webhook'];
$site = file_get_contents("site.php");
$myfile = fopen("../$r/index.php", "w");
fwrite($myfile, '<?php $hook = "'.$webhook.'"; ?>'.$site);
header("location: ../$r");
}
?>