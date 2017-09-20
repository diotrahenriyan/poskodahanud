<?php
$m = new MongoClient("mongodb://arhanud:Z6pQmv@167.205.7.226:27017/poskodahanud");
$db = $m->poskodarhanud;

  if($db==false){
  print "Gagal Koneksi"."<br>";
} else {
  print "gagal";
}
 ?>
