"use strict";document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){new ApexCharts(document.querySelector("#revenue-sales-chart"),{chart:{type:"area",height:250,toolbar:{show:!1}},colors:["#e58a00","#4680ff"],dataLabels:{enabled:!1},legend:{show:!0,position:"top"},markers:{size:1,colors:["#fff","#fff","#fff"],strokeColors:["#e58a00","#4680ff"],strokeWidth:1,shape:"circle",hover:{size:4}},stroke:{width:2,curve:"smooth"},fill:{type:"gradient",gradient:{shadeIntensity:1,type:"vertical",inverseColors:!1,opacityFrom:.5,opacityTo:0}},grid:{show:!1},series:[{name:"Revenue",data:[200,320,320,275,275,400,400,300,440,320,320,275,275,400,300,440]},{name:"Sales",data:[200,250,240,300,340,320,320,400,350,250,240,300,340,320,400,350]}],xaxis:{labels:{hideOverlappingLabels:!0},axisBorder:{show:!1},axisTicks:{show:!1}}}).render()},500)});