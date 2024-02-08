<?php

/*
Developer Comment:
1: Create a CSS grid layout with three columns where the first
 and third columns are fixed-width (i.e. 200 pixel), 
 and the middle column takes up the remaining space of screen. 
*/
?>
<style>
.switch {
	display: inline-block;
	height:28px;
	position: relative;
	width:50px;
}
.switch input {
	display: none;
}
.slider {
	background-color: #ccc;
	bottom: 0;
	cursor: pointer;
	left: 0;
	position: absolute;
	right: 0;
	top: 0;
	transition: .4s;
}
.slider:before {
	background-color: #fff;
	bottom: 4px;
	content: "";
	height:20px;
	left: 4px;
	position: absolute;
	transition: .4s;
	width:20px;
}
input:checked + .slider {
	background-color: #3498db;
}
input:checked + .slider:before {
	transform: translateX(22px);
}
.slider.round {
	border-radius: 34px;
}
.slider.round:before {
	border-radius: 50%;
}
</style>
<div class="body">
<div class="card style3">
	
    <div class="card-body">
     <label class="switch" for="checkbox">
    <input type="checkbox" id="checkbox" />
    <div class="slider round"></div>
  </label></div>
</div>