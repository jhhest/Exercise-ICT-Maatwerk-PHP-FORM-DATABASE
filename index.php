<?php 

?><!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Inschrijfformulier - ICT-Maatwerk</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <!-- Start of form -->
            <h1>Inschrijfformulier</h1>
        </div>

        <!-- Adresgegevens client -->
        <form>
            <div class="row form-group">
                <div class="col">
                    <h2>Naamgegegevens</h2>
                    <p><label for="">Voornaam:</label><input type="text" class="form-control" id="voornaam" placeholder="Jan" value="" required></p>
                    <p><label for="">Achternaam:</label><input type="text" class="form-control" id="achternaam" placeholder="Janssen" value="" required></p>
                    <p><label for="">Geboortedatum:</label><input type="date" class="form-control" id="geboortedatum" placeholder="15/02/1984" value="" required></p>
                </div>
                <div class="col">
                    <h2>Adresgegevens</h2>
                    <p><label for="">Straatnaam, nummer</label><input type="text" class="form-control" id="adres" placeholder="" value="" required></p>
                    <p>Postcode,
                        <label for="">Plaatsnaam.</label><input type="text" class="form-control" id="postcode" placeholder="" value="" required>
                    </p>
                </div>
                <div class="col">
                    <h2>Contactgegevens:</h2>
                    <p><label for="">Mobiel Telefoonummer:</label><input type="mobile_number" class="form-control" id="mobile_number" placeholder="+31612345678" value="" required></p>
                    <p><label for="">E-mail:</label><input type="email" class="form-control" id="mail" placeholder="Johndoe@microsoft.com" value="" required></p>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <h2>Rooster</h2>
                    <h3>Maandag</h3>
                    <p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="maandag" id="maandagochtend" value="ochtend">
                            <label class="form-check-label" for="ochtend">ochtend</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="maandag" id="maandagmiddag" value="middag">
                            <label class="form-check-label" for="middag">middag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="na" id="na" value="na" checked>
                            <label class="form-check-label" for="na">Niet beschikbaar</label>
                        </div>
                    </p>

                    <h3>dinsdag</h3>
                    <p></p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="dinsdag" id="dinsdagochtend" value="ochtend">
                        <label class="form-check-label" for="ochtend">ochtend</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="dinsdag" id="dinsdagmiddag" value="middag">
                        <label class="form-check-label" for="middag">middag</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="na" id="na" value="na" checked>
                        <label class="form-check-label" for="na">Niet beschikbaar</label>
                    </div>
                    </p>

                    <h3>Woensdag</h3>
                    <p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="woensdag" id="woensdagochtend" value="ochtend">
                            <label class="form-check-label" for="ochtend">ochtend</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="woensdag" id="woensdagmiddag" value="middag">
                            <label class="form-check-label" for="middag">middag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="na" id="na" value="na" checked>
                            <label class="form-check-label" for="na">Niet beschikbaar</label>
                        </div>
                    </p>
                    <h3>Donderdag</h3>
                    <p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="donderdag" id="donderdagochtend" value="ochtend">
                            <label class="form-check-label" for="ochtend">ochtend</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="donderdag" id="donderdagmiddag" value="middag">
                            <label class="form-check-label" for="middag">middag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="donderdag" id="na" value="na" checked>
                            <label class="form-check-label" for="na">Niet beschikbaar</label>
                        </div>
                    </p>
                    <h3>Vrijdag</h3>
                    <p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="vrijdag" id="vrijdagochtend" value="ochtend">
                            <label class="form-check-label" for="ochtend">ochtend</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="vrijdag" id="vrijdagmiddag" value="middag">
                            <label class="form-check-label" for="middag">middag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="vrijdag" id="na" value="na" checked>
                            <label class="form-check-label" for="na">Niet beschikbaar</label>
                        </div>
                    </p>
                    <!-- checkmark vakjes met maandag, dinsdag, woensdag, donderdag, vrijdag. Ochtend en middag apart aan te vinken. -->
                    <p> Verstuur knop om het formulier in te zenden.</p>
                </div>
                <div class="col">
                    <h2>Persoonlijke gegevens:</h2>
                    <p><label for="">Reden van aanmelding</label><input type="text" class="form-control" id="aanmeldingsreden" placeholder="" value="" required=""></p>
                    <!-- tekst vak wat vrij in te vullen is. -->
                    <!-- tekst vak wat vrij in te vullen is. -->
                    <p><label for="opmerkingen">opmerkingen</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea></p>
                    <p><button type="submit" class="btn btn-primary">Submit</button></p>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>