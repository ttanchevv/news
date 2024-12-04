<!-- Карти (долна секция)
<section class="container mx-auto my-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach (range(1, 4) as $i)
        <div class="bg-white p-6 shadow-md rounded-lg text-center">
            <h3 class="text-xl font-bold mb-2">Card {{ $i }}</h3>
            <p class="text-gray-600">Description for card {{ $i }} goes here.</p>
        </div>
    @endforeach
</section>
-->

<!-- Футър -->
<footer class="sticky top-[100vh] bg-gray-800 text-white text-center py-6">
    <p>&copy; {{ date('Y') }} News Website. All rights reserved.</p>
</footer>
