<?php

namespace B2;

class Tinymce
{
	static function appear($element = "'.tinymce'", $params = [])
	{
		// CDN: https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.13/jquery.tinymce.min.js
		bors_use('/_bower-assets/tinymce/jquery.tinymce.min.js');

		template_js('
$().ready(function() { $("'.$element.'").tinymce({
//	script_url : "/_bower-assets/tinymce/tiny_mce.js", '.@file_get_contents(BORS_3RD_PARTY.'/inc/tinymce/'.@$mode.'.inc').'
	});
});');
	}
}
