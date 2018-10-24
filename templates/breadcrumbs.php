<?php
class Breadcrambs
{
    public static $startwrap = '<div class="siteBreadcrumbs">
                            <div class="container siteBreadcrumbs__container">
                                <div class="row siteBreadcrumbs">
                                    <div class="col-xs-12 siteBreadcrumbs__innerItem">
                                        <div class="siteBreadcrumbs__inner">
        
                                            <ul class="breadcrumb">';

    public static $endwrap =               '</ul>
                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

    static function render($arr){

        $numItems = count($arr);
        $i = 1;

        echo self::$startwrap;
        foreach( $arr as $breadcrambsitem ) {

            if ( $i == 1 ) {
                echo '<li><a href="/?p=main">' . $breadcrambsitem . '</a></li>';
            } else if ($i === $numItems) {
                echo '<li class="active">' . $breadcrambsitem . '</li>';
            } else {
                echo '<li><a href="#">' . $breadcrambsitem . '</a></li>';
            }

            $i++;
        }
        echo self::$endwrap;
    }
}