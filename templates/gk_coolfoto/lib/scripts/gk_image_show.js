Fx.Opacity = Fx.Style.extend({initialize: function(el, options){this.now = 1;this.parent(el, 'opacity', options);},toggle: function(){return (this.now > 0) ? this.start(1, 0) : this.start(0, 1);},show: function(){return this.set(1);}});

window.addEvent("load",function(){
	$$(".gk_is_wrapper").each(function(el){
		var elID = el.getProperty("id");
		var wrapper = $(elID);
		var $G = $Gavick[elID];
		var opacity = $G['text_block_opacity'];
		var slides = [];
		var contents = [];
		var links = [];
		var play = false;
		var $blank = false;
		var loadedImages = ($E('.gk_is_preloader', wrapper)) ? false : true;
		var b1 = $E('.bar1_bg',wrapper);
		var b2 = $E('.bar2_bg',wrapper);
		var b1e = $E('.bar1_evt_reader',wrapper);
		var b2e = $E('.bar2_evt_reader',wrapper);
		var tLoader = $('gk_is_overlay-'+elID.replace("gk_is-",""));
		
		if(b1){
			b1e.addEvent("click", function(){
				if(tLoader != null){
					var imageToLoad = wrapper.getElementsBySelector(".gk_is_slide")[$G['actual_slide']].getProperty('src').replace("/thumbs_small/","/thumbs_big/");
					tLoader.innerHTML = '';
					new Asset.image(imageToLoad,{onload:function(){
						this.injectInside(tLoader);
					}});
					tLoader.setStyles({
						"display":"block",
						"width":0,
						"height":0,
						"opacity":0
					});
					var fxs = new Fx.Styles(tLoader, {duration:400});
					fxs.start({
						"width":$G['img_w'],
						"height":$G['img_h'],
						"opacity":1
					});
					
					tLoader.setStyle("top", ($$('.gk_is_image')[0].getTop()-12)+"px");
					tLoader.setStyle("left", ($$('.gk_is_image')[0].getLeft()-12)+"px");
				}
			});
		}
		
		if(tLoader != null){
			tLoader.addEvent("click", function(){
				var fxs = new Fx.Styles(tLoader, {duration:400});
				fxs.start({
					"width":0,
					"height":0,
					"opacity":0,
					"top":[($$('.gk_is_image')[0].getTop()-13),($$('.gk_is_image')[0].getTop()-13)+$$('.gk_is_image')[0].getSize().size.y],
					"left":[($$('.gk_is_image')[0].getLeft()-13),($$('.gk_is_image')[0].getLeft()-13)+$$('.gk_is_image')[0].getSize().size.x]
				});
			});
		}
		
		if(b2){
			b2e.addEvent("click", function(){
				window.location = (wrapper.getElementsBySelector(".gk_is_slide")[$G['actual_slide']]).getProperty('alt');
			});
		}

		if(!loadedImages){
			var imagesToLoad = [];
			
			$ES('.gk_is_slide', wrapper).each(function(el,i){
				links.push(el.getFirst().getProperty('href'));
				var newImg = new Element('img',{
					"title":el.getProperty('title'),
					"class":el.getProperty('class'),
					"style":el.getProperty('style')
				});
				
				newImg.setProperty('alt',el.getChildren()[1].getProperty('href'));
				el.getChildren()[1].remove();
				newImg.setProperty("src",el.getChildren()[0].getProperty('href'));
				el.getChildren()[0].remove();
				imagesToLoad.push(newImg);
				newImg.injectAfter(el);
				
				if(window.ie7){
					newImg.setProperty('width',el.getStyle("width").toInt());
					newImg.setProperty('height',el.getStyle("height").toInt());
				}
				
				el.remove();
			});
			
			var time = (function(){
				var process = 0;				
				imagesToLoad.each(function(el,i){ if(el.complete) process++; });
 				
				if(process == imagesToLoad.length){
					$clear(time);
					loadedImages = process;
					(function(){new Fx.Opacity($E('.gk_is_preloader', wrapper)).start(1,0);}).delay(400);
				}
			}).periodical(200);
		}
		
		var time_main = (function(){
			if(loadedImages){
				$clear(time_main);
				if(window.ie && $E('.gk_is_text_bg', wrapper)){ $E('.gk_is_text_bg', wrapper).setOpacity($G['opacity']); }
				
				wrapper.getElementsBySelector(".gk_is_slide").each(function(elmt,i){
					slides[i] = elmt;
				});
				
				slides.each(function(el,i){ if(i != 0) el.setOpacity(0); });
				
				if($E(".gk_is_text",wrapper)){
					wrapper.getElementsBySelector(".gk_is_text_item").each(function(elmt,i){ contents[i] = elmt.innerHTML; });
				}
				
				$G['actual_slide'] = 0;
				
				if($E(".gk_is_text",wrapper)) $E(".gk_is_text",wrapper).innerHTML = contents[0];
				
				if($G['autoanim']){
					play = true;
					var eltm = $E('.player', wrapper);
					eltm.removeClass("play");
					eltm.addClass("pause");
					$G['actual_animation'] = (function(){
						if(play && $blank == false){
							gk_is_style1_anim(wrapper, contents, slides, $G['actual_slide']+1, $G);
						}else $blank = false;
					}).periodical($G['anim_interval']+$G['anim_speed']);
				}
				
				if($E('.interface_bg', wrapper)){
					$E('.player', wrapper).addEvent("click", function(){
						var eltm = $E('.player', wrapper);
						if(eltm.hasClass("pause")){
							play = false;
							eltm.removeClass("pause");
							eltm.addClass("play");
						}else{
							play = true;
							eltm.removeClass("play");
							eltm.addClass("pause");
						}
					});
					
					$E('.prev', wrapper).addEvent("click", function(){
						var eltm = $E('.prev', wrapper);
						play = false;
						var eltm2 = $E('.player', wrapper);
						eltm2.removeClass("pause");
						eltm2.addClass("play");
						gk_is_style1_anim(wrapper, contents, slides, $G['actual_slide']-1, $G);
					});

					$E('.next', wrapper).addEvent("click", function(){
						var eltm = $E('.next', wrapper);
						play = false;
						var eltm2 = $E('.player', wrapper);
						eltm2.removeClass("pause");
						eltm2.addClass("play");
						gk_is_style1_anim(wrapper, contents, slides, $G['actual_slide']+1, $G);
					});
				}
			}
		}).periodical(250);
	});
});

