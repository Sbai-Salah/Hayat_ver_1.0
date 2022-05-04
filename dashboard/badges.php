<?php include("./dashboard-connections/connection.php");
// if (!isset($_POST['nom'], $_POST['prenom'], $_POST['ville'], $_POST['date_nais'], $_POST['date_don'], $_POST['cin'], $_POST['telephone'])) {
//     echo ('Please complete the registration form!');
// }
// if (empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['ville']) || empty($_POST['date_nais']) || empty($_POST['date_don']) || empty($_POST['cin']) || empty($_POST['telephone'])) {
//     echo ('Please complete the registration form');
// }




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
        /* ======================================== */
        /* THIS STYLE IS FOR THE INCLUDED SECTIONS */
        /* ======================================== */


        .donner-section-btn {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            min-height: calc(100vh - 56px);
            overflow-y: auto;
            /* background: #342E37; */
            /* background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath opacity=".5" d="M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z"/%3E%3Cpath d="M6 5V0H5v5H0v1h5v94h1V6h94V5H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); */
        }

        /* ======================================== */
        /* THIS STYLE IS FOR THE HELLO HEADER & MAP CARDS */
        /* ======================================== */
        .head_map {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
            text-align: center;
        }

        img {
            height: auto;
            max-width: 100%;
            vertical-align: middle;
        }

        .btn {
            color: #ffffff;
            padding: 0.8rem;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 4px;
            font-weight: 400;
            display: block;
            width: 100%;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: transparent;
        }

        .btn:hover {
            background-color: rgba(255, 255, 255, 0.12);
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .cards_item {
            display: flex;
            padding: 1rem;
        }

        @media (min-width: 40rem) {
            .cards_item {
                width: 50%;
            }
        }

        @media (min-width: 56rem) {
            .cards_item {
                width: 33.3333%;
            }
        }

        .card {
            background-color: white;
            border-radius: 0.25rem;
            box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .card_content {
            padding: 1rem;
            background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
            height: 100%;
        }

        .card_title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: capitalize;
            margin: 0px;
        }

        .card_text {
            color: #ffffff;
            font-size: 0.875rem;
            line-height: 1.5;
            margin-bottom: 1.25rem;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <!-- SIDEBAR -->
    <?php include("./fixed_sections/sidebar_section_dashboard.php") ?>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <?php include("./fixed_sections/navbar_section_dashboard.php") ?>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1 class="upper-title-three-divs">Mes Badges</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Badges</a>
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
            <?php
            $get_num_ids = "select count(*) from recent_add";
            $aa = mysqli_query($con, $get_num_ids);
            $last_id_num = mysqli_fetch_assoc($aa);
            $n = $last_id_num['count(*)'];

            $get_need_count = "select count(*) from form_needer ";
            $ee = mysqli_query($con, $get_need_count);
            $num_need = mysqli_fetch_assoc($ee);
            $nn = $num_need['count(*)'];



            $new_n = intval(1020 + $n);
            $new_nn = intval(1000 + $nn);

            $get_nom = "select nom, ville from donnation";
            $bb = mysqli_query($con, $get_nom);
            $profil_name = mysqli_fetch_assoc($bb);
            $smya = $profil_name['nom'];
            $lmdina = $profil_name['ville'];
            ?>
            <!-- 1020 just for clarification and to make the number big :) -->

            <ul class="box-info">
                <li>
                    <i class="bx bxs-calendar-check"></i>
                    <span class="text">
                        <?php echo "<h3>$new_n</h3>" ?>
                        <p>Les Dons</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3><?php echo $nn; ?></h3>
                        <p>Les Demandes</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-dollar-circle"></i>
                    <span class="text">
                        <?php echo "<h3>$new_nn</h3>" ?>
                        <p>Total Stock</p>
                    </span>
                </li>
            </ul>


            <ul class="box-info" style="align-items: center;">
                <li style="border-radius: 0%;">
                    <i class="bx bxs-calendar-check" style="display:none;"></i>
                    <span class="text" style="width: 100%;text-align: center;">
                        <?php echo "<h3>Salam $smya</h3>" ?>
                        <?php echo "<p>$lmdina</p>" ?>

                    </span>
                </li>

            </ul>
            <!-- ====================================================================================================== -->
            <?php

            // We need to check if the account with that username exists.
            if ($stmt = $con->prepare('SELECT id, nom, prenom FROM donnation WHERE cin = ?')) {
                // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
                $stmt->bind_param('s', $_POST['cin']);
                $stmt->execute();
                $stmt->store_result();
                // Store the result so we can check if the account exists in the database.
                if ($stmt->num_rows > 0) {
                    // Username already exists
                    // echo 'Username exists, please choose another!';
                    echo '
                                <ul class="box-info" style="align-items: center; text-align:center;">
                                        <li>
                                            <i class="bx bxs-calendar-check" style="display:none;"></i>
                                            <span class="text" style="width: 100%;text-align: center;">
                                                <h3>vous avez déjà rempli le formulaire pour faire un don ...</h3>

                                                <p>Vous devez respecter un délai minimum de 8 semaines entre deux dons de sang total</p>
                                                <h3>Choisissez un centre ci-dessous et faites un don</h3>
                                                <p>Merci</p>
                                            </span>
                                        </li>
                                </ul>
                                ';
                    $get_cit = "select ville from donnation";
                    $cc_cit = mysqli_query($con, $get_cit);
                    $cit = mysqli_fetch_assoc($cc_cit);
                    $city = $cit['ville'];
                    /*
                    On peut utiliser un tableau qui regroupe les centres de don selon la ville : 
                    nom du tableau dans la BD : don_center(id, nom_ville, nom_center ,num_tel, address, lien_map)
                    on peut recuperer l'image selon l' id ou par la boucle for (il faut respecter les numeros dans les noms d'img)
                    for($i=1; $i<$end; $i++){
                        echo '
                        <li class="cards_item">
                             <div class="card">
                                      <div class="card_image">
                                             <img src="./img/don_centers/centre_$i_$nom_ville.PNG">
                                      </div>
                                      <div class="card_content">
                                            <h2 class="card_title">$nom_center</h2>
                                            <p class="card_text">Vous pouvez contacter $nom_center par téléphone au numéro <span style="color: crimson ;">$num_tel</span>.</p>
                                            <button class="btn card_btn"><a href=$lien_map target="_blank">Voir Chemin</a></button>
                                     </div>
                            </div>
                        </li>
                        ';
                    }                  
                    */
                    if ($city === "Oujda" | $city === "oujda") {
                        echo '
            <div class="main">
            <h1 class="head_map">Les centre du don a Oujda </h1>
            <ul class="cards">
                <li class="cards_item">
                <div class="card">
                    <div class="card_image">
                    <img src="./img/don_centers/centre_1_oujda.PNG">
                    </div>
                    <div class="card_content">
                    <h2 class="card_title">Club Des Donneurs De Sang</h2>
                    <p class="card_text">Vous pouvez contacter Club Des Donneurs De Sang par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.</p>
                    <button class="btn card_btn"><a href="https://goo.gl/maps/C3yVhwMR5GTtrPFMA" target="_blank">Voir Chemin</a></button>
                    </div>
                </div>
                </li>
                <li class="cards_item">
                <div class="card">
                    <div class="card_image">
                    <img src="./img/don_centers/centre_2_oujda.PNG">
                    </div>
                    <div class="card_content">
                    <h2 class="card_title">CENTRE REGIONAL DE TRANSFUSION SANGUINE</h2>
                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.</p>
                    <button class="btn card_btn"><a href="https://goo.gl/maps/dtp6ugmfTfLTeWNo7" target="_blank">Voir Chemin</a></button>
                    </div>
                </div>
                </li>
                
            </ul>
            </div>

            ';
                    }

                    if (($city === "Casablanca" | $city === "Casa" | $city === "casablanca" | $city === "casa") && ($city === "Oujda" | $city === "oujda")) {
                        echo '
            <div class="main">
            <h1 class="head_map">Les centre du don a Casablanca </h1>
            <ul class="cards">
                <li class="cards_item">
                <div class="card">
                    <div class="card_image">
                    <img src="./img/don_centers/centre_1_casa.PNG">
                    </div>
                    <div class="card_content">
                    <h2 class="card_title">مركز التبرع بالدم </h2>
                    <p class="card_text">Vous pouvez contacter مركز التبرع بالدم par téléphone au numéro <span style="color: crimson ;">0656542152</span>.</p>
                    <button class="btn card_btn"><a href="https://goo.gl/maps/MBEn4dX7PYahHnPu7" target="_blank">Voir Chemin</a></button>
                    </div>
                </div>
                </li>
                <li class="cards_item">
                <div class="card">
                    <div class="card_image">
                    <img src="./img/don_centers/centre_2_casa.PNG">
                    </div>
                    <div class="card_content">
                    <h2 class="card_title">Centre de DON du sang</h2>
                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.
                    , Rue de Granville, Casablanca
                    </p>
                    <button class="btn card_btn"><a href="https://goo.gl/maps/oaHDz8U8Hz4vFjpw9" target="_blank">Voir Chemin</a></button>
                    </div>
                </div>
                </li>
                <li class="cards_item">
                <div class="card">
                    <div class="card_image">
                    <img src="./img/don_centers/centre_3_casa.PNG">
                    </div>
                    <div class="card_content">
                    <h2 class="card_title">Centre régional de transfusion sanguine de Casablanca</h2>
                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">0522264532</span>.
                    , 27 شارع محمد الزرقطوني، الدار البيضاء 20250
                    </p>
                    <button class="btn card_btn"><a href="https://goo.gl/maps/oepuPZV3V3KEBeh86" target="_blank">Voir Chemin</a></button>
                    </div>
                </div>
                </li>
            </ul>
            </div>

            ';
                    }
                } else {
                    // Username doesnt exists, insert new account
                    if ($stmt = $con->prepare('INSERT INTO donnation (nom, prenom, ville, date_nais, date_don, cin, telephone) VALUES (?, ?, ?,?,?,?,?)')) {
                        // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $stmt->bind_param('sssssss', $_POST['nom'], $_POST['prenom'], $_POST['ville'], $_POST['date_nais'], $_POST['date_don'], $_POST['cin'], $_POST['telephone']);
                        $stmt->execute();
                        // echo 'You have successfully registered, you can now login!';
                        // $nom = $_POST['nom'];
                        $get_nom = "select ville from donnation";
                        $cc = mysqli_query($con, $get_nom);
                        $cit = mysqli_fetch_assoc($cc);
                        $city_2 = $cit['ville'];

                        if ($city_2 === "Oujda" | $city_2 === "oujda") {
                            echo '
                            <div class="main">
                            <h1 class="head_map">Les centre du don a Oujda </h1>
                            <ul class="cards">
                                <li class="cards_item">
                                <div class="card">
                                    <div class="card_image">
                                    <img src="./img/don_centers/centre_1_oujda.PNG">
                                    </div>
                                    <div class="card_content">
                                    <h2 class="card_title">Club Des Donneurs De Sang</h2>
                                    <p class="card_text">Vous pouvez contacter Club Des Donneurs De Sang par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.</p>
                                    <button class="btn card_btn"><a href="https://goo.gl/maps/C3yVhwMR5GTtrPFMA" target="_blank">Voir Chemin</a></button>
                                    </div>
                                </div>
                                </li>
                                <li class="cards_item">
                                <div class="card">
                                    <div class="card_image">
                                    <img src="./img/don_centers/centre_2_oujda.PNG">
                                    </div>
                                    <div class="card_content">
                                    <h2 class="card_title">CENTRE REGIONAL DE TRANSFUSION SANGUINE</h2>
                                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.</p>
                                    <button class="btn card_btn"><a href="https://goo.gl/maps/dtp6ugmfTfLTeWNo7" target="_blank">Voir Chemin</a></button>
                                    </div>
                                </div>
                                </li>
                                
                            </ul>
                            </div>

                            ';
                        }

                        if ($city_2 === "Casablanca" | $city_2 === "Casa" | $city_2 === "casablanca" | $city_2 === "casa") {
                            echo '
                            <div class="main">
                            <h1 class="head_map">Les centre du don a Casablanca </h1>
                            <ul class="cards">
                                <li class="cards_item">
                                <div class="card">
                                    <div class="card_image">
                                    <img src="./img/don_centers/centre_1_casa.PNG">
                                    </div>
                                    <div class="card_content">
                                    <h2 class="card_title">مركز التبرع بالدم </h2>
                                    <p class="card_text">Vous pouvez contacter مركز التبرع بالدم par téléphone au numéro <span style="color: crimson ;">0656542152</span>.</p>
                                    <button class="btn card_btn"><a href="https://goo.gl/maps/MBEn4dX7PYahHnPu7" target="_blank">Voir Chemin</a></button>
                                    </div>
                                </div>
                                </li>
                                <li class="cards_item">
                                <div class="card">
                                    <div class="card_image">
                                    <img src="./img/don_centers/centre_2_casa.PNG">
                                    </div>
                                    <div class="card_content">
                                    <h2 class="card_title">Centre de DON du sang</h2>
                                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">05366-84264</span>.
                                    , Rue de Granville, Casablanca
                                    </p>
                                    <button class="btn card_btn"><a href="https://goo.gl/maps/oaHDz8U8Hz4vFjpw9" target="_blank">Voir Chemin</a></button>
                                    </div>
                                </div>
                                </li>
                                <li class="cards_item">
                                <div class="card">
                                    <div class="card_image">
                                    <img src="./img/don_centers/centre_3_casa.PNG">
                                    </div>
                                    <div class="card_content">
                                    <h2 class="card_title">Centre régional de transfusion sanguine de Casablanca</h2>
                                    <p class="card_text">Vous pouvez contacter Centre de transfusion par téléphone au numéro <span style="color: crimson ;">0522264532</span>.
                                    , 27 شارع محمد الزرقطوني، الدار البيضاء 20250
                                    </p>
                                    <button class="btn card_btn"><a href="https://goo.gl/maps/oepuPZV3V3KEBeh86" target="_blank">Voir Chemin</a></button>
                                    </div>
                                </div>
                                </li>
                            </ul>
                            </div>

                            ';
                        }
                    } else {
                        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                        echo 'Could not prepare statement!';
                    }
                }
                $stmt->close();
            } else {
                // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
                echo 'Could not prepare statement!';
            }
            // $con->close();




            ?>


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

        const don = document.querySelector('#sidebar .side-menu.top li.btn-badges').classList.add('active');
    </script>



</body>

</html>