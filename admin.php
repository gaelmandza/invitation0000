<?php
 $bdd = new PDO("mysql:host=127.0.0.1;dbname=invitationcard", 'root', '');

 if(isset($_POST["submit"])){
     if(!empty($_POST["gname"]) AND !empty($_POST["gtable"])){
         $name = htmlspecialchars($_POST["gname"]);
         $table = htmlspecialchars($_POST["gtable"]);

         $insertinfos = $bdd->prepare ("INSERT INTO guestinfos(name,guesttable) VALUES (?,?)");
         $insertinfos->execute(array($name,$table));
     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="adminstyle.css">
    <title>admin</title>
</head>
<body>
    <div class="addguest">
        <h1>Add guest</h1>
        <form action="" method="post">
        <label for="idname">Guest name</label> <br>
        <input type="text" placeholder="Guest name" name="gname" id="idname" class="textbox" value=" "> <br> <br>
        <label for="idtable">Guest table</label> <br>
        <input type="text" name="gtable" placeholder="Guest table" id="idtable" class="textbox" value=" "> <br> <br>
        <input type="submit" id="submit" name="submit" value="Submit"> <br> <br>
        <a href="guestlist.php">Back to guest list</a>
        </form>
    </div>


</body>
</html>