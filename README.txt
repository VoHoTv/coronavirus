=== Plugin Name ===
Contributors: vohotv
Tags: coronavirus, virus
Tested up to: 5.3.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A wordpress plugin for displaying data about the corona virus.

== Description ==

This wordpress plugin lets you display a widget like component with data about the corona virus. 
Some options you can choose are as following:

* Total cases
* Today's cases
* Total deaths
* Today's deaths
* Recovered
* Active cases
* Critical
* Cases per one million

You choose what data you want to display in the settings page. On top of that you also have the option to fully customize the widgets. 
To display the widget you need to use the [coronavirus] shortcode. There is also an option country attribute which you can use to display data about a specific country.
Append there country attribute like this [coronavirus country="name_of_the_country"]. Usually the fully of the country with spaces where needed is required.
A very select set of countries has been abbreviated to:

* United States Of America = USA
* United Kingdom = UK
* South Korea = S. Korea

== Installation ==

1. Upload `coronavirus.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add the [coronavirus] shortcode in your posts/pages or place `<?php do_shortcode('coronavirus'); ?>` in your templates. 

== Frequently Asked Questions ==

= Where does the coronavirus plugin gets it data from? =

The coronavirus plugin gets its data from https://github.com/javieraviles/covidAPI

= Can I choose to see the data of a specific country? =

Yes, you can display the data of a specific country by adding the country attribute to the shortcode like this [coronavirus country="name_of_the_country"]. 
Look at the description for more information.