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
    ['naam' => $_POST['naam']],
    ['achternaam' => $_POST['achternaam']],
    ['geboortedatum' => $_POST['geboortedatum']],
    ['straatnaam' => $_POST['straatnaam']],
    ['Plaatsnaam' => $_POST['plaatsnaam']],
    ['mobiele_telefoon' => $_POST['mobiele_telefoon']],
    ['mail' => $_POST['mail']],
];

$content = [
    ['reden_aanmelding' => $_POST['aanmeldingsreden']],
    ['bijzonderheden' => $_POST['bijzonderheden']],
];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
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