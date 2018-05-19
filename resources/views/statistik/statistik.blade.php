@extends('admin.adminlte')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
    <h1>
      STATISTIK MONITORING POLUSI UDARA
    </h1>
  </section>
  <section class="content">
    <div class="row row-custom">
      <section class="col-lg-10 col-lg-offset-1 connectedSortable">
        <canvas id="chartku"></canvas>
      </section>
    </div>
  </section>
</div>
@endsection

@section('statistik')

<script>
  var ctx = document.getElementById("chartku").getContext('2d');
  var chartku = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
      datasets: [{
        label: 'RATA-RATA DATA PER BULAN',
        data: [
        @foreach ($data as $datas)
        {{$datas}},
        @endforeach
        ],
        backgroundColor: [
        '#FC3C3C',
        '#E3E637',
        '#97E637',
        '#3786E6',  
        '#A937E6',
        '#E63760',
        '#D98211',
        '#062743',
        '#7dc383',
        '#ffdd7e',
        '#294a66',
        '#2BA59F'
        ],
        borderWidth: 1
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
</script>

@endsection