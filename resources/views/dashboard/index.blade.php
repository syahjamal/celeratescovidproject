@extends('layout.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="container">
				<div class="panel col-md-12">
					<div id="chartHarian"></div>
				</div>
			</div>
			<div class="container">
				<div class="panel col-md-12">
					<div id="chartKumulatif"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

	Highcharts.chart('chartHarian', {
		chart: {
			type: 'line'
		},
		title: {
			text: 'Data Harian Covid-19 DKI Jakarta'
		},
		xAxis: {
			categories: <?php echo json_encode($categories); ?>,
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
			name: 'Positif Harian',
			data: <?php echo json_encode($posha);?>,
			color: '#ffcc00',

		}, {
			name: 'Sembuh Harian',
			data: <?php echo json_encode($semha);?>,
			color: '#33cc33',

		}, {
			name: 'Meninggal Harian',
			data: <?php echo json_encode($matha);?>,
			color: '#e60000',

		}]
	});

	Highcharts.chart('chartKumulatif', {
		chart: {
			type: 'areaspline'
		},
		title: {
			text: 'Data Kumulatif Covid-19 DKI Jakarta'
		},
		xAxis: {
			categories: <?php echo json_encode($categorieskum); ?>,
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
			name: 'Positif Kumulatif',
			data: <?php echo json_encode($poskum);?>,
			color: '#ffcc00',

		}, {
			name: 'Sembuh Kumulatif',
			data: <?php echo json_encode($semkum);?>,
			color: '#33cc33',

		}, {
			name: 'Meninggal Kumulatif',
			data: <?php echo json_encode($matkum);?>,
			color: '#e60000',

		}]
	});

	
	

</script>
@stop

