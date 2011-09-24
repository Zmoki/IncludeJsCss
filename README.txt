Snippet IncludeJSCss for MODx Evolution
=================================
**Author: Zarema Khalilova (zarema.khalilova@gmail.com)**

This snippet allows include CSS and JS files to the resource

Installation
============
1. Create a new snippet, name it IncludeJsCss
2. Put code from file includejscss.snippet.php, click Save

Params
=============
Param: css
Purpose:
The path to the CSS file or few paths to different CSS files separated a comma
Options:
Any valid file location or few locations separated a comma
Example:
[[IncludeJsCss? &css=`assets/templates/mytemplate/css/style.css` ]]
[[IncludeJsCss? &css=`assets/templates/mytemplate/css/reset.css,assets/templates/mytemplate/css/style.css` ]]

Param: js
Purpose:
The path to JS file or few paths to different JS files separated a comma
Options:
Any valid file location or few locations separated a comma
Example:
[[IncludeJsCss? &js=`assets/templates/mytemplate/js/some.js` ]]
[[IncludeJsCss? &js=`assets/templates/mytemplate/js/some.js,assets/templates/mytemplate/js/other.js` ]]

Param: startup
Purpose:
Injected JS file (or files) inside the HEAD tag of a resource or before the closing BODY tag
Options:
1 - inside the HEAD tag of a resource
0 - before the closing BODY tag
Default:
0
Example:
[[IncludeJsCss? &js=`assets/templates/mytemplate/js/some.js` &startup=`1`]]
