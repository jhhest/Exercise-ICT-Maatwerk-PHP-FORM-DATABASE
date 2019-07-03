<?php

$rooster = [
    'maandag'   => ['ochtend' => true, 'middag' => true],
    'dinsdag'   => ['ochtend' => true, 'middag' => true],
    'woensdag'  => ['ochtend' => true, 'middag' => true],
    'donderdag' => ['ochtend' => true, 'middag' => true],
    'vrijdag'   => ['ochtend' => true, 'middag' => true],
];

$personalia = [
    ['naam' => $_GET['naam']],
    ['achternaam' => $_GET['achternaam']],
    ['geboortedatum' => $_GET['geboortedatum']],
    ['straatnaam' => $_GET['straatnaam']],
    ['Plaatsnaam' => $_GET['plaatsnaam']],
    ['mobiele_telefoon' => $_GET['mobiele_telefoon']], 
    ['mail' => $_GET['mail']],
];

$content = [
    ['reden_aanmelding' => $_GET['aanmeldingsreden']],
    ['bijzonderheden' => $_GET['bijzonderheden']],
]
?>
<pre>
<?php
print_r($rooster);  // print_r means print readable (the <pre> tags are used to give indentation)
print_r($personalia);
print_r($content);

?>
</pre>

<div class="row">
    <!-- Displaying result of submitted application form -->
    <h1>Aanmelding verwerkt</h1>
</div>
<div class="row">
    <div class="col">
        <ul>
            <li><?php echo 'Naam: ' . $_GET['naam'] ?></li>
            <li><?php echo 'Achternaam: ' . $_GET['achternaam'] ?></li>
            <li><?php echo 'Geboortedatum: ' . $_GET['geboortedatum'] ?></li>
            <li><?php echo 'Straatnaam: ' . $_GET['straatnaam'] ?></li>
            <li><?php echo 'Plaatsnaam: ' . $_GET['plaatsnaam'] ?></li>
            <li><?php echo 'Mobiele telefoon: ' . $_GET['mobiele_telefoon'] ?></li>
            <li><?php echo 'mail: ' . $_GET['mail'] ?></li>
        </ul>
    </div>
</div>