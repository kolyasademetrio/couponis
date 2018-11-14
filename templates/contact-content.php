<div class="mainScreen">
    <div class="container mainScreen__container">
        <div class="row mainScreen__row">
            <div class="col-xs-12 mainScreen__col">
                <div class="mainScreen__inner">
                    <div class="mainScreen__internalPages">
                        <div class="mainScreen__internalPages-title">Kontakt</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .siteBreadcrumbs -->
<?php Breadcrambs::render(['Startseite', 'Kontakt']); ?>
<!-- .siteBreadcrumbs End -->

<div class="container contact__container">
    <div class="row contact__row">
        <div class="col-xs-12 contact__col">
            <div class="contact__inner">
                <div class="contact__title">Kontaktformular</div>
                <div class="contact__formWrap">
                    <form id="contact_form" role="form" method="POST" action="/contact/guest">
                        <input name="_token" type="hidden" value="STdMocaOwPA8Q7RsonJBohXCiWqe0nPoaxHvd7nJ">
                        <div class="form-group-container">
                            <div class="custom-tabs">
                                <div class="form-details-group">
                                    <div class="form-group">
                                        <input id="form-control-first-name" type="text" data-first-name="first-name" class="form-control is_required form-control-first-name first-name-clearfix" placeholder="Nachname*" data-required="true" name="first_name" value="">
                                    </div>

                                    <div class="form-group">
                                        <input id="form-control-last-name" type="text" data-last-name="last-name" class="form-control" placeholder="Vorname*" name="last_name" value="">
                                    </div>

                                    <div class="form-group">
                                        <input id="form-control-email" type="text" class="form-control form-control-email email-clearfix" name="email" data-e-mail="email" placeholder="E-Mail*" value="" autofocus="">
                                    </div>
                                    <div class="form-group form-group-textarea">
                                        <textarea id="form-control-content" class="form-control form-control-content" data-content="content" placeholder="E-Mail-Inhalte" name="content" value=""></textarea>
                                    </div>
                                </div>

                                <div class="form-checkboxes-group">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="policy2" name="policy2" value="2">
                                            <span class="checkbox-custom"></span>
                                            <label for="policy2" class="terms_label">Ich habe die <a href="/public/privacyPolicy/" target="_blank">Datenschutzerklärung</a> gelesen und verstanden.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="policy" name="policy" value="3">
                                            <span class="checkbox-custom"></span>
                                            <label for="policy" class="terms_label">Ja, ich möchte den kostenlosen MC Capital Newsletter zugesendet bekommen. <a href="/public/privacyPolicy/" target="_blank">Die Einwilligung kann jederzeit widerrufen werden. Details zur Datenverarbeitung durch die MC Capital GmbH findest du in unserer Datenschutzerklärung.</a></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-buttons-group">
                                    <input class="button__yellow_50 send-form" type="submit" value="Absenden">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>