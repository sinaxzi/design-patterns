@extends('layouts.app')

@section('content')
    <div >
        <div
            class="bg-gray-50 border border-gray-200 p-5 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    burger name is : {{ $burger->name }}
                </h2>
                <h2 class="text-2xl font-bold uppercase mb-1">
                    it has this ingredients : {{ $burger->ingredients }}
                </h2>
                <h2 class="text-2xl font-bold uppercase mb-1">
                    and this sauce : {{ $burger->sauce }}
                </h2>
            </header>
        </div>
    </div>
@endsection