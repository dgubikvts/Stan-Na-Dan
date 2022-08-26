<section class="h-full gradient-form bg-gray-200 md:h-screen">
  <div class="py-12 px-6 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
      <div class="sm:w-2/3 md:w-1/2 lg:w-1/2 xl:w-1/3 2xl:w-1/4">
        <div class="block bg-white shadow-lg rounded-lg">
          <div class="lg:flex lg:flex-wrap g-0">
            <div class="lg:w-full px-4 md:px-0">
              <div class="md:p-12 md:mx-6">
                <div class="text-center">
                  <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Admin panel login</h4>
                </div>
                @if(session()->has('message'))
                <span class="text-red-500 text-xs">{{session('message')}}</span>
                @endif
                <form wire:submit.prevent="login">
                  <p class="mb-4">Unesite email i lozinku</p>
                  <div class="mb-4">
                    <input
                      type="email"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      placeholder="E-mail"
                      wire:model.lazy="form.email"
                    />
                    @error('form.email') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
                  </div>
                  <div class="mb-4">
                    <input
                      type="password"
                      class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                      placeholder="Lozinka"
                      wire:model.lazy="form.password"
                    />
                    @error('form.password') <span class="text-red-500 text-xs">{{$message}}</span> @enderror
                  </div>
                  <div class="text-center pt-1 mb-12 pb-1">
                    <button
                      class="inline-block px-6 py-2.5 text-blue-700 border border-blue-700 font-medium text-xs leading-tight uppercase rounded shadow-md hover:border-white hover:text-white hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                      type="submit"
                      >
                      Prijava
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>