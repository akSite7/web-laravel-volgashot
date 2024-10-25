@extends ('layout.master')

@section('content')
<section class='w-full'>
      <div class='mx-auto2xl:pt-0 xl:pb-24 md:container md:py-6 md:pb-16 xxs:pb-10'>
        @if (isset($category))
          <h2 class='pt-8 text-gray-50 font-medium md:text-6xl xxs:text-3xl'>{{$category->name}}</h2>
        @endif
        <p class='text-lg text-gray-500 md:pt-8 sm:pt-5 xs:pt-5 xxs:pt-5 xxs:text-base'>Размеры соответствуют ГОСТ 7837-76 и имеют шаг 0,25 мм <br />Возможность заказа от 2 килограмм.</p>
        <div class='grid pt-8 pb-10 grid-cols-4 2xl:grid-cols-4 2xl:gap-y-20 lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 sm:gap-8 xs:grid-cols-2 xs:gap-8 xxs:grid-cols-2 xxs:gap-5 xxs:pb-0'>
            @foreach ($products as $product)
              <div>
                <img class="rounded-md overflow-hidden" width={700} height={0} src="/storage/{{$product->image}}" alt="{{$product->name}}">             
                <div class='pt-2 text-gray-50 md:text-2xl xxs:text-lg'>{{$product->category->name}}</div>
                <div class='pt-1 max-h-7 text-gray-400 2xl:text-sm xxs:text-xs'>{{$product->description}}</div>
                <div class='text-xl text-gray-400 2xl:pb-5 xs:pt-2 xxs:pt-7 xxs:pb-3'>{{$product->price}}<span class='text-sm text-gray-400'> за 1кг</span></div>
                <a class="w-full px-4 pb-2 pt-[6px] rounded-md font-medium text-center mt-10 bg-indigo-600 text-gray-50" href="{{route('product.show', [$product->category->slug, $product->slug])}}">Перейти</a>
              </div>
            @endforeach
        </div>
      </div>
    </section>
@endsection