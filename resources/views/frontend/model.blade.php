@extends('layoutfront.masterfront')
@section('contentfront')

<!-- Area Pendahuluan -->
<div class="about_area section_gap_awal">
    <div class="container">
    	<h2 class="justify-content title_color ">Pendahuluan</h2>
        <div class="row justify-content-start align-items-center">
        	<div class="col-lg-12">
        		<div class="text-justify title_color">
        			Teori klasik yang biasa digunakan dalam pemodelan penyakit umumnya memakai model Kermack-McKendrik yang ditemukan pada tahun 1927. 
					Model Kermack-McKendrik menjelaskan laju penyebaran penyakit antara tiga kelas dengan
					parameter β adalah laju penyebaran penyakit dan 
					parameter γ adalah laju kesembuhan individu dari suatu penyakit. Asumsikan masing-masing kompartemen baik
					individu yang sehat maupun individu yang sakit mempunyai populasi yang konstan
					dan tidak ada kelahiran dan kematian yang terjadi pada populasi tersebut.
					Model Kermack-McKendrik biasa dikenal dengan model (SIR). Tiga kelas
					yang terdapat dalam model ini, yaitu:<br>
					1. Suscaptable (S), merupakan kelas populasi yang rentan terkena penyakit menular.<br>
					2. Infected (I), merupakan kelas populasi yang telah terinfeksi oleh suatu penyakit menular.<br>
					3. Recovered (R), merupakan kelas populasi yang telah sehat atau sembuh setelah terinfeksi oleh penyakit.<br>
					Pada model ini, ditambahkan satu kelas lagi yaitu:<br>
					- Dead (D), merupakan kelas populasi yang mati setelah terinfeksi oleh penyakit
        		</div>
        	</div>
        </div>
    </div>
</div>

<!-- Area Asumsi -->
<div class="about_area section_gap_top">
    <div class="container">
    	<h2 class="justify-content title_color">Asumsi</h2>
        <div class="row justify-content-start align-items-center">
            <div class="col-lg-12">
        		<div class="text-justify title_color justify-content">
        			Dengan melihat kondisi dan data mengenai COVID-19 di Jakarta ini, kita membuat asumsi seperti ini:<br>
        			- Populasi diasumsikan tertutup, sehingga jumlah populasi konstan<br>
					- Semua individu dalam populasi adalah individu yang rentan penyakit (Susceptible)<br>
					- Semua orang punya peluang yang sama untuk tertular dan menularkan virus.<br>
					- Individu yang terinfeksi virus dapat sembuh<br>
					- Individu yang terinfeksi dapat mati<br>
					- Individu sembuh tidak dapat terinfeksi atau menjadi rentan kembali<br>
        		</div>
        	</div>
        </div>
    </div>
</div>

<!-- Area Bagan -->
<div class="about_area section_gap_top">
	<div class="container">
		<div class="col-md-12 text-center">
			<img class="" src="{{asset('satner/img/model/bagan.png')}}" alt="">
		</div>
	</div>
</div>


<div class="section_gap_top">
	<div class="container">
		<div class="row">
			<div class="col-md-6 ">
				<h2 class="title_color text-center">Model SIRD</h2>
				<div class="text-left">
					<img class="" src="{{asset('satner/img/model/model.png')}}" alt="">
				</div>
			</div>
			<div class="col-md-6">
				<div class="justify-content title_color">
					<h2 class="text-left">Variabel & Parameter</h2>
					<p>	
						1.	<i>S(t)</i> = jumlah individu rentan pada satuan waktu t<br> 
						2.	<i>I(t)</i> = jumlah individu terinfeksi pada satuan waktu t<br>
						3.	<i>R(t)</i> = jumlah individu sembuh pada satuan waktu t<br>
						4.	<i>D(t)</i> = jumlah individu mati pada satuan waktu t<br>
						5.	<i>β</i>= expected amount of people an infected person infects per day<br>
						6.	<i>γ</i>= the proportion of infected recovering per day <br>
						7.	<i>δ</i>= rate at which people die<br>
						8.	<i>α</i> = fatality rate<br></p>
					</div>
				</div>
			</div>
		</div>
	</div>



<!-- Area Model -->
<!-- <div class="section_gap_top">
	<div class="container">
		<h2 class="justify-content title_color text-center">Model SIRD</h2><br>
		<div class="col-md-12 text-center">
			<img class="" src="{{asset('satner/img/model/model.png')}}" alt="">
		</div>
	</div>
</div> -->



<!-- Grafik Area Model -->
<div class="about_area section_gap_top">
    <div class="container">
    	<h2 class="justify-content title_color text-center">GRAFIK MODEL</h2><br>
        <div class="col-md-12">
            <div class="generic-blockquote2" id="chartModel"></div>
        </div><br>
        <div class="text-justify title_color ">
        	<div class="col-md-12 justify-content-center">
        		<p>
        			Berdasarkan hasil dari model SIRD, grafik di atas menunjukkan puncak penyebaran COVID-19 di Provinsi DKI Jakarta pada hari ke-335 dan prediksi akhir pandemi terjadi pada hari ke-1399 atau sekitar 3 tahun 10 bulan sejak kasus pertama diumumkan. Hasil prediksi ini dipengaruhi oleh populasi penduduk DKI Jakarta tahun 2020 sejumlah 11 juta penduduk.
        		</p>
        	</div>
        </div>
    </div>
</div>

<!-- Tabel Area Model -->
<div class="about_area section_gap_top">
	<div class="container">
		<div class="col-md-12">
			<div class="panel">
				<div class="panel-heading">
					<h2 class="justify-content text-center">Perbandingan Data Kasus COVID-19 DKI Jakarta dengan Model</h2><br>
				</div>
				<div class="panel-body">
					<table id="tabel_perbandingan" class="ui celled table table-hover" style="width:100%">
						<thead>
							<tr>
								<th>Tanggal </th>
								<th>POSITIF HARIAN</th>
								<th>PREDIKSI KASUS POSITIF</th>
								<th>SELISIH KASUS</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data_perbandingan as $dataperbandingan)
							<tr>
								<td>{{$dataperbandingan->tanggal}}</td>
								<td>{{$dataperbandingan->positif_harian}}</td>
								<td>{{$dataperbandingan->i}}</td>
								<td>{{$dataperbandingan->gap}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


@stop

@section('jsfront')
	<!--Data Tabel-->
	<script>
		$(document).ready(function() {
			$('#tabel_perbandingan').DataTable();
		} );
	</script>
@endsection

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
			headerFormat: '<span style="font-size:12px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			'<td style="padding:0"><b>{point.y: ,.f} orang</b></td></tr>',
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
			name: 'Suspected',
			data: <?php echo json_encode($suspect);?>,
			color: '#ffcc00',

		}, {
			name: 'Infected',
			data: <?php echo json_encode($infected);?>,
			color: '#e60000',

		}, {
			name: 'Recover',
			data: <?php echo json_encode($recover);?>,
			color: '#33cc33',

		}, {
			name: 'Dead',
			data: <?php echo json_encode($dead);?>,
			color: '#0066ff',

		}]
	});
</script> --}}
{{-- @endsection

