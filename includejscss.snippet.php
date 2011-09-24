<?php
/**
 * @name        IncludeJsCss
 * @category 	snippet
 * @version 	1.1
 * @license 	Public Domain, use as you like
 * @author      Zarema Khalilova (zarema.khalilova@gmail.com)
 * @internal	@modx_category Content
 *
 * @param &css The path to the CSS file or few paths to different CSS files separated a comma
 * @param &js The path to JS file or few paths to different JS files separated a comma
 * @param &startup Injected JS file (or files) inside the HEAD tag of a resource (if set value 1) or before the closing BODY tag (if set value 0).
 * 
 *
 * This snippet allows include css and js files to the resource
 */
 
if(isset($css)){
    $css = explode(',', $css);
    foreach($css as $c){
        $modx->regClientCSS($c);
    }
}
if(isset($js)){
    $js = explode(',', $js);
    foreach($js as $j){
        if(isset($startup) && $startup){
        $modx->regClientStartupScript($j);
    } else
        $modx->regClientScript($j);
    }
}
?>
