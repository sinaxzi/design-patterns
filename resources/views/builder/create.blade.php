@extends('layouts.app')

@section('content')
    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Build a Burger
                </h2>
            </header>

            <form action="{{ route('builder.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div>
                        <div>
                            <label  for="name">Enter the name  : </label>
                            <input  type="text" id="name" name="name" />
                        </div>
                        <div>
                            <label for="ingredients">Enter the ingredients  : </label>
                            <input type="text" id="ingredients" name="ingredients"/>
                        </div>
                        <div>
                            <label for="sauce">Enter the sauce  : </label>
                            <input type="text" id="sauce" name="sauce"/>
                        </div>
                    </div>
                </fieldset>
                <br/>
                <div class="mb-6">
                    <button
                        class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                    >
                        Buy
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection