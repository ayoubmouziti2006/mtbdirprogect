<?php

$host="localhost";
$user="root";
$pass="";
$ndb="contactme";

$connex=mysqli_connect($host,$user,$pass,$ndb);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
 /* */
 echo "<h2>Résultat du formulaire</h2>";
    echo "Nom : " . htmlspecialchars($name) . "<br>";
    echo "Email : " . htmlspecialchars($email) . "<br>";
    echo "Message : " . nl2br(htmlspecialchars($message));
}
      $query="INSERT INTO contact1(name,email,message) VALUES ('$name','$email','$message')";
        mysqli_query($connex,$query);

?>
