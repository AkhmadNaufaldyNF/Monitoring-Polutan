@extends('admin.adminlte')

@section('content')

<div class="content-wrapper">
  <section class="content custom-content">
   <div class="box box-success">
     <div class="box-header with-border">
      <h3 class="box-title">TESTING</h3>
    </div>
    <form method="POST" action="{{ url('/crud') }}" style="width: 50%; margin-left: 10px; margin-top: 10px;">
      {{csrf_field()}}
      <div class="form-group">
        <input type="text" name="kadars" class="form-control" placeholder="kadaaaar"/>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">
          <span class="fa fa-save"></span> | Simpan
        </button>
        {{-- <input type="submit" class="btn btn-primary"/> --}}
      </div>
    </form>
  </div>


</section>  
</div>

@endsection


