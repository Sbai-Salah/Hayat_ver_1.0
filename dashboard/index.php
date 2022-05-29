<?php include("../HayatConnection/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <!-- My CSS -->
    <link rel="stylesheet" href="style_dash.css" />

    <title>HAYAT| Dashboard</title>
    <style>
        /* ======================================== */
        /* THIS STYLE IS FOR THE INCLUDED SECTIONS */
        /* ======================================== */
        /*===== SECTION 1: DONATE BLOOD=====  */

        .donner-section-btn {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            min-height: calc(100vh - 56px);
            overflow-y: auto;
            background: #DB504A;
        }

        .todo .temoinage_dash {
            width: inherit;
            height: 350px;
            background: var(--grey);
        }

        .temoinage_text {
            color: var(--dark);
            font-family: 'Lato', sans-serif;
            padding: 1em 2em;
            text-align: center;
            font-size: 30px;
            font-size: 24px;
            font-weight: 600;
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
                    <h1 class="upper-title-three-divs">Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class="bx bx-chevron-right"></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="../ScreensForReadme/Puisse-je donner.docx.pdf" target="_blank" class="btn-download">
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
            <?php
            if ($stmt = $con->prepare('SELECT id, nom_needer, prenom_needer FROM form_needer WHERE nom_needer = ? and prenom_needer=? and type_need = ?')) {
                // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
                $stmt->bind_param('sss', $_POST['nom_need'], $_POST['prenom_need'], $_POST['type_sang_need']);
                $stmt->execute();
            } elseif ($stmt = $con->prepare('INSERT INTO form_needer (num_tel, ville, nom_needer, prenom_needer, type_need, date_need) VALUES (?, ?, ?,?,?,?)')) {
                // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
                // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bind_param('ssssss', $_POST['phone_need'], $_POST['city_need'], $_POST['nom_need'], $_POST['prenom_need'], $_POST['type_sang_need'], $_POST['date_need']);
                $stmt->execute();
                // $stmt->store_result();

                $get_info = "select * from form_needer";
                $dd = mysqli_query($con, $get_info);
                $all_info_needer = mysqli_fetch_assoc($dd);

                $need_tel = $all_info_needer['num_tel'];
                $need_ville = $all_info_needer['ville'];
                $need_blood = $all_info_needer['type_need'];
                $need_date = $all_info_needer['date_need'];
                // echo $need_tel;
                // echo '
                echo '
                 
                 <ul class="box-info" style="align-items: center;">
                <li>
                    <i class="bx bxs-calendar-check" style="display:none;"></i>
                    <span class="text" style="width: 100%;text-align: center;">
                        <p>Votre Message de Besoin Publier: </p>
                        <h1>Besoin urgent du sang de type ' . $need_blood . '  avant  ' . $need_date . '  a  ' . $need_ville . ' ... Tel: ' . $need_tel . ' </h1>
                        <p>Pour tout information contacter nous : <span style="font-size: bold;">05-555-555-11</span> </p>

                    </span>
                </li>

            </ul>
                 
                 
                 
                 ';

                // ';
            }
            $stmt->close();

            ?>

            <div class="table-data" id="tdata">
                <div class="order">
                    <div class="head">
                        <h3>Recemment Donner</h3>
                        <i class="bx bx-search"></i>
                        <i class="bx bx-filter"></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Date Don</th>
                                <th>Type Sang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $get_num_ids = "select count(*) from recent_add";
                            $aa = mysqli_query($con, $get_num_ids);
                            $last_id_num = mysqli_fetch_assoc($aa);
                            // print_r($last_id_num['count(*)']);
                            $limit_interval = $last_id_num['count(*)'] - 5; // to limit how many recent names to display
                            // if i want to display more than 5 just change the 5 with the number of times to display
                            for ($i = $last_id_num['count(*)']; $i > $limit_interval; $i--) {
                                $query = "select * from recent_add where id='$i' limit 1";
                                $result = mysqli_query($con, $query);
                                $user_data = mysqli_fetch_assoc($result);
                                $name = $user_data['name'];
                                $date_don = $user_data['date_don'];
                                $blood_type = $user_data['blood_type'];

                                echo "  <tr>
                                        <td>
                                            <img src='img/profil-dash.jpg' />
                                            <p>$name</p>
                                        </td>
                                        <td>$date_don</td>
                                        <td><span class='status completed'>$blood_type</span></td>
                                    </tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>wach fkhbarek !</h3>
                        <i class="bx bx-plus"></i>
                        <i class="bx bx-filter"></i>
                    </div>
                    <!-- <ul class="todo-list">
                        <li class="completed">
                            <p>Todo List</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="completed">
                            <p>Todo List</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                        <li class="not-completed">
                            <p>Todo List</p>
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </li>
                    </ul> -->

                    <div class="temoinage_dash">
                        <h1 class="temoinage_text">"
                            <span class="txt-rotate" data-period="2000" data-rotate='[ "kola nhar kaytem in9ad 3 dyl nas", "Chaymae Mharzi.", "Sbai Salah.", "some might say lame.", "fun!" ]'></span> "
                        </h1>

                    </div>

                </div>
                <div class="shadow-lg rounded-lg overflow-hidden w-full dividiv">
                    <div class="head">
                        <h3>Stock</h3>
                        <i class="bx bx-plus"></i>
                        <i class="bx bx-filter"></i>
                    </div>
                    <!-- <div class="py-3 px-5 bg-gray-50">Pie chart</div> -->
                    <canvas class="p-10" id="chartPie"></canvas>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js_dashboard/auto_typing_temoinage.js"></script>
    <!-- <script>
        const s = document.querySelector('#sidebar .side-menu.top li a.a-dashboard-sideBar').classList.add('active');
    </script> -->
    <!-- PICHART JS -->
    <script>
        const dataPie = {
            labels: ["AB", "O+", "A-"],
            datasets: [{
                label: "My First Dataset",
                data: [300, 50, 100],
                backgroundColor: [
                    "#ec6b56",
                    "#ffc154",
                    "#47839c",
                ],
                hoverOffset: 4,
            }, ],
        };

        const configPie = {
            type: "pie",
            data: dataPie,
            options: {},
        };

        var chartBar = new Chart(document.getElementById("chartPie"), configPie);
    </script>
</body>

</html>
