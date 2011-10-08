PHP Joomla 1.7+ Library libexample
{description}

Author: {author} - {authoremail} - {authorurl}
{copyright}
{license}


	
----------------------------------- How to use ---------------------------------
If you are familiarized with Joomla way of call functions, the logic of this 
library will be simple for you. Fist, import the library:

	jimport('libexample.libexample');

They, call some instance name. Normaly the same name of one folder.

	$subpackage = LibExample::getSubpackage();

Then, call some function inside this instance. They are, for this example,
inside of folder /libraries/{libexample}/{subpackage}/

Some examples:

        $subpackage->set('variable','private variable value');

        $subpackage->public = 'Public variable value';

        $subpackage->debug();

Will print:

LibexampleSubpackage Object
(
    [variable:LibexampleSubpackage:private] => private variable value
    [public] => Public variable value
)

--------------------------- Instalation & Dependences --------------------------
Dependences:
- CMS Joomla 1.7+ (or equivalent)
- PHP 5.2+


HOW TO INSTALL?
    JOOMLA 1.5
	
This library is aimed to use on Joomla 1.7+. It provably can run also on Joomla 
1.7 but not with the installer. Try copy to livraries folders and see if works.

    JOOMLA 1.7+
		
        EXTENSION MANAGER: INSTALL
		
Just install the package like any other extension. You can also Just zip all 
file contents from that are folder /libraries/jugrs inside of another Joomla 
site.		
        EXTENSION MANAGER: DISCOVER
		
Copy contents of this folder for folder /libraries/jugrs and click discover, and
 install it
-------------------------------------- Todo ------------------------------------

----------------------------------- Changelog ----------------------------------

{createddate}: 1.0alpha
! Library created

CHANGELOG LEGEND:
+ Added
- Removed
^ Updated
* Bugfix
# Security Fix
! Relevant message