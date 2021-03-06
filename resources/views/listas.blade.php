@extends('layouts.default')

@section('content')

<section class="text-gray-600 overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/800x450">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">minhas listas</h1>
                <p class="leading-relaxed"> Descrição do Alimento</p>
               
                <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                    <span class="title-font font-medium text-2xl text-gray-900">valor calorico</span>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection