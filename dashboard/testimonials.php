<?php include("../HayatConnection/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <title>HAYAT| Dashboard</title>
    <style>
        /* ADD SOME STYLING HERE */
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <?php include("./fixed_sections/sidebar_section_dashboard.php") ?>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <?php include("./fixed_sections/navbar_section_dashboard.php");

        $get_nom = "select user_name from users_new ORDER BY id DESC LIMIT 1;";
        $res = mysqli_query($con, $get_nom);
        $profil_name = mysqli_fetch_assoc($res);
        $smya = $profil_name['user_name'];
        ?>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1 class="upper-title-three-divs">Merci <?php echo $smya; ?></h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Temoinage</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class="bx bxs-cloud-download"></i>
                    <span class="text">Download PDF</span>
                </a>
            </div>


            <!-- ====================================================================================================== -->
            <section class="mb-20 text-gray-700">
                <div class="text-center md:max-w-xl lg:max-w-3xl mx-auto">
                    <h3 class="text-3xl font-bold mb-6 text-gray-800" style="color: var(--dark);">Les histoires des gens... grâce à toi</h3>
                    <p class="mb-6 pb-2 md:mb-12 md:pb-0" style="color: var(--dark);">
                        Donner du sang .. Sauver des vies </p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #9d789b;"></div>
                            <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                                <img src="img/testimony_1.webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-2xl font-semibold mb-4">Fatima Mouhoub</h4>
                                <hr />
                                <p class="mt-4">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                    </svg>
                                    Récemment, je me suis retrouvée aux urgences et j'avais besoin d'une transfusion sanguine. J'étais effrayé à cette pensée, mais l'alternative était de faire un arrêt cardiaque ou une défaillance d'organe.

                                    Une fois la transfusion commencée, mon anxiété a été soulagée et après 4 unités de sang, j'ai été autorisé à sortir de l'hôpital. Merci beaucoup
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #7a81a8;"></div>
                            <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                                <img src="img/testimony_2.webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-2xl font-semibold mb-4">Hiba Zougar</h4>
                                <hr />
                                <p class="mt-4">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                    </svg>
                                    Je suis un patient atteint de leucémie (AML). Je lutte contre cette maladie depuis un an et demi et j'ai constamment besoin de transfusions sanguines pour éviter le pire de la maladie. Ma gratitude envers tous ceux qui donnent ce (don de vie) est sans limite. Vous sauvez des vies en donnant votre sang. Merci.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="block rounded-lg shadow-lg bg-white">
                            <div class="overflow-hidden rounded-t-lg h-28" style="background-color: #6d5b98;"></div>
                            <div class="w-24 -mt-12 overflow-hidden border border-2 border-white rounded-full mx-auto bg-white">
                                <img src="img/testimony_3.webp" />
                            </div>
                            <div class="p-6">
                                <h4 class="text-2xl font-semibold mb-4">Mohammed</h4>
                                <hr />
                                <p class="mt-4">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" class="w-6 pr-2 inline-block" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                    </svg>
                                    Mon fils de 11 ans a été renversé deux fois par un conducteur ivre dimanche soir. Il a été transporté par avion à Rabat, où il est maintenant stable mais toujours critique. Il a maintenant une chance de se battre grâce à un donneur.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ================ ADD CHI HAJA HNA ================ -->
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>

    <!-- EXPLNATION:  
min kandir include l sidebar the first "li" element has always a class "active"
so it is al time set to active .. what i did is that in each section we are in 
i removed the active class from the first li element and i added it to the current li element we are in.
-->
    <script>
        const dash = document.querySelector('#sidebar .side-menu.top li.btn-dash').classList.remove('active');

        const don = document.querySelector('#sidebar .side-menu.top li.btn-temoinage').classList.add('active');
    </script>



</body>

</html>