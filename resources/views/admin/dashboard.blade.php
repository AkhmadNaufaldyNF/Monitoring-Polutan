@extends('admin.adminlte')

@section('content')

<script src="{{url('assets/adminlte/dist/js/chartJs/Chart.min.js')}}"></script>

<div class="content-wrapper">
  <section class="content custom-content">
    <div class="row">
      <section class="col-lg-5 col-lg-offset-1 connectedSortable">
        <div class="nav-tabs-custom box1">
          <ul class="nav nav-tabs tab-content head-box1 text-center text-box">
            <h4><b>MONITORING</b></h4>
          </ul>
          <div class="content-custom">
            @isset ($data)
            <h2 class="text-h2">KADAR CO<sub>2</sub> : {{$data -> kadars}} PPM</h2>
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
        </section>
        <section class="col-lg-5 connectedSortable">
          <div class="nav-tabs-custom box2">
            <ul class="nav nav-tabs tab-content head-box2 text-center text-box">
              <h4><b>LEVEL NORMAL CO<sub>2</sub></b></h4>
            </ul>
            <div class="content-custom">
              <h2 class="text-h2">BAIK : 350-450 PPM</h2>
              <h2 class="text-h2">SEDANG : < 1000 PPM</h2>
              <h2 class="text-h2">TIDAK BAIK : >=  1000 PPM</h2>
            </div>                                                                                           
          </section>
          <section class="col-lg-10 col-lg-offset-1 connectedSortable">
           <div class="nav-tabs-custom box3">
            <ul class="nav nav-tabs tab-content head-box2 text-center text-box">
              <h4><b>LEVEL NORMAL CO<sub>2</sub></b></h4>
            </ul>
              <canvas id="chart1"></canvas>
          </div>
        </section>
      </div> 
    </div>
  </section>
</div>
@endsection

{{-- @section('statistik2')

<script>
  var ctx = document.getElementById("chart1").getContext('2d');
  var chart1 = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
      datasets: [{
        label: 'RATA-RATA DATA PER MINGGU',
        data: [
        @foreach ($data as $datas)
        {{$datas}},
        @endforeach
        ],
        backgroundColor: [
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

@endsection --}}