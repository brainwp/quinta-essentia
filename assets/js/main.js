/*********************************************************************
*  #### Twitter Post Fetcher v13.0 ####
*  Coded by Jason Mayes 2015. A present to all the developers out there.
*  www.jasonmayes.com
*  Please keep this disclaimer with my code if you use it. Thanks. :-)
*  Got feedback or questions, ask here:
*  http://www.jasonmayes.com/projects/twitterApi/
*  Github: https://github.com/jasonmayes/Twitter-Post-Fetcher
*  Updates will be posted to this site.
*********************************************************************/

//preloader
var $ = jQuery.noConflict();
$(window).load(function() {

	$('#preloader').fadeOut('slow');
    $('#container-preload').fadeIn('slow');
	altura_footer= parseInt($('#footer').css('height'));
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	if (!isMobile.matches){
		window.scrollTo(0, altura_footer);
			$('#menu-lado').removeClass('aparecido com-fundo');
			$('#menu-lado').addClass('sumido');


	}


	// var add_sc_players = function(){
	// 	$('.player-soundcloud').each(function(){
	// 		if(!$(this).hasClass('init')){
	// 			$(this).scPlayer({
	// 				links: [{url: $(this).attr('data-url'), title: $(this).attr('data-url')}]
	// 			});
	// 			$(this).addClass('init');
	// 		}
	// 	});
	// }
	// add_sc_players();
	//ajax youtube
	do_youtube_ajax = function(){
		var data = {
			'action': 'youtube_brasa_social_feed'
		};
		$.post(odin_main.ajaxurl, data, function(response) {
			$('#youtube-feed').html(response);

		});
	}
	do_youtube_ajax();
	if (location.hash) {
		if (location.hash == "#social"){
			$('#footer').css('position','relative')
					  	.css('top','0')
						.css('width','100vw')
						.css('z-index','9999')

		}

	        location.href = location.hash;
	    }
});



