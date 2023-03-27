@extends('layout')
@section('title') Main Title 3 @endsection
@section('review')
<h1>Форма отзывов</h1>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="/review/check" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="Email" class="form-control"><br>
        <input type="text" name="subject" id="subject" placeholder="Введите Отзыв"class="form-control"><br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите Сообщение" cols="30" rows="10"></textarea><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    <h1>Отзывы</h1>
    @foreach($data as $a)
        <div class="alert alert-warning">
            <h3>{{$a->subject}}</h3>
            <b>{{$a->email}}</b>
            <p>{{$a->message}}</p>
        </div>
    @endforeach
@endsection
