<?php

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgButtonGK_Typography extends JPlugin
{
	var $template_name = 'gk_coolfoto';
	
	var $styles = array(
		array(
			'Warnings',
			array('info1','<p class="info1">Your info message goes here!</p>', '&lt;p class="info1"&gt;Your info message goes here!&lt;/p&gt;'),
			array('tips1','<p class="tips1">Your tips goes here!</p>','&lt;p class="tips1"&gt;Your tips goes here!&lt;/p&gt;'),
			array('warning1','<p class="warning1">Your warning message goes here!</p>','&lt;p class="warning1"&gt;Your warning message goes here!&lt;/p&gt;'),
			array('info2','<p class="info2">Your info message goes here!</p>','&lt;p class="info2"&gt;Your info message goes here!&lt;/p&gt;'),
			array('tips2','<p class="tips2">Your tips goes here!</p>','&lt;p class="tips2"&gt;Your tips goes here!&lt;/p&gt;'),
			array('warning2','<p class="warning2">Your warning message goes here!</p>','&lt;p class="warning2"&gt;Your warning message goes here!&lt;/p&gt;'),
			array('info3','<p class="info3">Your info message goes here!</p>','&lt;p class="info3"&gt;Your info message goes here!&lt;/p&gt;'),
			array('tips3','<p class="tips3">Your tips goes here!</p>','&lt;p class="tips3"&gt;Your tips goes here!&lt;/p&gt;'),
			array('warning3','<p class="warning3">Your warning message goes here!</p>','&lt;p class="warning3"&gt;Your warning message goes here!&lt;/p&gt;'),
			array('info4','<p class="info4">Your info message goes here!</p>','&lt;p class="info4"&gt;Your info message goes here!&lt;/p&gt;'),
			array('tips4','<p class="tips4">Your tips goes here!</p>','&lt;p class="tips4"&gt;Your tips goes here!&lt;/p&gt;'),
			array('warning4','<p class="warning4">Your warning message goes here!</p>','&lt;p class="warning4"&gt;Your warning message goes here!&lt;/p&gt;')
		),
		array(
			'Headers',
			array('H1', '<h1>Heading 1</h1>', '&lt;h1&gt;Heading 1&lt;/h1&gt;'),
			array('H2', '<h2>Heading 2</h2>', '&lt;h2&gt;Heading 2&lt;/h2&gt;'),
			array('H3', '<h3>Heading 3</h3>', '&lt;h3&gt;Heading 3&lt;/h3&gt;'),
			array('H4', '<h4>Heading 4</h4>', '&lt;h4&gt;Heading 4&lt;/h4&gt;')
		),
		array(
			'Icons',
			array('audio', '<p class="audio">Your audio message goes here!</p>', '&lt;p class="audio"&gt;Your audio message goes here!&lt;/p&gt;'),
			array('webcam', '<p class="webcam">Your webcam message goes here!</p>', '&lt;p class="webcam"&gt;Your webcam message goes here!&lt;/p&gt;'),
			array('email', '<p class="email">Your email message goes here!</p>', '&lt;p class="email"&gt;Your email message goes here!&lt;/p&gt;'),
			array('creditcard', '<p class="creditcard">Your creditcard message goes here!</p>', '&lt;p class="creditcard"&gt;Your creditcard message goes here!&lt;/p&gt;'),
			array('feed','<p class="feed">Your feed message goes here!</p>','&lt;p class="feed"&gt;Your feed message goes here!&lt;/p&gt;'),
			array('help','<p class="help">Your help message goes here!</p>','&lt;p class="help"&gt;Your help message goes here!&lt;/p&gt;'),
			array('images','<p class="images">Your images message goes here!</p>','&lt;p class="images"&gt;Your images message goes here!&lt;/p&gt;'),
			array('lock','<p class="lock">Your lock message goes here!</p>','&lt;p class="lock"&gt;Your lock message goes here!&lt;/p&gt;'),
			array('printer','<p class="printer">Your printer message goes here!</p>','&lt;p class="printer"&gt;Your printer message goes here!&lt;/p&gt;'),
			array('report','<p class="report">Your report message goes here!</p>','&lt;p class="report"&gt;Your report message goes here!&lt;/p&gt;'),
			array('script','<p class="script">Your script message goes here!</p>','&lt;p class="script"&gt;Your script message goes here!&lt;/p&gt;'),
			array('time','<p class="time">Your time message goes here!</p>','&lt;p class="time"&gt;Your time message goes here!&lt;/p&gt;'),
			array('user','<p class="user">Your user message goes here!</p>','&lt;p class="user"&gt;Your user message goes here!&lt;/p&gt;'),
			array('world','<p class="world">Your world message goes here!</p>','&lt;p class="world"&gt;Your world message goes here!&lt;/p&gt;'),
			array('cart','<p class="cart">Your cart message goes here!</p>','&lt;p class="cart"&gt;Your cart message goes here!&lt;/p&gt;'),
			array('cd','<p class="cd">Your cd message goes here!</p>','&lt;p class="cd"&gt;Your cd message goes here!&lt;/p&gt;'),
			array('chart_bar','<p class="chart_bar">Your chart_bar message goes here!</p>','&lt;p class="chart_bar"&gt;Your chart_bar message goes here!&lt;/p&gt;'),
			array('chart_line','<p class="chart_line">Your chart_line message goes here!</p>','&lt;p class="chart_line"&gt;Your chart_line message goes here!&lt;/p&gt;'),
			array('chart_pie','<p class="chart_pie">Your chart_pie message goes here!</p>','&lt;p class="chart_pie"&gt;Your chart_pie message goes here!&lt;/p&gt;'),
			array('clock','<p class="clock">Your clock message goes here!</p>','&lt;p class="clock"&gt;Your clock message goes here!&lt;/p&gt;'),
			array('cog','<p class="cog">Your cog message goes here!</p>','&lt;p class="cog"&gt;Your cog message goes here!&lt;/p&gt;'),
			array('coins','<p class="coins">Your coins message goes here!</p>','&lt;p class="coins"&gt;Your coins message goes here!&lt;/p&gt;'),
			array('compress','<p class="compress">Your compress message goes here!</p>','&lt;p class="compress"&gt;Your compress message goes here!&lt;/p&gt;'),
			array('computer','<p class="computer">Your computer message goes here!</p>','&lt;p class="computer"&gt;Your computer message goes here!&lt;/p&gt;'),
			array('cross','<p class="cross">Your cross message goes here!</p>','&lt;p class="cross"&gt;Your cross message goes here!&lt;/p&gt;'),
			array('disk','<p class="disk">Your disk message goes here!</p>','&lt;p class="disk"&gt;Your disk message goes here!&lt;/p&gt;'),
			array('error','<p class="error">Your error message goes here!</p>','&lt;p class="error"&gt;Your error message goes here!&lt;/p&gt;'),
			array('exclamation','<p class="exclamation">Your exclamation message goes here!</p>','&lt;p class="exclamation"&gt;Your exclamation message goes here!&lt;/p&gt;'),
			array('film','<p class="film">Your film message goes here!</p>','&lt;p class="film"&gt;Your film message goes here!&lt;/p&gt;'),
			array('folder','<p class="folder">Your folder message goes here!</p>','&lt;p class="folder"&gt;Your folder message goes here!&lt;/p&gt;'),
			array('group','<p class="group">Your group message goes here!</p>','&lt;p class="group"&gt;Your group message goes here!&lt;/p&gt;'),
			array('heart','<p class="heart">Your heart message goes here!</p>','&lt;p class="heart"&gt;Your heart message goes here!&lt;/p&gt;'),
			array('house','<p class="house">Your house message goes here!</p>','&lt;p class="house"&gt;Your house message goes here!&lt;/p&gt;'),
			array('image','<p class="image">Your image message goes here!</p>','&lt;p class="image"&gt;Your image message goes here!&lt;/p&gt;'),
			array('information','<p class="information">Your information message goes here!</p>','&lt;p class="information"&gt;Your information message goes here!&lt;/p&gt;'),
			array('magnifier','<p class="magnifier">Your magnifier message goes here!</p>','&lt;p class="magnifier"&gt;Your magnifier message goes here!&lt;/p&gt;'),
			array('money','<p class="money">Your money message goes here!</p>','&lt;p class="money"&gt;Your money message goes here!&lt;/p&gt;'),
			array('new','<p class="new">Your new message goes here!</p>','&lt;p class="new"&gt;Your new message goes here!&lt;/p&gt;'),
			array('note','<p class="note">Your note message goes here!</p>','&lt;p class="note"&gt;Your note message goes here!&lt;/p&gt;'),
			array('page','<p class="page">Your page message goes here!</p>','&lt;p class="page"&gt;Your page message goes here!&lt;/p&gt;'),
			array('page_white','<p class="page_white">Your page_white message goes here!</p>','&lt;p class="page_white"&gt;Your page_white message goes here!&lt;/p&gt;'),
			array('plugin','<p class="plugin">Your plugin message goes here!</p>','&lt;p class="plugin"&gt;Your plugin message goes here!&lt;/p&gt;'),
			array('accept','<p class="accept">Your accept message goes here!</p>','&lt;p class="accept"&gt;Your accept message goes here!&lt;/p&gt;'),
			array('add','<p class="add">Your add message goes here!</p>','&lt;p class="add"&gt;Your add message goes here!&lt;/p&gt;'),
			array('camera','<p class="camera">Your camera message goes here!</p>','&lt;p class="camera"&gt;Your camera message goes here!&lt;/p&gt;'),
			array('brick','<p class="brick">Your brick message goes here!</p>','&lt;p class="brick"&gt;Your brick message goes here!&lt;/p&gt;'),
			array('box','<p class="box">Your box message goes here!</p>','&lt;p class="box"&gt;Your box message goes here!&lt;/p&gt;'),
			array('calendar','<p class="calendar">Your calendar message goes here!</p>','&lt;p class="calendar"&gt;Your calendar message goes here!&lt;/p&gt;')
		),
		array(
			'Highlights',
			array('highlight-1','<span class="highlight-1">Your highlight phrase goes here!</span>','&lt;span class="highlight-1"&gt;Your highlight phrase goes here!&lt;/span&gt;'),
			array('highlight-2','<span class="highlight-2">Your highlight phrase goes here!</span>','&lt;span class="highlight-2"&gt;Your highlight phrase goes here!&lt;/span&gt;'),
			array('highlight-3','<span class="highlight-3">Your highlight phrase goes here!</span>','&lt;span class="highlight-3"&gt;Your highlight phrase goes here!&lt;/span&gt;'),
			array('highlight-3','<span class="highlight-4">Your highlight phrase goes here!</span>','&lt;span class="highlight-4"&gt;Your highlight phrase goes here!&lt;/span&gt;')
		),
		array(
			'Code',
			array('pre', '<pre>code</pre>', '&lt;pre&gt;code&lt;/pre&gt;'),
			array('code1', '<div class="code1">code</div>', '&lt;div class="code1"&gt;code&lt;/div&gt;'),
			array('code2', '<div class="code2">code</div>', '&lt;div class="code2"&gt;code&lt;/div&gt;'),
			array('code3', '<div class="code3"><h4>Name of your file</h4>code</div>', '&lt;div class="code3"&gt;&lt;h4&gt;Name of your file&lt;/h4&gt;code&lt;/div&gt;')
		),
		array(
			'Unordered lists',
			array('bullet1', '<ul class="bullet1"><li>Element</li></ul>', '&lt;ul class="bullet1"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('bullet2', '<ul class="bullet2"><li>Element</li></ul>', '&lt;ul class="bullet2"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('bullet3', '<ul class="bullet3"><li>Element</li></ul>', '&lt;ul class="bullet3"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('bullet4', '<ul class="bullet4"><li>Element</li></ul>', '&lt;ul class="bullet4"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('circle1', '<ul class="circle1"><li>Element</li></ul>', '&lt;ul class="circle1"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('circle2', '<ul class="circle2"><li>Element</li></ul>', '&lt;ul class="circle2"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('square1', '<ul class="square1"><li>Element</li></ul>', '&lt;ul class="square1"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('square2', '<ul class="square2"><li>Element</li></ul>', '&lt;ul class="square2"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;'),
			array('square3', '<ul class="square3"><li>Element</li></ul>', '&lt;ul class="square3"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ul&gt;')
		),
		array(
			'Ordered lists',
			array('roman', '<ol class="roman"><li>Element</li></ol>', '&lt;ol class="roman"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ol&gt;'),
			array('dec', '<ol class="dec"><li>Element</li></ol>', '&lt;ol class="dec"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ol&gt;'),
			array('alpha', '<ol class="alpha"><li>Element</li></ol>', '&lt;ol class="alpha"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ol&gt;'),
			array('decimalLeadingZero', '<ol class="decimalLeadingZero"><li>Element</li></ol>', '&lt;ol class="decimalLeadingZero"&gt;&lt;li&gt;Element&lt;/li&gt;&lt;/ol&gt;'),
			array('number1', '<div class="number1"><p><span>here goes a number</span>text of element</p>', '&lt;div class="number1"&gt;&lt;p&gt;&lt;span&gt;here goes a number&lt;/span&gt;text of element&lt;/p&gt;'),
			array('number2', '<div class="number1"><p><span>here goes a number</span>text of element</p>', '&lt;div class="number1"&gt;&lt;p&gt;&lt;span&gt;here goes a number&lt;/span&gt;text of element&lt;/p&gt;')
		),
		array(
			'Abbrs and acronyms',
			array('abbr', '<abbr title="Here goes full word or phrase">here goes an abbreviation</abbr>', '&lt;abbr title="Here goes full word or phrase"&gt;here goes an abbreviation&lt;/abbr&gt;'),
			array('acronym', '<acronym title="Here goes full phrase">here goes an acronym</acronym>', '&lt;acronym title="Here goes full phrase"&gt;here goes an acronym&lt;/acronym&gt;')
		),
		array(
			'Definition lists',
			array('def1', '<dl class="def1"><dt>Here goes the word you are about to define</dt><dd>Here goes definition</dd></dl>', '&lt;dl class="def1"&gt;&lt;dt&gt;Here goes the word you are about to define&lt;/dt&gt;&lt;dd&gt;Here goes definition&lt;/dd&gt;&lt;/dl&gt;'),
			array('def2', '<dl class="def2"><dt>Here goes the word you are about to define</dt><dd>Here goes definition</dd></dl>', '&lt;dl class="def2"&gt;&lt;dt&gt;Here goes the word you are about to define&lt;/dt&gt;&lt;dd&gt;Here goes definition&lt;/dd&gt;&lt;/dl&gt;'),
			array('def3', '<dl class="def3"><dt>Here goes the word you are about to define</dt><dd>Here goes definition</dd></dl>', '&lt;dl class="def3"&gt;&lt;dt&gt;Here goes the word you are about to define&lt;/dt&gt;&lt;dd&gt;Here goes definition&lt;/dd&gt;&lt;/dl&gt;')
		),
		array(
			'Legends',
			array('legend1', '<div class="legend1"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend1"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;'),
			array('legend2', '<div class="legend2"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend2"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;'),
			array('legend3', '<div class="legend3"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend3"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;'),
			array('legend4', '<div class="legend4"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend4"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;'),
			array('legend5', '<div class="legend5"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend5"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;'),
			array('legend6', '<div class="legend6"> <h4> Title </h4> <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p> </div>', '&lt;div class="legend6"&gt; &lt;h4&gt; Title &lt;/h4&gt; &lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Integer urna. Aenean tristique. Fusce a neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.&lt;/p&gt; &lt;/div&gt;')
		),
		array(
			'Dropcaps',
			array('Dropcap1', '<p><span class="Dropcap1">t</span> to make the first letter larger</p>', '&lt;p&gt;&lt;span class="Dropcap1"&gt;t&lt;/span&gt; to make the first letter larger&lt;/p&gt;'),
			array('Dropcap2', '<p><span class="Dropcap2">t</span> to make the first letter larger</p>', '&lt;p&gt;&lt;span class="Dropcap2"&gt;t&lt;/span&gt; to make the first letter larger&lt;/p&gt;'),
			array('Dropcap3', '<p><span class="Dropcap3">t</span> to make the first letter larger</p>', '&lt;p&gt;&lt;span class="Dropcap3"&gt;t&lt;/span&gt; to make the first letter larger&lt;/p&gt;')
		),
		array(
			'Floated blocks',
			array('blockTextLeft', '<span class="blockTextLeft">Block of text</span>', '&lt;span class="blockTextLeft"&gt;Block of text&lt;/span&gt;'),
			array('blockTextRight', '<span class="blockTextRight">Block of text</span>', '&lt;span class="blockTextRight"&gt;Block of text&lt;/span&gt;'),
			array('blockTextCenter', '<span class="blockTextCenter">Block of text</span>', '&lt;span class="blockTextCenter"&gt;Block of text&lt;/span&gt;')
		),
		array(
			'Blockquotes',
			array('blockquote', '<blockquote>Your quoted text goes here!</blockquote>', '&lt;blockquote&gt;Your quoted text goes here!&lt;/blockquote&gt;'),
			array('blockquote1', '<blockquote><div class="blockquote1"><div>Your quoted text goes here!</div></div></blockquote>', '&lt;blockquote&gt;&lt;div class="blockquote1"&gt;&lt;div&gt;Your quoted text goes here!&lt;/div&gt;&lt;/div&gt;&lt;/blockquote&gt;'),
			array('blockquote2', '<blockquote><div class="blockquote2"><div>Your quoted text goes here!</div></div></blockquote>', '&lt;blockquote&gt;&lt;div class="blockquote2"&gt;&lt;div&gt;Your quoted text goes here!&lt;/div&gt;&lt;/div&gt;&lt;/blockquote&gt;'),
			array('blockquote3', '<blockquote><div class="blockquote3"><div>Your quoted text goes here!</div></div></blockquote>', '&lt;blockquote&gt;&lt;div class="blockquote3"&gt;&lt;div&gt;Your quoted text goes here!&lt;/div&gt;&lt;/div&gt;&lt;/blockquote&gt;'),
			array('blockquote4', '<blockquote><div class="blockquote4"><div>Your quoted text goes here!</div></div></blockquote>', '&lt;blockquote&gt;&lt;div class="blockquote4"&gt;&lt;div&gt;Your quoted text goes here!&lt;/div&gt;&lt;/div&gt;&lt;/blockquote&gt;')
		),
		array(
			'Other span styles',
			array('clear', '<span class="clear">Lorem ipsum dolor sit amet.</span>', '&lt;span class="clear"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('clear-1', '<span class="clear-1">Lorem ipsum dolor sit amet.</span>', '&lt;span class="clear-1"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('clear-2', '<span class="clear-2">Lorem ipsum dolor sit amet.</span>', '&lt;span class="clear-2"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color', '<span class="color">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-1', '<span class="color-1">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-1"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-2', '<span class="color-2">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-2"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-3', '<span class="color-3">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-3"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-4', '<span class="color-4">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-4"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-5', '<span class="color-5">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-5"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-6', '<span class="color-6">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-6"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;'),
			array('color-7', '<span class="color-7">Lorem ipsum dolor sit amet.</span>', '&lt;span class="color-7"&gt;Lorem ipsum dolor sit amet.&lt;/span&gt;')
		),
	);
	
	function plgButtonGK_Typography(& $subject, $config)
	{
		parent::__construct($subject, $config);
	}

	function onDisplay($name)
	{
		global $mainframe;
		
		$button = new JObject();
		$doc = & JFactory::getDocument();
		
		$doc->addStyleSheet('../plugins/editors-xtd/gk_typography/css/gk_typography.css', 'text/css', null);
		$doc->addScript('../plugins/editors-xtd/gk_typography/js/gk_typography.js', "text/javascript");  
		$doc->addScriptDeclaration('$GKEditor = "'.$name.'";');
		$template = $mainframe->getTemplate();
		JHTML::_('behavior.modal');
		$button->set('modal', true);
		$button->set('link', '');
		$button->set('text', JText::_('GK Typography'));
		$button->set('name', 'gk_typography');
		$button->set('options', "{handler:'adopt',adopt:$('gk_typography_content'),size:{x:800,y:500}}");
		
		$generated_content = '<script type="text/javascript">';
		$generated_content .= '$GKTypo = [';
		
		for($i = 0; $i < count($this->styles); $i++){
			for($j = 0; $j < count($this->styles[$i]); $j++){
				if($j == 0){
					$generated_content .= '[';
				}else{
					$generated_content .= '\''.$this->styles[$i][$j][1] . '\',';
				}
			}
			
			$generated_content = substr($generated_content, 0, strlen($generated_content)-1);
			$generated_content .= '],';
		}
		
		$generated_content = substr($generated_content, 0, strlen($generated_content)-1);
		$generated_content .= '];';
		$generated_content .= '</script>';
		$generated_content .= '<table><tbody>';
		
		for($i = 0; $i < count($this->styles); $i++){
			
			$first = false;
			
			for($j = 0; $j < count($this->styles[$i]); $j++){
				if($j == 0){
					$generated_content .= '<tr class="section"><td colspan="2">'.$this->styles[$i][$j].'</td></tr>';
				}else{
					if($this->styles[$i][0] == 'Icons'){
						if($this->styles[$i][$j][0] == 'audio' || $this->styles[$i][$j][0] == 'creditcard' || $this->styles[$i][$j][0] == 'date' || $this->styles[$i][$j][0] == 'email' || 
							$this->styles[$i][$j][0] == 'feed' || $this->styles[$i][$j][0] == 'help' || $this->styles[$i][$j][0] == 'info' || $this->styles[$i][$j][0] == 'tips' ||
							$this->styles[$i][$j][0] == 'warning' || $this->styles[$i][$j][0] == 'webcam'){
							
							$generated_content .= '<tr '.(!$first ? 'class="first"' : '').'>
														<td><img src="../templates/'.$this->template_name.'/images/icons/'.(($this->styles[$i][$j][0] == 'creditcard') ? 'credit' : $this->styles[$i][$j][0]).'.gif" alt="" /><span onclick="click($GKTypo['.$i.']['.($j-1).'])">'.$this->styles[$i][$j][0].'</span></td>
														<td><code>'.$this->styles[$i][$j][2].'</code></td>
													</tr>';
							
						}else{
							$generated_content .= '<tr '.(!$first ? 'class="first"' : '').'>
														<td><img src="../templates/'.$this->template_name.'/images/icons/'.$this->styles[$i][$j][0].'.png" alt="" /><span onclick="click($GKTypo['.$i.']['.($j-1).'])">'.$this->styles[$i][$j][0].'</span></td>
														<td><code>'.$this->styles[$i][$j][2].'</code></td>
													</tr>';
						}
					}else{
						$generated_content .= '<tr '.(!$first ? 'class="first"' : '').'>
													<td><span onclick="click($GKTypo['.$i.']['.($j-1).'])">'.$this->styles[$i][$j][0].'</span></td>
													<td><code>'.$this->styles[$i][$j][2].'</code></td>
												</tr>';
					}
				}
				
				if($j == 1) $first = true;
			}
		}
		
		$generated_content .= '</tbody></table>';
		
		echo '<div style="display:none;"><div id="gk_typography_content" onclick="click();">'.$generated_content.'</div></div>';
		return $button;
	}
}