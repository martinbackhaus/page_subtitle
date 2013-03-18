<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

class PageSubTitle extends Frontend
{
	public function pageSubTitleInsertTag($strTag)
	{
		$arrSplit	=	explode('::', $strTag);

		if($arrSplit[0] == 'page')
		{
			if(isset($arrSplit[1]) && $arrSplit[1] == 'pageSubTitle')
			{
				trigger_error('The insert tag "env::website_title" is deprecated. Please use "page::rootTitle" instead.', E_USER_NOTICE);
				$arrCache[$strTag] = $objPage->rootTitle;
			}
		}
		return false;
	}
}

?>