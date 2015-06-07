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
(function(w,n){"function"===typeof define&&define.amd?define([],n):"object"===typeof exports?module.exports=n():n()})(this,function(){function w(a){return a.replace(/<b[^>]*>(.*?)<\/b>/gi,function(a,g){return g}).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function n(a){a=a.getElementsByTagName("a");for(var c=a.length-1;0<=c;c--)a[c].setAttribute("target","_blank")}function m(a,c){for(var g=[],f=new RegExp("(^| )"+c+"( |$)"),h=a.getElementsByTagName("*"),b=0,k=h.length;b<
k;b++)f.test(h[b].className)&&g.push(h[b]);return g}var B="",k=20,C=!0,u=[],x=!1,v=!0,q=!0,y=null,z=!0,D=!0,A=null,E=!0,F=!1,r=!0,G=!0,H={fetch:function(a){void 0===a.maxTweets&&(a.maxTweets=20);void 0===a.enableLinks&&(a.enableLinks=!0);void 0===a.showUser&&(a.showUser=!0);void 0===a.showTime&&(a.showTime=!0);void 0===a.dateFunction&&(a.dateFunction="default");void 0===a.showRetweet&&(a.showRetweet=!0);void 0===a.customCallback&&(a.customCallback=null);void 0===a.showInteraction&&(a.showInteraction=
!0);void 0===a.showImages&&(a.showImages=!1);void 0===a.linksInNewWindow&&(a.linksInNewWindow=!0);void 0===a.showPermalinks&&(a.showPermalinks=!0);if(x)u.push(a);else{x=!0;B=a.domId;k=a.maxTweets;C=a.enableLinks;q=a.showUser;v=a.showTime;D=a.showRetweet;y=a.dateFunction;A=a.customCallback;E=a.showInteraction;F=a.showImages;r=a.linksInNewWindow;G=a.showPermalinks;var c=document.createElement("script");c.type="text/javascript";c.src="https://cdn.syndication.twimg.com/widgets/timelines/"+a.id+"?&lang="+(a.lang||
"en")+"&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+Math.random();document.getElementsByTagName("head")[0].appendChild(c)}},callback:function(a){var c=document.createElement("div");c.innerHTML=a.body;"undefined"===typeof c.getElementsByClassName&&(z=!1);a=[];var g=[],f=[],h=[],b=[],p=[],t=[],e=0;if(z)for(c=c.getElementsByClassName("tweet");e<c.length;){0<c[e].getElementsByClassName("retweet-credit").length?b.push(!0):b.push(!1);if(!b[e]||b[e]&&D)a.push(c[e].getElementsByClassName("e-entry-title")[0]),
p.push(c[e].getAttribute("data-tweet-id")),g.push(c[e].getElementsByClassName("p-author")[0]),f.push(c[e].getElementsByClassName("dt-updated")[0]),t.push(c[e].getElementsByClassName("permalink")[0]),void 0!==c[e].getElementsByClassName("inline-media")[0]?h.push(c[e].getElementsByClassName("inline-media")[0]):h.push(void 0);e++}else for(c=m(c,"tweet");e<c.length;)a.push(m(c[e],"e-entry-title")[0]),p.push(c[e].getAttribute("data-tweet-id")),g.push(m(c[e],"p-author")[0]),f.push(m(c[e],"dt-updated")[0]),
t.push(c[e].getElementsByClassName("permalink")[0]),void 0!==m(c[e],"inline-media")[0]?h.push(m(c[e],"inline-media")[0]):h.push(void 0),0<m(c[e],"retweet-credit").length?b.push(!0):b.push(!1),e++;a.length>k&&(a.splice(k,a.length-k),g.splice(k,g.length-k),f.splice(k,f.length-k),b.splice(k,b.length-k),h.splice(k,h.length-k),t.splice(k,t.length-k));c=[];e=a.length;for(b=0;b<e;){if("string"!==typeof y){var d=f[b].getAttribute("datetime"),l=new Date(f[b].getAttribute("datetime").replace(/-/g,"/").replace("T",
" ").split("+")[0]),d=y(l,d);f[b].setAttribute("aria-label",d);if(a[b].innerText)if(z)f[b].innerText=d;else{var l=document.createElement("p"),I=document.createTextNode(d);l.appendChild(I);l.setAttribute("aria-label",d);f[b]=l}else f[b].textContent=d}d="";C?(r&&(n(a[b]),q&&n(g[b])),q&&(d+='<div class="user">'+w(g[b].innerHTML)+"</div>"),d+='<p class="tweet">'+w(a[b].innerHTML)+"</p>",v&&(d=G?d+('<p class="timePosted"><a href="'+t[b]+'">'+f[b].getAttribute("aria-label")+"</a></p>"):d+('<p class="timePosted">'+
f[b].getAttribute("aria-label")+"</p>"))):a[b].innerText?(q&&(d+='<p class="user">'+g[b].innerText+"</p>"),d+='<p class="tweet">'+a[b].innerText+"</p>",v&&(d+='<p class="timePosted">'+f[b].innerText+"</p>")):(q&&(d+='<p class="user">'+g[b].textContent+"</p>"),d+='<p class="tweet">'+a[b].textContent+"</p>",v&&(d+='<p class="timePosted">'+f[b].textContent+"</p>"));E&&(d+='<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+p[b]+'" class="twitter_reply_icon"'+(r?' target="_blank">':
">")+'Reply</a><a href="https://twitter.com/intent/retweet?tweet_id='+p[b]+'" class="twitter_retweet_icon"'+(r?' target="_blank">':">")+'Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id='+p[b]+'" class="twitter_fav_icon"'+(r?' target="_blank">':">")+"Favorite</a></p>");F&&void 0!==h[b]&&(l=h[b],void 0!==l?(l=l.innerHTML.match(/data-srcset="([A-z0-9%_\.-]+)/i)[0],l=decodeURIComponent(l).split('"')[1]):l=void 0,d+='<div class="media"><img src="'+l+'" alt="Image from tweet" /></div>');
c.push(d);b++}if(null===A){a=c.length;g=0;f=document.getElementById(B);for(h="<ul>";g<a;)h+="<li>"+c[g]+"</li>",g++;f.innerHTML=h+"</ul>"}else A(c);x=!1;0<u.length&&(H.fetch(u[0]),u.splice(0,1))}};return window.twitterFetcher=H});
//preloader
var $ = jQuery.noConflict();
$(window).load(function() {
	
	$('#preloader').fadeOut('slow');
    $('#container-preload').fadeIn('slow');
	altura_footer= parseInt($('#footer').css('height'));
	var isMobile = window.matchMedia("only screen and (max-width: 760px)");
	console.log('isMobile.matches'+isMobile.matches);
	if (!isMobile.matches){
		window.scrollTo(0, altura_footer);
			$('#menu-lado').removeClass('aparecido com-fundo');
			$('#menu-lado').addClass('sumido');
		
		
	}

});

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
	
	
	
	

	//////////////////home///
	//////////////////home///

if ($('body').hasClass('home')){
		////////////funcao de criacao dos pontos dos poligonos svg
		////////////funcao de criacao dos pontos dos poligonos svg
	function poligonos() {
	   	largura=$(window).width();
		altura=largura*0.4663076582;

		m=(altura*0.4)/largura
		y_lar=m*0.33*largura+0.6*altura;
		
		altura_img_disco = $('#parallax_midia').css('height');
		altura_img_disco= parseInt(altura_img_disco);
		$('#triangulo_header_topo').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.1 );
		$('#poligono_header').attr('points','0,0 '+largura+','+altura*0.1+" " +largura+','+altura*0.18+ ' 0,'+altura*0.25);
		$('#triangulo_header_baixo').attr('points', largura+","+altura*0.18+" "+largura+','+altura*0.3+' '+(2/3)*largura+','+0.203*altura );
		$('#svg_header').css('height',altura*0.3)
		
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
		$('#svg_midia').css('height',altura*0.17)

		$('#triangulo_agenda').attr('points','0,0 '+largura/7+',0 0,'+largura/7 );
		$('#poligono_agenda').attr('points','0,0 '+largura+',0 '+ largura+','+(altura*0.2)+' 0,'+(altura*0.1));
		$('#svg_agenda').css('height',largura/7)


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
	///////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////
	
	///////////navegacao flautas e projetos
	///////////navegacao flautas e projetos
		function flautas_projetos(){

			n=$('.cada-flauta').length;

			tam = $('.cada-flauta img').outerWidth(true)

			nav_flauta_largura=n*(tam+20)*1.06

			largura_interno_flauta = $('#interno-flauta').outerWidth();

			fim = nav_flauta_largura - largura_interno_flauta+100;
			// $('#interno-nav-flauta').css('width',nav_flauta_largura)
			alturaNavFlauta = $("#interno-nav-flauta").outerHeight();
			// $('#interno-flauta .glyphicon').css("line-height",alturaNavFlauta+"px")
			alturaProj = $('#interno-nav-projeto').css('height');
		}
		$(".botao").click(function(e) {
			id = $(this).attr('id')
			switch(id) {
			    case 'left':
					e.preventDefault();
					posicaoLeft = $('#interno-nav-flauta').css('left');
					posicaoLeft=parseInt(posicaoLeft)
					if(posicaoLeft >= 0){

			        	break;
					}
					else{
						$('#interno-nav-flauta').css('left',posicaoLeft+100)
						break
					}
				case 'right':
					e.preventDefault();
					posicaoLeft = $('#interno-nav-flauta').css('left');
					posicaoLeft=parseInt(posicaoLeft)
					if(posicaoLeft < -fim){
			        	break;
					}
					else{
						$('#interno-nav-flauta').css('left',posicaoLeft-100)
						break
					}
				case 'cima':
					e.preventDefault();
					posicaoTop = $('#interno-nav-projeto').css('top');
					posicaoTop=parseInt(posicaoTop)


					if (posicaoTop <= 0){

						$('#interno-nav-projeto').css('top',posicaoTop+100)

						break
					}
					else{
						break
					}
				case 'baixo':
					e.preventDefault();
					posicaoTop = $('#interno-nav-projeto').css('top');
					posicaoTop=parseInt(posicaoTop)
					alturaProj=$('.cada-projeto').outerHeight(true);
					limite =  parseInt($('#interno-nav-projeto').css('height'))-(alturaProj*2)
					if (-posicaoTop <= limite){
						$('#interno-nav-projeto').css('top',posicaoTop-alturaProj)
						break
					}
					else{

						break								
					}
			}
		});
		///////////navegacao flautas
		///////////navegacao flautas
	///////////botao pause do video
	///////////botao pause do video
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
				$('#main-navigation #menu-interno').removeClass('com-fundo');
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
			$('#main-navigation #menu-interno').removeClass('com-fundo');
			$('#menu-lado').removeClass('aparecido');
			$('#menu-lado').addClass('sumido');
			
			
		}
		var st = $(this).scrollTop();
	   
		if(!isMobile.matches && st > lastScrollTop && ($(window).scrollTop() + ($(window).height() - $(document).height())) >= -1)  {
		   		
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
		else if (!isMobile.matches && st < lastScrollTop && $(window).scrollTop() == 0){
				
			$('#footer').css('position','relative')
					  	.css('top','0')
						.css('width','100vw')
						.css('z-index','9999')
			$('#header-principal').css('margin-top','0')
			window.scrollTo(0, $(document).height()  )
			st = $(document).height();							
								}
		else if (!isMobile.matches && st < lastScrollTop && $(document).height() - 2* $(window).scrollTop() > 2*$(window).height() ){
			$('#footer').css('position','absolute')
			$('#header-principal').css('margin-top',altura_footer)
			
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
	
		largura=$(window).width();
		altura=largura*0.4663076582;
		$('#triangulo_header_topo').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.1 );
		$('#poligono_header').attr('points','0,0 '+largura+','+altura*0.1+" " +largura+','+altura*0.18+ ' 0,'+altura*0.25);
		$('#triangulo_header_baixo').attr('points', largura+","+altura*0.18+" "+largura+','+altura*0.3+' '+(2/3)*largura+','+0.203*altura );
		$('#svg_header').css('height',altura*0.3)
	console.log('teste');
	$('#poligono_social').attr('points','0,'+altura*0.05+' '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.2 );
	$('#triangulo_social').attr('points','  0,'+altura*0.2+' '+0.6*largura+','+0.26*altura+' 0,'+altura*0.27);
	$('#poligono_social').parent().css('top',-altura*0.05);
	$('#social .secao-interno').css('margin-top',altura*0.25);
	$('#social svg').css('height',altura*0.3);
	$('#svg_social_depois').css('height',altura*0.3);

	$('#poligono_social_depois').attr('points','0,0 '+largura+',0 '+largura+','+altura*0.3+'  0,'+altura*0.05 );
	$('#triangulo_footer').attr('points', '0,0 ' +largura+','+altura*0.35+ ' 0,'+ altura*0.35);
}

//ajax facebook

var data = {
	'action': 'facebook_brasa_social_feed'
};
$.post(odin_main.ajaxurl, data, function(response) {
	$('#facebook-feed').html(response);
});

//ajax youtube
var data = {
	'action': 'youtube_brasa_social_feed'
};
$.post(odin_main.ajaxurl, data, function(response) {
	$('#youtube-feed').html(response);
});

//ajax twitter
var config1 = {
	"id": odin_main.twitter_widget_id,
	"domId": 'twitter-feed',
	"maxTweets": 2,
	"enableLinks": true,
	"showTime": false,
	"showRetweet": false,
	"showInteraction": false
};
twitterFetcher.fetch(config1);
	


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

	flautas_projetos();
	if (isMobile.matches){
		$('#menu-interno').removeClass('sumido');
		$('#menu-interno').addClass('aparecido');
		$('#main-navigation').removeClass('aparecido');					
		$('#main-navigation').addClass('sumido');
	}
});


