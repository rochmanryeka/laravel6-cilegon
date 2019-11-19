@extends('layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 offset-sm-2">
                <form action="{{ route('blog.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Tulis judul" value="{{ old('judul') }}">
                        @error('judul')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori" id="kategori" class="form-control">
                            <option disabled selected>Pilih Kategori</option>
                            <option {{ old('kategori')=='Berita'?'selected':'' }} value="Berita">Berita</option>
                            <option {{ old('kategori')=='Edukasi'?'selected':'' }} value="Edukasi">Edukasi</option>
                            <option {{ old('kategori')=='Game'?'selected':'' }} value="Game">Game</option>
                            <option {{ old('kategori')=='Olahraga'?'selected':'' }} value="Olahraga">Olahraga</option>
                        </select>
                        @error('kategori')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea id="konten" name="content" class="form-control" placeholder="Tulis konten">{{ old('content') }}</textarea>
                        @error('content')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ route('blog') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        /* Style here */
    </style>
@endsection