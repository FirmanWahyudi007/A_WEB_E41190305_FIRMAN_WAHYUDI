@extends('backend/layouts.template')
@section('content')
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!--overview start-->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3>
                <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="{{ url('home') }}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-graduation-cap"></i>Pendidikan</li>
                </ol>
            </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                {{ $admin_lecturer }}  Pendidikan
              </header>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <strong>Whoops!</strong> There where some problems with your input.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="pendidikan"
                  action="{{ isset($pendidikan) ? route('pendidikan.update',$pendidikan->id) : route('pendidikan.store') }}" method="post">
                    {!! csrf_field() !!}
                    {!! isset($pendidikan) ? method_field('PUT') : '' !!}
                    <input type="hidden" name="id" value="{{ isset($pendidikan) ? $pendidikan->id : ''}}">
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Pendidikan <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="pendidikan" id="pendidikan" minlenght="5" value="{{ isset($pendidikan) ? $pendidikan->pendidikan : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="cname" class="control-label col-lg-2">Gelar <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="gelar" id="gelar" minlenght="2" value="{{ isset($pendidikan) ? $pendidikan->gelar : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="tahun_masuk" id="tahun_masuk" value="{{ isset($pendidikan) ? $pendidikan->tahun_masuk : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="require">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" type="text" name="tahun_lulus" id="tahun_lulus" value="{{ isset($pendidikan) ? $pendidikan->tahun_lulus : ''}}" require />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a href="{{ route('pendidikan.index') }}"><button class="btn btn-default" type="button">Cancel</button></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!--/.row-->
    </section>
</section>
@endsection
@push('content-css')
<link href="{{asset('backend/css/bootstrap-datepicker.css')}}" rel="stylesheet"/ />
@endpush
@push('content-js')
<script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript">
  $('#tahun_masuk').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
  $('#tahun_lulus').datepicker({
    format: "yyyy",
    viewMode: "years",
    minViewMode: "years"
  });
</script>
@endpush
