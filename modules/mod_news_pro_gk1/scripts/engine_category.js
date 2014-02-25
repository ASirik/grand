window.addEvent("load",function(){	
	$$('.gk_npro_mainwrap').each(function(el,i){
		var TID = el.getProperty('id');
		var main = $(TID);
		var animation = false;
		var $G = $Gavick[TID];
		//
		if($E('.gk_npro_full_interface', main) && $E('.gk_npro_wrap1', main)){
			var offset = $E('.gk_npro_wrap1', main).getSize().size.x;
			var scroller = new Fx.Scroll($E('.gk_npro_wrap1', main),{duration: $G['animation_speed']});	
			var blocks = $ES('.gk_npro_block_wrap', main);
			var actual_page = 0;
			var autoanim = (el.hasClass('autoanim')) ? true : false;
			var helpfun = function(){
				$clear(animation);
				animation = (function(){
					if(actual_page == blocks.length - 1){
						scroller.scrollTo(0,0);
						$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
							if(k != 0) elmt.removeProperty("class");
							else elmt.setProperty("class", "active");
						});
						actual_page = 0;
					}else{
						actual_page++;	
						scroller.scrollTo(actual_page*offset,0);
						$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
							if(k != actual_page) elmt.removeProperty("class");
							else elmt.setProperty("class", "active");
						});				
					}	
				}).periodical($G['animation_interval']);	
			};
			
			if(autoanim) helpfun();
			//
			$E('.gk_npro_full_interface li', main).setProperty("class", "active");
			//
			$ES('.gk_npro_full_interface li', main).each(function(elm, j){
				elm.addEvent("click", function(){
					if(autoanim) helpfun();
					scroller.scrollTo(j*offset,0);
					$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
						if(k != j) elmt.removeProperty("class");
						else elmt.setProperty("class", "active");
						actual_page = j;
					});
				});	
			});
			//
			$E('.gk_npro_full_prev', main).addEvent("click", function(){
				if(autoanim) helpfun();
				if(actual_page == 0){
					scroller.scrollTo((blocks.length - 1 )*offset,0);
					$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
						if(k != blocks.length - 1) elmt.removeProperty("class");
						else elmt.setProperty("class", "active");
					});
					actual_page = blocks.length - 1;
				}else{
					actual_page--;	
					scroller.scrollTo(actual_page*offset,0);
					$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
						if(k != actual_page) elmt.removeProperty("class");
						else elmt.setProperty("class", "active");
					});				
				}
			});
			//
			$E('.gk_npro_full_next', main).addEvent("click", function(){
				if(autoanim) helpfun();
				if(actual_page == blocks.length - 1){
					scroller.scrollTo(0,0);
					$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
						if(k != 0) elmt.removeProperty("class");
						else elmt.setProperty("class", "active");
					});
					actual_page = 0;
				}else{
					actual_page++;	
					scroller.scrollTo(actual_page*offset,0);
					$ES('.gk_npro_full_interface li', main).each(function(elmt, k){
						if(k != actual_page) elmt.removeProperty("class");
						else elmt.setProperty("class", "active");
					});				
				}				
			});
		}
	});
});