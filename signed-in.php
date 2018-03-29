<?php
    if($_SESSION['u_uid']=="Mod"){
        include_once 'mod-view.php';
    }else {
        echo '
        <form action="includes/ship_request.inc.php" method="POST">
            Enter the class you would like the ship(s) to be a part of: <input name="class" type="text" placeholder="Class of Ship" required><br>
            Enter how many ships you would like<input name="amount" type=number placeholder="Number of Ships" required><br>
            Select which type of ship you would like: <select name="type">
                <option>Battleship</option>
                <option>Cruiser</option>
            </select><br>
            <button type="submit" name="submit">Buy Ship(s)</button>
        </form>';
    }
?>