<?php
  header('Location: http://www.alban-web.fr/index.php');
  if (empty($_POST['mail']))
  {
      echo $_POST['mail'];
    }
  elseif (!empty($_POST['mail']))
    {
      echo $_POST['nom'];
      $msg = "Je suis ";
      $msg .= $_POST['nom']." ".$_POST['prenom']."\n";
      $msg .= "Mon mail est ".$_POST['mail']."\n\n";
      $msg .= $_POST['message'];
      echo '\n';
      echo $msg;
      mail('korvin.meurice@gmail.com', 'Contact', $msg);
    }
    exit();
?>
