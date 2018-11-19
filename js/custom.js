jQuery(document).ready(function($){


	/* ------------------------>>> Прижать футер к низу <<<------------------------------------------------- */
	(function(){

		footer();

		$(window).resize(function() {
			footer();
		});

		function footer() {
			var docHeight = $(window).height(),
				footerHeight = $('footer').outerHeight(),
				footerBottom = $('footer').position().top + footerHeight;

			if ( footerBottom < docHeight ) {
				$('footer').css('margin-top', (docHeight - footerBottom) + 'px');
			}
		}

	})();
	/* ------------------------>>> Прижать футер к низу End <<<--------------------------------------------- */



	/* ------------------------>>> Настройка отступа под шапку <<<------------------------------------------------- */
	function setHeaderMarginTop(){
		if ( $('header.header').length ) {
			var headerHeight = $('header.header:visible').length ? $('header.header').innerHeight() : 0;
			
			$('.mainScreen').css({
				'padding-top': headerHeight,
			});
		}
	}

	$(window).on('load', function(){
		setTimeout(function(){
			setHeaderMarginTop();
		}, 500);
	});

	$(window).resize(function(){
		setHeaderMarginTop();
	});
	/* ------------------------>>> Настройка отступа под шапку End <<<------------------------------------------------- */



	/* ------------------------>>> Липкая шапка <<<------------------------------------------------- */
	(function () {
		if ( $('.headerBottom').length ) {
			var $headerBottom = $('.headerBottom'),
				headerBottomPosition = $headerBottom.offset().top;

			function stickyHeaderBottom() {
				if (window.pageYOffset >= headerBottomPosition) {
					$headerBottom.addClass('sticky');
				} else {
					$headerBottom.removeClass('sticky');
					setHeaderMarginTop();
				}
			}

			/*$(window).on('load', function () {
				stickyHeaderBottom();
			});*/

			stickyHeaderBottom();

			window.onscroll = function () {
				stickyHeaderBottom();
			};
		}
	})();
	/* ------------------------>>> Липкая шапка End <<<------------------------------------------------- */



	/*--------------------------------- функция для выравнивания высоты колонок -------------------------*/

	(function(){
		var listItemsLength = $('.offers__listItem:first-child .offers__offersListItem').length,
			nthsArr = new Array( listItemsLength );
		
		function setMaxHeight( elem ) {
			var $elem = $('.' + elem),
				arrAllHeight = [],
				maxHeight;
			
			$elem.each(function(){
				arrAllHeight.push($(this).height());
			});

			maxHeight = Math.max.apply(null, arrAllHeight);
			
			$elem.height(maxHeight);
		}

		function setMaxHeightSidebarItems(){
			$('.offers__listItem:first-child .offers__offersListItem').each(function(i, elem){
				var thisHeight = $(this).outerHeight(),
					className = '.offers__sidebarListItem:nth-child('+(i+1)+')';
				
				$( className ).height( thisHeight );
			});
		}

		function setMaxHeightChecklistItems(){
			
			var $elems = $('.checklist__cell:nth-child(1)');

			var checklistItemsLength = $('.checklist__sidebarCol .checklist__cell').length,
				nthsArr = new Array( checklistItemsLength );

			for(var i=2; i<=nthsArr.length; i++){
				var $elem_i = $('.checklist__cell:nth-child('+i+')');

				function setMaxHeight(elem) {
					var $elem = elem,
						arrAllHeight = [],
						maxHeight;

					$elem.each(function(){
						arrAllHeight.push($(this).outerHeight());
					});

					maxHeight = Math.max.apply(null, arrAllHeight);

					$elem.css({
						'height': maxHeight + 'px',
					});
				}

				setMaxHeight($elem_i);
			}
		}

		function setAllMaxHeight(arr){
			for(var i=0; i<arr.length; i++){
				var className = 'offers__offersListItem:nth-child('+(i+1)+')';

				setMaxHeight( className );
			}
		}



		$(window).on('load', function () {
			
			setMaxHeightChecklistItems();

			if ( $(window).width() > 319 ) {
				setAllMaxHeight( nthsArr );
				setMaxHeightSidebarItems();
			}
		});

		$(window).resize(function(){

			setMaxHeightChecklistItems();


			if ( $(window).width() > 319 ) {
				setAllMaxHeight( nthsArr );
				setMaxHeightSidebarItems();
			}
		});
	})();


	/*--------------------------------- функция для выравнивания высоты колонок End -------------------------*/



	/* ------------------------>>> preloader <<<------------------------------------------------- */
	(function(){
		$(window).on('load', function () {
			if ( $('.preloader_bg').length ) {
				var $preloader_bg     = $('.preloader_bg'),
					$spinner = $preloader_bg.find('.load');
				$spinner.fadeOut();
				$preloader_bg.delay(500).fadeOut('slow');
				$('body').removeClass('ov-hidden');
			}
		});
	})();
	/* ------------------------>>> preloader End <<<------------------------------------------------- */





	/* ------------------------>>> Responsive menu <<<------------------------------------------------- */
	(function(){
		function responsiveMenu(){
			if ( $(window).width() < 1200 ) {
				$('.headerBottom__menuWrap').addClass('mfp-hide');
			} else {
				$('.headerBottom__menuWrap').removeClass('mfp-hide');
			}
		}

		$(window).on('load', function(){
			responsiveMenu();
		});

		$(window).resize(function(){
			responsiveMenu();
		});
	})();
	/* ------------------------>>> Responsive menu End <<<------------------------------------------------- */



	function getTabs(tabsClass, sectionsClass, classActive){
		var $tabs = $('.' + tabsClass),
			$sections = $('.' + sectionsClass);

		$sections.not(':first').addClass('choice__posAbs');

		$tabs.click(function(){
			$tabs.removeClass(classActive).eq($(this).index()).addClass(classActive);
			$sections.addClass('choice__posAbs').eq($(this).index()).removeClass('choice__posAbs');
		}).eq(0).addClass(classActive);
	}

	getTabs('faq__tabItem', 'faq__tabContentItem', 'active');


	/* ------------------------>>> Меню в хеадере(клик по гамбургеру) <<<------------------------------------------------- */
    /*(function(){

        $('.header__humburger').magnificPopup({
            type:'inline',
            removalDelay: 0,
            mainClass: 'mfp-fade popup_inline',
            showCloseBtn: true,
            closeMarkup: '<div class="mfp-close"></div>',
            closeBtnInside: true,
            closeOnContentClick: false,
            closeOnBgClick: true,
            alignTop: false,
            fixedContentPos: true,
            callbacks: {
                beforeOpen: function() {
                    var $triggerEl = $(this.st.el),
                        newClass = 'headerBottom__menuWrap_popup';
                    this.st.mainClass = this.st.mainClass + ' ' + newClass;
                }
            },
        });

    })();*/
	/* ------------------------>>> Меню в хеадере(клик по гамбургеру) End <<<------------------------------------------------- */
    
    






});

