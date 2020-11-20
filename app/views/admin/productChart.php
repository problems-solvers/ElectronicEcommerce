
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
	$(document).ready(function() {

		$.ajax({
			url :"http://localhost/ElectronicEcommerce/admin/admin_repo/datacat",

			dataType : "JSON",
			success : function(result) {
				google.charts.load('current', {
					'packages' : [ 'corechart' ]
				});
				google.charts.setOnLoadCallback(function() {
					drawChart(result);
				});
			}
		});

		function drawChart(result) {

			var data = new google.visualization.DataTable();
			data.addColumn('string', 'cat_name');
			data.addColumn('number', 'counts');
			var dataArray = [];
			$.each(result, function(i, obj) {
				dataArray.push([ obj.cat_name, parseInt(obj.counts) ]);
			});

			data.addRows(dataArray);

			var piechart_options = {
				title : 'Categories ',
				width : 400,
				height : 300
			};
			var piechart = new google.visualization.PieChart(document
					.getElementById('piechart_div'));
			piechart.draw(data, piechart_options);

		
			var barchart = new google.visualization.BarChart(document
					.getElementById('barchart_div'));
			barchart.draw(data, barchart_options);
		}

	});
</script>

</head>
<body>
<table class="columns mx-auto">
	<tr>
		<td>
		<div id="piechart_div" style="border: 1px solid #ccc"></div>
		</td>
		<td>
		<div id="barchart_div" style="border: 1px solid #ccc"></div>
		</td>
	</tr>
</table>
