"use strict";document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){new ApexCharts(document.querySelector("#invites-goal-chart"),{series:[76],chart:{type:"radialBar",offsetY:-20,sparkline:{enabled:!0}},colors:["#4680ff"],plotOptions:{radialBar:{startAngle:-95,endAngle:95,hollow:{margin:15,size:"50%"},track:{background:"#eaeaea",strokeWidth:"97%",margin:20},dataLabels:{name:{show:!1},value:{offsetY:0,fontSize:"20px"}}}},grid:{padding:{top:10}},stroke:{lineCap:"round"},labels:["Average Results"]}).render()},500)});