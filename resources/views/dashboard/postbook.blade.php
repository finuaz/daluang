@extends('layouts.app')

@section('content')


    <h1>PostBook</h1>

    <h3>Form buat mengisi buku</h3>

    {!! Form::open(['action' => 'BookController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        //
        <div class="form-group" >
            {{Form::label('title', 'title')}}
            {{Form::text('title', "", ['class'=>'form-control', 'placeholder'=> 'Title'])}}
                {{-- error notification --}}
                @if($errors->has('description'))
                    <div class="text-danger">
                        {{ $errors->first('description')}}
                    </div>
                @endif
        </div>
        <div class="form-group">
                {{Form::label('body', 'body')}}
                {{-- <div class="editor"> --}}
                {{Form::textarea('body', "",  [ 'class'=>'form-control editor', 'placeholder'=> 'Body text'])}}
                    {{-- ckeditor --}}


                {{-- error notification --}}
                @if($errors->has('description'))
                            <div class="text-danger">
                                {{ $errors->first('description')}}
                            </div>
                @endif
                        {{-- </div> --}}
        </div>

        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>


        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit">
        </div>
    {!! Form::close() !!}


    <button onclick=location.href="/">Index</button>
@endsection

