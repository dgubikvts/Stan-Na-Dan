<div>
    @include('livewire.layouts.header')
    <form class="w-1/2 flex flex-col bg-white m-auto shadow-xl rounded p-5 mt-2" method="post" enctype="multipart/form-data" wire:submit.prevent="addApartment">
        <h2 class="text-3xl text-center mb-5">Dodaj novi stan</h2>
        <div class="flex justify-around mb-8 ">
            <div class="flex flex-col w-5/6">
                <label for="title" class="mb-3">Naziv:</label>
                <input type="text" name="title" wire:model="form.title" class="rounded p-2 border hover:shadow focus:shadow-lg focus:outline-none">
                @error('form.title') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-col w-1/3 mb-3">
                <label for="price" class="mb-3">Cena po nocenju:</label>
                <div class="flex">
                    <input type="text" name="price" wire:model="form.price" class="rounded p-2 w-full border hover:shadow focus:shadow-lg focus:outline-none" min="1">
                    <p class="self-center ml-2">€</p>
                </div>
                @error('form.price') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col w-1/3 mb-3">
                <label for="location" class="mb-3">Adresa:</label>
                <input type="text" name="location" wire:model="form.location" class="rounded p-2 border hover:shadow focus:shadow-lg focus:outline-none">
                @error('form.location') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="w-full flex flex-col items-center">
            <div class="flex flex-col w-5/6 mb-3">
                <label for="desc" class="mb-3">Opis:</label>
                <textarea name="desc" wire:model="form.desc" cols="30" rows="5" class="rounded p-2 border hover:shadow focus:shadow-lg focus:outline-none"></textarea>
                @error('form.description') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-col w-1/3 mb-3">
                <label for="beds" class="mb-3">Broj kreveta:</label>
                <input type="number" name="beds" wire:model="form.beds" class="rounded p-2 border hover:shadow focus:shadow-lg focus:outline-none" min="1" max="20">
                @error('form.beds') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-col w-1/3 mb-3">
                <label for="bedrooms" class="mb-3">Broj spavacih soba:</label>
                <input type="number" name="bedrooms" wire:model="form.bedrooms" class="rounded p-2 border hover:shadow focus:shadow-lg focus:outline-none" min="1" max="20">
                @error('form.bedrooms') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="wifi">WiFi:</label>
                <input type="checkbox" name="wifi" wire:model="form.wifi" class="rounded border h-4 w-4 hover:shadow ml-6">
                @error('form.wifi') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="hairdryer" class="ml-auto">Fen za kosu:</label>
                <input type="checkbox" name="hairdryer" wire:model="form.hairdryer" class="rounded border h-4 w-4 hover:shadow ml-6 ml-auto">
                @error('form.hairdryer') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="heating">Grejanje:</label>
                <input type="checkbox" name="heating" wire:model="form.heating" class="rounded border h-4 w-4 hover:shadow ml-6">
                @error('form.heating') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="ac" class="ml-auto">Klima:</label>
                <input type="checkbox" name="ac" wire:model="form.ac" class="rounded border h-4 w-4 hover:shadow ml-6 ml-auto">
                @error('form.ac') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="hot_tub">Djakuzi:</label>
                <input type="checkbox" name="hot_tub" wire:model="form.hot_tub" class="rounded border h-4 w-4 hover:shadow ml-6">
                @error('form.hot_tub') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="smoking" class="ml-auto">Pusenje unutra:</label>
                <input type="checkbox" name="smoking" wire:model="form.smoking" class="rounded border h-4 w-4 hover:shadow ml-6 ml-auto">
                @error('form.smoking') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="balcony">Terasa:</label>
                <input type="checkbox" name="balcony" wire:model="form.balcony" class="rounded border h-4 w-4 hover:shadow ml-6">
                @error('form.balcony') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="smoke_detector" class="ml-auto">Detektor dima:</label>
                <input type="checkbox" name="smoke_detector" wire:model="form.smoke_detector" class="rounded border h-4 w-4 hover:shadow ml-6 ml-auto">
                @error('form.smoke_detector') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        <div class="flex justify-around mb-8">
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="pets">Kucni ljubimci:</label>
                <input type="checkbox" name="pets" wire:model="form.pets" class="rounded border h-4 w-4 hover:shadow ml-6">
                @error('form.pets') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
            <div class="flex flex-row items-center w-1/3 mb-3">
                <label for="coffee_maker" class="ml-auto">Aparat za kafu:</label>
                <input type="checkbox" name="coffee_maker" wire:model="form.coffee_maker" class="rounded border h-4 w-4 hover:shadow ml-6 ml-auto">
                @error('form.coffee_maker') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
            </div>
        </div>
        @if(session()->has('message'))
        <div class="w-full flex justify-center mt-3">
            <div class="w-5/6">
                <span class="text-red-500">{{session('message')}}</span>
            </div>
        </div>
        @endif
        @if(!$images)
        <div class="w-full flex flex-col items-center mt-3">
            <div class="flex flex-col w-5/6 mb-3">
                @error('images') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
                <label for="images" class="mb-3">Dodaj slike stana:</label>
                <input type="file" name="images[]" accept="image/*" wire:model="images" multiple />
            </div>
        </div>
        @else
        <div class="w-full flex flex-col items-center mt-3">
            <div class="flex flex-col w-5/6 mb-3">
                @error('images') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
                <label for="images" class="mb-3">Dodaj slike stana:</label>
                <input type="file" name="moreImages[]" accept="image/*" wire:model="moreImages" multiple />
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 w-5/6 self-center mt-3">
            @foreach($images as $image)
            <div wire:key="{{$loop->index}}" class="flex flex-col p-4 border border-black rounded">
                <img src="{{$image->temporaryUrl()}}" class="mb-3">
                <button type="button" wire:click="removeImage({{$loop->index}})" class="bg-red-600 mt-auto self-end justify-self-end rounded text-white w-full">Obrisi sliku</button>
            </div>
            @endforeach
        </div>      
        @endif
        @if(!$images)
        <button type="submit" class="bg-blue-600 text-white text-xl p-2 rounded w-5/6 self-center mt-8" wire:loading.attr="disabled" wire:loading.class="bg-gray-600" wire:target="images">Dodaj stan</button>
        @else
        <button type="submit" class="bg-blue-600 text-white text-xl p-2 rounded w-5/6 self-center mt-8" wire:loading.attr="disabled" wire:loading.class="bg-gray-600" wire:target="moreImages">Dodaj stan</button>
        @endif
    </form>
</div>