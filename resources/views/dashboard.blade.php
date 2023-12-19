<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hudi Market
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-solid border rounded-lg overflow-hidden w-full">
                        <thead>
                          <tr>
                            <th class="p-3 bg-gray-300">Gambar</th>
                            <th class="p-3 bg-gray-300">Nama</th>
                            <th class="p-3 bg-gray-300">Harga</th>
                            <th class="p-3 bg-gray-300">Deskripsi</th>
                            <th class="p-3 bg-gray-300">Checkout</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($Markets as $M)
                                <tr>
                                    <td class="p-3">
                                        <img src="{{ Storage::url($M->photo) }}" alt="{{ $M->name }}">
                                    </td>
                                    <td class="p-3">{{ $M->name }}</td>
                                    <td class="p-3">Rp {{ $M->price }}</td>
                                    <td class="p-3">{{ $M->desc }}</td>
                                    <td class="p-3">
                                        <button class="bg-blue-500 text-white px-4 py-2 rounded">
                                            <a href="{{ route('market.checkout', $Market->id) }}">Beli</a>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        .p-3 img {
            width: 8vw;
        }
    </style>
</x-app-layout>
