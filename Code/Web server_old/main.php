<?php header("Content-type: text/css");
?>
body {
  min-height: 100%;
	background: url("background.png");
	margin: 0;
	padding: 0;
	color: #000;
}
/* ~~ Sélecteurs d'éléments/balises ~~ */
ul, ol, dl {
	padding: 0;
	margin: 0;
}

#ProgressBar {
  width: 10%;
  height: 30px;
  background-color: #4CAF50;
  text-align: center;
  line-height: 30px;
  color: white;
}

#Progress {
  width: 100%;
  background-color: grey;
}

.content h1
{
	font: Iceberg, sans-serif;
	font-size: 48px;
}

h2
{
	font: Iceberg, sans-serif;
}

 h3, h4, h5, h6, p {
	margin-top: 0;
	padding-right: 15px;
	padding-left: 15px;
}
a img
{
    border-radius: 50px 0px 0px 0px;
}

a:link {
	color: black;
	text-decoration: underline;
}
a:visited {
	color: blaCK;
	text-decoration: underline;
}
a:hover, a:active, a:focus {
	text-decoration: none;
}

.container {
	width: 1000px;
	background-color: rgba(255, 255, 255, 1);
    border-radius: 50px 40px 40px 40px;
	margin: 0 auto;
	font: Iceberg, sans-serif;
}

header {
	background-color: #f6cb20;
    border-radius: 50px 40px 0px 0px;
    height: 120px;
}

.sidebar1 {
	float: left;
	width: 180px;
    height: 1256px;
	background-color: #B09A20;
	font: Iceberg;

}

.sideh2
{
    font-size: 30px;
    color: white;
}
.ccc
{
    color: #EEE;
}
.sidebar2 {
	float: left;
	width: 180px;
    height: 1670px;
	background-color: #B09A20;
	font: Iceberg;
}

.sidebar3 {
	float: left;
	width: 180px;
    height: 1120px;
	background-color: #B09A20;
	font: Iceberg;
}

.content {
	padding: 5%;
	width: 720px;
	float: right;
	font: 100% Arial;
}


.content ul, .content ol {
	padding: 0 15px 15px 40px;
}

ul.nav {
	list-style: none;
	border-top: 1px solid black;
	margin-bottom: 15px;
}
ul.nav li {
	border-bottom: 1px solid black;
}
ul.nav a, ul.nav a:visited {
	padding: 5px 5px 5px 15px;
	display: block;
	width: 160px;
	text-decoration: none;
	background-color: #f6cb20;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus {
	background-color: #B09A20;
	color: white;
}

/* ~~ Pied de page ~~ */
footer {
	padding: 10px 0;
	background-color: #f6cb20;
	position: relative;
    top: auto;
	clear: both;
    height: auto;
    border-radius: 0px 0px 20px 20px;
    display: inline-block;
}

.footerright
{
    display: inline-block;
}

div .chose
{
    position: right;
    text-align: right;
    display: inline-block;
}
header, section, footer, aside, article, figure {
	display: block;
}

.red
{
    color: red;
}

.exempletexte
{
 font-size: 20px;
 text-decoration: underline;
}

.exemplebackground
{
	background: rgba(96,193,28,0.80) ;
    text-align: center;
}

.exempleborder
{
    border: 2px black dotted;

}

.hover:hover
{
    color: red;
}

.name
{
    display: inline-block;
    width: 910px;
    font-size: 60px;
    text-align: center;
    margin: inherit;
	color: white;
}

.sousliste
{
    list-style-type: none;
    display: none;
}

ul li a:hover + .sousliste
{
    display: block;
}
