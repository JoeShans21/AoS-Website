<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>AoS Site</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<header style="background-color:gray; position:relative; margin-top:-16px; margin-right:-8px; margin-left:-8px;">
    <nav>
        <div class="main-wrapper" style="height:60px; padding:0px; margin:0px;">
            <ul style="list-style: none; margin-top:20px; position:fixed;">
                <li><a href="index.php" style="color:black; text-decoration:none; font-size:20px;">Home</a></li>
            </ul>
            <div class="nav-login" style="z-index: 10;position: absolute;right: 0;top: 23px;">
                <?php
                    if (isset($_SESSION['u_id'])){
                        echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit">Logout</button>
                </form>';
                    }
                    else {
                        include_once 'login.php';
                    }
                ?>
            </div>
        </div>
     </nav>
</header>