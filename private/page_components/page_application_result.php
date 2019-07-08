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

// workschedule 
$maandagochtend = $_POST['maandagochtend'];
$maandagmiddag = $_POST['maandagmiddag'];
$dinsdagochtend = $_POST['dinsdagochtend'];
$dinsdagmiddag = $_POST['dinsdagmiddag'];
$woensdagochtend = $_POST['woensdagochtend'];
$woensdagmiddag = $_POST['woensdagmiddag'];
$donderdagochtend = $_POST['donderdagochtend'];
$donderdagmiddag = $_POST['donderdagmiddag'];
$vrijdagochtend = $_POST['vrijdagochtend'];
$vrijdagmiddag = $_POST['vrijdagmiddag'];

// $dagdelen = [
//     'maandagochtend' = $_POST['maandagochtend'],
//     'maandagmiddag' = $_POST['maandagmiddag'],
//     'dinsdagochtend' => $_POST['dinsdagochtend'],
//     'dinsdagochtend' => $_POST['dinsdagmiddag'],
//     'woensdagochtend' => $_POST['woensdagochtend'],
//     'woensdagmiddag' => $_POST['woensdagmiddag'],
//     'donderdagochtend' => $_POST['donderdagochtend'],
//     'donderdagmiddag' => $_POST['donderdagmiddag'],
//     'vrijdagochtend' => $_POST['vrijdagochtend'],
//     'vrijdagmiddag' => $_POST['vrijdagmiddag']
// ];

// $dagdelen = [
//     'maandag' = [
//         'maandagochtend' => $_POST['maandagochtend'],
//         'maandagmiddag' => $_POST['maandagmiddag']
//     ],
//     'dinsdagochtend' = $_POST['dinsdagochtend'],
//     'dinsdagochtend' = $_POST['dinsdagmiddag'],
//     'woensdagochtend' = $_POST['woensdagochtend'],
//     'woensdagmiddag' = $_POST['woensdagmiddag'],
//     'donderdagochtend' = $_POST['donderdagochtend'],
//     'donderdagmiddag' = $_POST['donderdagmiddag'],
//     'vrijdagochtend' = $_POST['vrijdagochtend'],
//     'vrijdagmiddag' = $_POST['vrijdagmiddag']
// ];

// construct SQL INSERT statement to insert personalia into database
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


// Connect to database and insert personalia data with $SQL retrieved from POST variables
$insert_returned_klant_id = db_insert($sql);

$sql = "SELECT * FROM klanten WHERE klant_id=";
$db = db_connect();
$sql .= "'" . $insert_returned_klant_id . "'";
$sqlresult_klanten = mysqli_query($db, $sql);
$klantenresult = mysqli_fetch_assoc($sqlresult_klanten);
mysqli_free_result($sqlresult_klanten);
db_disconnect($db);

// construct SQL INSERT statement to insert workschedule data into database 
$sql = "INSERT INTO roostertijden ";
$sql .= "(klant_id, maandagochtend, maandagmiddag, dinsdagochtend, dinsdagmiddag, woensdagochtend, woensdagmiddag, donderdagochtend, donderdagmiddag, vrijdagochtend, vrijdagmiddag) ";
$sql .= "VALUES (";
$sql .= "'" . $insert_returned_klant_id . "',";
$sql .= "'" . $maandagochtend . "',";
$sql .= "'" . $maandagmiddag . "',";
$sql .= "'" . $dinsdagochtend . "',";
$sql .= "'" . $dinsdagmiddag . "',";
$sql .= "'" . $woensdagochtend . "',";
$sql .= "'" . $woensdagmiddag . "',";
$sql .= "'" . $donderdagochtend . "',";
$sql .= "'" . $donderdagmiddag . "',";
$sql .= "'" . $vrijdagochtend . "',";
$sql .= "'" . $vrijdagmiddag . "'";
$sql .= ")";



// Connect to database and insert personalia data with $SQL retrieved from POST variables
$insert_returned_rooster_ID = db_insert($sql);

$sql = "SELECT * FROM roostertijden WHERE rooster_ID=";
$sql .= "'" . $insert_returned_rooster_ID . "'";
$db = db_connect();
$sqlresult_rooster = mysqli_query($db, $sql);
$roosterresult= mysqli_fetch_assoc($sqlresult_rooster);
mysqli_free_result($sqlresult_rooster);
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
                    <td><?php echo $klantenresult['naam']; ?></td>
                    <td><?php echo $klantenresult['achternaam']; ?></td>
                    <td><?php echo $klantenresult['geboortedatum']; ?></td>
                    <td><?php echo $klantenresult['straatnaam']; ?></td>
                    <td><?php echo $klantenresult['plaatsnaam']; ?></td>
                    <td><?php echo $klantenresult['mobiele_telefoon']; ?></td>
                    <td><?php echo $klantenresult['mail']; ?></td>
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
                    <td><?php echo $klantenresult['aanmeldingsreden']; ?></td>
                    <td><?php echo $klantenresult['bijzonderheden']; ?></td>
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
                    <td class="<?php echo ($roosterresult['maandagochtend'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['dinsdagochtend'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['woensdagochtend'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['donderdagochtend'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['vrijdagochtend'] == 1) ? "table-success" : "table-danger" ?>"></td>
                </tr>
                </tr>
                <tr>
                    <td>middag</td>
                    <td class="<?php echo ($roosterresult['maandagmiddag'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['dinsdagmiddag'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['woensdagmiddag'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['donderdagmiddag'] == 1) ? "table-success" : "table-danger" ?>"></td>
                    <td class="<?php echo ($roosterresult['vrijdagmiddag'] == 1) ? "table-success" : "table-danger" ?>"></td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>