@extends('layouts.main')
@section('title' , 'Contact')
@section('page' , 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form action="/send-message" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control myinput" id="email" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone number</label>
                    <input name="mobile" type="tel" class="form-control myinput" id="phone" placeholder="+98**********">
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full name</label>
                    <input name="fullName" type="text" class="form-control myinput" id="fullName" placeholder="Full Name">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Enter your message</label>
                    <textarea name="message" class="form-control" id="message" rows="3" placeholder="Write Your Message Here ..."></textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Submit" class="btn btn-info mysub" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="container " id="messageArea">
    <div class="row justify-content-center">
        <div class="col-6">
            @foreach ($messages as $message)
            {{ $message->fullName }}<br>
            {{ $message->moible }}<br>
            {{ $message->message }}
            <a href="/edit-message/{{ $message->id }}">Edit</a>
            <form method="POST" action="/delete-messages/{{ $message->id }}" >
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection