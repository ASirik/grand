/*--------------------------------------------------------------
# Coolfoto - June 2009 (for Joomla 1.5)
# Copyright (C) 2007-2009 Gavick.com. All Rights Reserved.
# License: Copyrighted Commercial Software
# Website: http://www.gavick.com
# Support: support@gavick.com  
---------------------------------------------------------------*/

window.addEvent("domready",function(){
	var $b = $(document.getElementsByTagName('body')[0]);
	// smoothscroll init
	new SmoothScroll();
	// animation classes - Fx.Height and Fx.Opacity
	Fx.Height = Fx.Style.extend({initialize: function(el, options){this.parent(el, 'height', options);this.element.setStyle('overflow', 'hidden');},toggle: function(){return (this.element.offsetHeight > 0) ? this.custom(this.element.offsetHeight, 0) : this.custom(0, this.element.scrollHeight);},show: function(){return this.set(this.element.scrollHeight);}});
	Fx.Opacity = Fx.Style.extend({initialize: function(el, options){this.now = 1;this.parent(el, 'opacity', options);},toggle: function(){return (this.now > 0) ? this.start(1, 0) : this.start(0, 1);},show: function(){return this.set(1);}});
	// help vars
	var login_opened = false;
	var register_opened = false;
	
	if($('popup_login')){ 
		var popup_login_o = new Fx.Opacity('popup_login', {duration: 400}).set(0);
		var popup_login_w = new Fx.Style('popup_login', 'width',{duration: 400}).set(0);
		var popup_login_h = new Fx.Style('popup_login', 'height',{duration: 400}).set(0);
		var popup_login_t = new Fx.Style('popup_login', 'top',{duration: 400}).set(-200);
		var popup_login_l = new Fx.Style('popup_login', 'left',{duration: 400}).set(0);
		$('popup_login').setStyle("display", "block");
		$('close_button_login').addEvent("click", function(){
			popup_login_o.start(0);
			popup_login_w.start(0);
			popup_login_h.start(0);
			popup_login_t.start(-200);
			popup_login_l.start(((window.getWidth()-265)/2));
			login_opened = false;
		});
	}

	if($('popup_register')){ 
		var popup_register_o = new Fx.Opacity('popup_register', {duration: 400}).set(0);
		var popup_register_w = new Fx.Style('popup_register', 'width',{duration: 400}).set(0);
		var popup_register_h = new Fx.Style('popup_register', 'height',{duration: 400}).set(0);
		var popup_register_t = new Fx.Style('popup_register', 'top',{duration: 400}).set(-350);
		var popup_register_l = new Fx.Style('popup_register', 'left',{duration: 400}).set(0);
		$('popup_register').setStyle("display", "block");
		$('close_button_register').addEvent("click", function(){
			popup_register_o.start(0);
			popup_register_w.start(0);
			popup_register_h.start(0);
			popup_register_t.start(-350);
			popup_register_l.start(((window.getWidth()-265)/2));
			register_opened = false;
		});		
	}
	// login
	if($('login_btn')) $('login_btn').addEvent("click", function(e){
		new Event(e).stop();
		if(!login_opened){
			var tmax = 300;
			popup_login_o.start(1);
			popup_login_w.start(530);
			popup_login_h.start(200);
			popup_login_t.start(tmax);
			popup_login_l.start(((window.getWidth()-265)/2), ((window.getWidth()-530)/2));
			login_opened = true;
		}
	});
	// register
	if($('register_btn')) $('register_btn').addEvent("click", function(e){
		new Event(e).stop();
		if(!register_opened){
			var tmax = 300;
			popup_register_o.start(1);
			popup_register_w.start(530);
			popup_register_h.start(350);
			popup_register_t.start(tmax);
			popup_register_l.start(((window.getWidth()-265)/2), ((window.getWidth()-530)/2));
			register_opened = true;
		}
	});
	//
	if($('stylearea')){
		$A($$('.style_switcher')).each(function(element,index){
			element.addEvent('click',function(event){
				var event = new Event(event);
				event.preventDefault();
				changeStyle(index+1);
			});
		});
		new SmoothScroll();
	}
	if($('wrapper_header3').getSize().size.y > 741){
		$('wrapper_header3').setStyle("background-position","right bottom");
	}
});
// Function to change backgrouns
function changeStyle(style){
	var file = $template_path+'/css/style'+style+'.css';
	new Asset.css(file,{id:'css_style'+style});
	new Cookie.set('gk27_style',style,{duration: 200,path: "/"});
}