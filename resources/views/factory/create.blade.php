@extends('layouts.app')

@section('content')
    <div class="mx-4">
        <div
            class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
        >
            <header class="text-center">
                <h2 class="text-2xl font-bold uppercase mb-1">
                    Choose a Burger
                </h2>
            </header>

            <form action="{{ route('factory.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div>
                        <div>
                            <input type="radio" id="normal" name="burger" value="normal" />
                            <label for="normal">Normal Burger</label>
                        </div>
                        <div>
                            <input type="radio" id="cheese" name="burger" value="cheese" />
                            <label for="cheese">Cheese Burger</label>
                        </div>
                        <div>
                            <input type="radio" id="mushroom" name="burger" value="mushroom" />
                            <label for="mushroom">Mushroom Burger</label>
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