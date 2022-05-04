<?php include("./dashboard-connections/connection.php");


?>
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


        ?>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1 class="upper-title-three-divs">Besoin urgent du sang</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Besoin</a>
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

            <br>

            <form class="space-y-4 text-gray-700" method="POST" action="index.php">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <label class="block mb-1" for="formGridCode_card" style="color: var(--dark);">Numero de telephone: </label>
                        <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="tel" id="formGridCode_card" name="phone_need" required />
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <label class="block mb-1" for="formGridCode_card" style="color: var(--dark);">Ville : </label>
                        <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" name="city_need" required />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-2 space-y-4 md:space-y-0">
                    <div class="w-full px-2 md:w-1/2">
                        <label class="block mb-1" for="formGridCode_name" style="color: var(--dark);">Nom du personne qui a besoin :</label>
                        <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_name" name="nom_need" required />
                    </div>
                    <div class="w-full px-2 md:w-1/2">
                        <label class="block mb-1" for="formGridCode_last" style="color: var(--dark);">Prenom du personne qui a besoin :</label>
                        <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_last" name="prenom_need" required />
                    </div>
                </div>
                <div class="relative inline-block w-full text-gray-700">
                    <select class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Type du Sang" name="type_sang_need" required>
                        <option selected>Type de sang</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB</option>
                        <option>O+</option>
                        <option>O-</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <div class="w-full">
                        <label class="block mb-1" for="formGridCode_card" style="color: var(--dark);">Date du Besoin : </label>
                        <input class="w-full h-10 px-3 text-base placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" id="formGridCode_card" name="date_need" required />
                    </div>
                </div>


                <div class="mb-4 text-center">
                    <button class="transition duration-500 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" style="background-color: var(--blue) ;">
                        Envoyer le formulaire
                    </button>
                </div>
                <hr />
            </form>
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

        const don = document.querySelector('#sidebar .side-menu.top li.btn-need').classList.add('active');
    </script>



</body>

</html>