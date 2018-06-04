@extends('admin.adminlte')

@section('content')


<div class="content-wrapper">
  <section class="content custom-content">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">STATISTIK MONITORING POLUSI UDARA</h3>
      </div>
      <div class="box-body">
        <div class="chart">
          <canvas id="chartku"></canvas>      
        </div>
      </div>
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