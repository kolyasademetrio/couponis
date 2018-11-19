<!-- Этот скрипт на проде и тесте НЕ НУЖЕН (используется ТОЛЬКО для верстки) -->
<?php
$dir = './templates';
$files = [];

if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            $path_parts = pathinfo($entry);
            $filename = $path_parts['filename'];

            if (preg_match('/-content/', $filename)) {
                $page_name = str_replace('-content', '', $filename);

                $files[] = $page_name;
            }
        }
    }
    closedir($handle);

    function array_equal($a, $b) {
        return (
            is_array($a)
            && is_array($b)
            && count($a) == count($b)
            && array_diff($a, $b) === array_diff($b, $a)
        );
    }

    $allpages = array_keys($pages);

//    if ( array_equal( $files, $allpages ) ){
        ?>
        <script>
            var slags = <?php echo json_encode($allpages) ?>;

            (function(){

                var div = document.createElement('div'),
                    divID = 'all_pages_dev';
                div.className = divID;
                div.id = divID;
                var ul = document.createElement('ul');
                div.appendChild(ul);
                var header = document.getElementById('header');
                header.appendChild(div);

                slags.forEach(function(item, i, arr){
                    var params = '/?p=' + item;

                    var li = document.createElement('li');

                    var link = document.createElement('a');
                    link.setAttribute('href', params);
                    link.innerHTML = item;
                    li.appendChild(link);

                    ul.appendChild(li);
                });

                var css = '.all_pages_dev{' +
                        'position:fixed;' +
                        'top:0;' +
                        'left:0;' +
                        'z-index:9999;' +
                        'padding-top: 10px;' +
                        'cursor: not-allowed;' +
                        'min-width:10px; ' +
                        '}' +
                        '.all_pages_dev>ul{' +
                        'display:none;' +
                        'background:#fff;' +
                        'padding:5px;' +
                        '}' +
                        '.all_pages_dev>ul>li{' +
                        'border-bottom: 1px solid #000;' +
                        '}' +
                        '.all_pages_dev>ul>li>a{' +
                        'padding: 5px;' +
                        'display: block;' +
                        'line-height: 28px;' +
                        'white-space: no-wrap;' +
                        '}' +
                        '.all_pages_dev>ul>li>a:hover{' +
                        'background-color:#369;' +
                        'color:#fff;' +
                        '}',
                    style = document.createElement('style');

                style.type = 'text/css';
                if (style.styleSheet){
                    style.styleSheet.cssText = css;
                } else {
                    style.appendChild(document.createTextNode(css));
                }
                div.appendChild(style);

                document.addEventListener('click', function(e){
                    if (e.target && e.target.id == divID) {
                        $(e.target).find('ul').slideToggle();
                    }
                });
            })(slags);
        </script>


        <script>

            (function(){
                var buttonUp = document.createElement('a');
                buttonUp.href = '#header';
                buttonUp.className = 'buttonUp';
                buttonUp.innerText = 'Button up';

                document.body.appendChild(buttonUp);

                var cssButton = '.buttonUp {' +
                    'position:fixed;' +
                    'background-color:#fedb2d;' +
                    'border-radius:20px;' +
                    'line-height:1.4;' +
                    'padding:0 20px;' +
                    'text-transform:uppercase;' +
                    'color:white;' +
                    'font-family:sans-serif;' +
                    'bottom:20px;' +
                    'right:20px;' +
                    'z-index:99999;' +
                    'font-size:.8rem;' +
                    '}' +
                    '.buttonUp:hover,' +
                    '.buttonUp:focus,' +
                    '.buttonUp:focus:active{' +
                    'color:white;' +
                    '}';

                var styleButton = document.createElement('style');
                styleButton.type = 'text/css';

                if ( styleButton.styleSheet ) {
                    styleButton.styleSheet.cssText = cssButton;
                } else {
                    styleButton.appendChild(document.createTextNode(cssButton));
                }
                buttonUp.appendChild(styleButton);
            })();
        </script>
        <?php
    /*}*/
}
?>
<!-- Этот скрипт на проде и тесте НЕ НУЖЕН (используется ТОЛЬКО для верстки) End -->
