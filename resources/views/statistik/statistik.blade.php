@extends('admin.adminlte')

@section('content')


<div class="content-wrapper">
    <section class="content-header">
    <h1>
      STATISTIK MONITORING POLUSI UDARA
    </h1>
  </section>
  <section class="content custom-content">
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
    type: 'bar',
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
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637',  
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637',
        '#97E637'
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