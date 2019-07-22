<?php
namespace content;

class view
{
	public static function config()
	{
		// define default value for global
		\dash\data::site_title(T_("Dash Blog Example"));
		\dash\data::site_desc(T_("Free PHP Framework & CMS for developers."));
		\dash\data::site_slogan(T_("The simple framework for php programmers ;)"));
		\dash\data::page_desc(\dash\data::site_desc(). ' | '. \dash\data::site_slogan());
		// we dont use js
		\dash\data::include_js(false);
		\dash\data::include_css(false);
	}
}
?>