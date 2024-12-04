
@extends('layouts.layout')

@section('content')


    <div class="container mx-0 mt-1">



            <!-- Основен контейнер за новината -->
        <p class="text-sm text-gray-500">
            <a href="{{ route('home') }}">Начало</a> >
            <a href="{{ route('showCat', ['id'=>$catName->id]) }}">{{ $catName->name }}</a> >
            {{ $news->title }}
        </p>
            <article class="grid-cols-1 bg-white shadow-md rounded-lg overflow-hidden p-6">
                <!-- Заглавие на новината -->
                <h1 class="text-center text-2xl font-bold text-blue-700 mb-4">{{ $news->title }}</h1>
                <!-- Дата на публикацията -->
                <p class="text-sm text-gray-500 mb-6">
                    Публикувана преди: <span class="font-semibold">{{ $timeAgo }}</span> |
                    Автор: <span class="font-semibold">{{ $username->name }}</span> |
                    Карегория:<span class="font-semibold"><a href="{{route('showCat', ['id'=>$catName->id])}}">{{ $catName->name }}</a></span>
                </p>

                <!-- Съдържание на новината -->
                <div class="mx-10 col-span-2">
                    <img class="float-left p-2 h-48 w-48" src="../images/{{$news->news_img}}"  alt="">

                    <p class="text-justify">
                        {{$news->content}}
                    </p>
                </div>
            </article>
    </div>



@endsection
