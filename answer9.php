<?php

/*
Developer Comment:
1: Create a CSS grid layout with three columns where the first
 and third columns are fixed-width (i.e. 200 pixel), 
 and the middle column takes up the remaining space of screen. 
*/
?>
<style>
.body{
	height:30px;
	display:flex;
}
.left{
	background:#3498db;
	width:20%;
	height:30px;
	float:left;
}
.right{
	width:20%;
	background:#3498db;
	height:30px;
	float:right;
}
.content{
	width:60%;
	height:30px;
	
	background:green;
}
</style>
<div class="body">
<div class="left"></div>
<div class="content"></div>
<div class="right"></div>
</div>