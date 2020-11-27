@extends('template.base')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Selamat datang di Blog kami</h1>
  <p class="lead">Di blog kami terdapat banyak artikel menarik loh, buruan jangan sampai ketinggalan membaca. Selamat membaca ya.</p>
  <hr class="my-4">
  <p>Blog kami sudah dipercayai di indonesia dan dijamin kebenarannya.</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/artikel')}}" role="button">Mulai Membaca</a>
</div>

@endsection