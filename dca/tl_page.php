<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']			=		str_replace('pageTitle,','pageTitle,pageSubTitle,', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);

$GLOBALS['TL_DCA']['tl_page']['fields']['pageSubTitle']			=		array
(
	'label'				=>		&$GLOBALS['TL_LANG']['tl_page']['pageSubTitle'],
	'exclude'			=>		true,
	'inputType'			=>		'text',
	'eval'				=>		array('maxlength'=>255, 'decodeEntities'=>true, 'tl_class'=>'long')
);

?>