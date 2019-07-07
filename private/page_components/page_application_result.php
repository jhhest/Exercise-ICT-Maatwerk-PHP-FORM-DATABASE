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
$maandagochtend = $_POST['maandagochtend'];
$maandagmiddag = $_POST['maandagmiddag'];
$dinsdagochtend = $_POST['dinsdagochtend'];
$woensdagochtend = $_POST['woensdagochtend'];
$woensdagmiddag = $_POST['woensdagmiddag'];
$donderdagochtend = $_POST['donderdagochtend'];
$donderdagmiddag = $_POST['donderdagmiddag'];
$vrijdagochtend = $_POST['vrijdagochtend'];
$vrijdagmiddag = $_POST['vrijdagmiddag'];

$dagdelen = [
    $maandagochtend,
    $maandagmiddag,
    $dinsdagochtend,
    $woensdagochtend,
    $woensdagmiddag,
    $donderdagochtend,
    $donderdagmiddag,
    $vrijdagochtend,
    $vrijdagmiddag
];

// construct SQL INSERT statement to inser 
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
                </tr>
            </tbody>
        </table>
    </div>

    <div class=row>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">aanmeldingsreden</th>
                    <th scope="col">bijzonderheden</th>
                </tr>
            </thead>




            <tbody>
                <tr>
                    <td><?php echo $row['aanmeldingsreden']; ?></td>
                    <td><?php echo $row['bijzonderheden']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class=row>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">#</th>
                    <th scope="col">Maandag</th>
                    <th scope="col">Dinsdag</th>
                    <th scope="col">Woensdag</th>
                    <th scope="col">Donderdag</th>
                    <th scope="col">Vrijdag</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>ochtend</td>
                    <td class="table-success"></td>
                    <td class="table-success"></td>
                    <td class="table-danger"></td>
                    <td class="table-success"></td>
                    <td class="table-success"></td>
                </tr>
                </tr>
                <tr>
                    <td>middag</td>
                    <td class="table-success"></td>
                    <td class="table-success"></td>
                    <td class="table-success"></td>
                    <td class="table-success"></td>
                    <td class="table-danger"></td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>