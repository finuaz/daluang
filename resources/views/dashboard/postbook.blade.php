@extends('layouts.app')

@section('content')


    <h1>PostBook</h1>

    <h3>Form buat mengisi buku</h3>

        <form method="post" action="/dashboard.store">

            {{ csrf_field() }}

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title ...">

                @if($errors->has('title'))
                    <div class="text-danger">
                        {{ $errors->first('title')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" placeholder="Author ...">

                @if($errors->has('author'))
                    <div class="text-danger">
                        {{ $errors->first('title')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" class="form-control" placeholder="Genre ...">

                @if($errors->has('genre'))
                    <div class="text-danger">
                        {{ $errors->first('title')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" placeholder="Description .."></textarea>

                @if($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description')}}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cover_image">Choose a profile picture: </label>

                <input type="file" class="form-control" name="cover_image"
                    accept="image/png, image/jpeg">
            </div>


            {{-- Pending
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
            </div> --}}

        </form>

    <button onclick=location.href="/">Index</button>
@endsection

