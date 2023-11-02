! function(d) {
	"use strict";

	function r() {}
	r.prototype.respChart = function(r, o, e, a) {
		Chart.defaults.global.defaultFontColor = "#8791af", Chart.defaults.scale.gridLines.color = "rgba(166, 176, 207, 0.1)";
		var t = r.get(0).getContext("2d"),
			n = d(r).parent();

		function i() {
			r.attr("width", d(n).width());
			switch (o) {
				case "Bar":
					new Chart(t, {
						type: "bar",
						data: e,
						options: a
					});
					break;
				
				
			}
		}
		d(window).resize(i), i()
	}, r.prototype.init = function() {
		
		
		
		this.respChart(d("#bar"), "Bar", {
			labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			datasets: [{
				label: "Total Candidate",
				backgroundColor: "rgba(28, 187, 140, 0.8)",
				borderColor: "rgba(28, 187, 140, 0.8)",
				borderWidth: 1,
				hoverBackgroundColor: "rgba(28, 187, 140, 0.9)",
				hoverBorderColor: "rgba(28, 187, 140, 0.9)",
				data: [40, 38, 32, 15, 35, 40, 35, 30, 45, 50, 55, 60]
			}]
		}, {
			scales: {
				xAxes: [{
					barPercentage: .4
				}]
			}
		});
		
		
	}, d.ChartJs = new r, d.ChartJs.Constructor = r
}(window.jQuery),
function() {
	"use strict";
	window.jQuery.ChartJs.init()
}();