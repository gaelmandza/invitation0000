<?php
 $bdd = new PDO("mysql:host=127.0.0.1;dbname=invitationcard", 'root', '');



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
  
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Admin</h1>
      <center><a class="addguest-button" href="admin.php">Add Guest<i class="fas fa-plus-circle"></i></a></center>
    </div>
    <div class="col">
    <?php 
    $requser = $bdd->query("SELECT * FROM  guestinfos");
   while($personinfo = $requser->fetch()){
    ?>
  <div class="guestlist">
    
    <div class="guestboxinfos">
    <p><?php echo $personinfo['name'];?></p>
    <p><?php echo $personinfo['guesttable'];?></p>
    <input type="text" class="inputbox urlbox" value="https://teste200021.000webhostapp.com/invit.php?id=<?php echo $personinfo['id'];?>"> <br>
    <button class="inputbox copylink"><i class="fas fa-copy"></i></button> 
    <button href="" class="inputbox copylink"><i class="fas fa-user-cog"></i></button> 
    <button class="inputbox setandelete"><i class="fas fa-user-minus"></i></button>

 
        </div>
        <?php 
}
?>
    

      </div>
    </div>
</div>

















</body>
</html>