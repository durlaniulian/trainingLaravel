@extends('templates.default')

@section('content')
    <form action="{{route('mailing.create')}}" method="POST">
    <input type="text" name="email" value="{{old('email')}}">
        <input  type="submit">
        {{csrf_field() }}
    </form>
    @if($errors->has('email'))
    <div>{{$errors->first('email')}}</div>
    @endif
    @if (session('status'))
        <div> Mesaj trimis </div>
        <div> {{session('status')}}</div>
    @endif

    @if($posts->count())
        @foreach($posts as $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
            <p>{{$post->created_at->format('H:i')}}</p>
            <p>{{$post->getFullText()}}</p>
        @endforeach
        @else
        <p>No posts</p>
    @endif

@endsection
