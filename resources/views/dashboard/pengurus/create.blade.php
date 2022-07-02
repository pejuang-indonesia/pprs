@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data pengurus</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/pengurus" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control @error('name')
              is-invalid
          @enderror" id="name" name="name" required value="{{ old('name') }}">
          @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="devisi" class="form-label">Devisi</label>
            <select class="form-select" name="devisi">
                @foreach ($devisi as $d)
                    @if(old('devisi') == $d->id)
                        <option value="{{ $d->id }}" selected>{{ $d->name }}</option>
                    @else
                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@endsection
