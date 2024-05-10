@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 flex flex-col items-center">
        <div class="flex items-center justify-center">
            <img src="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_ce93aeeda2bfa4101b4e4631768700ce/chatbot.png"
                alt="Chatbot logo" class="h-16 w-auto" />
        </div>
        <form action="{{ route('gemini.store') }}" method="post" class="flex flex-col space-y-4 max-w-sm mx-auto"> @csrf
            <label for="search-term" class="text-sm font-medium">Descubra os melhores hotéis da cidade</label>
            <input type="text" name="search" placeholder="Quais os melhores hotéis de(o)..."
                class="rounded-md border border-gray-300 px-4 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 font-medium">
                Enviar
            </button>
        </form>

        @if (session('message'))
            <div class="md:w-[580px] mx-auto mt-7 flex w-[92%] bg-white shadow-md rounded px-8 pt-8 pb-8 mb-4">
                {{ session('message') }}
            </div>
        @endif
    </div>
@endsection
