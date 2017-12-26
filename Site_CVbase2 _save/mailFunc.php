<?php
if (empty($_POST['mail']))
{
  echo $_POST['mail'];
  echo '<p>bonjour les connards</p>';
}
elseif (!empty($_POST['mail']))
  {
    echo 'yolo';
    $msg = "Je suis ";
    $msg.$_POST['nom']." ".$_POST['prenom']."\n";
    $msg."Mon mail est ".$_POST['mail']."\n\n";
    $msg.$_POST['mesage'];
    echo $msg;
    mail('korvin.meurice@gmail.com', 'Contact', $msg);
  }
?>
