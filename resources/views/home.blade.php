@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            @foreach ($data as $k)
                <div class="card-body">
                    <h4 class="card-text">{{ $k->title }}</h4>
                    <small class="text-muted">Pembuat {{ $k->detailpenulis->name }}, Email {{ $k->detailpenulis->email }}</small>
                    <p>{{ $k->content }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Selengkapnya ...</button>
                        </div>
                        <small class="text-muted">{{ $k->created_at->format('d M Y') }}</small>
                    </div>
                </div>
            @endforeach

          </div>
        </div>

    </div>
    </div>
  </div>

    </div>
</div>
@endsection
