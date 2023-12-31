<x-layout>
    <section class="px-5 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Login</h1>
            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    <div>
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">
                            Email
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email" value="{{ old('email')}}" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{$message}} </p>
                        @enderror
                    </div>

                    <div>
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">
                            Password
                        </label>
                        <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password" required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{$message}} </p>
                        @enderror
                    </div>

                    <div>
                        <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                                type="submit">
                            Submit
                        </button>
                    </div>
                    <br>
                    <div>
                        <button class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        type="reset">
                            Clear
                        </button>
                    </div>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </main>
    </section>
</x-layout>
