@extends('admin.adminlte')

@section('content')

<script src="{{url('assets/adminlte/dist/js/chartJs/Chart.min.js')}}"></script>

<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1 connectedSortable">
        <div class="nav-tabs-custom box1">
          <ul class="nav nav-tabs tab-content text-center text-box">
            <h4><b>MONITORING</b></h4>
          </ul>
          <div class="col-sm-3">
            <li><= 100 ppm (Aman)</li>
            <li>asda</li>
            <li>asda</li>
          </div>
          <div class="content-custom">
            @isset ($data)
              <h2 class="text-h1">KADAR CO2 : {{$data -> kadars}} PPM</h2>
              <h2 class="text-h1">STATUS : 
                @if ($data -> kadars>=1500)
                    Tidak Aman
                 @else
                    Aman
                @endif</h2>
            @endisset
            <div class="lok">
              <h4><i class="fa fa-map-marker"></i>&nbsp;<b>Lokasi Penelitian 1</b></h4>
              <h4><i class="fa fa-map-marker"></i>&nbsp;<b>Lokasi Penelitian 2</b></h4>              
            </div>
          </div>                                                                                           
        </section>
      </div> 
    </div>
  </section>
</div>
@endsection