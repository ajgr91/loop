


/* Javascript Gráficas */
$(document).ready( function() {

	var random = function(max){ return Math.round(Math.random()*100)};
	if($("[data-widget='graph-weight']").length > 0){
		var ctx = $("[data-widget='graph-weight'] .canvas-holder canvas").get(0).getContext("2d");
		var data = {
		    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
		    datasets: [
		        {
		            label: "graph-weight",
		            fillColor: "rgba(255,255,255,0.0)",
		            strokeColor: "rgba(255,255,255,1)",
		            pointColor: "rgba(255,255,255,1)",
		            data: [65, 42, 59, 80, 81, 56]
		        },
		    ]
		};
		var options = {
			tooltipTemplate: "<%=value%>KG",
			scaleShowLine : false,
		}
		var graphWeight = new Chart(ctx).Line(data, options);
	}
	// ------------------------------------------------------------------------------------------------- //
	if($("[data-widget='graph-BP']").length > 0){
		var ctx = $("[data-widget='graph-BP'] .canvas-holder canvas").get(0).getContext("2d");
		var data = {
		    labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"],
		    datasets: [
		        {
		            label: "graph-BP",
		            fillColor: "rgba(255,255,255,0.0)",
		            strokeColor: "rgba(255,255,255,1)",
		            pointColor: "rgba(255,255,255,1)",
		            data: [25, 35, 45, 65, 68, 75]
		        },
		    ]
		};
		var options = {
			tooltipTemplate: "<%=value%>KG",
			scaleShowLine : false,
		}
		var graphBP = new Chart(ctx).Line(data, options);
	}
	// ------------------------------------------------------------------------------------------------- //
	if($("[data-widget='graph-min-rutine']").length > 0){
		var ctx = $("[data-widget='graph-min-rutine'] .canvas-holder canvas").get(0).getContext("2d");
		var data = {
				labels: new Array(31),
					datasets: [{
						fillColor : "rgba(255,255,255,0.0)",
						strokeColor : "rgba(255,255,255,1)",
						highlightFill: "rgba(255,255,255,1)",
						data: [
						12, 15, 0, 60, 50, 
						30, 75, 25, 85, 70, 
						15, 50, 30, 0, 55, 
						55, 50, 80, 90, 45, 
						25, 43, 32, 0, 0, 
						0, 30, 114, 15, 50, 
						25  ]
					}]
		};
		var options = {
			showScale: false,	
			scaleShowLine : false,
			barShowStroke: true,
			tooltipXPadding: 10,
			tooltipYPadding: 6,
					// Boolean - If we want to override with a hard coded scale
			scaleOverride: true,
					// ** Required if scaleOverride is true **
					// Number - The number of steps in a hard coded scale
			scaleSteps: 5,
					// Number - The value jump in the hard coded scale
			scaleStepWidth: 50,
					// Number - The scale starting value
			scaleStartValue: 0,
			tooltipTemplate: "<%=value%>MIN",	scaleShowLine : true,
		}
		var graphMinRutine = new Chart(ctx).Bar(data, options);
	}
// ------------------------------------------------------------------------------------------------- //
	if($("[data-widget='basics-stats']").length > 0){
		var ctx = $("[data-widget='basics-stats'] .canvas-holder canvas").get(0).getContext("2d");
		var data = {	
		    labels: ["DL", "BP", "SQ", "MP", "DO"],
			datasets: [
			    {
			        label: "basics-stats",
			        fillColor: "rgba(255,255,255,1)",
			        strokeColor: "rgba(255,255,255,0.75)",
			        pointColor: "rgba(255,255,255,1)",				
			        pointStrokeColor: "rgba(255,255,255,0.75)",
					pointHighlightFill: "#111",
					pointHighlightStroke: "#FFF",
			
			        data: [145, 115, 125, 65, 35]
			    },
			]	
		};
		var options = {
			showScale: true,
			showTooltips: true,
			tooltipTemplate: "<%=value%>KG",
			//Boolean - Whether to show lines for each scale point
				scaleShowLine : true,

				//Boolean - Whether we show the angle lines out of the radar
				angleShowLineOut : true,

				//Boolean - Whether to show labels on the scale
				scaleShowLabels : false,

				// Boolean - Whether the scale should begin at zero
				scaleBeginAtZero : true,

				//String - Colour of the angle line
	    		angleLineColor : "rgba(255,255,255,0.5)",

				//Number - Pixel width of the angle line
				angleLineWidth : 1,

				//String - Point label font declaration
				pointLabelFontFamily : "'Roboto'",

				//String - Point label font weight
				pointLabelFontStyle : "normal",

				//Number - Point label font size in pixels
				pointLabelFontSize : 10,

				//String - Point label font colour
				pointLabelFontColor : "#FFF",

				//Boolean - Whether to show a dot for each point
				pointDot : true,

				//Number - Radius of each point dot in pixels
				pointDotRadius : 2,

				//Number - Pixel width of point dot stroke
				pointDotStrokeWidth : 2,

				//Number - amount extra to add to the radius to cater for hit detection outside the drawn point
				pointHitDetectionRadius : 20,

				//Boolean - Whether to show a stroke for datasets
				datasetStroke : true,

				//Number - Pixel width of dataset stroke
				datasetStrokeWidth : 6,

				//Boolean - Whether to fill the dataset with a colour
				datasetFill : true,
				scaleLineColor: "rgba(255,255,255,1)",
		}
		var graphBasicStats = new Chart(ctx).Radar(data, options);
	}
})
