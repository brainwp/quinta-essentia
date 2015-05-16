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
		$('svg').css('height',altura*1.2);

		$('#triangulo_sobre').attr('points','0,0 '+largura+','+altura+' 0,'+altura*0.6 );
		
		$('#triangulo_laranja').attr('points',  '0,'+altura*0.6+' '+largura*0.33+','+y_lar+' 0,'+altura*0.74);
	 	
			$('#poligono_branco').attr('points',  '0,'+altura*0.74 +' '+largura*0.33+','+y_lar+' '+largura+','+altura+ ' '+largura+','+altura*1.1+' 0,'+altura*1.1);
		
	} 
	$(window).resize(function(){
		poligonos();
	})
		poligonos();
});
