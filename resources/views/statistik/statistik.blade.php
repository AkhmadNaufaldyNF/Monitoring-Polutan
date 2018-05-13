@extends('admin.adminlte')

@section('content')

<script src="{{url('assets/adminlte/dist/js/chartJs/Chart.min.js')}}"></script>

<div class="content-wrapper">
  <section class="content">
    <div class="row row-custom">
      <section class="col-lg-10 col-lg-offset-1 connectedSortable">
        <canvas id="chartku">
         <script>
          var ctx = document.getElementById("chartku").getContext('2d');
          var chartku = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
              datasets: [{
                label: 'STATISTIK MONITORING POLUSI UDARA',
                data: [10, 20, 30, 15, 25, 5],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(86, 255, 30, 0.2)',  
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(86, 255, 30, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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
      </canvas>                                                                                          
    </section>
  </div>
</section>
</div>
@endsection