<?php

$naam = $_POST['naam'];
$achternaam = $_POST['achternaam'];
$geboortedatum = $_POST['geboortedatum'];
$straatnaam = $_POST['straatnaam'];
$plaatsnaam = $_POST['plaatsnaam'];
$mobiele_telefoon = $_POST['mobiele_telefoon'];
$mail = $_POST['mail'];
$aanmeldingsreden = $_POST['aanmeldingsreden'];
$bijzonderheden = $_POST['bijzonderheden'];

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

$db = db_connect();
$result = mysqli_query($db, $sql);
$insert_id = mysqli_insert_id($db);
echo "<h1>" . $insert_id . "</h1>";
db_disconnect($db);

?>

<div class="row">
    <!-- Displaying result of submitted application form, retrieving data from global variable POST. -->
    <h1>Retrieving data from database</h1>
</div>

<?php
$db = db_connect();
// print_r($db);
// echo "<br>";
$sql = "SELECT * FROM klanten ";
//$sql .= "ORDER BY klant_id ASC";
// echo $sql . '<br>';
$sqlresult_klanten = mysqli_query($db, $sql);
$sqlresult_klanten = mysqli_fetch_assoc($sqlresult_klanten);
// echo print_r($sqlresult_klanten);
db_disconnect($db);
?>
</pre>

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
                <td><?php echo $sqlresult_klanten['naam']; ?></td>
                <td><?php echo $sqlresult_klanten['achternaam']; ?></td>
                <td><?php echo $sqlresult_klanten['geboortedatum']; ?></td>
                <td><?php echo $sqlresult_klanten['straatnaam']; ?></td>
                <td><?php echo $sqlresult_klanten['plaatsnaam']; ?></td>
                <td><?php echo $sqlresult_klanten['mobiele_telefoon']; ?></td>
                <td><?php echo $sqlresult_klanten['mail']; ?></td>
                <td><?php echo $sqlresult_klanten['aanmeldingsreden']; ?></td>
                <td><?php echo $sqlresult_klanten['bijzonderheden']; ?></td>
            </tr>
        </tbody>
    </table>
</div>


<?php
/*************************************************
 * Scratchblock
 *************************************************

$clients = [
    [
        'naam' => $_POST['naam'],
        'achternaam' => $_POST['achternaam'],
        'geboortedatum' => $_POST['geboortedatum'],
        'straatnaam' => $_POST['straatnaam'],
        'plaatsnaam' => $_POST['plaatsnaam'],
        'mobiele_telefoon' => $_POST['mobiele_telefoon'],
        'mail' => $_POST['mail'],
        'aanmeldingsreden' => $_POST['aanmeldingsreden'],
        'bijzonderheden' => $_POST['bijzonderheden']
    ]
];

*/

?>