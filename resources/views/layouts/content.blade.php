<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
    @foreach($newsWithTimeAgo  as $article)
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="relative">
                <img class="w-full h-48 object-cover" src="../images/{{$article->news_img}}" alt="">
                <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">
                    {{ $article->categoryName->name }}
                </div>
                <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">
                    {{ $article->timeAgo }}
                </div>
            </div>
            <div class="p-4">
                <div class="text-lg font-medium text-gray-800 mb-2">
                    <a href="{{ route('showNews', ['id'=>$article->id]) }}">
                        {{ $article->title }}
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
