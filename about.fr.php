<?php

function ip_info($ip = NULL, $purpose = "location", $deep_detect = TRUE) {
    $output = NULL;
    if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
        $ip = $_SERVER["REMOTE_ADDR"];
        if ($deep_detect) {
            if (filter_var(@$_SERVER['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            if (filter_var(@$_SERVER['HTTP_CLIENT_IP'], FILTER_VALIDATE_IP))
                $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
    }
    $purpose    = str_replace(array("name", "\n", "\t", " ", "-", "_"), NULL, strtolower(trim($purpose)));
    $support    = array("country", "countrycode", "state", "region", "city", "location", "address");
    $continents = array(
        "AF" => "Africa",
        "AN" => "Antarctica",
        "AS" => "Asia",
        "EU" => "Europe",
        "OC" => "Australia (Oceania)",
        "NA" => "North America",
        "SA" => "South America"
    );
    if (filter_var($ip, FILTER_VALIDATE_IP) && in_array($purpose, $support)) {
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));
        if (@strlen(trim($ipdat->geoplugin_countryCode)) == 2) {
            switch ($purpose) {
                case "location":
                    $output = array(
                        "city"           => @$ipdat->geoplugin_city,
                        "state"          => @$ipdat->geoplugin_regionName,
                        "country"        => @$ipdat->geoplugin_countryName,
                        "country_code"   => @$ipdat->geoplugin_countryCode,
                        "continent"      => @$continents[strtoupper($ipdat->geoplugin_continentCode)],
                        "continent_code" => @$ipdat->geoplugin_continentCode
                    );
                    break;
                case "address":
                    $address = array($ipdat->geoplugin_countryName);
                    if (@strlen($ipdat->geoplugin_regionName) >= 1)
                        $address[] = $ipdat->geoplugin_regionName;
                    if (@strlen($ipdat->geoplugin_city) >= 1)
                        $address[] = $ipdat->geoplugin_city;
                    $output = implode(", ", array_reverse($address));
                    break;
                case "city":
                    $output = @$ipdat->geoplugin_city;
                    break;
                case "state":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "region":
                    $output = @$ipdat->geoplugin_regionName;
                    break;
                case "country":
                    $output = @$ipdat->geoplugin_countryName;
                    break;
                case "countrycode":
                    $output = @$ipdat->geoplugin_countryCode;
                    break;
            }
        }
    }
    return $output;
}
// Start or resume the session
session_start();

// Set the IP address in the session variable
$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

// Get the visitor's IP address
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Display the IP address from the session
echo 'IP address from session: ' . $_SESSION['ip'];

// Retrieve and set other session variables (assuming ip_info function is defined)
$_SESSION['country_code'] = ip_info("Visitor", "Country Code");
$_SESSION['country'] = ip_info($visitor_ip, "Country");

// Display the country code set in the session
echo "Country code set in session: " . $_SESSION['country_code'];
?>



<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<title>Africa Grains Online | About</title>

<body>
    <?php require_once "header.php"; ?>
    <div class="container" style="letter-spacing:1px;margin-top:2%;">
        <div class="title">
            <h3 style="letter-spacing: 3px; color:black;font-weight:400;font-size:30px;text-align:center;">PROJECT OBJECTIVE</h3>
        </div>

        
        <div class="Aboutcontent">
            <P>Africa Grains Online est une initiative conjointe de formation en ligne d'African Milling School-Buhler et eProd Solutions, pour construire
                la capacité des meuniers et des négociants en céréales d’Afrique subsaharienne en améliorant la technologie de base de la mouture et la chaîne d’approvisionnement
                gestion pour augmenter la qualité des produits et réduire les pertes de transformation.</P>
            <p>L'objectif global est d'offrir un soutien continu à l'industrie africaine de la meunerie en mettant à disposition des médicaments génériques à distance.
                formation sur la technologie et les outils utilisés pour transformer les céréales en produits finis de haute valeur, sans gaspillage alimentaire, et également agricole
                gestion de la chaîne d'approvisionnement pour garantir des volumes continus de céréales de qualité pendant la crise du COVD-19 et au-delà. L’African Miling School va
                fournir sept (7) modules génériques axés sur la technologie de fraisage de base. eProd Solutions fournira huit (8) modules génériques axés sur la gestion de la chaîne d'approvisionnement.</p>

        </div>
        <img src="assets/about women.png" alt="Women packaging flour" class="AboutImage">
        <div class="title" style="margin: 3%; margin-bottom:1%">
            <h4 style="letter-spacing: 3px; color:black;font-weight:400;font-size:35px;text-align:center;">PARTNERS</h4>
        </div>
        <div class="Aboutcontent">
            <!-- <img src="assets/Buhler1.png" alt="Buhler logo" style="float: left;"> -->
            <p>
            Buhler Limited est une filiale à 100 % de<a href="https://www.buhlergroup.com" style="color:#008b8b "> Bühler AG </a> basé à Uzwil, en Suisse. Le groupe est une entreprise technologique pour
                usines, équipements et services associés pour la transformation des aliments et la fabrication de matériaux avancés et est implantée au Kenya depuis 1968. L'organisation occupe des positions de leader sur le marché.
                dans le monde entier dans les domaines de la technologie et des procédés de stockage des céréales, de transformation des céréales en farine et en aliments pour animaux, de production de pâtes et de chocolat, de boulangerie, de biscuits et de gaufrettes
                et la fabrication de composants moulés sous pression et autres.<span id="bhdots">...</span><span id="bhmore" style="display: none;">Les technologies de base du Groupe se situent dans le domaine de l'ingénierie des procédés mécaniques et thermiques, notamment dans le domaine des céréales.
                    traitement. Le groupe Bühler est présent dans plus de 140 pays, emploie plus de 13 000 personnes dans le monde et a généré un chiffre d'affaires de plus de 3 milliards de francs en 2019. Env. 60% de
                    le blé et 30 % du riz dans le monde sont transformés dans les usines Buhler.
                    Le groupe Bühler est présent en Afrique depuis les années 1960 et y dispose depuis lors d’un bureau de représentation. En 2015, Buhler Limited a été fondée avec un atelier mécanique à Nairobi.
                    pour servir le marché de l’Afrique de l’Est.
                    Buhler Ltd, la filiale du groupe Bühler à Nairobi, au Kenya, compte jusqu'à 40 employés, propose des services locaux - services sur le terrain, assistance technologique et atelier - et des conseils et travaille également en tant que
                    agent du groupe Bühler pour la vente d'équipements et d'installations (la plupart des affaires réalisées ne se reflètent pas dans les chiffres locaux mais au sein d'autres entités sœurs appartenant au groupe). Environ. 80% de tout le blé
                    et 50 % de tout le maïs au Kenya est transformé sur des équipements Buhler et Buhler est clairement le leader du marché ici avec des équipements et des technologies pour la production d'aliments de base. L'entreprise gère également un centre de formation
                    (« African Milling School ») qui propose une formation professionnelle pour le développement des jeunes techniciens et meuniers sur tout le continent dans un « système dual », une formation professionnelle à temps partiel et en
                    le travail à temps partiel. C'est la seule formation professionnelle dans ce secteur proposée sur le continent.</span>
                <button; onclick="buhlerFunction()" id="bhBtn" style="border: none;background-color:#fff;color:#b5cb4c;cursor:pointer">Read more</button>
            </p>
            <!-- <img src="assets/AMS1.png" alt="AMS logo" style="float: left;"> -->
            <p>The <a href="https://www.africanmillingschool.com/" style="color:#008b8b ">“African Milling School”,</a>ou AMS, a été ouvert en 2015. Buhler Limited a investi près de 6 millions USD dans l'AMS avec
                l’objectif d’aider le continent à développer davantage les compétences de l’industrie meunière et à créer une sensibilisation et des compétences en matière de sécurité alimentaire. L'école de Nairobi est équipée d'une technologie de pointe.<span id="amsdots">...</span><span id="amsmore" style="display: none;">
                L'AMS propose un programme d'apprentissage pour la prochaine génération de meuniers. Il est construit sur un programme de double diplôme en meunerie de deux ans avec des travaux pratiques dans une minoterie et une scolarité théorique.
                    à l'AMS. Il propose également un cours Head Miller et des cours de courte durée spécialisés sur la maintenance mécanique et électrique, la technologie de boulangerie – analyse des grains et de la farine, la sécurité alimentaire et l'évaluation de la qualité.
                    Les cours sont suivis chaque année par jusqu'à 200 étudiants de toute l'Afrique et du Moyen-Orient. Cinq employés sont affectés à temps plein à l'école à des fins de formation.</span>
                <button; onclick="amsFunction()" id="amsBtn" style="border: none;background-color:#fff;color:#b5cb4c;cursor:pointer">Read more</button>
            </p>

            <!-- <img src="assets/e-prod1.png" alt="Eprod logo" style="float: left;"> -->
            <p><a href="https://www.eprod-solutions.com/" style="color:#008b8b ">eProd Solutions </a>is a Kenyan private sector company registered in 2015 that offers an affordable ERP, or Enterprise Resources Planning
                tool, to manage agricultural supply chains. The ERP is appropriate for Sub Sahara Africa. The company supports in 18 countries, +30 different sectors and 9 different languages agricultural commodity traders,
                food processors and farmer cooperatives that use industrial scale processing equipment. </p>

            <!-- <img src="assets/DEG1.png" alt="DEG logo" style="float: left;"> -->
            <p>African Milling School and eProd Solutions partner with <a href="https://www.developpp.de/en/" style="color:#008b8b ">develoPPP</a>, the program by German Federal Ministry for Economic Cooperation and Development (BMZ) that promotes private-sector activities where entrepreneurial opportunities and development policy potential meet. Companies that want to invest sustainably in a developing and emerging country and expand their local operations can receive financial and technical support under the programme. </p>
        </div>

    </div>
    <?php require_once "footer.php"; ?>
    <script>
        function buhlerFunction() {
            var dots = document.getElementById("bhdots");
            var moreText = document.getElementById("bhmore");
            var btnText = document.getElementById("bhBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        function amsFunction() {
            var dots = document.getElementById("amsdots");
            var moreText = document.getElementById("amsmore");
            var btnText = document.getElementById("amsBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    </script>
</body>