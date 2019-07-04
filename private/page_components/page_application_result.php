<?php

$rooster = [];


if (isset($_POST['maandagochtend'])) {
    $rooster['maandag'][] = 'ochtend';
}

if (isset($_POST['maandagmiddag'])) {
    $rooster['maandag'][] = 'middag';
}

if (isset($_POST['dinsdagochtend'])) {
    $rooster['dinsdag'][] = 'ochtend';
}

if (isset($_POST['dinsdagmiddag'])) {
    $rooster['dinsdag'][] = 'middag';
}

if (isset($_POST['woensdagochtend'])) {
    $rooster['woensdag'][] = 'ochtend';
}

if (isset($_POST['woensdagmiddag'])) {
    $rooster['woensdag'][] = 'middag';
}
if (isset($_POST['donderdagochtend'])) {
    $rooster['donderdag'][] = 'ochtend';
}

if (isset($_POST['donderdagmiddag'])) {
    $rooster['donderdag'][] = 'middag';
}

if (isset($_POST['vrijdagochtend'])) {
    $rooster['vrijdag'][] = 'ochtend';
}

if (isset($_POST['vrijdagmiddag'])) {
    $rooster['vrijdag'][] = 'middag';
}



$personalia = [
    [
        'naam' => $_POST['naam'],
        'achternaam' => $_POST['achternaam'],
        'geboortedatum' => $_POST['geboortedatum'],
        'straatnaam' => $_POST['straatnaam'],
        'plaatsnaam' => $_POST['plaatsnaam'],
        'mobiele_telefoon' => $_POST['mobiele_telefoon'],
        'mail' => $_POST['mail'],
    ]
];

$content = [
    ['reden_aanmelding' => $_POST['aanmeldingsreden']],
    ['bijzonderheden' => $_POST['bijzonderheden']],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<p>Note: Form has been submitted</p>";
}

?>
<pre>
<?php
print_r($rooster);  // print_r means print readable (the <pre> tags are used to give indentation)
print_r($personalia);
print_r($content);
print_r($_GET);
print_r($_POST);

?>
</pre>

<div class="row">
    <!-- Displaying result of submitted application form -->
    <h1>Aanmelding verwerkt</h1>
</div>

<div class="row">
    <!-- Displaying result of submitted application form -->
    <h1>Getting the values out of an associative array</h1>
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

            <?php foreach ($personalia as $p_item) { ?>
                <tr>
                    <td><?php echo $p_item['naam']; ?></td>
                    <td><?php echo $p_item['achternaam']; ?></td>
                    <td><?php echo $p_item['geboortedatum']; ?></td>
                    <td><?php echo $p_item['straatnaam']; ?></td>
                    <td><?php echo $p_item['plaatsnaam']; ?></td>
                    <td><?php echo $p_item['mobiele_telefoon']; ?></td>
                    <td><?php echo $p_item['mail']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<div class="row">
    <div class="col">
        <ul>
            <li><?php echo 'Naam: ' . $_POST['naam'] ?></li>
            <li><?php echo 'Achternaam: ' . $_POST['achternaam'] ?></li>
            <li><?php echo 'Geboortedatum: ' . $_POST['geboortedatum'] ?></li>
            <li><?php echo 'Straatnaam: ' . $_POST['straatnaam'] ?></li>
            <li><?php echo 'Plaatsnaam: ' . $_POST['plaatsnaam'] ?></li>
            <li><?php echo 'Mobiele telefoon: ' . $_POST['mobiele_telefoon'] ?></li>
            <li><?php echo 'mail: ' . $_POST['mail'] ?></li>
        </ul>
    </div>
</div>