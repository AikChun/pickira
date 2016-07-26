@extends('layout')

@section('styles.header')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
@endsection

@section('content')
  <div class="row">
  <div class="col-md-3">

    <h1>{!! $flyer->street !!}</h1>
    <h2>{!! $flyer->price !!}</h2>

    <hr>

    <div class="description">{!! nl2br($flyer->description)!!}</div>

  </div>
  <div class="col-md-9">
    @foreach($flyer->photos as $photo)
      <img src="{{ $photo->path }}" alt="">
    @endforeach
  </div>
</div>

<hr>
<form id="addPhotosForm" class="dropzone" action="{{ route('store_photos', [$flyer->zip, $flyer->street]) }}" method="POST">
  {{ csrf_field() }}
</form>

@endsection

@section('scripts.footer')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
  <script>

    Dropzone.options.addPhotosForm = {
      paramName: 'photo',
      maxFileSize: 3,
      acceptedFiles: ".jpg, .jpeg, .png, .bmp"
    };
  </script>
@endsection

