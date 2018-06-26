@extends('admin.adminlte')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      DATA MONITORING
    </h1>
  </section>

  <section class="content custom-content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <form action="" method="post">
              {{ csrf_field() }}
              <div class="col-md-2 text-center custom-filter">
                <label>Tanggal Pertama</label>
                <input type="date" name="tanggalawal" value="{{ isset($request) ? $request->tanggalawal : '01-01-2018' }}" class="form-control form-control-h34px">
              </div>
              <div class="col-md-2 text-center custom-filter">
                <label>Tanggal Terakhir</label>
                <input type="date" name="tanggalakhir" value="{{ isset($request) ? $request->tanggalakhir : Waktu::TanggalSekarang() }}" class="form-control form-control-h34px">
              </div>
              <div class="col-md-2 text-center custom-filter">
                <label>Waktu Pertama</label>
                <input type="time" name="waktuawal" value="{{ isset($request) ? $request->waktuawal : '00:00 AM' }}" class="form-control form-control-h34px">
              </div>
              <div class="col-md-2 text-center custom-filter">
                <label>Waktu Akhir</label>
                <input type="time" name="waktuakhir" value="{{isset($request) ? $request->waktuakhir : Waktu::WaktuSekarang()}}" class="form-control form-control-h34px">
              </div>
              <div class="col-md-2 text-center custom-filter">
                <label>Status</label>
                <select class="form-control" name="monitoring">
                  <option value="status">Semua</option>
                  <option value="0" {{ isset($request) && $request->monitoring == '0' ? 'selected' : '' }}>Baik</option>
                  <option value="1" {{ isset($request) && $request->monitoring == '1' ? 'selected' : '' }}>Sedang</option>
                  <option value="2" {{ isset($request) && $request->monitoring == '2' ? 'selected' : '' }}>TIdak Baik</option>
                </select>
              </div>
              <div class="custom-button-filter">
                <div class="col-md-2 text-center">
                  <button type="submit" class="btn btn-primary">
                    <span class="fa fa-search"></span> | Filter
                  </button>
                </div>
              </div>
              <div class="custom-button-print">
                <div class="col-md-2 text-center">
                  <a href="{{ Route('Print-Data', ['tanggalawal' => isset($request) ? $request->tanggalawal : '01-01-2018', 'tanggalakhir' => isset($request) ? $request->tanggalakhir : Waktu::TanggalSekarang(), 'waktuawal' => isset($request) ? $request->waktuawal : '00:00 AM', 'waktuakhir' => isset($request) ? $request->waktuakhir : Waktu::WaktuSekarang(), 'status' => isset($request) ? $request->monitoring : 'Semua'])}}" class="btn btn-info">
                    <span class="fa fa-print"></span> | Cetak
                  </a>
                </div>
              </div>
            </form>
          </div>
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kadar</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($monitoring as $indexKey => $Monitoring)
                <tr>
                  <td>{{ $indexKey+1 }}</td>
                  <td>{{ $Monitoring -> kadars }}</td>
                  <td>
                    @if ($Monitoring -> kadars<=450)
                    Baik
                    @elseif($Monitoring -> kadars<1000)
                    Sedang
                    @else
                    Tidak Baik
                    @endif
                  </td>
                  <td>{{ Waktu::tanggal($Monitoring -> created_at) }}</td>
                  <td>{{ Waktu::jam ($Monitoring -> created_at) }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>   
</div>

@endsection
