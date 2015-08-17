# JQPhp
JQPhp is a PHP Library that was built to perform javascript operations directly within PHP codes.
A simple explanation would be instead of typing the following to display an alert
&lt;script&gt;$(document).ready(function(){ alert("This is an alert"); })
All you have to do is
$jqphp->Alert("This is an alert").

It hasn't been built to replace JQuery or Javascript but to make it easy to work with these
technologies from PHP without worrying about them. In fact, it makes calls to the JQuery library
from behind the scenes.

The library has been categorized into various namespaces depending on what the classes do.
the available namespaces are:

1. \JQPhp
2. \JQPhp\Shared
3. \JQPhp\Selector
4. \JQPhp\Selector\Attributes
5. \JQPhp\Selector\Basics
6. \JQPhp\Selector\Filters
7 ..... and so on. (This library is still in active development)

A very simple usage of this class would be to make the background color of all anchor elements 
where the href attribute is http://samshal.users.phpclasses.org red and it is illustrated below:

use JQPhp;
use JQPhp\Selector\Attributes;

$a-element = Attributes\Equals("a", "href", "http://samshal.users.phpclasses.org", new JQPhp\jquery());
$a-element->css("background-color", "red");

# Visit this project's page at: http://samshal.github.io/JQPhp/ or feel free to send me an email: samueladeshina73 at gmail dot com
