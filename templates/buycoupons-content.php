<div class="mainScreen">
    <div class="container mainScreen__container">
        <div class="row mainScreen__row">
            <div class="col-xs-12 mainScreen__col">
                <div class="mainScreen__inner">
                    <div class="mainScreen__internalPages">
                        <div class="mainScreen__internalPages-title">COUPON KAUFEN</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .siteBreadcrumbs -->
<?php Breadcrambs::render(['Startseite', 'Coupon kaufen']); ?>
<!-- .siteBreadcrumbs End -->

<div class="container buycoupons__container">
    <div class="row buycoupons__row">
        <div class="col-xs-12 buycoupons__col">
            <div class="buycoupons__inner">
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
                                            <label for="policy1" class="terms_label">Mit meinem Kauf akzeptiere ich die <a target="_blank" href="#">AGB und Vertragsbedingungen</a> & Ich habe die <a href="#">Widerrufserklärung</a> gelesen und verstanden.</label>
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