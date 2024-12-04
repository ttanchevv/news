@extends('layouts.layout')
@section('content')
    <main class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-5 gap-6 justify-center">
        <!-- Лявата част (Последни новини) -->
        <div class="md:col-span-4 p-6 shadow-2xl rounded-lg bg-gray-100">
            <a href="{{ route('home') }}">Начло ></a>{{ $cat->name }}
            <h2 class="text-2xl font-bold mb-4"></h2>
            <ul class="space-y-4">
                @foreach($items as $article)
                    <div class="relative flex flex-col my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96">
                        <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                            <img src="{{ asset('images/'.$article->news_img) }}" />
                        </div>
                        <div class="p-4">
                            <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                                {{ Str::words($article->title, 10) }}
                            </h6>
                            <p class="text-slate-600 leading-normal font-light">
                                {{ Str::words($article->content, 25) }}
                            </p>
                        </div>
                        <div class="px-4 pb-4 pt-0 mt-2">
                            <button class="rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                Read more
                            </button>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
        <!-- Дясната част (Категории) -->
        <aside class="md:col-span-1 bg-white p-6 shadow-2xl rounded-lg">
            <h2 class="text-2xl font-bold mb-4">Categories</h2>
            <ul class="space-y-2">
                @foreach ($cats as $category)
                    <li>
                        <a href="{{route('showCat', ['id'=>$category->id])}}" class="text-blue-600 hover:underline">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </main>
@endsection
