<!-- Start of registration form -->
<form action="process_form.php" method="post">

    <div class="row">
        <h1>Inschrijfformulier</h1>
    </div>

    <div class="row form-group">

        <!-- name information -->
        <div class="col">
            <h2>Naamgegegevens</h2>
            <p><label for="naam">naam:</label><input type="text" class="form-control" id="naam" name="naam" placeholder="Jan" required></p>
            <p><label for="achternaam">Achternaam:</label><input type="text" class="form-control" id="achternaam" placeholder="Janssen" name="achternaam" required></p>
            <p><label for="geboortedatum">Geboortedatum:</label><input type="date" class="form-control" id="geboortedatum" placeholder="15/02/1984" name="geboortedatum" required></p>
        </div>

        <!-- Adress data -->
        <div class="col">
            <h2>Adresgegevens</h2>
            <p><label for="straatnaam">Straatnaam, nummer:</label><input type="text" class="form-control" id="straatnaam" placeholder="Mozartstraat" name="straatnaam" required></p>
            <p>Postcode,
                <label for="plaats">Plaatsnaam:</label><input type="text" class="form-control" id="plaats" placeholder="Amsterdam" name="plaatsnaam" required>
            </p>
        </div>

        <div class="col">
            <!-- Contact Details -->
            <h2>Contactgegevens:</h2>
            <p><label for="mobiele_telefoon">Mobiel Telefoonummer:</label><input type="tel" class="form-control" id="mobiele_telefoon" placeholder="+31612345678" name="mobiele_telefoon" required></p>
            <p><label for="mail">E-mail:</label><input type="email" class="form-control" id="mail" placeholder="Johndoe@microsoft.com" name="mail" required></p>
        </div>
    </div>

    <div class="row form-group">
        <div class="col">
            <!-- Schedule -->
            <h2>Rooster</h2>
            <h3>Maandag</h3>
            <p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="maandagochtend" id="maandagochtend" value="maandagochtend">
                    <label class="form-check-label" for="maandagochtend">ochtend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="maandagmiddag" id="maandagmiddag" value="maandagmiddag">
                    <label class="form-check-label" for="maandagmiddag">middag</label>
                </div>
            </p>

            <h3>dinsdag</h3>
            <p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="dinsdagochtend" id="dinsdagochtend" value="dinsdagochtend">
                    <label class="form-check-label" for="ochtend">ochtend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="dinsdagmiddag" id="dinsdagmiddag" value="dinsdagmiddag">
                    <label class="form-check-label" for="middag">middag</label>
                </div>
            </p>

            <h3>Woensdag</h3>
            <p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="woensdagochtend" id="woensdagochtend" value="woensdagochtend">
                    <label class="form-check-label" for="ochtend">ochtend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="woensdagmiddag" id="woensdagmiddag" value="woensdagmiddag">
                    <label class="form-check-label" for="middag">middag</label>
                </div>
            </p>
            <h3>Donderdag</h3>
            <p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="donderdagochtend" id="donderdagochtend" value="donderdagochtend">
                    <label class="form-check-label" for="ochtend">ochtend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="donderdagmiddag" id="donderdagmiddag" value="donderdagmiddag">
                    <label class="form-check-label" for="middag">middag</label>
                </div>
            </p>

            <h3>Vrijdag</h3>
            <p>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vrijdagochtend" id="vrijdagochtend" value="vrijdagochtend">
                    <label class="form-check-label" for="ochtend">ochtend</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vrijdagmiddag" id="vrijdagmiddag" value="vrijdagmiddag">
                    <label class="form-check-label" for="middag">middag</label>
                </div>
            </p>
        </div>
        <!-- Personal Data -->
        <div class="col">
            <h2>Persoonlijke gegevens:</h2>
            <p><label for="">Reden van aanmelding</label><input type="text" class="form-control" id="aanmeldingsreden" placeholder="" value="" required name="aanmeldingsreden"></p>
            <p><label for="opmerkingen">opmerkingen</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bijzonderheden"></textarea></p>
            <input type=hidden value='processed_form' name="navigation">
            <p><button type="submit" class="btn btn-primary">Verstuur</button></p>
        </div>
    </div>
</form>