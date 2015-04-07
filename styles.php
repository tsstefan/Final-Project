<html>

<head>
<style>
.banner{
display: block;
width: 100%;
text-align:center;
}
.div_left {
	position: relative;
	height: 600px;
	width: 220px;
	padding: 1px 15px;
	z-index: 1;
}
.div_right{
float:right;
	height: 600px;
	width: 220px;
	margin-top: -400px;
	padding: 1px 15px;
	z-index: 1;	
	}
.div_right li{
list-style: none;
}
}
#panel {
	height: 600px;
}
/* ================================================================ 
This copyright notice must be kept untouched in the stylesheet at 
all times.

Copyright (c) Stu Nicholls www.cssplay.co.uk. All rights reserved.
This stylesheet and the associated (x)html may be modified in any 
way to fit your requirements.
=================================================================== */
.menu {
	position: relative;
	text-align: center;
	width: 100%;
	height: 100%;
	display: table;
}
.menu input {
	position: absolute;
	left: -9999px;
	display: none;
}
.menu ul {
	padding: 0;
	margin: 0;
	list-style: none;
	text-transform: uppercase;
}
.menu > ul {
	display: table-cell;
	vertical-align: middle;
}
.menu > ul > li {
	position: relative;
}
.menu > ul > li > a {
	font: 600 20px/25px 'Open Sans', arial, sans-serif;
	text-decoration: none;
	color: #000;
	position: relative;
	-webkit-transition: 0.5s;
	transition: 0.5s;
}
.menu ul ul li a, .div_right {
	font: 300 16px/25px 'Open Sans', arial, sans-serif;
	text-decoration: none;
	color: #000;
}
.menu ul li label {
	font: 600 20px/25px 'Open Sans', arial, sans-serif;
	color: #000;
	cursor: pointer;
	position: relative;
}
.menu ul li span.closesubmenu {
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	text-align: center;
	display: none;
}
.menu ul li span.closesubmenu label {
	color: transparent;
}
.menu ul ul {
	height: 0;
	padding-top: 0;
	overflow: hidden;
	position: relative;
	z-index: 100;
	-webkit-transition: 1s;
	transition: 1s;
}
.menu > ul > li > a:hover:before {
	content: "";
	display: block;
	height: 2px;
	width: 50px;
	position: absolute;
	bottom: 0;
	background: #000;
	left: 50%;
	margin-left: -25px;
}
.menu input:checked ~ ul.h4 {height:110px; padding-top:20px;}
.menu input:checked ~ ul.h5 {height:135px; padding-top:20px;}
.menu input:checked ~ ul.h6 {height:160px; padding-top:20px;}
.menu input:checked ~ ul.h7 {height:185px; padding-top:20px;}
.menu input:checked ~ span.closesubmenu {display:block;}
.menu > ul > li > label:hover:before, .menu input:checked + label:before {
	content: "";
	display: block;
	height: 0;
	width: 0;
	border: 8px solid transparent;
	border-top-color: #000;
	border-bottom: 0;
	position: absolute;
	bottom: -4px;
	left: 50%;
	margin-left: -8px;
}
.menu ul ul li a:hover:before {
	content: "- ";
}
.menu ul ul li a:hover:after {
	content: " -";
}
</style>
</head>

</html>
