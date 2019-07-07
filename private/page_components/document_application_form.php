<!-- Start of registration form -->
            <div class="row">
                <h1>Inschrijfformulier</h1>
            </div>
        
        
            <form action="process_form.php" method="post">
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
                                    <input type="hidden" name="maandagochtend" value="0"><input class="form-check-input" type="checkbox" name="maandagochtend" id="maandagochtend" value="1">
                                    <label class="form-check-label" for="maandagochtend">ochtend</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="maandagmiddag" value="0"><input class="form-check-input" type="checkbox" name="maandagmiddag" id="maandagmiddag" value="1">
                                    <label class="form-check-label" for="maandagmiddag">middag</label>
                                </div>
                        </p>

                        <h3>dinsdag</h3>
                        <p>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="dinsdagochtend" value="0"><input class="form-check-input" type="checkbox" name="dinsdagochtend" id="dinsdagochtend" value="1">
                                    <label class="form-check-label" for="ochtend">ochtend</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="hidden" name="dinsdagmiddag" value="0"><input class="form-check-input" type="checkbox" name="dinsdagmiddag" id="dinsdagmiddag" value="1">
                                    <label class="form-check-label" for="middag">middag</label>
                                </div>
                        </p>

                        <h3>Woensdag</h3>
                        <p>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="woensdagochtend" value="0"><input class="form-check-input" type="checkbox" name="woensdagochtend" id="woensdagochtend" value="1">
                                <label class="form-check-label" for="ochtend">ochtend</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="woensdagmiddag" value="0"><input class="form-check-input" type="checkbox" name="woensdagmiddag" id="woensdagmiddag" value="1">
                                <label class="form-check-label" for="middag">middag</label>
                            </div>
                        </p>
                        
                        <h3>Donderdag</h3>
                        <p>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="donderdagochtend" value="0"><input class="form-check-input" type="checkbox" name="donderdagochtend" id="donderdagochtend" value="1">
                                <label class="form-check-label" for="ochtend">ochtend</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="donderdagmiddag" value="0"><input class="form-check-input" type="checkbox" name="donderdagmiddag" id="donderdagmiddag" value="1">
                                <label class="form-check-label" for="middag">middag</label>
                            </div>
                        </p>

                        <h3>Vrijdag</h3>
                        <p>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="vrijdagochtend" value="0"><input class="form-check-input" type="checkbox" name="vrijdagochtend" id="vrijdagochtend" value="1">
                                <label class="form-check-label" for="ochtend">ochtend</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="hidden" name="vrijdagmiddag" value="0"><input class="form-check-input" type="checkbox" name="vrijdagmiddag" id="vrijdagmiddag" value="1">
                                <label class="form-check-label" for="middag">middag</label>
                            </div>
                        </p>
                    </div>
                    <!-- Personal Data -->
                    <div class="col">
                        <h2>Persoonlijke gegevens:</h2>
                        <p><label for="">Reden van aanmelding</label><input type="text" class="form-control" id="aanmeldingsreden" placeholder="" value="" required name="aanmeldingsreden"></p>
                        <p><label for="opmerkingen">opmerkingen</label><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="bijzonderheden"></textarea></p>
                        <input type=hidden value='processed_form' name="navigation"> <!-- name=navigation -> $_POST[navigation] can be used to track when submit button is used. -->
                        <p><button type="submit" class="btn btn-primary">Verstuur</button></p>
                    </div>
                </div>
            </form>