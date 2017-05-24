<?php
$halaman = $_GET['p'];
if ($halaman == "utama") {
  include("index.php");
} else if ($halaman == "tentang") {
  include("tentang.php");
} else if ($halaman == "detail") {
  include("detail.php");
} else if ($halaman == "callforpaper") {
  include("callforpaper.php");
} else if ($halaman == "pendaftaran") {
  include("pendaftaran.php");
} else if ($halaman == "paralelsession") {
  include("paralelsession.php");
} else if ($halaman == "") {
  include("index.php")
}
?>
