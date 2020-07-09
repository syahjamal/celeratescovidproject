@extends('layout.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="container">
				<div class="panel col-md-12">
					<div id="chartModel"></div>
				</div>
				@yield('grafik')
			</div>
		</div>
	</div>
</div>


@stop

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
	Highcharts.chart('chartModel', {
		chart: {
			type: 'line'
		},
		title: {
			text: 'Model Covid-19 DKI Jakarta'
		},
		xAxis: {
			categories: <?php echo json_encode($categoriesmod); ?>,
			crosshair: true
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Jumlah (orang)'
			}
		},
		tooltip: {
			headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			'<td style="padding:0"><b>{point.y: .f} orang</b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true
		},
		plotOptions: {
			column: {
				pointPadding: 0.1,
				borderWidth: 0
			}
		},
		series: [{
			name: 'S',
			data: <?php echo json_encode($suspect);?>,
			color: '#ffcc00',

		}, {
			name: 'I',
			data: <?php echo json_encode($infected);?>,
			color: '#33cc33',

		}, {
			name: 'R',
			data: <?php echo json_encode($recover);?>,
			color: '#0066ff',

		}, {
			name: 'D',
			data: <?php echo json_encode($dead);?>,
			color: '#e60000',

		}]
	});
</script>
@stop

