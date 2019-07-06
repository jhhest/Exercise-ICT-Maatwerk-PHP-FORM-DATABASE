<?php

// Giving every POST variable it's own variable. 

$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$geboortedatum = $_POST['geboortedatum'];
$straatnaam = $_POST['straatnaam'];
$plaatsnaam = $_POST['plaatsnaam'];
$mobiele_telefoon = $_POST['mobiele_telefoon'];
$mail = $_POST['mail'];
$aanmeldingsreden = $_POST['aanmeldingsreden'];
$bijzonderheden = $_POST['bijzonderheden'];

// construct SQL INSERT statement. 

$sql = "INSERT INTO klanten ";
$sql .= "(naam, achternaam, geboortedatum, straatnaam, plaatsnaam, mobiele_telefoon, mail, aanmeldingsreden, bijzonderheden) ";
$sql .= "VALUES (";
$sql .= "'" . $naam . "',";
$sql .= "'" . $achternaam . "',";
$sql .= "'" . $geboortedatum . "',";
$sql .= "'" . $straatnaam . "',";
$sql .= "'" . $plaatsnaam . "',";
$sql .= "'" . $mobiele_telefoon . "',";
$sql .= "'" . $mail . "',";
$sql .= "'" . $aanmeldingsreden . "',";
$sql .= "'" . $bijzonderheden . "'";
$sql .= ")";

// Connect to database and insert values with $SQL retrieved from POST variables
$insert_returned_klant_id = db_insert($sql);
// $db = db_connect();
// $result = mysqli_query($db, $sql);
// $insert_id = mysqli_insert_id($db);
// db_disconnect($db);

$sql = "SELECT * FROM klanten WHERE klant_id=";
$db = db_connect();
$sql .= "'" . $insert_returned_klant_id . "'";
$sqlresult_klanten = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($sqlresult_klanten);
mysqli_free_result($sqlresult_klanten);
db_disconnect($db);

?>


<div class="row">
    <!-- Displaying result of submitted application form, retrieving data from global variable POST. -->
    <h1>The Following data is submitted. </h1>
</div>

<div class=row>

    <table class="table">

        <thead class="thead-dark">
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Naam</th>
                <th scope="col">Achternaam</th>
                <th scope="col">Geboortedatum</th>
                <th scope="col">Straat</th>
                <th scope="col">Plaatsnaam</th>
                <th scope="col">Mobiele telefoon</th>
                <th scope="col">Mail</th>
                <th scope="col">aanmeldingsreden</th>
                <th scope="col">bijzonderheden</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?php echo $row['naam']; ?></td>
                <td><?php echo $row['achternaam']; ?></td>
                <td><?php echo $row['geboortedatum']; ?></td>
                <td><?php echo $row['straatnaam']; ?></td>
                <td><?php echo $row['plaatsnaam']; ?></td>
                <td><?php echo $row['mobiele_telefoon']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['aanmeldingsreden']; ?></td>
                <td><?php echo $row['bijzonderheden']; ?></td>
            </tr>
        </tbody>
    </table>
</div>