jQuery(document).ready(function($) {

	// fitVids.
	$( '.entry-content' ).fitVids();
	$( '.single #main-content' ).fitVids();


	// Responsive wp_video_shortcode().
	$( '.wp-video-shortcode' ).parent( 'div' ).css( 'width', 'auto' );

	/**
	 * Odin Core shortcodes
	 */

	// Tabs.
	$( '.odin-tabs a' ).click(function(e) {
		e.preventDefault();
		$(this).tab( 'show' );
	});

	// Tooltip.
	$( '.odin-tooltip' ).tooltip();





	//////////////////home///
	//////////////////home///



if ($('body').hasClass('home')){
		flautas_projetos();

		////////////funcao de criacao dos pontos dos poligonos svg
		////////////funcao de criacao dos pontos dos poligonos svg
	function poligonos() {
	   	largura=$(window).width();
		altura=largura*0.4663076582;
	   	altura_janela=$(window).height();

		m=(altura*0.4)/largura;
		y_lar=m*0.33*largura+0.6*altura;

		altura_img_disco = $('#parallax_midia').css('height');
		altura_img_disco= parseInt(altura_img_disco);
		$('#triangulo_header_topo').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.1 + " 0,"+altura*0.1 );
		$('#poligono_header').attr('points','0,0 '+largura+','+altura*0.1+" " +largura+','+altura*0.18+ ' 0,'+altura*0.25);
		$('#triangulo_header_baixo').attr('points', largura+","+altura*0.18+" "+largura+','+altura*0.3+' '+(2/3)*largura+','+0.203*altura );
		$('#svg_header').css('height',altura*0.3);

		$('#poligono_social').attr('points','0,'+altura*0.05+' '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.2 );
		$('#triangulo_social').attr('points','  0,'+altura*0.2+' '+0.6*largura+','+0.26*altura+' 0,'+altura*0.27);
		$('#poligono_social').parent().css('top',-altura*0.05);
		$('#social .secao-interno').css('margin-top',altura*0.25);
		$('#social svg').css('height',altura*0.3);


		$('#poligono_social_depois').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.05 );
		$('#poligono_social_depois_page').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.1+'  0,'+altura*0.02 );
		$('#svg_sobre').css('height',altura*1.2);


		$('#triangulo_sobre').attr('points','0,0 '+largura+','+altura+' 0,'+altura*0.6 );

		$('#triangulo_laranja').attr('points',  '0,'+altura*0.6+' '+largura*0.33+','+y_lar+' 0,'+altura*0.74);

		$('#poligono_branco').attr('points',  '0,'+altura*0.74 +' '+largura*0.33+','+y_lar+' '+(largura+1)+','+altura+ ' '+(largura+1)+','+altura*1.2+' 0,'+altura*1.2);
		$('#sobre .secao-interno').css('margin-top',altura*0.5);
		// $('#cabecalho_sobre').css('margin-top',-altura*0.6);

		$('#triangulo_amarelo').attr('points','0,0 '+largura+',0 0,'+altura*0.17 );
		$('#svg_midia').css('height',altura*0.17);

		$('#triangulo_agenda').attr('points','0,0 '+largura/7+',0 0,'+largura/7 );
		$('#poligono_agenda').attr('points','0,0 '+largura+',0 '+ largura+','+(altura*0.2)+' 0,'+(altura*0.1));
		$('#svg_agenda').css('height',largura/7);


		$('#poligono_disco').attr('points','0,'+(altura*0.17)+' '+largura+',0 '+ largura+','+(altura*0.17)+' '+largura+','+(altura*0.17)*2+' 0,'+(altura*0.17)*2);
		$('#svg_disco').css('top',altura_img_disco-(altura*0.17)*+1);
		$('#svg_disco').css('height',+(altura*0.17)*2);

		$('#discografia').css('margin-top',altura_img_disco);

		$('#poligono_social').attr('points','0,'+altura*0.05+' '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.2 );
		$('#triangulo_social').attr('points','  0,'+altura*0.2+' '+0.6*largura+','+0.26*altura+' 0,'+altura*0.27);
		$('#poligono_social').parent().css('top',-altura*0.05);
		$('#social .secao-interno').css('margin-top',altura*0.25);
		$('#social svg').css('height',altura*0.3);
		$('#svg_social_depois').css('height',altura*0.3);



		$('#poligono_social_depois').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.05 );
		$('#triangulo_footer').attr('points', '0,0 ' +largura+','+altura*0.35+ ' 0,'+ altura*0.35);
		$('#svg_footer').css('height',altura*0.35);
		altura_footer= parseInt($('#footer').css('height'));
		altura_site_info =  parseInt($('.site-info.row').css('height'));
		// $('.site-info').css('padding-top',(altura_footer/2)-(altura_site_info));
	}
	///////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////

	///////////navegacao flautas e projetos
	///////////navegacao flautas e projetos
		function flautas_projetos(){

			n=$('.cada-flauta').length;

			tam = $('.cada-flauta img').outerWidth(true);
			posicaoLeft = parseInt($('#interno-nav-flauta').css('left'));
			$('#interno-nav-flauta').css('left',28);


			nav_flauta_largura=n*(tam+20)*1.06;

			largura_interno_flauta = $('#interno-flauta').outerWidth();

			fim = nav_flauta_largura - largura_interno_flauta;
			// $('#interno-nav-flauta').css('width',nav_flauta_largura)
			alturaNavFlauta = $("#interno-nav-flauta").outerHeight();
			// $('#interno-flauta .glyphicon').css("line-height",alturaNavFlauta+"px")
			alturaProj = $('#interno-nav-projeto').css('height');
		}
		$(".botao").click(function(e) {
			id = $(this).attr('id');
			switch(id) {
			    case 'left':
					e.preventDefault();
					posicaoLeft = $('#interno-nav-flauta').css('left');
					posicaoLeft=parseInt(posicaoLeft);
					nav_flauta_largura=n*(tam+20)+28;
					interno_flauta_largura = $('#interno-flauta').outerWidth();


					if(  (posicaoLeft + 28 + 200) > 0){
						$('#interno-nav-flauta').css('left',posicaoLeft - posicaoLeft + 28);
			        	break;
					}
					else{
						$('#interno-nav-flauta').css('left',posicaoLeft+200);
						break;
					}
				case 'right':
					e.preventDefault();
					posicaoLeft = $('#interno-nav-flauta').css('left');
					posicaoLeft=parseInt(posicaoLeft);
					nav_flauta_largura=n*(tam+20)+28;
					interno_flauta_largura = $('#interno-flauta').outerWidth();
					dif= nav_flauta_largura-interno_flauta_largura+posicaoLeft

					fim = nav_flauta_largura - largura_interno_flauta*1.078;
					if(dif < 200){
						$('#interno-nav-flauta').css('left',posicaoLeft - dif);
			        	break;
					}
					else{
						$('#interno-nav-flauta').css('left',posicaoLeft-200);
						break;
					}
				case 'cima':
					e.preventDefault();
					posicaoTop = $('#interno-nav-projeto').css('top');
					interno_projeto_altura = $('#interno-projeto').outerHeight(false);
					interno_nav_projeto= $('#interno-nav-projeto').outerHeight(true);
					posicaoTop=parseInt(posicaoTop);


					if (posicaoTop >= -200){
						$('#interno-nav-projeto').css('top',posicaoTop-posicaoTop+42);

						break;
					}
					else{
						$('#interno-nav-projeto').css('top',posicaoTop+200);

						break;
					}
				case 'baixo':
					e.preventDefault();
					posicaoTop = $('#interno-nav-projeto').css('top');
					interno_projeto_altura = $('#interno-projeto').outerHeight(false);
					interno_nav_projeto= $('#interno-nav-projeto').outerHeight(true);
					posicaoTop=parseInt(posicaoTop)	;




					if ((interno_nav_projeto - interno_projeto_altura +posicaoTop +42) < 200){
						$('#interno-nav-projeto').css('top',posicaoTop-( interno_nav_projeto - interno_projeto_altura + posicaoTop + 42));
						break;
					}
					else{
						$('#interno-nav-projeto').css('top',posicaoTop - 200);
						break;
					}
			}
		});
		///////////navegacao flautas
		///////////navegacao flautas
	///////////botao pause do video
	///////////botao pause do video
	var vid = document.getElementById("bgvid");

	if ( $( vid).length ) {
		
		
		var pauseButton = document.querySelector("#capa #vidpause");
		var audioButton = document.querySelector("#capa #vidaudio");

		function vidFade() {
			vid.classList.add("stopfade");
		}

		vid.addEventListener('ended', function()
		{
			// only functional if "loop" is removed
			vid.pause();
			vid.classList.add("stopped");
			pauseButton.innerHTML = '<span class="glyphicon glyphicon-play" aria-hidden="true"></span>';
			vidFade();
		});

		pauseButton.addEventListener("click", function() {
			vid.classList.toggle("stopfade");
			if (vid.paused) {
				vid.play();
				pauseButton.innerHTML = '<span class="glyphicon glyphicon-pause" aria-hidden="true"></span>';
			} else {
				vid.pause();
				pauseButton.innerHTML = '<span class="glyphicon glyphicon-play" aria-hidden="true"></span>';
			}
		});
		audioButton.addEventListener("click", function() {
			vid.muted = !vid.muted;
			if(vid.muted) {
				audioButton.innerHTML = '<span class="glyphicon red glyphicon-volume-off" aria-hidden="true"></span>';
			}
			else{
				audioButton.innerHTML = '<span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span>';
			}
		});

}

		///////////botao pause do video
		///////////botao pause do video

		///////////Quando redimensiona
		///////////Quando redimensiona
		$(window).resize(function(){
			if(isMobile.matches){
					$('#main-navigation').removeClass('aparecido');
			       	$('#main-navigation').addClass('sumido');
					$('#main-navigation #menu-interno').addClass('com-fundo');
					$('#menu-lado').addClass('aparecido');
					$('#menu-lado').removeClass('sumido');
			}
			else if (!(Math.sqrt(($(window).scrollTop() +20 - altura_footer)*($(window).scrollTop() - altura_footer)) > 15 )){
				$('#main-navigation').addClass('aparecido');
	       		$('#main-navigation').removeClass('sumido');
				$('#main-navigation #menu-interno.desktop').removeClass('com-fundo');
				$('#menu-lado').removeClass('aparecido');
				$('#menu-lado').addClass('sumido');
			}
			poligonos();
			tam = parseInt($('.cada-flauta').outerWidth(true));

			nav_flauta_largura=n*tam*1.02
			$('#interno-nav-flauta').css('width',nav_flauta_largura)

			largura_interno_flauta = $('#interno-flauta').outerWidth();
			fim = nav_flauta_largura - largura_interno_flauta+100;
		})
		///////////Quando redimensiona
		///////////Quando redimensiona
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	altura_footer= parseInt($('#footer').css('height'));
	var footer = document.querySelector('#footer')
	var lastScrollTop = $(this).scrollTop();
	primeira=1;

	$(window).scroll(function() {

		if ( Math.sqrt(($(window).scrollTop() +20 - altura_footer)*($(window).scrollTop() - altura_footer)) > 15 ) {
	       	$('#main-navigation').removeClass('aparecido');
	       	$('#main-navigation').addClass('sumido');
			$('#main-navigation #menu-interno').addClass('com-fundo');
			$('#menu-lado').addClass('aparecido');
			$('#menu-lado').removeClass('sumido');



	      	primeira =0;
	    }
		else{
			$('#main-navigation').addClass('aparecido');
       		$('#main-navigation').removeClass('sumido');
			$('#main-navigation #menu-interno.desktop').removeClass('com-fundo');
			$('#menu-lado').removeClass('aparecido');
			$('#menu-lado').addClass('sumido');


		}
		var st = $(this).scrollTop();
		
		space = $(document).height() - $(this).scrollTop();
		
		if(!isMobile.matches && st > lastScrollTop && ($(window).scrollTop() + ($(window).height() - $(document).height())) >= -2)  {
			$('#footer').css('position','absolute')

		      $('#footer').css('top','0')
						.css('width','100vw')
						.css('z-index','9999')
			$('#header-principal').css('margin-top',altura_footer)
			st = 0;
			window.scrollTo(0, 0);

		   }
	   else if(!isMobile.matches && st > lastScrollTop && $(window).scrollTop() > 2*$(window).height() ) {
			$('#footer').css('position','relative')

			}
		else if (!isMobile.matches && st < lastScrollTop && $(window).scrollTop() <= 2 ){
			$('#footer').css('position','relative')
					  	.css('top','0')
						.css('width','100vw')
						.css('z-index','9999')
			$('#header-principal').css('margin-top','0')
			window.scrollTo(0, $(document).height()  );
			st = $(document).height();
								}
		else if (!isMobile.matches && st < lastScrollTop && space >  2* altura_footer ){
			margin_top = parseInt($('#header-principal').css('margin-top'));
			$('#footer').css('position','absolute')
			if (margin_top < altura_footer  ){
				$('#header-principal').css('margin-top',margin_top+2)
			}
			if ($('#header-principal').css('margin-top') > altura_footer  ){
				$('#header-principal').css('margin-top',altura_footer)
			}
			// $('#header-principal').css('margin-top',altura_footer)

		}
		else if (isMobile.matches){
				$('#footer').css('position','relative')
				$('#header-principal').css('margin-top','0')

		}

		lastScrollTop = st;

	});
		flautas_projetos()

 		if (!isMobile.matches){
			altura_svg_menu = parseInt($('#header-principal svg').css('height'));
			window.scrollTo(0, altura_footer);
			$('#main').css('padding-top',altura_svg_menu)

		}
		else{
			$('#footer').css('position','relative')
				  		.css('top','0')
						.css('width','100vw')
						.css('z-index','9999')
			$('#header-principal').css('margin-top','0')
		}
		poligonos();
	//sound cloud midias
	// var add_sc_players = function(){
	// 	$('.player-soundcloud').each(function(){
	// 		if(!$(this).hasClass('init')){
	// 			$(this).scPlayer({
	// 				links: [{url: $(this).attr('data-url'), title: $(this).attr('data-url')}]
	// 			});
	// 			$(this).addClass('init');
	// 		}
	// 	});
	// }

	//ajax midia
	$('.btn-loadmore').on('click',function(e){
		var data = {
			'action': 'midia_load_posts',
			'paged': $(this).attr('data-paged'),
			'category': $(this).attr('data-category')
		};
		var default_html = $(this).html();
		$(this).html($(this).attr('data-loading'));
		var elem = this;
		var selector = $(elem).attr('data-selector');
		$.post(odin_main.ajaxurl, data, function(response) {
			$(selector).append(response);
			$(elem).html(default_html);
			var paged = parseInt($(elem).attr('data-paged')) + 1;
			var max_paged = parseInt($(elem).attr('data-max-paged'));
			$(elem).attr('data-paged',paged);
			if(paged > max_paged){
				$(elem).fadeOut('slow');
			}
			// add_sc_players();
		});

	});
	$('.btn-ajax-categoria').on('click',function(e){
		var data = {
			'action': 'midia_load_category',
			'category': $(this).attr('data-category')
		};
		var elem = this;
		$('.btn-ajax-categoria.active').removeClass('active');
		$('.btn-loadmore').show();
		$.ajax({
			type: 'POST',
			url: odin_main.ajaxurl,
			data: data,
			dataType: 'json',
			complete: function(response){
				var obj = $.parseJSON(response.responseText);
				var selector = $('.btn-loadmore').attr('data-selector');
				$(elem).addClass('active');
				$('.btn-loadmore').attr('data-max-paged',obj.max_paged);
				$('.btn-loadmore').attr('data-paged',2);
				$('.btn-loadmore').attr('data-category',$(elem).attr('data-category'));
				var paged = parseInt($('.btn-loadmore').attr('data-paged'));
				var max_paged = parseInt($('.btn-loadmore').attr('data-max-paged'));
				if(paged > max_paged){
					$('.btn-loadmore').fadeOut('slow');
				}
				$(selector).html(obj.html);
			},
		});
	});

	//ajax discos
	$('.btn-loadmore-discos').on('click',function(e){
		var data = {
			'action': 'discos_load',
			'paged': $(this).attr('data-paged'),
		};
		var default_html = $(this).html();
		$(this).html($(this).attr('data-loading'));
		var elem = this;
		var selector = $(elem).attr('data-selector');
		$.post(odin_main.ajaxurl, data, function(response) {
			$(selector).append(response);
			$(elem).html(default_html);
			var paged = parseInt($(elem).attr('data-paged')) + 1;
			var max_paged = parseInt($(elem).attr('data-max-paged'));
			$(elem).attr('data-paged',paged);
			if(paged > max_paged){
				$(elem).fadeOut('slow');
			}
		});

	});


}
//////////////////home///
//////////////////home///
//////////////////home///
else{
	$(window).resize(function(){
		if(isMobile.matches){
				$('#main-navigation').removeClass('aparecido');
		       	$('#main-navigation').addClass('sumido');
				$('#main-navigation #menu-interno').addClass('com-fundo');
				$('#menu-lado').addClass('aparecido');
				$('#menu-lado').removeClass('sumido');
		}
		else if (!(Math.sqrt(($(window).scrollTop() +20 - altura_footer)*($(window).scrollTop() - altura_footer)) > 15 )){
			$('#main-navigation').addClass('aparecido');
       		$('#main-navigation').removeClass('sumido');
			$('#main-navigation #menu-interno.desktop').removeClass('com-fundo');
			$('#menu-lado').removeClass('aparecido');
			$('#menu-lado').addClass('sumido');
		}
		poligonos();
		tam = parseInt($('.cada-flauta').outerWidth(true));

		nav_flauta_largura=n*tam*1.02
		$('#interno-nav-flauta').css('width',nav_flauta_largura)

		largura_interno_flauta = $('#interno-flauta').outerWidth();
		fim = nav_flauta_largura - largura_interno_flauta+100;
	})
	///////////Quando redimensiona
	///////////Quando redimensiona
		largura=$(window).width();
		altura=largura*0.4663076582;
		$('#triangulo_header_topo').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.1 );
		$('#poligono_header').attr('points','0,0 '+largura+','+altura*0.1+" " +largura+','+altura*0.18+ ' 0,'+altura*0.25);
		$('#triangulo_header_baixo').attr('points', largura+","+altura*0.18+" "+largura+','+altura*0.3+' '+(2/3)*largura+','+0.203*altura );
		$('#svg_header').css('height',altura*0.3)
	$('#poligono_social').attr('points','0,'+altura*0.05+' '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.2 );
	$('#triangulo_social').attr('points','  0,'+altura*0.2+' '+0.6*largura+','+0.26*altura+' 0,'+altura*0.27);
	$('#poligono_social').parent().css('top',-altura*0.05);
	$('#social .secao-interno').css('margin-top',altura*0.25);
	$('#social svg').css('height',altura*0.3);
	$('#svg_social_depois').css('height',altura*0.3);

	$('#poligono_social_depois').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.05 );
	$('#triangulo_footer').attr('points', '0,0 ' +largura+','+altura*0.35+ ' 0,'+ altura*0.35);
}

		//ajax youtube
	do_youtube_ajax = function(){
		var data = {
			'action': 'youtube_brasa_social_feed'
		};
		$.post(odin_main.ajaxurl, data, function(response) {
			$('#youtube-feed').html(response);

		});
	}
	do_youtube_ajax();



		$( ".navbar-toggle" ).click(function(e) {
				e.preventDefault();

		       if ($('#main-navigation').hasClass('sumido')){
					$('#main-navigation').removeClass('sumido');
					$('#main-navigation').addClass('aparecido');
					$('#menu-interno').removeClass('sumido');
					$('#menu-interno').addClass('aparecido');
					}
				else {

					$('#menu-interno').removeClass('sumido');
					$('#menu-interno').addClass('aparecido');
					$('#main-navigation').removeClass('aparecido');
					$('#main-navigation').addClass('sumido');
				}
		});

	/*slick slider - slider agenda */
	$('#interno-nav-eventos').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		responsive: [{
			breakpoint: 700,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
			}
		}]
	});
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");

	if (isMobile.matches){
		$('#menu-interno').removeClass('sumido');
		$('#menu-interno').addClass('aparecido');
		$('#main-navigation').removeClass('aparecido');
		$('#main-navigation').addClass('sumido');
	}
	//open youtube in a modal

	$(document).on('click', '.youtube-video-open', function(e){
		e.preventDefault();
		var src = 'https://www.youtube.com/embed/'+$(this).attr('data-id');
		var html = '<div id="triangulo-close-modal"></div><a class="close-reveal-modal">&#215;</a><iframe src="'+src+'" class="youtube-iframe-modal" frameborder="0">';
		$('#reveal-modal-id').html(html);
		$('#reveal-modal-id').foundation('reveal', 'open');
    });

   	$(".menu-item a").click(function(){
					endereco = $(this).attr("href").split("#")[1];
		if (endereco == 'social'){

			$('#footer').css('position','relative')
					  	.css('top','0')
						.css('width','100vw')
						.css('z-index','9999')
		}
	});

	$(document).on('onPlayerPlay.scPlayer', function(e){
		$(e.target).addClass('loadbg');
		var check_timer = function() {
			var timer = $(e.target).find('.sc-scrubber .sc-time-span .sc-buffer').css('width');
			var timer = timer.split('.');
			if(parseInt(timer[0]) >= 1){
				$(e.target).removeClass('loadbg');
			}
			else{
				setTimeout(function(){
					check_timer();
				},1)
			}
		}
		check_timer();
	});
});
