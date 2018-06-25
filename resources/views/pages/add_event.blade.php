@extends('layouts.default',['title'=>'Add_event'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">

                <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group {{$errors->has('title')? 'has-error':''}}">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               required="required" value="{{old('title')}}">

                        {!! $errors->first('title','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{$errors->has('description')? 'has-error':''}}">
                        <label for="description" class="control-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description"
                               required="required" value="{{old('description')}}">

                        {!! $errors->first('description','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{$errors->has('image')? 'has-error':''}}">
                        <label for="image" class="control-label">{{__('messages.image')}}</label>
                        <input type="file" value="{{old('image')}}" id="image" name="image">

                        {!! $errors->first('image','<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{$errors->has('video')? 'has-error':''}}">
                        <label for="video" class="control-label">Vidéo</label>
                        <input type="file" value="{{old('video')}}" id="video" name="video">

                        {!! $errors->first('video','<span class="help-block">:message</span>') !!}
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Créer &raquo;
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection