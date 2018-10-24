<div class="mainScreen">
    <div class="container mainScreen__container">
        <div class="row mainScreen__row">
            <div class="col-xs-12 mainScreen__col">
                <div class="mainScreen__inner">
                    <div class="mainScreen__internalPages">
                        <div class="mainScreen__internalPages-title">NEUIGKEITEN</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- .siteBreadcrumbs -->
<?php Breadcrambs::render(['Startseite', 'Neuigkeiten']); ?>
<!-- .siteBreadcrumbs End -->

<div class="container news__container">
    <div class="row news__row">
        <div class="col-xs-12 news__col">
            <div class="news__inner">
                <div class="news__content">
                    <ul class="news__newsList">

                        <li class="news__newsItem">
                            <a href="" class="news__imgWrap">
                                <img src="images/news/1.jpg" alt="" class="news__img">
                            </a>
                            <a href="" class="news__title">Ankündigung Top Veranstaltung!</a>
                            <div class="news__metaWrap">
                                <div class="news__date">05 Sep 2018</div>
                                <div class="news__category">Live Meetings</div>
                            </div>
                            <div class="news__excerpt">Hallo liebe Couponier, wie ich schon immer sag  te, dass wir wahrscheinlich die besten Mining Angebote haben, dass hat sich
                                heute wieder mal bestätigt. Heute habe ich beim wohl...</div>
                            <div class="news__btnWrap">
                                <a href="" class="news__readMore button__yellow_50">Read more</a>
                            </div>
                        </li>

                        <li class="news__newsItem">
                            <a href="" class="news__imgWrap">
                                <img src="images/news/2.jpg" alt="" class="news__img">
                            </a>
                            <a href="" class="news__title">Gecknackt!</a>
                            <div class="news__metaWrap">
                                <div class="news__date">05 Sep 2018</div>
                                <div class="news__category">Live Meetings</div>
                            </div>
                            <div class="news__excerpt">Seit 4 Monate sind wir nun Online und Heute war es nun soweit! User Peter Mc Coin hat das tägliche Maximum
                                von 5 Coupons geknackt! Wann knackt es bei Dir?-)</div>
                            <div class="news__btnWrap">
                                <a href="" class="news__readMore button__yellow_50">Read more</a>
                            </div>
                        </li>

                        <li class="news__newsItem">
                            <a href="" class="news__imgWrap">
                                <img src="images/news/3.jpg" alt="" class="news__img">
                            </a>
                            <a href="" class="news__title">August News</a>
                            <div class="news__metaWrap">
                                <div class="news__date">05 Sep 2018</div>
                                <div class="news__category">Live Meetings</div>
                            </div>
                            <div class="news__excerpt">Liebe CouponisfreundeInnen! Es hat sich wieder einiges getan! Neue Softwarefirma: Wir haben den Wechsel zu einen neuem, kompetenteren Softwareteam vollzogen.Eine Firma...</div>
                            <div class="news__btnWrap">
                                <a href="" class="news__readMore button__yellow_50">Read more</a>
                            </div>
                        </li>

                    </ul>

                    <!-- pagination -->
                    <?php include 'templates/pagination.php'; ?>
                    <!-- pagination End -->
                </div>

                <div class="news__sidebar">
                    <div class="news__categories">
                        <div class="news__catTitle">Kategorien</div>
                        <ul class="news__catList">
                            <li class="news__catListItem">
                                <a href="#" class="news__catLink">Fotos-Videos</a>
                            </li>
                            <li class="news__catListItem">
                                <a href="#" class="news__catLink">Live Meetings</a>
                            </li>
                            <li class="news__catListItem">
                                <a href="#" class="news__catLink">News</a>
                            </li>
                            <li class="news__catListItem">
                                <a href="#" class="news__catLink">Mining Vergleich</a>
                            </li>
                        </ul>
                    </div>

                    <div class="news__related">
                        <div class="news__relatedTitle">Aktuelle posts</div>
                        <ul class="news__relatedList">
                            <li class="news__relatedListItem">
                                <a href="" class="news__relatedimgWrap">
                                    <img src="images/news/2.jpg" alt="" class="news__relatedimg">
                                </a>
                                <a href="" class="news__relatedtitle">Gecknackt!</a>
                                <div class="news__relatedmetaWrap">
                                    <div class="news__relateddate">05 Sep 2018</div>
                                    <div class="news__relatedcategory">Live Meetings</div>
                                </div>
                            </li>

                            <li class="news__relatedListItem">
                                <a href="" class="news__relatedimgWrap">
                                    <img src="images/news/2.jpg" alt="" class="news__relatedimg">
                                </a>
                                <a href="" class="news__relatedtitle">Gecknackt!</a>
                                <div class="news__relatedmetaWrap">
                                    <div class="news__relateddate">05 Sep 2018</div>
                                    <div class="news__relatedcategory">Live Meetings</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>