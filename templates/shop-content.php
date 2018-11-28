<div class="mainScreen">
    <div class="container mainScreen__container">
        <div class="row mainScreen__row">
            <div class="col-xs-12 mainScreen__col">
                <div class="mainScreen__inner">
                    <div class="mainScreen__internalPages">
                        <div class="mainScreen__internalPages-title">Coupon kaufen</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .siteBreadcrumbs -->
<?php Breadcrambs::render(['Startseite', 'Kaufe Coupons']); ?>
<!-- .siteBreadcrumbs End -->

<div class="exchangeShop">
    <div class="container exchangeShop__container">
        <div class="row exchangeShop__row">
            <div class="col-xs-12 exchangeShop__col">
                <div class="exchangeShop__inner">
                    <ul class="couponing__exchangeItems two">
                        <li class="couponing__exchangeItem">
                            <div class="couponing__exchangeItemInner">
                                <img src="images/sun.png" alt="In Sonnenbeteiligungen">
                                <div class="couponing__exchangeItemTitle">In Sonnenbeteiligungen</div>
                                <div class="couponing__exchangeItemContent">
                                    <div>Löse deine Coupons gegen eine Sonnenbeteiligung ein.</div>
                                    <div>Aktuelles Angebot: 1 Sonnenpanel</div>
                                    <div>Laufzeit: 15 Jahre</div>
                                    <div>Preis: 700€ oder 1 Coupon</div>
                                    <div>Mietertrag monatlich: 6,75€</div>
                                    <div>(je nach Paketart bis zu + 10%)</div>
                                </div>
                                <div class="couponing__BtnWrap">
                                    <a href="#" class="button__yellow_50">Mehr informationen</a>
                                </div>
                            </div>
                        </li>
                        <li class="couponing__exchangeItem">
                            <div class="couponing__exchangeItemInner">
                                <img src="images/beta.png" alt="In eigene Miner, die von uns betreut werden">
                                <div class="couponing__exchangeItemTitle">Mining</div>
                                <div class="couponing__exchangeItemContent">
                                    <div>Wir setzen hier auf Miner der neuen Generation!</div>
                                    <div>Wichtig ist, welchen oder wie viele Algorithmen der Miner rechnen kann!Auch</br> ist ein niedriger Stromverbrauch wichtig.</div>
                                    <div>Und natürlich der Miningertrag muss attraktiv sein!</div>
                                </div>
                                <div class="couponing__BtnWrap">
                                    <a href="#" class="button__yellow_50">Mehr informationen</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="exchangeShop__btnWrap">
                        <a href="#formPopup" class="button__yellow_50 button__height__82 formPopupLink">Ich bin interessiert, brauche jedoch noch mehr Infos.</a>
                        <div id="formPopup" class="mfp-hide">
                            <div class="buycoupons__title">Kontaktformationen</div>
                            <div class="buycoupons__formWrap">
                                <form id="regform1" role="form" method="POST" action="https://couponis.com/register/guest">
                                    <input type="hidden" name="_token" value="Tfr5xwT8XSf8fKtMmi5rm0PcOG5az5i0hhh9LaCO">

                                    <div class="custom-tabs">
                                        <div class="form-details-group-container">
                                            <div class="form-details-group">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="First name*" name="last_name" value="" autofocus="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control is_required" placeholder="Last name*" data-required="true" name="first_name" value="" autofocus="">
                                                </div>


                                                <div class="form-group">
                                                    <input id="new-email1" type="text" class="form-control" name="email" data-email="true" placeholder="E-mail*" value="" autofocus="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="username" placeholder="User Name*" value="" autofocus="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="mobilephone" data-phone="true" placeholder="Mobile phone" value="" autofocus="">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="email_confirmation" data-match="new-email" placeholder="Confirm E-mail*" value="" autofocus="">
                                                </div>

                                                <div class="form-group form-group-invitation-code">
                                                    <input id="invitation-code" type="text" class="form-control" name="invitation_code" placeholder="Invitation code" value="">
                                                </div>
                                            </div>

                                            <div class="form-checkboxes-group">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="policy1" name="policy1" value="2">
                                                        <span class="checkbox-custom"></span>
                                                        <label for="policy1" class="terms_label">Mit meinem Kauf akzeptiere ich die <a target="_blank" href="#">AGB und Vertragsbedingungen</a> &amp; Ich habe die <a href="#">Widerrufserklärung</a> gelesen und verstanden.</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="policy2" name="policy2" value="3">
                                                        <span class="checkbox-custom"></span>
                                                        <label for="policy2" class="terms_label">Ich habe die <a target="_blank" href="#">Datenschutzerklärung</a> gelesen und verstanden.</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="policy3" name="policy3" value="3">
                                                        <span class="checkbox-custom"></span>
                                                        <label for="policy3" class="terms_label">Ja, ich möchte den kostenlosen MC Capital Newsletter zugesendet bekommen. <a target="_blank" href="#">Die Einwilligung kann jederzeit widerrufen werden. Details zur Datenverarbeitung durch die MC Capital GmbH findest du in unserer Datenschutzerklärung.</a></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-buttons-group">
                                                <button type="button" class="button__yellow_50 create-account">CREATE AN ACCOUNT</button>
                                                <button type="button" class="button__yellow_50 back">Back</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tutorial">
    <div class="container tutorial__container">
        <div class="row tutorial__row">
            <div class="col-xs-12 tutorial__col">
                <div class="tutorial__inner">
                    <div class="tutorial__linkWrap">
                        <a href="https://www.youtube.com/watch?v=6NFuL6G-nc4&feature=youtu.be" class="tutorial__link" target="_blank">
                            <span class="tutorial__linkIconWrap">
                                <span class="tutorial__linkIcon"></span>
                            </span>
                            <span class="tutorial__linkText">Tutorial Video Registrierung</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offers">
    <div class="container offers__container">
        <div class="row offers__row">
            <div class="col-xs-12 offers__col">
                <div class="offers__inner">
                    <div class="offers__title">Starte mit dem Kauf oder Anzahlung unserer Coupons!</div>
                    <div class="offers__wrapper">
                        <div class="offers__sidebar">
                            <ul class="offers__sidebarList">
                                <li class="offers__sidebarListItem"></li>
                                <li class="offers__sidebarListItem"><span>Coupon Anzahlen:</span></li>
                                <li class="offers__sidebarListItem"><span>Coupon Anzahl:</span></li>
                                <li class="offers__sidebarListItem"><span>Coupon Sofort kaufen:</span></li>
                                <li class="offers__sidebarListItem"><span>Rabatt/Ersparnis:</span></li>
                                <li class="offers__sidebarListItem"><span>Zusätzlicher Bonus:</span></li>
                                <li class="offers__sidebarListItem"></li>
                            </ul>
                        </div>

                        <div class="offers__listWrap">
                            <ul class="offers__list">
                                <li class="offers__listItem">
                                    <ul class="offers__offersList">
                                        <li class="offers__offersListItem">
                                            <span class="underline">Easy Paket</span>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="priceType">
                                                <div class="price">210 €</div>
                                                <div class="type">Anzahlung</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="number">7+7 completed</div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="buynow">
                                                <div class="buyAlert">Sofortkauf!</div>
                                                <div class="priceSumm">2.275.00 €</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="discountSumm">
                                                <ul class="discount">
                                                    <li>1. Coupon <span class="bold">105,00 €</span></li>
                                                    <li>2. Coupons: a <span class="bold">35,00 €</span></li>
                                                </ul>
                                                <div class="summ">Insgesamt: <span class="bold">175, 00 €</span> Rabatt</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="bonus"></div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <a href="#" class="offers__link button__yellow_50 button__height__60">Angebot wahlen</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="offers__listItem">
                                    <ul class="offers__offersList">
                                        <li class="offers__offersListItem">
                                            <span class="underline">Plus Paket</span>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="priceType">
                                                <div class="price">490 €</div>
                                                <div class="type">Anzahlung</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="number">7+7 completed</div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="buynow">
                                                <div class="buyAlert">Sofortkauf!</div>
                                                <div class="priceSumm">5.215.00 €</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="discountSumm">
                                                <ul class="discount">
                                                    <li>1. Coupon <span class="bold">105,00 €</span></li>
                                                    <li>2. Coupons: a <span class="bold">35,00 €</span></li>
                                                </ul>
                                                <div class="summ">Insgesamt: <span class="bold">175, 00 €</span> Rabatt</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="bonus"><span class="bold">+5%</span> mehr Miningertag<br> fur jedes getauschete Minigpaket</div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <a href="#" class="offers__link button__yellow_50 button__height__60">Angebot wahlen</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="offers__listItem">
                                    <ul class="offers__offersList">
                                        <li class="offers__offersListItem">
                                            <span class="underline">Profi Paket</span>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="priceType">
                                                <div class="price">1050 €</div>
                                                <div class="type">Anzahlung</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="number">15+15 completed</div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="buynow">
                                                <div class="buyAlert">Sofortkauf!</div>
                                                <div class="priceSumm">11.025.00 €</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="discountSumm">
                                                <ul class="discount">
                                                    <li>1. Coupon <span class="bold">105,00 €</span></li>
                                                    <li>2. Coupons: a <span class="bold">35,00 €</span></li>
                                                </ul>
                                                <div class="summ">Insgesamt: <span class="bold">175, 00 €</span> Rabatt</div>
                                            </div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <div class="bonus"><span class="bold">+5%</span> mehr Miningertag<br> fur jedes getauschete Minigpaket</div>
                                        </li>
                                        <li class="offers__offersListItem">
                                            <a href="#" class="offers__link button__yellow_50 button__height__60">Angebot wahlen</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="offers__tip">*Coupons enthalten keine MWST. Du bekommst eine Zahlungsbestätigung über den Ankauf. MWST fällt erst bei Einlösung an.<br> Die Couponanzahlungen haben eine Gültigkeit von sechs Monaten ab Zahlung.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>