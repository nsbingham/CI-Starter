# CI-Starter

This project is meant as my own starting point for CodeIgniter projects. Above and beyond the usual vanilla install of [CodeIgniter reactor](http://codeigniter.com/), here's a little something something to get started with.

## Contents

*	[CodeIgniter 2.0.2](http://downloads.codeigniter.com/reactor/CodeIgniter_2.0.2.zip)
*	Phil Sturgeon's Asset library
*	David McReynolds' [Menu library from FuelPHP](http://www.getfuelcms.com/user_guide/libraries/menu)
*	[Sparks](http://getsparks.org/), with the following sparks installed:
	*	ion_auth 1.4.0
	*	formbuilder 1.3.0
	*	template 1.8.0
*	Login controller to run ion_auth, using formbuilder
*	Basic CSS and layout files based on HTML5 template
*	Static page controller with nice 404 handling
*	Dropdown menu 0.7.2 CSS from [Live Web Institute](http://lwis.net/free-css-drop-down-menu/)


## Installation

* [Install CI as usual](http://codeigniter.com/user_guide/installation/index.html).
* Create a DB, update config/database.php
* If you want ion_auth to work, run the appropriate script in sparks/ion_auth/x.x.x/sql