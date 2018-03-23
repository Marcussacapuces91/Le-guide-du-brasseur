<?php


$tmpfname = tempnam(".", "ZIP");
$tf = fopen($tmpfname, "w+b");
fwrite($tf, file_get_contents('https://github.com/Marcussacapuces91/Le-guide-du-brasseur-Pico-CMS/archive/master.zip'));
fclose($tf);

$z = zip_open($tmpfname);
if (!is_resource($z)) die("Erreur $z");

echo "<pre>";
while (($f = zip_read($z)) !== FALSE) {
  $size = zip_entry_filesize($f);
  if ($size > 0) {  // sinon ce sont des répertoires
   
    $name = str_replace ('Le-guide-du-brasseur-Pico-CMS-master', '.' , zip_entry_name($f));
    echo $name."\n";  
    
    $lf = fopen($name, "wb");
    if ($lf === FALSE) die('Erreur d\'ouverture');
    fwrite($lf, zip_entry_read($f, $size)) or die('Erreur d\'écriture');
    fclose($lf); 
  
  }
}
echo "</pre>";

unlink($tmpfname);
?>