<div>
    @include('livewire.layouts.header')
    <div class="flex flex-col items-center my-2">
        <div class="p-5 w-5/6 flex items-end justify-between bg-white mb-2 shadow-sm rounded">
            <div class="w-1/2">
                <input type="search" name="" class="rounded rounded-full p-3 border border-black w-full hover:shadow-md focus:outline-0 focus:border-blue-200 focus:shadow-md" placeholder="Pretraga..." wire:model="search">
            </div>
            <div class="">
                <p>Sortiraj po: </p>
                <select name="" wire:model="sort" wire:change="sortBy" class="border border-black p-1 rounded">
                    <option value="title|asc">Nazivu rastuce &#8593</option>
                    <option value="title|desc">Nazivu opadajuce &#8595</option>
                    <option value="price|asc">Ceni rastuce &#8593</option>
                    <option value="price|desc">Ceni opadajuce &#8595</option>
                </select>
            </div>
        </div>
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-5 flex justify-items-center p-5 w-5/6 bg-white shadow-sm rounded">
        @foreach($apartments as $apartment)
            <div class="sm:max-w-lg lg:max-w-md rounded overflow-hidden flex flex-col flex-1">
                <a class="flex h-72" href="{{route('show-apartment', $apartment->id)}}">
                    <img class="max-h-full max-w-full object-cover rounded-xl" src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[0]) }}">
                </a>
                <div class="py-4 flex flex-col">
                    <a href="{{route('show-apartment', $apartment->id)}}"><p class="font-bold text-xl mb-2">{{$apartment->title}}</p></a>
                    <p class="font-light">{{$apartment->desc}}</p>
                </div>
                <div class="flex flex-col mt-auto">
                    <div>
                        <span class="bg-gray-200 rounded-full px-3 font-semibold text-gray-700 text-sm mr-2">
                            <i class="fa-solid fa-bed mr-2"></i>{{$apartment->beds}}
                        </span>
                        <span class="bg-gray-200 rounded-full px-3 font-semibold text-gray-700 text-sm mr-2">
                            <i class="fa-solid fa-location-dot mr-2"></i>{{$apartment->location}}
                        </span>
                    </div>
                    <p class="text-lg font-semibold pt-2">{{$apartment->price}}€ <span class="font-light">nocenje</span> </p>
                </div>
                @auth
                <div class="flex justify-between my-3">
                    <a href="{{route('edit-apartment', $apartment->id)}}" class="border border-blue-600 rounded px-4 py-1 hover:bg-blue-600 hover:border-white hover:text-white group"><i class="fa-solid fa-pen mr-2 text-blue-600 group-hover:text-white"></i> Izmeni</a>
                    <button wire:click="deleteApartment({{$apartment->id}})" class="border border-red-600 rounded px-4 py-1 hover:bg-red-600 hover:border-white hover:text-white group"><i class="fa-solid fa-trash-can mr-2 text-red-600 group-hover:text-white"></i> Izbrisi</button>
                </div>
                @endauth
            </div>
        @endforeach
        </div>
        @auth
        <div class="mt-4 w-5/6">
            <a href="/admin-panel/add-apartment" class="block bg-green-600 hover:bg-green-700 text-white font-semibold py-3 text-center border border-green-700 rounded ">Dodaj novi stan</a>
        </div>
        @endauth
        {{ $apartments->links() }}
    </div>
</div>