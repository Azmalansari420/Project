

var handleRenderChart = function() {
	Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
	Chart.defaults.global.defaultFontColor = '#222';
	Chart.defaults.global.tooltips.xPadding = 8;
	Chart.defaults.global.tooltips.yPadding = 8;
	Chart.defaults.global.tooltips.multiKeyBackground = 'transparent';
	
	var ctx = document.getElementById('lineChart');
	var lineChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
			datasets: [{
				color: PRIMARY_COLOR,
				backgroundColor: PRIMARY_TRANSPARENT_2_COLOR,
				borderColor: PRIMARY_COLOR,
				borderWidth: 1.5,
				pointBackgroundColor: WHITE_COLOR,
				pointBorderWidth: 1.5,
				pointRadius: 4,
				pointHoverBackgroundColor: PRIMARY_COLOR,
				pointHoverBorderColor: WHITE_COLOR,
				pointHoverRadius: 7,
				label: 'Total Sales',
				data: [12, 19, 4, 5, 2, 3]
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	});
	
	var ctx2 = document.getElementById('barChart');
	var barChart = new Chart(ctx2, {
		type: 'bar',
		data: {
			labels: ['Jan','Feb','Mar','Apr','May','Jun'],
			datasets: [{
				label: 'Total Visitors',
				data: [37,31,36,34,43,31],
				backgroundColor: PRIMARY_TRANSPARENT_2_COLOR,
				borderColor: PRIMARY_COLOR,
				borderWidth: 1.5
			},{
				label: 'New Visitors',
				data: [12,16,20,14,23,21],
				backgroundColor: MUTED_TRANSPARENT_2_COLOR,
				borderColor: MUTED_COLOR,
				borderWidth: 1.5
			}]
		}
	});
	
	var ctx3 = document.getElementById('radarChart');
	var radarChart = new Chart(ctx3, {
		type: 'radar',
		data: {
			labels: ['United States', 'Canada', 'Australia', 'Netherlands', 'Germany', 'New Zealand', 'Singapore'],
			datasets: [
				{
					label: 'Mobile',
					backgroundColor: PRIMARY_TRANSPARENT_2_COLOR,
					borderColor: PRIMARY_COLOR,
					pointBackgroundColor: WHITE_COLOR,
					pointBorderColor: PRIMARY_COLOR,
					pointHoverBackgroundColor: PRIMARY_COLOR,
					pointHoverBorderColor: WHITE_COLOR,
					data: [65, 59, 90, 81, 56, 55, 40],
					borderWidth: 1.5
				},
				{
					label: 'Desktop',
					backgroundColor: MUTED_TRANSPARENT_2_COLOR,
					borderColor: MUTED_COLOR,
					pointBackgroundColor: WHITE_COLOR,
					pointBorderColor: MUTED_COLOR,
					pointHoverBackgroundColor: MUTED_COLOR,
					pointHoverBorderColor: WHITE_COLOR,
					data: [28, 48, 40, 19, 96, 27, 100],
					borderWidth: 1.5
				}
			]
		}
	});
	
	
	var ctx4 = document.getElementById('polarAreaChart');
	var polarAreaChart = new Chart(ctx4, {
		type: 'polarArea',
		data: {
			datasets: [{
				data: [11, 16, 7, 3, 14],
				backgroundColor: [PRIMARY_COLOR, PURPLE_COLOR, INFO_COLOR, MUTED_COLOR, INVERSE_COLOR],
				borderWidth: 1.5
			}],
			labels: ['IE', 'Safari', 'Chrome', 'Firefox', 'Opera']
		}
	});
	
	var ctx5 = document.getElementById('pieChart');
	var pieChart = new Chart(ctx5, {
		type: 'pie',
		data: {
			labels: ['Total Visitor', 'New Visitor', 'Returning Visitor'],
			datasets: [{
				data: [300, 50, 100],
				backgroundColor: [PRIMARY_COLOR, PURPLE_COLOR, INVERSE_COLOR],
				hoverBackgroundColor: [PRIMARY_COLOR, PURPLE_COLOR, INVERSE_COLOR],
				borderWidth: 1.5
			}]
		}
	});
	
	var ctx6 = document.getElementById('doughnutChart');
	var doughnutChart = new Chart(ctx6, {
		type: 'doughnut',
		data: {
			labels: ['Total Visitor', 'New Visitor', 'Returning Visitor'],
			datasets: [{
				data: [300, 50, 100],
				backgroundColor: [PRIMARY_COLOR, PURPLE_COLOR, INVERSE_COLOR],
				hoverBackgroundColor: [PRIMARY_COLOR, PURPLE_COLOR, INVERSE_COLOR],
				borderWidth: 1.5
			}]
		}
	});
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
	handleRenderChart();
});