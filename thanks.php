<?php

if(isset($_POST["submit"])){
    $ime= $_POST["name"];
    $telefon= $_POST["phone"];

$productList = [
0 => [
 "goodID" => 99, // ID proizvoda
 "quantity" => 1, // Količina proizvoda
 "price" => 44.99 // Ukupna cijena proizvoda
]
];

$data = [
 'full_name' => $_POST['name'], // Ime i prezime
 'city' => "", // Grad
 'phone' => $_POST['phone'], // Telefon
 'external' => $_POST['websiteFolder'], // External
 'address' => "", // Adresa
 'product' => $productList // Proizvod informacije
];

 $myCurl = curl_init();
 curl_setopt_array($myCurl, [
 CURLOPT_URL => "https://crm.stepmode.ba/api.php?token=ba4c7eaa177d09ec20294ef9855dba247d99fd26",
 CURLOPT_RETURNTRANSFER => true,
​CURLOPT_POST => true,
 CURLOPT_SSL_VERIFYPEER => false,
 CURLOPT_POSTFIELDS => http_build_query($data),
 CURLOTP_FOLLOWLOCATION => true,
 ]);
 $response = curl_exec($myCurl);
 curl_close($myCurl);
 $arr = json_decode($response, true);
}

 ?>

<html lang="en">
<head>

<title>Uspješno</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

 <style>
 .center{
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%,-50%);
  text-align: center;
 }
 .center h1{
 font-family: "Pacifico", cursive;
 color: #d4af37;
 font-size: 2.5rem;
 }
 </style>


 </head>
 <body>

 <div class="container">
 <div class="center">
 <div class="card">
 <div class="card-body">
 <h1>Hvala vam.<br>Vaša narudžba je zaprimljena!</h1>
 <br><p>Vaše informacije:<br><strong>Ime:</strong> <?php echo $ime; ?> <br><strong>Broj telefona:</strong> <?php echo $telefon; ?></p>
 <p>Ukoliko ste napravili grešku javite nam se na viber/wa/sms: +387(0)62534271</p>
 <p>Očekujte poziv prvog slobodnog operatera<br> oko detalja i uputa za najbolje rezultate.</p>
 <a href="index.php"><button class="btn btn-success btn-md">Povrat na početnu</button></a>
 </div>
 </div>
 </div>
 </div>


<script>
setTimeout(function(){
 window.location.href = "index.php"
 }, 25000);
 </script>
</body>
</html>
