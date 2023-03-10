@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile/{{ $user -> id }}">Profile</a>
</div>
@endsection
