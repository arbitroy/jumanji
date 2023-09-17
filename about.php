<?php
session_start();
// echo "Country-code set in session: " . $_SESSION['country_code'];
// Check if the "country_code" session cookie is set to "NL"
if (isset($_SESSION['country_code']) && $_SESSION['country_code'] === 'NL') {
    // If it's set to "NL," show the popup
    echo '<script>
        if (confirm("Do you want to switch to the French site?")) {
            // Redirect to the corresponding French page
            const currentURL = window.location.href;
            const frenchURL = currentURL.replace(".php", ".fr.php");
            window.location.href = frenchURL;
        }
    </script>';
}

// Set the "country_code" session cookie (you can set this based on your logic)
$_SESSION['country_code'] = 'NL';

?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<title>Africa Grains Online | About</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<body>
    <?php require_once "header.php"; ?>
    <div class="container" style="letter-spacing:1px;margin-top:2%;">
        <div class="title">
            <h3 style="letter-spacing: 3px; color:black;font-weight:400;font-size:30px;text-align:center;">PROJECT OBJECTIVE</h3>
        </div>

        
        <div class="Aboutcontent">
            <P>Africa Grains Online is a joint e-training initiative by African Milling School-Buhler and eProd Solutions, to build
                the capacity of Sub-Saharan African millers and grain traders by improving basic milling technology and supply chain
                management to increase quality of produce and reduce processing losses.</P>
            <p>The overall objective is to offer continued support to the African miling industry by making available remote generic
                training on technology and tools used to process grains into high value finished products, without food waste, and also agricultural
                supply chain management to assure continued volumes of quality grain during the COVD-19 Crisis and beyond. The African Miling School will
                provide seven (7) generic modules focusing on basic milling technology. eProd Solutions will provide eight (8) generic modules focusing on supply chain management.</p>

        </div>
        <img src="assets/about women.png" alt="Women packaging flour" class="AboutImage">
        <div class="title" style="margin: 3%; margin-bottom:1%">
            <h4 style="letter-spacing: 3px; color:black;font-weight:400;font-size:35px;text-align:center;">PARTNERS</h4>
        </div>
        <div class="Aboutcontent">
            <!-- <img src="assets/Buhler1.png" alt="Buhler logo" style="float: left;"> -->
            <p>
                Buhler Limited is an 100% affiliate of <a href="https://www.buhlergroup.com" style="color:#008b8b "> Bühler AG </a>based in Uzwil, Switzerland. The group is a technology company for
                plant and equipment and related services for processing foods and manufacturing advanced materials and has a setup in Kenya since 1968. The organization holds leading market positions
                worldwide in the fields of technology as well as processes for grain storage, transforming grain into flour and animal feeds, producing pasta and chocolate, bakery, biscuits and wafers
                and manufacturing die cast components and others. <span id="bhdots">...</span><span id="bhmore" style="display: none;">The core technologies of the Group are in the field of mechanical and thermal process engineering, especially in the area of grain
                    processing. Bühler Group operates in over 140 countries, has a global payroll of more than 13,000 and generated sales revenues of more than CHF 3 billion in 2019. Approx. 60% of
                    wheat and 30% of rice worldwide is processed on Buhler plants.
                    The Bühler Group has operated in Africa since the 1960’s and had a representative office there since those days. In 2015 Buhler Limited was founded, together with a mechanical workshop in Nairobi
                    to serve the Eastern African Market.
                    Buhler Ltd, the Bühler Group affiliate in Nairobi, Kenya, has up to 40 employees, is offering local services – field services, technology support and workshop - and consulting and also works as an
                    agent for the Bühler Group for sales of equipment and plants (most business done is not reflected in the local figures but within other sister entities belonging to the group). Approx. 80% of all wheat
                    and 50% of all maize in Kenya is processed on Buhler equipment and Buhler is the clear market leader here with equipment and technology for staple food production. The company also operates a training
                    institute ("African Milling School") which offers vocational training for development of young technicians and millers all over the continent in a „dual system“, part-time vocational training and on
                    the job part-time. It is the only vocational training in this sector offered on the continent.</span>
                <button; onclick="buhlerFunction()" id="bhBtn" style="border: none;background-color:#fff;color:#b5cb4c;cursor:pointer">Read more</button>
            </p>
            <!-- <img src="assets/AMS1.png" alt="AMS logo" style="float: left;"> -->
            <p>The <a href="https://www.africanmillingschool.com/" style="color:#008b8b ">“African Milling School”,</a> or AMS, was opened in 2015. Buhler Limited invested close to 6 million USD in the AMS with
                the objective of helping the continent to further develop milling industry skills and to create food safety awareness and skills. The school in Nairobi is equipped with state-of-the-art technology.<span id="amsdots">...</span><span id="amsmore" style="display: none;">
                    The AMS offers an apprenticeship program for the next generation of millers. It is built up on a two years dual milling credential program with practical work in a flour mill and theoretical schooling
                    at the AMS. It also offers a Head Miller course and specialized short courses on mechanical and electrical maintenance, baking technology – grain and flour analytics, food safety and quality assessment.
                    The courses are attended annually by up to 200 students from all over Africa and Middle East. Five employees are assigned full time to the school for training purposes.</span>
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