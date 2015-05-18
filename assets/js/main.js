jQuery(document).ready(function($) {
	// fitVids.
	$( '.entry-content' ).fitVids();

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



	var vid = document.getElementById("bgvid");
	var pauseButton = document.querySelector("#capa .button");

	function vidFade() {
	  vid.classList.add("stopfade");
	}

	vid.addEventListener('ended', function()
	{
	// only functional if "loop" is removed 
	vid.pause();
	// to capture IE10
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
	
	
	function poligonos() {
	   	largura=$(window).width();
		console.log(largura);
		altura=largura*0.4663076582;
		console.log(altura);
		m=(altura*0.4)/largura
		y_lar=m*0.33*largura+0.6*altura;
		altura_img_disco = $('#parallax_midia').css('height');
		altura_img_disco= parseInt(altura_img_disco);
		console.log('altura:'+altura_img_disco);
		$('svg').css('height',altura*1.2);
		console.log('largura:'+largura);

		$('#triangulo_sobre').attr('points','0,0 '+largura+','+altura+' 0,'+altura*0.6 );
		
		$('#triangulo_laranja').attr('points',  '0,'+altura*0.6+' '+largura*0.33+','+y_lar+' 0,'+altura*0.74);
	 	
		$('#poligono_branco').attr('points',  '0,'+altura*0.74 +' '+largura*0.33+','+y_lar+' '+(largura+1)+','+altura+ ' '+(largura+1)+','+altura*1.2+' 0,'+altura*1.2);
		$('#sobre .secao-interno').css('margin-top',altura*0.6);
		// $('#cabecalho_sobre').css('margin-top',-altura*0.6);
		
		$('#triangulo_amarelo').attr('points','0,0 '+largura+',0 0,'+altura*0.17 );
		$('#svg_midia').css('height',altura*0.17)
		
		$('#poligono_disco').attr('points','0,'+(altura*0.17)+' '+largura+',0 '+ largura+','+(altura*0.17)+' '+largura+','+(altura*0.17)*2+' 0,'+(altura*0.17)*2);
		$('#svg_disco').css('top',altura_img_disco-(altura*0.17)*+1)
		$('#svg_disco').css('height',+(altura*0.17)*2)
		
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
		$('.site-info').css('padding-top',(altura_footer/2)-(altura_site_info/2));
	} 
	
	
	
	n=$('.cada-flauta').length;
	tam = parseInt($('.cada-flauta').outerWidth(true));
	console.log ('n:'+tam)
	nav_flauta_largura=n*tam*1.02
	largura_interno_flauta = $('#interno-flauta').outerWidth();
	fim = nav_flauta_largura - largura_interno_flauta+100;
	$('#interno-nav-flauta').css('width',nav_flauta_largura)
	$(".botao").click(function(e) {
		console.log('fim'+fim)
		
		id = $(this).attr('id')
		e.preventDefault();
		posicaoLeft = $('#interno-nav-flauta').css('left');
		posicaoLeft=parseInt(posicaoLeft)
		switch(id) {
		    case 'left':
				if(posicaoLeft > 0){
					console.log('acabou')
		        	break;
				}
				else{
					console.log('teste')
					$('#interno-nav-flauta').css('left',posicaoLeft+100)
					break
				}
			case 'right':
				if(posicaoLeft < -fim){
					console.log('acabou')
		        	break;
				}
				else{
					console.log('testerr')
					$('#interno-nav-flauta').css('left',posicaoLeft-100)
					break
				}
		}
	});
	
	$(window).resize(function(){
		poligonos();
		tam = parseInt($('.cada-flauta').outerWidth(true));
		console.log ('n:'+tam)
		nav_flauta_largura=n*tam*1.02
		console.log ('nav_flauta_largura:'+nav_flauta_largura)
		$('#interno-nav-flauta').css('width',nav_flauta_largura)
		
		largura_interno_flauta = $('#interno-flauta').outerWidth();
		fim = nav_flauta_largura - largura_interno_flauta+100;
	})
		poligonos();
	
	var lastScrollTop = 0;	
	$(window).scroll(function() {
		var st = $(this).scrollTop();
	   
	   if($(window).scrollTop() + $(window).height() == $(document).height()) {
	      $('#footer').css('position','absolute')
					  .css('top','0')
					.css('width','100vw')
					.css('z-index','9999')
		$('#header-principal').css('margin-top',altura_footer)
		window.scrollTo(0, 0)
					
	   }
		// else if ($(window).scrollTop()  > $(window).height() ){
		// 			
		// 		}
		else if (st < lastScrollTop && $(window).scrollTop() == 0){
			$('#footer').css('position','relative')
												  .css('top','0')
												.css('width','100vw')
												.css('z-index','9999')
									$('#header-principal').css('margin-top','0')
		window.scrollTo(0, $(document).height() - 1 )
									
		}
		lastScrollTop = st;
	   
		console.log('altura doc'+$(document).height())
	});

	//ajax midia
	$('.btn-loadmore').on('click',function(e){
		var data = {
			'action': 'midia_load_posts',
			'paged': $(this).attr('data-paged')
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

	})
});

