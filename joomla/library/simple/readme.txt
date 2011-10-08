PHP Joomla 1.6+ Library <libraryname>
<description>

Author: <author>
Site: <site>


	
----------------------------------- How to use ---------------------------------
If you are familiarized with Joomla way of call functions, the logic of this 
library will be simple for you. Fist, import the library:

	jimport('libexample.libexample');

They, call some instance name. Normaly the same name of one folder.

	$facebook = JUGRS::getFacebook();

Then, call some function inside this instance. All they are on 
/libraries/jugrs/"name"/"name".php. Some of these funcions will return one 
value that must be printed, and others just return TRUE if it runs, and will do 
something for you on your site. One another example:

	echo $facebook->comment();

--------------------------- Instalation & Dependences --------------------------
Dependences:
- CMS Joomla 1.6+ (or equivalent)
- PHP 5.2+


HOW TO INSTALL?
    JOOMLA 1.5
	
This library is aimed to use on Joomla 1.6+. It provably can run also on Joomla 
1.5 but not with the installer. Try copy to livraries folders and see if works.

    JOOMLA 1.6+
		
        EXTENSION MANAGER: INSTALL
		
Just install the package like any other extension. You can also Just zip all 
file contents from that are folder /libraries/jugrs inside of another Joomla 
site.		
        EXTENSION MANAGER: DISCOVER
		
Copy contents of this folder for folder /libraries/jugrs and click discover, and
 install it
-------------------------------------- Todo ------------------------------------

----------------------------------- Changelog ----------------------------------


CHANGELOG LEGEND:
+ Added
- Removed
^ Updated
* Bugfix
# Security Fix
! Relevant message