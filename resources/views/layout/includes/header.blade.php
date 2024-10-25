<header class='w-full py-6 border-b border-gray-800' id='header'>
  <div class='container mx-auto flex items-center justify-between'>
    <div class='flex items-center gap-10'>
      <a class='text-gray-400' href='/'>
        VOLGASHOT
      </a>
      <nav class='hidden md:block'>
        <menu class='flex items-center '>
          <li class='inline-flex gap-5'>
          <a class='hover:text-indigo-600' href="/product">Категории</a>
            @foreach ($categories as $category)
              <a class='hover:text-indigo-600' href="{{route('product.category', $category->slug)}}">{{$category->name}}</a>
            @endforeach
          </li>
        </menu>
      </nav>
    </div>
    <div class='flex items-baseline gap-5'>
      <a target="blank" href='https://www.ozon.ru/seller/volgashot-2290576/' class='px-4 py-2 border border-gray-800 bg-white/5 rounded-md text-center hover:bg-indigo-600 md:block xxs:hidden'>
        Ozon
      </a>
      <a target="blank" href='https://market.yandex.ru/business--volgashot/157927988' class='px-4 py-2 border border-gray-800 bg-white/5 rounded-md text-center hover:bg-indigo-600 md:block xxs:hidden'>
        Яндекс Маркет
      </a>
    </div>
  </div>
</header>
