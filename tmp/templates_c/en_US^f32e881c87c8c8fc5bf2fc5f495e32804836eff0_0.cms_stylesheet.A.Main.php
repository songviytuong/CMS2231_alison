<?php
/* Smarty version 3.1.31, created on 2017-08-12 21:22:50
  from "cms_stylesheet:A.Main" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598f012a962b72_43331453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f32e881c87c8c8fc5bf2fc5f495e32804836eff0' => 
    array (
      0 => 'cms_stylesheet:A.Main',
      1 => '1500166226',
      2 => 'cms_stylesheet',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598f012a962b72_43331453 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_root_url')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.root_url.php';
if (!is_callable('smarty_cms_function_random_image_selective')) require_once 'E:\\xampp\\htdocs\\public_html\\cms_version2\\cms221_alison\\lib\\plugins\\function.random_image_selective.php';
?>
/* cmsms stylesheet: A.Main modified: 07/16/17 08:50:26 */
@font-face {
	font-family: 'icomoon';
	src:url('<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/css/fonts/icomoon.eot');
	src:url('<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/css/fonts/icomoon.eot?#iefix') format('embedded-opentype'),
		url('<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/css/fonts/icomoon.woff') format('woff'),
		url('<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/css/fonts/icomoon.ttf') format('truetype'),
		url('<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/css/fonts/icomoon.svg#icomoon') format('svg');
	font-weight: normal;
	font-style: normal;
}

.clearfix:after,
.clearfix:before {
    content: " ";
    display: table
}

.clearfix:after {
    clear: both
}

.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.pull-left {
    float: left!important
}

.hide {
    display: none!important
}

.show {
    display: block!important
}

.invisible {
    visibility: hidden
}

.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0
}

.hidden {
    display: none!important
}

.affix {
    position: fixed
}

.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}

.container:after,
.container:before {
    content: " ";
    display: table
}

.container:after {
    clear: both
}

@media (min-width:768px) {
    .container {
        width: 750px
    }
}

@media (min-width:992px) {
    .container {
        width: 970px
    }
}

@media (min-width:1200px) {
    .container {
        width: 1170px
    }
}

.container-fluid {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px
}

.container-fluid:after,
.container-fluid:before {
    content: " ";
    display: table
}

.container-fluid:after {
    clear: both
}

.row {
    margin-left: -15px;
    margin-right: -15px
}

.row:after,
.row:before {
    content: " ";
    display: table
}

.row:after {
    clear: both
}

.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px
}

.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
    float: left
}

.col-xs-1 {
    width: 8.3333333333%
}

.col-xs-2 {
    width: 16.6666666667%
}

.col-xs-3 {
    width: 25%
}

.col-xs-4 {
    width: 33.3333333333%
}

.col-xs-5 {
    width: 41.6666666667%
}

.col-xs-6 {
    width: 50%
}

.col-xs-7 {
    width: 58.3333333333%
}

.col-xs-8 {
    width: 66.6666666667%
}

.col-xs-9 {
    width: 75%
}

.col-xs-10 {
    width: 83.3333333333%
}

.col-xs-11 {
    width: 91.6666666667%
}

.col-xs-12 {
    width: 100%
}

.col-xs-pull-0 {
    right: auto
}

.col-xs-pull-1 {
    right: 8.3333333333%
}

.col-xs-pull-2 {
    right: 16.6666666667%
}

.col-xs-pull-3 {
    right: 25%
}

.col-xs-pull-4 {
    right: 33.3333333333%
}

.col-xs-pull-5 {
    right: 41.6666666667%
}

.col-xs-pull-6 {
    right: 50%
}

.col-xs-pull-7 {
    right: 58.3333333333%
}

.col-xs-pull-8 {
    right: 66.6666666667%
}

.col-xs-pull-9 {
    right: 75%
}

.col-xs-pull-10 {
    right: 83.3333333333%
}

.col-xs-pull-11 {
    right: 91.6666666667%
}

.col-xs-pull-12 {
    right: 100%
}

.col-xs-push-0 {
    left: auto
}

.col-xs-push-1 {
    left: 8.3333333333%
}

.col-xs-push-2 {
    left: 16.6666666667%
}

.col-xs-push-3 {
    left: 25%
}

.col-xs-push-4 {
    left: 33.3333333333%
}

.col-xs-push-5 {
    left: 41.6666666667%
}

.col-xs-push-6 {
    left: 50%
}

.col-xs-push-7 {
    left: 58.3333333333%
}

.col-xs-push-8 {
    left: 66.6666666667%
}

.col-xs-push-9 {
    left: 75%
}

.col-xs-push-10 {
    left: 83.3333333333%
}

.col-xs-push-11 {
    left: 91.6666666667%
}

.col-xs-push-12 {
    left: 100%
}

.col-xs-offset-0 {
    margin-left: 0
}

.col-xs-offset-1 {
    margin-left: 8.3333333333%
}

.col-xs-offset-2 {
    margin-left: 16.6666666667%
}

.col-xs-offset-3 {
    margin-left: 25%
}

.col-xs-offset-4 {
    margin-left: 33.3333333333%
}

.col-xs-offset-5 {
    margin-left: 41.6666666667%
}

.col-xs-offset-6 {
    margin-left: 50%
}

.col-xs-offset-7 {
    margin-left: 58.3333333333%
}

.col-xs-offset-8 {
    margin-left: 66.6666666667%
}

.col-xs-offset-9 {
    margin-left: 75%
}

.col-xs-offset-10 {
    margin-left: 83.3333333333%
}

.col-xs-offset-11 {
    margin-left: 91.6666666667%
}

.col-xs-offset-12 {
    margin-left: 100%
}

@media (min-width:768px) {
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12 {
        float: left
    }
    .col-sm-1 {
        width: 8.3333333333%
    }
    .col-sm-2 {
        width: 16.6666666667%
    }
    .col-sm-3 {
        width: 25%
    }
    .col-sm-4 {
        width: 33.3333333333%
    }
    .col-sm-5 {
        width: 41.6666666667%
    }
    .col-sm-6 {
        width: 50%
    }
    .col-sm-7 {
        width: 58.3333333333%
    }
    .col-sm-8 {
        width: 66.6666666667%
    }
    .col-sm-9 {
        width: 75%
    }
    .col-sm-10 {
        width: 83.3333333333%
    }
    .col-sm-11 {
        width: 91.6666666667%
    }
    .col-sm-12 {
        width: 100%
    }
    .col-sm-pull-0 {
        right: auto
    }
    .col-sm-pull-1 {
        right: 8.3333333333%
    }
    .col-sm-pull-2 {
        right: 16.6666666667%
    }
    .col-sm-pull-3 {
        right: 25%
    }
    .col-sm-pull-4 {
        right: 33.3333333333%
    }
    .col-sm-pull-5 {
        right: 41.6666666667%
    }
    .col-sm-pull-6 {
        right: 50%
    }
    .col-sm-pull-7 {
        right: 58.3333333333%
    }
    .col-sm-pull-8 {
        right: 66.6666666667%
    }
    .col-sm-pull-9 {
        right: 75%
    }
    .col-sm-pull-10 {
        right: 83.3333333333%
    }
    .col-sm-pull-11 {
        right: 91.6666666667%
    }
    .col-sm-pull-12 {
        right: 100%
    }
    .col-sm-push-0 {
        left: auto
    }
    .col-sm-push-1 {
        left: 8.3333333333%
    }
    .col-sm-push-2 {
        left: 16.6666666667%
    }
    .col-sm-push-3 {
        left: 25%
    }
    .col-sm-push-4 {
        left: 33.3333333333%
    }
    .col-sm-push-5 {
        left: 41.6666666667%
    }
    .col-sm-push-6 {
        left: 50%
    }
    .col-sm-push-7 {
        left: 58.3333333333%
    }
    .col-sm-push-8 {
        left: 66.6666666667%
    }
    .col-sm-push-9 {
        left: 75%
    }
    .col-sm-push-10 {
        left: 83.3333333333%
    }
    .col-sm-push-11 {
        left: 91.6666666667%
    }
    .col-sm-push-12 {
        left: 100%
    }
    .col-sm-offset-0 {
        margin-left: 0
    }
    .col-sm-offset-1 {
        margin-left: 8.3333333333%
    }
    .col-sm-offset-2 {
        margin-left: 16.6666666667%
    }
    .col-sm-offset-3 {
        margin-left: 25%
    }
    .col-sm-offset-4 {
        margin-left: 33.3333333333%
    }
    .col-sm-offset-5 {
        margin-left: 41.6666666667%
    }
    .col-sm-offset-6 {
        margin-left: 50%
    }
    .col-sm-offset-7 {
        margin-left: 58.3333333333%
    }
    .col-sm-offset-8 {
        margin-left: 66.6666666667%
    }
    .col-sm-offset-9 {
        margin-left: 75%
    }
    .col-sm-offset-10 {
        margin-left: 83.3333333333%
    }
    .col-sm-offset-11 {
        margin-left: 91.6666666667%
    }
    .col-sm-offset-12 {
        margin-left: 100%
    }
}

@media (min-width:992px) {
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12 {
        float: left
    }
    .col-md-1 {
        width: 8.3333333333%
    }
    .col-md-2 {
        width: 16.6666666667%
    }
    .col-md-3 {
        width: 25%
    }
    .col-md-4 {
        width: 33.3333333333%
    }
    .col-md-5 {
        width: 41.6666666667%
    }
    .col-md-6 {
        width: 50%
    }
    .col-md-7 {
        width: 58.3333333333%
    }
    .col-md-8 {
        width: 66.6666666667%
    }
    .col-md-9 {
        width: 75%
    }
    .col-md-10 {
        width: 83.3333333333%
    }
    .col-md-11 {
        width: 91.6666666667%
    }
    .col-md-12 {
        width: 100%
    }
    .col-md-pull-0 {
        right: auto
    }
    .col-md-pull-1 {
        right: 8.3333333333%
    }
    .col-md-pull-2 {
        right: 16.6666666667%
    }
    .col-md-pull-3 {
        right: 25%
    }
    .col-md-pull-4 {
        right: 33.3333333333%
    }
    .col-md-pull-5 {
        right: 41.6666666667%
    }
    .col-md-pull-6 {
        right: 50%
    }
    .col-md-pull-7 {
        right: 58.3333333333%
    }
    .col-md-pull-8 {
        right: 66.6666666667%
    }
    .col-md-pull-9 {
        right: 75%
    }
    .col-md-pull-10 {
        right: 83.3333333333%
    }
    .col-md-pull-11 {
        right: 91.6666666667%
    }
    .col-md-pull-12 {
        right: 100%
    }
    .col-md-push-0 {
        left: auto
    }
    .col-md-push-1 {
        left: 8.3333333333%
    }
    .col-md-push-2 {
        left: 16.6666666667%
    }
    .col-md-push-3 {
        left: 25%
    }
    .col-md-push-4 {
        left: 33.3333333333%
    }
    .col-md-push-5 {
        left: 41.6666666667%
    }
    .col-md-push-6 {
        left: 50%
    }
    .col-md-push-7 {
        left: 58.3333333333%
    }
    .col-md-push-8 {
        left: 66.6666666667%
    }
    .col-md-push-9 {
        left: 75%
    }
    .col-md-push-10 {
        left: 83.3333333333%
    }
    .col-md-push-11 {
        left: 91.6666666667%
    }
    .col-md-push-12 {
        left: 100%
    }
    .col-md-offset-0 {
        margin-left: 0
    }
    .col-md-offset-1 {
        margin-left: 8.3333333333%
    }
    .col-md-offset-2 {
        margin-left: 16.6666666667%
    }
    .col-md-offset-3 {
        margin-left: 25%
    }
    .col-md-offset-4 {
        margin-left: 33.3333333333%
    }
    .col-md-offset-5 {
        margin-left: 41.6666666667%
    }
    .col-md-offset-6 {
        margin-left: 50%
    }
    .col-md-offset-7 {
        margin-left: 58.3333333333%
    }
    .col-md-offset-8 {
        margin-left: 66.6666666667%
    }
    .col-md-offset-9 {
        margin-left: 75%
    }
    .col-md-offset-10 {
        margin-left: 83.3333333333%
    }
    .col-md-offset-11 {
        margin-left: 91.6666666667%
    }
    .col-md-offset-12 {
        margin-left: 100%
    }
}

@media (min-width:1200px) {
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12 {
        float: left
    }
    .col-lg-1 {
        width: 8.3333333333%
    }
    .col-lg-2 {
        width: 16.6666666667%
    }
    .col-lg-3 {
        width: 25%
    }
    .col-lg-4 {
        width: 33.3333333333%
    }
    .col-lg-5 {
        width: 41.6666666667%
    }
    .col-lg-6 {
        width: 50%
    }
    .col-lg-7 {
        width: 58.3333333333%
    }
    .col-lg-8 {
        width: 66.6666666667%
    }
    .col-lg-9 {
        width: 75%
    }
    .col-lg-10 {
        width: 83.3333333333%
    }
    .col-lg-11 {
        width: 91.6666666667%
    }
    .col-lg-12 {
        width: 100%
    }
    .col-lg-pull-0 {
        right: auto
    }
    .col-lg-pull-1 {
        right: 8.3333333333%
    }
    .col-lg-pull-2 {
        right: 16.6666666667%
    }
    .col-lg-pull-3 {
        right: 25%
    }
    .col-lg-pull-4 {
        right: 33.3333333333%
    }
    .col-lg-pull-5 {
        right: 41.6666666667%
    }
    .col-lg-pull-6 {
        right: 50%
    }
    .col-lg-pull-7 {
        right: 58.3333333333%
    }
    .col-lg-pull-8 {
        right: 66.6666666667%
    }
    .col-lg-pull-9 {
        right: 75%
    }
    .col-lg-pull-10 {
        right: 83.3333333333%
    }
    .col-lg-pull-11 {
        right: 91.6666666667%
    }
    .col-lg-pull-12 {
        right: 100%
    }
    .col-lg-push-0 {
        left: auto
    }
    .col-lg-push-1 {
        left: 8.3333333333%
    }
    .col-lg-push-2 {
        left: 16.6666666667%
    }
    .col-lg-push-3 {
        left: 25%
    }
    .col-lg-push-4 {
        left: 33.3333333333%
    }
    .col-lg-push-5 {
        left: 41.6666666667%
    }
    .col-lg-push-6 {
        left: 50%
    }
    .col-lg-push-7 {
        left: 58.3333333333%
    }
    .col-lg-push-8 {
        left: 66.6666666667%
    }
    .col-lg-push-9 {
        left: 75%
    }
    .col-lg-push-10 {
        left: 83.3333333333%
    }
    .col-lg-push-11 {
        left: 91.6666666667%
    }
    .col-lg-push-12 {
        left: 100%
    }
    .col-lg-offset-0 {
        margin-left: 0
    }
    .col-lg-offset-1 {
        margin-left: 8.3333333333%
    }
    .col-lg-offset-2 {
        margin-left: 16.6666666667%
    }
    .col-lg-offset-3 {
        margin-left: 25%
    }
    .col-lg-offset-4 {
        margin-left: 33.3333333333%
    }
    .col-lg-offset-5 {
        margin-left: 41.6666666667%
    }
    .col-lg-offset-6 {
        margin-left: 50%
    }
    .col-lg-offset-7 {
        margin-left: 58.3333333333%
    }
    .col-lg-offset-8 {
        margin-left: 66.6666666667%
    }
    .col-lg-offset-9 {
        margin-left: 75%
    }
    .col-lg-offset-10 {
        margin-left: 83.3333333333%
    }
    .col-lg-offset-11 {
        margin-left: 91.6666666667%
    }
    .col-lg-offset-12 {
        margin-left: 100%
    }
}

.zoomIn {
    animation-name: zoomIn;
    animation-duration: .5s;
    animation-fill-mode: both
}

.zoomOut {
    animation-name: zoomOut;
    animation-duration: 1s;
    animation-fill-mode: both
}

@keyframes zoomOut {
    0% {
        opacity: 1
    }
    50% {
        opacity: 0;
        transform: scale3d(.3, .3, .3)
    }
    to {
        opacity: 0
    }
}

.slick-slider {
    box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent
}

.slick-list,
.slick-slider {
    position: relative;
    display: block
}

.slick-list {
    overflow: hidden;
    margin: 0;
    padding: 0
}

.slick-list:focus {
    outline: none
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand
}

.slick-slider .slick-list,
.slick-slider .slick-track {
    transform: translateZ(0)
}

.slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block
}

.slick-track:after,
.slick-track:before {
    content: "";
    display: table
}

.slick-track:after {
    clear: both
}

.slick-loading .slick-track {
    visibility: hidden
}

.slick-slide {
    float: left;
    min-height: 1px;
    display: none
}

[dir="rtl"] .slick-slide {
    float: right
}

.slick-slide img {
    display: block
}

.slick-slide.slick-loading img {
    display: none
}

.slick-slide.dragging img {
    pointer-events: none
}

.slick-initialized .slick-slide {
    display: block
}

.slick-loading .slick-slide {
    visibility: hidden
}

.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent
}

.slick-arrow.slick-hidden {
    display: none
}

.button,
button,
input,
select,
textarea {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 0;
    border-radius: 0;
    outline: none
}

a,
abbr,
acronym,
address,
applet,
article,
aside,
audio,
b,
big,
blockquote,
body,
canvas,
caption,
center,
cite,
code,
dd,
del,
details,
dfn,
div,
dl,
dt,
em,
embed,
fieldset,
figcaption,
figure,
footer,
form,
h1,
h2,
h3,
h4,
h5,
h6,
header,
hgroup,
html,
i,
iframe,
img,
ins,
kbd,
label,
legend,
li,
mark,
menu,
nav,
object,
ol,
output,
p,
pre,
q,
ruby,
s,
samp,
section,
small,
span,
strike,
strong,
sub,
summary,
sup,
table,
tbody,
td,
tfoot,
th,
thead,
time,
tr,
tt,
u,
ul,
var,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block
}

body {
    line-height: 1
}

ol,
ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

blockquote:after,
blockquote:before,
q:after,
q:before {
    content: "";
    content: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

* {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

#achiever-points-section .aap-content .content-box,
#cart-page,
#cart-page .body,
#cart-page .body .coupon-holder form,
#cart-page .body .item,
#cart-page .body .total-holder>div,
#cart-page .body li,
#cart-page .foot,
#cart-page.offline-payment .complete-order .complete-code,
#cart-page .order-details .checkbox-holder,
#cart-page .order-details .checkbox-holder .info,
#cart-page .product-list li,
#congratulations .area-container .available-products,
#course-landing .course-landing-wrapper .content-wrapper #course-header,
#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar,
#homepage-middle .slick-slider-middle,
#landing-banner .wrapper,
#landing-middle .slick-slider-middle,
#player-page .module-nav .player-slider,
#player-page .player-holder,
#publishers .publisher,
#shop-container .item-desc,
#shop-container .merchandise-holder>li,
.banner,
.banner-hp,
.cards,
.categories,
.categories-filter,
.categories-holder,
.categories-search,
.categories .select-buttons,
.certificates .avail-products,
.certificates ul .slide-up-products .upgrade .bottom,
.chart .chart-holder,
.course,
.course .course-features,
.course .course-holder .extra-info,
.course .course-info .spotlight-group,
.course .course-learning-paths,
.course .course-learning-paths .head,
.course .course-reviews,
.course .course-tags,
.dashboard-banner,
.dashboard .course_row,
.dashboard .tab-header-inline2,
.department-tabs .tab-content,
.empower-listing li,
.faqs .container,
.faqs .container .wrapper,
.faqs .left-column,
.faqs .right-column,
.faqs .right-column .most-popular ul,
.faqs .right-column .text,
.faqs .topics,
.faqs .topics .faqs-container,
.faqs .topics .sections-subsections,
.field,
.field-group,
.footer-products .slick-slider-middle,
.global-search,
.group,
.info-box,
.info-box .footer,
.info-box .header,
.info-box.post .content .body,
.lp-reviews .lp-content,
.navigation ul,
.outer-wrap #bg-hp .banner-hp,
.path-list .body,
.path-list .bottom,
.path-list .path-holder,
.path-list ol,
.path-list ol li,
.pricing-container li,
.scoring .points-scale,
.search-results-container,
.search-tab-header,
.sidebar .user-details .info,
.tab-holder,
.tab-holder .col-3,
.tab-holder .form-holder,
.wrapper,
footer.main .wrap-bottom .half-bottom .tab-navbar,
form,
header {
    *zoom: 1
}

#achiever-points-section .aap-content .content-box:after,
#achiever-points-section .aap-content .content-box:before,
#cart-page .body .coupon-holder form:after,
#cart-page .body .coupon-holder form:before,
#cart-page .body .item:after,
#cart-page .body .item:before,
#cart-page .body .total-holder>div:after,
#cart-page .body .total-holder>div:before,
#cart-page .body:after,
#cart-page .body:before,
#cart-page .body li:after,
#cart-page .body li:before,
#cart-page .foot:after,
#cart-page .foot:before,
#cart-page.offline-payment .complete-order .complete-code:after,
#cart-page.offline-payment .complete-order .complete-code:before,
#cart-page .order-details .checkbox-holder .info:after,
#cart-page .order-details .checkbox-holder .info:before,
#cart-page .order-details .checkbox-holder:after,
#cart-page .order-details .checkbox-holder:before,
#cart-page .product-list li:after,
#cart-page .product-list li:before,
#cart-page:after,
#cart-page:before,
#congratulations .area-container .available-products:after,
#congratulations .area-container .available-products:before,
#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar:after,
#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar:before,
#course-landing .course-landing-wrapper .content-wrapper #course-header:after,
#course-landing .course-landing-wrapper .content-wrapper #course-header:before,
#homepage-middle .slick-slider-middle:after,
#homepage-middle .slick-slider-middle:before,
#landing-banner .wrapper:after,
#landing-banner .wrapper:before,
#landing-middle .slick-slider-middle:after,
#landing-middle .slick-slider-middle:before,
#player-page .module-nav .player-slider:after,
#player-page .module-nav .player-slider:before,
#player-page .player-holder:after,
#player-page .player-holder:before,
#publishers .publisher:after,
#publishers .publisher:before,
#shop-container .item-desc:after,
#shop-container .item-desc:before,
#shop-container .merchandise-holder>li:after,
#shop-container .merchandise-holder>li:before,
.banner-hp:after,
.banner-hp:before,
.banner:after,
.banner:before,
.cards:after,
.cards:before,
.categories-filter:after,
.categories-filter:before,
.categories-holder:after,
.categories-holder:before,
.categories-search:after,
.categories-search:before,
.categories .select-buttons:after,
.categories .select-buttons:before,
.categories:after,
.categories:before,
.certificates .avail-products:after,
.certificates .avail-products:before,
.certificates ul .slide-up-products .upgrade .bottom:after,
.certificates ul .slide-up-products .upgrade .bottom:before,
.chart .chart-holder:after,
.chart .chart-holder:before,
.course .course-features:after,
.course .course-features:before,
.course .course-holder .extra-info:after,
.course .course-holder .extra-info:before,
.course .course-info .spotlight-group:after,
.course .course-info .spotlight-group:before,
.course .course-learning-paths .head:after,
.course .course-learning-paths .head:before,
.course .course-learning-paths:after,
.course .course-learning-paths:before,
.course .course-reviews:after,
.course .course-reviews:before,
.course .course-tags:after,
.course .course-tags:before,
.course:after,
.course:before,
.dashboard-banner:after,
.dashboard-banner:before,
.dashboard .course_row:after,
.dashboard .course_row:before,
.dashboard .tab-header-inline2:after,
.dashboard .tab-header-inline2:before,
.department-tabs .tab-content:after,
.department-tabs .tab-content:before,
.empower-listing li:after,
.empower-listing li:before,
.faqs .container .wrapper:after,
.faqs .container .wrapper:before,
.faqs .container:after,
.faqs .container:before,
.faqs .left-column:after,
.faqs .left-column:before,
.faqs .right-column .most-popular ul:after,
.faqs .right-column .most-popular ul:before,
.faqs .right-column .text:after,
.faqs .right-column .text:before,
.faqs .right-column:after,
.faqs .right-column:before,
.faqs .topics .faqs-container:after,
.faqs .topics .faqs-container:before,
.faqs .topics .sections-subsections:after,
.faqs .topics .sections-subsections:before,
.faqs .topics:after,
.faqs .topics:before,
.field-group:after,
.field-group:before,
.field:after,
.field:before,
.footer-products .slick-slider-middle:after,
.footer-products .slick-slider-middle:before,
.global-search:after,
.global-search:before,
.group:after,
.group:before,
.info-box .footer:after,
.info-box .footer:before,
.info-box .header:after,
.info-box .header:before,
.info-box.post .content .body:after,
.info-box.post .content .body:before,
.info-box:after,
.info-box:before,
.lp-reviews .lp-content:after,
.lp-reviews .lp-content:before,
.navigation ul:after,
.navigation ul:before,
.outer-wrap #bg-hp .banner-hp:after,
.outer-wrap #bg-hp .banner-hp:before,
.path-list .body:after,
.path-list .body:before,
.path-list .bottom:after,
.path-list .bottom:before,
.path-list .path-holder:after,
.path-list .path-holder:before,
.path-list ol:after,
.path-list ol:before,
.path-list ol li:after,
.path-list ol li:before,
.pricing-container li:after,
.pricing-container li:before,
.scoring .points-scale:after,
.scoring .points-scale:before,
.search-results-container:after,
.search-results-container:before,
.search-tab-header:after,
.search-tab-header:before,
.sidebar .user-details .info:after,
.sidebar .user-details .info:before,
.tab-holder .col-3:after,
.tab-holder .col-3:before,
.tab-holder .form-holder:after,
.tab-holder .form-holder:before,
.tab-holder:after,
.tab-holder:before,
.wrapper:after,
.wrapper:before,
footer.main .wrap-bottom .half-bottom .tab-navbar:after,
footer.main .wrap-bottom .half-bottom .tab-navbar:before,
form:after,
form:before,
header:after,
header:before {
    content: "";
    display: table
}

#achiever-points-section .aap-content .content-box:after,
#cart-page .body .coupon-holder form:after,
#cart-page .body .item:after,
#cart-page .body .total-holder>div:after,
#cart-page .body:after,
#cart-page .body li:after,
#cart-page .foot:after,
#cart-page.offline-payment .complete-order .complete-code:after,
#cart-page .order-details .checkbox-holder .info:after,
#cart-page .order-details .checkbox-holder:after,
#cart-page .product-list li:after,
#cart-page:after,
#congratulations .area-container .available-products:after,
#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar:after,
#course-landing .course-landing-wrapper .content-wrapper #course-header:after,
#homepage-middle .slick-slider-middle:after,
#landing-banner .wrapper:after,
#landing-middle .slick-slider-middle:after,
#player-page .module-nav .player-slider:after,
#player-page .player-holder:after,
#publishers .publisher:after,
#shop-container .item-desc:after,
#shop-container .merchandise-holder>li:after,
.banner-hp:after,
.banner:after,
.cards:after,
.categories-filter:after,
.categories-holder:after,
.categories-search:after,
.categories .select-buttons:after,
.categories:after,
.certificates .avail-products:after,
.certificates ul .slide-up-products .upgrade .bottom:after,
.chart .chart-holder:after,
.course .course-features:after,
.course .course-holder .extra-info:after,
.course .course-info .spotlight-group:after,
.course .course-learning-paths .head:after,
.course .course-learning-paths:after,
.course .course-reviews:after,
.course .course-tags:after,
.course:after,
.dashboard-banner:after,
.dashboard .course_row:after,
.dashboard .tab-header-inline2:after,
.department-tabs .tab-content:after,
.empower-listing li:after,
.faqs .container .wrapper:after,
.faqs .container:after,
.faqs .left-column:after,
.faqs .right-column .most-popular ul:after,
.faqs .right-column .text:after,
.faqs .right-column:after,
.faqs .topics .faqs-container:after,
.faqs .topics .sections-subsections:after,
.faqs .topics:after,
.field-group:after,
.field:after,
.footer-products .slick-slider-middle:after,
.global-search:after,
.group:after,
.info-box .footer:after,
.info-box .header:after,
.info-box.post .content .body:after,
.info-box:after,
.lp-reviews .lp-content:after,
.navigation ul:after,
.outer-wrap #bg-hp .banner-hp:after,
.path-list .body:after,
.path-list .bottom:after,
.path-list .path-holder:after,
.path-list ol:after,
.path-list ol li:after,
.pricing-container li:after,
.scoring .points-scale:after,
.search-results-container:after,
.search-tab-header:after,
.sidebar .user-details .info:after,
.tab-holder .col-3:after,
.tab-holder .form-holder:after,
.tab-holder:after,
.wrapper:after,
footer.main .wrap-bottom .half-bottom .tab-navbar:after,
form:after,
header:after {
    clear: both
}

a {
    outline: none;
    text-decoration: none;
    transition: all .25s ease-in
}

.wf-loading {
    opacity: 0
}

.wf-active {
    opacity: 1;
    transition: opacity .3s ease-in
}

body {
    background: #fff;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    letter-spacing: 0;
    line-height: 1.3em;
    position: relative;
    overflow-x: hidden;
    padding-top: 30px
}

#outdated {
    background: rgba(45, 57, 66, .7);
    height: 100%!important;
    left: 0!important;
    position: absolute!important;
    top: 0!important;
    width: 100%!important;
    z-index: 100000
}

#outdated .holder {
    background: #0091c7;
    color: #fff;
    left: 0;
    margin: 0 auto;
    padding: 40px 20px;
    position: fixed;
    right: 0;
    top: 60px;
    width: 700px
}

#outdated .holder .btn {
    margin-left: 10px
}

.small-title {
    color: #5d666d!important;
    display: block!important;
    font: 700 13px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif!important;
    margin: 5px 0 15px!important;
    text-align: center!important;
    text-transform: uppercase!important
}

#maintenance body {
    padding: 0;
    position: static
}

#maintenance body #offline-image {
    background: url(https://alison.com/html/site/img/xmaintenance-image-mobile.png.pagespeed.ic.jAMZB6zA5o.webp) no-repeat 50%;
    background-size: cover;
    height: 100%;
    left: 0;
    position: absolute;
    text-align: center;
    top: 0;
    width: 100%
}

#maintenance body #offline-image .content {
    color: #fff;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 70px 15px
}

#maintenance body #offline-image .content h1 {
    font-size: 40px
}

#maintenance body #offline-image .content p {
    font-size: 16px
}

@media only screen and (min-width:768px) {
    #maintenance body #offline-image {
        background: url(https://alison.com/html/site/img/xmaintenance-image-tablet.png.pagespeed.ic.YsF9I936XV.webp) no-repeat 50%;
        background-size: cover
    }
    #maintenance body #offline-image .content {
        padding: 70px 100px
    }
    #maintenance body #offline-image .content h1 {
        font-size: 70px
    }
    #maintenance body #offline-image .content p {
        font-size: 22px
    }
}

@media only screen and (min-width:1020px) {
    #maintenance body #offline-image {
        background: url(https://alison.com/html/site/img/xmaintenance-image-desktop.png.pagespeed.ic.J83t31DrGW.webp) no-repeat 50%;
        background-size: cover
    }
    #maintenance body #offline-image .content p {
        font-size: 20px
    }
}

.messages-q {
    background: rgba(46, 57, 66, .7);
    position: fixed;
    right: 0;
    top: 45px;
    width: 100%;
    z-index: 1001
}

@media only screen and (min-width:768px) {
    .messages-q {
        background: none;
        right: 20px;
        top: 60px;
        width: 300px
    }
    .messages-q .message {
        margin: 15px 0
    }
}

ul.bullet-list li {
    padding-left: 20px;
    position: relative
}

ul.bullet-list li:before {
    background: #0091c7;
    content: "";
    height: 5px;
    left: 5px;
    position: absolute;
    top: 8px;
    width: 5px
}

.loading {
    background: rgba(45, 57, 66, .4);
    display: none;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000
}

.loading img {
    background: #fff;
    border-radius: 50%;
    display: block;
    height: 175px;
    left: 50%;
    margin-left: -90px;
    margin-top: -100px;
    padding: 30px;
    position: absolute;
    pointer-events: none;
    top: 50%;
    width: 175px;
    box-shadow: 0 0 7px 0 rgba(0, 0, 0, .3)
}

.loading.hidden {
    display: none
}

.ad {
    max-width: 1150px;
    min-height: 90px;
    padding: 15px 0;
    margin: 0 auto 30px;
    text-align: center;
    position: relative;
    z-index: 9
}

.ad.ad-background {
    background: url(/html/site/img/xbg_ads.png.pagespeed.ic.RO47gVMcMy.webp) #eaeaea repeat
}

.message {
    background: #2e3942;
    background: linear-gradient(180deg, #2e3942 0, #191f24);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF2E3942", endColorstr="#FF191F24", GradientType=0);
    margin: 15px auto;
    min-height: 70px;
    padding: 15px 30px 15px 90px;
    position: relative;
    width: 300px
}

.message h1,
.message h2,
.message h3,
.message h4,
.message h5,
.message h6,
.message p {
    color: #fff;
    margin: 0
}

.message h1,
.message h2,
.message h3,
.message h4,
.message h5,
.message h6 {
    font-size: 1.0625em;
    margin: 0 0 5px;
    text-transform: capitalize
}

.message p:before {
    color: #fff;
    content: "\e93a";
    font-family: icomoon!important;
    font-size: 1.875em;
    left: 20px;
    margin-top: -12px;
    position: absolute;
    top: 50%
}

.message.success {
    background: #38ac69;
    background: linear-gradient(180deg, #38ac69 0, #2b8652);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF38AC69", endColorstr="#FF2B8652", GradientType=0)
}

.message.success p:before {
    content: "\e99b";
    font-size: 2.5em
}

.message.error {
    background: #be3047;
    background: linear-gradient(180deg, #be3047 0, #952638);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFBE3047", endColorstr="#FF952638", GradientType=0)
}

.message.error p:before {
    content: "\e99e";
    font-size: 2.5em
}

.message.warning {
    background: #f29b2f;
    background: linear-gradient(180deg, #f29b2f 0, #e0820e);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFF29B2F", endColorstr="#FFE0820E", GradientType=0)
}

.message.warning p:before {
    content: "\e99d";
    font-size: 2.5em
}

.absolute_banner {
    left: 0;
    position: absolute;
    top: 30px;
    width: 100%
}

.h1,
h1 {
    font: 200 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.3333333333em;
    margin: 0 0 30px
}

@media only screen and (min-width:768px) {
    .h1,
    h1 {
        font-size: 2.8125em;
        line-height: 1.2222222222em
    }
}

@media only screen and (min-width:1020px) {
    .h1,
    h1 {
        font-size: 3.75em;
        line-height: 1.1666666667em
    }
}

.h2,
h2 {
    font: 200 1.625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.3846153846em;
    margin: 0 0 30px
}

@media only screen and (min-width:768px) {
    .h2,
    h2 {
        font-size: 1.875em;
        line-height: 1.3333333333em
    }
}

@media only screen and (min-width:1020px) {
    .h2,
    h2 {
        font-size: 2.5em;
        line-height: 1.25em
    }
}

.h3,
h3 {
    font: 400 1.4375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.4347826087em;
    margin: 0 0 30px
}

@media only screen and (min-width:768px) {
    .h3,
    h3 {
        font-size: 1.5625em;
        line-height: 1.3703703704em
    }
}

@media only screen and (min-width:1020px) {
    .h3,
    h3 {
        font-size: 1.875em;
        line-height: 1.3333333333em
    }
}

.h4,
h4 {
    font: 400 1.375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.5em
}

.h4,
.h5,
h4,
h5 {
    margin: 0 0 25px
}

.h5,
h5 {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.5294117647em
}

.h6,
h6 {
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 25px
}

.h6,
h6,
p {
    line-height: 1.5em
}

p {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 20px
}

.bold {
    font-weight: 700
}

.text-justify {
    text-align: justify
}

.div-placeholder-text {
    color: #2d3942!important;
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif!important;
    margin: 30px 0!important;
    text-align: center!important;
    width: 100%!important
}

.div-placeholder-text:before {
    margin: 0 10px 0 0
}

.div-placeholder-text:after,
.div-placeholder-text:before {
    content: "\e99d";
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1
}

.div-placeholder-text:after {
    margin: 0 0 0 10px
}

.up-arrow-morph {
    padding: 10px 55px 10px 20px;
    position: relative
}

.up-arrow-morph:after,
.up-arrow-morph:before {
    background: #fff;
    content: "";
    height: 2px;
    right: 5px;
    position: absolute;
    top: 18px;
    width: 16px;
    backface-visibility: hidden;
    transform: rotate(50deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1;
    transition: all .2s ease-in
}

.up-arrow-morph:after {
    right: 15px;
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=-2)
}

.up-arrow-morph.active:before,
.up-arrow-morph:after {
    backface-visibility: hidden;
    transform: rotate(-50deg);
    *zoom: 1
}

.up-arrow-morph.active:after,
.up-arrow-morph.active:before {
    top: 20px;
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2)
}

.up-arrow-morph.active:after {
    backface-visibility: hidden;
    transform: rotate(50deg);
    *zoom: 1
}

.button,
button,
input,
select,
textarea {
    background: #fff;
    display: inline-block;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 10px 20px;
    width: 100%
}

input[type="submit"] {
    padding: 10px 20px
}

iframe {
    width: 100%
}

.checkbox-holder {
    position: relative
}

[type="checkbox"]+label,
input[type="radio"]+label {
    cursor: pointer
}

[type="checkbox"]+label::-moz-selection,
input[type="radio"]+label::-moz-selection {
    background: none
}

[type="checkbox"]+label::selection,
input[type="radio"]+label::selection {
    background: none
}

[type="checkbox"]+label:before {
    border: 1px solid #aaa;
    content: " ";
    display: inline-block;
    height: 14px;
    margin-right: 5px;
    vertical-align: text-top;
    width: 14px
}

[type="checkbox"]:checked+label:after {
    background: #0091c7;
    position: absolute;
    content: " ";
    display: inline-block;
    height: 10px;
    left: 3px;
    top: 3px;
    width: 10px
}

[type="checkbox"],
[type="radio"] {
    left: -10000px;
    position: absolute
}

[type="radio"]+label:before {
    border: 1px solid #777;
    content: " ";
    display: inline-block;
    height: 14px;
    margin-right: 5px;
    vertical-align: text-top;
    border-radius: 50%;
    width: 14px
}

[type="radio"]:checked+label:after {
    background: #695396;
    position: absolute;
    content: " ";
    display: inline-block;
    height: 10px;
    left: 18px;
    top: 6px;
    border-radius: 50%;
    width: 10px
}

[type="date"]:before {
    content: attr(placeholder)!important;
    color: #aaa
}

.morecontent span {
    display: none
}

.morelink {
    display: inline-block;
    color: #0091c7!important
}

.morelink:hover {
    text-decoration: underline
}

.field input:-webkit-autofill,
.field select:-webkit-autofill,
.field textarea:-webkit-autofill {
    background-color: hsla(0, 0%, 100%, 0)!important;
    background: hsla(0, 0%, 100%, 0)
}

@media only screen and (min-width:768px) {
    .field {
        clear: both
    }
    .field.half-size {
        clear: none;
        float: left;
        margin: 0 10px;
        width: calc(50% - 20px)
    }
}

.switch {
    width: 35px;
    height: 20px;
    background: transparent;
    border: 2px solid #fff;
    border-radius: 10px;
    position: relative
}

.switch:hover {
    cursor: pointer
}

.switch button {
    transition: all .5s ease;
    background: hsla(0, 0%, 100%, .25);
    border: 2px solid #fff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    position: absolute;
    top: -2px;
    left: -2px;
    padding: 0
}

.switch button.on {
    left: 13px
}

.switch button.on:hover:after {
    content: "ON"
}

.switch button:hover {
    cursor: pointer
}

.switch button:hover:after {
    transition: all .25s ease;
    content: "OFF";
    position: absolute;
    left: 0;
    top: -20px;
    color: #fff;
    font-size: .625em
}

.no-padding {
    padding: 0!important;
    margin: 0!important
}

.wrapper {
    margin: 0 auto;
    max-width: 1150px;
    padding: 10px 20px 0;
    position: relative
}

.section-shadow {
    background: url(https://alison.com/html/site/img/xshadow.png.pagespeed.ic.MRMui9BKNo.webp);
    background-repeat: no-repeat;
    background-size: 96%;
    background-position: top;
    height: 26px;
    position: relative
}

.section-shadow-2 {
    background: url(https://alison.com/html/site/img/shadow-2.svg);
    background-repeat: no-repeat;
    background-size: 96%;
    background-position: top;
    height: 26px;
    position: relative
}

.adverts {
    margin: 60px 0;
    text-align: center
}

.angle-bottom {
    padding-bottom: 40px
}

.centered {
    margin: 0 auto
}

.text-right {
    text-align: right
}

.no-border {
    border: none
}

.cta-strip {
    background: #efeff0;
    margin: 70px 0 0;
    padding: 60px 20px;
    text-align: center;
    position: relative;
    z-index: 1
}

.cta-strip:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 100% 0;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 100% 0;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 100% 0;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 100% 0;
    background: #efeff0
}

.cta-strip h4 {
    color: #5d666d
}

.cta-strip .btn {
    width: 150px
}

@media only screen and (min-width:768px) {
    .cta-strip {
        padding: 100px 20px
    }
}

.back-to-top {
    color: #5d666d;
    display: block;
    margin: 25px auto;
    padding-left: 30px;
    position: relative;
    width: 120px
}

.back-to-top span {
    left: 0;
    position: absolute;
    top: 0;
    backface-visibility: hidden;
    transform: rotate(90deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

@media only screen and (min-width:768px) {
    .back-to-top {
        position: absolute;
        right: 0;
        top: 50%
    }
}

button {
    cursor: pointer
}

.hide-mobile {
    display: none!important
}

@media only screen and (min-width:768px) {
    .hide-mobile {
        display: block!important
    }
}

.separator-strip {
    background: #f1f2f2;
    padding: 30px 0
}

.center {
    margin: 30px 0;
    padding: 0 20px
}

.btn,
.center {
    text-align: center
}

.btn {
    transition: background .3s ease;
    background: #aaa;
    color: #fff;
    display: inline-block;
    max-width: 145px;
    padding: 10px 20px;
    cursor: pointer
}

.btn:hover {
    background: #919191
}

.btn.btn-icon {
    width: auto
}

.btn.btn-very-light-grey {
    background: #f1f2f2;
    color: #5d666d
}

.btn.btn-very-light-grey:hover {
    background: #d7d9d9
}

.btn.btn-light-grey {
    background: #aaa
}

.btn.btn-light-grey:hover {
    background: #919191
}

.btn.btn-grey {
    background: #2e3942
}

.btn.btn-grey:hover {
    background: #191f24
}

.btn.btn-medium-grey {
    background: #5d666d
}

.btn.btn-medium-grey:hover {
    background: #919191
}

.btn.btn-ghost {
    background-color: transparent;
    border: 1px solid #fff
}

.btn.btn-ghost:hover {
    color: #0094c9;
    background-color: #fff
}

.btn.btn-blue {
    background: #0091c7;
    color: #fff
}

.btn.btn-blue:hover {
    background: #006c94
}

.btn.btn-green {
    background: #38ac69;
    color: #fff
}

.btn.btn-green:hover {
    background: #2b8652
}

.btn.btn-large {
    max-width: 250px;
    margin: 20px auto
}

.btn.btn-ghost {
    background: none
}

.btn.btn-ghost.btn-blue {
    border: 2px solid #0091c7;
    color: #0091c7
}

.btn.btn-ghost.btn-blue:hover {
    background: #0091c7;
    color: #fff
}

.btn.btn-points {
    background: #fff;
    background-image: linear-gradient(180deg, #fff, #b4bdbf);
    border-radius: 10px;
    color: #2d3942;
    font-size: .875em;
    padding: 5px 120px 5px 22.5px;
    border: none;
    height: 50px;
    position: relative;
    max-width: 500px
}

.btn.btn-points:hover {
    background: #fff;
    background-image: linear-gradient(180deg, #fff, #aaa)
}

.btn.btn-points strong {
    font-weight: 600
}

.btn.btn-points .btn-addon {
    position: absolute;
    top: -5px;
    right: 0;
    width: 80px;
    line-height: 60px;
    background: #0091c7;
    border-radius: 5px;
    text-align: center;
    color: #fff;
    box-shadow: 0 5px 10px #aaa
}

.btn.btn-points .btn-addon span {
    font-size: 1.5em
}

.btn.btn-points .btn-addon:before {
    content: "";
    position: absolute;
    top: -11px;
    left: -4px;
    border-top: 29px solid transparent;
    border-right: 30px solid #0091c7;
    border-bottom: 29px solid transparent;
    margin: 13px 0 0 -25px
}

@media only screen and (min-width:768px) {
    .btn.btn-points {
        font-size: 1.125em;
        padding: 15px 120px 15px 22.5px
    }
}

.btn.btn-red-small {
    background: #be3047;
    color: #fff;
    font-size: .8125em;
    opacity: .35;
    transition: opacity .3s ease-in
}

.btn.btn-red-small:hover {
    opacity: 1
}

.btn.btn-red-small.delete-address {
    float: right;
    margin: 0 20px
}

.arrow-indicator {
    border: 2px solid #fff;
    border-radius: 50%;
    bottom: -50px;
    display: none;
    height: 36px;
    left: 50%;
    margin-left: -18px;
    position: absolute;
    width: 36px
}

.arrow-indicator span {
    font-size: 21px;
    line-height: 33px
}

@media only screen and (min-width:768px) {
    .arrow-indicator {
        display: block
    }
}

.line-through {
    color: #d4d4d4;
    font-size: inherit;
    text-decoration: line-through
}

strong {
    font-weight: 500
}

::-webkit-input-placeholder {
    font-size: .9375em
}

:-moz-placeholder,
::-moz-placeholder {
    font-size: .9375em
}

:-ms-input-placeholder {
    font-size: .9375em
}

.angle-shadow {
    float: left;
    margin: 0 0 25px;
    position: relative;
    width: 100%
}

.angle-shadow:after,
.angle-shadow:before {
    z-index: -1;
    position: absolute;
    content: "";
    bottom: 30px;
    left: -10px;
    width: 50%;
    top: 55%;
    max-width: 350px;
    background: hsla(0, 0%, 100%, 0);
    box-shadow: 0 30px 10px #1d355e;
    transform: rotate(-5deg)
}

.angle-shadow:after {
    transform: rotate(5deg);
    right: 10px;
    left: auto
}

.free-pdf {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 30px 15px 0;
    text-align: center
}

.free-pdf a {
    color: #fff!important;
    display: block;
    margin: 10px auto 0
}

.free-pdf a:hover {
    color: #2d3942!important
}

.read-more-expand {
    text-align: center
}

.read-more-expand .expand {
    height: 73px;
    overflow: hidden;
    text-align: left;
    transition: height .3s ease-in
}

.read-more-expand a.trigger {
    background: #0091c7;
    border-radius: 3px;
    display: block;
    margin: 15px auto;
    padding: 5px 5px 3px;
    text-align: center;
    width: 31px
}

.read-more-expand a.trigger span {
    color: #fff;
    font-size: 15px
}

.read-more-expand a.trigger:hover {
    background: #00597b
}

.tag-description {
    margin: 25px 0 35px
}

.tag-description h1 {
    font-size: 2em;
    margin-bottom: 14px;
    line-height: 1.1666666667em
}

.tag-description div,
.tag-description p {
    color: #5d666d;
    line-height: 23px;
    font-size: 14px
}

.tag-description div a,
.tag-description p a {
    color: #5d666d
}

.angle-shadow.dark-shadow:after,
.angle-shadow.dark-shadow:before {
    bottom: 11px;
    background: #20292d;
    box-shadow: 0 15px 10px #20292d
}

.disabled-inputs button,
.disabled-inputs input,
.disabled-inputs select,
.disabled-inputs textarea {
    color: #9e9e9e!important;
    pointer-events: none!important
}

.content-landing .social-buttons a {
    color: #2e3942
}

.content-landing .image {
    float: left;
    padding: 20px 10px 10px 0;
    width: 50%
}

.content-landing .image img {
    max-width: 100%
}

.content-landing .text {
    padding: 20px 0
}

.content-landing a {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    .content-landing .image {
        padding: 20px 20px 10px 0;
        width: 300px
    }
}

@media only screen and (min-width:1020px) {
    .content-landing .image {
        width: 350px
    }
}

.bg-image>img {
    bottom: -1000px;
    left: -1000px;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    right: -1000px;
    top: -1000px
}

.placeholder {
    opacity: .5
}

.edge--both--reverse {
    margin: 70px 0;
    padding: 30px 0;
    position: relative;
    z-index: 1
}

.edge--both--reverse:after,
.edge--both--reverse:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

.edge--both--reverse:before {
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 0 0
}

.edge--both--reverse:after {
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 0;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 0
}

.-grey {
    background: #f3f4f5
}

.text-center {
    text-align: center
}

.breadcrumb-wrapper {
    padding-top: 0;
    display: none
}

@media only screen and (min-width:768px) {
    .breadcrumb-wrapper {
        display: block
    }
}

.breadcrumb {
    margin: 20px 0 10px;
    color: #fff;
    font-size: .875em;
    padding: 0 15px
}

.breadcrumb.alt {
    padding: 0 10px;
    margin: 4px 0 10px;
    text-align: left
}

.breadcrumb.alt .icon-right-arrow,
.breadcrumb.alt li:not(:last-child):after,
.breadcrumb.alt li a,
.breadcrumb.alt li a:active,
.breadcrumb.alt li a:visited,
.breadcrumb.alt li span {
    color: #5d666d
}

.breadcrumb.alt .icon-home {
    color: #0091c7
}

.breadcrumb li {
    display: inline-block
}

.breadcrumb li a {
    color: #fff;
    font-size: 100%
}

.breadcrumb li a:active,
.breadcrumb li a:visited {
    color: #fff
}

.breadcrumb li a:hover {
    text-decoration: none
}

.breadcrumb li span {
    color: #fff
}

.breadcrumb .icon-right-arrow {
    font-weight: 700;
    font-size: 10px;
    margin: 0 4px
}

.notice.with-icon {
    padding-left: 35px;
    position: relative
}

.notice.with-icon [class*="icon"] {
    font-size: 23px;
    left: 0;
    margin-top: -18px;
    position: absolute;
    top: 50%
}

.global-search {
    margin: 0 auto;
    max-width: 500px;
    position: relative
}

.global-search input[type="text"] {
    float: left;
    height: 37px;
    width: 83%;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px
}

.global-search button {
    background: #2e3942;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-left: 1px solid #2e3942;
    border-right: none;
    border-top: none;
    border-bottom: none;
    cursor: pointer;
    float: left;
    height: 37px;
    padding: 10px 0;
    width: 17%;
    transition: all .3s ease-in
}

.global-search button span {
    color: #fff
}

.global-search button:hover {
    background: #fff
}

.global-search button:hover span {
    color: #2e3942
}

@media only screen and (min-width:400px) {
    .global-search button {
        width: 15%
    }
    .global-search input[type="text"] {
        width: 85%
    }
}

@media only screen and (min-width:768px) {
    .global-search button {
        width: 15%
    }
    .global-search button span,
    .global-search input[type="text"] {
        width: 85%
    }
}

@media only screen and (min-width:1020px) {
    .global-search button {
        height: 50px;
        padding: 12px 0
    }
    .global-search button span {
        font-size: 1.5em
    }
    .global-search input[type="text"] {
        font-size: 1.1875em;
        height: 50px
    }
    .desktop-middle {
        display: table;
        height: 100%;
        padding: 0;
        position: absolute;
        top: 0;
        width: 100%
    }
    .desktop-middle .align {
        display: table-cell;
        height: 100%;
        text-align: center;
        vertical-align: middle;
        width: 100%
    }
}

.like-comments-widget {
    margin-right: 10px
}

.like-comments-widget a,
.like-comments-widget span {
    color: #465159;
    margin-left: 10px
}

.like-comments-widget a:first-child:hover {
    color: #0091c7
}

.like-comments-widget a:last-child:hover {
    color: #be3047
}

.like-comments-widget a.blue {
    color: #0091c7
}

.like-comments-widget a.red {
    color: #be3047
}

.stars {
    margin: 10px 0 0
}

.stars [class*="icon"] {
    color: #d1d3d4;
    display: inline-block;
    font-size: 1.0625em
}

.stars.rating [class*="icon"]:hover {
    cursor: pointer
}

.stars.rating .line {
    height: 30px;
    line-height: 30px;
    margin-top: 10px;
    color: #2d3942;
    font-weight: 500
}

.lrg-btn {
    background-color: #0094c9;
    clear: both;
    color: #fff;
    display: block;
    max-width: 180px;
    padding: 10px 0;
    text-align: center;
    cursor: pointer
}

.lrg-btn:hover {
    background: #006e96
}

.pull-right {
    float: right!important
}

.blue-overlay {
    position: relative
}

.blue-overlay:after {
    background: rgba(0, 145, 199, .7);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.alert {
    position: absolute;
    top: 100px;
    left: 50px;
    padding: 25px;
    border: 1px solid;
    color: red;
    border-radius: 25px;
    background: #f1f2f2
}

.hide {
    display: none
}

.top-bar {
    margin-top: 20px
}

.transparent {
    background: transparent
}

.align-center {
    text-align: center
}

.valign-center {
    position: relative;
    top: 50%;
    transform: translateY(-50%)
}

.align-right {
    text-align: right
}

.message-info {
    padding: 20px;
    margin-top: 20px;
    background: #f1f2f2
}

.light-red {
    color: #be3047
}

.align-parent {
    display: table;
    width: 100%
}

.align-center {
    display: table-cell;
    vertical-align: middle
}

.favorite {
    background: #be3047!important;
    border-color: #be3047!important
}

.favorite:hover {
    opacity: .7
}

.social-buttons a {
    font-size: 1.5em;
    color: #fff;
    opacity: .6
}

.social-buttons a:hover {
    opacity: 1
}

@media (max-width:400px) {
    .g-recaptcha iframe {
        max-width: 100%;
        transform: scale(.77);
        -webkit-transform: scale(.77);
        transform-origin: center center;
        -webkit-transform-origin: center center
    }
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(79, 81, 89, .6)
}

.modal .close {
    color: #fff;
    float: right;
    margin-top: 5px;
    font-weight: 200;
    font-size: 3.125em
}

.modal .close:focus,
.modal .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer
}

.modal .modal-body {
    padding: 20px
}

.modal .modal-header {
    background-color: #2e3942;
    color: #fff;
    padding: 10px 15px
}

.modal .modal-header h1,
.modal .modal-header h2,
.modal .modal-header h3,
.modal .modal-header h4,
.modal .modal-header h5,
.modal .modal-header h6 {
    font-weight: 200;
    margin: 0
}

.modal .modal-footer {
    color: #2e3942;
    padding: 0 15px 15px
}

.modal .modal-content {
    position: relative;
    background-color: #f1f2f2;
    padding: 0;
    margin: 70px auto;
    border: 1px solid #2e3942;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: .4s;
    animation-name: animatetop;
    animation-duration: .4s
}

.modal .modal-content [type="text"],
.modal .modal-content textarea {
    background: transparent;
    border-bottom: 1px solid #aaa
}

.modal .modal-content img {
    max-width: 400px;
    width: 100%
}

.modal .modal-content-white .modal-footer,
.modal .modal-content-white .modal-header {
    background-color: #f1f2f2;
    color: #2d3942
}

.modal .modal-content-white .close {
    color: #aaa
}

.modal .modal-content-white .close:hover {
    color: #2e3942
}

.modal .modal-content-white .close:focus,
.modal .modal-content-white .close:hover {
    color: #000;
    text-decoration: none;
    cursor: pointer
}

@keyframes animatetop {
    0% {
        top: -300px;
        opacity: 0
    }
    to {
        top: 0;
        opacity: 1
    }
}

@media only screen and (min-width:768px) {
    .modal .modal-content {
        width: 70%;
        margin-top: 100px
    }
}

@media only screen and (min-width:1020px) {
    .modal .modal-content {
        max-width: 60%
    }
}

@media only screen and (min-width:1500px) {
    .modal .modal-content {
        max-width: 40%
    }
}

.resource-listing a[href*="file"] {
    color: #0091c7
}

.resource-listing a[href*="file"]:before {
    content: "\e994";
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    margin-right: 5px
}

.resource-listing a[href*="file"]:hover {
    color: #1d355e
}

@media print {
    .print,
    footer,
    header {
        display: none
    }
}

.zoomIn {
    -moz-animation-name: zoomIn;
    -moz-animation-duration: 1s;
    -moz-animation-fill-mode: both;
    -webkit-animation-name: zoomIn;
    -webkit-animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-duration: 1s;
    animation-name: zoomIn;
    animation-fill-mode: both
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        transform: scale3d(.3, .3, .3)
    }
    50% {
        opacity: 1
    }
}

.bounce {
    animation-name: bounce;
    transform-origin: center bottom;
    animation-duration: 1.5s;
    animation-fill-mode: both;
    animation-iteration-count: infinite
}

@keyframes bounce {
    0%,
    20%,
    53%,
    80%,
    to {
        transition-timing-function: cubic-bezier(.215, .61, .355, 1);
        transform: translateZ(0)
    }
    40%,
    43% {
        transition-timing-function: cubic-bezier(.755, .05, .855, .06);
        transform: translate3d(0, -20px, 0)
    }
    70% {
        transition-timing-function: cubic-bezier(.755, .05, .855, .06);
        transform: translate3d(0, -15px, 0)
    }
    90% {
        transform: translate3d(0, -4px, 0)
    }
}

[class*=" icon-"],
[class^="icon-"] {
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.icon-twitter2:before {
    content: "\e944"
}

.icon-popular:before {
    content: "\e94a"
}

.icon-recent:before {
    content: "\e95c"
}

.icon-trending:before {
    content: "\e976"
}

.icon-facebook-logo:before {
    content: "\e9c7"
}

.icon-google-plus:before {
    content: "\e9c8"
}

.icon-linkedin-logo2:before {
    content: "\e9c9"
}

.icon-outlook-icon:before {
    content: "\e9ca"
}

.icon-yahoo-logo:before {
    content: "\e9cb"
}

.icon-new-filter:before {
    content: "\e9c6"
}

.icon-broaden:before {
    content: "\e9c3"
}

.icon-master:before {
    content: "\e9c4"
}

.icon-progress:before {
    content: "\e9c5"
}

.icon-PDF-Filled:before {
    content: "\e9c2"
}

.icon-Gift-Filled:before {
    content: "\e9ba"
}

.icon-Graduation-Cap-Filled:before {
    content: "\e9bb"
}

.icon-Literature-Filled:before {
    content: "\e9bd"
}

.icon-User-Groups-Filled:before {
    content: "\e9be"
}

.icon-step3:before {
    content: "\e9ac"
}

.icon-step6:before {
    content: "\e9b0"
}

.icon-step5:before {
    content: "\e9b1"
}

.icon-step4:before {
    content: "\e9b7"
}

.icon-step2:before {
    content: "\e9b8"
}

.icon-step1:before {
    content: "\e9b9"
}

.icon-info:before {
    content: "\e9ab"
}

.icon-success:before {
    content: "\e99b"
}

.icon-save:before {
    content: "\e995"
}

.icon-download:before {
    content: "\e994"
}

.icon-fav:before {
    content: "\e96b"
}

.icon-fav2:before {
    content: "\e983"
}

.icon-fav3:before {
    content: "\e93d";
    color: #000
}

.icon-rocket-line:before {
    content: "\e9a5"
}

.icon-management:before {
    content: "\e978"
}

.icon-marketing:before {
    content: "\e979"
}

.icon-lifestyle:before {
    content: "\e97a"
}

.icon-health:before {
    content: "\e97b"
}

.icon-environment:before {
    content: "\e97c"
}

.icon-people:before {
    content: "\e97d"
}

.icon-science:before {
    content: "\e97e"
}

.icon-maths:before {
    content: "\e97f"
}

.icon-technology2:before {
    content: "\e980"
}

.icon-filter:before {
    content: "\e981"
}

.icon-help:before {
    content: "\e977"
}

.icon-linkedin-logo:before {
    content: "\e975"
}

.icon-phone:before {
    content: "\e972"
}

.icon-pin:before {
    content: "\e973"
}

.icon-upload2:before {
    content: "\e95e"
}

.icon-upload:before {
    content: "\e943"
}

.icon-pencil:before {
    content: "\e939"
}

.icon-undo:before {
    content: "\e965"
}

.icon-redo:before {
    content: "\e966"
}

.icon-stats-bars:before {
    content: "\e99c"
}

.icon-rocket2:before {
    content: "\e9bc"
}

.icon-meter:before {
    content: "\e9a6"
}

.icon-tree:before {
    content: "\e9cc"
}

.icon-heart2:before {
    content: "\e9da"
}

.icon-cross2:before {
    content: "\ea0f"
}

.icon-checkmark:before {
    content: "\ea10"
}

.icon-printer:before {
    content: "\e9c1"
}

.icon-thumb-up:before {
    content: "\e946"
}

.icon-thumb-down:before {
    content: "\e947"
}

.icon-thick-chevron-down:before {
    content: "\e9bf"
}

.icon-thick-chevron-up:before {
    content: "\e9c0"
}

.icon-payment-options:before {
    content: "\e9a7"
}

.icon-description:before {
    content: "\e998"
}

.icon-diploma-label:before {
    content: "\e9aa"
}

.icon-outcome:before {
    content: "\e9ad"
}

.icon-assessment:before {
    content: "\e9ae"
}

.icon-chapter:before {
    content: "\e9af"
}

.icon-course-plan:before {
    content: "\e9b2"
}

.icon-module:before {
    content: "\e9b3"
}

.icon-play:before {
    content: "\e9b4"
}

.icon-ressources:before {
    content: "\e9b5"
}

.icon-accreditation:before {
    content: "\e99f"
}

.icon-account:before {
    content: "\e9a0"
}

.icon-certification-and-payments:before {
    content: "\e9a1"
}

.icon-getting-started:before {
    content: "\e9a2"
}

.icon-login-issues:before {
    content: "\e9a3"
}

.icon-my-account:before {
    content: "\e9a4"
}

.icon-tracking-and-delivery:before {
    content: "\e9a8"
}

.icon-upgrade:before {
    content: "\e9a9"
}

.icon-warning:before {
    content: "\e99d"
}

.icon-danger:before {
    content: "\e99e"
}

.icon-crown:before {
    content: "\e999"
}

.icon-present:before {
    content: "\e99a"
}

.icon-rate:before {
    content: "\e997"
}

.icon-search-bar-categories:before {
    content: "\e996"
}

.icon-video:before {
    content: "\e987"
}

.icon-audio:before {
    content: "\e988"
}

.icon-certificate:before {
    content: "\e989"
}

.icon-responsive:before {
    content: "\e98a"
}

.icon-sort:before {
    content: "\e986"
}

.icon-book2:before {
    content: "\e985"
}

.icon-learning:before {
    content: "\e984"
}

.icon-checked:before {
    content: "\e974"
}

.icon-minus:before {
    content: "\e962"
}

.icon-plus:before {
    content: "\e961"
}

.icon-check:before {
    content: "\e93f"
}

.icon-cross3:before {
    content: "\e948"
}

.icon-pinterest:before {
    content: "\ead1"
}

.icon-flag:before {
    content: "\e945"
}

.icon-rotate-right:before {
    content: "\e968"
}

.icon-rotate-left:before {
    content: "\e93e"
}

.icon-zoom-out:before {
    content: "\e940"
}

.icon-zoom-in:before {
    content: "\e941"
}

.icon-last-alert:before {
    content: "\e963"
}

.icon-megaphone:before {
    content: "\e964"
}

.icon-past-month:before {
    content: "\e967"
}

.icon-3dots:before {
    content: "\e969"
}

.icon-new-alert:before {
    content: "\e96a"
}

.icon-bell-ring:before {
    content: "\e971"
}

.icon-select:before {
    content: "\e9d1"
}

.icon-location:before {
    content: "\e9d0"
}

.icon-invisble:before {
    content: "\e9cf"
}

.icon-visible:before {
    content: "\e9ce"
}

.icon-filled-star:before {
    content: "\e95f"
}

.icon-previous-icon:before {
    content: "\e9cd"
}

.icon-user-log:before {
    content: "\e903"
}

.icon-triangle-for-languages:before {
    content: "\e959"
}

.icon-search2:before {
    content: "\e95b"
}

.icon-alert-off:before {
    content: "\e95d"
}

.icon-left-quote:before {
    content: "\e95a"
}

.icon-getting-a-certificate:before {
    content: "\e955"
}

.icon-payments:before {
    content: "\e956"
}

.icon-premium-services:before {
    content: "\e957"
}

.icon-technical-help:before {
    content: "\e958"
}

.icon-bio:before {
    content: "\e953"
}

.icon-camera:before {
    content: "\e952"
}

.icon-address:before {
    content: "\e954"
}

.icon-profile:before {
    content: "\e94b"
}

.icon-education:before {
    content: "\e94c"
}

.icon-professional:before {
    content: "\e94d"
}

.icon-highlights-icon:before {
    content: "\e94f"
}

.icon-left-arrow:before {
    content: "\e93b"
}

.icon-right-arrow:before {
    content: "\e93c"
}

.icon-technology:before {
    content: "\e91e"
}

.icon-table:before {
    content: "\e951"
}

.icon-bell:before {
    content: "\e928"
}

.icon-send:before {
    content: "\e915"
}

.icon-menu:before {
    content: "\e929"
}

.icon-error:before {
    content: "\e927"
}

.icon-leaf:before {
    content: "\e926"
}

.icon-chat:before {
    content: "\e918"
}

.icon-path:before {
    content: "\e920"
}

.icon-cross:before {
    content: "\e925"
}

.icon-suitcase:before {
    content: "\e950"
}

.icon-star:before {
    content: "\e921"
}

.icon-hat:before {
    content: "\e90d"
}

.icon-student:before {
    content: "\e90c"
}

.icon-clock:before {
    content: "\e919"
}

.icon-controls:before {
    content: "\e91a"
}

.icon-course:before {
    content: "\e91b"
}

.icon-gears:before {
    content: "\e91c"
}

.icon-heart:before {
    content: "\e91d"
}

.icon-money:before {
    content: "\e91f"
}

.icon-tag:before {
    content: "\e922"
}

.icon-time:before {
    content: "\e923"
}

.icon-trophy:before {
    content: "\e924"
}

.icon-categories:before {
    content: "\e914"
}

.icon-faq:before {
    content: "\e90f"
}

.icon-globe:before {
    content: "\e910"
}

.icon-hand:before {
    content: "\e911"
}

.icon-news:before {
    content: "\e913"
}

.icon-shop:before {
    content: "\e917"
}

.icon-search:before {
    content: "\e90a"
}

.icon-envelope:before {
    content: "\e909"
}

.icon-lock:before {
    content: "\e908"
}

.icon-windows:before {
    content: "\e905"
}

.icon-twitter:before {
    content: "\e94e"
}

.icon-facebook:before {
    content: "\e92a"
}

.icon-google:before {
    content: "\e901"
}

.icon-linkedin:before {
    content: "\e902"
}

.icon-yahoo:before {
    content: "\e904"
}

.icon-mail:before {
    content: "\e912"
}

.icon-share:before {
    content: "\e90b"
}

.icon-chevron-down:before {
    content: "\e916"
}

.icon-suit-case:before {
    content: "\e92d"
}

.icon-book:before {
    content: "\e92e"
}

.icon-calculator:before {
    content: "\e92f"
}

.icon-chemistry:before {
    content: "\e930"
}

.icon-computer:before {
    content: "\e931"
}

.icon-full-heart:before {
    content: "\e932"
}

.icon-messages:before {
    content: "\e933"
}

.icon-target:before {
    content: "\e935"
}

.icon-world:before {
    content: "\e936"
}

.icon-skills:before {
    content: "\e960"
}

.icon-user:before {
    content: "\e90e"
}

.icon-circle-group:before {
    content: "\e942"
}

.icon-bag:before {
    content: "\e96c"
}

.icon-bell-line:before {
    content: "\e96d"
}

.icon-cart:before {
    content: "\e96e"
}

.icon-faq-line:before {
    content: "\e96f"
}

.icon-home:before {
    content: "\e970"
}

.icon-paths:before {
    content: "\e949"
}

.icon-geography:before {
    content: "\e934"
}

.icon-time-lapse:before {
    content: "\e900"
}

.icon-home2:before {
    content: "\e906"
}

.icon-courses:before {
    content: "\e907"
}

.icon-flashTesting:before {
    content: "\e92c"
}

.icon-studyGroups:before {
    content: "\e92b"
}

.icon-publishing:before {
    content: "\e937"
}

.icon-communityMain:before {
    content: "\e982"
}

.icon-about:before {
    content: "\e93a"
}

.icon-alisonShop:before {
    content: "\e938"
}

.icon-category:before {
    content: "\e9b6"
}

.icon-category-business:before {
    content: "\e98b"
}

.icon-category-health:before {
    content: "\e98c"
}

.icon-category-humanities:before {
    content: "\e98d"
}

.icon-category-it:before {
    content: "\e98e"
}

.icon-category-language:before {
    content: "\e98f"
}

.icon-category-lifestyle:before {
    content: "\e990"
}

.icon-category-marketing:before {
    content: "\e991"
}

.icon-category-math:before {
    content: "\e992"
}

.icon-category-science:before {
    content: "\e993"
}

.sale {
    background: #0094c9;
    display: none;
    height: 0;
    padding: 0;
    position: absolute;
    opacity: 0;
    top: 49px;
    text-align: center;
    z-index: 9;
    width: 100%;
    transition: all .5s ease-in
}

.sale.active {
    display: block;
    height: 140px;
    padding: 10px 0 20px;
    opacity: 1
}

.sale h3,
.sale p {
    color: #fff
}

.sale h3 {
    font: 700 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif!important;
    margin: 0 10px 0 0;
    vertical-align: middle;
    text-transform: uppercase
}

.sale h3 .icon-crown {
    color: #ffd200;
    display: inline-block;
    vertical-align: text-top
}

.sale h3 p {
    display: inline;
    font-weight: 700
}

.sale .sale-desc {
    display: block;
    font-size: 13px;
    margin: 5px 10px 0 0;
    text-align: center;
    vertical-align: middle
}

.sale .btn {
    border: 1px solid #fff;
    border-radius: 3px;
    font: 400 13px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 10px 5px 0;
    padding: 6px 10px
}

.sale .btn:hover {
    background: #fff;
    color: #0094c9
}

.sale .close {
    color: #fff;
    font-weight: 700;
    margin-top: -5px;
    position: absolute;
    right: 10px;
    top: 50%
}

@media only screen and (min-width:768px) {
    .sale {
        top: 52px
    }
    .sale .wrapper {
        padding-top: 5px
    }
    .sale.active {
        height: 55px;
        padding: 10px 0
    }
    .sale h3 {
        display: inline-block;
        font-size: 1em!important
    }
    .sale .sale-desc {
        display: inline-block;
        font-size: 14px;
        margin: 0 20px
    }
    .sale .btn {
        display: inline-block;
        margin: 0 5px;
        vertical-align: middle
    }
}

@media only screen and (min-width:1020px) {
    .sale h3 {
        margin: 0 20px 0 0
    }
}

header {
    background: #2e3942;
    text-align: center;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000
}

header .wrapper {
    max-width: 1280px;
    background: #2e3942;
    margin: 14px auto 9px;
    padding: 0 15px;
    position: static;
    z-index: 2
}

header .wrapper .login-links .btn {
    margin: 0;
    font-size: 12px;
    padding: 3px 6px;
    border-radius: 3px
}

@media only screen and (min-width:768px) {
    header .wrapper .login-links .btn {
        background: #0094c9;
        padding: 7px 18px;
        font-size: 16px
    }
}

header .wrapper .login-links .login-button {
    margin: 11px
}

header .wrapper .resume-link-menu {
    display: block
}

@media only screen and (min-width:768px) {
    header .wrapper .resume-link-menu {
        display: none
    }
}

header .wrapper .resume-link {
    float: right;
    display: none;
    transition: all .5s ease-in-out
}

header .wrapper .resume-link:hover .btn {
    border: 1px solid #0094c9;
    background-color: #0094c9;
    color: #fff
}

header .wrapper .resume-link:hover .btn span {
    color: #fff
}

header .wrapper .resume-link:hover .btn span:before {
    transition: all .5s ease-in-out
}

header .wrapper .resume-link .btn {
    margin-top: -2px;
    border: 1px solid #fff;
    font-size: 12px;
    background-color: transparent;
    padding: 5px;
    border-radius: 3px;
    color: #fff;
    line-height: 23px
}

header .wrapper .resume-link .btn span {
    display: inline-block;
    margin: -1px 0 1px 6px;
    color: #fff;
    font-size: 1.4375em
}

header .wrapper .resume-link .btn.link {
    margin-top: -2px
}

@media only screen and (min-width:768px) {
    header .wrapper .resume-link {
        display: inline-block
    }
    header .wrapper .resume-link .btn {
        padding: 5px 14px 5px 18px;
        font-size: 14px
    }
    header .wrapper .resume-link .btn.link {
        margin-top: -6px
    }
}

header .navigation {
    display: none
}

header .link {
    color: #fff;
    display: block;
    margin: 1px 0 0;
    float: left
}

header .link.float-right {
    float: right
}

header .link.float-right .menu-trigger {
    margin-top: -6px
}

header .link.float-right .menu-trigger .menu-label {
    display: none
}

header .link.float-right .search-trigger span {
    margin-top: 1px
}

header .link.float-right>div {
    margin: 0 0 0 15px
}

header .link>a {
    margin: 0 15px 0 0
}

header .link>a.sidebar-trigger {
    margin-right: 24px
}

header .link [class*="icon"] {
    transition: color .2s ease-in;
    color: #fff;
    display: inline-block;
    vertical-align: middle;
    font-size: 1em
}

header .link [class*="icon"]:hover {
    color: #68aadd
}

header .link .link.sidebar-trigger .avatar-outer {
    overflow: hidden;
    border-radius: 100%;
    width: 25px;
    height: 25px;
    position: relative;
    top: -1px
}

header .link .link.sidebar-trigger .avatar-outer .avatar {
    width: 100%;
    height: 100%
}

header .link .link.sidebar-trigger .number {
    background-color: #0093c9
}

header .cart,
header .notifications {
    position: relative
}

header .cart .number,
header .notifications .number {
    background: #be3047;
    border-radius: 50%;
    color: #fff;
    content: "";
    display: block;
    font-size: .5625em;
    line-height: 8px;
    min-width: 19px;
    padding: 5px;
    position: absolute;
    right: -11px;
    top: -8px;
    text-align: center
}

header .lang {
    float: right
}

header .lang a {
    color: #fff;
    font-weight: 300;
    font-size: .875em
}

header .lang a .arrow-down {
    transition: border-top-color .2s ease-in;
    display: inline-block;
    width: 0;
    height: 0;
    vertical-align: middle;
    margin-left: 5px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #fff
}

header .lang:hover a {
    color: #61d4ff
}

header .lang:hover a .arrow-down {
    border-top-color: #61d4ff
}

header .logo {
    display: none;
    left: 50%;
    margin-left: -45px;
    position: absolute;
    width: 90px
}

header .logo img {
    display: none;
    width: 100%
}

header .header-angle {
    position: relative;
    z-index: 1;
    z-index: -1
}

header .header-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-.5deg);
    transform-origin: 100%;
    -moz-transform: skewY(-.5deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-.5deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-.5deg);
    -webkit-transform-origin: 100%;
    background: #2e3942;
    height: 100px;
    width: 100%
}

header .logo-short {
    display: block;
    left: calc(50% - 17px);
    position: absolute;
    width: 35px
}

header .logo-short img {
    display: block;
    width: 100%
}

header .search {
    float: right
}
header .menu-trigger-languages,
header .menu-trigger {
    cursor: pointer;
    float: right;
    line-height: 23px;
    padding: 5px 10px 6px;
    border-radius: 3px;
    border: 1px solid #fff;
    transition: all .3s ease-in-out
}

header .menu-trigger.open,
header .menu-trigger:hover {
    background-color: #0094c9;
    border: 1px solid #0094c9
}

header .menu-trigger .nav-burger {
    transition: all .5s ease-in-out;
    width: 21px;
    height: 22px;
    top: 2px;
    position: relative;
    cursor: pointer;
    float: right
}

header .menu-trigger .nav-burger,
header .menu-trigger .nav-burger span {
    backface-visibility: hidden;
    transform: rotate(0deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=4);
    *zoom: 1
}

header .menu-trigger .nav-burger span {
    transition: all .25s ease-in-out;
    display: block;
    position: absolute;
    height: 1px;
    width: 100%;
    background: #fff;
    opacity: 1;
    left: 0;
    border-radius: 3px
}

header .menu-trigger .nav-burger span:first-child {
    top: 3px
}

header .menu-trigger .nav-burger span:nth-child(2),
header .menu-trigger .nav-burger span:nth-child(3) {
    top: 9px
}

header .menu-trigger .nav-burger span:nth-child(4) {
    top: 15px
}

header .menu-trigger .nav-burger.open span:first-child,
header .menu-trigger .nav-burger.open span:nth-child(4) {
    top: 18px;
    width: 0;
    left: 50%
}

header .menu-trigger .nav-burger.open span:nth-child(2) {
    backface-visibility: hidden;
    transform: rotate(45deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=4);
    *zoom: 1
}

header .menu-trigger .nav-burger.open span:nth-child(3) {
    backface-visibility: hidden;
    transform: rotate(-45deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=4);
    *zoom: 1
}

header.not-loggedin .link:not(.float-right) {

}

header.not-loggedin .link.login-button {
    margin: 3px 15px 5px
}

@media only screen and (min-width:768px) {
    header.not-loggedin .wrapper {
        margin: 5px auto
    }
    header.not-loggedin .link .text,
    header.not-loggedin .link:not(.float-right).btn-blue {
        font-size: 16px
    }
    header.not-loggedin .link.login-button {
        margin: 8px 11px
    }
}

header .dropdown-lang,
header .dropdown-nav {
    display: none;
    position: fixed;
    right: 0;
    top: 20px;
    padding: 25px 15px 0;
    text-align: left;
    width: 100%;
    max-height: calc(100% - 20px);
    z-index: -1;
    background: #242c33
}

header .dropdown-lang li,
header .dropdown-nav li {
    display: block;
    margin-bottom: 0;
    padding: 18px;
    border-bottom: 1px solid #fff
}

header .dropdown-lang li:last-child,
header .dropdown-nav li:last-child {
    border-bottom: none
}

header .dropdown-lang li [class*="icon"],
header .dropdown-lang li [class*="icon"]:hover,
header .dropdown-lang li a,
header .dropdown-nav li [class*="icon"],
header .dropdown-nav li [class*="icon"]:hover,
header .dropdown-nav li a {
    color: #fff
}

header .dropdown-lang li [class*="icon"]:hover:before,
header .dropdown-nav li [class*="icon"]:hover:before {
    color: #68aadd
}

header .dropdown-lang [class*="icon"],
header .dropdown-nav [class*="icon"] {
    color: #fff;
    display: inline-block
}

header .dropdown-lang [class*="icon"] span,
header .dropdown-nav [class*="icon"] span {
    vertical-align: middle
}

header .dropdown-lang [class*="icon"]:before,
header .dropdown-nav [class*="icon"]:before {
    display: inline-block;
    width: 55px;
    vertical-align: middle
}

header .dropdown-lang [class*="icon"] span,
header .dropdown-nav [class*="icon"] span {
    font: 400 12px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

header .dropdown-lang li a {
    display: block;
    padding: 5px 0
}

header .dropdown-lang li a:hover {
    color: #68aadd
}

header .dropdown-lang li:last-child {
    border: 0;
    margin-bottom: 0
}

header .dropdown-nav {
    overflow: scroll
}

header .dropdown-nav span {
    text-transform: uppercase
}

header .dropdown-lang {
    text-align: left;
    padding: 20px 10px 10px;
    width: 120px;
    top: 20px;
    right: 0
}

header .dropdown-lang li {
    padding: 0;
    margin: 0 0 10px;
    border-bottom: 1px solid hsla(0, 0%, 100%, .2);
    font-size: .875em
}

header #hp-tag {
    background: rgba(21, 25, 34, .5);
    width: 100%;
    height: 66px;
    padding-top: 4px;
    position: absolute;
    color: #fff;
    -webkit-animation-name: animateSale;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 2s;
    -webkit-animation-timing-function: ease-out;
    -webkit-animation-fill-mode: forwards;
    animation-name: animateSale;
    animation-iteration-count: 1;
    animation-duration: 2s;
    animation-timing-function: ease-out;
    animation-fill-mode: forwards;
    z-index: -2
}

header #hp-tag .tag-wrapper {
    margin: 0 auto;
    display: inline-block;
    text-align: center
}

header #hp-tag .tag-wrapper h2 {
    font-size: 1.25em;
    font-weight: 700;
    display: inline-block;
    vertical-align: middle;
    margin: 0
}

header #hp-tag .tag-wrapper p {
    font-size: 1em;
    font-weight: 300;
    display: inline-block;
    vertical-align: middle;
    line-height: 1.5em;
    margin: 0
}

header #hp-tag .tag-wrapper p:nth-child(2) {
    margin-right: 0
}

header #hp-tag .sale-content {
    margin: 0 0 6px;
    font-size: .75em;
    font-weight: 300;
    text-align: center;
    display: inline-block
}

header #hp-tag a {
    width: 100px;
    margin: 0 auto;
    display: block
}

header #hp-tag .btn {
    background: #0091c7;
    border: 1px solid #0091c7;
    bottom: 15px;
    color: #fff;
    display: inline-block;
    font: 400 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 2px 0;
    margin: 0 8px;
    right: 15px;
    text-align: center
}

header #hp-tag .btn:hover {
    background: #006c94
}

@keyframes animateSale {
    0% {
        top: -466px;
        opacity: 0
    }
    to {
        visibility: visible;
        top: 45px;
        opacity: 1
    }
}

@media only screen and (min-width:768px) {
    header {
        padding: 5px 10px
    }
    header .wrapper {
        padding: 0 5px;
        margin: 6px auto 7px
    }
    header .dropdown-lang,
    header .dropdown-nav {
        width: 255px;
        position: absolute;
        max-height: none;
        overflow: visible
    }
    header .dropdown-lang li,
    header .dropdown-nav li {
        margin-bottom: 0;
        padding: 14px
    }
    header .dropdown-lang {
        top: 30px;
        right: 0
    }
    header.not-loggedin .link .text {
        display: inline-block;
        font-weight: 300;
        margin-left: 10px;
        position: relative;
        vertical-align: bottom
    }
    header.not-loggedin .link .text:after {
        background: #fff;
        bottom: 0;
        content: "";
        height: 1px;
        left: 0;
        position: absolute;
        width: 0;
        transition: all .3s ease-in
    }
    header.not-loggedin .link:hover .text:after {
        width: 100%
    }
    header .link {
        margin: 6px 5px 0 0;
        position: relative
    }
    header .link [class*="icon"] {
        font-size: 1.375em
    }
    header .link.notifications:before {
        width: 15px;
        height: 15px;
        right: -5px;
        top: -8px
    }
    header .link.notifications:after {
        right: 0;
        font-size: .625em;
        top: -10px
    }
    header .logo {
        margin-left: -75px;
        max-width: 150px;
        width: 100%
    }
    header .logo,
    header .logo img {
        display: block
    }
    header .logo-short,
    header .logo-short img {
        display: none
    }
    header .lang a {
        font-size: 1em
    }
    header #hp-tag {
        height: 56px
    }
    header #hp-tag .tag-wrapper {
        padding-top: 14px;
        margin: 4px auto
    }
}

@media only screen and (min-width:1020px) {
    header .dropdown-lang li,
    header .dropdown-nav li {
        margin-bottom: 15px
    }
    header .link.float-right .menu-trigger {
        border: 1px solid #fff;
        margin-top: -6px;
        padding: 5px 10px
    }
    header .link.float-right .menu-trigger:hover {
        border: 1px solid #0094c9
    }
    header .link.float-right .menu-trigger .nav-burger {
        margin-left: 10px
    }
    header .link.float-right .menu-trigger .menu-label {
        display: inline
    }
    header .logo {
        margin-left: -90px;
        max-width: 160px
    }
    header .logo,
    header .logo img {
        display: block
    }
    header .logo-short,
    header .logo-short img {
        display: none
    }
    header #hp-tag {
        background: url(https://alison.com/html/site/img/xhp-tag.png.pagespeed.ic.OJaTX1Bx2Q.webp);
        left: 85px;
        background-size: 225px 310px;
        background-repeat: no-repeat;
        width: 225px;
        height: 310px;
        padding-top: 60px
    }
    header #hp-tag .tag-wrapper {
        width: 150px;
        margin: 0 auto;
        display: block;
        text-align: center
    }
    header #hp-tag .tag-wrapper h2 {
        font-size: 2.5em;
        font-weight: 700;
        display: inline-block;
        vertical-align: initial;
        margin: 0
    }
    header #hp-tag .tag-wrapper p {
        font-size: 1.3em;
        font-weight: 300;
        display: inline-block;
        vertical-align: middle;
        line-height: 1.5em;
        margin: 0 0 20px
    }
    header #hp-tag .tag-wrapper p:nth-child(2) {
        margin-right: 10px
    }
    header #hp-tag .sale-content {
        width: 130px;
        margin: 10px auto 20px;
        text-align: center;
        font-weight: 400;
        font-size: .875em;
        display: block
    }
    header #hp-tag a {
        width: 100px;
        margin: 0 auto;
        display: block
    }
    header #hp-tag .btn {
        bottom: 15px;
        display: block;
        font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        padding: 5px 0;
        right: 15px;
        margin: 0 auto
    }
}

@media only screen and (min-width:1500px) {
    header .wrapper .dropdown-lang {
        right: 0
    }
}

@media only screen and (min-width:1921px) {
    header .wrapper .menu-trigger {
        position: relative
    }
    header .wrapper .dropdown-nav {
        right: 0;
        top: 0
    }
}

.nav-open {
    position: relative;
    overflow-y: scroll
}

.nav-open header .menu-trigger.open {
    position: fixed;
    right: 10px;
    top: 20px
}

.nav-open .navigation {
    position: fixed
}

.nav-wrapper {
    padding: 0
}

.navigation {
    background: rgba(0, 145, 199, .8);
    display: none;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 10
}

.navigation ul {
    left: 0;
    position: absolute;
    text-align: center;
    top: 80px
}

.navigation li {
    background: #2e3942 url(https://alison.com/html/site/img/nav-bg.svg) no-repeat;
    display: inline-block;
    height: 100px;
    margin: 2px 0;
    max-width: 140px;
    text-align: center;
    width: calc(50% - 4px);
    transition: background .2s ease-in
}

.navigation li:hover {
    background-color: #0064b3
}

.navigation li:nth-child(2) span[class*=icon] {
    font-size: 3.125em
}

.navigation li:nth-child(2):hover {
    background-color: #1f7c3c
}

.navigation li:nth-child(3) [class*=icon] {
    font-size: 1.25em
}

.navigation li:nth-child(3) [class*=icon]:before {
    display: block;
    padding: 10px 0 0
}

.navigation li:nth-child(3):hover {
    background-color: #dd4662
}

.navigation li:nth-child(4):hover {
    background-color: #6d6bff
}

.navigation li:nth-child(5) [class*=icon] {
    font-size: 2.1875em
}

.navigation li:nth-child(5) [class*=icon]:before {
    display: block;
    padding: 10px 0 0
}

.navigation li:nth-child(5):hover {
    background-color: #f16d00
}

.navigation li:nth-child(6):hover {
    background-color: #810fac
}

.navigation li:nth-child(7):hover {
    background-color: #f79b25
}

.navigation li:nth-child(8) [class*=icon] {
    font-size: 2.5em
}

.navigation li:nth-child(8) [class*=icon]:before {
    display: block;
    padding: 10px 0 0
}

.navigation li:nth-child(8):hover {
    background-color: #5cbb66
}

.navigation li:nth-child(9):hover {
    background-color: #1d355e
}

.navigation a {
    color: #fff;
    display: block;
    font: 400 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    letter-spacing: .06em;
    padding: 20px 10px 0;
    text-transform: uppercase
}

.navigation span {
    display: block;
    text-align: center
}

.navigation [class*="icon"] {
    height: 35px;
    font-size: 3.0625em;
    margin: 0 0 15px
}

@media only screen and (min-width:768px) {
    .navigation ul {
        margin: 0 auto;
        right: 0;
        top: 220px;
        width: 540px
    }
    .navigation li {
        margin: 10px;
        max-width: none;
        width: calc(33.3% - 29px)
    }
    .navigation a {
        font-size: .8125em
    }
}

@media only screen and (min-width:1020px) {
    .navigation li {
        height: 150px
    }
    .navigation a {
        padding: 45px 10px 0
    }
}

#hp-navigation {
    display: none;
    position: fixed;
    right: -72px;
    top: 50%;
    width: 100px;
    z-index: 1000;
    min-height: 200px;
    transform: translateY(-100px)
}

#hp-navigation .icon-button-down,
#hp-navigation .icon-button-up {
    border: 3px solid #b6c7cc;
    width: 37px;
    height: 37px;
    border-radius: 100%;
    margin-left: -12px;
    cursor: pointer;
    padding-top: 8px;
    text-align: center;
    font-weight: 700;
    transition: all .2s ease-in
}

#hp-navigation .icon-button-down:before,
#hp-navigation .icon-button-up:before {
    color: #b6c7cc
}

#hp-navigation .icon-button-down:hover,
#hp-navigation .icon-button-down:hover:before,
#hp-navigation .icon-button-up:hover,
#hp-navigation .icon-button-up:hover:before {
    color: #2d3942;
    border-color: #2d3942
}

#hp-navigation .icon-button-up {
    padding-top: 6px
}

#hp-navigation .icon-button-up:before {
    content: "\e9c0"
}

#hp-navigation .icon-button-down:before {
    content: "\e9bf"
}

#hp-navigation ul .hp-nav {
    margin: 15px 0 15px 2px;
    height: 10px;
    width: 10px;
    background-color: #b6c7cc;
    border-radius: 50px;
    cursor: pointer;
    position: relative;
    z-index: 1002;
    transition: all .2s ease-in
}

#hp-navigation ul .hp-nav .hp-nav-btn {
    color: #b6c7cc;
    font-size: 13px;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0
}

#hp-navigation ul .hp-nav .hp-tooltip {
    position: absolute;
    top: -4px;
    right: 45px;
    white-space: nowrap;
    color: #fff;
    font-size: .8em;
    padding: 0 10px 2px 12px;
    font-weight: 300;
    background-color: #384651;
    -moz-border-radius-bottomleft: 6px;
    -moz-border-radius-topleft: 6px;
    border-bottom-left-radius: 6px;
    border-top-left-radius: 6px;
    display: none
}

#hp-navigation ul .hp-nav.active {
    background-color: #2d3942;
    width: 15px;
    height: 15px;
    margin-left: 0;
    border: 1px solid #2d3942
}

#hp-navigation ul .hp-nav:hover {
    background-color: #2d3942;
    margin-bottom: 15px
}

#hp-navigation ul .hp-nav:hover+.hp-nav {
    margin-top: 13px
}

#hp-navigation ul .hp-nav:hover .hp-tooltip {
    display: block
}

@media only screen and (min-width:768px) {
    #hp-navigation {
        display: block;
        right: -50px
    }
    #hp-navigation ul .hp-nav {
        height: 10px;
        width: 10px;
        padding: 8px 0 0 9px
    }
    #hp-navigation ul .hp-nav .hp-nav-btn {
        font-size: 1.275em
    }
}

@media only screen and (min-width:1500px) {
    #hp-navigation {
        display: block;
        right: -32px
    }
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    #hp-navigation {
        top: 40%
    }
}

@media screen and (min-width:0\0) and (min-resolution:0.001dpcm) {
    #hp-navigation {
        top: 40%
    }
}

.login-modal {
    background: rgba(45, 57, 66, .8);
    display: none;
    left: 0;
    position: absolute;
    height: 100%!important;
    top: 0;
    width: 100%;
    z-index: 1000
}

.login-modal .close-modal {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 1.4375em;
    cursor: pointer
}

.login-modal .close-modal span {
    color: #fff
}

.login-modal.register {
    position: absolute
}

.login-modal.register .inner-modal {
    height: auto
}

.login-modal.register .inner-modal .login-container {
    margin: 40px auto 22px
}

@media only screen and (min-width:768px) {
    .login-modal.register .inner-modal {
        bottom: auto;
        top: 80px
    }
}

.login-modal .inner-modal {
    height: 580px;
    left: 0;
    margin: auto;
    max-width: 480px;
    position: absolute;
    overflow: hidden;
    right: 0;
    top: 50px;
    width: 100%;
    background-color: #0094c9;
    border-radius: 8px;
    box-shadow: 0 4px 9px rgba(0, 0, 0, .3);
    transition: height .5s ease-in-out
}

.login-modal .inner-modal .login-container {
    position: static;
    max-width: 380px;
    margin: 34px auto;
    padding: 20px
}

.login-modal .inner-modal .login-container .tab-content .tab#login h1,
.login-modal .inner-modal .login-container .tab-content .tab#login h3 {
    font-size: 1.4em
}

.login-modal .inner-modal .login-container .tab-content .tab h1,
.login-modal .inner-modal .login-container .tab-content .tab h3 {
    top: 20px;
    font-size: 1.2em
}

@media only screen and (min-width:768px) {
    .login-modal {
        position: fixed
    }
    .login-modal .inner-modal {
        bottom: 0;
        top: 0;
        height: 530px
    }
    .login-modal .inner-modal .login-container {
        margin: 40px auto;
        padding: 0
    }
    .login-modal .inner-modal .login-container .tab-content .tab h1,
    .login-modal .inner-modal .login-container .tab-content .tab h3 {
        top: 40px;
        font-size: 1.875em
    }
}

.gradient {
    background: #fff;
    background: linear-gradient(180deg, #fff 0, #e8e8e8);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#fff", endColorstr="#E8E8E8", GradientType=0);
    padding: 50px 0
}

.angle-container {
    position: relative
}

.angle {
    z-index: 1;
    bottom: -1px;
    height: 50px;
    overflow: hidden
}

.angle,
.angle .default {
    position: absolute;
    width: 100%
}

.angle .default {
    border-top: 30px solid transparent;
    border-bottom: 1px solid transparent;
    bottom: 0;
    content: "";
    height: 40px;
    left: 0;
    right: 0
}

.angle .right {
    border-right: 100vw solid #fff
}

.angle .left {
    border-left: 100vw solid #fff
}

.angle .inverted {
    border-top: 1px solid transparent;
    border-bottom: 25px solid transparent
}

.angle .left-grey {
    border-left: 100vw solid #2e3942
}

.angle .right-grey {
    border-right: 100vw solid #2e3942
}

.angle .left-dark-grey {
    border-left: 100vw solid #242c33
}

.angle .right-dark-grey {
    border-right: 100vw solid #242c33
}

.angle .left-light-grey {
    border-left: 100vw solid #f1f2f2
}

.angle .right-light-grey {
    border-right: 100vw solid #f1f2f2
}

.angle .left-inactive {
    border-left: 100vw solid #e8edf1
}

.angle .right-inactive {
    border-right: 100vw solid #e8edf1
}

@media only screen and (min-width:768px) {
    .angle .inverted {
        border-bottom: 25px solid transparent
    }
}

@media only screen and (min-width:1020px) {
    .angle .inverted {
        border-bottom: 30px solid transparent
    }
}

.angle-top {
    top: -1px;
    bottom: auto
}

.angle-top .default {
    top: 0
}

.angle-header {
    height: 18px;
    left: 0;
    position: absolute;
    overflow: hidden;
    top: 98%;
    width: 100%;
    z-index: 12
}

.angle-header .default {
    border-bottom: 11px solid transparent;
    border-top: 0 solid transparent;
    border-left: 100vw solid #2e3942;
    box-shadow: #000;
    content: "";
    height: 100%;
    left: 0;
    right: 0;
    position: absolute;
    bottom: 2px;
    width: 100%
}

@media only screen and (min-width:768px) {
    .angle-header {
        height: 53px
    }
    .angle-header .default {
        border-bottom: 50px solid transparent
    }
}

.angle-footer {
    height: 40px;
    left: 0;
    position: absolute;
    top: -38px;
    overflow: hidden;
    width: 100%
}

.angle-footer .default {
    border-right: 100vw solid #2e3942;
    border-top: 16px solid transparent;
    border-bottom: 0 solid transparent;
    border-left: 50px solid transparent;
    content: "";
    height: 40px;
    left: -50px;
    right: -20px;
    position: absolute;
    bottom: -1px;
    width: calc(100% + 40px);
    z-index: 1
}

@media only screen and (min-width:768px) {
    .angle-footer .default {
        border-top: 30px solid transparent
    }
}

.banner,
.banner-hp {
    background: url(https://alison.com/html/site/img/xbanner-bg.jpg.pagespeed.ic.PCj3SvpWu_.webp) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    color: #fff;
    position: relative;
    text-align: center;
    z-index: 10
}

.banner-hp .banner-align,
.banner .banner-align {
    height: 450px
}

.banner-hp .learning-path-name,
.banner .learning-path-name {
    margin: 50px 0 30px
}

.banner-hp h1,
.banner-hp h2,
.banner-hp h3,
.banner-hp h4,
.banner-hp h5,
.banner-hp h6,
.banner-hp p,
.banner h1,
.banner h2,
.banner h3,
.banner h4,
.banner h5,
.banner h6,
.banner p {
    color: #fff
}

.banner-hp p,
.banner p {
    font-size: 1.125em
}

.banner-hp p i,
.banner p i {
    margin: 0 3px
}

.banner-hp h2,
.banner h2 {
    font-size: 1.5625em;
    margin: 0 0 25px
}

.banner-hp .headline-description,
.banner .headline-description {
    font-size: 1.0625em;
    margin: 0 0 25px
}

.banner-hp h6,
.banner h6 {
    margin: 10px 0
}

.banner-hp ul,
.banner ul {
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.banner-hp ul li,
.banner ul li {
    color: #fff
}

.banner-hp a,
.banner a {
    color: #fff;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.banner-hp a:hover,
.banner a:hover {
    text-decoration: none
}

.banner-hp .p-light span,
.banner .p-light span {
    color: #ffd200
}

.banner-hp .tabs,
.banner .tabs {
    margin-top: 50px
}

.banner-hp .bg-image,
.banner .bg-image {
    height: 100%;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 100%
}

.banner-hp .subtitle,
.banner .subtitle {
    font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 30px auto 35px;
    max-width: 600px
}

.banner-hp .paragraph,
.banner .paragraph {
    color: #fff;
    display: block;
    margin: 25px 0;
    text-align: center
}

.banner-hp .circle-image,
.banner .circle-image {
    border-radius: 50%;
    height: 95px;
    margin: 0;
    width: 95px;
    overflow: hidden
}

.banner-hp .circle-image img,
.banner .circle-image img {
    margin: 0 0 0 -25%;
    position: relative;
    width: auto;
    height: 100%
}

.banner-hp .inline-container,
.banner .inline-container {
    margin-bottom: 0;
    padding-bottom: 60px
}

.banner-hp .inline-container .inline,
.banner .inline-container .inline {
    display: inline-block;
    margin: 0 5px;
    vertical-align: middle
}

.banner-hp .banner-angle,
.banner .banner-angle {
    position: relative;
    z-index: 1;
    margin-top: 50px
}

.banner-hp .banner-angle:after,
.banner .banner-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 10px;
    width: 100%
}

.banner-hp .banner-angle-flipped,
.banner .banner-angle-flipped {
    position: relative;
    z-index: 1;
    margin-top: 50px
}

.banner-hp .banner-angle-flipped:after,
.banner .banner-angle-flipped:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 70px;
    width: 100%
}

.banner-hp .icon-widget span,
.banner .icon-widget span {
    display: block;
    font-size: 1.875em;
    margin: 0 0 5px
}

.banner-hp .icon-widget p,
.banner .icon-widget p {
    font-size: .875em
}

@media only screen and (min-width:768px) {
    .banner-hp .banner-angle:after,
    .banner .banner-angle:after {
        height: 35px
    }
    .banner-hp .circle-image,
    .banner .circle-image {
        height: 195px;
        width: 195px
    }
    .banner-hp .circle-image img,
    .banner .circle-image img {
        width: auto
    }
    .banner-hp .icon-widget span,
    .banner .icon-widget span {
        font-size: 2.1875em
    }
    .banner-hp .icon-widget p,
    .banner .icon-widget p {
        font-size: 1em
    }
}

@media only screen and (min-width:1020px) {
    .banner-hp h2,
    .banner h2 {
        font-size: 2.8125em
    }
    .banner-hp .circle-image,
    .banner .circle-image {
        height: 200px;
        margin: 0 25px;
        width: 200px
    }
    .banner-hp .circle-image img,
    .banner .circle-image img {
        height: 100%;
        width: auto
    }
    .banner-hp .icon-widget span,
    .banner .icon-widget span {
        font-size: 2.5em
    }
    .banner-hp .icon-widget p,
    .banner .icon-widget p {
        font-size: 1.125em
    }
}

.outer-wrap {
    background-repeat: no-repeat;
    background-position: -300px -200px;
    height: auto
}

.outer-wrap #bg-hp {
    position: relative;
    height: 690px;
    max-width: 100%
}

.outer-wrap #bg-hp #error-found {
    background: url(https://alison.com/html/site/img/xmaintenance-image-mobile.png.pagespeed.ic.jAMZB6zA5o.webp) no-repeat 50%;
    background-size: cover;
    height: 100%;
    position: absolute;
    text-align: center;
    width: 100%
}

.outer-wrap #bg-hp #error-found .banner-hp .wrapper {
    background: rgba(0, 0, 0, .5)
}

.outer-wrap #bg-hp #error-found .banner-hp .content h1,
.outer-wrap #bg-hp #error-found .banner-hp .content h2 {
    font: 400 2.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

@media only screen and (min-width:768px) {
    .outer-wrap #bg-hp #error-found {
        background: url(https://alison.com/html/site/img/xmaintenance-image-tablet.png.pagespeed.ic.YsF9I936XV.webp) no-repeat 50%;
        background-size: cover
    }
    .outer-wrap #bg-hp #error-found .banner-hp .content form input {
        float: left;
        width: calc(100% - 145px)
    }
    .outer-wrap #bg-hp #error-found .banner-hp .content form button {
        display: inline-block
    }
}

@media only screen and (min-width:1020px) {
    .outer-wrap #bg-hp #error-found {
        background: url(https://alison.com/html/site/img/xmaintenance-image-desktop.png.pagespeed.ic.J83t31DrGW.webp) no-repeat 50%;
        background-size: cover
    }
}

.outer-wrap #bg-hp .banner-hp {
    background: transparent;
    color: #fff;
    margin: 0;
    padding: 40px 0 0;
    text-align: center;
    z-index: 2
}

.outer-wrap #bg-hp .banner-hp .align-parent {
    display: block;
    height: auto
}

.outer-wrap #bg-hp .banner-hp .align-center {
    display: block;
    padding: 10px
}

.outer-wrap #bg-hp .banner-hp .wrapper {
    padding: 15px 35px 10px;
    background: rgba(0, 0, 0, .5);
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    height: auto
}

.outer-wrap #bg-hp .banner-hp .wrapper.hp-wrapper h1 {
    font-size: 1.125em;
    font-weight: 300
}

.outer-wrap #bg-hp .banner-hp .wrapper h1,
.outer-wrap #bg-hp .banner-hp .wrapper h2 {
    margin-bottom: 15px;
    font-size: 1.5em
}

.outer-wrap #bg-hp .banner-hp .wrapper p {
    font-size: .875em
}

.outer-wrap #bg-hp .banner-hp .wrapper .global-search {
    margin: 0 auto
}

.outer-wrap #bg-hp .banner-hp .wrapper .tabs {
    margin-top: 35px
}

.outer-wrap #bg-hp .banner-hp .wrapper .banner-hp-spacer {
    margin-bottom: 25px
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    transform: translate(0)
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul {
    position: absolute;
    height: 100%;
    width: 100%
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li {
    position: relative;
    height: auto;
    padding: 10px 20px;
    border-bottom: 1px solid transparent;
    border-left: 1px solid transparent;
    background: rgba(0, 0, 0, .5);
    margin: 3px 0 3px 3px;
    width: calc(33.33333% - 2px);
    float: left
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li:first-child {
    border-bottom-left-radius: 3px;
    margin-left: 0
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li:nth-child(3) {
    border-bottom: 0 solid;
    border-bottom-right-radius: 3px
}

.outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li span {
    text-align: center;
    padding-top: 5px;
    display: inline-block
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets {
    display: none;
    padding: 0 30px;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    z-index: 1;
    margin: 0 10px;
    background-color: transparent
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt {
    display: block;
    float: left;
    background-color: transparent;
    height: auto;
    width: 50%
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner {
    max-width: 145px;
    margin: 0 auto;
    text-align: center;
    padding: 10px 0
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner [class^="icon-"] {
    float: left;
    margin-top: 14px;
    padding-right: 10px
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner [class^="icon-"]:before {
    font-size: 1.3125em;
    color: #fff
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner .icon-hp-group:before {
    content: "\e9be"
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner .icon-hp-hat:before {
    content: "\e9bb"
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner .icon-hp-book:before {
    content: "\e9bd"
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner .icon-hp-present:before {
    content: "\e9ba"
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner .image-bullet {
    width: 40px;
    float: left
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner p {
    margin-bottom: 0;
    font-size: 1em;
    line-height: inherit;
    padding-top: 7px;
    color: #fff
}

.outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner span:last-child {
    font-weight: 300;
    font-size: .875em!important;
    color: #fff
}

.outer-wrap #bg-hp .banner-hp .hp-social-login {
    margin-top: 20px
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log {
    padding-left: 4px;
    padding-right: 4px
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login {
    padding: 12px;
    width: auto;
    cursor: pointer;
    border-radius: 4px;
    margin: .5em auto;
    color: #fff;
    display: block;
    text-decoration: none
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login [class^="icon-"] {
    display: inline-block;
    font-size: 1.3125em;
    margin-right: 4px;
    vertical-align: text-bottom
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login .social-text {
    display: inline-block;
    font-size: .75em
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login.g-login {
    background-color: #ec3c1f;
    opacity: .8
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login.fb-login {
    background-color: #5e7fc1;
    opacity: .8
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login.yahoo-login {
    background-color: #ab48b7;
    opacity: .8
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login:hover {
    text-decoration: none
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login:hover.g-login {
    background-color: #c72b11
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login:hover.fb-login {
    background-color: #4265aa
}

.outer-wrap #bg-hp .banner-hp .hp-social-login .social-log .social-login:hover.yahoo-login {
    background-color: #893a92
}

@media only screen and (min-width:768px) {
    .outer-wrap #bg-hp {
        height: 500px;
        min-height: 0;
        max-height: none
    }
    .outer-wrap #bg-hp video {
        top: -40px;
        width: 100%
    }
    .outer-wrap #bg-hp .banner-hp {
        padding: 0;
        position: absolute;
        width: 100%;
        max-width: 400px;
        height: auto;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }
    .outer-wrap #bg-hp .banner-hp .align-center {
        padding: 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper {
        padding: 15px 30px 10px;
        height: auto;
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        border-top-right-radius: 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper h1,
    .outer-wrap #bg-hp .banner-hp .wrapper h2 {
        font: 200 1.875em/1.33333em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        margin: 0 0 10px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper p {
        font-size: 1.125em
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details {
        position: absolute;
        right: 0;
        left: auto;
        width: 100px;
        height: 100%;
        top: 0;
        transform: translate(100%)
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul {
        height: 100%;
        width: 95px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li {
        height: calc(33.3333333333% - 2px);
        float: none;
        margin-top: 0;
        width: 91px;
        padding: 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li:first-child {
        border-bottom-left-radius: 0;
        border-top-right-radius: 3px;
        margin-left: 3px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li:nth-child(3) {
        border-bottom: 0 solid;
        border-bottom-right-radius: 3px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .hp-details ul li span {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%)
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .categories-search .trigger-search {
        width: 55px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .categories-search .trigger-search.highlighted {
        background-color: #0094c9
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .categories-search input[type="text"] {
        width: 236px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt {
        height: 63px;
        width: 25%;
        padding: 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner {
        padding: 5px 0 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner [class^="icon-"] {
        padding-right: 0
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner p {
        font-size: .875em
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .info-bullets .info-blt .info-blt-inner span:last-child {
        font-size: .75em!important
    }
}

@media only screen and (min-width:1020px) {
    .outer-wrap #bg-hp {
        height: 550px;
        min-height: 0;
        max-height: none
    }
    .outer-wrap #bg-hp video {
        top: -140px;
        width: auto;
        position: relative
    }
    .outer-wrap #bg-hp .banner-hp {
        max-width: 550px
    }
    .outer-wrap #bg-hp .banner-hp .wrapper h1,
    .outer-wrap #bg-hp .banner-hp .wrapper h2 {
        font-size: 3.75em
    }
    .outer-wrap #bg-hp .banner-hp .wrapper .categories-search input[type="text"] {
        width: 386px
    }
}

@media screen and (max-height:480px) {
    .outer-wrap #bg-hp {
        min-height: 480px
    }
}

@media only screen and (min-width:768px) {
    .outer-wrap {
        min-height: 0;
        max-height: none;
        background-size: auto;
        background-position: 0 0
    }
}

@media only screen and (min-width:1500px) {
    .outer-wrap {
        background-size: contain
    }
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    #bg-hp .banner-hp {
        padding: 0;
        position: absolute;
        top: calc(50% - 127px);
        left: auto;
        max-width: 100%
    }
    #bg-hp .banner-hp .align-parent {
        display: table;
        height: auto
    }
    #bg-hp .banner-hp .align-center {
        display: table-cell
    }
}

@media screen and (min-width:0\0) and (min-resolution:0.001dpcm) {
    #bg-hp .banner-hp {
        padding: 0;
        position: absolute;
        top: calc(50% - 127px);
        left: auto;
        max-width: 100%
    }
    #bg-hp .banner-hp .align-parent {
        display: table;
        height: auto
    }
    #bg-hp .banner-hp .align-center {
        display: table-cell
    }
}

#cert-check .banner .banner-angle {
    margin: 0
}

#cert-check .banner h1 {
    margin-bottom: 0
}

#cert-check .banner .banner-align {
    height: 150px
}

#cert-check .banner .wrapper:last-child {
    padding: 70px 20px
}

#cert-check .banner .wrapper .info-box {
    margin: 0 0 -40px;
    position: relative;
    z-index: 9
}

#cert-check .banner .wrapper .info-box .text-justify p {
    font-size: 1em;
    color: #5d666d;
    margin-bottom: 15px
}

@media only screen and (min-width:768px) {
    #cert-check .banner .banner-align {
        height: 350px
    }
    #cert-check .banner .wrapper:last-child {
        padding: 10px 20px 70px
    }
}

@media print {
    .banner-align {
        display: none
    }
}

.hidden-form {
    position: absolute;
    left: -9999px;
    top: -9999px
}

.field {
    position: relative
}

.field textarea {
    text-align: justify
}

.field .icon {
    padding: 0
}

.field label {
    color: #5d666d;
    font: 400 Roboto, Helvetica Neue, Helvetica, Arial, sans-serif 1em
}

.field .field-checkbox {
    margin-top: 20px
}

.field a textarea[disabled],
.field input[disabled],
.field input[readonly] {
    background: #f1f2f2;
    transition: background .5s ease;
    opacity: .75;
    cursor: not-allowed
}

.field a textarea[disabled]:focus,
.field input[disabled]:focus,
.field input[readonly]:focus {
    color: #2e3942!important;
    border-color: #2e3942
}

.field input[type="date"]::-webkit-inner-spin-button,
.field input[type="date"]::-webkit-outer-spin-button,
.field input[type="number"]::-webkit-inner-spin-button,
.field input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0 5px
}

.date-of-birth {
    padding: 7.5px 20px
}

.field-transparent button,
.field-transparent input,
.field-transparent label,
.field-transparent select,
.field-transparent textarea {
    color: #fff;
    border-bottom: 1px solid transparent;
    background: transparent
}

.field-transparent button::-webkit-input-placeholder,
.field-transparent input::-webkit-input-placeholder,
.field-transparent label::-webkit-input-placeholder,
.field-transparent select::-webkit-input-placeholder,
.field-transparent textarea::-webkit-input-placeholder {
    color: #fff;
    opacity: .5
}

.field-transparent button:-ms-input-placeholder,
.field-transparent input:-ms-input-placeholder,
.field-transparent label:-ms-input-placeholder,
.field-transparent select:-ms-input-placeholder,
.field-transparent textarea:-ms-input-placeholder {
    color: #fff;
    opacity: .5
}

.field-transparent button:-moz-placeholder,
.field-transparent button::-moz-placeholder,
.field-transparent input:-moz-placeholder,
.field-transparent input::-moz-placeholder,
.field-transparent label:-moz-placeholder,
.field-transparent label::-moz-placeholder,
.field-transparent select:-moz-placeholder,
.field-transparent select::-moz-placeholder,
.field-transparent textarea:-moz-placeholder,
.field-transparent textarea::-moz-placeholder {
    color: #fff;
    opacity: .5
}

.field-transparent button:focus,
.field-transparent button:hover,
.field-transparent input:focus,
.field-transparent input:hover,
.field-transparent label:focus,
.field-transparent label:hover,
.field-transparent select:focus,
.field-transparent select:hover,
.field-transparent textarea:focus,
.field-transparent textarea:hover {
    border-color: #fff!important;
    color: #fff!important
}

.field-group {
    position: relative;
    display: block
}

.field-centered {
    margin-left: auto;
    margin-right: auto
}

.field-centered button,
.field-centered input,
.field-centered select,
.field-centered textarea {
    text-align: center
}

.field-centered::-webkit-input-placeholder {
    text-align: center
}

.field-centered:-ms-input-placeholder {
    text-align: center
}

.field-centered:-moz-placeholder,
.field-centered::-moz-placeholder {
    text-align: center
}

.form-buttons {
    padding: 15px
}

.form-buttons .btn {
    max-width: 100px;
    font-size: .75em
}

.field-inline-edit input:hover:enabled,
.field-inline-edit select:hover:enabled,
.field-inline-edit textarea:hover:enabled {
    cursor: pointer;
    transition: all .5 ease;
    color: #2e3942;
    border-color: #2e3942
}

.field-inline-edit input:disabled,
.field-inline-edit select:disabled,
.field-inline-edit textarea:disabled {
    opacity: .75
}

#sitemap ul {
    margin: 50px 0
}

#sitemap ul li a {
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    color: #5d666d
}

#sitemap ul li a:hover {
    text-decoration: underline;
    color: #0091c7
}

.sticky-footer footer.main {
    position: fixed;
    bottom: 0;
    width: 100%
}

footer.main {
    background: #2e3942;
    padding: 0;
    position: relative;
    text-align: center;
    margin-top: 50px;
    z-index: 5
}

footer.main .tab {
    display: none
}

footer.main .tab.active {
    display: block
}

footer.main .wrap-bottom {
    background: #212c36;
    width: 100%
}

footer.main .wrap-bottom .half-bottom {
    max-width: 1185px;
    margin: 0 auto
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title {
    background: #51555f;
    cursor: pointer;
    display: block;
    float: left;
    padding: 20px;
    height: 60px;
    margin-left: 5px;
    width: calc(20% - 5px)
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title a {
    color: #fff;
    font: 400 1.1875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title .text {
    display: none
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title:hover {
    background: #5d666d
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title.active {
    background: #283139;
    border-top: 3px solid #0091c7;
    position: relative
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title.active:after {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(136, 183, 213, 0);
    border-bottom-color: #0091c7;
    border-width: 10px;
    margin-left: -10px
}

footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title:first-child {
    margin-left: 0
}

footer.main .wrap-bottom .main-bottom {
    max-width: 1180px;
    margin: 0 auto;
    padding: 30px 0 40px;
    text-align: center
}

footer.main .wrap-bottom .main-bottom .logo {
    display: inline-block;
    width: 135px
}

footer.main .wrap-bottom .main-bottom .icon-group {
    display: inline-block;
    text-align: center
}

footer.main .wrap-bottom .main-bottom .icon-group [class*="icon"] {
    font-size: 2.1875em;
    margin: 0 5px;
    opacity: .5;
    transition: all .3s ease-in
}

footer.main .wrap-bottom .main-bottom .icon-group [class*="icon"]:hover {
    opacity: 1;
    color: #0091c7
}

footer.main .wrap-bottom .main-bottom .icon-group a {
    color: #fff;
    padding: 0
}

footer.main .wrap-bottom .main-bottom ul {
    display: inline-block;
    margin: 20px auto;
    max-width: 300px
}

footer.main .wrap-bottom .main-bottom ul [class*="icon"] {
    color: #fff;
    display: inline-block;
    margin: 10px 7px;
    font-size: .8125em
}

footer.main .wrap-bottom .main-bottom ul [class*="icon"] a,
footer.main .wrap-bottom .main-bottom ul [class*="icon"] span {
    color: #fff;
    display: inline-block;
    text-transform: uppercase;
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    vertical-align: middle;
    margin-left: 5px;
    position: relative
}

footer.main .wrap-bottom .main-bottom ul [class*="icon"] a:after,
footer.main .wrap-bottom .main-bottom ul [class*="icon"] span:after {
    background: #fff;
    bottom: -1px;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    width: 0;
    transition: width .3s ease-in
}

footer.main .wrap-bottom .main-bottom ul [class*="icon"] a:hover:after,
footer.main .wrap-bottom .main-bottom ul [class*="icon"] span:hover:after {
    width: 100%
}

footer.main .wrap-bottom .main-bottom ul [class*="icon"] span:hover:after {
    display: none
}

footer.main .top {
    background: #465159
}

@media only screen and (min-width:400px) {
    footer.main .wrap-bottom .main-bottom ul {
        max-width: 100%
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] {
        font-size: 1em
    }
}

@media only screen and (min-width:768px) {
    footer.main {
        margin-top: 50px;
        padding: 20px 0
    }
    footer.main .main-bg {
        background-image: url(https://alison.com/html/site/img/xfooter-triangles.png.pagespeed.ic.PZONZGE5E1.webp);
        background-repeat: no-repeat;
        background-position: 100% 100%
    }
    footer.main .wrap-bottom .half-bottom {
        max-width: 760px
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title {
        margin-left: 5px;
        width: calc(20% - 5px)
    }
    footer.main .wrap-bottom .main-bottom {
        padding: 20px 0
    }
    footer.main .wrap-bottom .main-bottom .logo {
        display: inline-block;
        width: 100px;
        margin: 0
    }
    footer.main .wrap-bottom .main-bottom ul {
        width: 400px;
        margin: 0;
        padding: 0 40px;
        vertical-align: middle
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] {
        font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        margin-left: 0
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] a,
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] span {
        font-size: .625em;
        margin-right: 0
    }
    footer.main .wrap-bottom .main-bottom .icon-group {
        display: inline-block
    }
    footer.main .wrap-bottom .main-bottom .icon-group [class*="icon"] {
        font-size: 1.5em;
        margin: 0
    }
}

@media only screen and (min-width:1020px) {
    footer.main {
        padding: 20px 0 0
    }
    footer.main .wrap-bottom .half-bottom {
        max-width: 1185px
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title {
        margin-left: 5px;
        width: calc(20% - 5px)
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title .text {
        display: inline-block;
        font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        margin-left: 15px
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title a {
        font-size: 1em
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title.active {
        background: #283139;
        border-top: 5px solid #0091c7;
        padding: 15px 20px 20px
    }
    footer.main .wrap-bottom .half-bottom .tab-navbar .tab-title.active:after {
        border-width: 15px;
        margin-left: -15px
    }
    footer.main .wrap-bottom .main-bottom {
        padding: 20px 0;
        *zoom: 1
    }
    footer.main .wrap-bottom .main-bottom:after,
    footer.main .wrap-bottom .main-bottom:before {
        content: "";
        display: table
    }
    footer.main .wrap-bottom .main-bottom:after {
        clear: both
    }
    footer.main .wrap-bottom .main-bottom .logo {
        display: inline-block;
        margin-right: 20px;
        width: 135px;
        float: left
    }
    footer.main .wrap-bottom .main-bottom ul {
        width: 650px;
        margin: 0;
        padding: 0
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] {
        font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        margin-left: 10px
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] a,
    footer.main .wrap-bottom .main-bottom ul [class*="icon"] span {
        font-size: .875em;
        margin-right: 0
    }
    footer.main .wrap-bottom .main-bottom ul [class*="icon"]:before {
        font-size: 1.125em;
        margin-right: 10px
    }
    footer.main .wrap-bottom .main-bottom .icon-group {
        float: right;
        font-size: 1.25em;
        margin: 0 5px
    }
}

@media only screen and (min-width:1240px) {
    footer.main .wrap-bottom .main-bottom ul {
        width: 775px
    }
}

#outdated {
    text-align: center;
    position: relative
}

#outdated h6 {
    font-size: 1.875em
}

#outdated h6 span {
    margin-right: 10px;
    display: inline-block
}

#outdated a {
    color: #fff
}

#outdated .last {
    position: absolute;
    right: 50px;
    top: 20px
}

#outdated .last a {
    font-size: 2.25em
}

.tab-header-inline {
    display: table;
    width: 100%
}

.tab-header-inline .tab-title {
    color: #5d666d;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
    font: 300 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 5px;
    border-bottom: 2px solid #f1f2f2;
    border-right: 2px solid #f1f2f2
}

.tab-header-inline .tab-title i[class*="icon"] {
    margin: 10px;
    font-size: 1.5em
}

.tab-header-inline .tab-title a {
    color: #5d666d;
    display: none
}

.tab-header-inline .tab-title a:visited {
    color: #5d666d
}

.tab-header-inline .tab-title.active,
.tab-header-inline .tab-title.active a {
    color: #0091c7
}

.tab-header-inline .tab-title:last-child {
    border-right: none
}

.tab-header-inline .tab-title:hover {
    color: #0091c7;
    cursor: pointer
}

.tab-header-inline .tab-title:hover a {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    .tab-header-inline .tab-title a,
    .tab-header-inline .tab-title i[class*="icon"] {
        display: inline-block;
        vertical-align: middle
    }
}

.tab-header-inline2 {
    display: table;
    width: 60%
}

.tab-header-inline2 .tab-title {
    display: table-cell;
    text-align: center;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 10px;
    border-bottom: 1px solid;
    transition: border 1s ease
}

.tab-header-inline2 .tab-title i[class*="icon"] {
    margin: 10px
}

.tab-header-inline2 .tab-title a,
.tab-header-inline2 .tab-title a:visited {
    color: #000
}

.tab-header-inline2 .tab-title.active {
    border-top: 1px solid;
    border-right: 1px solid;
    border-left: 1px solid;
    border-bottom: none
}

.tab-header-inline2 .tab-title:last-child {
    border-right: none
}

.tab-header-inline2 .tab-title:first-child {
    border-left: none
}

.tab-header-inline2 .tab-title:hover {
    cursor: pointer
}

@media only screen and (min-width:768px) {
    .tab-header-inline2 .tab-title a,
    .tab-header-inline2 .tab-title i[class*="icon"] {
        display: inline-block;
        vertical-align: middle
    }
}

.tab-content .tab {
    display: none
}

.tab-content .tab.active {
    display: block
}

.tab-holder {
    padding: 0
}

.tab-holder .col-3 {
    margin: 0 auto 30px;
    max-width: 375px;
    text-align: left
}

.tab-holder .col-3 .tab-sub-title {
    color: #fff;
    display: block;
    font: 300 1.625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    text-align: left;
    margin: 5px 0 20px
}

.tab-holder .col-3 p {
    color: #fff;
    font: 400 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.5em;
    margin: 0 0 13px;
    text-align: left
}

.tab-holder .col-3 .btn {
    background: #0091c7;
    color: #fff;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 5px 15px;
    position: relative;
    bottom: 0
}

.tab-holder .col-3 .btn:hover {
    background: #006c94
}

.tab-holder .half {
    float: left;
    padding: 0 5px;
    width: 100%;
    margin-right: 5px;
    margin-bottom: 15px
}

.tab-holder .half img {
    max-width: 100%
}

.tab-holder .form-holder {
    background: #0091c7;
    padding: 25px
}

.tab-holder .form-holder p {
    clear: both;
    margin: 0 0 10px
}

.tab-holder .form-holder input[type="text"] {
    width: 70%
}

.tab-holder .form-holder button,
.tab-holder .form-holder input[type="text"] {
    float: left;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    height: 35px
}

.tab-holder .form-holder button {
    background: #2e3942;
    color: #fff;
    cursor: pointer;
    padding: 2px 5px 0;
    text-transform: uppercase;
    width: 30%;
    transition: background .3s ease-in
}

.tab-holder .form-holder button:hover {
    background: #1d355e
}

.tab-holder .form-holder button span {
    display: none;
    margin-left: 5px
}

@media only screen and (min-width:400px) {
    .tab-holder .form-holder button span {
        display: inline-block
    }
    .tab-holder .half {
        width: 43%
    }
}

@media only screen and (min-width:768px) {
    .tab-holder {
        margin: 0 auto;
        max-width: 760px
    }
    .tab-holder .half {
        margin-bottom: 40px
    }
    .tab-holder .col-3:first-child,
    .tab-holder .col-3:nth-child(2),
    .tab-holder .col-3:nth-child(3) {
        clear: none;
        float: left;
        padding: 0 10px 0 0;
        width: calc(100%/ 3 - 2px)
    }
    .tab-holder .col-3 .btn {
        position: absolute;
        bottom: 12px
    }
}

@media only screen and (min-width:1020px) {
    .tab-holder {
        max-width: 1200px
    }
    .tab-holder .col-3:first-child,
    .tab-holder .col-3:nth-child(2),
    .tab-holder .col-3:nth-child(3) {
        clear: none;
        float: left;
        padding: 0 10px 0 0;
        width: calc(100%/ 3 - 2px)
    }
    .tab-holder .col-3 .btn {
        position: absolute;
        bottom: 75px
    }
}

@media only screen and (min-width:1240px) {
    .tab-holder .col-3 p {
        margin: 0 30px 13px
    }
}

.errors {
    margin: 5px
}

.errors .icon-error {
    font-size: 1.3125em
}

.errors .error-message,
.errors .icon-error {
    display: inline-block;
    color: #f4254e;
    vertical-align: bottom
}

.errors .error-message {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    text-align: left;
    margin-left: 5px;
    width: 85%
}

.info-box {
    background: transparent;
    position: relative;
    width: 100%;
    margin: 40px auto
}

.info-box .content {
    background: #f1f2f2;
    padding: 0 20px;
    width: 100%;
    z-index: 10
}

.info-box .top {
    text-align: left;
    position: relative;
    height: 30px
}

.info-box .top .addon {
    float: right
}

.info-box .top .addon .field {
    margin: 0
}

.info-box .top .title {
    padding: 0 0 0 95px;
    color: #0091c7;
    font: 300 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    width: auto;
    margin: 25px 0
}

.info-box .top .title img {
    margin-right: 5px
}

.info-box .top .title.title-sm {
    font-size: 1em;
    position: relative;
    top: 5px
}

.info-box textarea {
    resize: none
}

.info-box .header {
    padding: 20px 0;
    position: relative
}

.info-box .header .round-image {
    border-radius: 50%;
    height: 55px;
    left: 8px;
    padding: 5px;
    background: #fff;
    position: absolute;
    text-align: center;
    top: -35px;
    width: 55px
}

.info-box .header .round-image div {
    background: #0091c7;
    border-radius: 50%;
    height: 100%;
    padding-top: 18px;
    width: 100%
}

.info-box .header .round-image div [class*="icon"] {
    font-size: 1.5em;
    margin-top: 20px;
    text-align: center;
    color: #fff
}

.info-box .header .round-image div [class*="icon"]:before {
    top: 15px;
    left: 15px;
    position: absolute
}

.info-box .header .buttons {
    float: right
}

.info-box .header .buttons button {
    background: transparent;
    border: none;
    color: gray;
    padding: 0
}

.info-box .header .half-img {
    height: 37px;
    left: 6px;
    overflow: hidden;
    position: absolute;
    top: -37px;
    width: 67px
}

.info-box .header .half-img .image {
    border: 3px solid #0091c7;
    border-radius: 50%;
    height: 59px;
    padding: 5px;
    width: 59px;
    z-index: 0
}

.info-box .header .flag {
    width: 16px
}

.info-box .date {
    color: #0091c7;
    font: 400 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    position: absolute;
    bottom: 35px;
    right: 10px
}

.info-box .footer {
    padding: 0 0 20px
}

.info-box .footer span {
    display: block;
    float: right
}

.info-box .body {
    padding: 15px
}

.info-box .body h3 {
    font-size: 1.375em;
    color: #0091c7;
    margin: 10px auto
}

.info-box .body p {
    color: #5d666d;
    font-size: .8125em;
    margin: 0;
    padding: 10px 0
}

.info-box .body p.info-msg {
    text-align: center;
    color: #e32726
}

.info-box .field {
    margin-bottom: 20px
}

.info-box .field input,
.info-box .field select,
.info-box .field textarea {
    border-bottom: 1px solid #aaa;
    background: #f1f2f2;
    color: #5d666d;
    font-size: .8125em;
    width: 100%
}

.info-box .field input:focus:enabled,
.info-box .field textarea:focus:enabled {
    color: #0091c7;
    border-color: #0091c7
}

.info-box .field select:focus:enabled {
    border-color: #0091c7
}

.info-box.default .content {
    border-top: 3px solid #0091c7
}

.info-box.default .header .round-image {
    background: #fff
}

.info-box.grey .header .half-img .image {
    border: 3px solid #aaa
}

.info-box.grey .header .round-image div {
    background: #aaa
}

.info-box.grey .top .title {
    color: #aaa
}

.info-box.blue .header .title {
    color: #0091c7
}

.info-box.blue .header .half-img .image {
    border: 3px solid #0091c7
}

.info-box.blue .header .round-image div {
    background: #0091c7
}

.info-box.post .top {
    height: 40px
}

.info-box.post .top .title {
    width: 100%;
    display: block;
    color: #465159;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    position: relative;
    top: 15px
}

.info-box.post .top .title img {
    margin-right: 5px
}

.info-box.post .top .addon {
    color: #465159;
    font-size: .6875em;
    margin-right: 10px;
    position: relative;
    z-index: 2
}

.info-box.post .content {
    background: #f1f2f2
}

.info-box.post .content .header {
    height: 0
}

.info-box.post .content .header .half-img .image {
    border: none
}

.info-box.post .content .header .round-image {
    padding: 7px;
    width: 65px;
    height: 65px
}

.info-box.post .content .header .round-image img {
    border: 3px solid #f1f2f2;
    border-radius: 50%;
    height: 100%;
    width: 100%
}

.info-box.post .content .body {
    padding: 0
}

.info-box.post .content .body .cols-container {
    text-align: center
}

.info-box.post .content .body .cols-container a {
    color: #0091c7
}

.info-box.post .content .body .cols-container a:hover {
    text-decoration: underline
}

.info-box.post .content .body .cols-container .col-name {
    font-weight: 500;
    color: #5d666d;
    padding: 0
}

.info-box.post:nth-child(2n) .top .title i {
    color: #c8d4de
}

.info-box.post:nth-child(2n) .content {
    background: #e8edf1
}

.info-box.post:nth-child(2n) .content .header .round-image img {
    border-color: #e8edf1
}

.info-box.post.small .top {
    height: 40px
}

.info-box.post.small .top .title {
    font-size: .875em
}

.info-box.post.small .top .title i {
    font-size: 1.375em;
    top: 6px
}

.info-box.post.small .top .addon {
    font-size: .6875em;
    right: 10px
}

@media only screen and (min-width:768px) {
    .info-box.post.small .body .cols-container {
        text-align: left
    }
    .info-box.post.small .body .cols-container .col-text {
        width: calc(100% - 150px)
    }
    .info-box.post.small .top .addon {
        font-size: .875em
    }
}

@media only screen and (min-width:1020px) {
    .info-box.post.small .top .addon {
        top: 5px
    }
}

@media only screen and (min-width:768px) {
    .info-box .field input,
    .info-box .field select,
    .info-box .field textarea {
        font-size: 1em
    }
    .info-box .top {
        height: 35px
    }
    .info-box .top .title {
        font-size: 1.625em
    }
    .info-box .top .title.title-sm {
        top: 10px
    }
    .info-box .top .title-small {
        font-size: 1em
    }
    .info-box .header {
        height: 50px;
        padding: 0
    }
    .info-box .header .title-small {
        font-size: 1em
    }
    .info-box .header .buttons button {
        margin-top: 20px
    }
    .info-box.post .top {
        height: 50px
    }
    .info-box.post .top .title {
        font-size: 1.0625em;
        padding-left: 150px;
        top: 20px
    }
    .info-box.post .top .addon {
        font-size: .8125em;
        position: relative;
        top: -25px
    }
    .info-box.post .content .header {
        width: 150px;
        height: 100%
    }
    .info-box.post .content .header .round-image {
        height: 110px;
        width: 110px
    }
    .info-box.post .content .body .cols-container {
        text-align: left
    }
    .info-box.post .content .body .cols-container .col-name {
        text-align: center;
        padding: 85px 0 20px;
        width: 130px
    }
}

@media only screen and (min-width:1020px) {
    .info-box {
        text-align: center
    }
    .info-box .content {
        padding: 0 15px 15px;
        text-align: left
    }
    .info-box .top {
        height: 40px
    }
    .info-box .top .title-small {
        font-size: 1.125em
    }
    .info-box .top .title {
        padding: 0 0 0 155px
    }
    .info-box .header {
        padding: 10px 0;
        height: 60px
    }
    .info-box .header .round-image {
        height: 110px;
        left: 15px;
        padding: 5px;
        top: -55px;
        width: 110px
    }
    .info-box .header .round-image div [class*="icon"] {
        font-size: 3.125em
    }
    .info-box .header .round-image div [class*="icon"]:before {
        top: 30px;
        left: 30px;
        position: absolute
    }
    .info-box .header .half-img {
        height: 58px;
        left: 13px;
        top: -58px;
        width: 115px
    }
    .info-box .header .half-img .image {
        height: 115px;
        padding: 5px;
        width: 115px
    }
    .info-box.post .top .title {
        padding-left: 170px
    }
    .info-box.post .top .addon {
        font-size: .875em
    }
    .info-box.post .content .body .cols-container .col-name {
        padding-top: 40px;
        padding-right: 10px;
        width: 150px
    }
}

@media only screen and (min-width:1240px) {
    .info-box .top .title {
        font-size: 1.75em
    }
    .info-box .top .title.title-sm {
        top: 15px
    }
    .info-box .top .title-small {
        font-size: 1.125em
    }
}

.info-box.left {
    margin-top: 0
}

@media only screen and (min-width:768px) {
    .info-box.left .top {
        position: relative;
        left: 170px;
        top: 235px
    }
    .info-box.left .content {
        left: 0;
        width: calc(100% - 125px);
        border-top: none;
        height: 250px;
        margin-left: 125px
    }
    .info-box.left .content .body {
        position: relative;
        left: 125px
    }
    .info-box.left .header .round-image {
        height: 220px;
        width: 220px;
        left: -130px;
        top: 15px
    }
    .info-box.left .header .half-img {
        left: -150px;
        top: 0;
        height: 250px;
        width: 125px
    }
    .info-box.left .header .half-img .image {
        height: 250px;
        width: 250px;
        border-width: 8px
    }
    .info-box.left .body {
        width: calc(100% - 130px);
        top: -50px;
        max-height: 120px
    }
    .info-box.left .body p {
        max-height: 120px;
        font-size: 1em
    }
    .info-box.left .body h3 {
        font-size: 1.875em
    }
    .info-box.left .footer {
        padding: 5px
    }
    .info-box.left .section-shadow {
        margin-left: 125px
    }
}

@media only screen and (min-width:1020px) {
    .info-box.left .top {
        left: 110px
    }
    .info-box.left .header .half-img {
        left: -145px
    }
    .info-box.left .footer {
        padding: 5px 15px 0 0
    }
}

.info-box-2 .angle-info-box-2 {
    position: relative;
    z-index: 1
}

.info-box-2 .angle-info-box-2:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 100%;
    background: #2e3942;
    bottom: -16px;
    height: 50px
}

.info-box-2 .header {
    position: relative;
    height: 45px;
    background: #2e3942;
    z-index: 2
}

.info-box-2 .header h4 {
    line-height: 45px;
    color: #d4d4d4;
    margin-left: 25px;
    font-size: 1.125em
}

.info-box-2 .content {
    background: #fff
}

.info-box-2 .content .field {
    padding: 10px
}

.info-box-2 .content .field textarea {
    border: 1px solid #d4d4d4;
    resize: none;
    padding: 10px;
    font-size: .875em
}

.info-box-2 .footer {
    background: #fff;
    height: 65px;
    line-height: 50px;
    padding: 10px
}

.info-box-2 .footer .btn {
    max-width: 120px;
    height: 40px;
    line-height: 40px;
    padding: 0
}

@media only screen and (min-width:1020px) {
    .info-box-2 .angle-container {
        top: 25px
    }
    .info-box-2 .header h4 {
        font-size: 1.375em
    }
}

@media only screen and (min-width:1500px) {
    .info-box-2 .angle-container {
        top: 30px
    }
}

#publishers .info-box {
    margin: -99px auto 20px;
    z-index: 99
}

#publishers .info-box .top {
    height: 30px
}

#publishers .info-box .top .title {
    padding-left: 135px;
    top: 5px
}

#publishers .info-box .content .header .round-image {
    height: 90px;
    width: 90px
}

#publishers .info-box .content .header .half-img {
    left: 5px;
    width: 95px
}

#publishers .info-box .content .header .half-img .image {
    border: 3px solid #0091c7;
    height: 95px;
    width: 96px
}

#publishers .info-box .content .body .cols-container {
    font-size: 1.0625em;
    text-align: left
}

#publishers .info-box .content .body .cols-container .col-name {
    padding-top: 20px
}

#publishers .info-box .content .body .cols-container p {
    margin: 10px 0
}

@media only screen and (min-width:768px) {
    #publishers .info-box .top .title {
        padding-left: 165px;
        top: 0
    }
    #publishers .info-box .content .body .cols-container .col-name {
        padding: 60px 25px 0 0
    }
}

@media only screen and (min-width:1020px) {
    #publishers .info-box .top .title {
        padding-left: 180px
    }
    #publishers .info-box .content .header .round-image {
        height: 110px;
        width: 110px
    }
    #publishers .info-box .content .header .half-img {
        left: 13px;
        width: 115px
    }
    #publishers .info-box .content .header .half-img .image {
        height: 115px;
        width: 115px
    }
    #publishers .info-box .content .body .cols-container .col-name {
        padding: 40px 15px 0 0
    }
}

.separator-strip {
    clear: both;
    overflow: hidden;
    width: 100%
}

.separator-strip,
.separator-strip .holder {
    position: relative
}

.separator-strip .holder:before {
    background: url(https://alison.com/html/site/img/xseparator-image.jpg.pagespeed.ic.KLejqhXj13.webp) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    content: "";
    display: block;
    height: 100%;
    left: -20px;
    position: absolute;
    right: -20px;
    top: -10px;
    width: calc(100% + 40px);
    z-index: -1
}

.separator-strip .holder:after {
    background: rgba(46, 57, 66, .7);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: -10px;
    width: 100%
}

.separator-strip .slick-slider {
    display: block;
    max-width: 1500px;
    margin: 0 auto;
    padding: 85px 20px;
    position: relative;
    text-align: center
}

.separator-strip .slick-slider .slick-list {
    position: relative;
    z-index: 2
}

.separator-strip .slick-slider .slick-list,
.separator-strip .slick-slider .slick-track,
.separator-strip .slick-slider .slide-item {
    outline: none
}

.separator-strip .slick-slider .slide-item {
    position: relative;
    z-index: 10
}

.separator-strip .slick-slider h3 {
    color: #fff;
    font: 400 1.625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.3846153846em;
    margin: 0 0 20px
}

@media only screen and (min-width:768px) {
    .separator-strip .slick-slider h3 {
        font-size: 1.875em;
        line-height: 1.3333333333em
    }
}

@media only screen and (min-width:1020px) {
    .separator-strip .slick-slider h3 {
        font-size: 2.5em;
        line-height: 1.25em
    }
}

.separator-strip .slick-slider .btn {
    background: #0091c7;
    border: 2px solid #0091c7;
    color: #fff;
    display: inline-block;
    font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 5px;
    padding: 8px 20px;
    text-align: center;
    width: 180px
}

.separator-strip .slick-slider .btn:hover {
    background: none;
    color: #fff
}

.separator-strip .slick-dots {
    bottom: 45px;
    left: 0;
    padding: 0;
    position: absolute;
    right: 0;
    z-index: 4
}

.separator-strip .slick-dots li {
    display: inline-block;
    margin: 0 10px
}

.separator-strip .slick-dots li.slick-active button {
    background: #fff
}

.separator-strip .slick-dots button {
    background: none;
    border: 2px solid #fff;
    border-radius: 50%;
    cursor: pointer;
    height: 15px;
    padding: 0;
    text-indent: -9999px;
    width: 15px
}

@media only screen and (min-width:768px) {
    .separator-strip .slick-slider {
        padding: 60px 0 120px
    }
    .separator-strip .slick-slider .btn {
        font-size: 1.25em;
        padding: 10px 20px;
        width: 200px
    }
    .separator-strip .slick-dots {
        bottom: 55px
    }
}

@media only screen and (min-width:1240px) {
    .separator-strip .slick-slider {
        padding: 150px 0
    }
    .separator-strip .slick-slider h3 {
        margin: 0 20px 0 0
    }
    .separator-strip .slick-slider .btn,
    .separator-strip .slick-slider h3 {
        display: inline-block;
        vertical-align: middle
    }
    .separator-strip .slick-dots {
        bottom: 80px
    }
}

@media only screen and (min-width:1500px) {
    .separator-strip .slick-slider h3 {
        margin: 0 40px 0 0
    }
}

.alternative-search {
    background: #444a56;
    display: none;
    padding: 20px;
    position: relative;
    z-index: 15
}

.alternative-search form {
    margin: 0 auto;
    max-width: 442px;
    position: relative;
    transition: all .3s ease-in
}

.alternative-search form .dropdown {
    text-align: center
}

.alternative-search form .close {
    color: #fff;
    font-size: 1.5625em;
    position: absolute;
    right: -10px;
    top: -50px
}

.alternative-search form .close:hover {
    color: #2d3942
}

.alternative-search form input[type="text"] {
    float: left;
    height: 50px;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    width: 88%
}

.alternative-search form button {
    background: #2e3942;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-left: 1px solid #2e3942;
    border-right: none;
    border-top: none;
    border-bottom: none;
    cursor: pointer;
    float: left;
    height: 50px;
    padding: 10px 0;
    width: 12%;
    transition: all .3s ease-in
}

.alternative-search form button span {
    color: #fff
}

.alternative-search form button:hover {
    background: #0094c9
}

@media only screen and (min-width:768px) {
    .alternative-search .close {
        font-size: 1.875em;
        right: -50px;
        top: 12px
    }
}

@media only screen and (min-width:1020px) {
    .alternative-search form button span {
        font-size: 1.5em
    }
}

.course {
    margin: 0 auto 35px;
    list-style: none;
    text-align: left;
    width: 260px
}

.course.active .section-shadow {
    display: none
}

.course.active .description-text {
    color: #fff;
    font-size: .875em;
    line-height: 23px
}

.course .course-holder {
    background: #f2f5f6;
    cursor: pointer;
    transition: background .1s ease-in
}

.course .course-holder:hover {
    background: #d2d5d6
}

.course .course-holder .holder-top {
    height: 200px;
    position: relative;
    overflow: hidden
}

.course .course-holder .holder-top.diploma:before {
    background: #38ac69;
    content: "";
    height: 130px;
    left: -65px;
    position: absolute;
    top: -65px;
    width: 130px;
    z-index: 2;
    backface-visibility: hidden;
    transform: rotate(45deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

.course .course-holder .holder-top.diploma:after {
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\e90d";
    color: #fff;
    font-size: 25px;
    left: 15px;
    position: absolute;
    top: 15px;
    z-index: 3
}

.course .course-holder .holder-top img {
    bottom: -500px;
    left: -500px;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    right: -500px;
    top: -500px
}

.course .course-holder .holder-top .link-group {
    height: 100%;
    position: absolute;
    right: 0;
    top: 0
}

.course .course-holder .holder-top .link-group .social-link-btn,
.course .course-holder .holder-top .link-group a {
    background: #0094c9;
    border: 2px solid #fff;
    border-radius: 50%;
    display: inline-block;
    height: 34px;
    margin: 15px 5px 0 0;
    text-align: center;
    width: 34px;
    cursor: pointer
}

.course .course-holder .holder-top .link-group .social-link-btn span,
.course .course-holder .holder-top .link-group a span {
    color: #fff;
    font-size: 1em;
    line-height: 1.875em
}

.course .course-holder .holder-top .link-group .social-link-btn:hover,
.course .course-holder .holder-top .link-group a:hover {
    border: 2px solid rgba(0, 148, 201, .8)
}

.course .course-holder .holder-top .link-group .social-link-btn {
    margin-right: 5px
}

.course .course-holder .holder-top .link-group .share-trigger:hover .icon-group {
    opacity: 1;
    visibility: visible
}

.course .course-holder .holder-top .link-group .icon-group {
    background: rgba(45, 57, 66, .85);
    padding: 10px 0;
    position: absolute;
    right: 40px;
    opacity: 0;
    visibility: hidden;
    text-align: center;
    top: 10px;
    width: 220px;
    transition: all .3s ease-in
}

.course .course-holder .holder-top .link-group .icon-group a {
    background: none;
    border: 0;
    display: inline-block;
    height: auto;
    margin: 0
}

.course .course-holder .holder-top .link-group .icon-group a span {
    color: #fff;
    font-size: 25px
}

.course .course-holder .holder-top .link-group .icon-group a:hover span {
    color: #68aadd
}

.course .course-holder .holder-top .link-group.open .icon-group {
    display: inline-block
}

.course .course-holder .holder-bottom {
    padding: 15px 15px 40px;
    position: relative;
}

.course .course-holder .holder-bottom a,
.course .course-holder .holder-bottom h3,
.course .course-holder .holder-bottom p,
.course .course-holder .holder-bottom span {
    color: #5d666d;
    transition: color .1s ease-in
}

.course .course-holder .holder-bottom h3 {
    font-size: 13px;
    line-height: 1.5em;
    margin: 0 0 15px;
    font-weight: 300
}

.course .course-holder .holder-bottom p {
    font-size: .8125em
}

.course .course-holder .extra-info {
    bottom: 10px;
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%
}

.course .course-holder .extra-info div {
    float: left;
    width: 33.3%
}

.course .course-holder .extra-info span {
    display: inline-block;
    font-size: 14px;
    vertical-align: middle
}

.course .course-holder .extra-info span[class*="icon"] {
    font-size: 16px;
    margin-right: 5px
}

.course .ad {
    height: 410px;
    z-index: 0!important
}

.course .course-info {
    background: #12232d;
    background: linear-gradient(180deg, #12232d 0, #394551);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF12232D", endColorstr="#FF394551", GradientType=0);
    display: none;
    padding: 0;
    position: relative
}

.course .course-info .course-info-trigger {
    color: #fff;
    font-size: 25px;
    position: absolute;
    right: 10px;
    top: 10px
}

.course .course-info .course-title {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.course .course-info .course-tabs {
    left: 0;
    position: absolute;
    top: 0
}

.course .course-info .course-tabs a {
    background: #2e3942;
    color: #fff;
    display: inline-block;
    height: 45px;
    position: relative;
    text-align: center;
    width: 45px
}

.course .course-info .course-tabs a.active {
    background-color: #0094c9;
    color: #fff
}

.course .course-info .course-tabs a:hover span:before {
    animation: iconAnimation .5s
}

.course .course-info .course-tabs a span {
    font-size: 20px;
    line-height: 45px
}

.course .course-info .course-tabs .title {
    display: none;
    transition: background .25s ease-in
}

.course .course-info h3,
.course .course-info h5,
.course .course-info p {
    color: #fff
}

.course .course-info h3 {
    font-size: 1em
}

.course .course-info h3 span {
    font-size: 17px;
    margin-right: 5px
}

.course .course-info p {
    clear: both;
    text-align: left;
    font-size: .875em
}

.course .course-info .btn {
    font-size: .875em;
    margin: 10px auto;
    padding: 6px 15px
}

.course .course-info .btn-ghost {
    width: 110px
}

.course .course-info .btn-blue {
    width: 110px;
    border: 1px solid #0091c7
}

.course .course-info .btn-blue:hover {
    color: #fff;
    border-color: #006c94
}

.course .course-info .spotlight-group {
    background: #2e3942;
    margin: 20px -15px -15px;
    padding: 10px 5px;
    text-align: center
}

.course .course-info .spotlight {
    display: inline-block;
    margin: 10px auto;
    vertical-align: top;
    width: 50%
}

.course .course-info .spotlight [class*="icon"] {
    font-size: 25px;
    margin-bottom: 5px
}

.course .course-info .spotlight span {
    display: block;
    color: #fff;
    font-size: 14px
}

.course .course-features,
.course .course-learning-paths,
.course .course-reviews,
.course .course-tags {
    display: none;
    padding: 70px 15px 0
}

.course .course-features.active,
.course .course-learning-paths.active,
.course .course-reviews.active,
.course .course-tags.active {
    display: block
}

.course .course-learning-paths {
    text-align: center
}

.course .course-learning-paths .foot {
    position: relative;
    display: block;
    text-align: right
}

.course .course-learning-paths .head {
    text-align: left;
    width: 100%
}

.course .course-learning-paths .head h3,
.course .course-learning-paths .head h5 {
    display: block;
    font-size: 1.0625em;
    line-height: 2.3529411765em;
    margin: 0 0 10px;
    width: 100%
}

.course .course-learning-paths .head .btn {
    font-size: .875em;
    max-width: 230px;
    padding: 10px;
    text-align: center
}

.course .course-learning-paths .learningPath {
    background: #f2f5f6;
    display: inline-block;
    margin: 0 0 20px;
    vertical-align: top;
    width: 200px;
    transition: background .1s ease-in
}

.course .course-learning-paths .learningPath:hover {
    background: #d2d5d6
}

.course .course-learning-paths .learningPath .path-image {
    height: 120px;
    position: relative;
    overflow: hidden
}

.course .course-learning-paths .learningPath .path-image img {
    bottom: -1000px;
    left: -1000px;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    right: -1000px;
    top: -1000px
}

.course .course-learning-paths .learningPath .body {
    padding: 8px;
    position: relative
}

.course .course-learning-paths .learningPath .body:after {
    bottom: 100%;
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-color: rgba(242, 245, 246, 0);
    border-bottom-color: #f2f5f6;
    border-width: 15px;
    margin-left: -15px
}

.course .course-learning-paths .learningPath .body h4 {
    color: #5d666d;
    font-size: .8125em;
    margin: 0 0 10px
}

.course .course-learning-paths .learningPath .body p {
    color: #5d666d;
    font-size: .75em;
    max-height: 75px;
    overflow: hidden;
    margin: 0;
    text-align: left
}

.course .course-tags ul {
    text-align: center
}

.course .course-tags li {
    background: #0091c7;
    border-radius: 15px;
    display: inline-block;
    height: 35px;
    margin: 10px 5px;
    padding: 0 15px;
    transition: background .2s ease-in
}

.course .course-tags li:hover {
    background: #00597b
}

.course .course-tags li a {
    color: #fff;
    font-size: .875em;
    line-height: 2.5em
}

.course .course-tags li:nth-child(2n) {
    background: #2ec6ff
}

.course .course-tags li:nth-child(2n):hover {
    background: #00597b
}

.course .course-reviews {
    padding-bottom: 5px
}

.course .course-reviews .like-comments-widget a,
.course .course-reviews .like-comments-widget span {
    color: #fff
}

.course .course-reviews .info-box {
    background: none;
    margin: 0 auto 30px;
    text-align: left!important
}

.course .course-reviews .info-box .header .round-image {
    left: -10px
}

.course .course-reviews .info-box .content {
    padding: 0 10px
}

.course .course-reviews .info-box.post .top .addon {
    color: #fff;
    top: 15px
}

.course .course-reviews .info-box p {
    color: #2d3942
}

@media only screen and (min-width:768px) {
    .course {
        display: inline-block;
        margin: 10px 45px;
        vertical-align: top
    }
    .course.active {
        display: block;
        left: 0;
        margin: 10px 10px 20px;
        position: absolute;
        right: 0;
        top: 0;
        width: 100%;
        z-index: 5
    }
    .course.active .course-holder {
        display: block
    }
    .course.active .course-info {
        opacity: 1;
        z-index: 10
    }
    .course.active .course-info .course-title {
        font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
    }
    .course.active .section-shadow {
        display: none
    }
    .course .course-features,
    .course .course-learning-paths,
    .course .course-reviews,
    .course .course-tags {
        padding: 70px 15px 95px
    }
    .course .course-features .description-text.scrollbar {
        height: 100px;
        margin-bottom: 5px;
        overflow-y: auto
    }
    .course .course-features .description-text.scrollbar p {
        margin: 0;
        padding: 10px 15px 0 0
    }
    .course .course-learning-paths {
        padding: 70px 15px 20px
    }
    .course .course-learning-paths .learning-path-holder {
        max-height: 280px;
        overflow-y: auto;
        width: 100%
    }
    .course .course-reviews {
        padding: 70px 15px 5px
    }
    .course .course-reviews .reviews-group {
        max-height: 305px;
        overflow-y: auto
    }
    .course .course-reviews .info-box {
        margin: 0 auto 15px
    }
    .course .course-reviews .info-box:nth-child(2) {
        margin: 0 auto
    }
    .course .course-reviews .info-box .header .round-image {
        height: 100px;
        left: 10px;
        width: 100px
    }
    .course .course-reviews .info-box.post .content .body .cols-container .col-name {
        padding: 75px 0 10px
    }
    .course .course-holder {
        width: 260px
    }
    .course .course-info {
        display: block;
        left: 3000px;
        position: absolute;
        opacity: 0;
        top: 0;
        width: calc(100% - 280px)
    }
    .course .course-info .course-tabs {
        width: calc(100% - 80px)
    }
    .course .course-info .course-tabs a {
        width: calc(25% - 8px)
    }
    .course .course-info h3,
    .course .course-info h5 {
        font-size: 14px;
        margin: 0 0 15px
    }
    .course .course-info p {
        font-size: 13px
    }
    .course .course-info .btn {
        float: right;
        margin: 10px 10px 5px
    }
    .course .course-info .spotlight-group {
        bottom: 0;
        left: 0;
        margin: 0;
        position: absolute;
        width: 100%
    }
    .course .course-info .spotlight {
        margin: 0;
        width: 19%
    }
    .course .course-info .spotlight span {
        font-size: 12px
    }
    .course .course-info .spotlight [class*="icon"] {
        font-size: 20px;
        margin-bottom: 5px
    }
    .course .course-learning-paths .head .btn,
    .course .course-learning-paths .head h5 {
        display: inline-block;
        margin: 0;
        vertical-align: middle;
        width: auto
    }
    .course .course-learning-paths .learningPath {
        margin: 0 10px 15px
    }
    .course .course-learning-paths .learningPath .btn {
        float: none;
        display: inline-block
    }
}

@media only screen and (min-width:1020px) {
    .course {
        margin: 10px 30px
    }
    .course.active .section-shadow {
        display: none
    }
    .course .course-info h5 {
        font-size: 17px
    }
    .course .course-info p {
        font-size: 14px
    }
    .course .course-info .course-tabs {
        width: 70px
    }
    .course .course-info .course-tabs a {
        display: block;
        height: 50px;
        width: 100%
    }
    .course .course-info .course-tabs a span {
        line-height: 50px
    }
    .course .course-info .course-tabs a:hover .title {
        color: #fff;
        display: block;
        background-color: #0094c9
    }
    .course .course-info .course-tabs .title {
        background-color: #2d3942;
        color: #fff;
        font-size: .875em;
        height: 100%;
        left: 100%;
        padding: 0 5px;
        position: absolute;
        text-align: center;
        top: 0;
        width: 130px;
        z-index: 10
    }
    .course .course-learning-paths,
    .course .course-reviews,
    .course .course-tags {
        padding: 30px 20px 20px 100px
    }
    .course .course-features {
        padding: 20px 20px 20px 100px
    }
    .course .course-reviews .info-box {
        margin: 0 auto 25px
    }
    .course .course-reviews .info-box.post .content .body .cols-container .col-name {
        padding: 50px 0 10px
    }
    .course .course-reviews .info-box .header .round-image {
        top: -40px
    }
}

@media only screen and (min-width:1140px) {
    .course {
        margin: 10px 5px
    }
    .course .course-info {
        width: 860px
    }
    .course .course-features,
    .course .course-learning-paths,
    .course .course-reviews,
    .course .course-tags {
        padding: 30px 60px 20px 100px
    }
    .course .course-features {
        padding: 20px 60px 20px 100px
    }
    .courses-list .courses-list-inner .course-info {
        width: 983px
    }
}

#tags-listing .banner .banner-align {
    height: 200px
}

#tags-listing .banner h2 {
    margin: 0
}

#tags-listing .breadcrumb {
    text-align: left
}

#resource-page .banner .banner-align {
    height: 250px
}

#resource-page .resource-listing .breadcrumb-wrapper {
    margin: -60px 0 40px;
    padding: 0;
    position: relative;
    z-index: 11
}

#resource-page .resource-listing .breadcrumb-wrapper .breadcrumb.alt {
    padding: 0
}

#resource-page .resource-listing .file-list li {
    counter-increment: a
}

#resource-page .resource-listing .info-box p {
    font-size: 1em
}

#resource-page .resource-listing .info-box.resource-description {
    margin-top: 20px;
    margin-bottom: 80px
}

#resource-page .resource-listing .file-link,
#resource-page .resource-listing a[href$=".pdf"] {
    background-color: #fff;
    color: #000;
    display: block;
    font-size: 1em;
    font-weight: 400;
    margin-bottom: 30px;
    position: relative;
    padding: 80px 20px 20px
}

#resource-page .resource-listing .file-link+br,
#resource-page .resource-listing .file-link+br+br,
#resource-page .resource-listing a[href$=".pdf"]+br,
#resource-page .resource-listing a[href$=".pdf"]+br+br {
    display: none
}

#resource-page .resource-listing .file-link:after,
#resource-page .resource-listing a[href$=".pdf"]:after {
    font-family: icomoon;
    content: "\e9c2";
    color: #0094c9;
    font-weight: 400;
    position: absolute;
    right: 30px;
    top: 20px;
    font-size: 2.1428571429em
}

#resource-page .resource-listing .file-link:before,
#resource-page .resource-listing a[href$=".pdf"]:before {
    background-color: #aaa;
    color: #fff;
    content: counter(a) ".";
    font-size: 1.125em;
    font-weight: 700;
    left: 0;
    padding: 20px 0;
    position: absolute;
    top: 0;
    text-align: center;
    width: 55px;
    transition: background .25s ease-in
}

#resource-page .resource-listing .file-link:hover,
#resource-page .resource-listing a[href$=".pdf"]:hover {
    box-shadow: 4px 7px 8px 0 rgba(0, 0, 0, .25)
}

#resource-page .resource-listing .file-link:hover:before,
#resource-page .resource-listing a[href$=".pdf"]:hover:before {
    background-color: #2d3942
}

@media only screen and (min-width:768px) {
    #resource-page .resource-listing .file-link,
    #resource-page .resource-listing a[href$=".pdf"] {
        padding: 20px 40px 20px 95px
    }
}

#resource-page .resource-listing a[href$=".pdf"] {
    counter-increment: a
}

#resource-page .resource-listing a[title="Module Listing page"] {
    color: #0094c9
}

@keyframes iconAnimation {
    50% {
        font-size: 25px
    }
    to {
        font-size: 20px
    }
}

.categories-filter {
    background: #eaeaea;
    display: none;
    left: 0;
    padding: 10px 0;
    position: absolute;
    top: 100%;
    text-align: center;
    width: 100%;
    z-index: 15
}

.categories-filter h5 {
    margin: 0 0 5px
}

.categories-filter li {
    display: inline-block;
    margin: 5px 0;
    padding: 0 5px;
    width: calc(33% - 4px)
}

.categories-filter li:hover .title {
    background: #0091c7
}

.categories-filter .title {
    background: #2e3942;
    color: #fff;
    display: block;
    font-size: .75em;
    padding: 5px;
    transition: background .2s ease-in
}

.categories-filter [class*="icon"] {
    background: #fff;
    display: block;
    padding: 10px 0
}

.categories-filter [class*="icon"]:before {
    font-size: 1.25em
}

.categories-filter input[type="checkbox"] {
    display: none
}

.categories-filter input[type="checkbox"]:checked+label .title {
    background-color: #0094c9
}

.categories-filter .btn {
    background: #fff;
    border: 2px solid #fff;
    color: #2e3942;
    display: inline-block;
    margin: 20px 0 0;
    padding: 6px 0;
    width: 105px
}

.categories-filter .btn.active {
    background: #2d3942;
    border: 2px solid #2d3942;
    color: #fff
}

.categories-filter .btn:hover {
    background: none;
    border: 2px solid #fff
}

.categories-filter .btn:hover.active {
    background: none;
    border: 2px solid #2d3942;
    color: #2e3942
}

@media only screen and (min-width:768px) {
    .categories-filter li {
        width: calc(25% - 4px)
    }
    .categories-filter .title {
        font-size: .875em
    }
}

@media only screen and (min-width:1020px) {
    .categories-filter li {
        display: block;
        float: left;
        width: 20%
    }
}

.categories-search {
    margin: 0 auto;
    max-width: 350px;
    position: relative
}

.categories-search [class*="icon"] {
    font-size: 24px
}

.categories-search .categories-trigger .filter-label {
    display: none
}

.categories-search .categories-trigger .icon-new-filter {
    font-size: 17px;
    padding: 3px 0 0;
    display: inline-block
}

.categories-search .filter-trigger {
    border-top-right-radius: 3px
}

.categories-search .categories-trigger,
.categories-search .filter-trigger {
    background: transparent;
    position: absolute;
    display: block;
    float: left;
    height: 45px;
    text-align: center;
    top: 0;
    left: 0;
    padding: 12px 0 0;
    width: 48px
}

.categories-search .categories-trigger span,
.categories-search .filter-trigger span {
    color: #2e3942
}

.categories-search .categories-trigger {
    background: #f3f6f7
}

.categories-search .categories-trigger span {
    color: #5d666d
}

.categories-search input[type="text"] {
    height: 45px;
    padding-left: 60px
}

.categories-search button[type="submit"] {
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    height: 45px;
    background: transparent;
    position: absolute;
    right: 0;
    width: 40px;
    padding: 0;
    top: 0;
    transition: background .2s ease-in
}

.categories-search button[type="submit"] .icon-search {
    color: #2e3942;
    font-size: 22px
}

@media only screen and (min-width:768px) {
    .categories-search {
        max-width: 520px
    }
    .categories-search .categories-trigger,
    .categories-search .filter-trigger,
    .categories-search button[type="submit"] {
        float: left;
        text-align: center;
        width: 48px;
        background: #2e3942;
        position: static
    }
    .categories-search .categories-trigger,
    .categories-search .filter-trigger {
        padding: 13px 0 0
    }
    .categories-search .categories-trigger:hover,
    .categories-search .filter-trigger:hover {
        background-color: #0094c9;
        text-decoration: none
    }
    .categories-search .categories-trigger:hover .filter-label,
    .categories-search .categories-trigger:hover span,
    .categories-search .filter-trigger:hover .filter-label,
    .categories-search .filter-trigger:hover span {
        color: #fff
    }
    .categories-search .categories-trigger.active,
    .categories-search .filter-trigger.active {
        background-color: #0094c9
    }
    .categories-search .categories-trigger.active .filter-label,
    .categories-search .categories-trigger.active .icon-new-filter,
    .categories-search .filter-trigger.active .filter-label,
    .categories-search .filter-trigger.active .icon-new-filter {
        color: #fff
    }
    .categories-search .categories-trigger .icon-search-bar-categories,
    .categories-search .filter-trigger .icon-search-bar-categories {
        font-size: 30px
    }
    .categories-search .categories-trigger span,
    .categories-search .filter-trigger span {
        color: #fff
    }
    .categories-search .categories-trigger {
        width: 48px;
        background: #f3f6f7;
        padding: 16px 10px 0
    }
    .categories-search .categories-trigger span {
        color: #5d666d
    }
    .categories-search .categories-trigger span.icon-new-filter {
        font-size: 17px;
        display: inline;
        padding: 0
    }
    .categories-search .categories-trigger span.filter-label {
        color: #5d666d;
        display: block;
        float: left;
        text-align: center
    }
    .categories-search button[type="submit"] {
        border-bottom-left-radius: 0;
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        padding: 4px 0 0;
        background: #2e3942;
        position: static
    }
    .categories-search button[type="submit"]:hover {
        background-color: #0094c9
    }
    .categories-search button[type="submit"] .icon-search {
        color: #fff
    }
    .categories-search .filter-trigger {
        border-radius: 0
    }
    .categories-search input[type="text"] {
        float: left;
        width: 386px;
        padding: 10px 20px
    }
}

@media only screen and (min-width:1020px) {
    .categories-search .filter-trigger {
        padding: 17px 0 0
    }
    .categories-search .categories-trigger,
    .categories-search .filter-trigger,
    .categories-search button[type="submit"],
    .categories-search input[type="text"] {
        height: 54px
    }
    .categories-search .categories-trigger {
        padding: 20px 10px 0
    }
}

.categories {
    clear: both;
    position: relative
}

.categories .selection-count {
    float: left;
    text-align: center;
    width: 100%
}

.categories .selection-count .select {
    display: none
}

.categories .select-buttons {
    clear: both;
    padding: 10px 0;
    text-align: center
}

.categories .select-buttons label {
    background: #435360;
    border-radius: 3px;
    display: inline-block;
    float: none;
    font-size: 15px!important;
    padding: 8px 5px;
    width: 180px;
    cursor: pointer
}

.categories .select-buttons label.active {
    background: #435360
}

.categories .select-buttons label:hover {
    background-color: #0094c9;
    text-decoration: none
}

.categories .filter-checkboxes {
    float: left;
    width: 100%
}

@media only screen and (min-width:768px) {
    .categories .selection-count {
        line-height: 2.0625em;
        text-align: left;
        width: 60%
    }
    .categories .select-buttons {
        clear: none;
        float: right;
        padding: 0;
        width: 40%
    }
    .categories .filter-checkboxes {
        margin: 20px 0 0
    }
}

.categories-holder {
    background: rgba(46, 57, 66, .8);
    display: none;
    left: 0;
    margin: 5px 0 0;
    padding: 15px 15px 11px;
    position: absolute;
    top: 0;
    text-align: center;
    width: 100%;
    z-index: 5
}

.categories-holder label {
    background: #435360;
    display: block;
    float: left;
    margin: 2px 2px 4px;
    padding: 10px 0!important;
    font-size: 10px!important;
    width: calc(33.333% - 4px);
    transition: background .2s ease-in
}

.categories-holder label [class*="icon"] {
    display: block;
    font-size: 30px;
    margin: 0 0 3px
}

.categories-holder label:after,
.categories-holder label:before {
    display: none!important
}

.categories-holder label .check-label {
    padding: 5px 0 0;
    text-align: center;
    display: block
}

.categories-holder label span:first-child {
    float: none
}

@media only screen and (min-width:768px) {
    .categories-holder label {
        padding: 10px 20px!important
    }
    .categories-holder label span:first-child {
        float: left
    }
}

.categories-holder .view-all {
    width: 100%;
    text-align: center;
    float: left
}

.categories-holder .view-all a {
    background: #435360;
    border-radius: 3px;
    font-size: 15px!important;
    margin: 20px auto 0;
    cursor: pointer;
    text-decoration: none
}

.categories-holder .view-all a.selected {
    background-color: #47ad4c
}

.categories-holder .view-all a:hover {
    background-color: #0094c9
}

.categories-holder input[type="checkbox"] {
    left: -9999px;
    position: absolute;
    top: -9999px
}

.categories-holder input[type="checkbox"]:checked+label {
    background-color: #0094c9
}

@media only screen and (min-width:400px) {
    .categories-holder label {
        width: calc(25% - 4px)
    }
}

@media only screen and (min-width:768px) {
    .categories-holder label {
        font-size: 13px!important;
        padding-top: 10px;
        padding-bottom: 10px;
        width: calc(33.333% - 4px)
    }
}

#croppic {
    width: 400px;
    height: 208px;
    position: relative;
    margin: 50px 70px 20px;
    border: 3px solid #fff;
    box-sizing: content-box;
    border-radius: 2px;
    box-shadow: 8px 8px 0 rgba(0, 0, 0, .1)
}

.cropImgWrapper {
    cursor: grab
}

.cropImgWrapper:active {
    cursor: grabbing
}

.cropImgUpload {
    z-index: 2;
    position: absolute;
    display: block;
    top: -30px;
    right: -2px;
    font-family: sans-serif;
    width: 20px;
    height: 20px;
    text-align: center;
    line-height: 20px;
    color: #fff
}

.cropControls {
    z-index: 1;
    position: absolute;
    height: 35px;
    top: 0;
    right: 0;
    background-color: rgba(46, 57, 66, .95)
}

.cropControls div {
    display: inline-block;
    width: 150px
}

.cropControls div.left i {
    float: left
}

.cropControls div.right i {
    float: right
}

.cropControls i {
    display: block;
    float: left;
    margin: 0;
    cursor: pointer;
    width: 35px;
    height: 35px;
    text-align: center;
    line-height: 30px;
    color: #fff;
    font-size: 18px
}

.cropControls i:hover {
    background-color: rgba(0, 0, 0, .7)
}

.cropControls i.cropControlCrop:hover {
    color: #0091c7
}

.cropControls i.cropControlUpload {
    position: absolute;
    width: 190px;
    height: 190px;
    top: 52px;
    border-radius: 50%;
    right: 48px;
    background: transparent
}

.cropControls i.cropControlReset:hover {
    color: #be3047
}

.cropControls i.cropControlRemoveCroppedImage {
    background-position: -180px 0
}

#croppicModal {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    display: block;
    background: rgba(0, 0, 0, .5);
    z-index: 10000
}

.bubblingG {
    text-align: center;
    width: 80px;
    height: 50px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -18px auto auto -40px;
    z-index: 2
}

.bubblingG span {
    display: inline-block;
    vertical-align: middle;
    width: 10px;
    height: 10px;
    margin: 25px auto;
    background: #fff;
    box-shadow: 5px 5px 0 rgba(0, 0, 0, .2);
    border-radius: 50px;
    animation: bubblingG 1s infinite alternate
}

#bubblingG_1 {
    animation-delay: 0s
}

#bubblingG_2 {
    animation-delay: .3s
}

#bubblingG_3 {
    animation-delay: .6s
}

@keyframes bubblingG {
    0% {
        width: 10px;
        height: 10px;
        background-color: #fff;
        transform: translateY(0)
    }
    to {
        width: 24px;
        height: 24px;
        background-color: #fff;
        transform: translateY(-21px)
    }
}

ul.pagination {
    margin: 40px auto;
    text-align: center
}

ul.pagination li {
    display: inline-block;
    height: 40px;
    margin: 0 0 0 4px;
    position: relative
}

ul.pagination li a {
    color: #838b8f;
    padding: 10px 15px;
    text-decoration: none
}

ul.pagination li>span {
    padding: 10px 15px
}

ul.pagination li:hover:not(.disabled):not(.active):after {
    width: 100%
}

ul.pagination li:after {
    background: #aaa;
    bottom: 0;
    content: " ";
    height: 3px;
    left: 0;
    position: absolute;
    width: 0;
    transition: width .2s ease-in
}

ul.pagination li.disabled {
    color: #b7b7b7;
    padding: 10px 20px
}

ul.pagination li.active {
    border-bottom: 3px solid #0091c7;
    color: #0091c7
}

.sidebar-container {
    overflow-y: hidden
}

.sidebar-container .sidebar {
    left: 0
}

.sidebar {
    background: #2e3942;
    color: #fff;
    height: 100%;
    left: -275px;
    padding: 0;
    position: fixed;
    right: auto;
    overflow-y: auto;
    top: 0;
    width: 270px;
    box-shadow: 4px 0 8px -2px rgba(15, 18, 21, .4);
    z-index: 10001;
    transition: left .3s ease-in
}

.sidebar .sidebar-close {
    position: absolute;
    top: 20px;
    right: 20px;
    color: hsla(0, 0%, 100%, .5);
    z-index: 2
}

.sidebar .sidebar-close:hover {
    color: #fff;
    cursor: pointer
}

.sidebar .sidebar-user {
    background: #26a0d7;
    background: linear-gradient(90deg, #26a0d7 0, #00679d);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#26a0d7", endColorstr="#00679d", GradientType=1);
    position: relative
}

.sidebar .sidebar-user:after {
    background: #2e3942;
    content: "";
    height: 250px;
    left: -110px;
    position: absolute;
    top: -145px;
    width: 400px;
    backface-visibility: hidden;
    transform: rotate(-29deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

.sidebar .user-details {
    padding: 0 0 35px;
    position: relative;
    z-index: 3
}

.sidebar .user-details .sidebar-profile-img {
    border: 9px solid rgba(28, 35, 46, .3);
    border-radius: 50%;
    margin: 60px auto 0;
    width: 160px
}

.sidebar .user-details .sidebar-profile-img .avatar {
    border: 4px solid rgba(28, 35, 46, .8);
    border-radius: 50%;
    display: block;
    width: 100%;
    height: 142px
}

.sidebar .user-details .dashboard,
.sidebar .user-details .profile {
    background: #0091c7;
    border-radius: 50%;
    box-shadow: 0 0 3px 0 rgba(0, 0, 0, .35);
    color: #fff;
    font-size: .875em;
    height: 30px;
    line-height: 30px;
    position: absolute;
    text-align: center;
    width: 30px
}

.sidebar .user-details .dashboard:hover,
.sidebar .user-details .profile:hover {
    background: #fff;
    color: #0091c7
}

.sidebar .user-details .profile {
    left: 20px;
    top: 140px
}

.sidebar .user-details .dashboard {
    font-size: 19px;
    right: 20px;
    top: 30px
}

.sidebar .user-details .username {
    display: block;
    font: 400 1.1875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 20px 0;
    padding: 0 10px;
    text-align: center
}

.sidebar .user-details .info {
    margin: 0;
    padding: 0
}

.sidebar .user-details .info li {
    float: left;
    padding: 0 15px;
    text-align: left;
    width: 50%
}

.sidebar .user-details .info li:first-child {
    border-right: 1px solid #fff;
    text-align: right
}

.sidebar .user-details .info li .text {
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.sidebar .user-details .info li strong {
    color: #1c232e;
    display: block;
    font-weight: 400
}

.sidebar .sidebar-add-blocker a,
.sidebar .sidebar-courses a {
    background: #51595f;
    border-left: 8px solid #2e3942;
    border-bottom: 1px solid #4a5157;
    color: #fff;
    display: block;
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    letter-spacing: .04em;
    padding: 15px 25px;
    position: relative
}

.sidebar .sidebar-add-blocker a .icon-right-arrow,
.sidebar .sidebar-courses a .icon-right-arrow {
    color: #0091c7;
    font-size: 20px;
    font-weight: 700;
    margin-top: -10px;
    position: absolute;
    right: 5px;
    top: 50%;
    visibility: hidden
}

.sidebar .sidebar-add-blocker a.trigger,
.sidebar .sidebar-courses a.trigger {
    background: #2e3942;
    border: 0;
    font-size: 1.0625em;
    padding-left: 35px
}

.sidebar .sidebar-add-blocker a.trigger span,
.sidebar .sidebar-courses a.trigger span {
    background: #0091c7;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    height: 25px;
    line-height: 25px;
    margin-right: 10px;
    text-align: center;
    vertical-align: middle;
    width: 25px
}

.sidebar .sidebar-add-blocker a.trigger.active,
.sidebar .sidebar-courses a.trigger.active {
    background: #2e3942
}

.sidebar .sidebar-add-blocker a.trigger:hover,
.sidebar .sidebar-courses a.trigger:hover {
    background: #3a3f44
}

.sidebar .sidebar-add-blocker a:hover,
.sidebar .sidebar-courses a:hover {
    background: #2e3942;
    border-left-color: #0091c7
}

.sidebar .sidebar-add-blocker a:hover .icon-right-arrow,
.sidebar .sidebar-courses a:hover .icon-right-arrow {
    visibility: visible
}

.sidebar .sidebar-add-blocker a.trigger {
    padding: 0
}

.sidebar .sidebar-add-blocker a.trigger span {
    background-color: transparent
}

.sidebar .sidebar-add-blocker a.trigger:hover {
    background: #2e3942
}

.sidebar .sidebar-add-blocker li {
    margin: 0
}

.sidebar .sidebar-current-courses {
    border: 0!important;
    display: none;
    padding: 0!important
}

.sidebar .sidebar-links li {
    margin: 20px 0;
    padding-left: 35px
}

.sidebar .sidebar-links li.full-width-side {
    padding-left: 0
}

.sidebar .sidebar-links li.full-width-side>div>a {
    padding-left: 35px
}

.sidebar .sidebar-links li .trigger {
    padding-left: 0
}

.sidebar .sidebar-links li:first-child {
    margin-top: 10px
}

.sidebar .sidebar-links li .sidebar-courses .trigger {
    padding-left: 0
}

.sidebar .sidebar-links li .sidebar-courses .trigger span {
    background: none
}

.sidebar .sidebar-links li span {
    margin-right: 10px
}

.sidebar .sidebar-links li a {
    color: #fff;
    font: 300 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.sidebar .sidebar-links li a:hover {
    color: #68aadd
}

.sidebar .sidebar-links .help-icon,
.sidebar .sidebar-links .icon-cross,
.sidebar .sidebar-links .icon-hat,
.sidebar .sidebar-links .icon-meter,
.sidebar .sidebar-links .remove-adverts {
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: .9375em;
    font-weight: 400;
    height: 25px;
    line-height: 25px;
    outline: none;
    text-align: center;
    vertical-align: middle;
    width: 25px
}

.sidebar .sidebar-links .icon-hat,
.sidebar .sidebar-links .icon-meter {
    border: 0 solid;
    font-size: 1.4375em
}

.sidebar .sidebar-links .remove-adverts {
    position: relative;
    overflow: hidden
}

.sidebar .sidebar-links .remove-adverts:after {
    background: #fff;
    content: "";
    height: 30px;
    left: 10px;
    position: absolute;
    top: 0;
    width: 1px;
    backface-visibility: hidden;
    transform: rotate(30deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

.sidebar .sidebar-links .icon-cross {
    font-size: 10px
}

.sidebar .sidebar-links .sidebar-add-blocker li {
    margin: 0;
    padding-left: 0
}

.sidebar .sidebar-links .sidebar-add-blocker li:first-child {
    margin-top: 10px
}

.sidebar .sidebar-links .sidebar-add-blocker li a {
    padding: 15px 30px 15px 25px
}

.sidebar .sidebar-links .sidebar-add-blocker li a .text {
    font-size: .75em;
    font-weight: 400
}

#sitemap {
    margin: -100px auto 60px;
    box-shadow: none;
    min-height: 400px;
    background: #fff;
    padding: 40px 10px;
    position: relative;
    z-index: 10
}

#sitemap .sitemap-links a {
    color: #2d3942;
    font-size: .875em;
    display: inline-block;
    text-transform: capitalize
}

#sitemap .sitemap-links a:after {
    content: "|";
    margin-right: 10px;
    margin-left: 10px
}

#sitemap .sitemap-links a:last-child:after {
    content: ""
}

#sitemap .sitemap-heading {
    margin-bottom: 0;
    background-color: #d4dee1;
    font-size: 1em;
    padding: 12px 20px;
    color: #2d3942;
    text-transform: capitalize;
    margin-top: 40px
}

#sitemap .sitemap-content {
    width: 100%;
    margin-left: 0
}

#sitemap .sitemap-content ul {
    margin: 0
}

#sitemap .sitemap-content ul li a {
    margin: 0 0 1px;
    font-size: .875em;
    padding: 12px 20px;
    color: #2d3942;
    background-color: #f2f5f6;
    text-transform: capitalize;
    transition: all .3s ease;
    display: block
}

#sitemap .sitemap-content ul li a:hover {
    background-color: #0094c9;
    color: #fff;
    text-decoration: none
}

@media only screen and (min-width:768px) {
    #sitemap {
        padding: 40px
    }
    #sitemap .sitemap-content {
        width: calc(100% - 15px);
        margin-left: 15px
    }
    #sitemap .sitemap-links a {
        font-size: 1em
    }
}

@media only screen and (min-width:1020px) {
    #sitemap {
        box-shadow: 0 0 3px 0 #585858
    }
}

.banner.banner-404 {
    background: url(../../site/img/banner-404-tab.png) no-repeat 50%/cover;
    padding: 0 0 34%;
    width: 100%;
    height: 100%
}

@media only screen and (min-width:768px) {
    .banner.banner-404 {
        background: url(../../site/img/banner-404-lg.png) no-repeat 50%/cover;
        padding: 15%;
        width: 100%;
        height: 100%
    }
}

.banner.banner-500 {
    background: url(../../site/img/500-BG.png) no-repeat 50%/cover;
    width: 100%;
    height: 100%
}

@media only screen and (min-width:768px) {
    .banner.banner-500 {
        background: url(../../site/img/500-BG.png) no-repeat 50%/cover;
        width: 100%;
        height: 100%
    }
}

#error-found {
    overflow: hidden
}

#error-found .error-banner .planet {
    max-width: 150px;
    max-height: 150px;
    position: absolute!important
}

#error-found .error-banner .planet.planet-1 {
    top: 10%!important;
    left: -10%!important
}

#error-found .error-banner .planet.planet-3 {
    bottom: 30%!important;
    right: -20px!important;
    left: auto!important;
    top: auto!important
}

#error-found .error-banner .planet.planet-2 {
    bottom: 10%!important;
    top: auto!important
}

#error-found .error-banner .planet img {
    width: 100%;
    height: auto
}

#error-found .error-banner .black-hole {
    width: 280px;
    height: 280px;
    margin: 40px auto;
    position: relative
}

#error-found .error-banner .black-hole .spinner {
    width: 280px;
    height: 280px;
    background: url(../../site/img/black-hole.png) no-repeat 50%/cover;
    animation: spin 60s linear infinite
}

#error-found .error-banner .black-hole .astronaut {
    background: url(../../site/img/astronaut.png) no-repeat 0 0/100%;
    width: 171px;
    height: 240px;
    position: absolute;
    top: 0;
    left: 38px;
    animation: updown 1.5s ease-in-out infinite
}

#error-found .error-banner .align-center h2 {
    font-size: 1.2625em
}

#error-found .error-banner.banner-404 .error_page_search_box {
    position: relative;
    top: 110px
}

#error-found .error-banner.banner-404 .error_page_help_links {
    position: relative;
    top: 115px
}

#error-found .error-banner.banner-500 .error_page_search_outer {
    position: relative;
    pointer-events: all
}

#error-found .error-banner.banner-500 .error_page_search_box {
    margin-bottom: 50px
}

#error-found .error-banner.banner-500 .error_page_help_links {
    margin-bottom: 80px
}

#error-found .error-banner .error_page_search_box h3 {
    font-size: 1.0575em;
    font-weight: 100
}

#error-found .error-banner .error_page_search_box input[type="text"] {
    width: 66%;
    height: 40px;
    border-radius: 5px 0 0 5px;
    padding-right: 0
}

#error-found .error-banner .error_page_search_box button[type="submit"] {
    width: 6%;
    background-color: #2e3942;
    height: 40px;
    border-radius: 0 5px 5px 0;
    margin-left: -4px;
    transition: background-color .5s ease-out
}

#error-found .error-banner .error_page_search_box button[type="submit"]:hover {
    background-color: #0094c9
}

#error-found .error-banner .error_page_help_links h4 {
    font-size: 1.0075em;
    font-weight: 100
}

#error-found .error-banner .error_page_help_links_parent .error_page_help_link_item {
    display: inline-block;
    border: 2px solid #0094c9;
    transition: border .5s ease-out;
    padding: 0;
    width: 100px;
    margin: 5px 3%;
    border-radius: 5px
}

#error-found .error-banner .error_page_help_links_parent .error_page_help_link_item:hover {
    border: 2px solid #fff
}

#error-found .error-banner .error_page_help_links_parent .error_page_help_link_item a {
    font-size: 14px;
    text-decoration: none
}

#error-found .error-banner .error_page_search_box span.icon-search {
    margin-left: -7px
}

@media only screen and (min-width:400px) {
    #error-found .error-banner.banner-404 .error_page_search_box {
        top: 170px
    }
    #error-found .error-banner.banner-404 .error_page_help_links {
        top: 200px
    }
    #error-found .error-banner .error_page_help_links h4 {
        margin-bottom: 5px
    }
    #error-found .error-banner .error_page_help_links_wrapper {
        width: 75%;
        margin-left: auto;
        margin-right: auto
    }
}

@media only screen and (min-width:768px) {
    #error-found .error-banner .align-center h2 {
        font-size: 1.5625em;
        margin-top: -60px
    }
    #error-found .error-banner .error_page_search_box input[type="text"] {
        width: 43%
    }
    #error-found .error-banner .error_page_search_box h3 {
        font-size: 1.2625em
    }
    #error-found .error-banner .error_page_help_links_wrapper {
        width: 100%
    }
    #error-found .error-banner .black-hole,
    #error-found .error-banner .black-hole .spinner {
        width: 400px;
        height: 400px
    }
    #error-found .error-banner .black-hole .astronaut {
        width: 200px;
        height: 240px
    }
}

@media only screen and (min-width:868px) {
    #error-found .error-banner.banner-404 .align-center .wrapper.content h2 {
        position: relative;
        top: -100px
    }
    #error-found .error-banner .align-center .wrapper.content h2 {
        font-size: 1.4625em
    }
}

@media only screen and (min-width:1020px) {
    #error-found .error-banner .align-center h2 {
        font-size: 1.9625em
    }
}

@media only screen and (min-width:1240px) {
    #error-found .error-banner .align-center h2 {
        font-size: 2.4625em
    }
    #error-found .error-banner .error_page_search_box h3 {
        font-size: 1.4625em
    }
    #error-found .error-banner .error_page_search_box span.icon-search {
        margin-left: 0
    }
    #error-found .error-banner ul.error_page_help_links_parent li.error_page_help_link_item {
        display: inline-block;
        border: 2px solid #0094c9;
        transition: border .5s ease-out;
        padding: 5px;
        width: 120px;
        margin: 5px 3%;
        border-radius: 5px
    }
}

@keyframes spin {
    to {
        transform: rotate(1turn)
    }
}

@keyframes updown {
    0% {
        top: 0
    }
    50% {
        top: 3px
    }
    to {
        top: 0
    }
}

.mCustomScrollbar {
    -ms-touch-action: pinch-zoom;
    touch-action: pinch-zoom
}

.mCustomScrollbar.mCS_no_scrollbar,
.mCustomScrollbar.mCS_touch_action {
    -ms-touch-action: auto;
    touch-action: auto
}

.mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr
}

.mCSB_container {
    overflow: hidden;
    width: auto;
    height: auto
}

.mCSB_inside>.mCSB_container {
    margin-right: 10px
}

.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden {
    margin-right: 0
}

.mCS-dir-rtl>.mCSB_inside>.mCSB_container {
    margin-right: 0;
    margin-left: 30px
}

.mCS-dir-rtl>.mCSB_inside>.mCSB_container.mCS_no_scrollbar_y.mCS_y_hidden {
    margin-left: 0
}

.mCSB_scrollTools {
    position: absolute;
    width: 16px;
    height: auto;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0
}

.mCSB_outside+.mCSB_scrollTools {
    right: -26px
}

.mCS-dir-rtl>.mCSB_inside>.mCSB_scrollTools,
.mCS-dir-rtl>.mCSB_outside+.mCSB_scrollTools {
    right: auto;
    left: 0
}

.mCS-dir-rtl>.mCSB_outside+.mCSB_scrollTools {
    left: -26px
}

.mCSB_scrollTools .mCSB_draggerContainer {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    height: auto
}

.mCSB_scrollTools a+.mCSB_draggerContainer {
    margin: 20px 0
}

.mCSB_scrollTools .mCSB_draggerRail {
    width: 2px;
    height: 100%;
    margin: 0 auto;
    border-radius: 16px
}

.mCSB_scrollTools .mCSB_dragger {
    cursor: pointer;
    width: 100%;
    height: 30px;
    z-index: 1
}

.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    position: relative;
    width: 4px;
    height: 100%;
    margin: 0 auto;
    border-radius: 16px;
    text-align: center
}

.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar {
    width: 12px
}

.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    width: 8px
}

.mCSB_scrollTools .mCSB_buttonDown,
.mCSB_scrollTools .mCSB_buttonUp {
    display: block;
    position: absolute;
    height: 20px;
    width: 100%;
    overflow: hidden;
    margin: 0 auto;
    cursor: pointer
}

.mCSB_scrollTools .mCSB_buttonDown {
    bottom: 0
}

.mCSB_horizontal.mCSB_inside>.mCSB_container {
    margin-right: 0;
    margin-bottom: 30px
}

.mCSB_horizontal.mCSB_outside>.mCSB_container {
    min-height: 100%
}

.mCSB_horizontal>.mCSB_container.mCS_no_scrollbar_x.mCS_x_hidden {
    margin-bottom: 0
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    width: auto;
    height: 16px;
    top: auto;
    right: 0;
    bottom: 0;
    left: 0
}

.mCustomScrollBox+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,
.mCustomScrollBox+.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    bottom: -26px
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal a+.mCSB_draggerContainer {
    margin: 0 20px
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 2px;
    margin: 7px 0
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_dragger {
    width: 30px;
    height: 100%;
    left: 0
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    width: 100%;
    height: 4px;
    margin: 6px auto
}

.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar {
    height: 12px;
    margin: 2px auto
}

.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    height: 8px;
    margin: 4px 0
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonLeft,
.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonRight {
    display: block;
    position: absolute;
    width: 20px;
    height: 100%;
    overflow: hidden;
    margin: 0 auto;
    cursor: pointer
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonLeft {
    left: 0
}

.mCSB_scrollTools.mCSB_scrollTools_horizontal .mCSB_buttonRight {
    right: 0
}

.mCSB_container_wrapper {
    position: absolute;
    height: auto;
    width: auto;
    overflow: hidden;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin-right: 30px;
    margin-bottom: 30px
}

.mCSB_container_wrapper>.mCSB_container {
    padding-right: 30px;
    padding-bottom: 30px;
    box-sizing: border-box
}

.mCSB_vertical_horizontal>.mCSB_scrollTools.mCSB_scrollTools_vertical {
    bottom: 20px
}

.mCSB_vertical_horizontal>.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    right: 20px
}

.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden+.mCSB_scrollTools.mCSB_scrollTools_vertical {
    bottom: 0
}

.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_scrollTools.mCSB_scrollTools_horizontal,
.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden+.mCSB_scrollTools~.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    right: 0
}

.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    left: 20px
}

.mCS-dir-rtl>.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden+.mCSB_scrollTools~.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    left: 0
}

.mCS-dir-rtl>.mCSB_inside>.mCSB_container_wrapper {
    margin-right: 0;
    margin-left: 30px
}

.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden>.mCSB_container {
    padding-right: 0
}

.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden>.mCSB_container {
    padding-bottom: 0
}

.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_y.mCS_y_hidden {
    margin-right: 0;
    margin-left: 0
}

.mCustomScrollBox.mCSB_vertical_horizontal.mCSB_inside>.mCSB_container_wrapper.mCS_no_scrollbar_x.mCS_x_hidden {
    margin-bottom: 0
}

.mCSB_scrollTools,
.mCSB_scrollTools .mCSB_buttonDown,
.mCSB_scrollTools .mCSB_buttonLeft,
.mCSB_scrollTools .mCSB_buttonRight,
.mCSB_scrollTools .mCSB_buttonUp,
.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    transition: opacity .2s ease-in-out, background-color .2s ease-in-out
}

.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger_bar,
.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerRail,
.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger_bar,
.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerRail {
    transition: width .2s ease-out .2s, height .2s ease-out .2s, margin-left .2s ease-out .2s, margin-right .2s ease-out .2s, margin-top .2s ease-out .2s, margin-bottom .2s ease-out .2s, opacity .2s ease-in-out, background-color .2s ease-in-out
}

.mCSB_scrollTools {
    opacity: .75;
    filter: "alpha(opacity=75)";
    -ms-filter: "alpha(opacity=75)"
}

.mCS-autoHide>.mCustomScrollBox>.mCSB_scrollTools,
.mCS-autoHide>.mCustomScrollBox~.mCSB_scrollTools {
    opacity: 0;
    filter: "alpha(opacity=0)";
    -ms-filter: "alpha(opacity=0)"
}

.mCS-autoHide:hover>.mCustomScrollBox>.mCSB_scrollTools,
.mCS-autoHide:hover>.mCustomScrollBox~.mCSB_scrollTools,
.mCustomScrollbar>.mCustomScrollBox>.mCSB_scrollTools.mCSB_scrollTools_onDrag,
.mCustomScrollbar>.mCustomScrollBox~.mCSB_scrollTools.mCSB_scrollTools_onDrag,
.mCustomScrollBox:hover>.mCSB_scrollTools,
.mCustomScrollBox:hover~.mCSB_scrollTools {
    opacity: 1;
    filter: "alpha(opacity=100)";
    -ms-filter: "alpha(opacity=100)"
}

.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .4);
    filter: "alpha(opacity=40)";
    -ms-filter: "alpha(opacity=40)"
}

.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .75);
    filter: "alpha(opacity=75)";
    -ms-filter: "alpha(opacity=75)"
}

.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .85);
    filter: "alpha(opacity=85)";
    -ms-filter: "alpha(opacity=85)"
}

.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .9);
    filter: "alpha(opacity=90)";
    -ms-filter: "alpha(opacity=90)"
}

.mCSB_scrollTools .mCSB_buttonDown,
.mCSB_scrollTools .mCSB_buttonLeft,
.mCSB_scrollTools .mCSB_buttonRight,
.mCSB_scrollTools .mCSB_buttonUp {
    background-image: url(https://alison.com/html/site/img/xmCSB_buttons.png.pagespeed.ic.-053_4ZbkR.webp);
    background-repeat: no-repeat;
    opacity: .4;
    filter: "alpha(opacity=40)";
    -ms-filter: "alpha(opacity=40)"
}

.mCSB_scrollTools .mCSB_buttonUp {
    background-position: 0 0
}

.mCSB_scrollTools .mCSB_buttonDown {
    background-position: 0 -20px
}

.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: 0 -40px
}

.mCSB_scrollTools .mCSB_buttonRight {
    background-position: 0 -56px
}

.mCSB_scrollTools .mCSB_buttonDown:hover,
.mCSB_scrollTools .mCSB_buttonLeft:hover,
.mCSB_scrollTools .mCSB_buttonRight:hover,
.mCSB_scrollTools .mCSB_buttonUp:hover {
    opacity: .75;
    filter: "alpha(opacity=75)";
    -ms-filter: "alpha(opacity=75)"
}

.mCSB_scrollTools .mCSB_buttonDown:active,
.mCSB_scrollTools .mCSB_buttonLeft:active,
.mCSB_scrollTools .mCSB_buttonRight:active,
.mCSB_scrollTools .mCSB_buttonUp:active {
    opacity: .9;
    filter: "alpha(opacity=90)";
    -ms-filter: "alpha(opacity=90)"
}

.mCS-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .15)
}

.mCS-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: rgba(0, 0, 0, .85)
}

.mCS-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: rgba(0, 0, 0, .9)
}

.mCS-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -80px 0
}

.mCS-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -80px -20px
}

.mCS-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -80px -40px
}

.mCS-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -80px -56px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail,
.mCS-light-2.mCSB_scrollTools .mCSB_draggerRail {
    width: 4px;
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .1);
    border-radius: 1px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 4px;
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .75);
    border-radius: 1px
}

.mCS-dark-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-dark-2.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-light-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-2.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 4px;
    margin: 6px auto
}

.mCS-light-2.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .85)
}

.mCS-light-2.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-light-2.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .9)
}

.mCS-light-2.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -32px 0
}

.mCS-light-2.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -32px -20px
}

.mCS-light-2.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -40px -40px
}

.mCS-light-2.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -40px -56px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .1);
    border-radius: 1px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75);
    border-radius: 1px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-dark-2.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-dark-2.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-dark-2.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px 0
}

.mCS-dark-2.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -20px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -120px -40px
}

.mCS-dark-2.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -120px -56px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_draggerRail,
.mCS-light-thick.mCSB_scrollTools .mCSB_draggerRail {
    width: 4px;
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .1);
    border-radius: 2px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 6px;
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .75);
    border-radius: 2px
}

.mCS-dark-thick.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-light-thick.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 4px;
    margin: 6px 0
}

.mCS-dark-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    width: 100%;
    height: 6px;
    margin: 5px auto
}

.mCS-light-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .85)
}

.mCS-light-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-light-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .9)
}

.mCS-light-thick.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -16px 0
}

.mCS-light-thick.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -16px -20px
}

.mCS-light-thick.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -20px -40px
}

.mCS-light-thick.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -20px -56px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .1);
    border-radius: 2px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75);
    border-radius: 2px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-dark-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -96px 0
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -96px -20px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -100px -40px
}

.mCS-dark-thick.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -100px -56px
}

.mCS-light-thin.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .1)
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 2px
}

.mCS-dark-thin.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-light-thin.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%
}

.mCS-dark-thin.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-thin.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    width: 100%;
    height: 2px;
    margin: 7px auto
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .15)
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-dark-thin.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -80px 0
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -80px -20px
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -80px -40px
}

.mCS-dark-thin.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -80px -56px
}

.mCS-rounded.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .15)
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger,
.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger,
.mCS-rounded.mCSB_scrollTools .mCSB_dragger {
    height: 14px
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded-dots.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 14px;
    margin: 0 1px
}

.mCS-rounded-dark.mCSB_scrollTools_horizontal .mCSB_dragger,
.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_dragger,
.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_dragger,
.mCS-rounded.mCSB_scrollTools_horizontal .mCSB_dragger {
    width: 14px
}

.mCS-rounded-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    height: 14px;
    margin: 1px 0
}

.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar {
    width: 16px;
    height: 16px;
    margin: -1px 0
}

.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-rounded-dark.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,
.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-rounded.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    width: 4px
}

.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded .mCSB_dragger_bar,
.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_dragger .mCSB_dragger_bar {
    height: 16px;
    width: 16px;
    margin: 0 -1px
}

.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-rounded-dark.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,
.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-rounded.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    height: 4px;
    margin: 6px 0
}

.mCS-rounded.mCSB_scrollTools .mCSB_buttonUp {
    background-position: 0 -72px
}

.mCS-rounded.mCSB_scrollTools .mCSB_buttonDown {
    background-position: 0 -92px
}

.mCS-rounded.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: 0 -112px
}

.mCS-rounded.mCSB_scrollTools .mCSB_buttonRight {
    background-position: 0 -128px
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .15)
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-rounded-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -80px -72px
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -80px -92px
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -80px -112px
}

.mCS-rounded-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -80px -128px
}

.mCS-rounded-dots-dark.mCSB_scrollTools_vertical .mCSB_draggerRail,
.mCS-rounded-dots.mCSB_scrollTools_vertical .mCSB_draggerRail {
    width: 4px
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-rounded-dots.mCSB_scrollTools .mCSB_draggerRail,
.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    background-color: transparent;
    background-position: 50%
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-rounded-dots.mCSB_scrollTools .mCSB_draggerRail {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAANElEQVQYV2NkIAAYiVbw//9/Y6DiM1ANJoyMjGdBbLgJQAX/kU0DKgDLkaQAvxW4HEvQFwCRcxIJK1XznAAAAABJRU5ErkJggg==);
    background-repeat: repeat-y;
    opacity: .3;
    filter: "alpha(opacity=30)";
    -ms-filter: "alpha(opacity=30)"
}

.mCS-rounded-dots-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-rounded-dots.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    height: 4px;
    margin: 6px 0;
    background-repeat: repeat-x
}

.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -16px -72px
}

.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -16px -92px
}

.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -20px -112px
}

.mCS-rounded-dots.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -20px -128px
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAgAAAAICAYAAADED76LAAAALElEQVQYV2NkIAAYSVFgDFR8BqrBBEifBbGRTfiPZhpYjiQFBK3A6l6CvgAAE9kGCd1mvgEAAAAASUVORK5CYII=)
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -96px -72px
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -96px -92px
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -100px -112px
}

.mCS-rounded-dots-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -100px -128px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-repeat: repeat-y;
    background-image: linear-gradient(90deg, hsla(0, 0%, 100%, .5) 0, hsla(0, 0%, 100%, 0))
}

.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    background-repeat: repeat-x;
    background-image: linear-gradient(180deg, hsla(0, 0%, 100%, .5) 0, hsla(0, 0%, 100%, 0))
}

.mCS-3d-dark.mCSB_scrollTools_vertical .mCSB_dragger,
.mCS-3d.mCSB_scrollTools_vertical .mCSB_dragger {
    height: 70px
}

.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger,
.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger {
    width: 70px
}

.mCS-3d-dark.mCSB_scrollTools,
.mCS-3d.mCSB_scrollTools {
    opacity: 1;
    filter: "alpha(opacity=30)";
    -ms-filter: "alpha(opacity=30)"
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_draggerRail {
    border-radius: 16px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-3d.mCSB_scrollTools .mCSB_draggerRail {
    width: 8px;
    background-color: #000;
    background-color: rgba(0, 0, 0, .2);
    box-shadow: inset 1px 0 1px rgba(0, 0, 0, .5), inset -1px 0 1px hsla(0, 0%, 100%, .2)
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #555
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 8px
}

.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-3d.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 8px;
    margin: 4px 0;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .5), inset 0 -1px 1px hsla(0, 0%, 100%, .2)
}

.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    width: 100%;
    height: 8px;
    margin: 4px auto
}

.mCS-3d.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -32px -72px
}

.mCS-3d.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -32px -92px
}

.mCS-3d.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -40px -112px
}

.mCS-3d.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -40px -128px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .1);
    box-shadow: inset 1px 0 1px rgba(0, 0, 0, .1)
}

.mCS-3d-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1)
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -120px -112px
}

.mCS-3d-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -120px -128px
}

.mCS-3d-thick-dark.mCSB_scrollTools,
.mCS-3d-thick.mCSB_scrollTools {
    opacity: 1;
    filter: "alpha(opacity=30)";
    -ms-filter: "alpha(opacity=30)"
}

.mCS-3d-thick-dark.mCSB_scrollTools,
.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerContainer,
.mCS-3d-thick.mCSB_scrollTools,
.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerContainer {
    border-radius: 7px
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    border-radius: 5px
}

.mCSB_inside+.mCS-3d-thick-dark.mCSB_scrollTools_vertical,
.mCSB_inside+.mCS-3d-thick.mCSB_scrollTools_vertical {
    right: 1px
}

.mCS-3d-thick-dark.mCSB_scrollTools_vertical,
.mCS-3d-thick.mCSB_scrollTools_vertical {
    box-shadow: inset 1px 0 1px rgba(0, 0, 0, .1), inset 0 0 14px rgba(0, 0, 0, .5)
}

.mCS-3d-thick-dark.mCSB_scrollTools_horizontal,
.mCS-3d-thick.mCSB_scrollTools_horizontal {
    bottom: 1px;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1), inset 0 0 14px rgba(0, 0, 0, .5)
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    box-shadow: inset 1px 0 0 hsla(0, 0%, 100%, .4);
    width: 12px;
    margin: 2px;
    position: absolute;
    height: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .4)
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #555
}

.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    height: 12px;
    width: auto
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerContainer {
    background-color: #000;
    background-color: rgba(0, 0, 0, .05);
    box-shadow: inset 1px 1px 16px rgba(0, 0, 0, .1)
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_draggerRail {
    background-color: transparent
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -32px -72px
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -32px -92px
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -40px -112px
}

.mCS-3d-thick.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -40px -128px
}

.mCS-3d-thick-dark.mCSB_scrollTools {
    box-shadow: inset 0 0 14px rgba(0, 0, 0, .2)
}

.mCS-3d-thick-dark.mCSB_scrollTools_horizontal {
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .1), inset 0 0 14px rgba(0, 0, 0, .2)
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    box-shadow: inset 1px 0 0 hsla(0, 0%, 100%, .4), inset -1px 0 0 rgba(0, 0, 0, .2)
}

.mCS-3d-thick-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    box-shadow: inset 0 1px 0 hsla(0, 0%, 100%, .4), inset 0 -1px 0 rgba(0, 0, 0, .2)
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #777
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerContainer {
    background-color: #fff;
    background-color: rgba(0, 0, 0, .05);
    box-shadow: inset 1px 1px 16px rgba(0, 0, 0, .1)
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: transparent
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -120px -112px
}

.mCS-3d-thick-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -120px -128px
}

.mCSB_outside+.mCS-minimal-dark.mCSB_scrollTools_vertical,
.mCSB_outside+.mCS-minimal.mCSB_scrollTools_vertical {
    right: 0;
    margin: 12px 0
}

.mCustomScrollBox.mCS-minimal+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,
.mCustomScrollBox.mCS-minimal+.mCSB_scrollTools.mCSB_scrollTools_horizontal,
.mCustomScrollBox.mCS-minimal-dark+.mCSB_scrollTools+.mCSB_scrollTools.mCSB_scrollTools_horizontal,
.mCustomScrollBox.mCS-minimal-dark+.mCSB_scrollTools.mCSB_scrollTools_horizontal {
    bottom: 0;
    margin: 0 12px
}

.mCS-dir-rtl>.mCSB_outside+.mCS-minimal-dark.mCSB_scrollTools_vertical,
.mCS-dir-rtl>.mCSB_outside+.mCS-minimal.mCSB_scrollTools_vertical {
    left: 0;
    right: auto
}

.mCS-minimal-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-minimal.mCSB_scrollTools .mCSB_draggerRail {
    background-color: transparent
}

.mCS-minimal-dark.mCSB_scrollTools_vertical .mCSB_dragger,
.mCS-minimal.mCSB_scrollTools_vertical .mCSB_dragger {
    height: 50px
}

.mCS-minimal-dark.mCSB_scrollTools_horizontal .mCSB_dragger,
.mCS-minimal.mCSB_scrollTools_horizontal .mCSB_dragger {
    width: 50px
}

.mCS-minimal.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .2);
    filter: "alpha(opacity=20)";
    -ms-filter: "alpha(opacity=20)"
}

.mCS-minimal.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-minimal.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .5);
    filter: "alpha(opacity=50)";
    -ms-filter: "alpha(opacity=50)"
}

.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .2);
    filter: "alpha(opacity=20)";
    -ms-filter: "alpha(opacity=20)"
}

.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-minimal-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .5);
    filter: "alpha(opacity=50)";
    -ms-filter: "alpha(opacity=50)"
}

.mCS-dark-3.mCSB_scrollTools .mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools .mCSB_draggerRail {
    width: 6px;
    background-color: #000;
    background-color: rgba(0, 0, 0, .2)
}

.mCS-dark-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 6px
}

.mCS-dark-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-dark-3.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-light-3.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 6px;
    margin: 5px 0
}

.mCS-dark-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-dark-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools_vertical.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    width: 12px
}

.mCS-dark-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-dark-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_dragger.mCSB_dragger_onDrag_expanded+.mCSB_draggerRail,
.mCS-light-3.mCSB_scrollTools_horizontal.mCSB_scrollTools_onDrag_expand .mCSB_draggerContainer:hover .mCSB_draggerRail {
    height: 12px;
    margin: 2px 0
}

.mCS-light-3.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -32px -72px
}

.mCS-light-3.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -32px -92px
}

.mCS-light-3.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -40px -112px
}

.mCS-light-3.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -40px -128px
}

.mCS-dark-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-dark-3.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-dark-3.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-dark-3.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-dark-3.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .1)
}

.mCS-dark-3.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

.mCS-dark-3.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

.mCS-dark-3.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -120px -112px
}

.mCS-dark-3.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -120px -128px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-2.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-3.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset.mCSB_scrollTools .mCSB_draggerRail {
    width: 12px;
    background-color: #000;
    background-color: rgba(0, 0, 0, .2)
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-2.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    width: 6px;
    margin: 3px 5px;
    position: absolute;
    height: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.mCS-inset-2-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-2.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-3.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset.mCSB_scrollTools_horizontal .mCSB_dragger .mCSB_dragger_bar {
    height: 6px;
    margin: 5px 3px;
    position: absolute;
    width: auto;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0
}

.mCS-inset-2-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-inset-2.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-inset-3-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-inset-3.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-inset-dark.mCSB_scrollTools_horizontal .mCSB_draggerRail,
.mCS-inset.mCSB_scrollTools_horizontal .mCSB_draggerRail {
    width: 100%;
    height: 12px;
    margin: 2px 0
}

.mCS-inset-2.mCSB_scrollTools .mCSB_buttonUp,
.mCS-inset-3.mCSB_scrollTools .mCSB_buttonUp,
.mCS-inset.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -32px -72px
}

.mCS-inset-2.mCSB_scrollTools .mCSB_buttonDown,
.mCS-inset-3.mCSB_scrollTools .mCSB_buttonDown,
.mCS-inset.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -32px -92px
}

.mCS-inset-2.mCSB_scrollTools .mCSB_buttonLeft,
.mCS-inset-3.mCSB_scrollTools .mCSB_buttonLeft,
.mCS-inset.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -40px -112px
}

.mCS-inset-2.mCSB_scrollTools .mCSB_buttonRight,
.mCS-inset-3.mCSB_scrollTools .mCSB_buttonRight,
.mCS-inset.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -40px -128px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-inset-2-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-inset-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .1)
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonUp,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonUp,
.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonDown,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonDown,
.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonLeft,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonLeft,
.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonLeft {
    background-position: -120px -112px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_buttonRight,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_buttonRight,
.mCS-inset-dark.mCSB_scrollTools .mCSB_buttonRight {
    background-position: -120px -128px
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail,
.mCS-inset-2.mCSB_scrollTools .mCSB_draggerRail {
    background-color: transparent;
    border-color: #fff;
    border: 1px solid hsla(0, 0%, 100%, .2);
    box-sizing: border-box
}

.mCS-inset-2-dark.mCSB_scrollTools .mCSB_draggerRail {
    border-color: #000;
    border-color: rgba(0, 0, 0, .2)
}

.mCS-inset-3.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .6)
}

.mCS-inset-3-dark.mCSB_scrollTools .mCSB_draggerRail {
    background-color: #000;
    background-color: rgba(0, 0, 0, .6)
}

.mCS-inset-3.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .75)
}

.mCS-inset-3.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .85)
}

.mCS-inset-3.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-inset-3.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #000;
    background-color: rgba(0, 0, 0, .9)
}

.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .75)
}

.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .85)
}

.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
.mCS-inset-3-dark.mCSB_scrollTools .mCSB_dragger:active .mCSB_dragger_bar {
    background-color: #fff;
    background-color: hsla(0, 0%, 100%, .9)
}

.cards {
    margin: 70px auto 0;
    max-width: 1300px
}

.cards li {
    float: left;
    height: 240px;
    position: relative;
    overflow: hidden;
    margin: auto;
    width: 50%
}

.cards li img {
    bottom: -1000px;
    left: -1000px;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    right: -1000px;
    top: -1003px;
    width: 100%
}

.cards li a:after {
    content: "";
    height: 503px;
    left: -3px;
    position: absolute;
    pointer-events: none;
    top: -48px;
    width: 349px
}

.cards a {
    display: block;
    height: 100%
}

.cards h3 {
    color: hsla(0, 0%, 100%, .85);
    display: block;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    left: 15px;
    margin-top: -15px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 35%;
    width: 100%;
    z-index: 2
}

@media only screen and (min-width:768px) {
    .cards {
        padding: 0 10px
    }
    .cards li {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        height: 320px;
        width: 25%;
        transition: all .6s cubic-bezier(.08, .96, .17, 1.43)
    }
    .cards li:first-child {
        top: 40px
    }
    .cards li:nth-child(2) {
        top: 45px
    }
    .cards li:nth-child(3) {
        top: 50px
    }
    .cards li:nth-child(4) {
        top: 55px
    }
    .cards li.active,
    .cards li:hover {
        top: 5px!important
    }
    .cards h3 {
        font-size: 1.5625em
    }
}

@media only screen and (min-width:1020px) {
    .cards {
        margin: 30px auto 0
    }
    .cards li {
        height: 380px
    }
    .cards h3 {
        font-size: 2.1875em
    }
}

#homepage-middle-loggedin {
    position: relative;
    padding: 1px 0;
    background: #fff
}

#homepage-middle {
    background: #fff;
    background: linear-gradient(180deg, #fff 0, #e8e8e8);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFFFFFFF", endColorstr="#FFE8E8E8", GradientType=0);
    padding: 20px 0 40px;
    position: relative
}

#homepage-middle .angle-bottom {
    bottom: 0
}

#homepage-middle .angle-bottom .angle {
    border-right: 0 solid transparent;
    border-left: 100vw solid #fff;
    border-top: 20px solid transparent;
    border-bottom: 0 solid transparent
}

#homepage-middle .middle-title {
    display: block;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    width: 100%
}

#homepage-middle .middle-title h3 {
    color: #5d666d;
    margin-bottom: 25px;
    text-align: center
}

#homepage-middle .middle-title h3 .icon-leaf {
    display: inline-block;
    font-size: 1.125em;
    margin-right: 10px
}

#homepage-middle>.wrapper {
    margin: 20px auto 0
}

#homepage-middle .slick-slider-middle {
    text-align: center
}

#homepage-middle .slick-slider-middle li {
    outline: none
}

#homepage-middle .slick-slider-middle .middle-content {
    margin-top: 20px
}

#homepage-middle .slick-slider-middle .middle-content h4 {
    color: #5d666d;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 5px;
    text-align: center
}

#homepage-middle .slick-slider-middle .image-main {
    display: block;
    margin: 0 auto 20px;
    max-width: 425px;
    width: 100%
}

#homepage-middle .slick-slider-middle img {
    display: inline-block;
    margin-right: 10px;
    width: 80px
}

#homepage-middle .slick-slider-middle .slick-dots {
    margin: 30px 0 0;
    text-align: center
}

#homepage-middle .slick-slider-middle .slick-dots li {
    display: inline-block;
    margin: 5px
}

#homepage-middle .slick-slider-middle .slick-dots li button {
    background: none;
    border: 1px solid #5d666d;
    border-radius: 50%;
    display: block;
    height: 15px;
    padding: 0;
    text-indent: -9999px;
    width: 15px
}

#homepage-middle .slick-slider-middle .slick-dots li.slick-active button {
    background: #5d666d
}

#homepage-middle .slick-slider-middle .slick-list {
    margin: 0 auto
}

#homepage-middle .slick-slider-middle .slick-list p {
    color: #5d666d;
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 auto;
    max-width: 700px;
    padding: 25px 0;
    text-align: center
}

@media only screen and (min-width:768px) {
    #homepage-middle .angle-bottom .angle {
        border-top: 40px solid transparent
    }
}

@media only screen and (min-width:1020px) {
    #homepage-middle .angle-bottom .angle {
        border-top: 40px solid transparent
    }
    #homepage-middle .slick-slider-middle img {
        display: inline-block;
        margin-right: 23px;
        width: 110px
    }
    #homepage-middle .slick-slider-middle .image-main {
        float: left;
        width: 42%
    }
    #homepage-middle .slick-slider-middle .middle-content {
        float: right;
        padding: 0 65px;
        width: 58%
    }
    #homepage-middle .slick-slider-middle .middle-content h4 {
        margin-left: 25px;
        text-align: left
    }
    #homepage-middle .slick-slider-middle .slick-list p {
        font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        text-align: justify;
        padding: 25px
    }
}

#popular-bg,
#rated-bg,
#testimonials-bg {
    width: 100%;
    padding: 0
}

#popular-bg ul,
#rated-bg ul,
#testimonials-bg ul {
    text-align: center
}

#popular-bg h4,
#rated-bg h4,
#testimonials-bg h4 {
    width: auto;
    text-align: center;
    margin: 0;
    padding: 20px 0 10px
}

#popular-bg h4 span,
#rated-bg h4 span,
#testimonials-bg h4 span {
    margin-right: 10px
}

#popular-bg .course .course-learning-paths .learningPath .body h4,
#rated-bg .course .course-learning-paths .learningPath .body h4,
#testimonials-bg .course .course-learning-paths .learningPath .body h4 {
    margin: 0 0 10px;
    padding: 0
}

#popular-bg,
#rated-bg {
    padding-bottom: 50px;
    background: hsla(0, 0%, 100%, .7);
    border-radius: 8px
}

@media only screen and (min-width:1020px) {
    #popular-bg,
    #rated-bg {
        max-width: 1250px;
        margin: 0 auto
    }
}

#testimonials-bg {
    min-height: 1323px;
    background: #fff url(https://alison.com/html/site/img/testimonial-bg.svg) no-repeat 50%;
    background-size: cover;
    position: relative
}

#testimonials-bg h4 {
    color: #fff
}

#testimonials-bg .users-stats-hp {
    text-align: center;
    position: absolute;
    bottom: 0;
    display: block;
    margin: 0 0 40px;
    width: 100%
}

#testimonials-bg .users-stats-hp .users-figure-hp {
    height: 100px;
    width: 100px;
    background: #aaa;
    background: linear-gradient(180deg, #aaa 0, #f1f2f2);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFAAAAAA", endColorstr="#FFF1F2F2", GradientType=0);
    border: 3px solid #838b8f;
    border-radius: 50%;
    margin: 0 auto 10px
}

#testimonials-bg .users-stats-hp .users-figure-hp .users-figure-hp img {
    width: 100%
}

#testimonials-bg .users-stats-hp h5 {
    font-weight: 700
}

#testimonials-bg .users-stats-hp p {
    color: #2e3942;
    padding: 0 25px;
    font-weight: 700;
    font-size: 16px
}

#testimonials-bg .slick-testimonial {
    width: 280px;
    margin: 150px auto 0
}

#testimonials-bg .slick-testimonial div[id*="slider-counter-"] {
    position: absolute;
    right: 0;
    top: -10px;
    height: 40px;
    color: #fff;
    font-size: 21px;
    font-weight: 300
}

#testimonials-bg .slick-testimonial .slick-track {
    margin: 0 auto
}

#testimonials-bg .slick-testimonial .slick-next,
#testimonials-bg .slick-testimonial .slick-prev {
    font-size: 0;
    line-height: 0;
    position: absolute;
    top: 45%;
    display: block;
    width: 20px;
    height: 20px;
    margin-top: -10px;
    padding: 0;
    cursor: pointer;
    color: transparent;
    border: none;
    outline: none;
    background: transparent
}

#testimonials-bg .slick-testimonial .slick-next:before,
#testimonials-bg .slick-testimonial .slick-prev:before {
    font-family: icomoon;
    font-size: 80px;
    line-height: 1;
    opacity: .75;
    color: #fff;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

#testimonials-bg .slick-testimonial .slick-next {
    right: -10px
}

#testimonials-bg .slick-testimonial .slick-prev {
    left: -60px
}

#testimonials-bg .slick-testimonial .slick-next:before {
    content: "\e93c"
}

#testimonials-bg .slick-testimonial .slick-prev:before {
    content: "\e93b"
}

#testimonials-bg .slick-testimonial .slider-tag {
    display: inline-block;
    margin: 0 auto;
    outline: none;
    position: relative
}

#testimonials-bg .slick-testimonial .slider-tag .user-testimonial {
    position: absolute;
    width: 50px;
    height: 50px;
    top: 37px;
    left: 118px;
    border-radius: 50px;
    background: #fff
}

#testimonials-bg .slick-testimonial .slider-tag .user-testimonial img {
    width: 100%;
    border-radius: 50%
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg {
    background: transparent url(https://alison.com/html/site/img/slide-tag.svg) no-repeat;
    background-size: 222px;
    transition: all .3s ease;
    width: 222px;
    height: 280px;
    color: #2e3942;
    font-size: 10px;
    line-height: 100px;
    margin: 65px 30px 10px;
    padding: 8%;
    position: relative;
    box-shadow: 0 5px 5px 0 rgba(0, 0, 0, .15)
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg p {
    height: 155px;
    padding-top: 40px;
    margin: 0 0 10px
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg h5 {
    color: #2e3942;
    margin: 0;
    width: auto;
    text-align: left
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg .slide-bg-footer {
    display: inline-block;
    position: relative;
    width: 100%;
    margin: 0 auto
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg .slide-bg-footer .flag {
    display: inline-block;
    margin-right: 5px;
    width: 10%
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg .slide-bg-footer .user-country,
#testimonials-bg .slick-testimonial .slider-tag .slide-bg .slide-bg-footer .user-date {
    display: inline-block;
    height: auto;
    padding: 0;
    width: calc(60% - 5px)
}

#testimonials-bg .slick-testimonial .slider-tag .slide-bg .slide-bg-footer .user-date {
    width: 25%;
    text-align: right;
    display: inline-block
}

#testimonials-bg .slick-testimonial .slider-tag.slick-center .user-testimonial {
    width: 60px;
    height: 60px;
    top: 8px;
    left: 114px;
    border: 2px solid #149d4d
}

#testimonials-bg .slick-testimonial .slider-tag.slick-center .slide-bg {
    transform: scale(1.2);
    margin: 70px 30px 10px;
    height: 300px
}

@media only screen and (min-width:768px) {
    #testimonials-bg .slick-testimonial {
        width: 400px
    }
    #testimonials-bg .slick-testimonial .slider-tag .slide-bg {
        background-size: 345px;
        width: 345px;
        font-size: 12px;
        height: 280px
    }
    #testimonials-bg .slick-testimonial .slider-tag .user-testimonial {
        width: 70px;
        height: 70px;
        top: 30px;
        left: 171px
    }
    #testimonials-bg .slick-testimonial .slider-tag.slick-center .user-testimonial {
        width: 80px;
        height: 80px;
        top: 0;
        left: 167px
    }
}

@media only screen and (min-width:1020px) {
    #testimonials-bg .slick-testimonial {
        width: 900px
    }
    #testimonials-bg .slick-testimonial .slider-tag .slide-bg {
        background-size: 268px;
        width: 268px;
        font-size: 12px;
        height: 280px
    }
    #testimonials-bg .slick-testimonial .slider-tag .slide-bg p {
        padding-top: 25px
    }
    #testimonials-bg .slick-testimonial .slider-tag .user-testimonial {
        width: 60px;
        height: 60px;
        top: -40px;
        left: 120px;
        margin: 75px 17px 10px
    }
    #testimonials-bg .slick-testimonial .slider-tag.slick-center .user-testimonial {
        width: 75px;
        height: 75px;
        top: -75px;
        left: 113px;
        margin: 75px 17px 10px
    }
}

#testimonials-bg .slide-tag-courses {
    margin: 40px auto 0;
    width: 350px;
    height: 100px;
    text-align: center;
    color: #fff;
    display: none
}

#testimonials-bg .slide-tag-courses .listed-courses {
    width: 100%;
    height: 60px;
    margin: 0 auto;
    padding: 0 40px
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial {
    width: 100%;
    height: 125px;
    display: none;
    margin: -35px 45px 45px
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header {
    position: relative;
    width: 100%;
    background: #fff;
    box-shadow: 0 5px 5px 0 rgba(0, 0, 0, .15);
    overflow: hidden
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header .info_title {
    margin-top: 40px;
    font-size: 12px;
    color: #0091c7;
    font-weight: 400;
    display: block;
    padding: 10px 10px 0
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header .info_title a {
    color: #0091c7
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header .info_title a:hover {
    text-decoration: underline
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header p {
    font-size: 12px;
    margin: 0 0 5px;
    padding: 10px;
    color: #2e3942
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header:before {
    background: #0091c7;
    content: "";
    height: 75px;
    left: -37px;
    position: absolute;
    top: -37px;
    width: 75px;
    z-index: 2;
    backface-visibility: hidden;
    transform: rotate(45deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2)
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .course-header:after {
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    content: "\e90d";
    color: #fff;
    font-size: 21px;
    left: 7px;
    position: absolute;
    top: 7px;
    z-index: 3
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial .btn.btn-blue {
    font-size: 12px;
    margin-top: 40px;
    width: 100%
}

#testimonials-bg .slide-tag-courses .listed-courses .course-testimonial:first-child {
    display: block;
    width: 100%;
    margin: 0 auto
}

#testimonials-bg .slide-tag-courses .arrow-down {
    width: 0;
    height: 0;
    border-left: 50px solid transparent;
    border-right: 50px solid transparent;
    margin: 0 auto 20px;
    border-top: 50px solid #8bcb58
}

#testimonials-bg .slide-tag-courses.active {
    display: block
}

@media only screen and (min-width:768px) {
    #testimonials-bg .slide-tag-courses {
        width: 350px
    }
}

@media only screen and (min-width:1020px) {
    #testimonials-bg .slide-tag-courses {
        width: 1000px
    }
    #testimonials-bg .slide-tag-courses .listed-courses {
        padding: 0
    }
    #testimonials-bg .slide-tag-courses .listed-courses .course-testimonial {
        width: calc(25% - 95px);
        height: 125px;
        display: inline-block;
        margin: -35px 45px 45px
    }
    #testimonials-bg .slide-tag-courses .listed-courses .course-testimonial:first-child {
        display: inline-block;
        margin: -35px 45px 45px;
        width: calc(25% - 95px)
    }
    #testimonials-bg .slide-tag-courses .arrow-down {
        margin: 0 auto 60px
    }
}

#popular-bg,
#recent-courses,
#suggested-bg {
    background: hsla(0, 0%, 100%, .7);
    border-radius: 4px;
    margin: 0 auto;
    max-width: 1150px;
    padding: 35px 0;
    text-align: center
}

#popular-bg.hp-separator,
#recent-courses.hp-separator,
#suggested-bg.hp-separator {
    background: #f2f5f6;
    margin: 40px 0;
    max-width: 100%;
    padding: 40px 0 20px;
    text-align: center;
    position: relative;
    z-index: 1
}

#popular-bg.hp-separator:after,
#popular-bg.hp-separator:before,
#recent-courses.hp-separator:after,
#recent-courses.hp-separator:before,
#suggested-bg.hp-separator:after,
#suggested-bg.hp-separator:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

#popular-bg.hp-separator:before,
#recent-courses.hp-separator:before,
#suggested-bg.hp-separator:before {
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 0 0
}

#popular-bg.hp-separator:after,
#recent-courses.hp-separator:after,
#suggested-bg.hp-separator:after {
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 0;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 0
}

#popular-bg.hp-separator h4 span,
#recent-courses.hp-separator h4 span,
#suggested-bg.hp-separator h4 span {
    margin-right: 10px
}

#popular-bg.hp-separator .wrapper,
#recent-courses.hp-separator .wrapper,
#suggested-bg.hp-separator .wrapper {
    max-width: 1280px;
    margin: 0 auto
}

#popular-bg.hp-separator .wrapper .course .course-holder,
#recent-courses.hp-separator .wrapper .course .course-holder,
#suggested-bg.hp-separator .wrapper .course .course-holder {
    background: #fff
}

#popular-bg.hp-separator.listing-course .wrapper,
#recent-courses.hp-separator.listing-course .wrapper,
#suggested-bg.hp-separator.listing-course .wrapper {
    max-width: 1150px
}

#hp-separator,
.hp-separator {
    background: #f2f5f6;
    margin: 40px 0;
    padding: 40px 0 20px;
    text-align: center;
    position: relative;
    z-index: 1
}

#hp-separator:after,
#hp-separator:before,
.hp-separator:after,
.hp-separator:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

#hp-separator:before,
.hp-separator:before {
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 0 0
}

#hp-separator:after,
.hp-separator:after {
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 0;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 0
}

#hp-separator h4 span,
.hp-separator h4 span {
    margin-right: 10px
}

#hp-separator .wrapper,
.hp-separator .wrapper {
    max-width: 1280px;
    margin: 0 auto
}

#hp-separator .wrapper .course .course-holder,
.hp-separator .wrapper .course .course-holder {
    background: #fff
}

#hp-separator.listing-course .wrapper,
.hp-separator.listing-course .wrapper {
    max-width: 1150px
}

.slide-buttons {
    display: block
}

.slide-buttons [class^="icon-"] {
    position: absolute;
    top: 69px;
    right: 16px;
    font-size: 24px;
    cursor: pointer;
    transform: rotate(-45deg)
}

.slide-buttons .icon-left-arrow {
    left: 35px;
    right: auto;
    transform: rotate(135deg)
}

@media only screen and (min-width:768px) {
    .slide-buttons {
        display: none
    }
}

.slide-buttons .arrow {
    margin: -20px 0 0 -20px;
    border-right: 2px solid #333;
    border-bottom: 2px solid #333;
    z-index: 999
}

.slide-buttons .arrow,
.slide-buttons .arrow:before {
    width: 20px;
    height: 20px;
    border-left: none;
    border-top: none
}

.slide-buttons .arrow:before {
    top: 50%;
    position: absolute;
    content: "";
    margin: -10px 0 0 -10px;
    border-right: 1px solid #333;
    border-bottom: 1px solid #333;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    animation-name: arrow
}

@keyframes arrow {
    0% {
        opacity: 1
    }
    to {
        opacity: 0;
        transform: translate(-10px, -10px)
    }
}

.homepage-publishers {
    text-align: center;
    min-height: 139px;
    padding: 0 40px 20px;
    background-color: rgba(0, 0, 0, .7);
    position: relative;
    margin-top: -169px
}

.homepage-publishers .slide-buttons [class^="icon-"] {
    top: 130px;
    color: #fff;
    border-right: 2px solid #fff;
    border-bottom: 2px solid #fff
}

.homepage-publishers .slide-buttons [class^="icon-"]:before {
    border-right: 1px solid #fff;
    border-bottom: 1px solid #fff
}

.homepage-publishers h3 {
    text-align: center;
    font-size: 1.125em;
    color: #fff;
    padding: 20px 0;
    margin-bottom: 10px;
    font-weight: 100
}

.homepage-publishers a {
    margin-right: 24px;
    width: 170px;
    display: inline-block;
    height: 40px;
    background-repeat: no-repeat;
    background-size: auto 100%;
    background-position: 50%
}

.homepage-publishers a:first-child {
    background-image: url(https://alison.com/html/site/img/xopenstax.png.pagespeed.ic.88KvjdJin1.webp)
}

.homepage-publishers a:nth-child(2) {
    background-image: url(https://alison.com/html/site/img/xsaylor.png.pagespeed.ic.e6nTjPQHJg.webp)
}

.homepage-publishers a:nth-child(3) {
    background-image: url(https://alison.com/html/site/img/xstanford.png.pagespeed.ic._E2Wjw6YGn.webp);
    width: 99px
}

.homepage-publishers a:nth-child(4) {
    background-image: url(https://alison.com/html/site/img/xmicrosoft.png.pagespeed.ic.kdGzehzi7_.webp)
}

.homepage-publishers a:nth-child(5) {
    background-image: url(https://alison.com/html/site/img/xcambridge.png.pagespeed.ic.nShijESWug.webp);
    width: 120px
}

.homepage-publishers a:nth-child(6) {
    background-image: url(https://alison.com/html/site/img/xgoogle.png.pagespeed.ic.4j_e9h4Uj5.webp);
    width: 91px
}

.homepage-publishers a:nth-child(7) {
    background-image: url(https://alison.com/html/site/img/xcolumbia.png.pagespeed.ic.j5bzjClrc7.webp);
    width: 168px
}

.homepage-publishers a:nth-child(8) {
    background-image: url(https://alison.com/html/site/img/xmit.png.pagespeed.ic.J326YPP8Uj.webp);
    width: 130px
}

.homepage-publishers a img {
    width: 100%
}

@media only screen and (min-width:768px) {
    .homepage-publishers {
        margin-top: 0
    }
    .homepage-publishers a {
        background-size: 100% auto;
        background-position: inherit
    }
}

@media only screen and (min-width:1020px) {
    .homepage-publishers {
        background: rgba(0, 0, 0, .7) url(<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/templates/site/img/hero-triangles.png) no-repeat 0 bottom/auto 80%;
        padding: 0 150px 20px
    }
    .homepage-publishers h3 {
        font-size: 1.6875em
    }
    .homepage-publishers a {
        width: 140px
    }
    .homepage-publishers a:last-child {
        margin-right: 0
    }
}

.our-courses .buttons-container {
    background-color: #e9edf1;
    padding: 28px 40px;
    text-align: center;
    position: relative
}

.our-courses .buttons-container .buttons-container-inner {
    max-width: 1190px;
    margin: 0 auto
}

.our-courses .buttons-container .buttons-container-inner .course-tab {
    width: 146px;
    background-color: #fff;
    text-align: center;
    padding: 20px 0;
    font-size: 14px;
    margin: 0 5px 10px 0;
    cursor: pointer;
    color: #2d3942;
    position: relative;
    display: inline-block;
    transition: all .3s ease
}

.our-courses .buttons-container .buttons-container-inner .course-tab:hover {
    background-color: #0094c9;
    color: #fff
}

.our-courses .buttons-container .buttons-container-inner .course-tab:hover span {
    color: #fff
}

.our-courses .buttons-container .buttons-container-inner .course-tab.active {
    background-color: #0094c9;
    color: #fff
}

.our-courses .buttons-container .buttons-container-inner .course-tab.active span {
    color: #fff
}

.our-courses .buttons-container .buttons-container-inner .course-tab span {
    margin-right: 15px;
    font-size: 16px;
    color: #2d3942;
    transition: all .3s ease
}

.our-courses h4 {
    font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0
}

.our-courses .courses-list {
    background-color: #f2f5f6;
    overflow: hidden
}

.our-courses .courses-list .courses-list-inner {
    max-width: 1240px;
    margin: 0 auto;
    padding-top: 30px;
    text-align: center
}

.our-courses .courses-list .courses-list-inner .course {
    max-width: 260px
}

.our-courses .courses-list .courses-list-inner .course.active {
    width: 100%
}

.our-courses .courses-list .courses-list-inner .course .course-holder {
    background-color: #fff
}

.our-courses .courses-list .courses-list-inner .course .course-holder .holder-top .link-group .icon-group {
    width: 182px
}

.our-courses .courses-list .hp-button {
    width: auto;
    text-align: center;
    margin: 0 0 40px
}

.our-courses .courses-list .hp-button .btn {
    padding: 10px 35px;
    margin: 0 0 40px
}

@media only screen and (min-width:768px) {
    .our-courses .buttons-container {
        background-color: #e9edf1;
        padding: 28px 20px;
        height: 120px
    }
    .our-courses .buttons-container.four-button .buttons-container-inner .course-tab {
        width: calc(25% - 5px)
    }
    .our-courses .buttons-container .buttons-container-inner .course-tab {
        width: calc(20% - 5px);
        float: left;
        display: block;
        margin: 0 5px 0 0
    }
    .our-courses .buttons-container .buttons-container-inner .course-tab.active:after {
        top: 100%;
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(136, 183, 213, 0);
        border-top-color: #0094c9;
        border-width: 10px;
        margin-left: -10px
    }
    .our-courses .courses-list .courses-list-inner .course {
        max-width: none
    }
}

@media only screen and (min-width:1020px) {
    .our-courses .buttons-container {
        padding: 28px 0
    }
    .our-courses .buttons-container .buttons-container-inner .course-tab {
        padding: 20px 10px;
        font-size: 16px
    }
    .our-courses .buttons-container .buttons-container-inner .course-tab span {
        font-size: 22px
    }
    .our-courses .courses-list {
        background-color: #f2f5f6
    }
    .our-courses .courses-list .courses-list-inner {
        max-width: 1240px;
        margin: 0 auto;
        padding-top: 30px;
        text-align: center
    }
    .our-courses .courses-list .courses-list-inner .course {
        width: 228px;
        margin: 0 4px
    }
    .our-courses .courses-list .courses-list-inner .course .course-holder {
        width: 228px
    }
}

.testimonials-section {
    background: #fff;
    padding: 50px 0
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider {
    max-width: 300px;
    margin: 0 auto
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider:after {
    content: "";
    background: linear-gradient(90deg, #fff 0, hsla(0, 0%, 100%, .8) 10%, hsla(0, 0%, 100%, 0) 17%, hsla(0, 0%, 100%, 0) 83%, hsla(0, 0%, 100%, .8) 90%, #fff);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#ffffff", endColorstr="#ffffff", GradientType=1);
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: calc(100% + 1px)
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item {
    float: left;
    width: 200px;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    margin: 30px 10px 30px 0;
    box-shadow: 0 2px 5px 0 rgba(50, 50, 50, .3);
    transition: all .5s ease
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item.slick-active {
    margin-top: 20px;
    padding-bottom: 20px;
    margin-bottom: 20px
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .img-wrapper {
    padding-top: 40px;
    background: #26a0d7;
    background: radial-gradient(ellipse at center, #26a0d7 0, #00679d 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#26a0d7", endColorstr="#00679d", GradientType=1);
    position: relative;
    min-height: 100px
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .img-wrapper .img-wrapper-inner {
    width: 100px;
    height: 100px;
    overflow: hidden;
    border-radius: 100%;
    border: 3px solid #fff;
    margin: 0 auto;
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translate(-50%, 40%)
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .img-wrapper .img-wrapper-inner img {
    max-width: 100%
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item h4 {
    color: #2d3942;
    text-align: center;
    padding: 82px 0 25px;
    margin: 0;
    font-size: 1.0625em
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .flag {
    text-align: center;
    margin-bottom: 20px
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .flag img {
    display: inline
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .slide-text {
    display: none
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text h5 {
    color: #2d3942;
    font: 300 18px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 20px 0;
    text-align: center
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text .user-current-text p {
    font-style: italic;
    color: #2d3942;
    text-align: center
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text .testimonial-navigation {
    position: absolute;
    bottom: -20px;
    left: calc(50% - 43px)
}

.testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text [class^="icon-"] {
    font-weight: 700;
    color: #0094c9;
    border: 2px solid #0094c9;
    border-radius: 100%;
    padding: 5px;
    cursor: pointer;
    margin-right: 20px
}

@media only screen and (min-width:768px) {
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider {
        max-width: 350px;
        float: left;
        margin: 0 50px 0 0
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item {
        width: 250px
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item h4 {
        font-size: 1.375em
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-slider .slider-item .img-wrapper .img-wrapper-inner {
        width: 120px;
        height: 120px
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text .testimonial-navigation {
        position: absolute;
        bottom: 40px;
        left: 427px
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text h5 {
        font-size: 1.625em;
        margin: 0 0 30px;
        text-align: left
    }
    .testimonials-section .testimonials-section-inner .user-testimonial .user-testimonial-text .user-current-text p {
        text-align: left
    }
}

.products {
    background: #f1f2f2;
    background: linear-gradient(180deg, #f1f2f2 0, hsla(0, 0%, 83%, .5));
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFF1F2F2", endColorstr="#80D4D4D4", GradientType=0)
}

.footer-products {
    padding-bottom: 55px;
    margin-bottom: -50px;
    position: relative
}

.footer-products>.wrapper {
    margin: 20px auto 0;
    padding-top: 20px
}

.footer-products .slick-slider-middle {
    text-align: center
}

.footer-products .slick-slider-middle li {
    outline: none
}

.footer-products .slick-slider-middle .middle-content {
    margin-top: 20px
}

.footer-products .slick-slider-middle .middle-content h4 {
    color: #5d666d;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 5px;
    text-align: center
}

.footer-products .slick-slider-middle .image-main {
    display: block;
    margin: 0 auto 20px;
    max-width: 425px;
    width: 100%
}

.footer-products .slick-slider-middle img {
    display: inline-block;
    margin-right: 10px;
    width: 80px
}

.footer-products .slick-slider-middle .slick-dots {
    margin: 30px 0 0;
    text-align: center
}

.footer-products .slick-slider-middle .slick-dots li {
    display: inline-block;
    margin: 5px
}

.footer-products .slick-slider-middle .slick-dots li button {
    background: none;
    border: 1px solid #5d666d;
    border-radius: 50%;
    display: block;
    height: 15px;
    padding: 0;
    text-indent: -9999px;
    width: 15px
}

.footer-products .slick-slider-middle .slick-dots li.slick-active button {
    background: #5d666d
}

.footer-products .slick-slider-middle .slick-list {
    margin: 0 auto
}

.footer-products .slick-slider-middle .slick-list p {
    color: #5d666d;
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 auto;
    max-width: 700px;
    padding: 25px 0;
    text-align: center
}

@media only screen and (min-width:768px) {
    .footer-products .angle-bottom .angle {
        border-top: 40px solid transparent
    }
}

@media only screen and (min-width:1020px) {
    .footer-products .slick-slider-middle img {
        display: inline-block;
        margin-right: 23px;
        width: 110px
    }
    .footer-products .slick-slider-middle .image-main {
        float: left;
        width: 42%
    }
    .footer-products .slick-slider-middle .middle-content {
        float: right;
        padding: 0 65px;
        width: 58%
    }
    .footer-products .slick-slider-middle .middle-content h4 {
        margin-left: 25px;
        text-align: left
    }
    .footer-products .slick-slider-middle .slick-list p {
        font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        text-align: justify;
        padding: 25px
    }
    .footer-products .angle-bottom {
        top: -50px
    }
    .footer-products .angle-bottom .angle {
        border-top: 40px solid transparent
    }
}

#congratulations .banner .banner-align {
    padding: 45px 10px 0
}

#congratulations .banner .banner-align .right h1 {
    margin: 0
}

#congratulations .banner .banner-align .grid {
    position: relative
}

#congratulations .banner .banner-align h2 {
    opacity: .8;
    font-size: 1.25em
}

#congratulations .banner .banner-align .wrapper {
    padding: 0
}

#congratulations .banner .banner-align .circle-points {
    border: 2px solid hsla(0, 0%, 100%, .4);
    border-radius: 50%;
    width: 110px;
    height: 110px;
    padding: 5px;
    margin-top: -10px
}

#congratulations .banner .banner-align .circle-points div {
    border-radius: 50%;
    border: 3px solid #fff;
    height: 100%
}

#congratulations .banner .banner-align .circle-points div h1 {
    font-weight: 400;
    text-align: center;
    margin-top: 20px
}

#congratulations .banner .banner-align .circle-points div p {
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#congratulations .banner .banner-align h1 {
    font-weight: 300
}

#congratulations .banner .banner-align .social-media {
    padding: 20px 0 50px
}

#congratulations .banner .banner-align .social-media h6 {
    opacity: .9
}

#congratulations .banner .banner-align .social-media .social-buttons {
    margin-top: 15px
}

#congratulations .banner .banner-align .social-media .social-buttons a {
    font-size: 1.875em
}

#congratulations .banner .banner-align .social-media .social-buttons a:hover {
    text-decoration: none
}

#congratulations .banner .rocket {
    margin-top: 40px;
    width: 200px
}

#congratulations .radial-progress-100-congratulations {
    margin: 0 auto 20px;
    width: 100px;
    height: 100px;
    background-color: transparent;
    border-radius: 50%
}

#congratulations .radial-progress-100-congratulations .circle {
    position: relative
}

#congratulations .radial-progress-100-congratulations .circle .line {
    background: none;
    border-radius: 50%;
    width: 94px;
    height: 94px;
    border: 3px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 3px;
    left: 3px
}

#congratulations .radial-progress-100-congratulations .circle .fill,
#congratulations .radial-progress-100-congratulations .circle .mask,
#congratulations .radial-progress-100-congratulations .circle .shadow {
    width: 100px;
    height: 100px;
    position: absolute;
    border-radius: 50%
}

#congratulations .radial-progress-100-congratulations .circle .fill,
#congratulations .radial-progress-100-congratulations .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

#congratulations .radial-progress-100-congratulations .circle .mask {
    clip: rect(0, 100px, 100px, 50px)
}

#congratulations .radial-progress-100-congratulations .circle .mask .fill {
    clip: rect(0, 50px, 100px, 0);
    background: none;
    border: 8px solid #fff
}

#congratulations .radial-progress-100-congratulations .inset {
    width: 92px;
    height: 92px;
    position: absolute;
    margin-left: 4px;
    margin-top: 4px;
    background: none;
    border-radius: 50%
}

#congratulations .radial-progress-100-congratulations .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px;
    text-align: center
}

#congratulations .radial-progress-100-congratulations .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.875em!important;
    color: #fff
}

#congratulations .radial-progress-100-congratulations .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #fff
}

#congratulations .radial-progress-100-congratulations[data-progress="0"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="0"] .circle .fill.fix,
#congratulations .radial-progress-100-congratulations[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="1"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="1"] .circle .fill.fix,
#congratulations .radial-progress-100-congratulations[data-progress="2"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="3"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="4"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="5"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="6"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="7"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="8"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="9"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="10"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="11"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="12"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="13"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="14"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="15"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="16"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="17"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="18"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="19"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="20"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="21"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="22"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="23"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="24"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="25"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="26"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="27"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="28"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="29"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="30"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="31"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="32"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="33"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="34"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="35"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="36"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="37"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="38"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="39"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="40"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="41"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="42"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="43"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="44"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="45"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="46"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="47"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="48"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="49"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="50"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="51"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="52"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="53"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="54"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="55"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="56"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="57"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="58"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="59"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="60"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="61"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="62"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="63"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="64"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="65"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="66"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="67"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="68"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="69"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="70"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="71"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="72"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="73"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="74"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="75"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="76"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="77"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="78"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="79"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="80"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="81"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="82"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="83"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="84"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="85"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="86"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="87"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="88"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="89"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="90"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="91"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="92"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="93"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="94"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="95"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="96"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="97"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="98"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="99"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

#congratulations .radial-progress-100-congratulations[data-progress="100"] .circle .fill,
#congratulations .radial-progress-100-congratulations[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

#congratulations .radial-progress-100-congratulations[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

#congratulations .left .course-text {
    font-weight: 400
}

#congratulations .area-container h3 {
    color: #2d3942;
    margin: 0 0 10px
}

#congratulations .area-container p {
    color: #2d3942;
    margin: 0 0 30px
}

#congratulations .area-container .available-products {
    margin: 0 auto;
    max-width: 800px;
    padding: 10px 0;
    text-align: center
}

#congratulations .area-container .available-products li {
    display: inline-block;
    width: calc(100%/ 3 - 5px)
}

#congratulations .area-container .available-products li a {
    color: #2d3942;
    display: block;
    padding: 20px 15px;
    width: 100%
}

#congratulations .area-container .available-products li a.checked {
    background: #68aadd;
    color: #fff
}

#congratulations .area-container .available-products li a.checked:hover {
    color: #2d3942
}

#congratulations .area-container .available-products li a span {
    display: block;
    font-weight: 700;
    padding: 5px 0
}

#congratulations .area-container .available-products li a img {
    display: block;
    margin: 0 auto;
    max-width: 200px
}

#congratulations .area-container .available-products li a:hover {
    background: #e8edf1
}

#congratulations .area-container .area {
    margin-top: 50px
}

#congratulations .area-container .area .angle-area {
    position: relative;
    z-index: 1
}

#congratulations .area-container .area .angle-area:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%;
    background: #e8edf1;
    height: 50px;
    width: 100%
}

#congratulations .area-container .area .angle-area-flipped {
    position: relative;
    z-index: 1
}

#congratulations .area-container .area .angle-area-flipped:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #e8edf1;
    height: 16px;
    width: 100%
}

#congratulations .area-container .area:first-child {
    margin: 0 0 150px
}

#congratulations .area-container .area:nth-child(2) {
    background: #e8edf1;
    position: relative
}

#congratulations .area-container .area:nth-child(3) .wrapper {
    padding: 25px
}

#congratulations .area-container .area:nth-child(3) .wrapper h3 {
    margin: 0 auto;
    padding: 25px 0;
    text-align: center
}

#congratulations .area-container .area:nth-child(3) .wrapper .row img {
    width: 120px
}

#congratulations .area-container .area:nth-child(3) .wrapper .row p {
    font-weight: 400;
    color: #838b8f;
    width: 75%;
    margin: 25px auto
}

#congratulations .area-container .area:nth-child(3) .wrapper .row .content:not(:first-child) {
    margin-top: 50px
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths {
    margin-bottom: 50px
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row {
    background: #e8edf1;
    margin-bottom: 20px
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .img-container {
    text-align: center
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .img-container img {
    margin-top: 10px;
    height: 100px;
    border: 1px solid #fff
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .content-container {
    text-align: center;
    padding: 20px 10px
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .content-container p {
    color: #465159;
    font: 300 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .content-container h5 {
    margin: 0;
    font-weight: 500;
    color: #465159
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container {
    text-align: center
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container p {
    border-top: 3px solid #fff;
    padding-top: 10px;
    color: #0091c7;
    font: 300 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container h1 {
    font-weight: 500;
    margin: 10px 0;
    color: #465159
}

#congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row p {
    margin: 0;
    width: auto;
    color: #2d3942
}

#congratulations .area-container .btn-points {
    margin-top: 30px;
    font-size: .9375em
}

#congratulations .area-container .info-box-2 {
    margin-top: 50px
}

#congratulations .area-container .info-box-2 .content {
    height: 200px;
    position: relative
}

#congratulations .area-container .info-box-2 .content .stars-container {
    position: absolute;
    top: calc(50% + 40px);
    width: 100%;
    text-align: center;
    transform: translateY(-50%)
}

#congratulations .area-container .info-box-2 .content .stars-container [class^="icon-"] {
    color: #0091c7;
    font-size: 2.8125em
}

@media only screen and (min-width:768px) {
    #congratulations .info-box-2 {
        margin: 50px
    }
    #congratulations .banner .banner-align .circle-points div h1 {
        margin-top: 10px
    }
    #congratulations .area-container .area .angle-area-flipped:after {
        height: 50px
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row {
        height: 100px
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .col-sm-2 {
        padding: 0
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .img-container {
        text-align: left
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .img-container img {
        margin: 0;
        border: none;
        border-right: 3px solid #fff
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .content-container {
        text-align: left;
        padding: 10px
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container {
        height: 100%;
        border-left: 3px solid #fff
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container p {
        border-top: none
    }
    #congratulations .area-container .area:nth-child(4) .wrapper .learning-paths .row .points-container h1 {
        margin-top: 20px;
        font-size: 1.5em
    }
}

@media only screen and (min-width:1020px) {
    #congratulations .banner .rocket {
        margin-top: 0;
        width: 250px;
        position: absolute;
        left: -30px;
        bottom: 0
    }
    #congratulations .banner .banner-align p {
        font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        opacity: .8
    }
    #congratulations .banner .banner-align .circle-points div h1 {
        font-size: 1.875em;
        margin-top: 20px
    }
    #congratulations .banner .banner-align .social-media {
        padding-top: 50px
    }
    #congratulations .banner .banner-align .social-media .social-buttons a {
        font-size: 2.5em
    }
    #congratulations .banner .banner-align h2 {
        font: 200 1.625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
    }
    #congratulations .banner .banner-align .left {
        margin: 100px 0 0 50px
    }
    #congratulations .banner .banner-align .left h1,
    #congratulations .banner .banner-align .left h2 {
        text-align: left
    }
}

@media only screen and (min-width:1240px) {
    #congratulations .banner .rocket {
        width: 300px;
        position: absolute;
        left: -40px
    }
    #congratulations .banner .banner-align .left {
        margin-left: 0
    }
}

@media only screen and (min-width:1500px) {
    #congratulations .banner .rocket {
        width: 350px;
        position: absolute;
        left: -60px;
        bottom: 0
    }
}

#course-landing #course-plan .mCS-3d.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

#course-landing #course-plan .mCS-3d.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

#course-landing h5 {
    color: #2e3942;
    margin: 0 30px;
    text-align: left
}

#course-landing h5 [class^="icon"] {
    margin-right: 10px
}

#course-landing .breadcrumb-wrapper {
    margin-top: 100px;
    display: none;
    padding: 0
}

#course-landing .icon-checked {
    color: #38ac69
}

#course-landing .course-landing-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 0;
    display: none;
    background: url(https://alison.com/html/site/img/xbanner-bg.jpg.pagespeed.ic.PCj3SvpWu_.webp) no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    color: #fff;
    height: 275px
}

#course-landing .social-buttons {
    margin: 15px 0 25px;
    text-align: center
}

#course-landing .social-buttons a {
    display: inline-block;
    font-size: 30px;
    margin: 0 10px
}

#course-landing .course-landing-wrapper {
    margin: 0 auto;
    max-width: 1150px;
    padding: 0;
    position: relative
}

#course-landing .course-landing-wrapper .content-wrapper {
    box-shadow: none;
    background: #fff
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-pane .detailed-info {
    float: none
}

#course-landing .course-landing-wrapper .content-wrapper #course-header {
    z-index: 2;
    background: #2c3942;
    background: linear-gradient(180deg, #2c3942 0, #231f1f);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF2C3942", endColorstr="#FF231F1F", GradientType=0)
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .student-amount {
    margin: 0 0 0 20px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .student-amount span {
    color: #fff
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane {
    color: #fff!important
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .free i,
#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .free p {
    color: #ffd200
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .publisher i,
#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .publisher p {
    color: #fff
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .publisher a:hover i,
#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features .publisher a:hover p {
    color: #0094c9
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li {
    width: 50%;
    float: left
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li.publisher,
#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li:first-child {
    width: 100%
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li i {
    float: left;
    margin-right: 13px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li i.star {
    margin-right: 4px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .features li i.blue {
    color: #0094c9
}

#course-landing .course-landing-wrapper .content-wrapper #course-header h1 {
    color: #fff;
    font: 300 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-top: 30px;
    padding: 20px 20px 0
}

#course-landing .course-landing-wrapper .content-wrapper #course-header h1 [class^="icon"] {
    margin-right: 10px;
    font-size: 1.4375em;
    top: 5px;
    position: relative
}

#course-landing .course-landing-wrapper .content-wrapper #course-header h1 .left {
    display: inline-block;
    vertical-align: middle
}

#course-landing .course-landing-wrapper .content-wrapper #course-header h1 .right {
    color: #f29b2f;
    display: inline-block;
    margin: 10px 0;
    vertical-align: middle
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .certificate-img {
    position: absolute;
    right: 20px;
    top: 25px;
    width: 55px;
    display: none
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .moving-btn {
    margin: 10px auto 0;
    width: 100%;
    max-width: 180px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .moving-btn a {
    border-radius: 3px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .moving-btn .section-shadow {
    top: 0
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image {
    margin: 30px auto;
    position: relative;
    overflow: hidden;
    display: block;
    width: 253px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image .section-shadow {
    top: -6px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image .lrg-btn {
    margin: 0 auto
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image img {
    border: 1px solid #465159
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image.diploma:before {
    background: #0091c7;
    content: "";
    backface-visibility: hidden;
    transform: rotate(45deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    height: 130px;
    left: -65px;
    position: absolute;
    top: -65px;
    width: 130px;
    z-index: 2
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .image.diploma:after {
    font-family: icomoon!important;
    speak: none;
    font-style: normal;
    font-weight: 400;
    font-variant: normal;
    text-transform: none;
    content: "\e90d";
    color: #fff;
    font-size: 30px;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    left: 15px;
    position: absolute;
    top: 15px;
    z-index: 3
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info {
    display: inline-block;
    margin-right: 0;
    width: 100%;
    vertical-align: top;
    position: relative
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar {
    margin: 0 10px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title {
    cursor: pointer;
    display: block;
    float: left;
    height: 50px;
    margin-right: 0;
    width: 27.5%;
    font-weight: 100;
    border-bottom: 1px solid #0094c9;
    color: #fff;
    border-collapse: collapse;
    text-align: center
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title div {
    line-height: 50px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title div [class^="icon"] {
    font-size: 1.3125em;
    top: 3px;
    position: relative
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title div .icon-certificate {
    font-weight: 600
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title div .text {
    background: transparent;
    color: #fff;
    font: 300 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-left: 10px;
    display: none
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title.active {
    width: 45%;
    border: 1px solid #0094c9;
    border-bottom: 1px solid transparent;
    position: relative
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title.active i {
    color: #0094c9
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title.active div .text {
    display: inline-block
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title:first-child.active {
    border: 1px solid #0094c9;
    border-left: 1px solid transparent;
    border-bottom: 1px solid transparent
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title:nth-child(3).active {
    border: 1px solid #0094c9;
    border-right: 1px solid transparent;
    border-bottom: 1px solid transparent
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper {
    padding: 0
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab {
    display: none;
    padding: 10px 0
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder {
    max-width: 1300px;
    height: 250px;
    overflow-y: auto;
    overflow-x: hidden
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder p {
    margin: 15px;
    text-align: left;
    color: #fff
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder ul {
    list-style: disc;
    padding-left: 40px
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder ul li {
    font-weight: 400;
    color: #fff;
    font-size: .875em;
    line-height: 1.875em
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab.active {
    display: block
}

#course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .title-review-sec {
    color: #2e3942;
    margin: 40px 0 20px;
    text-align: center
}

#course-landing .course-landing-wrapper .content-wrapper .course-landing-ad {
    margin-bottom: 0
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area {
    width: 100%;
    font-size: 12px
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area .scrollbar {
    height: 450px;
    margin: 20px 10px 20px 20px;
    overflow-y: auto;
    overflow-x: hidden
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area .scrollbar>div {
    padding-right: 20px
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul {
    height: 500px;
    overflow-y: auto;
    overflow-x: hidden
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li {
    color: #2e3942;
    width: 100%;
    margin-bottom: 3px;
    text-align: left;
    padding: 20px
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li.active {
    color: #fff;
    background-color: #00b6fa
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li .user-testimonial {
    width: 60px;
    height: 60px;
    border-radius: 50px;
    margin: 20px 20px 20px 0;
    padding: 5px;
    float: left;
    background-size: 60px
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li .user-testimonial .inner-circle {
    width: 50px;
    height: 50px;
    border-radius: 50px;
    background: #fff;
    border: 2px solid #5d666d
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li .user-testimonial .inner-circle img {
    border: 4px solid hsla(0, 0%, 100%, .3);
    border-radius: 50%;
    margin: 0 auto;
    max-width: 150px;
    max-height: 150px;
    padding: 5px
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li i {
    float: right
}

#course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area .lrg-btn {
    display: inline-block;
    padding: 10px 30px
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags {
    width: 100%
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags {
    background: #231f1f;
    background: linear-gradient(180deg, #231f1f 0, #2c353d);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF231F1F", endColorstr="#FF2C353D", GradientType=0)
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags .listed-tags {
    font-size: 12px;
    color: #2e3942;
    text-align: left;
    padding: 10px 30px 12px
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags .listed-tags i {
    float: left;
    font-size: 20px;
    color: #fff;
    padding: 7px 15px 0
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags .listed-tags ul li {
    background: #5d666c;
    padding: 3px 10px;
    margin: 3px 6px 1px;
    display: inline-block;
    border-radius: 50px;
    text-align: center;
    color: #fff;
    white-space: nowrap
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags .listed-tags ul li:hover {
    background: #00bafc
}

#course-landing .course-landing-wrapper .content-wrapper .course-header-tags #tags .listed-tags ul li a {
    color: #fff
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator {
    background: #f2f5f6;
    color: #fff;
    padding-bottom: 50px;
    text-align: center
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan {
    padding: 20px 0
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan h6 {
    display: none
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav {
    width: 100%;
    margin: 0
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing {
    display: block;
    background: transparent;
    margin-bottom: 20px;
    padding: 0 10px;
    font-size: 12px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing .section-shadow {
    width: calc(100% - 15px)
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul {
    overflow-y: auto;
    overflow-x: hidden
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li {
    color: #2e3942;
    background-color: #fff;
    width: 100%;
    margin-bottom: 1px;
    text-align: left
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header {
    color: #2e3942;
    background-color: #fff;
    position: relative;
    cursor: pointer;
    line-height: 23px;
    padding: 20px 10px 16px;
    font-weight: 300
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .v-pname {
    font-weight: 400;
    display: inline;
    width: calc(100% - 50px)
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header i.v-pname-icon {
    font-size: 1.75em;
    margin-right: 10px;
    float: left
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons {
    float: right;
    width: 48px;
    text-align: right;
    position: absolute;
    right: 10px;
    top: 23px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons .down-arrow {
    transition: all .3s ease
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons i {
    font-size: 19px;
    transition: all .25s ease-in-out
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons i.icon-right-arrow {
    font-size: 18px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons label {
    font-size: 18px;
    line-height: 22px;
    position: absolute;
    height: 100%;
    right: 50px;
    top: 0;
    padding-top: 20px;
    text-decoration: none;
    width: 55px;
    text-align: center;
    color: #fff;
    background: #0094c9;
    display: none
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.label {
    cursor: inherit;
    color: #fff;
    background: #5d666d
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.label:before {
    background: #d78
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.scorm {
    padding: 20px 40px 20px 95px;
    background: #e2e5e7;
    color: #2e3942
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.scorm.assessment {
    padding: 20px 10px 20px 20px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.scorm .v-pname {
    width: calc(100% - 100px)
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.scorm .v-pname .module-number {
    display: inline-block;
    text-align: center;
    position: absolute;
    height: 100%;
    top: 0;
    left: 0;
    width: 67px;
    padding: 12px 0 0;
    border-right: 1px solid #fff;
    background: #f0f1f2
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.resource {
    padding: 11px 10px 11px 25px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.resource .btn-resource {
    margin-top: 20px;
    display: block
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content {
    display: none;
    height: auto;
    background: #f2f5f6
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li {
    color: #2e3942;
    background-color: #fff;
    width: 100%;
    text-align: left;
    float: right;
    cursor: pointer;
    border-bottom: 1px solid #cacfd2
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li.more-item {
    background: #e2e5e7;
    padding: 20px 10px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li.more-item .more {
    padding: 0 40px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li.more-item .more .morelink {
    display: inline-block;
    padding: 0
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li:hover span.v-pcontent {
    text-decoration: underline
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li .v-pcontent {
    padding-left: 40px;
    max-width: 80%;
    display: inline-block
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li .icons {
    float: right;
    width: 48px;
    text-align: right
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li .icons i {
    display: inline-block;
    font-size: 19px;
    margin-left: 3px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li a,
#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content li a:visited {
    color: #5d666d;
    padding: 20px 10px;
    display: block
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content.is-expanded {
    display: block
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li.active .v-pane-header.scorm .module-number,
#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li:hover .v-pane-header.scorm .module-number {
    background: #0094c9;
    color: #fff
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing,
#course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing.active {
    display: none
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator:after {
    background: #fff;
    bottom: 0;
    height: 70px;
    width: 100%
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator .our-company {
    display: inline-block;
    padding: 0 50px
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator .our-company p {
    font-weight: 300
}

#course-landing .course-landing-wrapper .content-wrapper .landing-separator .our-company span {
    font-weight: 400;
    font-size: 1.125em
}

#course-landing .course-landing-wrapper .content-wrapper .header-bottom {
    color: #465159;
    margin: 0 auto;
    width: 180px
}

#course-landing .course-landing-wrapper .content-wrapper .header-bottom div .lrg-btn {
    margin: 0 auto
}

#course-landing #modalAddWpm .modal-header {
    background-color: #0094c9
}

#course-landing #modalAddWpm .warning-outer {
    padding: 10px 10px 0
}

#course-landing #modalAddWpm .message.warning {
    width: 100%;
    padding: 22px 17px 7px 90px;
    opacity: 1!important;
    display: block!important;
    min-height: 64px;
    margin-top: 0
}

#course-landing #modalAddWpm .modal-body p {
    margin-bottom: 14px
}

#course-landing #modalAddWpm .modal-body table {
    margin: 0 auto 30px
}

#course-landing #modalAddWpm .modal-body table tr {
    border-bottom: 1px solid #aaa
}

#course-landing #modalAddWpm .modal-body table th {
    text-align: left;
    padding: 9px 15px 10px 10px;
    font-weight: 400;
    font-size: 18px;
    background: #333;
    color: #fff
}

#course-landing #modalAddWpm .modal-body table td {
    padding: 8px 15px 8px 10px;
    text-align: center
}

#course-landing #modalAddWpm .modal-body table td:first-child {
    text-align: left
}

#course-landing #modalAddWpm .modal-body table td.type-label {
    cursor: pointer
}

@media only screen and (min-width:768px) {
    #course-landing .course-landing-bg {
        display: block
    }
    #course-landing .breadcrumb-wrapper {
        margin-top: 100px;
        display: block
    }
    #course-landing .course-landing-wrapper {
        margin: 0 auto 100px;
        max-width: 1150px;
        box-shadow: 0 0 3px 0 #585858
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header {
        background-color: #5d666d
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .student-amount {
        margin: 0 0 0 20px;
        position: absolute;
        right: 30px;
        top: 25px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .student-amount span {
        color: #fff
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane {
        display: block
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .course-header-pane .detailed-info {
        float: left
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header h1 {
        padding: 15px 90px 15px 30px;
        margin: 0;
        line-height: 32px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header h1 .left {
        width: calc(100% - 137px)
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .certificate-img {
        display: block
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .moving-btn {
        margin: 30px 0 20px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .moving-btn .section-shadow {
        top: 0;
        width: 180px;
        height: 30px;
        margin: 0 auto
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .image {
        margin: 0;
        position: relative;
        overflow: hidden;
        display: inline-block;
        width: 300px;
        padding-bottom: 20px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .image.diploma:after,
    #course-landing .course-landing-wrapper .content-wrapper #course-header .image.diploma:before {
        display: none
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .course-modules {
        width: calc(50% - 35px)
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .course-modules .modules-header h4 {
        margin: 0;
        line-height: 26px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .course-modules ul .module-row .topics-tree ul {
        padding-right: 60px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info {
        margin-right: 20px;
        width: calc(100% - 346px);
        margin-left: 20px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar {
        margin: 0
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title {
        width: 33%
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title div .text {
        font-size: 1.0625em;
        display: inline-block
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .tab-navbar .tab-title.active {
        width: 33%
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder {
        height: 220px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info .wrapper .tab-content .tab .tab-holder p {
        margin: 15px 15px 0 0;
        font-size: .875em;
        line-height: 1.875em
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan {
        padding-top: 30px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan h6 {
        color: #5d666d;
        font-size: 14px;
        font-weight: 300;
        margin-bottom: 5px;
        display: block;
        text-align: right;
        margin-right: 15px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan h6 span {
        margin-left: 10px;
        color: #464c51
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav {
        margin: 0 30px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing {
        display: block;
        background: transparent;
        width: calc(100% - 40px);
        padding-left: 0;
        font-size: 14px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing>ul {
        max-height: 1500px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul {
        overflow-y: auto;
        overflow-x: hidden
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li {
        color: #2e3942;
        background-color: #fff;
        width: calc(100% - 15px);
        margin-bottom: 1px;
        text-align: left
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li.active .scorm {
        border-bottom: 1px solid #fff
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li.down .down-arrow {
        display: inline-block;
        height: 22px;
        transform: rotate(180deg)
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header {
        color: #2e3942;
        position: relative;
        background-color: #fff
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons {
        width: 57px;
        position: static;
        top: auto;
        left: auto
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons label {
        display: inline
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons i {
        font-size: 22px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header .icons i.icon-right-arrow {
        font-size: 21px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.scorm {
        padding: 20px 10px 20px 95px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-content {
        display: none
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li:last-child {
        margin-bottom: 0
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing {
        margin: 0 10px 20px;
        background: transparent;
        width: calc(60% - 70px);
        float: left;
        font-size: 14px;
        display: none
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing .module-title {
        color: #0094c9;
        background: #fff;
        width: 100%;
        margin-bottom: 3px;
        text-align: left;
        padding: 20px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing .module-title i {
        float: right;
        transform: rotate(90deg)
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing .module-title div {
        color: #748089;
        font-size: .9375em;
        margin-top: 10px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul {
        max-height: 438px;
        overflow-y: auto;
        overflow-x: hidden
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li {
        color: #465159;
        background: #fff;
        width: calc(100% - 15px);
        margin-bottom: 3px;
        text-align: left;
        cursor: pointer
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li a {
        color: #465159;
        padding: 20px;
        display: block;
        transition: color 0s ease
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li a:visited {
        color: #465159
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li a:hover {
        color: #fff
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li a .icon-checked {
        color: #38ac69
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li .icons {
        float: right;
        width: 60px;
        text-align: right
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li .icons i {
        display: inline-block;
        font-size: 22px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li div {
        width: calc(100% - 65px);
        display: inline-block
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li:hover {
        color: #fff;
        background-color: #0094c9
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li:hover .icons [class*="icon"] {
        color: #fff
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing ul li:last-child {
        margin-bottom: 0
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .topic-listing.active {
        display: inline-block
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .section-shadow {
        width: calc(100% - 15px)
    }
    #course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area,
    #course-landing .course-landing-wrapper .content-wrapper #reviews-rates .reviews-area ul li p {
        font-size: 14px
    }
}

@media only screen and (min-width:1020px) {
    #course-landing .course-landing-bg {
        display: block
    }
    #course-landing .course-landing-wrapper {
        box-shadow: 0 0 3px 0 #585858
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header h1 {
        font-size: 1.25em
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header h1 .left {
        width: calc(100% - 142px)
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header h1 .right {
        font-size: 17px
    }
    #course-landing .course-landing-wrapper .content-wrapper #course-header .detailed-info {
        margin: 0 30px 0 0;
        width: calc(100% - 365px);
        padding: 30px 30px 0;
        background: #231f1f;
        background: linear-gradient(180deg, #231f1f 0, #2c353d);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FF231F1F", endColorstr="#FF2C353D", GradientType=0)
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan h6 {
        color: #5d666d;
        font-size: 14px;
        margin-bottom: 5px;
        display: block;
        text-align: right;
        margin-right: 15px
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan h6 span {
        margin-left: 10px;
        font-weight: 600;
        color: #464c51
    }
    #course-landing .course-landing-wrapper .content-wrapper .landing-separator #course-plan .course-nav .module-listing ul li .v-pane-header.resource .btn-resource {
        margin-left: 20px;
        margin-top: 0;
        display: inline-block
    }
}

@media only screen and (min-width:1240px) {
    #course-landing #course-description {
        padding: 0
    }
}

#course-categories h5 {
    font-size: 1.125em;
    text-transform: capitalize
}

#course-categories .search-area {
    display: none
}

#course-categories .search-area h5 span {
    margin-right: 10px
}

#course-categories .search-area ul {
    list-style: none;
    padding: 30px 20px 70px
}

#course-categories .search-area ul li {
    text-align: center
}

#course-categories .search-area ul li:not(.empty-search) {
    display: inline-block;
    margin-right: 20px;
    padding: 10px 20px;
    background: #0094c9;
    border-radius: 30px;
    margin-bottom: 10px
}

#course-categories .search-area ul li:not(.empty-search):hover {
    opacity: .9
}

#course-categories .search-area ul li:not(.empty-search) a {
    color: #fff
}

#course-categories .clear-filter {
    position: absolute;
    right: 20px;
    top: 33px;
    padding: 10px;
    background: #2d3942;
    border-radius: 8px;
    color: #fff;
    display: none;
    cursor: pointer
}

#course-categories .clear-filter:hover {
    opacity: .8
}

#course-categories .tags-listing .empty-search {
    text-align: center
}

#course-categories .tags-listing a {
    display: inline-block;
    float: left;
    margin-right: 20px;
    padding: 10px 20px;
    background: #0094c9;
    border-radius: 30px;
    margin-bottom: 10px;
    color: #fff
}

#course-categories .tags-listing a i {
    margin-right: 10px
}

#course-categories .tags-listing a:hover {
    opacity: .9
}

#course-categories .categories-listing h2 {
    font-size: 1.375em;
    margin-bottom: 10px
}

#course-categories .categories-listing h2 a {
    color: #0094c9;
    font-weight: 300
}

#course-categories .categories-listing .category-item {
    margin-bottom: 40px;
    width: 100%;
    float: none
}

#course-categories .categories-listing .category-item ul li {
    padding-left: 10px
}

#course-categories .categories-listing .category-item ul a {
    color: #2d3942;
    line-height: 24px
}

#course-categories .course-categories-banner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 0
}

#course-categories .course-categories-banner .course-categories-bg {
    text-align: center;
    background: url(https://alison.com/html/site/img/xcategories-bg-05.png.pagespeed.ic.hYq-A49Cx0.webp);
    background-repeat: no-repeat;
    background-size: cover;
    color: #fff;
    width: 100%;
    padding-top: 95px;
    height: 350px
}

#course-categories .course-categories-banner .course-categories-bg .categories-banner {
    margin: 0 auto;
    text-align: center;
    width: 230px
}

#course-categories .course-categories-banner .course-categories-bg .categories-banner h1 {
    font-size: 1.8125em
}

#course-categories .course-categories-banner .course-categories-bg .categories-banner p {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.9em;
    margin: 0 0 20px
}

#course-categories .course-categories-banner .banner-angle {
    position: relative;
    z-index: 1;
    margin-top: 1px
}

#course-categories .course-categories-banner .banner-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 45px;
    width: 100%
}

#course-categories .course-categories-wrapper {
    margin: 285px auto 0;
    max-width: 1150px;
    padding: 0;
    position: relative
}

#course-categories .course-categories-wrapper .content-wrapper {
    box-shadow: none;
    min-height: 400px;
    margin-bottom: 100px;
    background: #fff;
    padding: 40px 20px
}

#course-categories .course-categories-wrapper .content-wrapper .cat-title {
    margin: 0 20px 20px
}

#course-categories .course-categories-wrapper .content-wrapper .cat-title span {
    margin-right: 10px
}

#course-categories .course-categories-wrapper .content-wrapper .cat-content-header {
    color: #465159;
    font-size: 11px;
    height: 20px;
    width: 100%
}

#course-categories .course-categories-wrapper .content-wrapper .cat-content-header .left-content {
    margin-left: 20px;
    float: left
}

#course-categories .course-categories-wrapper .content-wrapper .cat-content-header .right-content {
    float: right
}

@media only screen and (min-width:768px) {
    #course-categories .categories-listing .category-item {
        width: 33.333%;
        float: left
    }
    #course-categories .course-categories-banner {
        display: block
    }
    #course-categories .course-categories-banner .course-categories-bg {
        height: 400px;
        padding-top: 130px
    }
    #course-categories .course-categories-banner .course-categories-bg .categories-banner {
        width: 400px
    }
    #course-categories .course-categories-banner .course-categories-bg .categories-banner h1 {
        font-size: 2.8125em
    }
    #course-categories .course-categories-wrapper {
        margin: 300px auto 0;
        max-width: 1150px
    }
    #course-categories .course-categories-wrapper .content-wrapper {
        padding: 40px 30px
    }
    #course-categories .course-categories-wrapper .content-wrapper .cat-title {
        margin: 0 0 25px
    }
    #course-categories .btn-outer .btn {
        right: 0
    }
}

@media only screen and (min-width:1020px) {
    #course-categories .course-categories-banner {
        display: block
    }
    #course-categories .course-categories-banner .course-categories-bg {
        height: 400px
    }
    #course-categories .course-categories-wrapper {
        margin: 300px auto 0;
        box-shadow: 0 0 3px 0 #585858
    }
}

#course-modules .icon-checked {
    color: #38ac69
}

#course-modules .course-modules-banner {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 0
}

#course-modules .course-modules-banner .course-modules-bg {
    text-align: center;
    background: url(https://alison.com/html/site/img/xcategories-bg-05.png.pagespeed.ic.hYq-A49Cx0.webp);
    background-repeat: no-repeat;
    background-size: cover;
    color: #fff;
    width: 100%;
    padding-top: 95px;
    height: 350px
}

#course-modules .course-modules-banner .course-modules-bg .modules-banner {
    margin: 0 auto;
    text-align: center;
    width: 300px
}

#course-modules .course-modules-banner .course-modules-bg .modules-banner h1 {
    font-size: 1.8125em
}

#course-modules .course-modules-banner .course-modules-bg .modules-banner p {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.9em;
    margin: 0 0 20px
}

#course-modules .course-modules-banner .banner-angle {
    position: relative;
    z-index: 1;
    margin-top: 1px
}

#course-modules .course-modules-banner .banner-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 45px;
    width: 100%
}

#course-modules .breadcrumb-wrapper {
    margin-top: 285px
}

#course-modules .course-modules-wrapper {
    margin: 0 auto;
    max-width: 1150px;
    padding: 0;
    position: relative
}

#course-modules .course-modules-wrapper h6 {
    padding: 0 20px
}

#course-modules .course-modules-wrapper .module-title {
    margin-bottom: 20px
}

#course-modules .course-modules-wrapper .content-wrapper {
    box-shadow: none;
    min-height: 400px;
    margin-bottom: 0;
    background: #fff;
    padding: 40px 0
}

#course-modules .course-modules-wrapper .v-pane-header {
    margin: 3px 0;
    padding: 16px 20px 10px;
    font-size: .75em;
    background-color: #f2f5f6;
    display: block;
    vertical-align: middle;
    color: #2d3942
}

#course-modules .course-modules-wrapper .v-pane-header.v-pane-topic:hover {
    background-color: #0094c9;
    color: #fff
}

#course-modules .course-modules-wrapper .v-pane-header.label {
    background-color: #d4dee1
}

#course-modules .course-modules-wrapper .v-pane-header .icon-play {
    float: right;
    display: inline;
    font-size: 23px;
    margin-top: -23px
}

#course-modules .course-modules-wrapper .v-pane-header .v-pname-icon {
    margin: 5px 10px;
    display: none
}

@media only screen and (min-width:768px) {
    #course-modules .course-modules-banner {
        display: block
    }
    #course-modules .course-modules-banner .course-modules-bg {
        height: 450px;
        padding-top: 150px
    }
    #course-modules .course-modules-banner .course-modules-bg .modules-banner {
        width: 600px
    }
    #course-modules .course-modules-banner .course-modules-bg .modules-banner h1 {
        font-size: 2.8125em
    }
    #course-modules .breadcrumb-wrapper {
        margin-top: 400px
    }
    #course-modules .course-modules-wrapper {
        margin: 0 auto;
        max-width: 1150px
    }
    #course-modules .course-modules-wrapper h6 {
        padding: 0
    }
    #course-modules .course-modules-wrapper .content-wrapper {
        padding: 40px 30px;
        margin-bottom: 100px
    }
    #course-modules .course-modules-wrapper .content-wrapper .cat-title {
        margin: 0 0 25px
    }
    #course-modules .course-modules-wrapper .content-wrapper .v-pane-header {
        height: 50px;
        font-size: .875em
    }
    #course-modules .course-modules-wrapper .content-wrapper .v-pane-header.v-pane-link {
        width: calc(100% - 20px);
        margin-left: 20px
    }
    #course-modules .course-modules-wrapper .content-wrapper .v-pane-header.v-pane-link:hover {
        background-color: #0094c9;
        color: #fff
    }
    #course-modules .course-modules-wrapper .content-wrapper .v-pane-header .v-pname-icon {
        display: inline
    }
}

@media only screen and (min-width:1020px) {
    #course-modules .course-modules-banner {
        display: block
    }
    #course-modules .course-modules-banner .course-modules-bg {
        height: 500px
    }
    #course-modules .breadcrumb-wrapper {
        margin-top: 300px
    }
    #course-modules .course-modules-wrapper {
        margin: 0 auto;
        box-shadow: 0 0 3px 0 #585858
    }
}

.learning-paths-angle {
    position: relative;
    z-index: 1
}

.learning-paths-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 90px;
    width: 100%
}

.inline-container {
    margin-bottom: 70px
}

.blue-lrg-dot {
    height: 30px;
    width: 30px;
    margin-right: -14px;
    bottom: -40px
}

.blue-small-dot {
    height: 15px;
    width: 15px;
    margin-right: -6px;
    bottom: -60px
}

.blue-dot {
    right: 50%;
    position: absolute;
    border-radius: 50%;
    background: #0091c7
}

.about-learning-path {
    margin: 0 auto;
    max-width: 660px;
    position: relative;
    text-align: center;
    z-index: 30
}

.about-learning-path.about-first {
    padding-top: 30px
}

.about-learning-path h2,
.about-learning-path h3 {
    color: #0091c7;
    text-align: center;
    font-weight: 400
}

.about-learning-path p {
    color: #2d3942;
    margin: 0 auto;
    max-width: 850px;
    text-align: center
}

@media only screen and (min-width:1020px) {
    .about-learning-path {
        max-width: 1100px
    }
}

.lp-reviews {
    text-align: center
}

.lp-reviews h3 {
    margin-top: 35px
}

.lp-reviews img {
    display: inline-block
}

.lp-reviews .lp-content {
    display: inline-block;
    text-align: center
}

.lp-reviews .lp-content .lp-name {
    color: #0091c7
}

.lp-reviews .lrg-btn {
    margin: 15px auto 0
}

@media only screen and (min-width:768px) {
    .lp-reviews h3 {
        margin-top: 0
    }
}

.lp-bottom-containter {
    margin: 30px auto 50px;
    text-align: center
}

.lp-bottom-containter h3 {
    color: #0091c7
}

.path-list {
    color: #2d3942;
    margin: 40px 0;
    position: relative
}

.path-list:before {
    border-left: 4px dashed #d9dee2;
    content: "";
    height: 100%;
    left: 50%;
    margin-left: -4px;
    position: absolute;
    top: 0;
    z-index: -2
}

.path-list .path-holder h3 {
    font-size: 1.375em;
    margin: 0
}

.path-list ol {
    counter-reset: b;
    margin: 0;
    padding: 0
}

.path-list ol li {
    counter-increment: b;
    list-style: none;
    margin: 45px auto 110px;
    padding: 0;
    position: relative;
    z-index: 1
}

.path-list ol li:first-child {
    margin: 80px auto 110px
}

.path-list ol li:before {
    background: #0091c7;
    border: 2px solid #0091c7;
    border-radius: 50%;
    bottom: 0;
    content: "";
    height: 55px;
    margin-right: -28px;
    position: absolute;
    right: 50%;
    top: -80px;
    width: 55px;
    z-index: -1
}

.path-list ol li:after {
    color: #fff;
    content: counter(b);
    font: 400 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-right: -25px;
    position: absolute;
    right: 50%;
    text-align: center;
    top: -70px;
    width: 55px
}

.path-list .lp-image {
    background: #fff;
    position: relative;
    text-align: center
}

.path-list .lp-image img {
    border: 1px solid #d4d4d4;
    max-width: 100%
}

.path-list .top {
    background: #fff;
    padding: 10px 0 20px
}

.path-list .top h4 {
    color: #0091c7;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0;
    width: 80%
}

.path-list .btn {
    display: block;
    width: 145px
}

.path-list .body .desc {
    background: #fdfdfd;
    float: left;
    padding: 20px 0;
    width: 100%
}

.path-list .body .desc p {
    margin: 0
}

.path-list .lp-course-info {
    background: #fff
}

.path-list .lp-course-info .duration,
.path-list .lp-course-info .points {
    color: #0091c7;
    display: inline-block;
    margin-left: 15px
}

.path-list .lp-desc {
    padding: 0
}

.path-list .bottom {
    background: #fff;
    padding: 20px 0;
    margin-bottom: 30px
}

.path-list .bottom .column {
    float: left;
    text-align: center;
    width: 50%
}

.path-list .bottom .column:first-child {
    width: 100%
}

.path-list .bottom span {
    color: #fff;
    display: inline-block;
    vertical-align: middle
}

.path-list .bottom [class*="icon"] {
    font-size: 25px;
    margin: 0 7px
}

.path-list .bottom .text {
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

@media only screen and (min-width:768px) {
    .path-list {
        margin: 80px 0
    }
    .path-list ol li {
        margin-bottom: 150px
    }
    .path-list ol li:before {
        margin-right: -35px;
        height: 70px;
        top: -97px;
        width: 70px
    }
    .path-list ol li:after {
        font-size: 2.5em;
        top: -84px
    }
    .path-list .top {
        padding: 15px 15px 25px
    }
    .path-list .top h4 {
        font-size: 1.25em
    }
    .path-list .body .desc {
        padding: 0 15px 30px
    }
    .path-list .bottom {
        padding: 10px 15px
    }
    .path-list .bottom .column {
        width: 33.33333%
    }
    .path-list .bottom .column:first-child {
        margin: 0;
        width: 33.33333%
    }
    .path-list .bottom .column span {
        display: inline-block
    }
}

@media only screen and (min-width:1020px) {
    .path-list {
        margin: 30px 0 85px
    }
    .path-list .body .desc {
        width: 80%
    }
    .path-list:before {
        border-left: 3px dotted #d4d4d4;
        content: "";
        height: 100%;
        left: calc(50% - 3px);
        margin: 0 auto;
        position: absolute;
        top: 0;
        width: 1px;
        z-index: -2
    }
    .path-list ol li {
        margin-bottom: 100px;
        max-width: 100%
    }
    .path-list ol li:before {
        height: 75px;
        margin-right: -37px;
        top: -46px;
        width: 75px
    }
    .path-list ol li:after {
        font-size: 3.125em;
        margin-right: -24px;
        top: -41px
    }
    .path-list ol li:first-child:before {
        top: -83px
    }
    .path-list ol li:first-child:after {
        top: -78px
    }
    .path-list ol li:nth-child(2n) .lp-image {
        float: left;
        top: 50px;
        width: 410px
    }
    .path-list ol li:nth-child(2n) .lp-desc {
        float: right;
        width: 410px
    }
    .path-list ol li:nth-child(2n) .lp-desc .body .desc {
        width: 100%
    }
    .path-list .lp-image {
        background: none;
        float: right;
        top: 50px
    }
    .path-list .bottom,
    .path-list .desc,
    .path-list .duration,
    .path-list .lp-course-info,
    .path-list .points,
    .path-list .top {
        background: none
    }
}

@media only screen and (min-width:1240px) {
    .path-list ol .row:nth-child(2n) li .lp-desc,
    .path-list ol .row:nth-child(2n) li .lp-image {
        width: 465px
    }
}

.dashboard-banner-img {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.banner-angle.grey:after {
    background: #f3f7f9
}

.suggested-courses {
    padding: 40px 0
}

.upgrade-parchments .available-products {
    background: #f3f7f9
}

.dashboard-banner {
    position: relative
}

.dashboard-banner .column-title {
    font: 300 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 20px
}

.dashboard-banner .column-title span {
    display: inline-block;
    margin: 0 10px 0 0
}

.dashboard-banner .points-title {
    display: inline-block
}

.dashboard-banner .column {
    margin-bottom: 60px
}

.dashboard-banner .column p {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.dashboard-banner .img-holder {
    border: 5px solid hsla(0, 0%, 100%, .7);
    border-radius: 50%;
    height: 170px;
    margin: 0 auto 20px;
    padding: 10px;
    position: relative;
    width: 170px
}

.dashboard-banner .img-holder a:after {
    background: hsla(0, 0%, 100%, 0);
    border-radius: 50%;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 2;
    transition: background .2s ease-in
}

.dashboard-banner .img-holder a:hover:after {
    background: hsla(0, 0%, 100%, .2)
}

.dashboard-banner .img-holder img {
    border-radius: 50%;
    width: 100%
}

.dashboard-banner .img-holder span {
    background: #2e3942;
    border: 4px solid #0091c7;
    border-radius: 50%;
    bottom: 0;
    color: #fff;
    display: block;
    font-size: .9375em;
    height: 45px;
    left: 0;
    line-height: 37px;
    position: absolute;
    text-align: center;
    width: 45px;
    z-index: 3
}

.dashboard-banner .avatar-container {
    position: relative;
    height: 100%
}

.dashboard-banner .avatar-container img {
    border-radius: 50%;
    width: 100%;
    height: 100%
}

.dashboard-banner .avatar-container .bubble-right {
    opacity: 0;
    width: 110px;
    height: 65px;
    left: -135px;
    top: 0;
    background: #8fc8e2;
    position: absolute;
    border-radius: 5px;
    color: #2d3942;
    font-size: .75em;
    font-weight: 400;
    transition: all .25s ease
}

.dashboard-banner .avatar-container .bubble-right .bubble-title {
    color: #fff;
    margin: 0 0 3px;
    font: 400 2.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.dashboard-banner .avatar-container .bubble-right:before {
    content: "";
    position: absolute;
    left: 100%;
    top: 25px;
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-left: 10px solid #8fc8e2;
    border-bottom: 8px solid transparent
}

.dashboard-banner .avatar-container:hover .bubble-right {
    opacity: 1
}

.dashboard-banner .avatar-container .overlay {
    content: "";
    position: absolute;
    opacity: 0;
    left: 0;
    height: 100%;
    width: 100%;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    background: rgba(46, 57, 66, .8);
    transition: all .5s ease
}

.dashboard-banner .avatar-container .overlay a,
.dashboard-banner .avatar-container .overlay h5 {
    color: #fff;
    font: 300 .6875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    font-size: 20px;
    margin: 0;
    position: absolute;
    top: 50%;
    padding: 0;
    text-align: center;
    width: 100%;
    transform: translateY(-50%)
}

.dashboard-banner .avatar-container .overlay a strong,
.dashboard-banner .avatar-container .overlay h5 strong {
    font-size: 30px
}

.dashboard-banner .avatar-container .overlay a {
    left: 0;
    font-size: 14px
}

.dashboard-banner .avatar-container .overlay a:hover {
    text-decoration: none
}

.dashboard-banner .avatar-container:hover .overlay {
    opacity: 1
}

.dashboard-banner .level-name,
.dashboard-banner .username {
    font: 300 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.dashboard-banner .level-name {
    margin: 0 0 15px
}

.dashboard-banner .user-info {
    margin: 0 auto;
    max-width: 100%
}

.dashboard-banner .user-info li {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 15px 0 0;
    padding: 0;
    position: relative
}

.dashboard-banner .user-info li [class^="icon"] {
    display: inline-block;
    margin: 0 5px 0 0;
    width: 30px
}

.dashboard-banner .user-info li .switch {
    display: block;
    max-width: 35px;
    margin: 0 auto 10px
}

.dashboard-banner .user-info li .switch button:hover:after {
    content: ""
}

.dashboard-banner .user-info li .view-subscription {
    display: inline-block;
    font-weight: 500;
    vertical-align: super;
    margin-left: 5px;
    font-size: .75em;
    line-height: 20px;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.dashboard-banner .user-info li .view-profile {
    line-height: 20px;
    display: block
}

.dashboard-banner .score-bar {
    border: 1px solid #fff;
    display: block;
    height: 15px;
    margin: 0 auto;
    position: relative;
    width: 220px
}

.dashboard-banner .score-bar .bar {
    background: #fff;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0
}

.dashboard-banner .column .points {
    font: 700 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    text-transform: lowercase;
    margin: -5px 0 0 5px;
    display: inline-block
}

.dashboard-banner .column .points strong {
    font-size: 1.5625em;
    font-weight: 300
}

.dashboard-banner .notification-bg {
    background: #fff;
    padding: 15px 0
}

.dashboard-banner .notification-bg h4 {
    color: #5d666d
}

.dashboard-banner .icon-bell {
    margin-right: 10px
}

.dashboard-banner .notifications {
    margin: 0 auto;
    max-width: 250px
}

.dashboard-banner .notifications li {
    background: #e8edf1;
    color: #2d3942;
    font-size: 12px;
    margin: 5px 0;
    padding: 10px 15px;
    text-align: left
}

.dashboard-banner .notifications li p {
    color: #2d3942;
    margin-bottom: 0
}

.dashboard-banner .notifications li p strong {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    .dashboard-banner {
        margin: 30px 0 0
    }
    .dashboard-banner .column {
        float: left;
        width: 50%
    }
    .dashboard-banner .level-name {
        margin: 0 0 25px
    }
}

@media only screen and (min-width:1020px) {
    .dashboard-banner .column {
        margin: 0;
        width: 25%
    }
    .dashboard-banner .notification-bg {
        padding: 15px
    }
    .dashboard-banner .column-title {
        font-size: 1.5625em
    }
}

.circle-group li {
    margin: 0 0 25px;
    font-weight: 300
}

.circle-group li span:last-child {
    font-size: .875em
}

.circle-group .circle {
    border-radius: 50%;
    border: 2px solid #fff;
    display: block;
    height: 40px;
    line-height: 38px;
    margin: 0 auto 10px;
    width: 40px
}

.dashboard,
.dashboard .learner-record-outer {
    position: relative
}

.dashboard .learner-record {
    position: absolute;
    right: 0;
    top: 4px;
    font-size: .875em
}

.dashboard .course-progress {
    margin-top: 10px
}

.dashboard .course-progress p {
    margin-bottom: 10px;
    color: #5d666d;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.dashboard .course-progress .dashboard-progress-meter {
    background-color: #2e3942;
    border-radius: 4px;
    height: 22px;
    width: 100%
}

.dashboard .course-progress .dashboard-progress-meter .bar {
    background-color: #0091c7;
    border-radius: 4px;
    color: #fff;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    height: 100%;
    line-height: 22px;
    padding: 0 8px;
    text-align: right;
    width: 0
}

.dashboard h3 {
    color: #2d3942;
    font-size: 1.3125em
}

.dashboard h3 span {
    margin-right: 10px
}

.dashboard .tab-header-inline2 {
    display: block;
    width: 100%
}

.dashboard .tab-header-inline2 .tab-title {
    border-color: #5d666d!important;
    border-width: 1.5px;
    display: block;
    float: left;
    text-align: center;
    width: 25%
}

.dashboard .tab-header-inline2 .tab-title [class^="icon"] {
    color: #2d3942;
    font-size: 20px
}

.dashboard .tab-header-inline2 .tab-title a {
    display: none;
    font-size: 17px;
    color: #5d666d
}

.dashboard .tab-header-inline2 .tab-title.active [class^="icon"],
.dashboard .tab-header-inline2 .tab-title.active a {
    color: #0091c7
}

.dashboard .course_row {
    margin: 15px 0
}

.dashboard .course-detail {
    background: #e8edf1;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    margin: 0 0 10px;
    padding: 15px 10px 10px;
    text-align: center
}

.dashboard .course-detail .button {
    background: #fff;
    border-radius: 5px;
    color: #2d3942;
    cursor: pointer;
    width: 40px;
    padding: 10px;
    transition: all .2s ease-in
}

.dashboard .course-detail .button span {
    font-size: 18px
}

.dashboard .course-detail .button:hover {
    background: #0091c7;
    color: #fff
}

.dashboard .course-detail .button-group .social-widget {
    width: 0;
    display: inline;
    position: relative
}

.dashboard .course-detail .button-group .social-widget:hover .icon-group {
    display: block
}

.dashboard .course-detail .button-group .social-widget .button {
    display: none
}

.dashboard .course-detail .button-group .social-widget .icon-group {
    padding: 8px 0 9px;
    position: relative;
    text-align: center;
    margin: 10px auto;
    top: 0;
    right: auto;
    width: 200px;
    background: rgba(45, 57, 66, .85);
    display: block;
    transition: all .3s ease-in
}

.dashboard .course-detail .button-group .social-widget .icon-group a {
    background: none;
    border: 0;
    display: inline-block;
    height: auto;
    margin: 0
}

.dashboard .course-detail .button-group .social-widget .icon-group a span {
    color: #fff;
    font-size: 25px
}

.dashboard .course-detail .button-group .social-widget .icon-group a:hover span {
    color: #68aadd
}

.dashboard .time-ago {
    background: #e8edf1;
    border-bottom: 1px solid #fff;
    color: #2d3942;
    padding: 10px;
    text-align: center;
    width: 100%
}

.dashboard .time-ago [class^="icon"] {
    display: inline-block;
    font-size: 1.875em;
    margin: 0 10px 0 0;
    vertical-align: middle
}

.dashboard .time-ago .timeago {
    display: inline-block;
    font-size: .8125em;
    vertical-align: middle
}

.dashboard .course-link {
    color: #2d3942;
    display: inline-block;
    margin: 0 0 10px
}

.dashboard .course-link:hover {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    .dashboard .course-progress {
        margin-top: 20px
    }
    .dashboard .course-progress p {
        display: inline-block;
        margin: 0 5px 0 0
    }
    .dashboard .course-progress .dashboard-progress-meter {
        display: inline-block;
        width: 285px
    }
    .dashboard h3 {
        font-size: 1.625em;
        margin: 0 0 30px
    }
    .dashboard .tab-header-inline2 .tab-title {
        border: 0 solid;
        width: 50%;
        background: #d4d4d4
    }
    .dashboard .tab-header-inline2 .tab-title.active {
        background-color: #0094c9
    }
    .dashboard .tab-header-inline2 .tab-title.active a,
    .dashboard .tab-header-inline2 .tab-title.active i:before {
        color: #fff
    }
    .dashboard .tab-header-inline2 .tab-title:hover {
        opacity: .9
    }
    .dashboard .tab-header-inline2 .tab-title a {
        display: inline-block
    }
    .dashboard .time-ago {
        background: #d2d7db;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px;
        float: left;
        position: relative;
        text-align: left;
        width: 150px
    }
    .dashboard .time-ago .vcenter {
        left: 10px;
        margin-top: -20px;
        position: absolute;
        top: 50%;
        width: 100%
    }
    .dashboard .time-ago .timeago {
        width: 80px
    }
    .dashboard .course-detail {
        float: left;
        margin: 0 0 0 10px;
        padding: 10px;
        position: relative;
        text-align: left;
        width: calc(100% - 160px)
    }
    .dashboard .course-detail.download-item {
        margin: 0;
        width: 100%;
        padding-left: 20px
    }
    .dashboard .course-detail .button-group {
        float: right;
        width: 150px;
        text-align: right
    }
    .dashboard .course-detail .button-group .social-widget .button {
        display: none
    }
    .dashboard .course-detail .button-group .social-widget .icon-group {
        background: transparent;
        width: 180px;
        opacity: 1;
        visibility: visible;
        display: block;
        position: relative;
        float: right;
        text-align: right;
        margin: 0
    }
    .dashboard .course-detail .button-group .social-widget .icon-group i {
        color: rgba(45, 57, 66, .85)
    }
    .dashboard .course-link {
        margin: 0;
        padding-top: 10px
    }
}

@media only screen and (min-width:1020px) {
    .dashboard .course-progress .dashboard-progress-meter {
        width: 400px
    }
    .dashboard .tab-header-inline2 .tab-title {
        display: block;
        width: 25%;
        border-bottom: 1px solid;
        background-color: #fff;
        transition: border 0s ease
    }
    .dashboard .tab-header-inline2 .tab-title:hover a,
    .dashboard .tab-header-inline2 .tab-title:hover i:before {
        color: #0094c9
    }
    .dashboard .tab-header-inline2 .tab-title.active {
        border-top: 1px solid;
        border-right: 1px solid;
        border-left: 1px solid;
        border-bottom: none;
        background-color: #fff
    }
    .dashboard .tab-header-inline2 .tab-title.active:first-child {
        border-left: 0 solid
    }
    .dashboard .tab-header-inline2 .tab-title.active:last-child {
        border-right: 0 solid
    }
    .dashboard .tab-header-inline2 .tab-title.active a,
    .dashboard .tab-header-inline2 .tab-title.active i:before {
        color: #0094c9
    }
    .dashboard .course-detail .button-group {
        float: right;
        width: 150px;
        text-align: right
    }
    .dashboard .course-detail .button-group .social-widget:hover .icon-group {
        opacity: 1;
        visibility: visible
    }
    .dashboard .course-detail .button-group .social-widget .button {
        display: inline-block
    }
    .dashboard .course-detail .button-group .social-widget .icon-group {
        background: rgba(45, 57, 66, .85);
        border-radius: 3px;
        opacity: 0;
        visibility: hidden;
        position: absolute;
        right: 43px;
        top: -12px;
        width: 200px;
        text-align: center;
        margin: 0
    }
    .dashboard .course-detail .button-group .social-widget .icon-group i {
        color: #fff
    }
    .dashboard .course-link {
        padding: 10px 0 0
    }
}

.chart {
    background: #f3f6f7;
    margin: 60px 0;
    padding: 50px 10px;
    position: relative;
    z-index: 1
}

.chart:after,
.chart:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

.chart:before {
    top: 0;
    transform: skewY(2deg);
    transform-origin: 100% 0;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 100% 0;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 100% 0;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 100% 0
}

.chart:after,
.chart:before {
    outline: 2px solid transparent
}

.chart:after {
    bottom: 0;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%
}

.chart:after,
.chart:before {
    background: #f3f6f7
}

.chart .total-hours {
    float: right;
    margin: 0 0 15px;
    text-align: right;
    width: 100px
}

.chart .total-hours .total-time {
    color: #2d3942;
    display: block;
    font: 700 1.5625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.chart #hours {
    margin-left: -20px
}

@media only screen and (min-width:768px) {
    .chart .total-hours .total-time {
        font-size: 2.5em
    }
}

@media only screen and (min-width:1020px) {
    .chart {
        margin: 90px 0 60px
    }
    .chart #hours {
        margin: 0 auto;
        max-width: 1000px
    }
    .chart .total-hours {
        font-size: 20px
    }
}

.certificates {
    padding: 20px 0 40px
}

.certificates .btn-holder {
    text-align: center
}

.certificates .btn-holder .btn-dark {
    margin: 0 auto;
    display: block;
    background: #2d3942;
    border-radius: 3px
}

.certificates .btn-holder .btn-dark:hover {
    opacity: .9
}

.certificates .avail-products {
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%
}

.certificates .avail-products img {
    width: 45px
}

.certificates .avail-products a {
    color: #2d3942;
    font-size: .9375em;
    font-weight: 700
}

.certificates .avail-products a span {
    margin-right: 10px
}

.certificates .avail-products a:hover {
    background: #d2d7db
}

.certificates .avail-products .prod-col {
    width: 35%;
    float: left;
    text-align: center;
    position: relative;
    height: 100%
}

.certificates .avail-products .prod-col:nth-child(2) {
    width: 40%;
    text-align: left
}

.certificates .avail-products .prod-col:nth-child(2) span {
    font-size: 12px;
    display: block
}

.certificates .avail-products .prod-col:nth-child(2) .prod-center {
    left: 0;
    transform: translateY(-50%)
}

.certificates .avail-products .prod-col:nth-child(3) {
    width: 25%;
    background: #d2d7dc
}

.certificates .avail-products .prod-col:nth-child(3) .prod-button {
    padding: 9px 0 0;
    text-align: center;
    background-color: #2d3942;
    color: #fff;
    cursor: pointer;
    border-radius: 100%;
    width: 35px;
    height: 35px;
    transition: all .4s ease-in
}

.certificates .avail-products .prod-col:nth-child(3) .prod-button:hover {
    background-color: #0094c9
}

.certificates .avail-products .prod-col .prod-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%)
}

.certificates .avail-products>li {
    height: 33%;
    border-bottom: 2px solid #c7cdcf;
    overflow: hidden
}

.certificates .avail-products>li:nth-child(3) {
    border: 0 solid
}

.certificates span.blue {
    color: #0091c7!important
}

.certificates ul {
    margin: 30px 0
}

.certificates ul.cert-list>li {
    width: 100%;
    float: left;
    padding: 0;
    position: relative
}

.certificates ul.cert-list>li:nth-child(2),
.certificates ul.cert-list>li:nth-child(3) {
    width: 100%
}

.certificates ul.cert-list>li .product-outer {
    width: 100%;
    max-width: 200px;
    position: relative;
    margin: 0 auto;
    float: none
}

.certificates ul.cert-list>li .product-outer .cert-display-area {
    position: relative
}

@media only screen and (min-width:768px) {
    .certificates ul.cert-list>li {
        width: 50%;
        float: left;
        padding: 0;
        position: relative
    }
    .certificates ul.cert-list>li:nth-child(2),
    .certificates ul.cert-list>li:nth-child(3) {
        width: 50%
    }
    .certificates ul.cert-list>li .product-outer {
        max-width: 300px
    }
}

@media only screen and (min-width:1020px) {
    .certificates ul.cert-list>li {
        width: 22.5%;
        float: left
    }
    .certificates ul.cert-list>li .product-outer {
        float: left
    }
    .certificates ul.cert-list>li:nth-child(2),
    .certificates ul.cert-list>li:nth-child(3) {
        width: 27.5%
    }
    .certificates ul.cert-list>li:nth-child(2) .product-outer,
    .certificates ul.cert-list>li:nth-child(3) .product-outer {
        float: none
    }
    .certificates ul.cert-list>li:nth-child(4) .product-outer {
        float: right
    }
    .certificates ul.cert-list>li .product-outer {
        max-width: 200px
    }
}

.certificates ul .slide-up-products {
    height: 0;
    overflow: hidden;
    position: absolute;
    width: 100%;
    bottom: 0;
    left: 0;
    background-color: #fff;
    transition: all .2s ease-in
}

.certificates ul .slide-up-products.upgradable a:hover .upgrade .bottom {
    background: #0091c7
}

.certificates ul .slide-up-products.upgradable a:hover .upgrade .bottom .before span,
.certificates ul .slide-up-products.upgradable a:hover .upgrade .bottom .now span {
    color: #fff
}

.certificates ul .slide-up-products .upgrade {
    padding: 30px 0;
    text-align: center
}

.certificates ul .slide-up-products .upgrade h6 {
    color: #465159;
    font: 700 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.certificates ul .slide-up-products .upgrade img {
    width: 165px
}

.certificates ul .slide-up-products .upgrade .bottom {
    background: #d4d4d4;
    bottom: 0;
    left: 0;
    padding: 20px;
    position: absolute;
    width: 100%;
    transition: background .2s ease-in
}

.certificates ul .slide-up-products .upgrade .bottom>div {
    float: left;
    width: 50%
}

.certificates ul .slide-up-products .upgrade .bottom>div .price {
    font-size: 16px
}

.certificates ul .slide-up-products .upgrade .bottom span {
    display: block
}

.certificates ul .slide-up-products .upgrade .bottom .before span {
    color: #5d666d
}

.certificates ul .slide-up-products .upgrade .bottom .before .price {
    position: relative
}

.certificates ul .slide-up-products .upgrade .bottom .before .price:after {
    background: #be3047;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 50%;
    width: 100%
}

.certificates ul .slide-up-products .upgrade .bottom .now span {
    color: #2d3942
}

.certificates ul .slide-up-products .upgrade .bottom .tiny {
    font-size: .75em
}

.certificates ul .slide-up-products.view {
    height: 100%
}

.certificates ul .cert-navigation .cert-right-button {
    width: 100%;
    color: #fff;
    background-color: #2d3942;
    text-align: center;
    padding: 7px 0;
    cursor: pointer
}

.certificates ul .cert-navigation .cert-right-button:hover {
    background: #425360
}

.certificates ul .cert-navigation .cert-cart {
    display: none
}

.certificates ul .top {
    background: #fff;
    color: #fff;
    padding: 15px 20px;
    position: relative;
    min-height: 202px;
    display: block
}

.certificates ul .top .cert-image {
    overflow: hidden;
    width: 112px;
    height: 112px;
    border-radius: 100%;
    text-align: center;
    position: relative;
    background-size: cover;
    background-position: 50%;
    margin: 0 auto 20px;
    box-shadow: 0 0 5px 0 hsla(0, 0%, 60%, .5)
}

.certificates ul .top .cert-image .score-wrapper {
    position: absolute;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .5);
    opacity: 0;
    transition: opacity .3s ease-in
}

.certificates ul .top .cert-image .score-wrapper .score {
    color: #fff;
    display: block;
    font: 400 2.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 0;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    transform: translateY(-50%)
}

.certificates ul .top .cert-image:hover .score-wrapper {
    opacity: 1
}

.certificates ul .top .round-image {
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    border-radius: 50%;
    height: 120px;
    margin: 0 auto 15px;
    position: relative;
    width: 120px
}

.certificates ul .top .icon-shop {
    bottom: -15px;
    display: block;
    position: absolute;
    right: -15px;
    text-align: center;
    width: 40px;
    z-index: 2
}

.certificates ul .top .icon-shop:before {
    line-height: 40px;
    position: relative;
    z-index: 3
}

.certificates ul .top .icon-shop:after {
    background: #0091c7;
    border-radius: 50%;
    content: "";
    display: block;
    height: 40px;
    left: 0;
    position: absolute;
    top: 0;
    width: 40px;
    z-index: 2
}

.certificates ul .top h6 {
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    color: #2d3942;
    line-height: 20px;
    margin: 0;
    text-align: center
}

@media only screen and (min-width:1020px) {
    .certificates {
        padding: 70px 0
    }
}

.certs-bg {
    background: #d9dee2;
    margin-top: 70px;
    position: relative;
    z-index: 1
}

.certs-bg:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 100% 0;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 100% 0;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 100% 0;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 100% 0
}

.certs-bg .certificates {
    padding: 35px 0
}

.certs-bg h3 {
    color: #2d3942
}

.certs-bg:before {
    background: #d9dee2
}

.radial-progress-level {
    margin: 0 auto 20px;
    width: 170px;
    height: 170px;
    background-color: transparent;
    border-radius: 50%
}

.radial-progress-level .circle {
    position: relative
}

.radial-progress-level .circle .line {
    background: none;
    border-radius: 50%;
    width: 164px;
    height: 164px;
    border: 3px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 3px;
    left: 3px
}

.radial-progress-level .circle .fill,
.radial-progress-level .circle .mask,
.radial-progress-level .circle .shadow {
    width: 170px;
    height: 170px;
    position: absolute;
    border-radius: 50%
}

.radial-progress-level .circle .fill,
.radial-progress-level .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

.radial-progress-level .circle .mask {
    clip: rect(0, 170px, 170px, 85px)
}

.radial-progress-level .circle .mask .fill {
    clip: rect(0, 85px, 170px, 0);
    background: none;
    border: 10px solid #fff
}

.radial-progress-level .inset {
    width: 160px;
    height: 160px;
    position: absolute;
    margin-left: 5px;
    margin-top: 5px;
    background: none;
    border-radius: 50%
}

.radial-progress-level .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 15px;
    text-align: center
}

.radial-progress-level .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3.1875em!important;
    color: #fff
}

.radial-progress-level .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #fff
}

.radial-progress-level[data-progress="0"] .circle .fill,
.radial-progress-level[data-progress="0"] .circle .fill.fix,
.radial-progress-level[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

.radial-progress-level[data-progress="1"] .circle .fill,
.radial-progress-level[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

.radial-progress-level[data-progress="1"] .circle .fill.fix,
.radial-progress-level[data-progress="2"] .circle .fill,
.radial-progress-level[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

.radial-progress-level[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

.radial-progress-level[data-progress="3"] .circle .fill,
.radial-progress-level[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

.radial-progress-level[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

.radial-progress-level[data-progress="4"] .circle .fill,
.radial-progress-level[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

.radial-progress-level[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

.radial-progress-level[data-progress="5"] .circle .fill,
.radial-progress-level[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

.radial-progress-level[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

.radial-progress-level[data-progress="6"] .circle .fill,
.radial-progress-level[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

.radial-progress-level[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

.radial-progress-level[data-progress="7"] .circle .fill,
.radial-progress-level[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

.radial-progress-level[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

.radial-progress-level[data-progress="8"] .circle .fill,
.radial-progress-level[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

.radial-progress-level[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

.radial-progress-level[data-progress="9"] .circle .fill,
.radial-progress-level[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

.radial-progress-level[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

.radial-progress-level[data-progress="10"] .circle .fill,
.radial-progress-level[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

.radial-progress-level[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

.radial-progress-level[data-progress="11"] .circle .fill,
.radial-progress-level[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

.radial-progress-level[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

.radial-progress-level[data-progress="12"] .circle .fill,
.radial-progress-level[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

.radial-progress-level[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

.radial-progress-level[data-progress="13"] .circle .fill,
.radial-progress-level[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

.radial-progress-level[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

.radial-progress-level[data-progress="14"] .circle .fill,
.radial-progress-level[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

.radial-progress-level[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

.radial-progress-level[data-progress="15"] .circle .fill,
.radial-progress-level[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

.radial-progress-level[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

.radial-progress-level[data-progress="16"] .circle .fill,
.radial-progress-level[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

.radial-progress-level[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

.radial-progress-level[data-progress="17"] .circle .fill,
.radial-progress-level[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

.radial-progress-level[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

.radial-progress-level[data-progress="18"] .circle .fill,
.radial-progress-level[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

.radial-progress-level[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

.radial-progress-level[data-progress="19"] .circle .fill,
.radial-progress-level[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

.radial-progress-level[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

.radial-progress-level[data-progress="20"] .circle .fill,
.radial-progress-level[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

.radial-progress-level[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

.radial-progress-level[data-progress="21"] .circle .fill,
.radial-progress-level[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

.radial-progress-level[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

.radial-progress-level[data-progress="22"] .circle .fill,
.radial-progress-level[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

.radial-progress-level[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

.radial-progress-level[data-progress="23"] .circle .fill,
.radial-progress-level[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

.radial-progress-level[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

.radial-progress-level[data-progress="24"] .circle .fill,
.radial-progress-level[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

.radial-progress-level[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

.radial-progress-level[data-progress="25"] .circle .fill,
.radial-progress-level[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

.radial-progress-level[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

.radial-progress-level[data-progress="26"] .circle .fill,
.radial-progress-level[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

.radial-progress-level[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

.radial-progress-level[data-progress="27"] .circle .fill,
.radial-progress-level[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

.radial-progress-level[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

.radial-progress-level[data-progress="28"] .circle .fill,
.radial-progress-level[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

.radial-progress-level[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

.radial-progress-level[data-progress="29"] .circle .fill,
.radial-progress-level[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

.radial-progress-level[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

.radial-progress-level[data-progress="30"] .circle .fill,
.radial-progress-level[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

.radial-progress-level[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

.radial-progress-level[data-progress="31"] .circle .fill,
.radial-progress-level[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

.radial-progress-level[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

.radial-progress-level[data-progress="32"] .circle .fill,
.radial-progress-level[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

.radial-progress-level[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

.radial-progress-level[data-progress="33"] .circle .fill,
.radial-progress-level[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

.radial-progress-level[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

.radial-progress-level[data-progress="34"] .circle .fill,
.radial-progress-level[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

.radial-progress-level[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

.radial-progress-level[data-progress="35"] .circle .fill,
.radial-progress-level[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

.radial-progress-level[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

.radial-progress-level[data-progress="36"] .circle .fill,
.radial-progress-level[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

.radial-progress-level[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

.radial-progress-level[data-progress="37"] .circle .fill,
.radial-progress-level[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

.radial-progress-level[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

.radial-progress-level[data-progress="38"] .circle .fill,
.radial-progress-level[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

.radial-progress-level[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

.radial-progress-level[data-progress="39"] .circle .fill,
.radial-progress-level[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

.radial-progress-level[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

.radial-progress-level[data-progress="40"] .circle .fill,
.radial-progress-level[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

.radial-progress-level[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

.radial-progress-level[data-progress="41"] .circle .fill,
.radial-progress-level[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

.radial-progress-level[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

.radial-progress-level[data-progress="42"] .circle .fill,
.radial-progress-level[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

.radial-progress-level[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

.radial-progress-level[data-progress="43"] .circle .fill,
.radial-progress-level[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

.radial-progress-level[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

.radial-progress-level[data-progress="44"] .circle .fill,
.radial-progress-level[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

.radial-progress-level[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

.radial-progress-level[data-progress="45"] .circle .fill,
.radial-progress-level[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

.radial-progress-level[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

.radial-progress-level[data-progress="46"] .circle .fill,
.radial-progress-level[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

.radial-progress-level[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

.radial-progress-level[data-progress="47"] .circle .fill,
.radial-progress-level[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

.radial-progress-level[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

.radial-progress-level[data-progress="48"] .circle .fill,
.radial-progress-level[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

.radial-progress-level[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

.radial-progress-level[data-progress="49"] .circle .fill,
.radial-progress-level[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

.radial-progress-level[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

.radial-progress-level[data-progress="50"] .circle .fill,
.radial-progress-level[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

.radial-progress-level[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

.radial-progress-level[data-progress="51"] .circle .fill,
.radial-progress-level[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

.radial-progress-level[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

.radial-progress-level[data-progress="52"] .circle .fill,
.radial-progress-level[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

.radial-progress-level[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

.radial-progress-level[data-progress="53"] .circle .fill,
.radial-progress-level[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

.radial-progress-level[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

.radial-progress-level[data-progress="54"] .circle .fill,
.radial-progress-level[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

.radial-progress-level[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

.radial-progress-level[data-progress="55"] .circle .fill,
.radial-progress-level[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

.radial-progress-level[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

.radial-progress-level[data-progress="56"] .circle .fill,
.radial-progress-level[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

.radial-progress-level[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

.radial-progress-level[data-progress="57"] .circle .fill,
.radial-progress-level[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

.radial-progress-level[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

.radial-progress-level[data-progress="58"] .circle .fill,
.radial-progress-level[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

.radial-progress-level[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

.radial-progress-level[data-progress="59"] .circle .fill,
.radial-progress-level[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

.radial-progress-level[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

.radial-progress-level[data-progress="60"] .circle .fill,
.radial-progress-level[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

.radial-progress-level[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

.radial-progress-level[data-progress="61"] .circle .fill,
.radial-progress-level[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

.radial-progress-level[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

.radial-progress-level[data-progress="62"] .circle .fill,
.radial-progress-level[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

.radial-progress-level[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

.radial-progress-level[data-progress="63"] .circle .fill,
.radial-progress-level[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

.radial-progress-level[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

.radial-progress-level[data-progress="64"] .circle .fill,
.radial-progress-level[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

.radial-progress-level[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

.radial-progress-level[data-progress="65"] .circle .fill,
.radial-progress-level[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

.radial-progress-level[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

.radial-progress-level[data-progress="66"] .circle .fill,
.radial-progress-level[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

.radial-progress-level[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

.radial-progress-level[data-progress="67"] .circle .fill,
.radial-progress-level[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

.radial-progress-level[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

.radial-progress-level[data-progress="68"] .circle .fill,
.radial-progress-level[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

.radial-progress-level[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

.radial-progress-level[data-progress="69"] .circle .fill,
.radial-progress-level[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

.radial-progress-level[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

.radial-progress-level[data-progress="70"] .circle .fill,
.radial-progress-level[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

.radial-progress-level[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

.radial-progress-level[data-progress="71"] .circle .fill,
.radial-progress-level[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

.radial-progress-level[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

.radial-progress-level[data-progress="72"] .circle .fill,
.radial-progress-level[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

.radial-progress-level[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

.radial-progress-level[data-progress="73"] .circle .fill,
.radial-progress-level[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

.radial-progress-level[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

.radial-progress-level[data-progress="74"] .circle .fill,
.radial-progress-level[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

.radial-progress-level[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

.radial-progress-level[data-progress="75"] .circle .fill,
.radial-progress-level[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

.radial-progress-level[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

.radial-progress-level[data-progress="76"] .circle .fill,
.radial-progress-level[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

.radial-progress-level[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

.radial-progress-level[data-progress="77"] .circle .fill,
.radial-progress-level[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

.radial-progress-level[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

.radial-progress-level[data-progress="78"] .circle .fill,
.radial-progress-level[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

.radial-progress-level[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

.radial-progress-level[data-progress="79"] .circle .fill,
.radial-progress-level[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

.radial-progress-level[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

.radial-progress-level[data-progress="80"] .circle .fill,
.radial-progress-level[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

.radial-progress-level[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

.radial-progress-level[data-progress="81"] .circle .fill,
.radial-progress-level[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

.radial-progress-level[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

.radial-progress-level[data-progress="82"] .circle .fill,
.radial-progress-level[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

.radial-progress-level[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

.radial-progress-level[data-progress="83"] .circle .fill,
.radial-progress-level[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

.radial-progress-level[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

.radial-progress-level[data-progress="84"] .circle .fill,
.radial-progress-level[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

.radial-progress-level[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

.radial-progress-level[data-progress="85"] .circle .fill,
.radial-progress-level[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

.radial-progress-level[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

.radial-progress-level[data-progress="86"] .circle .fill,
.radial-progress-level[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

.radial-progress-level[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

.radial-progress-level[data-progress="87"] .circle .fill,
.radial-progress-level[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

.radial-progress-level[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

.radial-progress-level[data-progress="88"] .circle .fill,
.radial-progress-level[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

.radial-progress-level[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

.radial-progress-level[data-progress="89"] .circle .fill,
.radial-progress-level[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

.radial-progress-level[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

.radial-progress-level[data-progress="90"] .circle .fill,
.radial-progress-level[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

.radial-progress-level[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

.radial-progress-level[data-progress="91"] .circle .fill,
.radial-progress-level[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

.radial-progress-level[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

.radial-progress-level[data-progress="92"] .circle .fill,
.radial-progress-level[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

.radial-progress-level[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

.radial-progress-level[data-progress="93"] .circle .fill,
.radial-progress-level[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

.radial-progress-level[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

.radial-progress-level[data-progress="94"] .circle .fill,
.radial-progress-level[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

.radial-progress-level[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

.radial-progress-level[data-progress="95"] .circle .fill,
.radial-progress-level[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

.radial-progress-level[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

.radial-progress-level[data-progress="96"] .circle .fill,
.radial-progress-level[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

.radial-progress-level[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

.radial-progress-level[data-progress="97"] .circle .fill,
.radial-progress-level[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

.radial-progress-level[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

.radial-progress-level[data-progress="98"] .circle .fill,
.radial-progress-level[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

.radial-progress-level[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

.radial-progress-level[data-progress="99"] .circle .fill,
.radial-progress-level[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

.radial-progress-level[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

.radial-progress-level[data-progress="100"] .circle .fill,
.radial-progress-level[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

.radial-progress-level[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

.scoring {
    margin: 0 0 20px;
    padding: 50px 0;
    text-align: center
}

.scoring .btn {
    display: block;
    margin: 30px auto 0;
    max-width: 190px
}

.scoring [class^="col-"] {
    padding: 0
}

.scoring #user_avatar {
    border-radius: 50%;
    width: 100%
}

.scoring .radial-progress-scoring {
    margin: 0 auto 20px;
    width: 170px;
    height: 170px;
    background-color: transparent;
    border-radius: 50%
}

.scoring .radial-progress-scoring .circle {
    position: relative
}

.scoring .radial-progress-scoring .circle .line {
    background: none;
    border-radius: 50%;
    width: 166px;
    height: 166px;
    border: 2px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 2px;
    left: 2px
}

.scoring .radial-progress-scoring .circle .fill,
.scoring .radial-progress-scoring .circle .mask,
.scoring .radial-progress-scoring .circle .shadow {
    width: 170px;
    height: 170px;
    position: absolute;
    border-radius: 50%
}

.scoring .radial-progress-scoring .circle .fill,
.scoring .radial-progress-scoring .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

.scoring .radial-progress-scoring .circle .mask {
    clip: rect(0, 170px, 170px, 85px)
}

.scoring .radial-progress-scoring .circle .mask .fill {
    clip: rect(0, 85px, 170px, 0);
    background: none;
    border: 5px solid #2e3942
}

.scoring .radial-progress-scoring .inset {
    width: 165px;
    height: 165px;
    position: absolute;
    margin-left: 2.5px;
    margin-top: 2.5px;
    background: none;
    border-radius: 50%
}

.scoring .radial-progress-scoring .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 0;
    text-align: center
}

.scoring .radial-progress-scoring .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3.1875em!important;
    color: #fff
}

.scoring .radial-progress-scoring .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #2e3942
}

.scoring .radial-progress-scoring[data-progress="0"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="0"] .circle .fill.fix,
.scoring .radial-progress-scoring[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

.scoring .radial-progress-scoring[data-progress="1"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

.scoring .radial-progress-scoring[data-progress="1"] .circle .fill.fix,
.scoring .radial-progress-scoring[data-progress="2"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

.scoring .radial-progress-scoring[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

.scoring .radial-progress-scoring[data-progress="3"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

.scoring .radial-progress-scoring[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

.scoring .radial-progress-scoring[data-progress="4"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

.scoring .radial-progress-scoring[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

.scoring .radial-progress-scoring[data-progress="5"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

.scoring .radial-progress-scoring[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

.scoring .radial-progress-scoring[data-progress="6"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

.scoring .radial-progress-scoring[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

.scoring .radial-progress-scoring[data-progress="7"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

.scoring .radial-progress-scoring[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

.scoring .radial-progress-scoring[data-progress="8"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

.scoring .radial-progress-scoring[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

.scoring .radial-progress-scoring[data-progress="9"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

.scoring .radial-progress-scoring[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

.scoring .radial-progress-scoring[data-progress="10"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

.scoring .radial-progress-scoring[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

.scoring .radial-progress-scoring[data-progress="11"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

.scoring .radial-progress-scoring[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

.scoring .radial-progress-scoring[data-progress="12"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

.scoring .radial-progress-scoring[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

.scoring .radial-progress-scoring[data-progress="13"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

.scoring .radial-progress-scoring[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

.scoring .radial-progress-scoring[data-progress="14"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

.scoring .radial-progress-scoring[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

.scoring .radial-progress-scoring[data-progress="15"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

.scoring .radial-progress-scoring[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

.scoring .radial-progress-scoring[data-progress="16"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

.scoring .radial-progress-scoring[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

.scoring .radial-progress-scoring[data-progress="17"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

.scoring .radial-progress-scoring[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

.scoring .radial-progress-scoring[data-progress="18"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

.scoring .radial-progress-scoring[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

.scoring .radial-progress-scoring[data-progress="19"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

.scoring .radial-progress-scoring[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

.scoring .radial-progress-scoring[data-progress="20"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

.scoring .radial-progress-scoring[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

.scoring .radial-progress-scoring[data-progress="21"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

.scoring .radial-progress-scoring[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

.scoring .radial-progress-scoring[data-progress="22"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

.scoring .radial-progress-scoring[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

.scoring .radial-progress-scoring[data-progress="23"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

.scoring .radial-progress-scoring[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

.scoring .radial-progress-scoring[data-progress="24"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

.scoring .radial-progress-scoring[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

.scoring .radial-progress-scoring[data-progress="25"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

.scoring .radial-progress-scoring[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

.scoring .radial-progress-scoring[data-progress="26"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

.scoring .radial-progress-scoring[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

.scoring .radial-progress-scoring[data-progress="27"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

.scoring .radial-progress-scoring[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

.scoring .radial-progress-scoring[data-progress="28"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

.scoring .radial-progress-scoring[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

.scoring .radial-progress-scoring[data-progress="29"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

.scoring .radial-progress-scoring[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

.scoring .radial-progress-scoring[data-progress="30"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

.scoring .radial-progress-scoring[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

.scoring .radial-progress-scoring[data-progress="31"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

.scoring .radial-progress-scoring[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

.scoring .radial-progress-scoring[data-progress="32"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

.scoring .radial-progress-scoring[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

.scoring .radial-progress-scoring[data-progress="33"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

.scoring .radial-progress-scoring[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

.scoring .radial-progress-scoring[data-progress="34"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

.scoring .radial-progress-scoring[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

.scoring .radial-progress-scoring[data-progress="35"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

.scoring .radial-progress-scoring[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

.scoring .radial-progress-scoring[data-progress="36"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

.scoring .radial-progress-scoring[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

.scoring .radial-progress-scoring[data-progress="37"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

.scoring .radial-progress-scoring[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

.scoring .radial-progress-scoring[data-progress="38"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

.scoring .radial-progress-scoring[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

.scoring .radial-progress-scoring[data-progress="39"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

.scoring .radial-progress-scoring[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

.scoring .radial-progress-scoring[data-progress="40"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

.scoring .radial-progress-scoring[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

.scoring .radial-progress-scoring[data-progress="41"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

.scoring .radial-progress-scoring[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

.scoring .radial-progress-scoring[data-progress="42"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

.scoring .radial-progress-scoring[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

.scoring .radial-progress-scoring[data-progress="43"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

.scoring .radial-progress-scoring[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

.scoring .radial-progress-scoring[data-progress="44"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

.scoring .radial-progress-scoring[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

.scoring .radial-progress-scoring[data-progress="45"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

.scoring .radial-progress-scoring[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

.scoring .radial-progress-scoring[data-progress="46"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

.scoring .radial-progress-scoring[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

.scoring .radial-progress-scoring[data-progress="47"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

.scoring .radial-progress-scoring[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

.scoring .radial-progress-scoring[data-progress="48"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

.scoring .radial-progress-scoring[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

.scoring .radial-progress-scoring[data-progress="49"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

.scoring .radial-progress-scoring[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

.scoring .radial-progress-scoring[data-progress="50"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

.scoring .radial-progress-scoring[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

.scoring .radial-progress-scoring[data-progress="51"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

.scoring .radial-progress-scoring[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

.scoring .radial-progress-scoring[data-progress="52"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

.scoring .radial-progress-scoring[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

.scoring .radial-progress-scoring[data-progress="53"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

.scoring .radial-progress-scoring[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

.scoring .radial-progress-scoring[data-progress="54"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

.scoring .radial-progress-scoring[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

.scoring .radial-progress-scoring[data-progress="55"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

.scoring .radial-progress-scoring[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

.scoring .radial-progress-scoring[data-progress="56"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

.scoring .radial-progress-scoring[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

.scoring .radial-progress-scoring[data-progress="57"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

.scoring .radial-progress-scoring[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

.scoring .radial-progress-scoring[data-progress="58"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

.scoring .radial-progress-scoring[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

.scoring .radial-progress-scoring[data-progress="59"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

.scoring .radial-progress-scoring[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

.scoring .radial-progress-scoring[data-progress="60"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

.scoring .radial-progress-scoring[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

.scoring .radial-progress-scoring[data-progress="61"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

.scoring .radial-progress-scoring[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

.scoring .radial-progress-scoring[data-progress="62"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

.scoring .radial-progress-scoring[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

.scoring .radial-progress-scoring[data-progress="63"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

.scoring .radial-progress-scoring[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

.scoring .radial-progress-scoring[data-progress="64"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

.scoring .radial-progress-scoring[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

.scoring .radial-progress-scoring[data-progress="65"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

.scoring .radial-progress-scoring[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

.scoring .radial-progress-scoring[data-progress="66"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

.scoring .radial-progress-scoring[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

.scoring .radial-progress-scoring[data-progress="67"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

.scoring .radial-progress-scoring[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

.scoring .radial-progress-scoring[data-progress="68"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

.scoring .radial-progress-scoring[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

.scoring .radial-progress-scoring[data-progress="69"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

.scoring .radial-progress-scoring[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

.scoring .radial-progress-scoring[data-progress="70"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

.scoring .radial-progress-scoring[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

.scoring .radial-progress-scoring[data-progress="71"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

.scoring .radial-progress-scoring[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

.scoring .radial-progress-scoring[data-progress="72"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

.scoring .radial-progress-scoring[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

.scoring .radial-progress-scoring[data-progress="73"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

.scoring .radial-progress-scoring[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

.scoring .radial-progress-scoring[data-progress="74"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

.scoring .radial-progress-scoring[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

.scoring .radial-progress-scoring[data-progress="75"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

.scoring .radial-progress-scoring[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

.scoring .radial-progress-scoring[data-progress="76"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

.scoring .radial-progress-scoring[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

.scoring .radial-progress-scoring[data-progress="77"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

.scoring .radial-progress-scoring[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

.scoring .radial-progress-scoring[data-progress="78"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

.scoring .radial-progress-scoring[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

.scoring .radial-progress-scoring[data-progress="79"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

.scoring .radial-progress-scoring[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

.scoring .radial-progress-scoring[data-progress="80"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

.scoring .radial-progress-scoring[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

.scoring .radial-progress-scoring[data-progress="81"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

.scoring .radial-progress-scoring[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

.scoring .radial-progress-scoring[data-progress="82"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

.scoring .radial-progress-scoring[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

.scoring .radial-progress-scoring[data-progress="83"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

.scoring .radial-progress-scoring[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

.scoring .radial-progress-scoring[data-progress="84"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

.scoring .radial-progress-scoring[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

.scoring .radial-progress-scoring[data-progress="85"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

.scoring .radial-progress-scoring[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

.scoring .radial-progress-scoring[data-progress="86"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

.scoring .radial-progress-scoring[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

.scoring .radial-progress-scoring[data-progress="87"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

.scoring .radial-progress-scoring[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

.scoring .radial-progress-scoring[data-progress="88"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

.scoring .radial-progress-scoring[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

.scoring .radial-progress-scoring[data-progress="89"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

.scoring .radial-progress-scoring[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

.scoring .radial-progress-scoring[data-progress="90"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

.scoring .radial-progress-scoring[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

.scoring .radial-progress-scoring[data-progress="91"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

.scoring .radial-progress-scoring[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

.scoring .radial-progress-scoring[data-progress="92"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

.scoring .radial-progress-scoring[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

.scoring .radial-progress-scoring[data-progress="93"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

.scoring .radial-progress-scoring[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

.scoring .radial-progress-scoring[data-progress="94"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

.scoring .radial-progress-scoring[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

.scoring .radial-progress-scoring[data-progress="95"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

.scoring .radial-progress-scoring[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

.scoring .radial-progress-scoring[data-progress="96"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

.scoring .radial-progress-scoring[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

.scoring .radial-progress-scoring[data-progress="97"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

.scoring .radial-progress-scoring[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

.scoring .radial-progress-scoring[data-progress="98"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

.scoring .radial-progress-scoring[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

.scoring .radial-progress-scoring[data-progress="99"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

.scoring .radial-progress-scoring[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

.scoring .radial-progress-scoring[data-progress="100"] .circle .fill,
.scoring .radial-progress-scoring[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

.scoring .radial-progress-scoring[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

.scoring .radial-progress-scoring .circle .line {
    border-color: rgba(46, 57, 66, .2)
}

.scoring .radial-progress-scoring .points-container {
    background: #187fcb;
    background: linear-gradient(90deg, #187fcb 0, #488eb9);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#187fcb", endColorstr="#488eb9", GradientType=1);
    border-radius: 50%;
    height: 90%;
    left: 0;
    margin: 5%;
    position: absolute;
    top: 0;
    width: 90%
}

.scoring .radial-progress-scoring .points-container span {
    color: #fff;
    display: block;
    font-size: 2.5em;
    margin: 55px auto 0;
    max-width: 138px;
    padding: 0 5px
}

.scoring .radial-progress-scoring .points-container span span {
    font-size: 20px;
    margin: 8px 0 0
}

.scoring .col-md-8 {
    margin: 40px 0 0
}

.scoring .points-scale {
    margin: 35px 0 0
}

.scoring .points-scale img {
    border-radius: 50%;
    width: 100%
}

.scoring .points-scale .avatar {
    margin: 0 auto 45px;
    max-width: 170px;
    padding: 20px;
    position: relative
}

.scoring .points-scale .avatar:before {
    border: 2px solid #b1b1b4;
    border-radius: 50%;
    content: "";
    display: block;
    height: 150px;
    left: 8px;
    position: absolute;
    top: 8px;
    width: 150px
}

.scoring .points-scale .avatar:after {
    background: #b1b1b4;
    bottom: -35px;
    content: "";
    height: 30px;
    left: 50%;
    position: absolute;
    width: 2px
}

.scoring .points-scale .avatar img {
    position: relative;
    width: 130px;
    height: 130px
}

.scoring .points-scale li {
    margin: 0 0 20px
}

.scoring .points-scale li span {
    color: #4c4c4c;
    display: block;
    text-align: center
}

.scoring .points-scale li .points {
    margin: 10px 0;
    position: relative
}

.scoring .points-scale li:first-child {
    display: none
}

.scoring .points-scale li:nth-child(2) {
    position: relative
}

.scoring .points-scale li:nth-child(2) .avatar {
    margin: 0 auto 105px
}

.scoring .points-scale li:nth-child(2) .avatar:after {
    bottom: -95px;
    height: 30px
}

.scoring .points-scale li:nth-child(2) span {
    font-weight: 700
}

.scoring .points-scale li:nth-child(2):before {
    background: #b4bdbf;
    color: #5d666d;
    content: "Your Position";
    font-size: .875em;
    left: 50%;
    margin-left: -75px;
    padding: 5px 10px;
    position: absolute;
    text-align: center;
    top: 195px;
    width: 130px
}

.scoring .points-scale li:nth-child(2):after {
    left: 50%;
    border: solid transparent;
    content: " ";
    height: 0;
    width: 0;
    top: 170px;
    position: absolute;
    pointer-events: none;
    border-color: hsla(191, 8%, 73%, 0);
    border-bottom-color: #b4bdbf;
    border-width: 15px;
    margin-left: -15px
}

@media only screen and (min-width:768px) {
    .scoring .col-md-4 {
        float: left;
        width: 30%
    }
    .scoring .col-md-8 {
        float: left;
        margin: 0;
        padding: 0 0 0 5%;
        width: 70%
    }
    .scoring .points-scale {
        position: relative
    }
    .scoring .points-scale:after {
        background: #b1b1b4;
        content: "";
        height: 2px;
        left: 70px;
        position: absolute;
        top: 282px;
        width: 70%;
        z-index: 0
    }
    .scoring .points-scale li {
        float: left;
        width: 50%
    }
    .scoring .points-scale li .avatar,
    .scoring .points-scale li:nth-child(2) .avatar {
        margin: 0 auto 125px
    }
    .scoring .points-scale li .avatar:after {
        bottom: -95px;
        height: 80px
    }
    .scoring .points-scale li .points:before {
        background: #fff;
        content: "";
        height: 30px;
        left: 50%;
        margin-left: -16px;
        position: absolute;
        top: -35px;
        width: 32px;
        z-index: 1
    }
    .scoring .points-scale li .points:after {
        background: #b1b1b4;
        border-radius: 50%;
        content: "";
        height: 15px;
        left: 50%;
        margin-left: -7px;
        position: absolute;
        top: -25px;
        width: 15px;
        z-index: 2
    }
}

@media only screen and (min-width:1020px) {
    .scoring .points-scale:after {
        left: 95px
    }
}

@media only screen and (min-width:1240px) {
    .scoring .points-scale:after {
        left: 0;
        width: 100%
    }
    .scoring .points-scale li {
        width: 33%
    }
    .scoring .points-scale li:first-child {
        display: block
    }
    .scoring .points-scale li:first-child span {
        color: #c7c7c7
    }
    .scoring .points-scale li:nth-child(3) span {
        color: #4c4c4c;
        font-weight: 400
    }
}

.no-info {
    display: block;
    height: 120px;
    margin: 60px 0 0;
    text-align: center;
    color: #5d666d
}

.no-info a {
    display: block;
    margin: 15px auto 0;
    max-width: 220px
}

.dashboard-listing {
    margin: 30px auto
}

#all-cert-page {
    background: #f3f7f9;
    padding: 60px 0
}

#all-cert-page .available-products {
    background: none
}

#all-cert-page .head {
    background: #0091c7;
    margin: 0;
    padding: 15px;
    text-align: center
}

#all-cert-page .head h5,
#all-cert-page .head span {
    color: #fff;
    display: inline-block;
    font-size: 1.25em;
    margin: 0;
    vertical-align: middle
}

#all-cert-page .head span {
    margin-right: 5px
}

#all-cert-page .head .wrapper {
    padding: 50px 15px 30px
}

#all-cert-page .certificates {
    padding: 20px 0
}

@media only screen and (min-width:768px) {
    #all-cert-page {
        padding: 100px 0
    }
}

@media print {
    .dashboard-banner-img {
        display: none
    }
}

.course-listing .courses .advert-holder {
    display: block;
    float: none;
    margin: 0 0 20px;
    width: 100%
}

.course-listing .courses .advert-holder .ad {
    background: #2e3942;
    height: 95px;
    margin: 0 auto;
    max-width: 900px;
    padding: 1px 0;
    text-align: center;
    width: 100%
}

.course-listing .courses .advert-holder .ad h4 {
    color: #fff;
    display: block;
    margin: 30px 0 0
}

@media only screen and (min-width:1500px) {
    .course-listing {
        padding: 0 15px
    }
}

.listing-results-tabs {
    margin-top: 50px
}

.search-filters {
    font-size: 1.0625em;
    margin: 30px 0 20px;
    text-align: center
}

.search-filters.active .filters-trigger .icon-right-arrow {
    backface-visibility: hidden;
    transform: rotate(90deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

.search-filters .sort {
    display: block;
    font-size: .9375em;
    margin-top: 25px;
    text-align: center;
    width: 100%
}

.search-filters .sort p {
    display: none
}

.search-filters .sort select {
    border: 1px solid #d9dee2;
    color: #5d666d;
    display: inline-block;
    font-size: .875em;
    padding: 13px 15px;
    width: auto
}

.search-filters .sort select:hover {
    cursor: pointer
}

.search-filters .filters-trigger {
    position: relative
}

.search-filters .filters-trigger .icon-right-arrow {
    position: absolute;
    right: -30px;
    top: 3px;
    transition: all .3s ease-in
}

.search-filters a {
    color: #5d666d
}

.search-filters a .icon-filter {
    margin-right: 15px
}

.search-filters .filters-holder {
    display: none;
    margin-top: 20px
}

.search-filters .filters-holder [type="checkbox"]:checked+label {
    background: #0094c9;
    color: #fff
}

.search-filters .filters-holder [type="checkbox"]:checked+label[for="lp-type-broaden"] {
    background: #47ad4c
}

.search-filters .filters-holder [type="checkbox"]:checked+label[for="lp-type-master"] {
    background: #2d3942
}

.search-filters .filters-holder [type="checkbox"]:checked+label:after,
.search-filters .filters-holder p {
    display: none
}

.search-filters .filters-holder label {
    background: #f1f2f2;
    border-radius: 5px;
    color: #5d666d;
    display: inline-block;
    margin: 5px;
    font-size: .8125em;
    padding: 12px
}

.search-filters .filters-holder label h1 {
    display: inline;
    font-size: 14px;
    font-weight: 400
}

.search-filters .filters-holder label [class*="icon"] {
    font-size: 1.375em;
    margin-left: 15px;
    vertical-align: middle
}

.search-filters .filters-holder label button {
    background: #f1f2f2;
    padding: 0;
    color: #5d666d;
    font-size: .875em;
    width: 20px;
    position: relative;
    top: -2px;
    margin-left: 10px
}

.search-filters .filters-holder label button [class*="icon"] {
    margin-left: 0
}

.search-filters .filters-holder label:hover,
.search-filters .filters-holder label:hover button {
    background: #9099a0;
    color: #fff
}

.search-filters .filters-holder label:hover[for="lp-type-broaden"] {
    background: #47ad4c
}

.search-filters .filters-holder label:hover[for="lp-type-master"] {
    background: #2d3942
}

.search-filters .filters-holder label:before {
    display: none
}

.search-filters .filters-holder.active {
    display: block
}

.search-filters .filters-holder-category {
    width: 100%!important;
    display: block
}

@media only screen and (min-width:768px) {
    .search-filters {
        margin: 0
    }
    .search-filters .sort {
        display: inline-block;
        text-align: right;
        width: 160px;
        position: relative;
        top: 0
    }
    .search-filters .sort p {
        color: #69737b;
        display: block;
        font-weight: 600;
        font-size: 11px;
        font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        letter-spacing: .05em;
        margin-bottom: 10px;
        text-align: right;
        text-transform: uppercase
    }
    .search-filters .sort p span:before {
        margin-right: 10px
    }
    .search-filters .filters-trigger {
        display: none
    }
    .search-filters .filters-holder {
        display: inline-block!important;
        margin: 20px 0 10px;
        position: relative;
        text-align: left;
        width: calc(100% - 175px)
    }
    .search-filters .filters-holder p {
        color: #69737b;
        display: block;
        font-weight: 600;
        font-size: 11px;
        font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        letter-spacing: .05em;
        margin-bottom: 5px;
        margin-left: 10px;
        text-align: left;
        text-transform: uppercase
    }
    .search-filters .filters-holder p span:before {
        margin-right: 10px
    }
}

@media only screen and (min-width:1020px) {
    .search-filters .sort:before {
        right: 32%;
        margin-right: 0
    }
    .search-filters .filters-holder:before {
        left: 0;
        margin-left: 5px
    }
}

.search-results-container {
    text-align: center;
    margin-top: 20px
}

.search-results-container .results-count {
    color: #aaa;
    margin: 0
}

.listing-results-tabs .tab-header-inline2 {
    width: auto;
    margin: 0 10px
}

.listing-results-tabs .tab-header-inline2 .tab-title {
    border-color: #5d666d;
    padding: 10px 25px;
    background: #fff
}

.listing-results-tabs .tab-header-inline2 .tab-title h1 {
    color: #0091c7
}

.listing-results-tabs .tab-header-inline2 .tab-title a:not(.active),
.listing-results-tabs .tab-header-inline2 .tab-title i:not(.active) {
    color: #5d666d
}

.listing-results-tabs .tab-header-inline2 .tab-title i[class*="icon"] {
    font-size: 1.625em
}

.listing-results-tabs .tab-header-inline2 .tab-title a,
.listing-results-tabs .tab-header-inline2 .tab-title h1 {
    display: none
}

.listing-results-tabs .tab-header-inline2 .tab-title:hover a,
.listing-results-tabs .tab-header-inline2 .tab-title:hover h1,
.listing-results-tabs .tab-header-inline2 .tab-title:hover i {
    color: #0091c7
}

.listing-results-tabs .tab-header-inline2 .tab-title.active {
    border-right: 1px solid #5d666d
}

.listing-results-tabs .tab-header-inline2 .tab-title.active a,
.listing-results-tabs .tab-header-inline2 .tab-title.active i {
    color: #0091c7
}

.listing-results-tabs:after {
    content: "";
    position: absolute;
    width: calc(100% - 50px);
    border-bottom: 1px solid #5d666d;
    bottom: 0;
    left: 30px;
    z-index: -1
}

@media only screen and (min-width:768px) {
    .listing-results-tabs .tab-header-inline2 {
        position: relative;
        text-align: left
    }
    .listing-results-tabs .tab-header-inline2 .tab-title {
        padding: 10px 50px;
        margin: 0
    }
    .listing-results-tabs .tab-header-inline2 .tab-title h1 {
        line-height: .875em
    }
    .listing-results-tabs .tab-header-inline2 .tab-title a,
    .listing-results-tabs .tab-header-inline2 .tab-title h1 {
        font-size: 15px;
        display: inline-block;
        margin: 0;
        font-weight: 400
    }
    .listing-results-tabs .tab-header-inline2 .tab-title i[class*="icon"] {
        margin: 10px 10px 10px 0;
        height: 24px
    }
}

.search-tab-header {
    margin-bottom: 10px;
    text-align: center
}

.search-tab-header p {
    color: #aaa
}

@media only screen and (min-width:768px) {
    .search-tab-header p {
        margin: 0
    }
    .search-tab-header .results-count {
        float: left;
        margin-left: 10px;
        text-align: left;
        width: 200px
    }
    .search-tab-header .keywords {
        display: block;
        float: right;
        margin-right: 5px;
        width: calc(100% - 220px);
        text-align: right
    }
}

@media only screen and (min-width:1020px) {
    .search-tab-header .course-page-header {
        text-align: center
    }
}

#search-holder .breadcrumb {
    margin: 0 10px 10px;
    text-align: left
}

#search-holder .banner .banner-align {
    height: 250px
}

#search-holder .banner .banner-angle-flipped:after {
    height: 35px
}

#search-holder .banner .categories-search .categories-trigger:hover,
#search-holder .banner .categories-search button[type="submit"]:hover {
    background-color: #f1f2f2
}

#search-holder .banner .categories-search .categories-trigger:hover .filter-label,
#search-holder .banner .categories-search .categories-trigger:hover .icon-search,
#search-holder .banner .categories-search .categories-trigger:hover .icon-search-bar-categories,
#search-holder .banner .categories-search .categories-trigger:hover span,
#search-holder .banner .categories-search button[type="submit"]:hover .filter-label,
#search-holder .banner .categories-search button[type="submit"]:hover .icon-search,
#search-holder .banner .categories-search button[type="submit"]:hover .icon-search-bar-categories,
#search-holder .banner .categories-search button[type="submit"]:hover span {
    color: #0094c9
}

.faqs .container {
    margin: 30px auto;
    position: relative
}

.faqs .container .wrapper {
    padding: 0
}

.faqs .container .content {
    background: #fff;
    max-width: 775px;
    position: relative;
    z-index: 3
}

.faqs .left-column {
    background: #fff
}

.faqs .no-questions {
    margin-bottom: 25px
}

.faqs .no-questions h5 {
    color: #2e3942;
    font: 400 1.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 5px
}

.faqs .no-questions p {
    color: #5d666d;
    margin: 15px auto;
    width: 265px
}

.faqs .no-questions a {
    color: #fff;
    font-size: .875em;
    padding: 10px 0;
    width: 140px
}

.faqs .right-column {
    background: #f3f6f7;
    padding: 30px 0 40px;
    margin: 20px 20px 0;
    text-align: center
}

.faqs .right-column .sidebar-support {
    clear: both;
    display: block;
    margin: 0 auto;
    max-width: 290px;
    padding: 45px 20px 20px
}

.faqs .right-column .sidebar-support h5 {
    color: #2e3942;
    display: block;
    font: 400 1.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 5px;
    text-align: center
}

.faqs .right-column .sidebar-support p {
    color: #5d666d;
    margin: 15px 0;
    text-align: center
}

.faqs .right-column .sidebar-support a {
    font-size: .875em;
    padding: 10px 0;
    text-align: center;
    width: 140px
}

.faqs .right-column h4 {
    color: #2e3942;
    display: block;
    font: 400 1.5625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 0 10px 10px;
    text-align: center
}

.faqs .right-column h4 .icon-technology {
    margin-right: 10px;
    top: 5px
}

.faqs .right-column .most-popular {
    margin: 0 25px
}

.faqs .right-column .most-popular .popular-angle {
    position: relative;
    z-index: 1
}

.faqs .right-column .most-popular .popular-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 25px;
    width: 100%
}

.faqs .right-column .most-popular ul {
    background-color: #fff;
    position: relative;
    text-align: center
}

.faqs .right-column .text {
    margin: 35px 10px;
    position: relative;
    text-align: center
}

.faqs .right-column .text .question {
    width: 100%;
    padding-left: 15px;
    margin-top: 5px
}

.faqs .right-column .text p {
    color: #5d666d;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0;
    word-wrap: break-word
}

.faqs .right-column .text p:hover {
    color: #0091c7;
    transition: color .3s ease-in
}

.faqs .right-column .text span {
    color: #0091c7;
    font-size: 1.875em
}

.faqs h1 {
    border-bottom: 2px solid #0091c7;
    color: #2d3942;
    display: inline-block;
    font: 400 1.1875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 45px;
    padding: 0 0 5px
}

.faqs .topics {
    background: #f3f6f7
}

.faqs .topics .question-container {
    margin: 0 30px
}

.faqs .topics .question-container .question {
    padding: 0 15px;
    color: #5d666d
}

.faqs .topics .question-container .question span {
    margin: 0
}

.faqs .topics .question-container .question a {
    color: #0091c7
}

.faqs .topics .question-container .question a:hover {
    text-decoration: underline
}

.faqs .topics .question-container span {
    margin: 20px 15px
}

.faqs .topics .question-container span p {
    display: inline-block
}

.faqs .topics .question-container span a {
    display: inline-block;
    margin-left: 10px;
    padding: 5px 25px
}

.faqs .topics .question-container .is-helpful,
.faqs .topics .question-container .not-helpful-contact {
    display: none;
    margin: 0 15px
}

.faqs .topics .results_text {
    color: #2d3942;
    font-size: .8125em;
    margin-right: 10px;
    position: relative;
    text-align: right;
    top: 13.5%
}

.faqs .topics .faq-title {
    margin-bottom: 20px
}

.faqs .topics .faq-title p {
    margin: 0
}

.faqs .topics .section_nav,
.faqs .topics .section_nav_faqs {
    background: #0091c7;
    color: #fff;
    display: table-cell;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 10px;
    text-align: center;
    vertical-align: middle
}

.faqs .topics .section_nav:hover {
    background: #aaa
}

.faqs .topics .section_nav_faqs {
    font-size: 1.125em
}

.faqs .topics h2 {
    background: #2e3942;
    color: #fff;
    display: table-cell;
    font: 300 1.1875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 30px;
    padding: 10px;
    width: 100%
}

.faqs .topics h2 span {
    float: right;
    margin-right: 10px;
    position: relative;
    top: 2px
}

.faqs .topics .faqs-container {
    text-align: left
}

.faqs .topics .faqs-container .counter {
    float: left;
    text-align: center;
    width: 15%
}

.faqs .topics .faqs-container .counter p {
    background: rgba(0, 145, 199, .8);
    border-radius: 50%;
    color: #fff;
    width: 30px;
    height: 30px;
    margin: 0 auto;
    padding: 4px 0
}

.faqs .topics .faqs-container li {
    background: none;
    display: inline-block;
    margin: 0;
    padding: 3px 20px 0;
    width: 100%
}

.faqs .topics .faqs-container h4 {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.faqs .topics .faqs-container h4 a {
    color: #0091c7
}

.faqs .topics .faqs-container h4 a:hover {
    text-decoration: underline
}

.faqs .topics .faqs-container p {
    margin: 0;
    width: 100%
}

.faqs .topics .faqs-container span {
    color: #0091c7;
    display: block;
    font-size: .9375em;
    margin: 5px 0 20px;
    text-align: right
}

.faqs .topics .faqs-container span:before {
    margin-right: 5px
}

.faqs .topics .sections-subsections {
    display: block;
    text-align: center
}

.faqs .topics .sections-subsections li {
    background: #fff;
    color: #0091c7;
    display: inline-block;
    margin-bottom: 30px;
    position: relative
}

.faqs .topics .sections-subsections li span {
    color: #0091c7;
    display: block;
    font-size: 3.75em;
    margin: 30px 0 20px;
    text-align: center
}

.faqs .topics .sections-subsections li.icon-publishing {
    color: #5d448e
}

.faqs .topics .sections-subsections li.icon-studyGroups {
    color: #00703e
}

.faqs .topics .sections-subsections li.icon-flashTesting {
    color: #bf4f00
}

.faqs .topics .sections-subsections li h3 {
    background: #0091c7;
    color: #fff;
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 6px;
    text-align: center
}

.faqs .topics .sections-subsections li p {
    color: #2d3942;
    margin: 0 auto 20px;
    width: 250px
}

.faqs .topics .sections-subsections li a:hover h3 {
    background: #2e3942;
    transition: color .3s ease-in
}

.faqs .topics .text {
    text-align: left;
    width: 250px;
    margin: 0 auto
}

.faqs .topics .text li {
    margin: 20px 0
}

.faqs .topics .text .icon-faq {
    color: #0091c7;
    display: inline-block;
    font-size: 1.5em;
    margin-right: 15px
}

.faqs .topics .text .faq-question {
    color: #5d666d;
    display: inline-block;
    width: 200px;
    word-wrap: break-word;
    vertical-align: top
}

.faqs .topics .text .faq-question:hover {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    .faqs .topics .results_text {
        top: 20%
    }
    .faqs .topics .section_nav,
    .faqs .topics .section_nav_faqs {
        font-size: .9375em;
        padding: 15px
    }
    .faqs .topics .section_nav_faqs {
        font-size: 1.3125em
    }
    .faqs .topics .faqs-container .counter {
        width: 10%
    }
    .faqs .topics .faqs-container li {
        width: 100%
    }
    .faqs .topics h2 {
        font-size: 1.3125em
    }
    .faqs .left-column {
        padding: 0 20px
    }
    .faqs .right-column h4 {
        font-size: 1.5em
    }
    .faqs .right-column .text {
        text-align: left
    }
    .faqs .right-column .text .question {
        width: calc(100% - 60px)
    }
}

@media only screen and (min-width:1020px) {
    .faqs .left-column .sidebar-support {
        max-width: 310px
    }
    .faqs .left-column .topics .sections-subsections li {
        width: 50%;
        max-width: 280px
    }
    .faqs .left-column .topics .sections-subsections li:nth-child(2n) {
        margin-left: 30px
    }
    .faqs .right-column {
        padding: 15px 0 50px;
        margin: 0
    }
    .faqs .right-column .text .question {
        margin-left: 15px
    }
}

.login-container-angle {
    position: relative;
    z-index: 1
}

.login-container-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 15px;
    width: 100%
}

.alison-logo {
    border-radius: 50%;
    margin: 0 auto;
    width: 100px;
    height: 100px;
    padding: 15px;
    position: relative;
    display: block;
    top: 55px;
    z-index: 2;
    background: #fff
}

.alison-logo img {
    width: 100%
}

#signup .sub-msg {
    font-size: 1em;
    color: #5d666d;
    display: inline-block;
    margin-top: 10px;
    width: 100%;
    text-align: center
}

#signup .form-group {
    padding-bottom: 20px
}

#signup .form-group .errors {
    margin: 5px -5px
}

#signup .form-group .errors .icon-error {
    font-size: 1em
}

#signup .form-group .errors .error-message {
    margin: 0;
    font-size: .75em
}

#signup .g-recaptcha {
    margin-top: 15px
}

#signup .g-recaptcha div {
    margin: 0 auto
}

#signup .captcha .errors {
    text-align: center
}

#signup .captcha .errors .error-message {
    font-size: .75em
}

#signup .captcha .errors .error-message .icon-error {
    font-size: 1.375em
}

#login .form-group {
    padding-bottom: 20px
}

#login .form-group .errors {
    margin: 15px 0 0
}

#login .form-group .errors .icon-error {
    font-size: 1.0625em
}

#login .form-group .errors .error-message {
    width: calc(100% - 30px);
    font-size: .6875em
}

#reset_password {
    padding-top: 40px
}

.form-group {
    min-height: 187px;
    padding: 5px 15px 0
}

.form-group button,
.form-group input,
.form-group select,
.form-group textarea {
    color: #5d666d;
    background: rgba(74, 46, 129, 0);
    font-size: 1em
}

.form-group ul {
    display: inline
}

.form-group ul a {
    color: #5d666d
}

.form-group ul a:hover {
    color: #0091c7
}

.form-group input[type="submit"] {
    background: #0091c7;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    color: #fff;
    cursor: pointer;
    font-size: 1.125em;
    margin: 20px auto 10px;
    padding: 10px;
    text-align: center;
    width: 100%
}

.form-group input[type="submit"]:hover {
    background: rgba(0, 145, 199, .8)
}

.form-group .input-field,
.form-group .input-field-email {
    border-bottom: 1px solid #d3dade;
    margin-top: 18px;
    position: relative
}

.form-group .input-field-email:before,
.form-group .input-field:before {
    color: #0091c7;
    font-size: 20px;
    left: 0;
    position: absolute;
    top: 12px
}

.form-group .icon-lock,
.form-group .icon-user,
.form-group .input-field-email.icon-envelope,
.form-group .input-field.icon-envelope {
    color: #0091c7;
    padding-left: 10px
}

.form-group .icon-lock:before,
.form-group .icon-user:before,
.form-group .input-field-email.icon-envelope:before,
.form-group .input-field.icon-envelope:before {
    font-size: 1em;
    top: 11px;
    margin-left: 4px
}

.form-group .form-link {
    color: #5d666d;
    display: inline-block;
    font-weight: 400;
    font-size: .75em;
    margin-left: 23px;
    text-align: center;
    text-decoration: underline
}

.form-group .form-link[data-name*="forgotpassword"] {
    margin: 10px 0 0;
    text-align: left;
    display: block
}

.form-group .form-link:hover {
    color: #0091c7
}

.form-group p {
    color: #5d666d;
    display: block;
    font-weight: 400;
    margin: 26px 0 0;
    text-align: left;
    width: 100%
}

.form-group #login-buttons li.signup-account {
    background: none
}

.form-group #login-buttons li.signup-account a {
    background: none;
    font-size: 15px
}

.form-group #login-buttons li.signup-account.terms a {
    font-size: .8125em
}

.content-pw p {
    margin-top: 17px;
    padding: 0 10px;
    text-align: left;
    width: 100%
}

.content-pw img {
    display: block;
    margin: 0 auto;
    padding: 22px 0
}

.login-container {
    margin: 100px auto 0;
    position: relative;
    max-width: 290px;
    z-index: 3
}

.login-container .signup-account {
    background: none;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    color: #5d666d;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-top: 10px
}

.login-container .signup-account a {
    color: #0091c7;
    display: inline-block;
    text-decoration: underline
}

.login-container .signup-account a:hover {
    color: #5d666d
}

.login-container .or-line {
    width: 100%;
    height: 29px;
    margin-top: 14px;
    text-align: center
}

.login-container .or-line span {
    display: inline-block;
    padding: 5px;
    position: relative;
    color: #5d666d;
    font-weight: 700
}

.login-container .or-line span:after,
.login-container .or-line span:before {
    content: "";
    width: 112px;
    background-color: #5d666d;
    position: absolute;
    height: 1px;
    top: calc(50% - 1px)
}

.login-container .or-line span:before {
    left: -116px
}

.login-container .or-line span:after {
    right: -116px
}

.login-container .tab-content {
    background: #fff;
    background: linear-gradient(180deg, #fff 0, #e7ecf0);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFFFFFFF", endColorstr="#FFE7ECF0", GradientType=0);
    padding-top: 1px
}

.login-container .tab-content h4 {
    color: #fff;
    display: block;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 20px;
    text-align: left
}

.login-container .tab-content .tab {
    display: none
}

.login-container .tab-content .tab h1,
.login-container .tab-content .tab h3 {
    color: #fff;
    font: 300 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    left: 0;
    text-align: center;
    top: 0;
    width: 100%;
    margin: 12px 0 0;
    color: #5d666d
}

.login-container .tab-content .tab.active {
    display: list-item
}

.login-container .tab-content .tab-navbar .tab-title {
    background: #0091c7;
    border-radius: 3px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    font-size: 1.1875em;
    margin: 5px auto;
    padding: 10px;
    text-align: center;
    width: 100%
}

.login-container .tab-content .tab-navbar .tab-title button {
    color: #fff;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 14px
}

.login-container .tab-content .icon-group {
    background: #fff;
    margin: 15px auto 0;
    padding: 10px 15px;
    text-align: center;
    width: 280px
}

.login-container .tab-content .icon-group a {
    color: #5d666d;
    margin: 0 2px 5px;
    color: #fff;
    text-align: center;
    display: block;
    width: 46px;
    height: 46px;
    float: left;
    border-radius: 3px;
    transform: perspective(1px) translateZ(0)
}

.login-container .tab-content .icon-group a:first-child {
    background-color: #3b5999
}

.login-container .tab-content .icon-group a:nth-child(2) {
    background-color: #dd4b39
}

.login-container .tab-content .icon-group a:nth-child(3) {
    background-color: #410093
}

.login-container .tab-content .icon-group a:nth-child(4) {
    background-color: #0084ff
}

.login-container .tab-content .icon-group a:nth-child(5) {
    background-color: #0077b5
}

.login-container .tab-content .icon-group a:hover {
    animation: pushbutton .5s
}

.login-container .tab-content .icon-group a:hover:after {
    height: 50px
}

.login-container .tab-content .icon-group [class*="icon"] {
    position: relative;
    font-size: 1.5em;
    padding: 11px 9px;
    display: inline-block
}

.login-container .tab-content .icon-group [class*="icon"]:before {
    position: relative;
    z-index: 2
}

.login-container .tab-content .icon-group [class*="icon"]:after {
    background: #fff;
    bottom: 5px;
    content: "";
    height: 0;
    left: -11px;
    position: absolute;
    width: 58px;
    transition: all .2s ease-in
}

@media only screen and (min-width:768px) {
    .login-container .tab-content .icon-group {
        padding: 10px 0;
        width: 311px
    }
    .login-container .tab-content .icon-group a {
        margin: 0 8px 5px
    }
}

.login-container .tab-content .input-field.icon-envelope,
.login-container .tab-content .input-field.icon-user:nth-child(2) {
    margin-top: 0
}

@media only screen and (min-width:768px) {
    .login-container .or-line span:after,
    .login-container .or-line span:before {
        width: 150px
    }
    .login-container .or-line span:before {
        left: -156px
    }
    .login-container .or-line span:after {
        right: -156px
    }
}

@media only screen and (min-width:1020px) {
    .form-group .form-link {
        margin-left: 25px
    }
    .form-group .errors .error-message {
        width: 75%
    }
    .login-container {
        margin: 130px auto 0;
        position: absolute;
        right: 20px;
        top: 0;
        max-width: 316px
    }
    #signup-form .icon-lock,
    #signup-form .input-field-email.icon-envelope,
    #signup-form .input-field.icon-envelope {
        display: inline-block;
        width: 100%
    }
    #signup-form .input-field-email {
        margin: 18px 0 0
    }
}

@media only screen and (min-width:1240px) {
    .login-container {
        right: 0
    }
}

[type=checkbox]:checked+label,
[type=checkbox]:not(:checked)+label {
    cursor: pointer;
    font-size: .8125em;
    position: relative;
    padding-left: 23px
}

[type=checkbox]:checked+label:before,
[type=checkbox]:not(:checked)+label:before {
    border: 1px solid #aaa;
    background: #f8f8f8;
    content: "";
    height: 14px;
    position: absolute;
    left: 0;
    top: -2px;
    width: 14px
}

[type=checkbox]:checked+label:after,
[type=checkbox]:not(:checked)+label:after {
    color: #0091c7;
    left: 3px;
    line-height: .8;
    font-size: 15px;
    position: absolute;
    top: 1px;
    transition: all .2s
}

[type=checkbox]:not(:checked)+label:after {
    opacity: 0;
    transform: scale(0)
}

[type="checkbox"]:checked+label:after {
    opacity: 1;
    transform: scale(1)
}

[type=checkbox]:disabled:checked+label:before,
[type=checkbox]:disabled:not(:checked)+label:before {
    box-shadow: none;
    border-color: #bbb;
    background-color: #ddd
}

[type="checkbox"]:disabled:checked+label:after {
    color: #999
}

[type="checkbox"]:disabled+label {
    color: #aaa
}

@keyframes pushbutton {
    50% {
        transform: scale(.8)
    }
    to {
        transform: scale(1)
    }
}

.login {
    position: relative
}

.login .half-width .form-link[data-name*="forgotpassword"],
.login .half-width label {
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.login:before {
    background: url("<?php echo smarty_function_root_url(array(),$_smarty_tpl);?>
/<?php echo smarty_cms_function_random_image_selective(array('dir'=>((string)$_smarty_tpl->tpl_vars['CustomGS']->value['background_home_random'])),$_smarty_tpl);?>
") no-repeat;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 0
}

.login-modal,
.login-page {
    height: calc(100vh - 100px);
    height: 700px
}

.login-modal.register-box,
.login-page.register-box {
    height: 800px
}

.login-modal .login-container,
.login-page .login-container {
    margin: 0 auto;
    max-width: 300px;
    position: relative
}

.login-modal .login-container .tab-content,
.login-page .login-container .tab-content {
    border-radius: 8px
}

@media only screen and (min-width:768px) {
    .login-modal .half-width,
    .login-page .half-width {
        display: inline-block;
        margin-right: -5px;
        text-align: left;
        width: 50%
    }
    .login-modal .half-width .form-link[data-name*="forgotpassword"],
    .login-page .half-width .form-link[data-name*="forgotpassword"] {
        text-align: right
    }
    .login-modal .login-container,
    .login-page .login-container {
        max-width: 380px
    }
}

@media only screen and (min-width:1240px) {
    .login-modal,
    .login-page {
        height: 800px
    }
}

@media only screen and (xxl-desktop) {
    .login-modal,
    .login-page {
        height: 900px
    }
}

#posts .banner h1 {
    margin: 45px 0
}

#posts .review-headline {
    text-align: center;
    color: rgba(93, 102, 109, .9)
}

#posts .review-headline h2 {
    font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 5px
}

#posts .review-headline h3 {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

@media only screen and (min-width:768px) {
    #posts .review-headline h2 {
        font-size: 1.3125em
    }
    #posts .review-headline h3 {
        font-size: 1.375em
    }
    #posts .info-box {
        margin: 0 auto 40px
    }
    #posts .info-box .top .title {
        font-size: 1.1875em
    }
    #posts .info-box .top .addon {
        font-size: .875em;
        top: -23px
    }
    #posts .info-box .body {
        margin: 0
    }
    #posts .info-box .body p {
        margin: 0 20px 0 30px;
        position: relative;
        top: -10px
    }
}

@media only screen and (min-width:1020px) {
    #posts .review-headline h2 {
        font-size: 1.4375em
    }
    #posts .review-headline h3 {
        font-size: 1.5em
    }
    #posts .info-box .top .title {
        font-size: 1.25em
    }
    #posts .info-box .top .addon {
        font-size: .875em;
        top: -23px
    }
    #posts .info-box .body p {
        margin: 0 70px 0 40px;
        top: -25px
    }
}

.posts-banner-background {
    position: absolute;
    left: -100px;
    top: 0;
    display: none
}

@media only screen and (min-width:1020px) {
    .posts-banner-background {
        display: block
    }
}

footer.main {
    margin: 0!important
}

#landing-banner {
    height: 100%;
    padding: 0;
    position: relative
}

#landing-banner .banner-title {
    color: #fff;
    display: block;
    margin: 70px 0;
    position: relative;
    text-align: center
}

#landing-banner .banner-title h3 {
    font: 400 1.375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#landing-banner .banner-title .icon-holder img {
    display: block;
    margin: auto
}

#landing-banner .banner-title .icon-holder li {
    display: inline-block;
    margin: 10px 0;
    width: 110px
}

#landing-banner .banner-title .icon-holder h4 {
    background: #2e3942;
    border-radius: 5px;
    font: 400 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    letter-spacing: .05em;
    margin: 2px;
    padding: 5px 0
}

@media only screen and (min-width:1020px) {
    #landing-banner {
        overflow: visible;
        position: relative;
        z-index: 3
    }
    #landing-banner .banner-title {
        float: left;
        max-width: 380px;
        padding: 100px 0;
        text-align: left;
        margin-top: 30px
    }
    #landing-banner .banner-title .icon-holder li {
        width: 120px
    }
    #landing-banner .banner-title .icon-holder h4 {
        font-size: .75em
    }
    #landing-banner .icon-holder {
        text-align: center
    }
    #landing-banner .icon-holder img {
        display: block;
        margin: auto
    }
    #landing-banner .icon-holder li {
        display: inline-block;
        margin: 10px 0;
        width: 180px
    }
    #landing-banner .icon-holder h4 {
        background: #2e3942;
        border-radius: 5px;
        font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        letter-spacing: .05em;
        margin: 2px;
        padding: 5px 0
    }
    #landing-banner .wrapper {
        position: relative;
        z-index: 3
    }
}

.product-login.purple [class*="icon"],
.product-login.purple [class*="icon"]:before {
    color: #5d448e
}

.product-login.purple .submit-login {
    background: #5d448e;
    transition: all .2s ease-in
}

.product-login.purple .submit-login:hover {
    background: #7457ae
}

#landing-middle {
    background: #fff;
    padding: 30px 0;
    position: relative;
    height: 100%
}

#landing-middle .middle-title {
    display: block;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    width: 100%
}

#landing-middle .middle-title h3 {
    margin-bottom: 25px;
    text-align: center
}

#landing-middle .middle-title h3 .icon-courses {
    display: inline-block;
    font-size: 1.125em;
    height: 100%;
    margin-right: 10px
}

#landing-middle>.wrapper {
    margin: 20px auto
}

#landing-middle .slick-slider-middle {
    margin-bottom: 40px;
    text-align: center
}

#landing-middle .slick-slider-middle li {
    outline: none
}

#landing-middle .slick-slider-middle .middle-content {
    margin-top: 20px
}

#landing-middle .slick-slider-middle .middle-content h4 {
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 5px;
    text-align: center
}

#landing-middle .slick-slider-middle .image-main {
    display: block;
    margin: 0 auto 20px;
    max-width: 425px;
    width: 100%
}

#landing-middle .slick-slider-middle img {
    display: inline-block;
    margin-right: 10px;
    width: 80px
}

#landing-middle .slick-slider-middle .slick-dots {
    margin: 30px 0 0;
    text-align: center
}

#landing-middle .slick-slider-middle .slick-dots li {
    display: inline-block;
    margin: 5px
}

#landing-middle .slick-slider-middle .slick-dots li button {
    background: none;
    border: 1px solid #2e3942;
    border-radius: 50%;
    display: block;
    height: 15px;
    padding: 0;
    text-indent: -9999px;
    width: 15px
}

#landing-middle .slick-slider-middle .slick-dots li.slick-active button {
    background: #2e3942
}

#landing-middle .slick-slider-middle .slick-list {
    margin: 0 auto
}

#landing-middle .slick-slider-middle .slick-list p {
    font: 400 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 auto;
    max-width: 700px;
    padding: 25px 0;
    text-align: center
}

@media only screen and (min-width:1020px) {
    #landing-middle .slick-slider-middle img {
        display: inline-block;
        margin-right: 23px;
        width: 110px
    }
    #landing-middle .slick-slider-middle .image-main {
        float: left;
        width: 42%
    }
    #landing-middle .slick-slider-middle .middle-content {
        float: right;
        padding: 0 65px;
        width: 58%
    }
    #landing-middle .slick-slider-middle .middle-content h4 {
        margin-left: 25px;
        text-align: left
    }
    #landing-middle .slick-slider-middle .slick-list p {
        font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        text-align: justify;
        padding: 25px
    }
}

#landing-bottom {
    background: #465159;
    height: 100%;
    padding-bottom: 25px;
    position: relative;
    width: 100%
}

#landing-bottom .angle-bottom {
    height: 40px;
    left: 0;
    position: absolute;
    right: 0;
    width: 100%;
    z-index: 2
}

#landing-bottom .angle-bottom .angle {
    border-right: 100vw solid #465159;
    border-top: 37px solid transparent;
    border-bottom: 0 solid transparent;
    content: "";
    height: 100%;
    position: absolute;
    top: -39px;
    width: 100%
}

#landing-bottom .bottom-title {
    color: #fff;
    display: block;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding-top: 30px;
    width: 100%
}

#landing-bottom .bottom-title h3 {
    display: block;
    margin: 20px 0;
    text-align: center
}

#landing-bottom .bottom-title h3 .icon-technology {
    display: inline-block;
    font-size: 1.25em;
    height: 100%;
    margin-right: 10px;
    position: relative;
    top: 5px
}

#landing-bottom .slick-slider {
    display: block;
    padding-bottom: 40px
}

#landing-bottom .slick-slider li {
    outline: none
}

#landing-bottom .slick-slider .slick-dots {
    margin: 30px 0 0;
    text-align: center
}

#landing-bottom .slick-slider .slick-dots li {
    display: inline-block;
    margin: 5px
}

#landing-bottom .slick-slider .slick-dots li button {
    background: none;
    border: 1px solid #2e3942;
    border-radius: 50%;
    display: block;
    height: 15px;
    padding: 0;
    text-indent: -9999px;
    width: 15px
}

#landing-bottom .slick-slider .slick-dots li.slick-active button {
    background: #fff
}

#landing-bottom .slick-slider .slick-list {
    width: 80%;
    margin: 0 auto
}

#landing-bottom .slick-slider .slick-list p {
    color: #fff;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 15px
}

#profile input::-webkit-calendar-picker-indicator {
    display: none!important;
    visibility: hidden!important;
    -webkit-appearance: none
}

#profile .banner .radial-progress-profile-picture {
    margin: 0 auto 20px;
    width: 210px;
    height: 210px;
    background-color: transparent;
    border-radius: 50%
}

#profile .banner .radial-progress-profile-picture .circle {
    position: relative
}

#profile .banner .radial-progress-profile-picture .circle .line {
    background: none;
    border-radius: 50%;
    width: 204px;
    height: 204px;
    border: 3px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 3px;
    left: 3px
}

#profile .banner .radial-progress-profile-picture .circle .fill,
#profile .banner .radial-progress-profile-picture .circle .mask,
#profile .banner .radial-progress-profile-picture .circle .shadow {
    width: 210px;
    height: 210px;
    position: absolute;
    border-radius: 50%
}

#profile .banner .radial-progress-profile-picture .circle .fill,
#profile .banner .radial-progress-profile-picture .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

#profile .banner .radial-progress-profile-picture .circle .mask {
    clip: rect(0, 210px, 210px, 105px)
}

#profile .banner .radial-progress-profile-picture .circle .mask .fill {
    clip: rect(0, 105px, 210px, 0);
    background: none;
    border: 9px solid #fff
}

#profile .banner .radial-progress-profile-picture .inset {
    width: 201px;
    height: 201px;
    position: absolute;
    margin-left: 4.5px;
    margin-top: 4.5px;
    background: none;
    border-radius: 50%
}

#profile .banner .radial-progress-profile-picture .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 15px;
    text-align: center
}

#profile .banner .radial-progress-profile-picture .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 3.9375em!important;
    color: #fff
}

#profile .banner .radial-progress-profile-picture .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #fff
}

#profile .banner .radial-progress-profile-picture[data-progress="0"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="0"] .circle .fill.fix,
#profile .banner .radial-progress-profile-picture[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="1"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="1"] .circle .fill.fix,
#profile .banner .radial-progress-profile-picture[data-progress="2"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="3"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="4"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="5"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="6"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="7"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="8"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="9"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="10"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="11"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="12"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="13"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="14"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="15"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="16"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="17"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="18"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="19"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="20"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="21"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="22"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="23"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="24"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="25"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="26"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="27"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="28"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="29"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="30"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="31"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="32"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="33"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="34"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="35"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="36"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="37"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="38"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="39"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="40"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="41"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="42"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="43"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="44"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="45"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="46"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="47"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="48"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="49"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="50"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="51"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="52"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="53"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="54"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="55"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="56"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="57"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="58"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="59"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="60"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="61"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="62"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="63"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="64"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="65"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="66"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="67"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="68"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="69"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="70"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="71"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="72"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="73"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="74"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="75"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="76"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="77"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="78"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="79"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="80"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="81"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="82"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="83"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="84"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="85"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="86"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="87"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="88"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="89"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="90"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="91"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="92"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="93"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="94"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="95"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="96"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="97"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="98"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="99"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

#profile .banner .radial-progress-profile-picture[data-progress="100"] .circle .fill,
#profile .banner .radial-progress-profile-picture[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

#profile .banner .radial-progress-profile-picture[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

#profile .banner .radial-progress-230 {
    margin: 0 auto 20px;
    width: 230px;
    height: 230px;
    background-color: transparent;
    border-radius: 50%
}

#profile .banner .radial-progress-230 .circle {
    position: relative
}

#profile .banner .radial-progress-230 .circle .line {
    background: none;
    border-radius: 50%;
    width: 224px;
    height: 224px;
    border: 3px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 3px;
    left: 3px
}

#profile .banner .radial-progress-230 .circle .fill,
#profile .banner .radial-progress-230 .circle .mask,
#profile .banner .radial-progress-230 .circle .shadow {
    width: 230px;
    height: 230px;
    position: absolute;
    border-radius: 50%
}

#profile .banner .radial-progress-230 .circle .fill,
#profile .banner .radial-progress-230 .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

#profile .banner .radial-progress-230 .circle .mask {
    clip: rect(0, 230px, 230px, 115px)
}

#profile .banner .radial-progress-230 .circle .mask .fill {
    clip: rect(0, 115px, 230px, 0);
    background: none;
    border: 16px solid #fff
}

#profile .banner .radial-progress-230 .inset {
    width: 214px;
    height: 214px;
    position: absolute;
    margin-left: 8px;
    margin-top: 8px;
    background: none;
    border-radius: 50%
}

#profile .banner .radial-progress-230 .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px;
    text-align: center
}

#profile .banner .radial-progress-230 .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 4.3125em!important;
    color: #fff
}

#profile .banner .radial-progress-230 .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #fff
}

#profile .banner .radial-progress-230[data-progress="0"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="0"] .circle .fill.fix,
#profile .banner .radial-progress-230[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

#profile .banner .radial-progress-230[data-progress="1"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

#profile .banner .radial-progress-230[data-progress="1"] .circle .fill.fix,
#profile .banner .radial-progress-230[data-progress="2"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

#profile .banner .radial-progress-230[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

#profile .banner .radial-progress-230[data-progress="3"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

#profile .banner .radial-progress-230[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

#profile .banner .radial-progress-230[data-progress="4"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

#profile .banner .radial-progress-230[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

#profile .banner .radial-progress-230[data-progress="5"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

#profile .banner .radial-progress-230[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

#profile .banner .radial-progress-230[data-progress="6"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

#profile .banner .radial-progress-230[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

#profile .banner .radial-progress-230[data-progress="7"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

#profile .banner .radial-progress-230[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

#profile .banner .radial-progress-230[data-progress="8"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

#profile .banner .radial-progress-230[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

#profile .banner .radial-progress-230[data-progress="9"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

#profile .banner .radial-progress-230[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

#profile .banner .radial-progress-230[data-progress="10"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

#profile .banner .radial-progress-230[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

#profile .banner .radial-progress-230[data-progress="11"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

#profile .banner .radial-progress-230[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

#profile .banner .radial-progress-230[data-progress="12"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

#profile .banner .radial-progress-230[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

#profile .banner .radial-progress-230[data-progress="13"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

#profile .banner .radial-progress-230[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

#profile .banner .radial-progress-230[data-progress="14"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

#profile .banner .radial-progress-230[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

#profile .banner .radial-progress-230[data-progress="15"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

#profile .banner .radial-progress-230[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

#profile .banner .radial-progress-230[data-progress="16"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

#profile .banner .radial-progress-230[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

#profile .banner .radial-progress-230[data-progress="17"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

#profile .banner .radial-progress-230[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

#profile .banner .radial-progress-230[data-progress="18"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

#profile .banner .radial-progress-230[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

#profile .banner .radial-progress-230[data-progress="19"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

#profile .banner .radial-progress-230[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

#profile .banner .radial-progress-230[data-progress="20"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

#profile .banner .radial-progress-230[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

#profile .banner .radial-progress-230[data-progress="21"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

#profile .banner .radial-progress-230[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

#profile .banner .radial-progress-230[data-progress="22"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

#profile .banner .radial-progress-230[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

#profile .banner .radial-progress-230[data-progress="23"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

#profile .banner .radial-progress-230[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

#profile .banner .radial-progress-230[data-progress="24"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

#profile .banner .radial-progress-230[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

#profile .banner .radial-progress-230[data-progress="25"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

#profile .banner .radial-progress-230[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

#profile .banner .radial-progress-230[data-progress="26"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

#profile .banner .radial-progress-230[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

#profile .banner .radial-progress-230[data-progress="27"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

#profile .banner .radial-progress-230[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

#profile .banner .radial-progress-230[data-progress="28"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

#profile .banner .radial-progress-230[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

#profile .banner .radial-progress-230[data-progress="29"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

#profile .banner .radial-progress-230[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

#profile .banner .radial-progress-230[data-progress="30"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

#profile .banner .radial-progress-230[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

#profile .banner .radial-progress-230[data-progress="31"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

#profile .banner .radial-progress-230[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

#profile .banner .radial-progress-230[data-progress="32"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

#profile .banner .radial-progress-230[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

#profile .banner .radial-progress-230[data-progress="33"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

#profile .banner .radial-progress-230[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

#profile .banner .radial-progress-230[data-progress="34"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

#profile .banner .radial-progress-230[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

#profile .banner .radial-progress-230[data-progress="35"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

#profile .banner .radial-progress-230[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

#profile .banner .radial-progress-230[data-progress="36"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

#profile .banner .radial-progress-230[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

#profile .banner .radial-progress-230[data-progress="37"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

#profile .banner .radial-progress-230[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

#profile .banner .radial-progress-230[data-progress="38"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

#profile .banner .radial-progress-230[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

#profile .banner .radial-progress-230[data-progress="39"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

#profile .banner .radial-progress-230[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

#profile .banner .radial-progress-230[data-progress="40"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

#profile .banner .radial-progress-230[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

#profile .banner .radial-progress-230[data-progress="41"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

#profile .banner .radial-progress-230[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

#profile .banner .radial-progress-230[data-progress="42"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

#profile .banner .radial-progress-230[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

#profile .banner .radial-progress-230[data-progress="43"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

#profile .banner .radial-progress-230[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

#profile .banner .radial-progress-230[data-progress="44"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

#profile .banner .radial-progress-230[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

#profile .banner .radial-progress-230[data-progress="45"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

#profile .banner .radial-progress-230[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

#profile .banner .radial-progress-230[data-progress="46"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

#profile .banner .radial-progress-230[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

#profile .banner .radial-progress-230[data-progress="47"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

#profile .banner .radial-progress-230[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

#profile .banner .radial-progress-230[data-progress="48"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

#profile .banner .radial-progress-230[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

#profile .banner .radial-progress-230[data-progress="49"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

#profile .banner .radial-progress-230[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

#profile .banner .radial-progress-230[data-progress="50"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

#profile .banner .radial-progress-230[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

#profile .banner .radial-progress-230[data-progress="51"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

#profile .banner .radial-progress-230[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

#profile .banner .radial-progress-230[data-progress="52"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

#profile .banner .radial-progress-230[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

#profile .banner .radial-progress-230[data-progress="53"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

#profile .banner .radial-progress-230[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

#profile .banner .radial-progress-230[data-progress="54"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

#profile .banner .radial-progress-230[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

#profile .banner .radial-progress-230[data-progress="55"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

#profile .banner .radial-progress-230[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

#profile .banner .radial-progress-230[data-progress="56"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

#profile .banner .radial-progress-230[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

#profile .banner .radial-progress-230[data-progress="57"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

#profile .banner .radial-progress-230[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

#profile .banner .radial-progress-230[data-progress="58"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

#profile .banner .radial-progress-230[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

#profile .banner .radial-progress-230[data-progress="59"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

#profile .banner .radial-progress-230[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

#profile .banner .radial-progress-230[data-progress="60"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

#profile .banner .radial-progress-230[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

#profile .banner .radial-progress-230[data-progress="61"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

#profile .banner .radial-progress-230[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

#profile .banner .radial-progress-230[data-progress="62"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

#profile .banner .radial-progress-230[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

#profile .banner .radial-progress-230[data-progress="63"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

#profile .banner .radial-progress-230[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

#profile .banner .radial-progress-230[data-progress="64"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

#profile .banner .radial-progress-230[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

#profile .banner .radial-progress-230[data-progress="65"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

#profile .banner .radial-progress-230[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

#profile .banner .radial-progress-230[data-progress="66"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

#profile .banner .radial-progress-230[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

#profile .banner .radial-progress-230[data-progress="67"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

#profile .banner .radial-progress-230[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

#profile .banner .radial-progress-230[data-progress="68"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

#profile .banner .radial-progress-230[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

#profile .banner .radial-progress-230[data-progress="69"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

#profile .banner .radial-progress-230[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

#profile .banner .radial-progress-230[data-progress="70"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

#profile .banner .radial-progress-230[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

#profile .banner .radial-progress-230[data-progress="71"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

#profile .banner .radial-progress-230[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

#profile .banner .radial-progress-230[data-progress="72"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

#profile .banner .radial-progress-230[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

#profile .banner .radial-progress-230[data-progress="73"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

#profile .banner .radial-progress-230[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

#profile .banner .radial-progress-230[data-progress="74"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

#profile .banner .radial-progress-230[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

#profile .banner .radial-progress-230[data-progress="75"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

#profile .banner .radial-progress-230[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

#profile .banner .radial-progress-230[data-progress="76"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

#profile .banner .radial-progress-230[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

#profile .banner .radial-progress-230[data-progress="77"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

#profile .banner .radial-progress-230[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

#profile .banner .radial-progress-230[data-progress="78"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

#profile .banner .radial-progress-230[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

#profile .banner .radial-progress-230[data-progress="79"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

#profile .banner .radial-progress-230[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

#profile .banner .radial-progress-230[data-progress="80"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

#profile .banner .radial-progress-230[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

#profile .banner .radial-progress-230[data-progress="81"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

#profile .banner .radial-progress-230[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

#profile .banner .radial-progress-230[data-progress="82"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

#profile .banner .radial-progress-230[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

#profile .banner .radial-progress-230[data-progress="83"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

#profile .banner .radial-progress-230[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

#profile .banner .radial-progress-230[data-progress="84"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

#profile .banner .radial-progress-230[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

#profile .banner .radial-progress-230[data-progress="85"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

#profile .banner .radial-progress-230[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

#profile .banner .radial-progress-230[data-progress="86"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

#profile .banner .radial-progress-230[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

#profile .banner .radial-progress-230[data-progress="87"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

#profile .banner .radial-progress-230[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

#profile .banner .radial-progress-230[data-progress="88"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

#profile .banner .radial-progress-230[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

#profile .banner .radial-progress-230[data-progress="89"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

#profile .banner .radial-progress-230[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

#profile .banner .radial-progress-230[data-progress="90"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

#profile .banner .radial-progress-230[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

#profile .banner .radial-progress-230[data-progress="91"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

#profile .banner .radial-progress-230[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

#profile .banner .radial-progress-230[data-progress="92"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

#profile .banner .radial-progress-230[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

#profile .banner .radial-progress-230[data-progress="93"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

#profile .banner .radial-progress-230[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

#profile .banner .radial-progress-230[data-progress="94"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

#profile .banner .radial-progress-230[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

#profile .banner .radial-progress-230[data-progress="95"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

#profile .banner .radial-progress-230[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

#profile .banner .radial-progress-230[data-progress="96"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

#profile .banner .radial-progress-230[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

#profile .banner .radial-progress-230[data-progress="97"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

#profile .banner .radial-progress-230[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

#profile .banner .radial-progress-230[data-progress="98"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

#profile .banner .radial-progress-230[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

#profile .banner .radial-progress-230[data-progress="99"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

#profile .banner .radial-progress-230[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

#profile .banner .radial-progress-230[data-progress="100"] .circle .fill,
#profile .banner .radial-progress-230[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

#profile .banner .radial-progress-230[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

#profile .banner .field-group .col-md-6 {
    border-bottom: 1px solid #fff;
    float: left;
    margin: 0 0 15px!important;
    width: 50%
}

#profile .banner .field-group .col-md-6 input {
    padding: 10px 2px
}

#profile .banner .details .username-title {
    margin-bottom: 10px
}

#profile .banner .details .username-title .field input {
    font: 300 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#profile .banner .details .username-title .user-firstname,
#profile .banner .details .username-title .user-lastname {
    text-align: center
}

#profile .banner .details .userid {
    padding: 0 10px 10px;
    font-weight: 400;
    margin-top: 5px
}

#profile .banner .details.public .username-title {
    margin: 10px;
    font: 300 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#profile .banner .details.public li {
    font: 200 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 5px
}

#profile .banner input[name="professional_headline"] {
    font-weight: 200;
    padding: 0 20px
}

#profile .banner .avatar-container {
    position: relative;
    height: 100%
}

#profile .banner .avatar-container .overlay {
    content: "";
    position: absolute;
    opacity: 0;
    top: 50%;
    left: 0;
    height: 50%;
    width: 100%;
    border-radius: 0 0 174px 174px;
    -moz-border-radius: 0 0 174px 174px;
    -webkit-border-radius: 0 0 174px 174px;
    background: hsla(0, 0%, 100%, .5);
    transition: all .5s ease
}

#profile .banner .avatar-container .overlay h5 {
    margin-top: 10px;
    color: #2d3942;
    font-weight: 600
}

#profile .banner .avatar-container .overlay h5 i {
    font: 600 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#profile .banner .avatar-container .avatar {
    border: 3px solid #fff;
    border-radius: 50%;
    width: 100%;
    height: 100%
}

#profile .banner .avatar-container:hover .bubble-right,
#profile .banner .avatar-container:hover .overlay {
    opacity: 1
}

#profile .banner .avatar-container .bubble-right {
    display: none;
    opacity: 0;
    width: 110px;
    height: 65px;
    left: -135px;
    top: 0;
    background: #8fc8e2;
    position: absolute;
    border-radius: 5px;
    color: #2d3942;
    font-size: .75em;
    font-weight: 400;
    transition: all .25s ease
}

#profile .banner .avatar-container .bubble-right .bubble-title {
    color: #fff;
    margin: 0 0 3px;
    font: 400 2.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#profile .banner .avatar-container .bubble-right:before {
    content: "";
    position: absolute;
    left: 100%;
    top: 25px;
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-left: 10px solid #8fc8e2;
    border-bottom: 8px solid transparent
}

#profile .banner .avatar-container #avatar {
    width: 300px!important;
    height: 300px;
    position: absolute;
    top: -55px;
    left: -65px
}

#profile .message-info {
    font-size: .75em;
    color: #5d666d
}

@media only screen and (min-width:768px) {
    #profile .message-info {
        font-size: .875em
    }
}

@media only screen and (min-width:1020px) {
    #profile .message-info {
        font-size: 1em
    }
}

#profile .details {
    margin: 0 auto;
    max-width: 400px
}

#profile .public .public-box .circle-text {
    width: 75px;
    height: 75px;
    background: #0091c7;
    border-radius: 50%;
    position: relative;
    margin: 25px auto;
    text-align: center;
    color: #fff;
    padding: 15px;
    border-top: 1px solid #fff
}

#profile .public .public-box .circle-text.alison:before {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #0091c7 url(https://alison.com/html/vendor/img/A.svg) no-repeat;
    background-size: cover;
    opacity: .75;
    content: " ";
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden
}

#profile .public .public-box .circle-text.alison div {
    position: absolute;
    width: 100%;
    height: 100%;
    text-align: center;
    color: #fff;
    top: 0;
    left: 0;
    padding: 15px;
    font-weight: 500
}

#profile .public .public-box .public-row {
    padding: 15px 0;
    border-bottom: 1px solid #fff;
    color: #5d666d
}

#profile .public .public-box .public-row:last-child {
    border-bottom: none
}

#profile .public .public-box .public-row h4 {
    color: #0091c7;
    font: 300 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 15px
}

#profile .public .public-box .public-row .course-sm-picture {
    text-align: center
}

#profile .public .public-box .public-row .course-sm-picture img {
    border: 1px solid #aaa;
    height: 75px;
    width: 75px
}

#profile .public .public-box .public-row div,
#profile .public .public-box .public-row li,
#profile .public .public-box .public-row p {
    font-size: .9375em
}

#profile .public .public-box .public-row ul li {
    margin: 10px 0
}

#profile .public .public-box .public-row a,
#profile .public .public-box .public-row a:visited {
    color: #5d666d
}

#profile .public .public-box .public-row a:hover {
    text-decoration: underline
}

#profile .public .public-box .public-row .education-title {
    font-weight: 700
}

@media only screen and (min-width:768px) {
    #profile .banner .field-group .col-md-6 {
        margin: 0 15px;
        width: calc(50% - 15px)
    }
    #profile .banner .field-group .col-md-6:last-child {
        float: right
    }
    #profile .public .public-box:before {
        content: "";
        width: 1px;
        height: calc(100% - 350px);
        position: absolute;
        background: transparent;
        top: 160px;
        left: 73px;
        border-left: 3px solid #0091c7
    }
    #profile .public .public-box .public-row {
        height: 250px;
        border-bottom: none
    }
    #profile .public .public-box .circle-text {
        margin: 0
    }
}

@media only screen and (min-width:1020px) {
    #profile .public .public-box:before {
        left: 67px
    }
    #profile .public .public-box .public-row {
        height: 175px
    }
    #profile .banner .radial-progress-profile-picture {
        margin: 25px auto 20px
    }
    #profile .banner .details .username-title input {
        padding: 10px
    }
    #profile .banner .details .username-title .user-firstname {
        text-align: right
    }
    #profile .banner .details .username-title .user-lastname {
        text-align: left
    }
    #profile .banner .view-profile {
        font-size: .75em;
        line-height: 20px;
        margin-right: 10px
    }
    #profile .banner .avatar-container .bubble-right {
        display: block
    }
}

#player-page .player-page-wrapper {
    background: #fff;
    padding: 0;
    position: relative;
    z-index: 10;
    margin-bottom: 50px;
    box-shadow: 0 0 3px 0 #585858
}

#player-page .player-page-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 0;
    display: none;
    background: url(https://alison.com/html/site/img/xbanner-bg.jpg.pagespeed.ic.PCj3SvpWu_.webp);
    color: #fff;
    height: 275px
}

@media only screen and (min-width:768px) {
    #player-page .player-page-bg {
        display: block
    }
}

#player-page .breadcrumb-wrapper {
    display: block;
    margin-top: 10px;
    padding: 0
}

#player-page .breadcrumb-wrapper li a {
    color: #2d3942;
    line-height: 30px
}

#player-page .breadcrumb-wrapper i,
#player-page .breadcrumb-wrapper li i {
    color: #2d3942
}

#player-page h1 {
    color: #2d3942;
    font: 400 1.125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.4444444444em;
    margin: 30px 0 25px;
    padding: 0 20px
}

#player-page h1 span {
    display: inline-block;
    margin-right: 5px;
    vertical-align: text-top
}

#player-page .player-holder {
    border: 1px solid #d9dee2
}

#player-page .player-holder .mCS-3d.mCSB_scrollTools .mCSB_buttonUp {
    background-position: -112px -72px
}

#player-page .player-holder .mCS-3d.mCSB_scrollTools .mCSB_buttonDown {
    background-position: -112px -92px
}

#player-page .player-holder .mCSB_inside>.mCSB_container {
    margin-right: 16px
}

#player-page .course-navigation {
    position: relative
}

#player-page .course-navigation .nav-trigger {
    background: #5d666d;
    color: #fff;
    display: block;
    text-align: right
}

#player-page .course-navigation .module-topics {
    background: #fff;
    border: 1px solid #d9dee2;
    counter-reset: c;
    left: 0;
    position: absolute;
    top: 40px;
    overflow-y: auto;
    width: 100%;
    z-index: 10
}

#player-page .course-navigation .module-topics .prev-next {
    background: #d9dee2;
    display: block;
    font-size: .875em;
    margin: 4px 0;
    padding: 8px 20px 8px 5px;
    position: relative
}

#player-page .course-navigation .module-topics .prev-next span {
    margin-right: 15px;
    margin-left: 7px
}

#player-page .course-navigation .module-topics .scrollbar {
    max-height: 525px
}

#player-page .course-navigation .module-topics li {
    border-bottom: 1px solid #e7ebed;
    counter-increment: c;
    font-size: .875em;
    padding: 10px 20px 10px 45px;
    position: relative
}

#player-page .course-navigation .module-topics li:before {
    background: #d9dee2;
    color: #2d3942;
    content: counter(c);
    font: 600 15px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    height: 30px;
    left: 5px;
    line-height: 30px;
    position: absolute;
    text-align: center;
    top: 5px;
    width: 30px
}

#player-page .course-navigation .module-topics li a,
#player-page .course-navigation .module-topics li a:visited {
    color: #5d666d
}

#player-page .course-navigation .module-topics li a {
    transition: all 0 ease-in
}

#player-page .course-navigation .module-topics li:hover {
    background: #0094c9
}

#player-page .course-navigation .module-topics li:hover a {
    color: #fff
}

#player-page .course-navigation .module-topics li:hover:before {
    background: #0094c9;
    color: #fff
}

#player-page .course-navigation .module-topics li.active {
    background: #0094c9
}

#player-page .course-navigation .module-topics li.active a {
    color: #fff
}

#player-page .course-navigation .module-topics li.active:before {
    background: #006e96;
    color: #fff
}

#player-page .course-navigation .module-topics li.checked {
    background: #51c682
}

#player-page .course-navigation .module-topics li.checked a {
    color: #fff
}

#player-page .course-navigation .module-topics li.checked:before {
    background: #2b8652;
    color: #fff
}

#player-page .add_iframe {
    width: 336px;
    height: 384px;
    padding-top: 104px;
    margin: auto
}

#player-page .div_absolute_iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #e7e7e7
}

#player-page .div_absolute_iframe .player-button-holder {
    text-align: center;
    margin-top: 20px
}

#player-page .text_iframe {
    font-weight: 300;
    font-size: 17px;
    text-align: center;
    margin-top: 10px
}

#player-page .text_iframe2 {
    position: absolute;
    left: 0;
    bottom: 0;
    font-size: 12px;
    border-top: 1px solid #ccc;
    padding-top: 10px;
    margin: 16px
}

#player-page .close_add_iframe {
    opacity: .4;
    text-align: center;
    cursor: pointer;
    margin: auto;
    margin-top: 30px;
    cursor: default;
    transition: all .2 ease-in
}

#player-page .close_add_iframe:hover {
    background: #aaa
}

#player-page .close_add_iframe.ready {
    background: #0094c9;
    cursor: pointer;
    opacity: 1
}

#player-page .close_add_iframe.ready:hover {
    background: #00bafc
}

#player-page #iframe_container {
    position: relative;
    width: 100%
}

#player-page #iframe_container #iframe {
    min-height: 620px;
    overflow: auto;
    width: 100%
}

#player-page .slideToggle {
    display: none;
    border: 1px solid #d9dee2;
    padding: 20px 10px 1px
}

#player-page .slideToggle h3 {
    color: #0091c7;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 20px
}

#player-page .slideToggle textarea {
    border: 1px solid #e7ebed;
    font-size: .875em;
    max-height: 400px;
    max-width: 100%;
    min-height: 250px;
    padding: 10px 15px
}

#player-page .slideToggle .info-box {
    margin: 0
}

#player-page .slideToggle .extras {
    background: #0091c7;
    margin: 20px -10px 0;
    padding: 10px 20px;
    text-align: right
}

#player-page .slideToggle .extras a,
#player-page .slideToggle .extras button {
    background: none;
    color: #fff;
    display: inline-block;
    font-size: 1.25em;
    margin: 0 10px;
    width: auto
}

#player-page .slideToggle .extras a:last-child,
#player-page .slideToggle .extras button:last-child {
    margin: 0 0 0 10px
}

#player-page .slideToggle .extras a:hover,
#player-page .slideToggle .extras button:hover {
    color: #5d666d
}

#player-page .slideToggle .extras a span,
#player-page .slideToggle .extras button span {
    display: inline-block;
    vertical-align: middle
}

#player-page .slideToggle .extras a .save,
#player-page .slideToggle .extras button .save {
    font: 700 14px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    text-transform: uppercase
}

#player-page .slideToggle .extras a:hover,
#player-page .slideToggle .extras button:hover {
    color: #aaa
}

#player-page .slideToggle .extras button {
    padding: 10px
}

#player-page .slideToggle .extras button:last-child {
    margin: 0
}

#player-page .slideToggle .extras input[type="text"] {
    background: none;
    border: 1px solid #fff;
    display: inline-block;
    color: #fff;
    font-size: .875em;
    padding: 10px;
    width: calc(100% - 50px)
}

#player-page .slideToggle .extras::-webkit-input-placeholder {
    color: #fff
}

#player-page .slideToggle .extras:-moz-placeholder,
#player-page .slideToggle .extras::-moz-placeholder {
    color: #fff
}

#player-page .slideToggle .extras:-ms-input-placeholder {
    color: #fff
}

#player-page .topic-helpers>li {
    margin: 2px 0
}

#player-page .topic-helpers>li .trigger {
    background: #d9dee2;
    color: #5d666d;
    display: block;
    font-size: .875em;
    padding: 10px 45px 10px 20px
}

#player-page .topic-helpers>li .trigger.active {
    background-color: #0094c9;
    color: #fff
}

#player-page .topic-helpers>li .trigger.active span {
    color: #fff
}

#player-page .topic-helpers>li .trigger span {
    display: inline-block;
    text-align: center;
    vertical-align: text-top;
    width: 25px
}

#player-page .module-nav {
    margin: 60px 0 40px;
    position: relative;
    width: 100%
}

#player-page .module-nav>h4 {
    color: #5d666d;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 20px
}

#player-page .module-nav>h4 span {
    display: inline-block;
    margin-right: 5px;
    vertical-align: text-top
}

#player-page .module-nav .player-slider {
    margin: 0 auto;
    max-width: 80%;
    position: relative
}

#player-page .module-nav .player-slider .slick-list {
    height: 80px
}

#player-page .module-nav .player-slider .slick-list .slick-track {
    top: 50%!important
}

#player-page .module-nav .player-slider .slide {
    display: block;
    float: left;
    margin: 0 3px;
    width: calc(100% / 5 - 6px)
}

#player-page .module-nav .player-slider .slide a {
    background: #d9dee2;
    display: block;
    height: 8px
}

#player-page .module-nav .player-slider .slide.complete a {
    background: #77d39e
}

#player-page .module-nav .player-slider .slide.active a {
    background: #0091c7
}

#player-page .module-nav .player-slider .slide.active h4 {
    left: 0;
    visibility: visible
}

#player-page .module-nav .player-slider .slide:hover a {
    background: #0091c7;
    position: relative
}

#player-page .module-nav .player-slider .slide:hover a:after {
    content: attr(title);
    color: #5d666d;
    font: 400 .625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    height: 15px;
    left: 50%;
    margin-left: -100px;
    position: absolute;
    overflow: hidden;
    text-align: center;
    top: -20px;
    width: 200px
}

#player-page .module-nav .player-slider .slick-arrow {
    left: -30px;
    margin-top: -15px;
    padding: 10px 5px;
    position: absolute;
    top: 50%;
    width: auto
}

#player-page .module-nav .player-slider .slick-arrow.slick-next {
    left: auto;
    right: -30px
}

#player-page .module-title {
    color: #aeb8c1;
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0;
    text-align: center;
    width: 100%
}

@media only screen and (min-width:768px) {
    #player-page .player-page-wrapper {
        margin: 0 auto 50px;
        max-width: 795px;
        padding: 0
    }
    #player-page h1 {
        font-size: 1.25em;
        margin: 60px 0 25px
    }
    #player-page .breadcrumb-wrapper {
        margin-top: 100px;
        display: block;
        max-width: 795px
    }
    #player-page .breadcrumb-wrapper i,
    #player-page .breadcrumb-wrapper li a,
    #player-page .breadcrumb-wrapper li i {
        color: #fff
    }
    #player-page .course-navigation .up-arrow-morph {
        padding: 15px 55px 15px 20px
    }
    #player-page .course-navigation .up-arrow-morph:after,
    #player-page .course-navigation .up-arrow-morph:before {
        top: 24px
    }
    #player-page .course-navigation .module-topics {
        top: 50px
    }
    #player-page .text_iframe {
        margin-top: 25px
    }
}

@media only screen and (min-width:835px) {
    #player-page .player-page-wrapper {
        margin: 0 auto 50px;
        max-width: 835px;
        padding: 0 20px
    }
    #player-page .breadcrumb-wrapper {
        max-width: 835px
    }
    #player-page .breadcrumb {
        color: #fff;
        display: block;
        font-size: .875em;
        position: relative;
        z-index: 5
    }
    #player-page .breadcrumb a {
        color: #fff
    }
    #player-page h1 {
        font-size: 1.375em;
        margin: 40px 0 35px;
        padding: 0
    }
    #player-page h1 span {
        font-size: 30px
    }
}

@media only screen and (min-width:1240px) {
    #player-page .breadcrumb-wrapper,
    #player-page .player-page-wrapper {
        max-width: 1150px
    }
    #player-page .player-holder {
        position: relative
    }
    #player-page #iframe_container {
        float: left;
        margin: 0;
        max-width: 795px
    }
    #player-page #iframe_container #iframe {
        min-height: 620px;
        overflow: auto;
        width: 100%
    }
    #player-page .course-navigation {
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: calc(100% - 795px);
        z-index: 10
    }
    #player-page .course-navigation .trigger {
        display: none!important
    }
    #player-page .course-navigation .slideToggle {
        display: block!important
    }
    #player-page .course-navigation .module-topics.slideToggle {
        border-bottom: 0;
        border-right: 0;
        border-top: 0;
        height: inherit;
        max-height: none;
        padding: 0;
        overflow-y: visible;
        top: 0
    }
    #player-page .course-navigation .module-topics.slideToggle .topics {
        height: calc(100% - 70px);
        left: 0;
        max-height: none;
        position: absolute;
        overflow-y: auto;
        top: 36px;
        width: 100%
    }
    #player-page .course-navigation .module-topics.slideToggle .prev-next {
        margin: 0;
        color: #5d666d
    }
    #player-page .course-navigation .module-topics.slideToggle .prev-next.next-topic {
        bottom: 0;
        left: 0;
        position: absolute;
        width: 100%
    }
}

.ads-popup-outer {
    height: 0;
    left: 50%;
    max-height: 320px;
    margin-left: -160px;
    overflow: hidden;
    position: absolute;
    top: 105px;
    z-index: 999;
    width: 320px
}

.ads-popup-outer .ads-popup {
    background: #0094c9;
    height: 320px;
    padding: 50px 30px;
    text-align: center;
    width: 320px;
    box-shadow: 0 3px 3px 0 rgba(50, 50, 50, .46)
}

.ads-popup-outer .ads-popup h4,
.ads-popup-outer .ads-popup p {
    color: #fff
}

.ads-popup-outer .ads-popup p {
    margin-bottom: 40px
}

.ads-popup-outer .ads-popup span {
    display: inline-block;
    color: #ffd200;
    margin-right: 20px
}

@media only screen and (min-width:768px) {
    .ads-popup-outer {
        margin-left: -175px;
        width: 350px
    }
    .ads-popup-outer .ads-popup {
        width: 350px
    }
}

#testimonials .highlighted {
    margin-bottom: 50px
}

#testimonials .angle-gradient-testimonials {
    position: relative;
    z-index: 1;
    margin: 50px 0
}

#testimonials .angle-gradient-testimonials:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 0 0
}

#testimonials .angle-gradient-testimonials.right {
    position: relative;
    z-index: 1
}

#testimonials .angle-gradient-testimonials.right:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 100% 0;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 100% 0;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 100% 0;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 100% 0
}

#testimonials .angle-gradient-testimonials {
    position: relative;
    z-index: 1;
    margin: 50px 0 75px
}

#testimonials .angle-gradient-testimonials:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    background: linear-gradient(180deg, #fff 0, #e8e8e8);
    height: 70px;
    width: 100%
}

#testimonials .angle-gradient-testimonials-flipped {
    position: relative;
    z-index: 1;
    margin: 50px 0 85px
}

#testimonials .angle-gradient-testimonials-flipped:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    background: linear-gradient(180deg, #fff 0, #e8e8e8);
    height: 70px;
    width: 100%
}

.notification-page .notifications-banner-angle {
    position: relative;
    z-index: 1
}

.notification-page .notifications-banner-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 70px;
    width: 100%
}

.notification-page .new-notifications-angle {
    position: relative;
    z-index: 1
}

.notification-page .new-notifications-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 100%;
    background: #e8edf1;
    height: 45px;
    width: 100%
}

.notification-page .ads-container-angle-top {
    position: relative;
    z-index: 1
}

.notification-page .ads-container-angle-top:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #2e3942;
    height: 35px;
    width: 100%
}

.notification-page .ads-container-angle-bottom {
    position: relative;
    z-index: 1
}

.notification-page .ads-container-angle-bottom:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 100%;
    background: #2e3942;
    height: 35px;
    width: 100%
}

.notification-page .user-notifications-angle {
    position: relative;
    z-index: 1
}

.notification-page .user-notifications-angle:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #e8edf1;
    height: 45px;
    width: 100%
}

.notification-page .button-read-all,
.notification-page .heading {
    display: inline-block;
    text-align: center;
    width: 100%
}

.notification-page .button-read-all {
    margin-bottom: 15px
}

.notification-page .button-read-all span {
    margin-right: 0;
    font-size: 1.125em
}

.notification-page .button-read-all:hover span {
    color: #0091c7
}

.notification-page .right-container {
    margin: 70px 0;
    position: relative;
    z-index: 10
}

.notification-page .left-container {
    margin: -350px 0 0;
    position: relative;
    z-index: 10
}

.notification-page .centered {
    float: none
}

.notification-page [class*="icon"] {
    display: inline-block;
    font-size: 1em;
    margin: 0 20px 0 10px
}

.notification-page h2 {
    color: #fff;
    display: inline-block;
    font: 300 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-bottom: 50px
}

.notification-page p {
    color: #5d666d;
    font-size: .8125em
}

.notification-page .user-notifications-container {
    background: #e8edf1
}

.notification-page .user-notifications-container .notification-message {
    padding: 0 25px 10px
}

.notification-page .user-notifications-container .notification-message p {
    margin: 10px 0
}

.notification-page .user-notifications-container .notification-message .profile-link {
    font-size: .75em;
    bottom: -5px;
    left: 40px;
    color: #0091c7;
    position: absolute
}

.notification-page .user-notifications-container .notification-message .profile-link:hover {
    text-decoration: underline
}

.notification-page .user-notifications-container h3 {
    color: #5d666d;
    font-size: 1.125em;
    text-align: center
}

.notification-page .user-notifications-container ul {
    padding: 35px
}

.notification-page .user-notifications-container ul li {
    margin-bottom: 15px;
    padding: 10px;
    position: relative
}

.notification-page .user-notifications-container ul li .time {
    bottom: 5px;
    font-weight: 700;
    position: absolute;
    right: 15px
}

.notification-page .user-notifications-container ul li .mark-as-read {
    font-size: 1em;
    position: absolute;
    right: -25px;
    text-align: center;
    top: 10px
}

.notification-page .user-notifications-container ul li .mark-as-read a {
    color: #5d666d
}

.notification-page .user-notifications-container ul li .mark-as-read span {
    margin: 0;
    font-size: 1.25em
}

.notification-page .user-notifications-container ul li .mark-as-read span:hover {
    color: #0091c7
}

.notification-page .user-notifications-container ul li .mark-as-read .mark-tooltip {
    background: #0091c7;
    border-radius: 5px;
    color: #fff;
    font-size: .75em;
    left: 0;
    opacity: 0;
    position: relative;
    text-align: center;
    top: 10px;
    transition: all .5s ease;
    width: 100px
}

.notification-page .user-notifications-container ul li .mark-as-read .mark-tooltip:after {
    border: solid transparent;
    border-color: rgba(0, 147, 201, 0);
    border-bottom-color: #0091c7;
    border-width: 10px;
    bottom: 100%;
    content: " ";
    height: 0;
    left: 50%;
    margin-left: -10px;
    pointer-events: none;
    position: absolute;
    width: 0
}

.notification-page .user-notifications-container ul li p {
    margin: 0
}

.notification-page .user-notifications-container .new-notifications {
    padding-top: 20px
}

.notification-page .user-notifications-container .new-notifications li {
    background: #d2d7db
}

.notification-page .user-notifications-container .new-notifications li:hover {
    background: #fff
}

.notification-page .user-notifications-container .new-notifications li:hover .notification-date {
    background: #e8edf1
}

.notification-page .user-notifications-container .new-notifications li a:hover+.mark-tooltip {
    opacity: 1
}

.notification-page .old-notifications {
    background: #f8f8f8;
    padding-top: 40px
}

.notification-page .old-notifications li {
    background: #e8edf1
}

.notification-page .old-notifications li a:hover+.mark-tooltip {
    opacity: 1
}

.notification-page .old-notifications .notification-date .month-year {
    background: #5d666d
}

.notification-page .ads-container {
    background: #2e3942;
    padding: 15px 0
}

.notification-page .notification-date {
    background: #fff;
    margin: 0 auto 10px;
    text-align: center;
    width: 80px
}

.notification-page .notification-date .month-year {
    background: #0091c7;
    color: #fff;
    font: 300 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.notification-page .notification-date .day {
    font-size: 1.125em
}

.notification-page .notification-date p {
    padding: 5px
}

@media only screen and (min-width:768px) {
    .notification-page .left-container {
        margin: -350px 0 50px
    }
    .notification-page .heading {
        text-align: left;
        width: calc(100% / 4 * 3 - 40px)
    }
    .notification-page .button-read-all {
        margin-top: 25px;
        text-align: right;
        width: 25%
    }
    .notification-page h2 {
        font-size: 1.75em;
        margin: 0 0 50px 30px
    }
    .notification-page .user-notifications-container h3 {
        text-align: left;
        padding: 35px 35px 0
    }
    .notification-page .user-notifications-container .notification-message {
        padding: 0
    }
    .notification-page .user-notifications-container .notification-message p {
        margin: 0
    }
    .notification-page .user-notifications-container .notification-message .profile-link {
        font-size: .875em;
        left: 15px;
        bottom: -30px;
        width: 100%
    }
    .notification-page .new-notifications h3 {
        margin: 8px 0 0
    }
    .notification-page .old-notifications h3 {
        margin: 0 0 15px
    }
    .notification-page .notification-date {
        margin: 0 auto
    }
    .notification-page .mark-as-read {
        text-align: right
    }
}

@media only screen and (min-width:1020px) {
    .notification-page .heading {
        width: calc(100% / 4 * 3 - 35px);
        display: inline-block
    }
    .notification-page .right-container {
        margin-top: -240px
    }
}

@media only screen and (min-width:1240px) {
    .notification-page .button-read-all .btn {
        top: 13%
    }
}

#company-details,
#contact-us {
    position: relative;
    z-index: 10
}

#company-details.sending .contact-form-container,
#company-details.sent .contact-form-container,
#contact-us.sending .contact-form-container,
#contact-us.sent .contact-form-container {
    opacity: .5
}

#company-details.sending .info-box .content .body .mail-loader,
#company-details.sent .info-box .content .body .mail-loader,
#contact-us.sending .info-box .content .body .mail-loader,
#contact-us.sent .info-box .content .body .mail-loader {
    z-index: 9;
    opacity: 1
}

#company-details.sending .info-box .content .body .mail-loader .mail-loader-inner,
#company-details.sent .info-box .content .body .mail-loader .mail-loader-inner,
#contact-us.sending .info-box .content .body .mail-loader .mail-loader-inner,
#contact-us.sent .info-box .content .body .mail-loader .mail-loader-inner {
    background: transparent
}

#company-details.sent .info-box .content .body .mail-loader .checkmark__circle,
#contact-us.sent .info-box .content .body .mail-loader .checkmark__circle {
    animation: stroke .6s cubic-bezier(.65, 0, .45, 1) forwards
}

#company-details.sent .info-box .content .body .mail-loader .checkmark,
#contact-us.sent .info-box .content .body .mail-loader .checkmark {
    animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both
}

#company-details.sent .info-box .content .body .mail-loader .checkmark__check,
#contact-us.sent .info-box .content .body .mail-loader .checkmark__check {
    animation: stroke .3s cubic-bezier(.65, 0, .45, 1) .8s forwards
}

#company-details .info-box,
#contact-us .info-box {
    margin: -125px auto 50px;
    z-index: 2
}

#company-details .info-box .round-image,
#contact-us .info-box .round-image {
    background: transparent
}

#company-details .info-box .round-image div [class*="icon"],
#contact-us .info-box .round-image div [class*="icon"] {
    font-size: 1.25em
}

@media only screen and (min-width:1020px) {
    #company-details .info-box .round-image div [class*="icon"],
    #contact-us .info-box .round-image div [class*="icon"] {
        font-size: 2.625em
    }
}

#company-details .info-box .half-img .image,
#contact-us .info-box .half-img .image {
    border-color: #fff
}

#company-details .info-box .content,
#contact-us .info-box .content {
    padding: 0
}

#company-details .info-box .content .header,
#contact-us .info-box .content .header {
    padding: 0;
    height: 0
}

#company-details .info-box .content .body,
#contact-us .info-box .content .body {
    padding: 0
}

#company-details .info-box .content .body .mail-loader,
#contact-us .info-box .content .body .mail-loader {
    height: 60px;
    padding: 5px;
    top: 50%;
    left: 50%;
    width: 60px;
    border-radius: 50%;
    background: transparent;
    position: absolute;
    text-align: center;
    z-index: -1;
    transform: translate(-50%, -50%);
    transition: opacity .5s ease-in
}

#company-details .info-box .content .body .mail-loader .checkmark__circle,
#contact-us .info-box .content .body .mail-loader .checkmark__circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 50;
    stroke-miterlimit: 10;
    stroke: #00a950;
    fill: none
}

#company-details .info-box .content .body .mail-loader .checkmark,
#contact-us .info-box .content .body .mail-loader .checkmark {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    display: block;
    stroke-width: 2;
    stroke: #fff;
    stroke-miterlimit: 10;
    box-shadow: inset 0 0 0 #7ac142;
    position: absolute;
    top: 0;
    left: 0
}

#company-details .info-box .content .body .mail-loader .checkmark__check,
#contact-us .info-box .content .body .mail-loader .checkmark__check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48
}

#company-details .info-box .content .body .mail-loader .mail-loader-inner,
#contact-us .info-box .content .body .mail-loader .mail-loader-inner {
    background: #0091c7;
    border-radius: 50%;
    height: 100%;
    padding-top: 27px;
    width: 100%
}

#company-details .info-box .content .body .contact-address-container,
#contact-us .info-box .content .body .contact-address-container {
    padding: 20px 20px 30px;
    background: #2e3942;
    color: #fff;
    font-weight: 200
}

#company-details .info-box .content .body .contact-address-container .row,
#contact-us .info-box .content .body .contact-address-container .row {
    opacity: .6;
    margin-top: 20px
}

#company-details .info-box .content .body .contact-address-container .row a,
#contact-us .info-box .content .body .contact-address-container .row a {
    color: #0094c9
}

#company-details .info-box .content .body .contact-address-container .row p,
#contact-us .info-box .content .body .contact-address-container .row p {
    font: 300 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    color: #fff;
    padding: 0
}

#company-details .info-box .content .body .contact-address-container .row [class^="icon"],
#contact-us .info-box .content .body .contact-address-container .row [class^="icon"] {
    float: right;
    font-size: 1.25em
}

#company-details .info-box .content .body .contact-address-container .row ul li,
#contact-us .info-box .content .body .contact-address-container .row ul li {
    font: 300 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin-top: 3px
}

#company-details .info-box .content .body .contact-address-container .row textarea,
#contact-us .info-box .content .body .contact-address-container .row textarea {
    box-sizing: padding-box;
    overflow: hidden
}

#company-details .info-box .content .body .contact-address-container .row .social-right,
#contact-us .info-box .content .body .contact-address-container .row .social-right {
    float: right;
    margin-top: 3px
}

#company-details .info-box .content .body .contact-address-container .row .icon-group,
#contact-us .info-box .content .body .contact-address-container .row .icon-group {
    display: inline-block;
    text-align: center;
    float: none
}

#company-details .info-box .content .body .contact-address-container .row .icon-group [class*="icon"],
#contact-us .info-box .content .body .contact-address-container .row .icon-group [class*="icon"] {
    font-size: 1.5625em;
    margin: 0 5px;
    transition: all .3s ease-in
}

#company-details .info-box .content .body .contact-address-container .row .icon-group [class*="icon"]:hover,
#contact-us .info-box .content .body .contact-address-container .row .icon-group [class*="icon"]:hover {
    opacity: 1;
    color: #3fbdff
}

#company-details .info-box .content .body .contact-address-container .row .icon-group a,
#contact-us .info-box .content .body .contact-address-container .row .icon-group a {
    color: #fff;
    padding: 0
}

#company-details .info-box .content .body .contact-map-container,
#contact-us .info-box .content .body .contact-map-container {
    height: 360px;
    width: 100%
}

#company-details .info-box .content .body .contact-form-container,
#contact-us .info-box .content .body .contact-form-container {
    padding: 40px 20px 0
}

#company-details .info-box .content .body .contact-form-container .row,
#contact-us .info-box .content .body .contact-form-container .row {
    margin-top: 50px
}

#company-details .info-box .content .body .contact-form-container .row [type="submit"],
#contact-us .info-box .content .body .contact-form-container .row [type="submit"] {
    max-width: 145px
}

#company-details .info-box .content .body .contact-form-container h4,
#contact-us .info-box .content .body .contact-form-container h4 {
    margin-bottom: 0;
    color: #5d666d
}

.banner .banner-satellite img {
    width: 125px
}

.banner .banner-satellite-dish {
    display: none;
    position: absolute;
    right: 0;
    bottom: 0
}

.banner p a {
    font-size: inherit
}

@media only screen and (min-width:768px) {
    .banner .banner-satellite {
        position: absolute;
        left: 50px;
        top: 50px
    }
    .banner .banner-satellite img {
        width: 125px
    }
}

@media only screen and (min-width:1240px) {
    .banner .banner-satellite-dish {
        display: block
    }
}

@keyframes stroke {
    to {
        stroke-dashoffset: 0
    }
}

@keyframes scale {
    0%,
    to {
        transform: none
    }
    50% {
        transform: scale3d(1.1, 1.1, 1)
    }
}

@keyframes fill {
    to {
        box-shadow: inset 0 0 0 30px #7ac142
    }
}

.banner-left {
    background: url(https://alison.com/html/site/img/xmountains.png.pagespeed.ic.Kgo_7JT8-M.webp) no-repeat;
    background-size: contain;
    -webkit-background-size: contain;
    -moz-background-size: contain;
    background-position: left -70px bottom -10px;
    bottom: 0;
    height: 190px;
    left: 0;
    position: absolute;
    width: 100%
}

@media only screen and (min-width:768px) {
    .banner-left {
        bottom: -15px;
        height: 220px
    }
}

@media only screen and (min-width:1020px) {
    .banner-left {
        background-position: left -90px bottom -10px;
        height: 300px
    }
}

@media only screen and (min-width:1240px) {
    .banner-left {
        height: 370px
    }
}

@media only screen and (min-width:1500px) {
    .banner-left {
        height: 400px
    }
}

@media only screen and (min-width:1700px) {
    .banner-left {
        background-position: left -20px bottom -10px;
        bottom: -25px
    }
}

.banner-right {
    background: url(https://alison.com/html/site/img/xmountain-with-flags.png.pagespeed.ic.in9oLk-Snu.webp) no-repeat;
    background-size: contain;
    -webkit-background-size: contain;
    -moz-background-size: contain;
    background-position: right -50px bottom -10px;
    bottom: -10px;
    height: 190px;
    position: absolute;
    right: 0;
    width: 100%
}

@media only screen and (min-width:768px) {
    .banner-right {
        bottom: -15px;
        height: 220px
    }
}

@media only screen and (min-width:1020px) {
    .banner-right {
        height: 265px
    }
}

@media only screen and (min-width:1240px) {
    .banner-right {
        background-position: right -90px bottom -10px;
        height: 360px
    }
}

@media only screen and (min-width:1500px) {
    .banner-right {
        height: 430px
    }
}

@media only screen and (min-width:1700px) {
    .banner-right {
        bottom: -25px;
        height: 445px
    }
}

@media only screen and (min-width:1800px) {
    .banner-right {
        background-position: right -20px bottom -10px
    }
}

.about-banner {
    margin-bottom: 200px;
    text-align: left
}

.about-banner h1 strong {
    display: block;
    font-weight: 200
}

.about-banner p {
    font-size: 1.0625em
}

@media only screen and (min-width:768px) {
    .about-banner {
        max-width: 450px;
        margin: 0 auto 70px
    }
}

@media only screen and (min-width:1020px) {
    .about-banner {
        max-width: 560px
    }
}

@media only screen and (min-width:1700px) {
    .about-banner {
        max-width: 730px
    }
    .about-banner p {
        font-size: 1.1875em
    }
}

.three-columns {
    background: #f1f2f2;
    margin: -50px 0 50px;
    padding: 60px 0 30px;
    text-align: center;
    position: relative;
    z-index: 1
}

.three-columns:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%
}

.three-columns li {
    display: inline-block;
    margin: 0 10px 35px;
    max-width: 280px;
    padding: 60px 0 0;
    vertical-align: top
}

.three-columns .circle {
    border-radius: 50%;
    height: 75px;
    line-height: 75px;
    margin: -45px auto 0;
    position: relative;
    width: 75px
}

.three-columns .circle.green {
    background: #008445;
    color: #008445
}

.three-columns .circle.blue {
    background: #0091c7;
    color: #0091c7
}

.three-columns .circle.grey {
    background: #2e3942;
    color: #2e3942
}

.three-columns .circle:before {
    font-size: 105px;
    left: -18px;
    position: absolute;
    top: -24px
}

.three-columns .circle span {
    color: #fff;
    font-size: 14px;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif!important
}

.three-columns .content {
    background: #eceded;
    margin: -30px auto 0;
    min-height: 250px;
    padding: 40px 20px 30px
}

.three-columns .content span {
    color: #0091c7;
    font-size: .875em
}

.three-columns h2 {
    color: #2e3942;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

@media only screen and (min-width:768px) {
    .three-columns li {
        margin: 0 25px 35px
    }
}

@media only screen and (min-width:1020px) {
    .three-columns {
        padding: 80px 0 30px
    }
    .three-columns li {
        margin: 0 15px 35px
    }
}

.text-strip {
    padding: 30px 0 50px;
    text-align: center
}

.text-strip .wrapper {
    max-width: 725px
}

@media only screen and (min-width:768px) {
    .text-strip {
        background: url(https://alison.com/html/site/img/xipad-photo.png.pagespeed.ic.yGbCUvMlbc.webp) no-repeat;
        background-size: contain;
        -webkit-background-size: contain;
        -moz-background-size: contain;
        background-position: left -250px bottom -55px
    }
}

@media only screen and (min-width:1240px) {
    .text-strip {
        background-position: left -150px bottom 0
    }
}

.about-banner {
    margin-bottom: 0;
    text-align: center
}

.bold {
    text-align: center;
    padding: 0 40px
}

.headline {
    max-width: 780px;
    margin: 50px auto
}

.four-columns,
.headline h6 {
    color: #5d666d;
    text-align: center
}

.four-columns {
    background: #fff;
    margin: -50px 0 0;
    padding: 50px 0 30px;
    position: relative;
    z-index: 1
}

.four-columns:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%
}

.four-columns .wrapper {
    z-index: 2
}

.four-columns ol li {
    padding-top: 50px;
    display: inline-block;
    margin: 0 20px;
    max-width: 230px;
    vertical-align: top
}

.four-columns .circle {
    border-radius: 50%;
    height: 75px;
    line-height: 75px;
    margin: -45px auto 0;
    position: relative;
    width: 75px
}

.four-columns .circle:before {
    font-size: 105px;
    left: -18px;
    position: absolute;
    top: -24px
}

.four-columns .content {
    background: none;
    min-height: 250px;
    padding: 0 10px
}

.four-columns h2 {
    color: #2e3942;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 10px 0
}

@media only screen and (min-width:768px) {
    .four-columns li {
        margin: 0 25px
    }
}

@media only screen and (min-width:1020px) {
    .four-columns li {
        margin: 0 15px
    }
}

.about-separator {
    background: #374651;
    color: #fff;
    padding: 90px 0 110px;
    position: relative;
    z-index: 1
}

.about-separator .our-logo {
    text-align: center
}

.about-separator .our-company {
    padding: 30px 0
}

.about-separator:after,
.about-separator:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

.about-separator:before {
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 100% 0;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 100% 0;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 100% 0;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 100% 0
}

.about-separator:after {
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%
}

.about-separator:after,
.about-separator:before {
    background: #fff;
    bottom: 0;
    height: 90px;
    width: 100%
}

.about-text-strip {
    margin-top: 15px
}

.last-row {
    margin-bottom: 40px
}

.text-strip-top.team-text-strip {
    padding-top: 10px
}

.text-strip-top span {
    margin-top: 50px;
    display: block
}

.about-text-strip,
.text-strip-top {
    color: #5d666d;
    text-align: center
}

.about-text-strip .our-story-image,
.text-strip-top .our-story-image {
    display: none
}

.about-text-strip .email-outer-circle,
.text-strip-top .email-outer-circle {
    border: 4px solid #0091c7;
    border-radius: 50%;
    left: calc(50% - 75px);
    margin: 40px auto 0;
    max-width: 95px;
    max-height: 95px;
    padding: 5px
}

.about-text-strip .email-outer-circle a,
.text-strip-top .email-outer-circle a {
    background: #0091c7;
    border-radius: 50%;
    color: #fff;
    display: block;
    height: 75px;
    line-height: 75px;
    margin: 0 auto;
    position: relative;
    width: 75px
}

.about-text-strip .email-outer-circle a:before,
.text-strip-top .email-outer-circle a:before {
    font-size: 1.625em;
    padding: 0 24px
}

.about-text-strip .email-text,
.text-strip-top .email-text {
    margin: 20px 0 40px;
    text-align: center
}

.about-text-strip .email-text p,
.text-strip-top .email-text p {
    font-size: 1.25em;
    font-weight: 700
}

.about-text-strip .email-text a,
.text-strip-top .email-text a {
    color: #5d666d;
    font-weight: 400
}

.about-text-strip .email-text a:hover,
.text-strip-top .email-text a:hover {
    color: #0091c7;
    text-decoration: underline
}

.about-text-strip .email-text .line,
.text-strip-top .email-text .line {
    border-top: 2px solid #0091c7;
    display: block;
    margin: 20px auto;
    width: 30px
}

.terms-of-use {
    color: #5d666d
}

.terms-of-use .tab-title.active {
    background: #0091c7
}

.terms-of-use .tab-title:hover {
    background: #006c94
}

.terms-of-use .information {
    background: #f1f2f2;
    border: 1px solid #d4d4d4;
    border-radius: 10px;
    font-size: 1.0625em;
    padding: 20px 50px;
    margin-bottom: 15px
}

.terms-of-use .information a {
    color: #0091c7
}

.terms-of-use .information a:hover {
    text-decoration: underline
}

.terms-of-use .information strong {
    margin-right: 15px
}

.terms-of-use .information .indent-left {
    margin-left: 20px
}

.terms-of-use .information .list-lower-roman li {
    list-style: lower-roman
}

.terms-of-use .information ol li,
.terms-of-use .information ul li {
    margin-bottom: 20px;
    font-size: .9375em
}

.terms-of-use .information ol li {
    list-style: decimal;
    padding: 0 10px
}

.department-tabs {
    max-width: 1250px;
    margin: 15px 0 45px;
    text-align: center
}

.department-tabs .tab-header-inline .tab-title.active,
.department-tabs .tab-header-inline .tab-title.active:hover {
    color: #fff
}

.department-tabs .tab-title {
    background: #2e3942;
    border-radius: 6px;
    border: 0;
    color: #fff;
    display: inline-block;
    font-size: .875em;
    font-weight: 400;
    margin: 5px 6px;
    padding: 0 15px;
    line-height: 31px
}

.department-tabs .tab-title.active,
.department-tabs .tab-title.active a,
.department-tabs .tab-title:hover,
.department-tabs .tab-title:hover a {
    color: #fff
}

.department-tabs .tab-title a {
    color: #fff;
    display: inline-block
}

.department-tabs .tab-title a:visited {
    color: #fff
}

.read-more:hover {
    color: #0091c7
}

.fall-back-color.active {
    background: #838b8f
}

.fall-back-color:hover {
    background: hsla(200, 5%, 54%, .8);
    color: #838b8f
}

.all.active {
    background: #838b8f
}

.all:hover {
    background: rgba(46, 57, 66, .8)
}

.technical.active {
    background: #f29b2f
}

.technical:hover {
    background: rgba(242, 155, 47, .8);
    color: #f29b2f
}

.finance.active {
    background: #0091c7
}

.finance:hover {
    background: rgba(0, 145, 199, .8);
    color: #0091c7
}

.human-resources.active {
    background: #1d355e
}

.human-resources:hover {
    background: rgba(29, 53, 94, .8);
    color: #1d355e
}

.customer-success.active {
    background: #c9187e
}

.customer-success:hover {
    background: rgba(201, 24, 126, .8);
    color: #c9187e
}

.marketing.active {
    background: #f58220
}

.marketing:hover {
    background: rgba(245, 130, 32, .8);
    color: #f58220
}

.sales.active {
    background: #008445
}

.sales:hover {
    background: rgba(0, 132, 69, .8);
    color: #008445
}

.publishing.active {
    background: #873694
}

.publishing:hover {
    background: rgba(135, 54, 148, .8);
    color: #873694
}

.analytics.active {
    background: #38ac69
}

.analytics:hover {
    background: rgba(56, 172, 105, .8);
    color: #38ac69
}

.operations.active {
    background: #be3047
}

.operations:hover {
    background: rgba(190, 48, 71, .8);
    color: #be3047
}

.graduate-banner {
    margin: 60px 30px
}

.graduate-banner h1 {
    font: 400 1.875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.graduate-banner p {
    font: 300 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

@media only screen and (min-width:1020px) {
    .graduate-banner {
        margin: 0 140px
    }
}

.graduate-top {
    background: #f1f2f2;
    background: linear-gradient(180deg, #f1f2f2 0, #e8edf1);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#FFF1F2F2", endColorstr="#FFE8EDF1", GradientType=0);
    z-index: 11!important;
    position: relative;
    z-index: 1
}

.graduate-top:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 0 0;
    background: #f1f2f2;
    height: 75px;
    width: 100%
}

.graduate-top .about-text-strip {
    margin-top: 0;
    padding-top: 20px;
    text-align: center
}

.graduate-top .about-text-strip p {
    color: #2e3942;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 auto 20px;
    width: 225px
}

.graduate-top .about-text-strip .email-text {
    margin: 0
}

.graduate-top .about-text-strip .email-text a {
    color: #2e3942;
    font-weight: 700
}

.graduate-top .email-outer-circle {
    display: inline-block;
    left: 0;
    margin: 0;
    position: relative;
    top: 25px
}

.graduate-top:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(1deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(1deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(1deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(1deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 25px;
    width: 100%
}

@media only screen and (min-width:768px) {
    .graduate-top .about-text-strip p {
        width: 600px
    }
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    .graduate-top .about-text-strip {
        padding-bottom: 45px
    }
}

@media screen and (min-width:0\0) and (min-resolution:0.001dpcm) {
    .graduate-top .about-text-strip {
        padding-bottom: 45px
    }
}

.graduate-container {
    text-align: center
}

.graduate-container h2 {
    font: 400 1.375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 60px 0 25px
}

.graduate-container .graduate {
    display: inline-block
}

.graduate-container .graduate .gallery-user-fullname {
    color: #5d666d;
    font: 400 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 20px auto 10px;
    padding: 0 20px;
    width: 200px
}

.member {
    display: inline-block;
    position: relative;
    width: 200px
}

.member [id^="team_member_image_"] {
    border-radius: 50%;
    display: inline-block;
    height: 164px;
    margin: 15px 0;
    vertical-align: top;
    width: 164px
}

.member .member-info {
    border-radius: 50%;
    height: 166px;
    left: 17px;
    opacity: 0;
    padding: 0 26px;
    position: absolute;
    top: 14px;
    width: 166px;
    transition: all .3s ease
}

.member .member-info:hover {
    opacity: 1
}

.member .gallery {
    background: rgba(210, 215, 219, .7)
}

.member .gallery .flag {
    padding-top: 30px
}

.member .gallery h4 {
    color: #2e3942;
    font: 500 16px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding-top: 10px
}

.member .gallery p {
    border-top: 1px solid rgba(46, 57, 66, .7);
    color: #2e3942
}

.member h4 {
    color: #fff;
    font-size: 1em;
    letter-spacing: 1px;
    margin: 0 5px 10px;
    padding: 30px 15px 0;
    text-shadow: 0 0 1px #fff, 0 1px 2px rgba(46, 57, 66, .3)
}

.member p {
    border-top: 1px solid hsla(0, 0%, 100%, .5);
    color: #fff;
    font-size: .8125em;
    padding: 5px
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    .member {
        vertical-align: top
    }
    .member+a {
        margin-top: 10px;
        display: inline-block
    }
}

@media screen and (min-width:0\0) and (min-resolution:0.001dpcm) {
    .member {
        vertical-align: top
    }
    .member+a {
        margin-top: 10px;
        display: inline-block
    }
}

.openings {
    border-radius: 50%;
    display: inline-block;
    height: 164px;
    margin: 15px 0;
    padding: 5px 25px;
    vertical-align: top;
    width: 164px
}

.openings h4 {
    font-weight: 400;
    letter-spacing: 1px
}

.openings p {
    font-size: 2em
}

.job-count {
    text-align: center
}

.job-count p {
    font-size: 1.25em;
    color: #5d666d
}

.job-count .openings {
    display: inline-block;
    padding: 10px 20px;
    position: relative
}

.job-listing {
    color: #5d666d
}

.job-listing .read-more {
    color: #0091c7
}

.job-listing .read-more:hover {
    text-decoration: underline
}

.job-listing img {
    display: none
}

.job-listing h4 {
    font-weight: 400
}

.job-listing a {
    text-decoration: none;
    color: #2e3942;
    font-size: .875em
}

.job-listing .icon-about {
    display: none
}

.job-listing .position {
    border: 1px solid #d4d4d4;
    border-radius: 10px;
    padding: 10px 20px;
    margin-bottom: 15px
}

.job-listing .position:hover {
    background: #f1f2f2
}

#achiever-points-section {
    color: #5d666d;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    position: relative;
    z-index: 11
}

#achiever-points-section h2 {
    color: #2e3942;
    font-weight: 400;
    font-size: 1.875em
}

#achiever-points-section .aap-content {
    text-align: center
}

#achiever-points-section .aap-content .content-box {
    background: #fff;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    margin: -190px auto 0;
    padding: 40px 20px;
    position: relative;
    width: 100%
}

#achiever-points-section .aap-content:first-child {
    background: #fff;
    padding: 40px 0 20px;
    position: relative;
    z-index: 1
}

#achiever-points-section .aap-content:first-child .wrapper {
    padding: 30px 20px 0
}

#achiever-points-section .aap-content:first-child img {
    width: 100%
}

#achiever-points-section .aap-content:first-child p {
    font-size: 1em
}

#achiever-points-section .aap-content:first-child:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 100%;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 100%;
    background: #fff;
    height: 90px;
    width: 100%
}

#achiever-points-section .aap-content:nth-child(2) {
    background: #f1f2f2;
    z-index: 0!important;
    position: relative;
    z-index: 1
}

#achiever-points-section .aap-content:nth-child(2) .wrapper {
    padding-top: 70px
}

#achiever-points-section .aap-content:nth-child(2) img {
    padding-left: 0;
    padding-bottom: 120px;
    width: auto
}

#achiever-points-section .aap-content:nth-child(2) p {
    font-size: 1em;
    margin: 0 auto 20px;
    width: 250px
}

#achiever-points-section .aap-content:nth-child(2):after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 90px;
    width: 100%
}

#achiever-points-section .aap-content:nth-child(3) {
    background: #fff
}

#achiever-points-section .aap-content:nth-child(3) .wrapper {
    padding: 30px 0
}

#achiever-points-section .aap-content:nth-child(3) img {
    margin-bottom: 10px
}

#achiever-points-section .aap-content:nth-child(3) p {
    font-size: 1em;
    margin: 0 auto 20px;
    width: 250px
}

#achiever-points-section .aap-content:nth-child(3) h4 {
    font-size: 1.1875em
}

@media only screen and (min-width:768px) {
    #achiever-points-section .aap-content:first-child img {
        width: auto
    }
    #achiever-points-section .aap-content:nth-child(2) p,
    #achiever-points-section .aap-content:nth-child(3) p {
        width: 550px
    }
}

@media only screen and (min-width:1020px) {
    #achiever-points-section .aap-content:first-child p {
        text-align: left
    }
    #achiever-points-section .aap-content:first-child img {
        width: 100%
    }
    #achiever-points-section .aap-content:nth-child(2) p {
        font-size: 1.0625em;
        text-align: left;
        width: 900px
    }
    #achiever-points-section .aap-content:nth-child(2) img {
        width: 100%;
        padding-left: 10%
    }
    #achiever-points-section .aap-content:nth-child(3) p {
        width: auto
    }
}

@media only screen and (min-width:1240px) {
    #achiever-points-section .aap-content:first-child img {
        width: auto
    }
}

@media only screen and (min-width:1500px) {
    #achiever-points-section .aap-content:nth-child(2) img {
        padding-left: 15%
    }
}

#company-details .info-box .content .body .contact-form-container {
    padding: 0 0 0 35px;
    font-size: 1.125em
}

#company-details .info-box .content .body .contact-form-container a {
    color: #0091c7
}

#company-details .info-box .content .body .contact-form-container a:hover {
    text-decoration: underline
}

#company-details .info-box .content .body .contact-form-container p {
    margin-bottom: 20px
}

#career-page h1 {
    margin-top: 100px;
    font-size: 3em
}

#career-page li {
    margin: 20px;
    list-style: disc;
    color: #838b8f;
    font: 400 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#career-page .job-content {
    color: #5d666d
}

.career_image {
    margin: -10px 0 10px
}

#application_form {
    margin-bottom: 50px
}

#application_form h4 {
    color: #5d666d
}

#application_form p {
    margin: 0 0 20px
}

#application_form .field:before {
    font-size: 20px;
    right: 0;
    position: absolute;
    top: 9px
}

#application_form .field .hidden-form {
    position: relative;
    left: 0;
    top: 0;
    height: 0;
    padding: 0;
    border: 0 solid;
    margin: 0;
    width: 0;
    box-shadow: none
}

#application_form .field .hidden-form+span.invalid+label.invalid,
#application_form .field .hidden-form+span.invalid:before {
    color: red
}

#application_form .field .hidden-form:valid+span+label,
#application_form .field .hidden-form:valid+span:before {
    color: #2e3942!important
}

#application_form .info-box {
    max-width: 450px;
    margin: 0
}

#application_form .resize-info-box {
    max-width: 100%
}

#application_form .g-recaptcha {
    max-width: 310px;
    margin: 0 auto
}

#application_form .upload {
    margin: 20px 0;
    text-align: left
}

#application_form .upload .icon-upload {
    color: #2e3942;
    font-weight: 400;
    font-size: .8125em
}

#application_form .upload .icon-upload:before {
    color: #5d666d;
    opacity: .7;
    font-size: 1.125em;
    margin-right: 10px
}

#application_form .upload label {
    cursor: pointer;
    color: #5d666d;
    opacity: .7;
    font-size: 1em;
    font-weight: 400
}

#application_form .upload label:hover {
    color: #0091c7
}

#application_form .upload .icon-upload {
    padding: 10px
}

#application_form .upload .icon-cross2 {
    cursor: pointer
}

#application_form .bottom {
    margin: 15px 0
}

.banner-angle-about-certification {
    position: relative;
    z-index: 1
}

.banner-angle-about-certification:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(-1deg);
    transform-origin: 100%;
    -moz-transform: skewY(-1deg);
    -moz-transform-origin: 100%;
    -ms-transform: skewY(-1deg);
    -ms-transform-origin: 100%;
    -webkit-transform: skewY(-1deg);
    -webkit-transform-origin: 100%;
    background: #f1f2f2;
    bottom: 9px;
    height: 90px;
    width: 100%;
    margin-top: 25px;
    margin-bottom: -34px;
    position: relative
}

#about-certification {
    margin-top: -50px;
    color: #5d666d
}

#about-certification .radial-progress-about-certification {
    margin: 0 auto 20px;
    width: 250px;
    height: 250px;
    background-color: transparent;
    border-radius: 50%
}

#about-certification .radial-progress-about-certification .circle {
    position: relative
}

#about-certification .radial-progress-about-certification .circle .line {
    background: none;
    border-radius: 50%;
    width: 244px;
    height: 244px;
    border: 3px solid hsla(0, 0%, 100%, .5);
    position: absolute;
    top: 3px;
    left: 3px
}

#about-certification .radial-progress-about-certification .circle .fill,
#about-certification .radial-progress-about-certification .circle .mask,
#about-certification .radial-progress-about-certification .circle .shadow {
    width: 250px;
    height: 250px;
    position: absolute;
    border-radius: 50%
}

#about-certification .radial-progress-about-certification .circle .fill,
#about-certification .radial-progress-about-certification .circle .mask {
    -webkit-backface-visibility: hidden;
    transition: transform 1s;
    border-radius: 50%
}

#about-certification .radial-progress-about-certification .circle .mask {
    clip: rect(0, 250px, 250px, 125px)
}

#about-certification .radial-progress-about-certification .circle .mask .fill {
    clip: rect(0, 125px, 250px, 0);
    background: none;
    border: 16px solid #fff
}

#about-certification .radial-progress-about-certification .inset {
    width: 234px;
    height: 234px;
    position: absolute;
    margin-left: 8px;
    margin-top: 8px;
    background: none;
    border-radius: 50%
}

#about-certification .radial-progress-about-certification .inset .inset-content {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px;
    text-align: center
}

#about-certification .radial-progress-about-certification .inset .inset-content .text {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    font-size: 4.6875em!important;
    color: #fff
}

#about-certification .radial-progress-about-certification .inset .inset-content .text .percentage {
    text-align: center;
    font-size: 70%!important;
    font-weight: 200;
    margin-left: 2px;
    color: #fff
}

#about-certification .radial-progress-about-certification[data-progress="0"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="0"] .circle .fill.fix,
#about-certification .radial-progress-about-certification[data-progress="0"] .circle .mask.full {
    transform: rotate(0deg)
}

#about-certification .radial-progress-about-certification[data-progress="1"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="1"] .circle .mask.full {
    transform: rotate(1.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="1"] .circle .fill.fix,
#about-certification .radial-progress-about-certification[data-progress="2"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="2"] .circle .mask.full {
    transform: rotate(3.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="2"] .circle .fill.fix {
    transform: rotate(7.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="3"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="3"] .circle .mask.full {
    transform: rotate(5.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="3"] .circle .fill.fix {
    transform: rotate(10.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="4"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="4"] .circle .mask.full {
    transform: rotate(7.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="4"] .circle .fill.fix {
    transform: rotate(14.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="5"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="5"] .circle .mask.full {
    transform: rotate(9deg)
}

#about-certification .radial-progress-about-certification[data-progress="5"] .circle .fill.fix {
    transform: rotate(18deg)
}

#about-certification .radial-progress-about-certification[data-progress="6"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="6"] .circle .mask.full {
    transform: rotate(10.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="6"] .circle .fill.fix {
    transform: rotate(21.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="7"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="7"] .circle .mask.full {
    transform: rotate(12.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="7"] .circle .fill.fix {
    transform: rotate(25.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="8"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="8"] .circle .mask.full {
    transform: rotate(14.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="8"] .circle .fill.fix {
    transform: rotate(28.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="9"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="9"] .circle .mask.full {
    transform: rotate(16.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="9"] .circle .fill.fix {
    transform: rotate(32.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="10"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="10"] .circle .mask.full {
    transform: rotate(18deg)
}

#about-certification .radial-progress-about-certification[data-progress="10"] .circle .fill.fix {
    transform: rotate(36deg)
}

#about-certification .radial-progress-about-certification[data-progress="11"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="11"] .circle .mask.full {
    transform: rotate(19.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="11"] .circle .fill.fix {
    transform: rotate(39.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="12"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="12"] .circle .mask.full {
    transform: rotate(21.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="12"] .circle .fill.fix {
    transform: rotate(43.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="13"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="13"] .circle .mask.full {
    transform: rotate(23.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="13"] .circle .fill.fix {
    transform: rotate(46.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="14"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="14"] .circle .mask.full {
    transform: rotate(25.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="14"] .circle .fill.fix {
    transform: rotate(50.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="15"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="15"] .circle .mask.full {
    transform: rotate(27deg)
}

#about-certification .radial-progress-about-certification[data-progress="15"] .circle .fill.fix {
    transform: rotate(54deg)
}

#about-certification .radial-progress-about-certification[data-progress="16"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="16"] .circle .mask.full {
    transform: rotate(28.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="16"] .circle .fill.fix {
    transform: rotate(57.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="17"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="17"] .circle .mask.full {
    transform: rotate(30.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="17"] .circle .fill.fix {
    transform: rotate(61.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="18"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="18"] .circle .mask.full {
    transform: rotate(32.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="18"] .circle .fill.fix {
    transform: rotate(64.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="19"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="19"] .circle .mask.full {
    transform: rotate(34.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="19"] .circle .fill.fix {
    transform: rotate(68.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="20"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="20"] .circle .mask.full {
    transform: rotate(36deg)
}

#about-certification .radial-progress-about-certification[data-progress="20"] .circle .fill.fix {
    transform: rotate(72deg)
}

#about-certification .radial-progress-about-certification[data-progress="21"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="21"] .circle .mask.full {
    transform: rotate(37.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="21"] .circle .fill.fix {
    transform: rotate(75.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="22"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="22"] .circle .mask.full {
    transform: rotate(39.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="22"] .circle .fill.fix {
    transform: rotate(79.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="23"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="23"] .circle .mask.full {
    transform: rotate(41.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="23"] .circle .fill.fix {
    transform: rotate(82.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="24"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="24"] .circle .mask.full {
    transform: rotate(43.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="24"] .circle .fill.fix {
    transform: rotate(86.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="25"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="25"] .circle .mask.full {
    transform: rotate(45deg)
}

#about-certification .radial-progress-about-certification[data-progress="25"] .circle .fill.fix {
    transform: rotate(90deg)
}

#about-certification .radial-progress-about-certification[data-progress="26"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="26"] .circle .mask.full {
    transform: rotate(46.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="26"] .circle .fill.fix {
    transform: rotate(93.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="27"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="27"] .circle .mask.full {
    transform: rotate(48.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="27"] .circle .fill.fix {
    transform: rotate(97.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="28"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="28"] .circle .mask.full {
    transform: rotate(50.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="28"] .circle .fill.fix {
    transform: rotate(100.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="29"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="29"] .circle .mask.full {
    transform: rotate(52.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="29"] .circle .fill.fix {
    transform: rotate(104.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="30"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="30"] .circle .mask.full {
    transform: rotate(54deg)
}

#about-certification .radial-progress-about-certification[data-progress="30"] .circle .fill.fix {
    transform: rotate(108deg)
}

#about-certification .radial-progress-about-certification[data-progress="31"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="31"] .circle .mask.full {
    transform: rotate(55.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="31"] .circle .fill.fix {
    transform: rotate(.31turn)
}

#about-certification .radial-progress-about-certification[data-progress="32"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="32"] .circle .mask.full {
    transform: rotate(57.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="32"] .circle .fill.fix {
    transform: rotate(.32turn)
}

#about-certification .radial-progress-about-certification[data-progress="33"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="33"] .circle .mask.full {
    transform: rotate(59.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="33"] .circle .fill.fix {
    transform: rotate(.33turn)
}

#about-certification .radial-progress-about-certification[data-progress="34"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="34"] .circle .mask.full {
    transform: rotate(61.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="34"] .circle .fill.fix {
    transform: rotate(.34turn)
}

#about-certification .radial-progress-about-certification[data-progress="35"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="35"] .circle .mask.full {
    transform: rotate(63deg)
}

#about-certification .radial-progress-about-certification[data-progress="35"] .circle .fill.fix {
    transform: rotate(126deg)
}

#about-certification .radial-progress-about-certification[data-progress="36"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="36"] .circle .mask.full {
    transform: rotate(64.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="36"] .circle .fill.fix {
    transform: rotate(.36turn)
}

#about-certification .radial-progress-about-certification[data-progress="37"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="37"] .circle .mask.full {
    transform: rotate(66.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="37"] .circle .fill.fix {
    transform: rotate(.37turn)
}

#about-certification .radial-progress-about-certification[data-progress="38"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="38"] .circle .mask.full {
    transform: rotate(68.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="38"] .circle .fill.fix {
    transform: rotate(.38turn)
}

#about-certification .radial-progress-about-certification[data-progress="39"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="39"] .circle .mask.full {
    transform: rotate(70.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="39"] .circle .fill.fix {
    transform: rotate(.39turn)
}

#about-certification .radial-progress-about-certification[data-progress="40"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="40"] .circle .mask.full {
    transform: rotate(72deg)
}

#about-certification .radial-progress-about-certification[data-progress="40"] .circle .fill.fix {
    transform: rotate(144deg)
}

#about-certification .radial-progress-about-certification[data-progress="41"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="41"] .circle .mask.full {
    transform: rotate(73.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="41"] .circle .fill.fix {
    transform: rotate(.41turn)
}

#about-certification .radial-progress-about-certification[data-progress="42"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="42"] .circle .mask.full {
    transform: rotate(75.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="42"] .circle .fill.fix {
    transform: rotate(.42turn)
}

#about-certification .radial-progress-about-certification[data-progress="43"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="43"] .circle .mask.full {
    transform: rotate(77.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="43"] .circle .fill.fix {
    transform: rotate(154.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="44"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="44"] .circle .mask.full {
    transform: rotate(79.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="44"] .circle .fill.fix {
    transform: rotate(.44turn)
}

#about-certification .radial-progress-about-certification[data-progress="45"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="45"] .circle .mask.full {
    transform: rotate(81deg)
}

#about-certification .radial-progress-about-certification[data-progress="45"] .circle .fill.fix {
    transform: rotate(162deg)
}

#about-certification .radial-progress-about-certification[data-progress="46"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="46"] .circle .mask.full {
    transform: rotate(82.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="46"] .circle .fill.fix {
    transform: rotate(165.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="47"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="47"] .circle .mask.full {
    transform: rotate(84.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="47"] .circle .fill.fix {
    transform: rotate(.47turn)
}

#about-certification .radial-progress-about-certification[data-progress="48"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="48"] .circle .mask.full {
    transform: rotate(86.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="48"] .circle .fill.fix {
    transform: rotate(172.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="49"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="49"] .circle .mask.full {
    transform: rotate(88.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="49"] .circle .fill.fix {
    transform: rotate(.49turn)
}

#about-certification .radial-progress-about-certification[data-progress="50"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="50"] .circle .mask.full {
    transform: rotate(90deg)
}

#about-certification .radial-progress-about-certification[data-progress="50"] .circle .fill.fix {
    transform: rotate(180deg)
}

#about-certification .radial-progress-about-certification[data-progress="51"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="51"] .circle .mask.full {
    transform: rotate(91.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="51"] .circle .fill.fix {
    transform: rotate(.51turn)
}

#about-certification .radial-progress-about-certification[data-progress="52"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="52"] .circle .mask.full {
    transform: rotate(93.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="52"] .circle .fill.fix {
    transform: rotate(.52turn)
}

#about-certification .radial-progress-about-certification[data-progress="53"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="53"] .circle .mask.full {
    transform: rotate(95.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="53"] .circle .fill.fix {
    transform: rotate(.53turn)
}

#about-certification .radial-progress-about-certification[data-progress="54"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="54"] .circle .mask.full {
    transform: rotate(97.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="54"] .circle .fill.fix {
    transform: rotate(.54turn)
}

#about-certification .radial-progress-about-certification[data-progress="55"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="55"] .circle .mask.full {
    transform: rotate(99deg)
}

#about-certification .radial-progress-about-certification[data-progress="55"] .circle .fill.fix {
    transform: rotate(198deg)
}

#about-certification .radial-progress-about-certification[data-progress="56"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="56"] .circle .mask.full {
    transform: rotate(100.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="56"] .circle .fill.fix {
    transform: rotate(201.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="57"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="57"] .circle .mask.full {
    transform: rotate(102.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="57"] .circle .fill.fix {
    transform: rotate(.57turn)
}

#about-certification .radial-progress-about-certification[data-progress="58"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="58"] .circle .mask.full {
    transform: rotate(104.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="58"] .circle .fill.fix {
    transform: rotate(208.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="59"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="59"] .circle .mask.full {
    transform: rotate(106.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="59"] .circle .fill.fix {
    transform: rotate(.59turn)
}

#about-certification .radial-progress-about-certification[data-progress="60"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="60"] .circle .mask.full {
    transform: rotate(108deg)
}

#about-certification .radial-progress-about-certification[data-progress="60"] .circle .fill.fix {
    transform: rotate(216deg)
}

#about-certification .radial-progress-about-certification[data-progress="61"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="61"] .circle .mask.full {
    transform: rotate(109.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="61"] .circle .fill.fix {
    transform: rotate(.61turn)
}

#about-certification .radial-progress-about-certification[data-progress="62"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="62"] .circle .mask.full {
    transform: rotate(.31turn)
}

#about-certification .radial-progress-about-certification[data-progress="62"] .circle .fill.fix {
    transform: rotate(.62turn)
}

#about-certification .radial-progress-about-certification[data-progress="63"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="63"] .circle .mask.full {
    transform: rotate(113.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="63"] .circle .fill.fix {
    transform: rotate(.63turn)
}

#about-certification .radial-progress-about-certification[data-progress="64"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="64"] .circle .mask.full {
    transform: rotate(.32turn)
}

#about-certification .radial-progress-about-certification[data-progress="64"] .circle .fill.fix {
    transform: rotate(.64turn)
}

#about-certification .radial-progress-about-certification[data-progress="65"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="65"] .circle .mask.full {
    transform: rotate(117deg)
}

#about-certification .radial-progress-about-certification[data-progress="65"] .circle .fill.fix {
    transform: rotate(234deg)
}

#about-certification .radial-progress-about-certification[data-progress="66"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="66"] .circle .mask.full {
    transform: rotate(.33turn)
}

#about-certification .radial-progress-about-certification[data-progress="66"] .circle .fill.fix {
    transform: rotate(.66turn)
}

#about-certification .radial-progress-about-certification[data-progress="67"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="67"] .circle .mask.full {
    transform: rotate(120.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="67"] .circle .fill.fix {
    transform: rotate(241.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="68"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="68"] .circle .mask.full {
    transform: rotate(.34turn)
}

#about-certification .radial-progress-about-certification[data-progress="68"] .circle .fill.fix {
    transform: rotate(.68turn)
}

#about-certification .radial-progress-about-certification[data-progress="69"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="69"] .circle .mask.full {
    transform: rotate(124.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="69"] .circle .fill.fix {
    transform: rotate(248.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="70"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="70"] .circle .mask.full {
    transform: rotate(126deg)
}

#about-certification .radial-progress-about-certification[data-progress="70"] .circle .fill.fix {
    transform: rotate(252deg)
}

#about-certification .radial-progress-about-certification[data-progress="71"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="71"] .circle .mask.full {
    transform: rotate(127.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="71"] .circle .fill.fix {
    transform: rotate(.71turn)
}

#about-certification .radial-progress-about-certification[data-progress="72"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="72"] .circle .mask.full {
    transform: rotate(.36turn)
}

#about-certification .radial-progress-about-certification[data-progress="72"] .circle .fill.fix {
    transform: rotate(.72turn)
}

#about-certification .radial-progress-about-certification[data-progress="73"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="73"] .circle .mask.full {
    transform: rotate(131.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="73"] .circle .fill.fix {
    transform: rotate(.73turn)
}

#about-certification .radial-progress-about-certification[data-progress="74"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="74"] .circle .mask.full {
    transform: rotate(.37turn)
}

#about-certification .radial-progress-about-certification[data-progress="74"] .circle .fill.fix {
    transform: rotate(.74turn)
}

#about-certification .radial-progress-about-certification[data-progress="75"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="75"] .circle .mask.full {
    transform: rotate(135deg)
}

#about-certification .radial-progress-about-certification[data-progress="75"] .circle .fill.fix {
    transform: rotate(270deg)
}

#about-certification .radial-progress-about-certification[data-progress="76"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="76"] .circle .mask.full {
    transform: rotate(.38turn)
}

#about-certification .radial-progress-about-certification[data-progress="76"] .circle .fill.fix {
    transform: rotate(.76turn)
}

#about-certification .radial-progress-about-certification[data-progress="77"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="77"] .circle .mask.full {
    transform: rotate(138.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="77"] .circle .fill.fix {
    transform: rotate(.77turn)
}

#about-certification .radial-progress-about-certification[data-progress="78"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="78"] .circle .mask.full {
    transform: rotate(.39turn)
}

#about-certification .radial-progress-about-certification[data-progress="78"] .circle .fill.fix {
    transform: rotate(.78turn)
}

#about-certification .radial-progress-about-certification[data-progress="79"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="79"] .circle .mask.full {
    transform: rotate(142.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="79"] .circle .fill.fix {
    transform: rotate(284.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="80"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="80"] .circle .mask.full {
    transform: rotate(144deg)
}

#about-certification .radial-progress-about-certification[data-progress="80"] .circle .fill.fix {
    transform: rotate(288deg)
}

#about-certification .radial-progress-about-certification[data-progress="81"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="81"] .circle .mask.full {
    transform: rotate(145.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="81"] .circle .fill.fix {
    transform: rotate(.81turn)
}

#about-certification .radial-progress-about-certification[data-progress="82"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="82"] .circle .mask.full {
    transform: rotate(.41turn)
}

#about-certification .radial-progress-about-certification[data-progress="82"] .circle .fill.fix {
    transform: rotate(.82turn)
}

#about-certification .radial-progress-about-certification[data-progress="83"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="83"] .circle .mask.full {
    transform: rotate(149.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="83"] .circle .fill.fix {
    transform: rotate(298.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="84"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="84"] .circle .mask.full {
    transform: rotate(.42turn)
}

#about-certification .radial-progress-about-certification[data-progress="84"] .circle .fill.fix {
    transform: rotate(.84turn)
}

#about-certification .radial-progress-about-certification[data-progress="85"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="85"] .circle .mask.full {
    transform: rotate(153deg)
}

#about-certification .radial-progress-about-certification[data-progress="85"] .circle .fill.fix {
    transform: rotate(306deg)
}

#about-certification .radial-progress-about-certification[data-progress="86"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="86"] .circle .mask.full {
    transform: rotate(154.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="86"] .circle .fill.fix {
    transform: rotate(309.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="87"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="87"] .circle .mask.full {
    transform: rotate(156.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="87"] .circle .fill.fix {
    transform: rotate(.87turn)
}

#about-certification .radial-progress-about-certification[data-progress="88"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="88"] .circle .mask.full {
    transform: rotate(.44turn)
}

#about-certification .radial-progress-about-certification[data-progress="88"] .circle .fill.fix {
    transform: rotate(.88turn)
}

#about-certification .radial-progress-about-certification[data-progress="89"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="89"] .circle .mask.full {
    transform: rotate(160.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="89"] .circle .fill.fix {
    transform: rotate(320.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="90"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="90"] .circle .mask.full {
    transform: rotate(162deg)
}

#about-certification .radial-progress-about-certification[data-progress="90"] .circle .fill.fix {
    transform: rotate(324deg)
}

#about-certification .radial-progress-about-certification[data-progress="91"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="91"] .circle .mask.full {
    transform: rotate(163.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="91"] .circle .fill.fix {
    transform: rotate(.91turn)
}

#about-certification .radial-progress-about-certification[data-progress="92"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="92"] .circle .mask.full {
    transform: rotate(165.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="92"] .circle .fill.fix {
    transform: rotate(331.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="93"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="93"] .circle .mask.full {
    transform: rotate(167.4deg)
}

#about-certification .radial-progress-about-certification[data-progress="93"] .circle .fill.fix {
    transform: rotate(.93turn)
}

#about-certification .radial-progress-about-certification[data-progress="94"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="94"] .circle .mask.full {
    transform: rotate(.47turn)
}

#about-certification .radial-progress-about-certification[data-progress="94"] .circle .fill.fix {
    transform: rotate(.94turn)
}

#about-certification .radial-progress-about-certification[data-progress="95"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="95"] .circle .mask.full {
    transform: rotate(171deg)
}

#about-certification .radial-progress-about-certification[data-progress="95"] .circle .fill.fix {
    transform: rotate(342deg)
}

#about-certification .radial-progress-about-certification[data-progress="96"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="96"] .circle .mask.full {
    transform: rotate(172.8deg)
}

#about-certification .radial-progress-about-certification[data-progress="96"] .circle .fill.fix {
    transform: rotate(345.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="97"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="97"] .circle .mask.full {
    transform: rotate(174.6deg)
}

#about-certification .radial-progress-about-certification[data-progress="97"] .circle .fill.fix {
    transform: rotate(.97turn)
}

#about-certification .radial-progress-about-certification[data-progress="98"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="98"] .circle .mask.full {
    transform: rotate(.49turn)
}

#about-certification .radial-progress-about-certification[data-progress="98"] .circle .fill.fix {
    transform: rotate(.98turn)
}

#about-certification .radial-progress-about-certification[data-progress="99"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="99"] .circle .mask.full {
    transform: rotate(178.2deg)
}

#about-certification .radial-progress-about-certification[data-progress="99"] .circle .fill.fix {
    transform: rotate(.99turn)
}

#about-certification .radial-progress-about-certification[data-progress="100"] .circle .fill,
#about-certification .radial-progress-about-certification[data-progress="100"] .circle .mask.full {
    transform: rotate(180deg)
}

#about-certification .radial-progress-about-certification[data-progress="100"] .circle .fill.fix {
    transform: rotate(1turn)
}

#about-certification .area {
    text-align: center
}

#about-certification .area p {
    font-weight: 400;
    font-size: 1em
}

#about-certification .area:first-child {
    background: #f1f2f2;
    padding: 20px 0;
    position: relative;
    z-index: 1;
    z-index: 10
}

#about-certification .area:first-child .wrapper {
    padding: 30px 20px 70px
}

#about-certification .area:first-child:after {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden;
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 100%;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 100%;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 100%;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 100%;
    background: #fff;
    height: 90px;
    width: 100%
}

#about-certification .area:nth-child(2) {
    position: relative
}

#about-certification .area:nth-child(2) img {
    width: calc(100% - 60px);
    margin: 10px 0 25px;
    height: 100%
}

#about-certification .area:nth-child(4) {
    margin-bottom: 0
}

#about-certification .area:nth-child(4) img {
    position: relative;
    top: -25px;
    z-index: 1
}

#about-certification .area ul li {
    padding-left: 20px;
    position: relative
}

#about-certification .area ul li:before {
    background: #0091c7;
    content: "";
    height: 5px;
    left: 5px;
    position: absolute;
    top: 8px;
    width: 5px
}

#about-certification .area [class^="radial-progress"] .circle .line {
    border-color: #aaa
}

#about-certification .area [class^="radial-progress"] .circle .mask .fill {
    border: 10px solid #0091c7
}

#about-certification .area [class^="radial-progress"] .inset .inset-content div {
    font: 300 5.625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    border-radius: 50%;
    background: #2e3942;
    color: #fff;
    height: calc(100% - 20px);
    text-align: center;
    margin: 10px;
    padding-top: 45px
}

#about-certification .area [class^="radial-progress"] .inset .inset-content [class^="icon"] {
    position: absolute;
    left: -14px;
    top: 50px;
    width: 40px;
    height: 40px;
    font-size: 1.75em;
    padding-top: 7px;
    border-radius: 50%;
    background: #2e3942;
    color: #fff
}

#about-certification .area.img-separator {
    background: url(https://alison.com/html/site/img/xabout-cert-separator-guy.jpg.pagespeed.ic.NZMB5-haDr.webp) no-repeat;
    background-position-x: 75%;
    position: relative;
    z-index: 1
}

#about-certification .area.img-separator .wrapper {
    height: 400px;
    position: relative;
    top: 90px
}

#about-certification .area.img-separator .wrapper h3,
#about-certification .area.img-separator .wrapper p {
    color: #fff;
    opacity: .75;
    font-weight: 400
}

#about-certification .area.img-separator:after,
#about-certification .area.img-separator:before {
    background: inherit;
    content: "";
    display: block;
    height: 50%;
    left: 0;
    position: absolute;
    right: 0;
    z-index: -1;
    -webkit-backface-visibility: hidden
}

#about-certification .area.img-separator:before {
    top: 0;
    outline: 2px solid transparent;
    transform: skewY(-2deg);
    transform-origin: 0 0;
    -moz-transform: skewY(-2deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(-2deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(-2deg);
    -webkit-transform-origin: 0 0
}

#about-certification .area.img-separator:after {
    bottom: 0;
    outline: 2px solid transparent;
    transform: skewY(2deg);
    transform-origin: 0 0;
    -moz-transform: skewY(2deg);
    -moz-transform-origin: 0 0;
    -ms-transform: skewY(2deg);
    -ms-transform-origin: 0 0;
    -webkit-transform: skewY(2deg);
    -webkit-transform-origin: 0 0
}

#about-certification .area.img-separator:after,
#about-certification .area.img-separator:before {
    background: #fff;
    bottom: 0;
    height: 70px;
    width: 100%
}

@media only screen and (min-width:768px) {
    #about-certification .area:first-child .wrapper {
        padding: 10px 20px 80px
    }
    #about-certification .area.img-separator .wrapper {
        top: 130px
    }
    #about-certification .area:nth-child(2) img {
        margin-top: 20px
    }
}

@media only screen and (min-width:1020px) {
    #about-certification .area {
        text-align: left
    }
    #about-certification .area .wrapper {
        padding: 50px 20px
    }
    #about-certification .area:first-child h3 {
        margin-top: 50px
    }
    #about-certification .area:nth-child(2) img {
        position: absolute;
        left: -75px;
        margin-bottom: 0;
        width: 500px;
        bottom: 0
    }
    #about-certification .area:nth-child(4) h3 {
        margin-top: 125px
    }
    #about-certification .area [class^="radial-progress"] {
        margin-bottom: 0
    }
    #about-certification .area.img-separator .wrapper {
        top: 130px;
        top: 90px
    }
}

@media only screen and (min-width:1240px) {
    #about-certification .area:nth-child(2) img {
        width: 600px
    }
}

@media only screen and (min-width:1500px) {
    #about-certification .area:nth-child(2) img {
        top: -10px;
        width: auto
    }
    #about-certification .area.img-separator {
        background-size: 100%
    }
    #about-certification .area.img-separator:after,
    #about-certification .area.img-separator:before {
        height: 90px
    }
}

@media only screen and (min-width:768px) {
    .about-banner {
        margin: 0 auto 70px
    }
    .job-listing .icon-about {
        margin-top: 5px;
        display: block
    }
    .about-text-strip .our-story-image,
    .text-strip-top .our-story-image {
        display: block;
        bottom: 230px;
        left: -165px;
        position: absolute;
        z-index: 5
    }
    .about-text-strip .wrapper,
    .text-strip-top .wrapper {
        max-width: 400px;
        margin-right: 55px
    }
    .about-separator p {
        text-align: left
    }
    .about-separator .our-company {
        float: left;
        width: 75%
    }
    .about-separator .our-logo {
        float: right;
        width: 25%;
        position: absolute;
        right: 0;
        top: 30%
    }
}

@media only screen and (min-width:1020px) {
    .about-text-strip {
        margin-top: 30px
    }
    .about-text-strip,
    .job-listing,
    .text-strip-top {
        text-align: left
    }
    .about-text-strip .wrapper,
    .text-strip-top .wrapper {
        margin: 0 auto
    }
}

@media only screen and (min-width:1240px) {
    .about-separator p {
        text-align: left
    }
    .about-separator .our-company {
        float: left;
        width: 75%
    }
    .about-separator .our-logo {
        float: right;
        width: 25%;
        position: absolute;
        right: 0;
        top: 30%
    }
    .about-text-strip .our-story-image {
        bottom: 145px
    }
    .about-text-strip .wrapper {
        max-width: 600px
    }
    .three-columns li {
        margin: 0 35px
    }
}

@media only screen and (min-width:1500px) {
    .about-text-strip {
        margin-top: 60px
    }
    .about-text-strip .our-story-image {
        left: -75px
    }
    .about-text-strip .wrapper {
        max-width: 700px
    }
}

@media only screen and (min-width:1921px) {
    .about-text-strip .our-story-image {
        bottom: 125px;
        margin: auto;
        position: absolute;
        z-index: 5
    }
    .about-text-strip .wrapper {
        max-width: 1000px
    }
}

#cart-page {
    padding: 35px 0 0
}

#cart-page .certificates,
#cart-page .merchandise {
    margin: 0;
    padding: 25px 0
}

#cart-page .certificates h3,
#cart-page .merchandise h3 {
    color: #465159;
    font-weight: 400;
    font-size: 1.5em
}

#cart-page .head {
    color: #2e3942;
    background: #e7ebed;
    margin: 0 0 25px
}

#cart-page .head .wrapper {
    padding: 20px 15px;
    text-align: center
}

#cart-page .continue-btn {
    display: block;
    margin: 0 auto;
    max-width: 200px;
    padding: 10px 15px;
    text-align: center;
    vertical-align: middle
}

#cart-page .continue-btn [class*="icon"] {
    margin-right: 4px
}

#cart-page .continue-btn span {
    display: inline-block;
    vertical-align: middle
}

#cart-page .currency-converter-btn {
    margin-right: 15px
}

#cart-page .currency-converter-btn-checkout {
    float: right;
    max-width: 175px
}

#cart-page #currency-converter {
    clear: both;
    margin-top: 50px;
    display: none;
    width: 200px;
    height: 200px;
    float: right
}

#cart-page .coupon-holder-main {
    display: none;
    padding-top: 25px
}

#cart-page .body {
    color: #2d3942;
    font: 400 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 auto;
    max-width: 1150px;
    padding: 0 15px
}

#cart-page .body li {
    border-bottom: 1px solid #d9dee2;
    margin-top: 25px;
    padding: 15px 0;
    position: relative
}

#cart-page .body li a,
#cart-page .body li button {
    color: #0091c7;
    padding: 0
}

#cart-page .body li:first-child {
    border-top: 1px solid #d9dee2
}

#cart-page .body li.pdf .decrease,
#cart-page .body li.pdf .increase {
    display: none
}

#cart-page .body .item-frame {
    float: left;
    width: 33.33%
}

#cart-page .body .item-quantity {
    float: left;
    text-align: center;
    width: 33.33%
}

#cart-page .body .item-quantity button,
#cart-page .body .item-quantity span {
    display: inline-block;
    font-size: 16px;
    width: calc(100% / 3 - 4px)
}

#cart-page .body .item-quantity>span {
    border: 1px solid #d9dee2;
    padding: 8px
}

#cart-page .body .item-quantity>button {
    padding: 8px 0
}

#cart-page .body .item-quantity>button:disabled {
    color: #d2d2d2;
    pointer-events: none!important
}

#cart-page .body .item-quantity>button span {
    display: block;
    text-align: center;
    width: 100%
}

#cart-page .body .item-price {
    float: left;
    text-align: left;
    width: 33.33%
}

#cart-page .body .item-price .price {
    font: 600 1.5625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.6em
}

#cart-page .body .item-frame {
    text-align: right
}

#cart-page .body .item-frame a {
    display: block
}

#cart-page .body .item {
    clear: both;
    float: left;
    margin: 30px 0 0;
    width: 100%
}

#cart-page .body .item img {
    display: block;
    float: left;
    max-width: 100%;
    width: 30%
}

#cart-page .body .item .text {
    float: left;
    padding-left: 10px;
    width: 70%
}

#cart-page .body .item .product-name {
    text-transform: capitalize
}

#cart-page .body .item p {
    margin: 0 0 10px
}

#cart-page .body .item .name-holder {
    display: none
}

#cart-page .body .item input[type="text"] {
    border: 1px solid #e5e5e5;
    color: #2d3942;
    display: inline-block;
    font-weight: 700;
    margin: 10px 0;
    padding: 5px;
    width: 150px
}

#cart-page .body .item h4 {
    margin-bottom: 15px
}

#cart-page .body .item h3 {
    font-size: 1em;
    margin-bottom: 20px
}

#cart-page .body .item .frame-status {
    margin-bottom: 10px
}

#cart-page .body .item .frame-status a {
    display: block
}

#cart-page .body .item .loose-buttons {
    display: inline-block;
    margin: 0 0 10px
}

#cart-page .body .coupon-holder {
    margin: 25px auto;
    max-width: 450px
}

#cart-page .body .coupon-holder>.btn {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    width: 200px
}

#cart-page .body .coupon-holder .btn:disabled {
    background: #5d666d;
    border: 2px solid #5d666d;
    color: #fff;
    pointer-events: none
}

#cart-page .body .coupon-holder .hide-mobile {
    display: none;
    padding: 25px 0 10px
}

#cart-page .body .coupon-holder .hide-mobile h4 {
    margin: 0 0 10px
}

#cart-page .body .coupon-holder form {
    max-width: 400px
}

#cart-page .body .coupon-holder form input {
    border: 1px solid #d9dee2;
    float: left;
    height: 40px;
    width: 65%
}

#cart-page .body .coupon-holder form button {
    cursor: pointer;
    float: left;
    height: 40px;
    width: 35%
}

#cart-page .body .coupon-holder h5 {
    border: 1px solid #d9dee2;
    display: block;
    padding: 5px 15px
}

#cart-page .body .coupon-holder .highlight {
    background: #873694;
    color: #fff
}

#cart-page .body .coupon-holder p {
    margin: 10px 0 0
}

#cart-page .body .total-holder {
    margin: 30px auto;
    max-width: 450px
}

#cart-page .body .total-holder>div>span {
    display: block;
    float: right;
    font-size: 15px;
    text-align: right;
    width: 30%
}

#cart-page .body .total-holder .total,
#cart-page .body .total-holder .total p {
    font-weight: 600
}

#cart-page .body .total-holder p {
    display: block;
    float: left;
    font-size: 15px;
    width: 70%
}

#cart-page .foot {
    margin: 30px 0;
    padding: 0
}

#cart-page .foot .wrapper {
    padding: 0 15px
}

#cart-page .foot .help-text {
    color: #2d3942;
    display: none;
    float: left;
    font-size: 15px;
    line-height: 39px;
    vertical-align: middle;
    width: 65%
}

#cart-page .foot .help-text [class*="icon"] {
    margin-right: 10px
}

#cart-page .foot .help-text:hover [class*="icon"] {
    color: #0091c7
}

#cart-page .foot .btn-ghost {
    max-width: 180px
}

#cart-page .foot .btn {
    font-size: 15px;
    padding: 10px 15px
}

#cart-page .foot .continue {
    float: right;
    max-width: 180px
}

@media only screen and (min-width:768px) {
    #cart-page .help-text {
        display: block;
        float: left;
        font-size: 16px;
        text-align: left;
        width: 250px
    }
    #cart-page .head .wrapper {
        padding: 50px 15px 30px
    }
    #cart-page .head .continue-btn {
        display: block;
        float: right;
        max-width: 100%;
        width: 180px
    }
    #cart-page .coupon-holder-main {
        display: block!important
    }
    #cart-page .body {
        margin: 60px auto 0
    }
    #cart-page .body li:first-child,
    #cart-page .body li:first-child .item,
    #cart-page .body li:first-child .item-frame,
    #cart-page .body li:first-child .item-price,
    #cart-page .body li:first-child .item-quantity {
        position: relative
    }
    #cart-page .body li:first-child .item-frame:before,
    #cart-page .body li:first-child .item-price:before,
    #cart-page .body li:first-child .item-quantity:before,
    #cart-page .body li:first-child .item:before {
        color: #465159;
        content: "EXTRAS";
        font: 600 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        left: 0;
        position: absolute;
        text-align: center;
        text-transform: uppercase;
        top: -50px;
        width: 100%
    }
    #cart-page .body li:first-child .item-frame:before {
        text-align: left
    }
    #cart-page .body li:first-child .item-quantity:before {
        content: "QUANTITY"
    }
    #cart-page .body li:first-child .item-price:before {
        content: "PRICE";
        text-align: right
    }
    #cart-page .body li:first-child .item:before {
        content: "ITEM"
    }
    #cart-page .body .item {
        clear: none;
        float: left;
        margin: 0;
        padding-right: 10px;
        width: 55%
    }
    #cart-page .body .item-frame {
        float: right;
        text-align: left;
        width: 15%
    }
    #cart-page .body .item-frame a {
        display: block
    }
    #cart-page .body .item-quantity {
        float: right;
        width: 15%
    }
    #cart-page .body .item-price {
        float: right;
        text-align: right;
        width: 15%
    }
    #cart-page .body .coupon-holder {
        float: left;
        margin: 0;
        width: 45%
    }
    #cart-page .body .coupon-holder .coupon-trigger {
        display: none
    }
    #cart-page .body .coupon-holder .hide-mobile {
        display: block!important
    }
    #cart-page .body .coupon-holder .notice .success {
        color: #38ac69
    }
    #cart-page .body .coupon-holder .notice .error {
        color: #ac1e2d
    }
    #cart-page .body .total-holder {
        float: right;
        width: 48%
    }
    #cart-page .foot {
        margin: 30px auto;
        width: 100%
    }
    #cart-page .foot .help-text {
        display: block;
        float: left;
        font-size: 16px;
        text-align: left;
        width: 250px
    }
    #cart-page .foot .continue {
        width: 100%
    }
}

@media only screen and (min-width:1020px) {
    #cart-page .body {
        margin: 50px auto 20px
    }
    #cart-page .body ul {
        margin: 0 0 30px
    }
}

@media only screen and (min-width:1140px) {
    #cart-page .body li {
        padding: 40px 0
    }
    #cart-page .body li:first-child .item-frame:before,
    #cart-page .body li:first-child .item-price:before,
    #cart-page .body li:first-child .item-quantity:before,
    #cart-page .body li:first-child .item:before {
        top: -70px
    }
    #cart-page .body .item h4 {
        font-size: 1.5em
    }
    #cart-page .body .item .frame-status {
        margin-bottom: 20px
    }
}

#cart-page .sale {
    background: #68aadd;
    margin-top: -25px;
    padding: 20px;
    text-align: center
}

#cart-page .sale h4 {
    font-size: 1.875em;
    margin: 0 0 5px
}

#cart-page .sale h4,
#cart-page .sale p {
    color: #fff
}

#cart-page #shop-container .wrapper {
    padding: 0
}

#cart-page #shop-container .merchandise {
    border-bottom: 1px solid #d9dee2;
    padding: 0 0 25px;
    text-align: center
}

#cart-page #shop-container .merchandise-holder {
    margin: 0
}

#cart-page #shop-container .merchandise-holder .merchandise-item {
    margin: 0 auto;
    max-width: 285px;
    text-align: left
}

#cart-page #shop-container .merchandise-holder>li {
    border: 0;
    display: inline-block;
    max-width: 285px;
    padding: 0;
    width: 100%
}

#cart-page #shop-container .merchandise-holder .merchandise-name {
    padding: 10px 0
}

#cart-page #shop-container .merchandise-holder .item-desc,
#cart-page #shop-container .merchandise-holder .item-image {
    width: 100%
}

#cart-page #shop-container .merchandise-holder .item-desc .title,
#cart-page #shop-container .merchandise-holder .item-image .title {
    line-height: 30px
}

#cart-page #shop-container .merchandise-holder button.colour,
#cart-page #shop-container .merchandise-holder button.size {
    height: 20px;
    line-height: 20px;
    margin: 0 10px 0 0;
    width: 20px
}

#cart-page #shop-container .merchandise-holder button.colour.active,
#cart-page #shop-container .merchandise-holder button.colour:hover,
#cart-page #shop-container .merchandise-holder button.size.active,
#cart-page #shop-container .merchandise-holder button.size:hover {
    height: 30px;
    line-height: 30px;
    width: 30px
}

#cart-page #shop-container .merchandise-holder ul {
    margin: 0 0 30px;
    width: 100%
}

#cart-page #shop-container .merchandise-holder ul li {
    border: 0;
    margin: 0;
    min-height: 35px;
    padding: 5px 0
}

#cart-page #shop-container .merchandise-holder .tshirt-add-to-cart {
    color: #fff;
    display: block;
    margin: 0 auto;
    padding: 7px 25px 7px 0;
    position: relative
}

@media only screen and (min-width:768px) {
    #cart-page #shop-container .merchandise-holder>li {
        margin: 0 20px 20px
    }
}

@media only screen and (min-width:1240px) {
    #cart-page #shop-container .merchandise-holder>li {
        margin: 0 40px 20px
    }
}

#cart-page .available-products h3 {
    font-size: 16px;
    text-transform: capitalize
}

@media only screen and (min-width:768px) {
    #cart-page .available-products h3 {
        font-size: 24px
    }
}

.available-products {
    background: #f3f7f9
}

#cart-page.offline-payment .complete-order {
    border-bottom: 0
}

#cart-page.offline-payment .complete-order .complete-code {
    max-width: 400px
}

#cart-page.offline-payment .complete-order .complete-code input[type="text"] {
    border: 1px solid #d9dee2;
    float: left;
    height: 40px;
    width: 65%
}

#cart-page.offline-payment .complete-order .complete-code .submit-code {
    color: #fff;
    cursor: pointer;
    float: left;
    height: 40px;
    width: 35%
}

.checkout-page .order-details {
    min-height: 720px
}

.checkout-page #currency-converter {
    height: 250px!important;
    margin-top: 20px!important
}

#shop-container h2 {
    color: #5d666d;
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 25px 0 0;
    text-align: center
}

#shop-container .notice {
    color: #5d666d;
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    display: block;
    margin: 10px 0 0;
    text-align: center
}

#shop-container .merchandise-holder {
    margin: 40px auto;
    padding: 0
}

#shop-container .merchandise-holder>li {
    margin: 0 auto 35px;
    max-width: 330px;
    position: relative
}

#shop-container .disable {
    background: rgba(45, 57, 66, .75);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 2
}

#shop-container .disable h4 {
    color: #fff;
    font: 700 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    left: 0;
    letter-spacing: .05em;
    margin-top: -15px;
    padding: 0 20px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 50%;
    width: 100%
}

#shop-container .item-image {
    height: 210px;
    position: relative;
    overflow: hidden
}

#shop-container .item-image img {
    display: block;
    margin: 0 auto;
    width: 100%
}

#shop-container .item-image a,
#shop-container .item-image a:after {
    height: 100%;
    left: 0;
    position: absolute;
    opacity: 0;
    top: 0;
    width: 100%
}

#shop-container .item-image a:after {
    background: rgba(45, 57, 66, .5);
    content: "\e90a";
    color: #fff;
    font-size: 40px;
    font-family: icomoon!important;
    line-height: 220px;
    text-align: center;
    z-index: 2;
    transition: opacity .3s ease-in
}

#shop-container .item-image a.active,
#shop-container .item-image a:hover:after {
    opacity: 1
}

#shop-container .item-desc {
    background: #f3f6f7;
    padding: 0 20px 20px
}

#shop-container .item-desc .merchandise-name {
    border-bottom: 1px solid #d2d7db;
    clear: both;
    color: #5d666d;
    display: inline-block;
    font: 500 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 20px 25px 5px 0;
    width: 100%
}

#shop-container .item-desc .merchandise-name span {
    text-transform: capitalize
}

#shop-container .item-desc .title {
    color: #5d666d;
    display: inline-block;
    font-size: 13px;
    line-height: 45px;
    margin: 0 0 15px;
    width: 65px
}

#shop-container .item-desc li {
    margin: 0 0 25px;
    min-height: 45px
}

#shop-container .item-desc li button.colour,
#shop-container .item-desc li button.size {
    background: hsla(0, 0%, 100%, .4);
    border: 1px solid #838b8f;
    border-radius: 50%;
    color: #5d666d;
    display: inline-block;
    font: 700 .6875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    height: 25px;
    line-height: 25px;
    margin: 0 20px 0 0;
    padding: 0;
    text-align: center;
    vertical-align: middle;
    width: 25px;
    transition: all .2s ease-in
}

#shop-container .item-desc li button.colour:hover,
#shop-container .item-desc li button.size:hover {
    background: #fff;
    height: 35px;
    line-height: 35px;
    width: 35px
}

#shop-container .item-desc li button.colour.active,
#shop-container .item-desc li button.size.active {
    background: #fff;
    height: 40px;
    line-height: 40px;
    width: 40px
}

#shop-container .item-desc li button.colour[data-colour="white"],
#shop-container .item-desc li button.size[data-colour="white"] {
    background: #fff
}

#shop-container .item-desc li button.colour[data-colour="grey"],
#shop-container .item-desc li button.colour[data-colour="grey"].active,
#shop-container .item-desc li button.size[data-colour="grey"],
#shop-container .item-desc li button.size[data-colour="grey"].active {
    background: #b4bcbe
}

#shop-container .item-desc li button.colour[data-colour="navy"],
#shop-container .item-desc li button.colour[data-colour="navy"].active,
#shop-container .item-desc li button.size[data-colour="navy"],
#shop-container .item-desc li button.size[data-colour="navy"].active {
    background: #1d355c
}

#shop-container .item-desc li [class*="price"] {
    color: #066eb0;
    display: inline-block;
    font: 700 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 5px 0 0
}

#shop-container .item-desc li .discounted {
    color: #748089;
    font-weight: 400;
    position: relative
}

#shop-container .item-desc li .discounted:before {
    background: #e32726;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 50%;
    width: 100%
}

#shop-container .shop-add-to-cart {
    background: #2d3942;
    color: #fff;
    font-size: 14px;
    position: relative;
    transition: background .3s ease-in
}

#shop-container .shop-add-to-cart span {
    background: #0094c9;
    border-radius: 50%;
    box-shadow: 2px 0 10px 0 rgba(0, 0, 0, .37);
    color: #fff;
    display: block;
    font-size: 26px;
    height: 55px;
    line-height: 55px;
    position: absolute;
    right: -9px;
    text-align: center;
    top: -10px;
    width: 55px
}

#shop-container .shop-add-to-cart:hover {
    background: #4c606f
}

@media only screen and (min-width:768px) {
    #shop-container .merchandise-holder {
        margin: 60px auto
    }
    #shop-container .merchandise-holder>li {
        max-width: 900px
    }
    #shop-container .item-image {
        float: left;
        position: relative;
        overflow: hidden;
        width: 40%
    }
    #shop-container .item-image img {
        bottom: -1000px;
        left: -1000px;
        margin: auto;
        min-height: 100%;
        min-width: 100%;
        position: absolute;
        right: -1000px;
        top: -1000px;
        width: auto
    }
    #shop-container .item-desc {
        float: left;
        padding: 0 20px 10px;
        position: relative;
        width: 60%
    }
    #shop-container .item-desc .merchandise-name {
        font-size: 15px;
        padding: 10px 25px 5px 0
    }
    #shop-container .item-desc h3 {
        margin: 0 0 10px
    }
    #shop-container .item-desc .title {
        display: inline-block;
        font-size: 11px;
        margin: 0 0 5px;
        width: 50px
    }
    #shop-container .item-desc ul {
        float: left;
        width: 65%
    }
    #shop-container .item-desc li {
        margin: 0 0 30px
    }
    #shop-container .item-desc li button.colour,
    #shop-container .item-desc li button.size {
        margin: 0 20px 0 0
    }
    #shop-container .item-desc li:last-child {
        margin: 0 0 2px
    }
    #shop-container .item-desc .shop-add-to-cart {
        bottom: 10px;
        padding-right: 60px;
        position: absolute;
        right: 15px;
        width: 175px
    }
}

@media only screen and (min-width:1020px) {
    #shop-container .item-image {
        width: 35%
    }
    #shop-container .item-desc {
        width: 65%
    }
}

.featherlight {
    background: rgba(45, 57, 66, .8);
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10000
}

.featherlight .featherlight-close {
    background: hsla(0, 0%, 100%, .85);
    color: #2d3942;
    height: 30px;
    line-height: 30px;
    padding: 0;
    position: absolute;
    right: 10px;
    top: -45px;
    width: 30px
}

.featherlight .featherlight-content {
    margin: 0 auto;
    max-width: 700px;
    left: 0;
    position: absolute;
    right: 0;
    top: 80px
}

.featherlight .featherlight-content img {
    max-width: 100%
}

@media only screen and (min-width:1020px) {
    .featherlight .featherlight-close {
        right: -35px
    }
}

#cart-page .order-summary {
    background: #f0f2f4;
    margin: 0 auto;
    max-width: 300px;
    padding: 0 0 1px
}

#cart-page .order-summary .head {
    background: #0091c7;
    margin: 0;
    padding: 15px;
    text-align: center
}

#cart-page .order-summary .head h5,
#cart-page .order-summary .head span {
    color: #fff;
    display: inline-block;
    font-size: 1.25em;
    margin: 0;
    vertical-align: middle
}

#cart-page .order-summary .head span {
    margin-right: 5px
}

#cart-page .order-summary .total-holder {
    padding: 0 10px;
    width: 100%
}

#cart-page .order-summary .total-holder .notice p {
    display: block;
    font: 400 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    width: 100%
}

#cart-page .order-summary .coupon-holder {
    width: 100%
}

#cart-page .order-summary .continue-btn {
    margin: 25px auto
}

#cart-page .help-text {
    color: #2d3942;
    display: none;
    float: left;
    font-size: 15px;
    line-height: 39px;
    vertical-align: middle;
    width: 65%
}

#cart-page .help-text [class*="icon"] {
    margin-right: 10px
}

#cart-page .help-text:hover [class*="icon"] {
    color: #0091c7
}

#cart-page .product-list {
    padding: 10px 15px
}

#cart-page .product-list li {
    border-color: #fff;
    margin: 0 0 15px;
    padding: 10px 15px
}

#cart-page .product-list li:first-child {
    border-top: 0
}

#cart-page .product-list li:last-child {
    border-bottom: 0
}

#cart-page .product-list .product {
    float: left;
    font-size: 1em;
    line-height: 1.5em;
    width: 70%
}

#cart-page .product-list .current-quantity.title,
#cart-page .product-list .price {
    display: block;
    float: left;
    font-size: 1em;
    line-height: 1.5em;
    margin-bottom: 10px;
    padding-left: 10px;
    text-align: left;
    width: 70%
}

#cart-page .product-list .product-info {
    clear: both;
    float: left;
    padding: 10px 5px;
    width: 100%
}

#cart-page .product-list .product-info img {
    float: right;
    max-width: 80px;
    width: 30%
}

#cart-page .product-list .product-info .title,
#cart-page .product-list .product-info a {
    display: block;
    float: left;
    font-size: .875em;
    margin: 0 0 5px;
    padding-left: 10px;
    width: 70%
}

#cart-page .body.no-shipping .address,
#cart-page .body.no-shipping .shipping {
    display: none!important
}

#cart-page .order-details>form>ol {
    margin: 0 0 80px
}

#cart-page .order-details>form>ol li {
    margin: 0;
    padding: 40px 0
}

#cart-page .order-details>form>ol li.highlight-li {
    color: #0091c7;
    font-weight: 700
}

#cart-page .order-details>form>ol li.our-details,
#cart-page .order-details>form>ol li.our-details li,
#cart-page .order-details>form>ol li.quote-order,
#cart-page .order-details>form>ol li.quote-order li,
#cart-page .order-details>form>ol li.quote-payment,
#cart-page .order-details>form>ol li.quote-payment li {
    padding: 20px 0
}

#cart-page .order-details>form>ol li .payment-link {
    display: block;
    margin: 15px 0 30px
}

#cart-page .order-details>form>ol li:first-child {
    border-top: 0
}

#cart-page .order-details>form>ol li:hover .section-title .number {
    background: #0091c7
}

#cart-page .order-details>form>ol li #choose_address {
    color: #fff;
    padding: 10px 20px
}

#cart-page .order-details>form>ol li .totals {
    border-bottom: 0;
    margin: 0 auto;
    max-width: 300px
}

#cart-page .order-details>form>ol li .totals .left,
#cart-page .order-details>form>ol li .totals .right {
    display: block;
    float: left;
    margin: 10px 0;
    width: 50%
}

#cart-page .order-details>form>ol li .totals .right {
    float: right;
    text-align: right
}

#cart-page .order-details .saved-address {
    margin: 0 0 30px;
    position: relative
}

#cart-page .order-details .saved-address:after {
    bottom: 13px;
    content: "\e93b";
    font-size: .875em;
    font-family: icomoon!important;
    position: absolute;
    pointer-events: none;
    right: 8px;
    backface-visibility: hidden;
    transform: rotate(-90deg);
    filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
    *zoom: 1
}

#cart-page .order-details .saved-address label {
    display: block;
    margin: 0 0 10px
}

#cart-page .order-details .saved-address select {
    border: 1px solid #d9dee2;
    padding: 10px 30px 10px 10px
}

#cart-page .order-details .address h6 {
    margin: 0 0 10px
}

#cart-page .order-details .address li {
    margin: 10px 0;
    padding: 0
}

#cart-page .order-details .address li:first-child {
    border-top: 0
}

#cart-page .order-details .address li:last-child {
    border-bottom: 0;
    padding: 15px 0
}

#cart-page .order-details .address #country,
#cart-page .order-details .address input {
    display: block;
    padding: 10px 10px 10px 0
}

#cart-page .order-details .address input[id="country"] {
    pointer-events: none
}

#cart-page .order-details .checkbox-holder {
    height: 35px;
    margin: 0 0 15px;
    position: relative
}

#cart-page .order-details .checkbox-holder label {
    padding-left: 30px
}

#cart-page .order-details .checkbox-holder [type="radio"]+label:before {
    left: 0;
    position: absolute;
    top: 7px
}

#cart-page .order-details .checkbox-holder [type="radio"]:checked+label:after {
    background: #5d666d;
    left: 3px;
    top: 10px
}

#cart-page .order-details .checkbox-holder .type {
    display: inline-block;
    font-size: 16px;
    line-height: 1.8125em
}

#cart-page .order-details .checkbox-holder .type span {
    color: #0091c7;
    display: inline-block;
    font-size: 1.25em;
    margin-left: 5px
}

#cart-page .order-details .checkbox-holder .extra-info {
    display: block;
    margin: 10px 0
}

#cart-page .order-details .checkbox-holder .info {
    display: block
}

#cart-page .order-details .checkbox-holder .info .highlight {
    color: #0091c7;
    cursor: auto
}

#cart-page .order-details .payment label {
    color: #5d666d;
    transition: color .3s ease-in
}

#cart-page .order-details .payment label img {
    opacity: .15;
    transition: opacity .3s ease-in
}

#cart-page .order-details .payment label+.btn {
    pointer-events: none;
    opacity: .1
}

#cart-page .order-details .payment [type="radio"]:checked+label {
    color: #2d3942
}

#cart-page .order-details .payment [type="radio"]:checked+label img {
    opacity: 1
}

#cart-page .order-details .payment [type="radio"]:checked+label+.btn {
    pointer-events: auto;
    opacity: 1
}

#cart-page .order-details .payment .additional-payment-trigger {
    cursor: pointer;
    color: #5d666d;
    display: block;
    font-size: 16px;
    padding-left: 25px
}

#cart-page .order-details .payment .additional-payment-trigger:before {
    border-radius: 50%;
    border: 1px solid #aaa;
    content: " ";
    display: inline-block;
    height: 14px;
    left: 0;
    margin-right: 5px;
    position: absolute;
    top: 0;
    vertical-align: text-top;
    width: 14px
}

#cart-page .order-details .payment .additional-payment-trigger.active {
    color: #2d3942
}

#cart-page .order-details .payment .additional-payment-trigger.active:after {
    background: #5d666d;
    border-radius: 50%;
    position: absolute;
    content: " ";
    display: inline-block;
    height: 10px;
    left: 3px;
    top: 3px;
    width: 10px
}

#cart-page .order-details .payment .pay-btn {
    color: #fff!important
}

#cart-page .order-details .payment .checkbox-holder {
    height: auto;
    margin: 20px 0
}

#cart-page .order-details .payment .checkbox-holder .extra-info,
#cart-page .order-details .payment .checkbox-holder .info {
    padding-left: 25px
}

#cart-page .order-details .payment .checkbox-holder img {
    display: block;
    max-width: 95%
}

#cart-page .order-details .payment .additional-payment-options {
    display: none;
    padding-left: 30px
}

#cart-page .order-details .payment .additional-payment-options .checkbox-holder {
    margin: 10px 0
}

#cart-page .order-details .payment .btn {
    color: #fff;
    display: block;
    margin: 10px 25px;
    padding: 7px 10px
}

#cart-page .order-details .payment .btn:hover {
    color: #2d3942
}

#cart-page .order-details .section-title span {
    display: inline-block;
    vertical-align: middle
}

#cart-page .order-details .section-title .number {
    background: #5d666d;
    border-radius: 50%;
    color: #fff;
    font-size: 1.25em;
    height: 45px;
    margin-right: 10px;
    padding: 8px 0 0;
    position: relative;
    text-align: center;
    width: 45px;
    transition: background .3s ease-in
}

#cart-page .order-details .section-title .number:before {
    border: 2px solid #0091c7;
    border-radius: 50%;
    content: "";
    height: 51px;
    left: -5px;
    position: absolute;
    top: -5px;
    width: 51px
}

#cart-page .order-details .section-title .text {
    font: 600 .875em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    width: calc(100% - 65px)
}

@media only screen and (min-width:768px) {
    #cart-page {
        position: relative
    }
    #cart-page.checkout-process .order-summary {
        max-height: 1585px;
        overflow-y: auto
    }
    #cart-page .body.step-2,
    #cart-page .head.step-2 {
        margin: 0
    }
    #cart-page .order-summary {
        height: 100%;
        max-width: 270px;
        position: absolute;
        right: 0;
        top: 72px
    }
    #cart-page .order-summary .total-holder {
        width: 100%
    }
    #cart-page .order-summary .continue-btn {
        clear: both
    }
    #cart-page .order-details {
        float: left;
        width: calc(100% - 270px)
    }
    #cart-page .order-details .shipping.shipping-disabled {
        pointer-events: none
    }
    #cart-page .order-details .shipping.shipping-disabled label {
        color: #b0b0b5
    }
    #cart-page .order-details .shipping .checkbox-holder label {
        font-size: 15px
    }
    #cart-page .order-details .shipping .checkbox-holder .type {
        display: inline-block;
        width: 150px
    }
    #cart-page .order-details .shipping .checkbox-holder .info {
        color: #fff;
        display: inline-block;
        font-size: 13px;
        line-height: 2.0714285714em;
        text-align: right;
        width: calc(100% - 185px)
    }
    #cart-page .order-details .shipping .checkbox-holder .info img {
        float: right
    }
    #cart-page .order-details .shipping .info,
    #cart-page .order-details .shipping .info .highlight {
        color: #fff;
        transition: color .3s ease-in
    }
    #cart-page .order-details .shipping input[type="radio"]:checked+label .info {
        color: #2d3942
    }
    #cart-page .order-details .shipping input[type="radio"]:checked+label .info .highlight {
        color: #0091c7
    }
    #cart-page .order-details .payment .checkbox-holder .type {
        display: inline-block;
        width: 150px
    }
    #cart-page .order-details .payment .checkbox-holder .extra-info {
        display: inline-block;
        font-size: 13px;
        line-height: 2.0714285714em;
        margin: 0;
        padding-left: 0;
        text-align: right;
        vertical-align: middle;
        width: calc(100% - 185px)
    }
    #cart-page .order-details .payment .checkbox-holder .extra-info img {
        float: right
    }
    #cart-page .order-details .payment .checkbox-holder .info {
        display: block;
        margin: 10px 0 0;
        width: 100%
    }
    #cart-page .order-details .payment .checkbox-holder .btn {
        clear: both;
        float: right;
        margin: 15px 0
    }
}

@media only screen and (min-width:1020px) {
    #cart-page.checkout-process {
        padding: 85px 0 0
    }
    #cart-page.checkout-process .order-summary {
        max-height: 1660px;
        overflow-y: auto
    }
    #cart-page .body.step-2 {
        margin: 0 auto;
        max-width: 1150px;
        position: relative
    }
    #cart-page .order-summary {
        height: calc(100% + 57px);
        max-width: 300px;
        top: -57px
    }
    #cart-page .order-details {
        width: calc(100% - 300px)
    }
    #cart-page .order-details .section-title .number {
        height: 58px;
        left: -90px;
        padding: 11px 0 0;
        position: absolute;
        top: 35px;
        width: 58px
    }
    #cart-page .order-details .section-title .number:before {
        height: 64px;
        width: 64px
    }
    #cart-page .order-details .section-title .text {
        font-size: 1.25em
    }
    #cart-page .address:after {
        height: 595px
    }
    #cart-page .address:after,
    #cart-page .shipping:after {
        border-left: 5px dotted #d9dee2;
        content: "";
        left: -65px;
        position: absolute;
        top: 105px
    }
    #cart-page .shipping:after {
        height: 165px
    }
    #cart-page .order-details form>ol {
        padding-left: 100px;
        position: relative
    }
    #cart-page .order-details form>ol>li {
        max-width: 550px;
        position: relative
    }
}

@media only screen and (min-width:1140px) {
    #cart-page.checkout-process {
        padding: 30px 0 0
    }
    #cart-page.checkout-process .order-summary {
        max-height: 1605px;
        top: -3px
    }
    #cart-page .order-details form>ol {
        padding-left: 200px
    }
    #cart-page .order-summary {
        max-width: 315px
    }
    #cart-page .order-summary .product-list {
        padding: 10px 20px
    }
    #cart-page .order-summary .total-holder {
        padding: 0 20px
    }
    #cart-page .order-details {
        background: #fff;
        width: calc(100% - 300px)
    }
    #cart-page .order-details .section-title .number {
        left: -150px
    }
    #cart-page .address:after,
    #cart-page .shipping:after {
        left: -124px
    }
    #cart-page.checkout-process {
        background: #fff;
        background: linear-gradient(90deg, #fff 47%, #fff 0, #f0f2f4 48%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#ffffff", endColorstr="#f0f2f4", GradientType=1)
    }
}

.publisher-banner-container .banner .banner-align {
    height: 450px
}

.publisher-banner-container .banner .banner-align h1 {
    margin-top: 10px
}

.publisher-banner-container .banner .round-image {
    height: 130px;
    margin: 0 auto;
    width: 130px
}

.publisher-banner-container .banner .round-image img {
    border-radius: 50%;
    display: block;
    height: 100%;
    margin: 15px 0;
    width: 100%
}

#publishers {
    margin: 30px auto 0;
    text-align: center
}

#publishers.show-content .breadcrumb-wrapper {
    padding: 0;
    margin-top: -159px;
    z-index: 99;
    text-align: left
}

#publishers .breadcrumb-wrapper {
    padding: 0 4px
}

#publishers h2 {
    font-size: 1.375em;
    font-weight: 300
}

#publishers .info-box.post .content {
    padding-top: 20px;
    background: #fff;
    border-radius: 5px
}

#publishers .info-box.post .content h2 {
    margin-bottom: 15px
}

#publishers .no_results_found {
    margin-top: 20px
}

#publishers .no_results_found .search_publishers {
    margin: 20px auto
}

#publishers .no_results_found a {
    color: #0091c7
}

#publishers .search_publishers {
    border: 1px solid #aaa;
    border-radius: 5px;
    margin: 45px auto 15px;
    text-align: center;
    width: 300px
}

#publishers .search_publishers .icon-previous-icon {
    display: inline-block;
    color: #fff;
    background: #0091c7;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
    padding: 16px 20px
}

#publishers .search_publishers .icon-previous-icon:hover {
    background: #006c94
}

#publishers .search_publishers form,
#publishers .search_publishers input {
    display: inline-block;
    width: calc(100% - 55px)
}

#publishers .search_publishers input {
    border-radius: 5px;
    padding: 8px 15px
}

#publishers .search_publishers .btn {
    background: none;
    color: #2e3942;
    display: inline-block;
    padding: 0;
    width: 50px
}

#publishers .publisher {
    border: 1px solid #aaa;
    display: inline-block;
    float: none;
    height: 260px;
    margin: 0 15px 15px;
    position: relative;
    width: 260px
}

#publishers .publisher:visited p,
#publishers .publisher p {
    color: #2d3942
}

#publishers .publisher p {
    margin-top: 15px;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#publishers .publisher .publisher-link {
    bottom: 0;
    left: 0;
    padding: 0;
    position: absolute;
    width: 100%
}

#publishers .publisher .publisher-link .details-holder {
    background: #2e3942;
    color: #fff;
    display: block;
    font-family: Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    padding: 15px;
    text-align: left
}

#publishers .publisher .publisher-link .details-holder p {
    display: inline-block;
    margin: 0;
    vertical-align: middle;
    width: calc(100% - 55px);
    color: #fff
}

#publishers .publisher .publisher-link .details-holder .icon-right-arrow {
    display: inline-block;
    text-align: right;
    vertical-align: middle
}

#publishers .publisher .publisher-link .details-holder .icon-right-arrow:before {
    color: #fff
}

#publishers .publisher .publisher-link .details-holder .icon-book2 {
    display: inline-block;
    vertical-align: middle
}

#publishers .publisher .publisher-link .details-holder .icon-book2:before {
    color: #0091c7;
    font-size: 1.125em;
    margin-right: 10px
}

#publishers .publisher .publisher-link .details-holder:hover {
    background: rgba(46, 57, 66, .95);
    color: #0091c7
}

#publishers .publisher .publisher-link .details-holder:hover .icon-right-arrow:before {
    color: #0091c7
}

@media only screen and (min-width:1240px) {
    #publishers .search_publishers {
        margin: 45px 0 25px 14px
    }
    #publishers .publisher {
        display: block;
        float: left;
        width: calc(25% - 30px)
    }
}

#cart-page.order-complete .body {
    padding: 50px 20px;
    text-align: center
}

#cart-page.order-complete .body h1 {
    font: 400 1.25em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    position: relative;
    text-transform: uppercase
}

#cart-page.order-complete .body h1 span {
    background: #fff;
    display: inline-block;
    padding: 0 10px;
    position: relative;
    z-index: 2
}

#cart-page.order-complete .body h1:after {
    border-bottom: 1px solid #d9dee2;
    content: "";
    height: 1px;
    left: 0;
    position: absolute;
    top: 50%;
    width: 100%;
    z-index: 0
}

#cart-page.order-complete .body .btn {
    max-width: 190px
}

#cart-page.order-complete .body p {
    font-size: 1em
}

#cart-page.order-complete .body .highlight {
    color: #0091c7
}

@media only screen and (min-width:768px) {
    #cart-page.order-complete .body {
        margin: 0 auto;
        padding: 50px 20px 80px
    }
    #cart-page.order-complete .body h1 {
        font-size: 1.875em
    }
    #cart-page.order-complete .body p {
        font-size: 1.0625em
    }
}

.background-image {
    overflow: hidden
}

.background-image,
.background-image:after {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.background-image:after {
    background: rgba(45, 57, 66, .7);
    background: linear-gradient(90deg, rgba(45, 57, 66, .7) 0, rgba(45, 57, 66, .2));
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="rgba(45,57,66,0.7)", endColorstr="rgba(45,57,66,0.2)", GradientType=1);
    content: ""
}

.background-image .absolute-bg-image {
    bottom: -1000px;
    left: -1000px;
    margin: auto;
    min-height: 100%;
    min-width: 100%;
    position: absolute;
    right: -1000px;
    top: -1000px
}

.pricing-banner-text {
    margin: 0 auto;
    max-width: 600px
}

.pricing-banner-text p .block {
    display: block
}

.pricing-container {
    margin: 0 0 45px;
    padding: 0 10px;
    text-align: center
}

.pricing-container.three-rows .head h3,
.pricing-container.three-rows .head h3:first-child,
.pricing-container.three-rows li .ball,
.pricing-container.three-rows li .info {
    width: 33.33333%
}

.pricing-container h2 {
    color: #465159;
    font: 400 1.5em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 15px
}

.pricing-container>p {
    color: #465159;
    margin: 0 0 10px
}

.pricing-container ul {
    margin: 30px -10px 0
}

.pricing-container .head {
    background: #f0f2f4
}

.pricing-container .head h3 {
    float: left;
    font: 400 .625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 15px 0;
    text-align: center;
    text-transform: uppercase;
    width: 20%
}

.pricing-container .head h3 [class*="icon"] {
    font-size: 15px;
    line-height: 23px;
    padding: 0
}

.pricing-container .head h3:first-child {
    padding: 10px;
    text-align: left;
    width: 40%
}

.pricing-container .foot {
    background: #d9dee2
}

.pricing-container .foot .info {
    font-weight: 700;
    text-align: center;
    text-transform: lowercase;
    width: 20%
}

.pricing-container .foot .info:first-child {
    text-align: left;
    text-transform: capitalize;
    width: 40%
}

.pricing-container li {
    border-bottom: 1px solid #f0f2f4;
    color: #465159;
    padding: 0 10px;
    position: relative;
    transition: background .3s ease-in
}

.pricing-container li:hover {
    background: #f6f7f8
}

.pricing-container li .info {
    display: block;
    float: left;
    font: 400 .625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0;
    padding: 15px 0;
    text-align: left;
    text-transform: uppercase;
    width: 40%
}

.pricing-container li .ball {
    display: block;
    height: 100%;
    float: left;
    position: relative;
    width: 20%
}

.pricing-container li .ball.blue .dot {
    background: #0091c7
}

.pricing-container li .ball .dot {
    background: #d9dee2;
    border-radius: 50%;
    display: block;
    height: 16px;
    left: 50%;
    margin-left: -8px;
    margin-top: -8px;
    position: absolute;
    top: 50%;
    width: 16px
}

.pricing-container li .ball strong {
    font: 700 .8125em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    left: 0;
    margin-top: -8px;
    position: absolute;
    top: 50%;
    width: 100%
}

.pricing-container li.no-borders {
    border: 0
}

.pricing-container li.no-borders a {
    margin: 15px 0
}

.pricing-container.blue {
    padding-top: 20px
}

.pricing-container.blue li h3 {
    color: #0091c7
}

.pricing-container.blue li h3:first-child {
    color: #2d3942
}

.pricing-container.yellow li h3 {
    color: #f58220;
    font-weight: 700
}

.pricing-container.yellow li h3:first-child {
    color: #2d3942
}

.pricing-container.yellow .head h3 [class*="icon"]:after,
.pricing-container.yellow li .ball.yellow .dot {
    background: #f29b2f
}

.pricing-container .small {
    font: 700 .75em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 10px 0
}

@media only screen and (min-width:768px) {
    .pricing-container {
        margin: 0 auto 50px;
        max-width: 950px
    }
    .pricing-container ul {
        margin: 30px auto 0
    }
    .pricing-container>p {
        padding: 0 20px;
        text-align: left
    }
    .pricing-container .head h3 {
        font-size: 1em;
        line-height: 1.5em;
        margin: 0 0 10px;
        text-transform: capitalize;
        width: 23.33333%
    }
    .pricing-container .head h3 span {
        display: inline-block;
        vertical-align: top
    }
    .pricing-container .head h3 [class*="icon"] {
        font-size: 20px;
        left: 10px;
        position: absolute;
        top: 5px
    }
    .pricing-container .head h3 [class*="icon"]:after {
        background: #0091c7;
        content: "";
        height: 80px;
        left: -28px;
        position: absolute;
        outline: 2px solid transparent;
        top: -39px;
        width: 55px;
        z-index: 1;
        backface-visibility: hidden;
        transform: rotate(48deg);
        filter: progid: DXImageTransform.Microsoft.BasicImage(rotation=2);
        *zoom: 1
    }
    .pricing-container .head h3 [class*="icon"]:before {
        color: #fff;
        font-size: .8125em;
        position: relative;
        z-index: 2
    }
    .pricing-container .head h3:first-child {
        font-weight: 700;
        padding: 15px 0 15px 35px;
        width: 30%
    }
    .pricing-container .head h3:first-child .normal-weight {
        bottom: 8px;
        font: 400 14px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
        left: 45px;
        position: absolute
    }
    .pricing-container .foot .info {
        width: 23.33333%
    }
    .pricing-container .foot .info [class*="icon"] {
        display: inline-block;
        vertical-align: text-top
    }
    .pricing-container .foot .info:first-child {
        width: 30%
    }
    .pricing-container li {
        overflow: hidden
    }
    .pricing-container li .info {
        font-size: .875em;
        padding: 15px;
        text-transform: capitalize;
        width: 30%
    }
    .pricing-container li .hide-mobile {
        display: inline-block!important
    }
    .pricing-container li .ball {
        border-left: 1px solid #f0f2f4;
        width: 23.33333%
    }
    .pricing-container li .ball strong {
        font: 700 1em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
    }
}

@media only screen and (min-width:1020px) {
    .pricing-container {
        margin: 0 auto 70px
    }
    .pricing-container h2 {
        font-size: 1.75em
    }
    .pricing-container li .info {
        font-size: .9375em;
        padding: 20px 15px
    }
}

#cert-check .wrapper:last-child {
    padding-bottom: 70px
}

#cert-check .print {
    text-align: right;
    padding-top: 20px;
    width: 100px;
    float: right;
    color: #5d666d
}

#cert-check .print:active,
#cert-check .print:hover {
    color: #5d666d
}

#cert-check .print .icon-flashTesting {
    font-size: 21px;
    display: block;
    width: 30px;
    float: right;
    margin: 0 0 0 -3px
}

#cert-check .info-box {
    margin: 50px auto 0
}

#cert-check .blue-label {
    font-size: 1em;
    color: #0091c7
}

#cert-check .cert_row {
    text-align: center
}

#cert-check .cert_row.learner .info-box {
    margin-top: 30px
}

#cert-check .cert_row .info-box {
    max-width: 460px
}

#cert-check .cert_row .info-box:first-child,
#cert-check .cert_row .info-box:last-child {
    display: inline-block
}

#cert-check .cert_row .info-box .header .round-image div {
    padding: 0;
    overflow: hidden;
    font-size: 1.875em;
    color: #fff
}

#cert-check .cert_row .info-box .header .round-image div.text {
    padding: 15px 0 0
}

#cert-check .cert_row .info-box #user_avatar {
    width: 100%;
    height: auto;
    border-radius: 100%
}

#cert-check .body {
    padding: 15px 0 0
}

#cert-check .body .text-justify p {
    color: #5d666d;
    font-size: 1em;
    padding-bottom: 15px
}

#cert-check .body .text-justify.no-width .text-row,
#cert-check .body .text-justify.no-width .text-row:last-child {
    padding-bottom: 10px
}

#cert-check .body .text-justify.no-width .text-row .text-label {
    margin-right: 20px;
    width: auto;
    float: left;
    min-width: 81px
}

#cert-check .body .text-justify .text-row {
    padding-bottom: 35px
}

#cert-check .body .text-justify .text-row:last-child {
    padding-bottom: 20px
}

#cert-check .body .text-justify .text-row .text-label {
    width: 86px;
    font-size: 1em;
    color: #0091c7;
    text-transform: capitalize;
    float: left
}

#cert-check .body .text-justify .text-row .text-content {
    color: #5d666d
}

#cert-check .body .text-justify .text-row:after,
#cert-check .body .text-justify .text-row:before {
    clear: both;
    content: "";
    display: table
}

#cert-check .intro-text {
    max-width: 100%;
    float: left
}

#cert-check .cert-qr {
    max-width: 100%;
    float: none;
    text-align: center
}

@media only screen and (min-width:1020px) {
    #cert-check .cert_row {
        text-align: left
    }
    #cert-check .cert_row .info-box:first-child {
        float: left
    }
    #cert-check .cert_row .info-box:last-child {
        float: right
    }
    #cert-check .cert_row .info-box .header .round-image div.text {
        padding: 40px 0 0
    }
}

@media only screen and (min-width:1020px) and (min-width:768px) {
    #cert-check .intro-text {
        max-width: 70%
    }
    #cert-check .cert-qr {
        max-width: 30%;
        float: right
    }
    #cert-check .info-box .body {
        padding: 15px
    }
}

.ui-helper-hidden {
    display: none
}

.ui-helper-hidden-accessible {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px
}

.ui-helper-reset {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    line-height: 1.3;
    text-decoration: none;
    font-size: 100%;
    list-style: none
}

.ui-helper-clearfix:after,
.ui-helper-clearfix:before {
    content: "";
    display: table;
    border-collapse: collapse
}

.ui-helper-clearfix:after {
    clear: both
}

.ui-helper-zfix {
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    position: absolute;
    opacity: 0;
    filter: Alpha(Opacity=0)
}

.ui-front {
    z-index: 100
}

.ui-state-disabled {
    cursor: default!important;
    pointer-events: none
}

.ui-icon {
    display: inline-block;
    vertical-align: middle;
    margin-top: -.25em;
    position: relative;
    text-indent: -99999px;
    overflow: hidden;
    background-repeat: no-repeat
}

.ui-widget-icon-block {
    left: 50%;
    margin-left: -8px;
    display: block
}

.ui-widget-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.ui-datepicker {
    width: 17em;
    padding: .2em .2em 0;
    display: none;
    z-index: 9!important
}

.ui-datepicker select {
    -webkit-appearance: auto;
    -moz-appearance: button;
    appearance: auto
}

.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0
}

.ui-datepicker .ui-datepicker-next,
.ui-datepicker .ui-datepicker-prev {
    position: absolute;
    top: 7px;
    width: 1.8em;
    height: 1.8em
}

.ui-datepicker .ui-datepicker-next span,
.ui-datepicker .ui-datepicker-prev span {
    display: none
}

.ui-datepicker .ui-datepicker-next:before,
.ui-datepicker .ui-datepicker-prev:before {
    font-family: icomoon;
    content: "\e93b";
    width: 30px;
    height: 30px;
    font-size: 15px;
    top: 0;
    left: 0;
    color: #fff;
    position: absolute;
    z-index: 9999999999;
    padding-top: 5px;
    text-align: center;
    font-weight: 700;
    cursor: pointer
}

.ui-datepicker .ui-datepicker-next:hover:before,
.ui-datepicker .ui-datepicker-prev:hover:before {
    font-weight: 700
}

.ui-datepicker .ui-datepicker-next:before {
    content: "\e93c"
}

.ui-datepicker .ui-datepicker-prev {
    left: 2px
}

.ui-datepicker .ui-datepicker-next {
    right: 2px
}

.ui-datepicker .ui-datepicker-title {
    margin: 0 2.3em;
    line-height: 1.8em;
    text-align: center
}

.ui-datepicker .ui-datepicker-title select {
    font-size: 1em;
    margin: 1px 0;
    text-align: center;
    padding: 6px 13px;
    margin: 1px 1%;
    max-width: 43%
}

.ui-datepicker-calendar thead {
    background: #2d3942;
    color: #fff
}

.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
    width: 45%
}

.ui-datepicker table {
    width: 100%;
    font-size: .9em;
    border-collapse: collapse;
    margin: 0 0 .4em
}

.ui-datepicker th {
    padding: .7em .3em;
    text-align: center;
    font-weight: 700;
    border: 0
}

.ui-datepicker td {
    border: 0;
    padding: 1px
}

.ui-datepicker td a,
.ui-datepicker td span {
    display: block;
    padding: .2em;
    text-align: right;
    text-decoration: none
}

.ui-datepicker .ui-datepicker-buttonpane {
    background-image: none;
    margin: .7em 0 0;
    padding: 0 .2em;
    border-left: 0;
    border-right: 0;
    border-bottom: 0
}

.ui-datepicker .ui-datepicker-buttonpane button {
    float: right;
    margin: .5em .2em .4em;
    cursor: pointer;
    padding: .2em .6em .3em;
    width: auto;
    overflow: visible
}

.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
    float: left
}

.ui-datepicker.ui-datepicker-multi {
    width: auto
}

.ui-datepicker-multi .ui-datepicker-group {
    float: left
}

.ui-datepicker-multi .ui-datepicker-group table {
    width: 95%;
    margin: 0 auto .4em
}

.ui-datepicker-multi-2 .ui-datepicker-group {
    width: 50%
}

.ui-datepicker-multi-3 .ui-datepicker-group {
    width: 33.3%
}

.ui-datepicker-multi-4 .ui-datepicker-group {
    width: 25%
}

.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
    border-left-width: 0
}

.ui-datepicker-multi .ui-datepicker-buttonpane {
    clear: left
}

.ui-datepicker-row-break {
    clear: both;
    width: 100%;
    font-size: 0
}

.ui-datepicker-rtl {
    direction: rtl
}

.ui-datepicker-rtl .ui-datepicker-prev {
    right: 2px;
    left: auto
}

.ui-datepicker-rtl .ui-datepicker-next {
    left: 2px;
    right: auto
}

.ui-datepicker-rtl .ui-datepicker-buttonpane {
    clear: right
}

.ui-datepicker-rtl .ui-datepicker-buttonpane button {
    float: left
}

.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
    float: right
}

.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
    border-right-width: 0;
    border-left-width: 1px
}

.ui-datepicker .ui-icon {
    display: block;
    text-indent: -99999px;
    overflow: hidden;
    background-repeat: no-repeat;
    left: .5em;
    top: .3em
}

.ui-widget {
    font-family: Arial, Helvetica, sans-serif
}

.ui-widget,
.ui-widget .ui-widget {
    font-size: 1em
}

.ui-widget button,
.ui-widget input,
.ui-widget select,
.ui-widget textarea {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 1em
}

.ui-widget.ui-widget-content {
    border: 1px solid #c5c5c5
}

.ui-widget-content {
    border: 1px solid #ddd;
    background: #fff;
    color: #333
}

.ui-widget-content a {
    color: #333
}

.ui-widget-header {
    border: 1px solid #ddd;
    background: #0094c9;
    color: #fff;
    font-weight: 700
}

.ui-widget-header a {
    color: #333
}

.ui-button,
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default,
html .ui-button.ui-state-disabled:active,
html .ui-button.ui-state-disabled:hover {
    border: 1px solid #c5c5c5;
    background: #f6f6f6;
    font-weight: 400;
    color: #454545
}

.ui-button,
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited,
a.ui-button,
a:link.ui-button,
a:visited.ui-button {
    color: #454545;
    text-decoration: none
}

.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited,
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
a.ui-button:focus,
a.ui-button:hover {
    color: #2b2b2b;
    text-decoration: none
}

.ui-visual-focus {
    box-shadow: 0 0 3px 1px #5e9ed6
}

.ui-button.ui-state-active:hover,
.ui-button:active,
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active,
a.ui-button:active {
    border: 1px solid #003eff;
    background: #007fff;
    font-weight: 400;
    color: #fff
}

.ui-icon-background,
.ui-state-active .ui-icon-background {
    border: #003eff;
    background-color: #fff
}

.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
    color: #fff;
    text-decoration: none
}

.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
    border: 1px solid #dad55e;
    background: #fffa90;
    color: #777620
}

.ui-state-checked {
    border: 1px solid #dad55e;
    background: #fffa90
}

.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
    color: #777620
}

.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
    border: 1px solid #f1a899;
    background: #fddfdf;
    color: #5f3f3f
}

.ui-state-error-text,
.ui-state-error a,
.ui-widget-content .ui-state-error-text,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error-text,
.ui-widget-header .ui-state-error a {
    color: #5f3f3f
}

.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
    font-weight: 700
}

.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
    opacity: .7;
    filter: Alpha(Opacity=70);
    font-weight: 400
}

.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
    opacity: .35;
    filter: Alpha(Opacity=35);
    background-image: none
}

.ui-state-disabled .ui-icon {
    filter: Alpha(Opacity=35)
}

.ui-icon {
    width: 16px;
    height: 16px
}

.ui-datepicker .ui-datepicker-prev span:before {
    content: "\e93b";
    width: 100%;
    height: 100%;
    font-size: 20px;
    top: 0;
    left: 0
}

.ui-icon-blank {
    background-position: 16px 16px
}

.ui-icon-caret-1-n {
    background-position: 0 0
}

.ui-icon-caret-1-ne {
    background-position: -16px 0
}

.ui-icon-caret-1-e {
    background-position: -32px 0
}

.ui-icon-caret-1-se {
    background-position: -48px 0
}

.ui-icon-caret-1-s {
    background-position: -65px 0
}

.ui-icon-caret-1-sw {
    background-position: -80px 0
}

.ui-icon-caret-1-w {
    background-position: -96px 0
}

.ui-icon-caret-1-nw {
    background-position: -112px 0
}

.ui-icon-caret-2-n-s {
    background-position: -128px 0
}

.ui-icon-caret-2-e-w {
    background-position: -144px 0
}

.ui-icon-triangle-1-n {
    background-position: 0 -16px
}

.ui-icon-triangle-1-ne {
    background-position: -16px -16px
}

.ui-icon-triangle-1-e {
    background-position: -32px -16px
}

.ui-icon-triangle-1-se {
    background-position: -48px -16px
}

.ui-icon-triangle-1-s {
    background-position: -65px -16px
}

.ui-icon-triangle-1-sw {
    background-position: -80px -16px
}

.ui-icon-triangle-1-w {
    background-position: -96px -16px
}

.ui-icon-triangle-1-nw {
    background-position: -112px -16px
}

.ui-icon-triangle-2-n-s {
    background-position: -128px -16px
}

.ui-icon-triangle-2-e-w {
    background-position: -144px -16px
}

.ui-icon-arrow-1-n {
    background-position: 0 -32px
}

.ui-icon-arrow-1-ne {
    background-position: -16px -32px
}

.ui-icon-arrow-1-e {
    background-position: -32px -32px
}

.ui-icon-arrow-1-se {
    background-position: -48px -32px
}

.ui-icon-arrow-1-s {
    background-position: -65px -32px
}

.ui-icon-arrow-1-sw {
    background-position: -80px -32px
}

.ui-icon-arrow-1-w {
    background-position: -96px -32px
}

.ui-icon-arrow-1-nw {
    background-position: -112px -32px
}

.ui-icon-arrow-2-n-s {
    background-position: -128px -32px
}

.ui-icon-arrow-2-ne-sw {
    background-position: -144px -32px
}

.ui-icon-arrow-2-e-w {
    background-position: -160px -32px
}

.ui-icon-arrow-2-se-nw {
    background-position: -176px -32px
}

.ui-icon-arrowstop-1-n {
    background-position: -192px -32px
}

.ui-icon-arrowstop-1-e {
    background-position: -208px -32px
}

.ui-icon-arrowstop-1-s {
    background-position: -224px -32px
}

.ui-icon-arrowstop-1-w {
    background-position: -240px -32px
}

.ui-icon-arrowthick-1-n {
    background-position: 1px -48px
}

.ui-icon-arrowthick-1-ne {
    background-position: -16px -48px
}

.ui-icon-arrowthick-1-e {
    background-position: -32px -48px
}

.ui-icon-arrowthick-1-se {
    background-position: -48px -48px
}

.ui-icon-arrowthick-1-s {
    background-position: -64px -48px
}

.ui-icon-arrowthick-1-sw {
    background-position: -80px -48px
}

.ui-icon-arrowthick-1-w {
    background-position: -96px -48px
}

.ui-icon-arrowthick-1-nw {
    background-position: -112px -48px
}

.ui-icon-arrowthick-2-n-s {
    background-position: -128px -48px
}

.ui-icon-arrowthick-2-ne-sw {
    background-position: -144px -48px
}

.ui-icon-arrowthick-2-e-w {
    background-position: -160px -48px
}

.ui-icon-arrowthick-2-se-nw {
    background-position: -176px -48px
}

.ui-icon-arrowthickstop-1-n {
    background-position: -192px -48px
}

.ui-icon-arrowthickstop-1-e {
    background-position: -208px -48px
}

.ui-icon-arrowthickstop-1-s {
    background-position: -224px -48px
}

.ui-icon-arrowthickstop-1-w {
    background-position: -240px -48px
}

.ui-icon-arrowreturnthick-1-w {
    background-position: 0 -64px
}

.ui-icon-arrowreturnthick-1-n {
    background-position: -16px -64px
}

.ui-icon-arrowreturnthick-1-e {
    background-position: -32px -64px
}

.ui-icon-arrowreturnthick-1-s {
    background-position: -48px -64px
}

.ui-icon-arrowreturn-1-w {
    background-position: -64px -64px
}

.ui-icon-arrowreturn-1-n {
    background-position: -80px -64px
}

.ui-icon-arrowreturn-1-e {
    background-position: -96px -64px
}

.ui-icon-arrowreturn-1-s {
    background-position: -112px -64px
}

.ui-icon-arrowrefresh-1-w {
    background-position: -128px -64px
}

.ui-icon-arrowrefresh-1-n {
    background-position: -144px -64px
}

.ui-icon-arrowrefresh-1-e {
    background-position: -160px -64px
}

.ui-icon-arrowrefresh-1-s {
    background-position: -176px -64px
}

.ui-icon-arrow-4 {
    background-position: 0 -80px
}

.ui-icon-arrow-4-diag {
    background-position: -16px -80px
}

.ui-icon-extlink {
    background-position: -32px -80px
}

.ui-icon-newwin {
    background-position: -48px -80px
}

.ui-icon-refresh {
    background-position: -64px -80px
}

.ui-icon-shuffle {
    background-position: -80px -80px
}

.ui-icon-transfer-e-w {
    background-position: -96px -80px
}

.ui-icon-transferthick-e-w {
    background-position: -112px -80px
}

.ui-icon-folder-collapsed {
    background-position: 0 -96px
}

.ui-icon-folder-open {
    background-position: -16px -96px
}

.ui-icon-document {
    background-position: -32px -96px
}

.ui-icon-document-b {
    background-position: -48px -96px
}

.ui-icon-note {
    background-position: -64px -96px
}

.ui-icon-mail-closed {
    background-position: -80px -96px
}

.ui-icon-mail-open {
    background-position: -96px -96px
}

.ui-icon-suitcase {
    background-position: -112px -96px
}

.ui-icon-comment {
    background-position: -128px -96px
}

.ui-icon-person {
    background-position: -144px -96px
}

.ui-icon-print {
    background-position: -160px -96px
}

.ui-icon-trash {
    background-position: -176px -96px
}

.ui-icon-locked {
    background-position: -192px -96px
}

.ui-icon-unlocked {
    background-position: -208px -96px
}

.ui-icon-bookmark {
    background-position: -224px -96px
}

.ui-icon-tag {
    background-position: -240px -96px
}

.ui-icon-home {
    background-position: 0 -112px
}

.ui-icon-flag {
    background-position: -16px -112px
}

.ui-icon-calendar {
    background-position: -32px -112px
}

.ui-icon-cart {
    background-position: -48px -112px
}

.ui-icon-pencil {
    background-position: -64px -112px
}

.ui-icon-clock {
    background-position: -80px -112px
}

.ui-icon-disk {
    background-position: -96px -112px
}

.ui-icon-calculator {
    background-position: -112px -112px
}

.ui-icon-zoomin {
    background-position: -128px -112px
}

.ui-icon-zoomout {
    background-position: -144px -112px
}

.ui-icon-search {
    background-position: -160px -112px
}

.ui-icon-wrench {
    background-position: -176px -112px
}

.ui-icon-gear {
    background-position: -192px -112px
}

.ui-icon-heart {
    background-position: -208px -112px
}

.ui-icon-star {
    background-position: -224px -112px
}

.ui-icon-link {
    background-position: -240px -112px
}

.ui-icon-cancel {
    background-position: 0 -128px
}

.ui-icon-plus {
    background-position: -16px -128px
}

.ui-icon-plusthick {
    background-position: -32px -128px
}

.ui-icon-minus {
    background-position: -48px -128px
}

.ui-icon-minusthick {
    background-position: -64px -128px
}

.ui-icon-close {
    background-position: -80px -128px
}

.ui-icon-closethick {
    background-position: -96px -128px
}

.ui-icon-key {
    background-position: -112px -128px
}

.ui-icon-lightbulb {
    background-position: -128px -128px
}

.ui-icon-scissors {
    background-position: -144px -128px
}

.ui-icon-clipboard {
    background-position: -160px -128px
}

.ui-icon-copy {
    background-position: -176px -128px
}

.ui-icon-contact {
    background-position: -192px -128px
}

.ui-icon-image {
    background-position: -208px -128px
}

.ui-icon-video {
    background-position: -224px -128px
}

.ui-icon-script {
    background-position: -240px -128px
}

.ui-icon-alert {
    background-position: 0 -144px
}

.ui-icon-info {
    background-position: -16px -144px
}

.ui-icon-notice {
    background-position: -32px -144px
}

.ui-icon-help {
    background-position: -48px -144px
}

.ui-icon-check {
    background-position: -64px -144px
}

.ui-icon-bullet {
    background-position: -80px -144px
}

.ui-icon-radio-on {
    background-position: -96px -144px
}

.ui-icon-radio-off {
    background-position: -112px -144px
}

.ui-icon-pin-w {
    background-position: -128px -144px
}

.ui-icon-pin-s {
    background-position: -144px -144px
}

.ui-icon-play {
    background-position: 0 -160px
}

.ui-icon-pause {
    background-position: -16px -160px
}

.ui-icon-seek-next {
    background-position: -32px -160px
}

.ui-icon-seek-prev {
    background-position: -48px -160px
}

.ui-icon-seek-end {
    background-position: -64px -160px
}

.ui-icon-seek-first,
.ui-icon-seek-start {
    background-position: -80px -160px
}

.ui-icon-stop {
    background-position: -96px -160px
}

.ui-icon-eject {
    background-position: -112px -160px
}

.ui-icon-volume-off {
    background-position: -128px -160px
}

.ui-icon-volume-on {
    background-position: -144px -160px
}

.ui-icon-power {
    background-position: 0 -176px
}

.ui-icon-signal-diag {
    background-position: -16px -176px
}

.ui-icon-signal {
    background-position: -32px -176px
}

.ui-icon-battery-0 {
    background-position: -48px -176px
}

.ui-icon-battery-1 {
    background-position: -64px -176px
}

.ui-icon-battery-2 {
    background-position: -80px -176px
}

.ui-icon-battery-3 {
    background-position: -96px -176px
}

.ui-icon-circle-plus {
    background-position: 0 -192px
}

.ui-icon-circle-minus {
    background-position: -16px -192px
}

.ui-icon-circle-close {
    background-position: -32px -192px
}

.ui-icon-circle-triangle-e {
    background-position: -48px -192px
}

.ui-icon-circle-triangle-s {
    background-position: -64px -192px
}

.ui-icon-circle-triangle-w {
    background-position: -80px -192px
}

.ui-icon-circle-triangle-n {
    background-position: -96px -192px
}

.ui-icon-circle-arrow-e {
    background-position: -112px -192px
}

.ui-icon-circle-arrow-s {
    background-position: -128px -192px
}

.ui-icon-circle-arrow-w {
    background-position: -144px -192px
}

.ui-icon-circle-arrow-n {
    background-position: -160px -192px
}

.ui-icon-circle-zoomin {
    background-position: -176px -192px
}

.ui-icon-circle-zoomout {
    background-position: -192px -192px
}

.ui-icon-circle-check {
    background-position: -208px -192px
}

.ui-icon-circlesmall-plus {
    background-position: 0 -208px
}

.ui-icon-circlesmall-minus {
    background-position: -16px -208px
}

.ui-icon-circlesmall-close {
    background-position: -32px -208px
}

.ui-icon-squaresmall-plus {
    background-position: -48px -208px
}

.ui-icon-squaresmall-minus {
    background-position: -64px -208px
}

.ui-icon-squaresmall-close {
    background-position: -80px -208px
}

.ui-icon-grip-dotted-vertical {
    background-position: 0 -224px
}

.ui-icon-grip-dotted-horizontal {
    background-position: -16px -224px
}

.ui-icon-grip-solid-vertical {
    background-position: -32px -224px
}

.ui-icon-grip-solid-horizontal {
    background-position: -48px -224px
}

.ui-icon-gripsmall-diagonal-se {
    background-position: -64px -224px
}

.ui-icon-grip-diagonal-se {
    background-position: -80px -224px
}

.ui-corner-all,
.ui-corner-left,
.ui-corner-tl,
.ui-corner-top {
    border-top-left-radius: 3px
}

.ui-corner-all,
.ui-corner-right,
.ui-corner-top,
.ui-corner-tr {
    border-top-right-radius: 3px
}

.ui-corner-all,
.ui-corner-bl,
.ui-corner-bottom,
.ui-corner-left {
    border-bottom-left-radius: 3px
}

.ui-corner-all,
.ui-corner-bottom,
.ui-corner-br,
.ui-corner-right {
    border-bottom-right-radius: 3px
}

.ui-widget-overlay {
    background: #aaa;
    opacity: .3;
    filter: Alpha(Opacity=30)
}

.ui-widget-shadow {
    box-shadow: 0 0 5px #666
}

.smaller-height+.banner-align {
    height: 350px
}

.article-listing {
    margin: 50px 0
}

.article-listing ul {
    text-align: center
}

.article-listing li {
    display: inline-block;
    margin: 15px 10px;
    max-width: 270px;
    padding: 0 0 10px;
    text-align: left;
    vertical-align: top
}

.article-listing li .image-holder {
    position: relative
}

.article-listing li img {
    display: block;
    margin: 0 0 10px;
    width: 100%
}

.article-listing li h3 {
    color: #2d3942;
    font: 700 .9375em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    line-height: 1.5333333333em;
    margin: 0 0 15px;
    transition: color .3s ease-in
}

.article-listing li p {
    color: #2d3942;
    font-size: .875em;
    margin: 0 0 10px
}

.article-listing li .type {
    color: #2d3942;
    display: inline-block;
    font: 700 .625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    margin: 0 0 10px;
    text-transform: uppercase
}

.article-listing li .type:last-child {
    float: right;
    padding: 6px 0 0;
    color: #0094c9
}

.article-listing li a:hover h3 {
    color: #0094c9
}

@media only screen and (min-width:768px) {
    .article-listing li {
        max-width: 250px
    }
}

.article-landing {
    margin: 50px 0
}

.article-landing .wrapper {
    max-width: 1050px
}

.article-landing .wrapper .article-content a {
    color: #0094c9
}

.article-landing .wrapper .article-content p {
    font-size: 1em;
    margin: 0 0 20px;
    line-height: 1.3
}

.article-landing .wrapper .article-content ul {
    list-style: circle inside;
    margin-bottom: 30px;
    line-height: 1.4
}

.article-landing h1 {
    font: 300 1.5625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

.article-landing .social-buttons {
    margin: 0 0 30px
}

.article-landing .social-buttons a {
    color: #066eb0;
    font-size: 35px;
    opacity: 1
}

.article-landing .social-buttons a:hover {
    opacity: .6
}

.article-landing .social-buttons a:first-child i::before {
    color: #3b5999
}

.article-landing .social-buttons a:nth-child(2) i:before {
    color: #55acee
}

.article-landing .social-buttons a:nth-child(3) i:before {
    color: #dd4b39
}

.article-landing .social-buttons a:nth-child(4) i:before {
    color: #0077b5
}

@media only screen and (min-width:1020px) {
    .article-landing h1 {
        font-size: 2.3125em
    }
}

#learner-report.wrapper {
    padding: 100px 40px
}

#learner-report.wrapper h3 {
    color: #465159
}

#learner-report.wrapper .legend {
    width: 100%;
    height: 35px;
    margin: 0 23px
}

#learner-report.wrapper .legend li {
    width: 60px;
    height: 8px;
    font-size: .5625em;
    line-height: .5625em;
    display: inline-block
}

#learner-report.wrapper .legend li .square {
    width: 20px;
    height: 8px;
    float: right;
    margin-right: 6px
}

#learner-report.wrapper .legend #week1 .square {
    background: #008445
}

#learner-report.wrapper .legend #week2 .square {
    background: #00a94f
}

#learner-report.wrapper .legend #week3 .square {
    background: #f58220
}

#learner-report.wrapper .legend #week4 .square {
    background: #f99d25
}

#learner-report.wrapper .legend #week5 {
    display: none
}

#learner-report.wrapper .legend #week5 .square {
    background: #c1d42f
}

#learner-report.wrapper .legend #week6 {
    display: none
}

#learner-report.wrapper .legend #week6 .square {
    background: #ffd200
}

#learner-report.wrapper [class^="col-md"] {
    margin-top: 40px;
    margin-bottom: 40px
}

#learner-report.wrapper .head-info {
    background: #f2f5f6;
    padding: 20px
}

#learner-report.wrapper .chart-header {
    margin-bottom: 0
}

#learner-report.wrapper .row .btn {
    max-width: 165px
}

#learner-report.wrapper .row #score,
#learner-report.wrapper .row #total-time,
#learner-report.wrapper .row .percent {
    font-size: 3.375em;
    color: #465159;
    padding-bottom: 20px
}

#learner-report.wrapper .row .chart-holder:first-child {
    margin-right: 10px
}

#learner-report.wrapper .wrapp-info {
    width: 100%;
    height: 600px;
    background: #f2f5f6
}

#learner-report.wrapper .wrapp-info [class^="col-md"] {
    padding: 33px
}

@media only screen and (min-width:768px) {
    #learner-report.wrapper .row .btn {
        float: right
    }
}

@media only screen and (min-width:1020px) {
    #learner-report.wrapper .wrapp-info {
        height: 300px
    }
}

#empower-page {
    padding: 45px 0 0;
    position: relative
}

#empower-page h2 {
    color: #5d666d;
    display: block;
    font: 400 22px Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif;
    text-align: center
}

#empower-page .suggestions-feedback {
    background: #f3f6f7;
    margin: 50px 0 0;
    padding: 40px 0;
    text-align: center
}

#empower-page .suggestions-feedback .wrapper {
    max-width: 800px
}

#empower-page .suggestions-feedback img {
    margin: 20px 0
}

#empower-page .suggestions-feedback p {
    color: #2d3942;
    font: 700 1.0625em Roboto, Helvetica\ Neue, Helvetica, Arial, sans-serif
}

#empower-page .suggestions-feedback h5 {
    font-size: 19px;
    position: relative
}

#empower-page .suggestions-feedback h5:after {
    background: #0091c7;
    bottom: -10px;
    content: "";
    height: 1px;
    left: 50%;
    margin-left: -18px;
    position: absolute;
    width: 36px
}

@media only screen and (min-width:768px) {
    #empower-page h2 {
        font-size: 30px
    }
}

.empower-listing {
    text-align: center
}

.empower-listing li {
    display: inline-block;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, .2);
    margin: 20px 0;
    max-width: 320px;
    padding: 20px 10px;
    vertical-align: top
}

.empower-listing li h3,
.empower-listing li p {
    color: #5d666d
}

.empower-listing li h3 {
    font-size: 18px;
    margin: 0 0 20px
}

.empower-listing li p {
    margin: 0
}

.empower-listing li .text {
    margin: 0 0 30px
}

.empower-listing li .btn {
    background: #0094c9;
    border-radius: 4px;
    color: #fff;
    display: inline-block;
    font-size: 14px;
    line-height: 20px;
    max-width: 100%;
    min-width: 150px;
    padding: 4px 15px;
    width: auto
}

.empower-listing li .btn:hover {
    background: #006e96
}

.empower-listing li .btn.btn-social {
    min-width: 80px
}

@media only screen and (min-width:768px) {
    .empower-listing li {
        margin: 10px 40px;
        max-width: 280px
    }
    .empower-listing li:last-child,
    .empower-listing li:nth-last-child(2) {
        margin: 10px 0;
        max-width: 100%;
        position: relative;
        width: 100%
    }
    .empower-listing li:last-child img,
    .empower-listing li:nth-last-child(2) img {
        float: left;
        width: 120px
    }
    .empower-listing li:last-child .text,
    .empower-listing li:nth-last-child(2) .text {
        float: left;
        margin: 20px 40px 0;
        padding: 0 15px;
        width: calc(100% - 360px)
    }
    .empower-listing li:last-child .btn,
    .empower-listing li:nth-last-child(2) .btn {
        bottom: 20px;
        position: absolute;
        right: 20px
    }
}

@media only screen and (min-width:1020px) {
    .empower-listing li {
        margin: 10px;
        width: calc(25% - 25px)
    }
    .empower-listing li:last-child,
    .empower-listing li:nth-last-child(2) {
        width: calc(100% - 32px)
    }
}

@media only screen and (min-width:1240px) {
    .empower-listing li:last-child .text,
    .empower-listing li:nth-last-child(2) .text {
        margin: 20px 80px 0;
        width: calc(100% - 430px)
    }
}
<?php }
}
