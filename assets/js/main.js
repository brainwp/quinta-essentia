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



	console.log('teste');
	var vid = document.getElementById("bgvid");
	var pauseButton = document.querySelector("#capa button");

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
	    pauseButton.innerHTML = "Pause";
	  } else {
	    vid.pause();
	    pauseButton.innerHTML = "Reproduzir";
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
	
	
	$(window).resize(function(){
		poligonos();
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
});

