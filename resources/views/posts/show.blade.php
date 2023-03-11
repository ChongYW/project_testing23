@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img class="w-100" src="/storage/{{ $post -> image }}">
        </div>

        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img class="rounded-circle w-100" style="max-width: 40px;" src="{{ $post -> user -> profile -> profileImage() }}">
                    </div>

                    <div>
                        <div class="fw-bold">
                            <a href="/profile/{{ $post -> user -> id }}">{{ $post -> user -> username }}</a>
                            <a class="ps-3" href="#">Follow</a>
                        </div>
                    </div>

                </div>

                <hr>

                <p>
                    <span class="fw-bold">
                        <a href="/profile/{{ $post -> user -> id }}">{{ $post -> user -> username }}</a>
                    </span>
                    {{ $post -> caption }}</p>

            </div>
        </div>

    </div>
</div>
@endsection
