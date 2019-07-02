        <form action="process_form.php" method="get">
            <div class="row form-group">
                <div class="col">
                    <h2>Naamgegegevens</h2>
                    <p><label for="name">Name (4 to 8 characters):</label><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10"></p>
                    <p><label for="achternaam">Achternaam:</label><input type="text" class="form-control" id="achternaam" placeholder="Janssen" value="" required></p>
                    <p><label for="geboortedatum">Geboortedatum:</label><input type="date" class="form-control" id="geboortedatum" placeholder="15/02/1984" value="" required></p>
                </div>
                <div class="col">
                    <h2>Adresgegevens</h2>
                    <p><label for="straatnaam">Straatnaam, nummer:</label><input type="text" class="form-control" id="straatnaam" placeholder="" value="" required></p>
                    <p>Postcode,
                        <label for="plaats">Plaatsnaam:</label><input type="text" class="form-control" id="plaats" placeholder="Amsterdam" value="" required>
                    </p>
                </div>
                <div class="col">
                    <h2>Contactgegevens:</h2>
                    <p><label for="mobiele_telefoon">Mobiel Telefoonummer:</label><input type="mobile_number" class="form-control" id="mobiele_telefoon" placeholder="+31612345678" value="" required></p>
                    <p><label for="mail">E-mail:</label><input type="email" class="form-control" id="mail" placeholder="Johndoe@microsoft.com" value="" required></p>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <h2>Rooster</h2>
                    <h3>Maandag</h3>
                    <p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="maandag" id="maandagochtend" value="maandagochtend">
                            <label class="form-check-label" for="maandagochtend">ochtend</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="maandagmiddag" id="maandagmiddag" value="maandagmiddag">
                            <label class="form-check-label" for="maandagmiddag">middag</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="maandag_niet_beschikaar" id="maandag_niet_beschikbaar" value="maandag_niet_beschikaar" checked>
                            <label class="form-check-label" for="maandag_niet_beschikaar">Niet beschikbaar</label>
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
                        <input class="form-check-input" type="checkbox" name="dinsdag_niet_beschikbaar" id="dinsdag_niet_beschikbaar" value="dinsdag_niet_beschikbaar" checked>
                        <label class="form-check-label" for="dinsdag_niet_beschikbaar">Niet beschikbaar</label>
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
                            <input class="form-check-input" type="checkbox" name="woensdag_niet_beschikbaar" id="woensdag_niet_beschikbaar" value="woensdag_niet_beschikbaar" checked>
                            <label class="form-check-label" for="woensdag_niet_beschikbaar">Niet beschikbaar</label>
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
                            <input class="form-check-input" type="checkbox" name="donderdag_niet_beschikbaar" id="donderdag_niet_beschikbaar" value="donderdag_niet_beschikbaar" checked>
                            <label class="form-check-label" for="donderdag_niet_beschikbaar">Niet beschikbaar</label>
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
                            <input class="form-check-input" type="checkbox" name="vrijdag_niet_beschikbaar" id="vrijdag_niet_beschikbaar" value="vrijdag_niet_beschikbaar" checked>
                            <label class="form-check-label" for="vrijdag_niet_beschikbaar">Niet beschikbaar</label>
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
            <div class="row">&copy ICT maatwerk <?php echo date('Y'); ?></div>
        </form>