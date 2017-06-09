<?php
$title=$_POST['title'];

$content=$_POST['content'];
echo'<p>title:'.$title.'</p>';
echo'<p>content:'.$content.'</p>';
// creer un dossier post pour mettre les fchiers qu ont a crier
if(!is_dir('post')){
mkdir('post');
}
//creer un fichier
//ouvrir un fichier
$file = fopen('post/'.$title . '.txt','w');
//ecrir dans le fichier
fwrite($file,$content);
//fermer le fichier
fclose($file);
echo'you have create your first post';


?>