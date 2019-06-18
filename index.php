<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Inschrijfformulier - ICT-Maatwerk</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <!-- Start of form -->
            <h1>Inschrijfformulier</h1>
        </div>

        <!-- Adresgegevens client -->
        <div class="row">
            <div class="col">
                <h2>Naamgegegevens</h2>
                <p><label for="">Voornaam:</label><input type="text" class="form-control" id="voornaam" placeholder="" value="" required></p>
                <p><label for="">Achternaam:</label><input type="text" class="form-control" id="achternaam" placeholder="" value="" required></p>
                <p><label for="">Geboortedatum:</label><input type="date" class="form-control" id="geboortedatum" placeholder="" value="" required></p>
                <h2>Adresgegevens</h2>
                <p><label for="">Straatnaam, nummer</label><input type="text" class="form-control" id="adres" placeholder="" value="" required></p>
                <p>Postcode,
                    <label for="">Plaatsnaam.</label><input type="text" class="form-control" id="postcode" placeholder="" value="" required>
                </p>
                <h2>Contactgegevens:</h2>
                <p><label for="">Mobiel Telefoonummer:</label><input type="mobile_number" class="form-control" id="mobile_number" placeholder="Johndoe@microsoft.com" value="" required></p>
                <p><label for="">E-mail:</label><input type="email" class="form-control" id="mail" placeholder="Johndoe@microsoft.com" value="" required></p>
            </div>

            <div class="col">
                <h2>Persoonlijke gegevens:</h2>
                <label for="">Reden van aanmelding</label><input type="text" class="form-control" id="aanmeldingsreden" placeholder="" value="" required="">
                <!-- tekst vak wat vrij in te vullen is. -->
                <p>Rooster</p>
                <!-- checkmark vakjes met maandag, dinsdag, woensdag, donderdag, vrijdag. Ochtend en middag apart aan te vinken. -->
                <p>Opmerkingen</p>
                <!-- tekst vak wat vrij in te vullen is. -->
                <p> Verstuur knop om het formulier in te zenden.</p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>