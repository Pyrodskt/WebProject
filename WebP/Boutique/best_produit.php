<!--  affichage des produits les plus commandé par carousel
-->
<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $requete =$bdd->query("SELECT goodies_id,goodies_photo FROM goodies ORDER BY order_number DESC");

    $data1=$requete->fetch(PDO::FETCH_ASSOC);
    $data2=$requete->fetch(PDO::FETCH_ASSOC);
    $data3=$requete->fetch(PDO::FETCH_ASSOC);




echo "<div id='carousel' class='carousel slide' data-ride='carousel'>
    <div class='carousel-inner'>
        <div class='carousel-item active'>
            <img class='d-block w-100' src='image_temp/".$data1['goodies_photo']."' alt='Actualités'>
        </div>
        <div class='carousel-item '>
            <img class='d-block w-100' src='image_temp/".$data2['goodies_photo']."' alt='Nouveautés'>
        </div>
        <div class='carousel-item '>
            <img class='d-block w-100' src='image_temp/".$data3['goodies_photo']."' alt='Promotions'>
        </div>
    </div>
    <a class='carousel-control-prev' href='#carousel' role='button' data-slide='prev'>
        <span class='carousel-control-prev-icon' aria-hidden='true'></span>
        <span class='sr-only'>Previous</span>
    </a>
    <a class='carousel-control-next' href='#carousel' role='button' data-slide='next'>
        <span class='carousel-control-next-icon' aria-hidden='true'></span>
        <span class='sr-only'>Next</span>
    </a>
 					
</div>";

?>