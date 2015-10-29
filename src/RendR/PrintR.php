<?php

namespace RendR;

class PrintR
{
    public static function r($input)
    {
    	//return '<pre>'.print_r($input, true).'</pre>';
    	switch (gettype($input)) {
    		case 'object':
    		case 'array':
    			$output .= '(' . count($input) . ' values)';
	    		$output .= '<ul>';
		    	foreach($input as $key => $value) {
		    		$output .= '<li>['.$key.'] => '.self::r($value).'</li>';
		    	}
		    	$output .= '</ul>';
		    	return $output;
		    break;
		    default:
		    	return $input;

    	}
    }
}