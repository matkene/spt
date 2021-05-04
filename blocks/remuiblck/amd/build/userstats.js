"use strict";define(["jquery","core/chartjs"],function(a){var o,r=null,l={segmentShowStroke:!0,segmentStrokeColor:"#fff",segmentStrokeWidth:1,percentageInnerCutout:50,animationSteps:100,animateRotate:!0,animateScale:!1,responsive:!0,maintainAspectRatio:!0,legendTemplate:'<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',tooltipTemplate:"<%=value %> <%=label%> users",legend:{display:!1}};function e(){var e=a("#coursecategorylistblock option:selected").data("id");a.ajax({type:"GET",async:!0,url:M.cfg.wwwroot+"/theme/remui/request_handler.php?action=get_courses_by_category&categoryid="+e+"&sesskey="+M.cfg.sesskey,success:function(e){if(null===(o=JSON.parse(e)))a("canvas#pieChartblock").hide(),a(".enroll-stats-nouserserror").hide(),a(".chart-legend").hide(),a(".enroll-stats-error").show();else{a(".enroll-stats-error").hide(),a(".enroll-stats-nouserserror").hide(),a(".chart-legend").show(),a("canvas#pieChartblock").show(),a("#enrolled_users_stats_block .chart-legend").empty();var s=["#2196f3","#00bcd4","#009688","#4caf50","#8bc34a","#ffeb3b","#ff9800","#f44336","#9c27b0","#673ab7","#3f51b5"];a.each(o.labels,function(e,t){a("#enrolled_users_stats_block .chart-legend").append('<li class="list-group-item p-0 pt-5">'+t+': <span class="badge badge-round" style="background-color:'+s[e]+';">'+o.data[e]+"</span></li>")}),function(){null!==r&&r.destroy();var e=a("#pieChartblock").get(0).getContext("2d"),t={labels:o.labels,datasets:[{data:o.data,backgroundColor:o.background_color,hoverBackgroundColor:o.hoverBackground_color}]};r=new Chart(e,{type:"doughnut",data:t,options:l})}()}},error:function(e,t,s){a("canvas#pieChartblock").hide(),a(".enroll-stats-error").show()}})}a("#enrolled_users_stats_block select").length&&(a("#enrolled_users_stats_block select#coursecategorylistblock").on("change",function(){e()}),e())});