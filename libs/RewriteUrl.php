<?php
class RewriteUrl 
{
	static public function Encode($string) {
		
		$utf8 = array(
	        '/[Ááàảãạâấầẩẫậăắằẳẵặ]/u'   =>   'a',
	        '/[iíìỉĩị]/u'     =>   'i',
	        '/[éèẻẽẹêếềểễệ]/u'     =>   'e',
	        '/[óòỏõọơớờởỡợôốồổỗộ]/u'   =>   'o',
	        '/[úùủũụưứừửữự]/u'     =>   'u',
	        '/[yýỳỷỹỵ]/u'     =>   'y',
	        '/ç/'           =>   'c',
	        '/[đĐ]/u'			=> 'd',
	        '/Ç/'           =>   'c',
	        '/ñ/'           =>   'n',
	        '/Ñ/'           =>   'n',
	        '/–/'           =>   '-', // UTF-8 hyphen to "normal" hyphen
	        '/--/'           =>   '-', 
	        '/[\/,.?>\\\<`~!@#$%^&\’\‘‹›\‚=+{}()*""\'\']/u'    =>   '', // Literally a single quote
	        '/[“”«»„]/u'    =>   '', // Double quote
	        '/ /'           =>   '-', // nonbreaking space (equiv. to 0x160
	    );

	    $encode = mb_strtolower($string, 'UTF-8');
    	$encode = preg_replace(array_keys($utf8), array_values($utf8), $encode);
    	return trim($encode, '-');
    	return $encode;
	
	}
}
