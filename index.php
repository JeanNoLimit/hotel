<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php

//fonction de récupération des classes

spl_autoload_register( function ($classe){
    require $classe . '.class.php';
});
//******hotels******//

$h1=new Hotel("Ibis","Avenue du Rhin", 67100,"Strasbourg");
$h2=new Hotel("& Spa Régent petite France", "6 rue des Moulins", 67000, "Strasbourg");



//******chambres******//

    //chambres hotel ibis
$c1_1=new Chambre(1,2,60,false,$h1);
$c2_1=new Chambre(2,3,90,true,$h1);
$c3_1=new Chambre(3,2,80,true,$h1);
$c4_1=new Chambre(101,2,60,false,$h1);
$c5_1=new Chambre(102,2,60,false,$h1);
$c6_1=new Chambre(103,4,120,true,$h1);
$c7_1=new Chambre(201,2,130,true,$h1);
$c8_1=new Chambre(202,1,80,true,$h1);
$c9_1=new Chambre(203,3,110,true,$h1);
$c10_1=new Chambre(301,2,190,true,$h1);

    //chambres hotel Régent
$c1_2=new Chambre(1,2,110,true,$h2);
$c2_2=new Chambre(2,1,110,true,$h2);
$c3_2=new Chambre(101,2,110,true,$h2);
$c4_2=new Chambre(102,4,120,true,$h2);
$c5_2=new Chambre(103,6,210,true,$h2);
$c6_2=new Chambre(201,2,240,false,$h2);
$c7_2=new Chambre(202,2,480,true,$h2);

//******clients******
$client1=new client("Narcisse", "Pelletier");
$client2=new client("Melusine","Mallender");

//*****Reservations*****/

$Resa1=new Reservation($c2_1,$client1,'2023-03-28','2023-03-28');
$Resa2=new Reservation($c8_1,$client1,'2023-04-05','2023-04-06');
$Resa3=new Reservation($c4_1,$client2,'2023-04-01','2023-04-05');

// **** tests affichages *****/

$h1->affichageInfosHotel();
$h2->affichageInfosHotel();
$h1->affichageReservation();
$h2->affichageReservation();
$client1->affichageResaClient();
$client2->affichageResaClient();
$client1->getSomme();
$h1->affichageStatutChambre();
$h2->affichageStatutChambre();




?>