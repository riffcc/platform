@extends('layout.default')

@section('content')
    <div class="container-fluid">
        @include('blocks.featured')
        <p></p>
        @if (!auth()->user()->chat_hidden)
            <div id="vue">
                @include('blocks.chat')
            </div>
        @endif
        @include('blocks.poll')
        @include('blocks.top_torrents')
        @include('blocks.news')
        @include('blocks.latest_posts')
        @include('blocks.online')
    </div>
@endsection
