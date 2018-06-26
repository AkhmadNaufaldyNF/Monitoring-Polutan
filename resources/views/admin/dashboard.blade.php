@extends('admin.adminlte')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      SISTEM MONITORING POLUSI UDARA
    </h1>
  </section>
  <section class="content custom-content">
    <div class="box box-info">
      <div class="box-body">
        <section class="col-lg-3 connectedSortable">
          <div class="nav-tabs-custom box2">
            <ul class="nav nav-tabs tab-content head-box2 text-center text-box">
              <h4><b>LEVEL NORMAL CO<sub>2</sub></b></h4>
            </ul>
            <div class="content-custom">
              <h5 class="text-h5"><b>BAIK : 350-450 PPM</h5>
              <h5 class="text-h5"><b>SEDANG : < 1000 PPM</h5>
              <h5 class="text-h5"><b>TIDAK BAIK : >=  1000 PPM</h5>
            </div>
          </div>                                                                                           
        </section>
        <section class="col-lg-5 col-lg-offset-1 connectedSortable">
          <div class="nav-tabs-custom box1">
            <ul class="nav nav-tabs tab-content head-box1 text-center text-box">
              <h4><b>MONITORING</b></h4>
            </ul>
            <div class="content-custom">
              @isset ($data)
              <h2 class="text-h2">TANGGAL : {{ Waktu::tanggal($data -> created_at) }}</h2>
              <h2 class="text-h2">KADAR CO<sub>2</sub> : {{ $data -> kadars }} PPM</h2>
              <h2 class="text-h2">STATUS : 
                @if ($data -> kadars<=450)
                BAIK
                @elseif ($data -> kadars<1000)
                SEDANG
                @else
                TIDAK BAIK
              @endif</h2>
              @endisset
            </div>
          </div>                                                                                           
        </section>
      </div>
    </div>
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