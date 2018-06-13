<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .table{
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  .table > * > * > *{
    border: 1px solid #000000;
    padding: 8px;
  }
  .text-center{
    text-align: center;
  }
</style>
<title>Print Data Monitoring</title>
</head>
<body>
  <div class="text-center">
    <h1>Laporan Data Monitoring</h1>
  </div>
  <hr style="margin-bottom: 15px">
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th class="text-center">No</th>
        <th class="text-center">Kadar</th>
        <th class="text-center">Status</th>
        <th class="text-center">Tanggal</th>
        <th class="text-center">Jam</th>
      </tr>
    </thead>
    <tbody>
     @foreach ($monitoring as $Index => $Monitoring)
     <tr>
      <td class="text-center">{{ $Index+1 }}</td>
      <td class="text-center">{{ $Monitoring -> kadars }}</td>
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

{{--     @foreach ($Parkir as $Index => $DataParkir)
    <tr>
      <td class="text-center"> {{ $Index+1 }} </td>
      <td class="text-center"> {{ $DataParkir->parkir_id }} </td>
      <td> {{ $DataParkir->status ? 'Berisi' : 'Kosong' }} </td>
      <td> {{ Waktu::Tanggal($DataParkir->created_at) }} </td>
      <td> {{ Waktu::Jam($DataParkir->created_at) }} </td>
    </tr>
    @endforeach --}}
    </tbody>
</table>
</body>
</html>