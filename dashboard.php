<?php
session_start();

// esto es para verificar si el usuario ha iniciado sesión correctamente
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Verifica si hay un mensaje de inicio de sesión exitoso en la URL
if (isset($_GET['login']) && $_GET['login'] === 'success') {
    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js'></script>";
    echo "<script>
    Swal.fire({
      icon: 'success',
      title: '¡Bienvenido!',
      text: 'Inicio de sesión exitoso.',
      confirmButtonText: 'Aceptar'
    });
  </script>";
}
?>

<!-- de aqui para bajo va el contenido del dashboard  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piel de seda</title>
    <link rel="stylesheet" href="./css/dashboard.css">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Incluye las bibliotecas de DataTables y Buttons -->
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css"> -->
</head>

<body>
    <div class="container">
        <div class="cuadro">
            <ul>
                <li>
                    <a href="#" class="img1">
                         <img src="../Pieldeseda-CARLOSXR/img/logo2.png" alt=""><span class="title logo">Piel de seda</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><box-icon name='user'></box-icon></span>
                        <span class="title">Usuario</span>
                    </a>
                </li>
                <li>
                    <a href="/informes.php">
                        <span class="icon"><box-icon name='cart'></box-icon></span>
                        <span class="title">Productos</span>
                    </a>
                </li>
                <li>
                    <a href="informes.php">
                        <span class="icon"><box-icon name='copy-alt'></box-icon></span>
                        <span class="title">informes</span>
                    </a>
                </li>
                <li>
                    <a href="Provedores">
                        <span class="icon"><box-icon name='clipboard'></box-icon></span>
                        <span class="title">Provedores</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><box-icon name='exit'></box-icon></span>
                        <span class="title">Salida</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Main-->
        <div class="main">
            <div class="top">
                <div class="toggle"><box-icon name='search-alt-2'></box-icon>
                </div>
                <!--Buscar-->
                <div class="buscar">
                    <label>
                        <input type="text" placeholder="Buscar">
                        <ion-icon name="search-sharp"></ion-icon> 
                    </label>
                </div>
                <!--user dasboard-->
                <div class="user" alt="">
                    <img src="./img/usuario.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> -->
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>