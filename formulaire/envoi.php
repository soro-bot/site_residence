<?php

$nom=$_POST['nom'];

    $prenom=$_POST['prenom'];

    $telephone=$_POST['phone'];

    $email=$_POST['email'];

    $codeLocation=$_POST['code-location'];

    $dateDebut=$_POST['date-debut'];

    $dateFin=$_POST['date-fin'];

    $typeSejour=$_POST['type-sejour'];

    $origine=$_POST['origine'];

    $servicePlus=$_POST['service-plus'];

    $message_visiter=$_POST['message']; 

    $service="";
    foreach ($servicePlus as $value) {

      $service.=$value." "." ";

    }

    $maxsize=2000000;

    $validExt=array('.jpg','.jpeg','.png');

    if ($_FILES['mon_fichier']['error']>0) {

      echo "une erreur est survenue";

      die;

    }

    $filesize=$_FILES['mon_fichier']['size'];

    if ($filesize>$maxsize) {

      echo "Fichier trop gros";

      die;

    }

    $fileName=$_FILES['mon_fichier']['name'];

    $fileExt=".".strtolower(substr(strrchr($fileName, '.'),1));

    if (!in_array($fileExt, $validExt)) {

      echo "Le fichier n'est pas une image...";

      die;

    }

    $tmpNmame=$_FILES['mon_fichier']['tmp_name'];

    $uniqueName=md5(uniqid(rand(),true));

    $fileName="img/photo.jpg";

    $resultat=move_uploaded_file($tmpNmame, $fileName);

// To
$to = 'gondoitcoder@gmail.com';
 
// Subject
$subject = 'LOCATION DE RESIDENCE';
 
// clé aléatoire de limite
$boundary = md5(uniqid(microtime(), TRUE));
 
// Headers
$headers = 'From:e-adresse.net <e-adresse@server.com>'."\r\n";
$headers .= 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-Type: multipart/mixed;boundary='.$boundary."\r\n";
$headers .= "\r\n";
 
// Message
$message= 'This is a multipart/mixed message.'."\r\n\r\n";
 
// Texte
$message.= '--'.$boundary."\r\n";
$message.= 'Content-type:text/plain;charset=utf-8'."\r\n";
$message.= 'Content-transfer-encoding:8bit'."\r\n";
$message.= 'Un message avec une pièce jointe.'."\r\n";

$message.="NOM: ".$nom."\n";

  $message.="PRENOM: ".$prenom."\n";

  $message.="EMAIL: ".$email."\n";

  $message.="TELEPHONE: ".$telephone."\n";

  $message.="CODE LOCATION: ".$codeLocation."\n";

  $message.="DATE DEBUT LOCATION: ".$dateDebut."\n";

  $message.="DATE FIN LOCATION: ".$dateFin."\n";

  $message.="TYPE DE SEJOUR: ".$typeSejour."\n";

  $message.="ORIGINE: ".$origine."\n";

  $message.="SERVICE EN PLUS: ".$service."\n";

  $message.="MESSAGE: ".$message_visiter."\n";
 
// Pièce jointe
$file_name = 'img/photo.jpg';
if (file_exists($file_name))
{
  $file_type = filetype($file_name);
  $file_size = filesize($file_name);
 
  $handle = fopen($file_name, 'r') or die('File '.$file_name.'can t be open');
  $content = fread($handle, $file_size);
  $content = chunk_split(base64_encode($content));
  $f = fclose($handle);
 
  $message.= '--'.$boundary."\r\n";
  $message.= 'Content-type:'.$file_type.';name='.$file_name."\r\n";
  $message.= 'Content-transfer-encoding:base64'."\r\n";
  $message.= $content."\r\n";
}
 
// Fin
$message.= '--'.$boundary."\r\n";
 
// Function mail()
mail($to, $subject, $message, $headers);

echo "<script type='text/javascript'>function verif_formulaire(){

      alert('MESSAGE ENVOYER AVEC SUCCES. La direction de e-adresse vous contactera dans 10 minutes au maximum.');}

      verif_formulaire();
    </script>";
echo"POUR CONTINUER CLICQUEZ <a href='https://e-adresse.net/'>ICI</a>";

?>