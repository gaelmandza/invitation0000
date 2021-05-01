<?php
session_start();
 $bdd = new PDO("mysql:host=127.0.0.1;dbname=invitationcard", 'root', '');

 if(isset($_GET['id']) AND $_GET['id'] > 0){
   $getid = intval($_GET['id']);

   $requser = $bdd->prepare ("SELECT FROM * guestinfos WHERE id = ?");
   $requser->execute(array($getid));
   $guestinfo = $requser->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invitcss.css">
    <link rel="stylesheet" href="starsanimation.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Contrail+One&family=Teko:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
              <h1>Invitation</h1>
            </div>
        </div>
        
        <div class="row">
            <div id="stars"></div>
            <div class="col-sm">
                <img src="19th.png" class="img-fluid" alt="...">
            </div>
            <div class="col-sm">
              <p>Hello ! You are cordially invited to celebrate my sweet 
                19th birthday party! 
                I will be pleased to have you amongst 
                my guests and to share in
                 this amazing day with me. 
                I would be honoured to have you help me 
                add more 
                memories and eat some delicious 
                birthday cake!!! 
                So bring your smile and help make this day
                 extra special for me. 
                Bring your best dance moves, tastebuds and 
                birthday singing voices. Please find the details below:</p>
            </div>
            <div class="infos">
                <ul>
                    <label for="">Date : <a class="infos-label-a">08/05/2021</a></label>
                    <label for="">Time : <a class="infos-label-a">14h30-21h30</a> </label> <br>
                    <label for="">Venue : <a class="infos-label-a">439 Atterbury Road, Menlopark.</a></label>
                    <label for="">RSVP : <a class="infos-label-a">0780443755 / 0655017187</a></label> <br>
                    <label for="">Dress code : <a class="infos-label-a">Black&Gold</a></label>
                </ul>
            </div>
          </div>
</body>
</html>
<?php 
}
?>