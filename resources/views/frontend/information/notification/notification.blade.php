@extends('frontend.master')
@section('content')

<section class="mainer">
    <article class="container mb30">
        <h2 class="tt-ss tt-md">Thông báo</h2>
        <div class="list-notice clearfix mb20">
            @foreach($notification as $vt_notification)
            <div class="block">
                <span class="icon"></span>
                <a href="{{route('detail_notification',$vt_notification->slug)}}" title="{{$vt_notification->title}}">{{$vt_notification->title}}</a>
            </div>
            @endforeach
        </div>
    </article>
</section>
@endsection