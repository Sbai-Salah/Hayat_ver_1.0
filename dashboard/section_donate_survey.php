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
            /* background: #342E37; */
            /* background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"%3E%3Cg fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.4"%3E%3Cpath opacity=".5" d="M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z"/%3E%3Cpath d="M6 5V0H5v5H0v1h5v94h1V6h94V5H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); */
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
                    <h1 class="upper-title-three-divs">Donner</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Donner</a>
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

            <div class="donner-section-btn">
                <div class="mx-auto container flex items-center" id="nav">
                    <div class="w-full pt-2 p-4">
                        <div class="mx-auto md:p-6 md:w-1/2">
                            <div class="flex flex-wrap justify-between">
                                <h1 class="text-2xl text-red-500 hover:text-white-500 transition duration-500 p-4">
                                    <i class="fas fa-square-check"></i>
                                    Don Du sang
                                </h1>
                                <a href="#home" class="mt-8 text-orange-400 hover:text-orange-600 transition duration-500">
                                    <!-- <svg
                class="w-6 h-6 inline-block align-bottom"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                stroke="currentColor"
                viewBox="0 0 24 24"
              >
                <path
                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                ></path>
              </svg>
              Back to Home
              <i class="fas fa-chevron-circle-left fa-fw"></i> -->
                                </a>
                            </div>

                            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                                <form method="POST" action="badges.php">
                                    <div class="mb-8">
                                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            Nom :
                                        </label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <input id="username" name="nom" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="NOM" required />
                                        </div>
                                        <!-- <strong class="text-red-500 text-xs italic"
                  >username is require</strong
                > -->
                                    </div>
                                    <!--  END USERNAME================================-->
                                    <div class="mb-8">
                                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            Prenom :
                                        </label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                                </svg>
                                            </div>
                                            <input name="prenom" id="username" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="PRENOM" required />
                                        </div>
                                        <!-- <strong class="text-red-500 text-xs italic"
                  >username is require</strong
                > -->
                                    </div>

                                    <!--  LAST NAME END =========================  -->
                                    <div class="mb-8">
                                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            Ville :
                                        </label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <!-- <svg
                      class="h-5 w-5 text-gray-400"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                      ></path>
                    </svg> -->
                                                <!-- NOTE BY SBAI SALAH :) this svg from : https://heroicons.com/ -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                            </div>
                                            <input name="ville" id="password" type="text" placeholder="Oujda" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" required />
                                        </div>
                                    </div>
                                    <!-- date picker  BEGIN -->

                                    <div class="relative">
                                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            Votre Date de Naissance :
                                        </label>
                                        <!-- class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
  -->

                                        <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none">
                                            <!-- <svg
                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                      clip-rule="evenodd"
                    ></path>
                  </svg> -->
                                        </div>
                                        <input datepicker="" name="date_nais" type="text" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Date de Naissance" required />
                                    </div>

                                    <!-- date picker END -->

                                    <!-- CIN begin =========== -->
                                    <div class="mb-8">
                                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            CIN :
                                        </label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                                </svg>
                                            </div>
                                            <input name="cin" id="password" type="text" placeholder="Numero de la carte national" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" required />
                                        </div>
                                    </div>

                                    <!-- CIN end =============== -->
                                    <!--                PHONE NUMBER BEGIN -->

                                    <div class="mb-8">
                                        <div class="mb-8">
                                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                                <span class="text-red-500">&nbsp;*</span>
                                                Numero de telephone :
                                            </label>
                                            <input name="telephone" type="tel" class="
        block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out
      " id="exampleTel0" placeholder="Phone input" required />
                                        </div>
                                    </div>
                                    <!--                PHONE NUMBER END-->
                                    <!-- date picker  BEGIN -->

                                    <div class="relative">
                                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                            <span class="text-red-500">&nbsp;*</span>
                                            Quand voulez-vous faire le don du sang:
                                        </label>
                                        <!-- class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                  -->

                                        <div class="absolute inset-y-0 right-0 flex items-center pl-3 pointer-events-none">
                                            <!-- <svg
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                  >
                                    <path
                                      fill-rule="evenodd"
                                      d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                      clip-rule="evenodd"
                                    ></path>
                                  </svg> -->
                                        </div>
                                        <input datepicker="" name="date_don" type="text" class="block pr-10 shadow appearance-none border-2 border-orange-100 rounded w-full py-2 px-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500 transition duration-500 ease-in-out" placeholder="Date du Don" required />
                                    </div>

                                    <!-- date picker END -->

                                    <div class="mb-6">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <label class="block text-gray-500 font-bold" for="remember">
                                                    <!-- <input
                        class="ml-2 leading-tight"
                        type="checkbox"
                        id="remember"
                        name="remember"
                      /> -->
                                                    <!-- <span class="text-sm"> remember me </span> -->
                                                </label>
                                            </div>
                                            <div>
                                                <!-- <a
                      class="font-bold text-sm text-orange-500 hover:text-orange-800"
                      href="#password-request"
                    >
                      forgot password
                    </a> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 text-center">
                                        <button class="transition duration-500 bg-red-500 hover:bg-black-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                            Envoyer le formulaire
                                        </button>
                                    </div>
                                    <hr />
                                    <!-- <div class="mt-8">
                <p class="text-sm">
                  no account
                  <a
                    class="font-bold text-sm text-orange-500 hover:text-orange-800"
                    href="#register"
                  >
                    sign up
                  </a>
                </p>
              </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.4.3/dist/datepicker.js"></script>

    <!-- EXPLNATION:  
min kandir include l sidebar the first "li" element has always a class "active"
so it is al time set to active .. what i did is that in each section we are in 
i removed the active class from the first li element and i added it to the current li element we are in.
-->
    <script>
        const dash = document.querySelector('#sidebar .side-menu.top li.btn-dash').classList.remove('active');

        const don = document.querySelector('#sidebar .side-menu.top li.btn-donner').classList.add('active');
    </script>
</body>

</html>