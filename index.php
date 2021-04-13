<?php

$user = "user";
$pass = "";

try
{
 
 $pdo = new PDO('mysql:host=localhost;dbname=name;charset=utf8', $user, $pass);
 $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
 
}catch (PDOException $e){
 
 echo "Error !";
 exit();
 
}

$request = $pdo->prepare('SELECT * FROM info');
$request->execute();
$data = $request->fetchAll(PDO::FETCH_OBJ);

foreach ($data as $value)
{ 
  $output = escapeshellcmd(exec('ping -n 1 -w 100 '.$value->ip.''));
  if(preg_match("/perte/", $output))
  {
   echo '<br>Ping failed to '.$value->ip.'</br>';
  }
  else
  {
    echo '<br>Ping ok to '.$value->ip.'</br>';
                                        
  } 

}
?>
