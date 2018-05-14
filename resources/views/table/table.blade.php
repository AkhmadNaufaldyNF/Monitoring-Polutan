@extends('admin.adminlte')

@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Tables
      <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/table">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Polutan Table</h3>
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
                    @if ($Monitoring -> kadars>=1500)
                    Tidak Aman
                    @else
                    Aman
                    @endif
                  </td>
                  <td>{{ Waktu::tanggal($Monitoring -> created_at) }}</td>
                  <td>{{ Waktu::jam ($Monitoring -> created_at)}}</td>
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