function gk_is_style1_text_anim(wrapper, contents, which, $G){
	var txt = $E(".gk_is_text");
	new Fx.Opacity(txt,{duration: $G['anim_speed']/2}).start(1,0);
	(function(){
		new Fx.Opacity(txt,{duration: $G['anim_speed']/2}).start(0,1);
		txt.innerHTML = contents[which];
	}).delay($G['anim_speed']);
}

function gk_is_style1_anim(wrapper, contents, slides, which, $G){
	if(which != $G['actual_slide']){
		var max = slides.length-1;
		if(which > max) which = 0;
		if(which < 0) which = max;
		var actual = $G['actual_slide'];
		
		$G['actual_slide'] = which;
		slides[$G['actual_slide']].setStyle("z-index",max+1);
		new Fx.Opacity(slides[actual],{duration: $G['anim_speed']}).start(1,0);
		new Fx.Opacity(slides[which],{duration: $G['anim_speed']}).start(0,1);
		if($E(".gk_is_text",wrapper)) gk_is_style1_text_anim(wrapper, contents, which, $G);		
			
		switch($G['anim_type']){
			case 'opacity': break;
			case 'top': new Fx.Style(slides[which],'margin-top',{duration: $G['anim_speed']}).start((-1)*slides[which].getSize().size.y,0);break;
			case 'left': new Fx.Style(slides[which],'margin-left',{duration: $G['anim_speed']}).start((-1)*slides[which].getSize().size.x,0);break;
			case 'bottom': new Fx.Style(slides[which],'margin-top',{duration: $G['anim_speed']}).start(slides[which].getSize().size.y,0);break;
			case 'right': new Fx.Style(slides[which],'margin-left',{duration: $G['anim_speed']}).start(slides[which].getSize().size.x,0);break;
		}
				
		(function(){slides[$G['actual_slide']].setStyle("z-index",$G['actual_slide']);}).delay($G['anim_speed']);
	}
}