<div class="">
    @include('livewire.layouts.show-apartment-header')
    @section('title', $apartment->title)
    <div class="flex justify-center">
        <div class="w-2/3 flex h-96">
            <div class="w-1/2 flex">
                <img src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[0]) }}" class="w-full object-cover rounded-l-xl">
            </div>
            <div class="grid grid-cols-2 gap-2 w-1/2 pl-2">
                <div class="flex flex-wrap ">
                    <div class="w-full relative">
                        <img alt="gallery" class="w-full h-full absolute object-cover object-center"
                        src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[1]) }}"/>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full relative">
                        <img alt="gallery" class="w-full h-full absolute object-cover object-center rounded-tr-xl "
                        src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[2]) }}"/>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full relative">
                        <img alt="gallery" class="w-full h-full absolute object-cover object-center"
                        src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[3]) }}"/>
                    </div>
                </div>
                <div class="flex flex-wrap">
                    <div class="w-full relative">
                        <img alt="gallery" class="w-full h-full absolute object-cover object-center rounded-br-xl"
                        src="{{ asset('storage/images/'.$apartment->id.'/'.json_decode($apartment->image->name, true)[4]) }}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center my-3">
        <div class="w-2/3 flex">
            <div class="w-2/3 flex flex-col">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-semibold">{{$apartment->title}}</h1>    
                    <p><i class="fa-solid fa-location-dot mr-2"></i>{{$apartment->location}}</p>
                </div>    
                <hr class="my-3">
                <p>{{$apartment->desc}}</p>
                <hr class="my-3">
                <h1 class="text-2xl mb-3">Pogodnosti:</h1>
                <div class="grid grid-cols-2 mt-4">
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-bed mr-4 text-3xl"></i>{{$apartment->beds}} kreveta
                    </div>
                    <div class="flex items-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4" width="30" height="30" viewBox="0 0 24 24"><path d="M18,2H6C4.9,2,4,2.9,4,4v18h16V4C20,2.9,19.1,2,18,2z M15.5,13.5c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5 S17,11.17,17,12S16.33,13.5,15.5,13.5z"/></svg>
                        {{$apartment->bedrooms}} soba
                    </div>
                    @if($apartment->pets)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-paw mr-4 text-2xl"></i>Ljubimci dozvoljeni
                    </div>
                    @endif
                    @if($apartment->smoking)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-smoking mr-4 text-2xl"></i>Pusenje dozvoljeno
                    </div>
                    @endif
                    @if($apartment->wifi)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-wifi mr-4 text-2xl"></i>WiFi
                    </div>
                    @endif
                    @if($apartment->ac)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-snowflake text-2xl mr-4"></i>Klima
                    </div>
                    @endif
                    @if($apartment->heating)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-temperature-full mr-4 text-2xl"></i>Grejanje
                    </div>
                    @endif
                    @if($apartment->smoke_detector)
                    <div class="flex items-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4"  width="30" height="30" viewBox="0 0 448 512"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M384 32H64C28.65 32 0 60.65 0 96v320c0 35.34 28.65 64 64 64h320c35.35 0 64-28.66 64-64V96C448 60.65 419.3 32 384 32zM349.1 305.6C346.2 314.3 337.5 320 328 320h-208c-9.531 0-18.19-5.656-22-14.41C94.19 296.8 95.91 286.7 102.4 279.7l104-112c9.125-9.75 26.06-9.75 35.19 0l104 112C352.1 286.7 353.8 296.8 349.1 305.6z"/></svg>
                        Detektor dima
                    </div>
                    @endif
                    @if($apartment->hot_tub)
                    <div class="flex items-center mb-8">
                        <i class="fa-solid fa-hot-tub-person mr-4 text-2xl"></i>Djakuzi
                    </div>
                    @endif
                    @if($apartment->coffee_maker)
                    <div class="flex items-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4"  width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                        Kafe aparat
                    </div>
                    @endif
                    @if($apartment->balcony)
                    <div class="flex items-center mb-8">
                    <svg class="w-10"xmlns="http://www.w3.org/2000/svg" class="mr-4"  width="30" height="30" viewBox="5 0 24 24"><path d="M10,10v2H8v-2H10z M16,12v-2h-2v2H16z M21,14v8H3v-8h1v-4c0-4.42,3.58-8,8-8s8,3.58,8,8v4H21z M7,16H5v4h2V16z M11,16H9v4h2 V16z M11,4.08C8.16,4.56,6,7.03,6,10v4h5V4.08z M13,14h5v-4c0-2.97-2.16-5.44-5-5.92V14z M15,16h-2v4h2V16z M19,16h-2v4h2V16z"/></svg>
                        Terasa
                    </div>
                    @endif
                    @if($apartment->hairdryer)
                    <div class="flex items-center mb-8">
                        <svg width="30" height="30" class="mr-4"  viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 12.1383C11 12.0592 11.0587 11.9924 11.1371 11.9823L32.0822 9.27971C37.3414 8.60112 42 12.6973 42 18V18C42 23.3027 37.3413 27.3989 32.0822 26.7203L11.1371 24.0177C11.0587 24.0076 11 23.9408 11 23.8617V12.1383Z" stroke="#333" stroke-width="1"/><path d="M11 12L4 8V28L11 24" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/><path d="M38 25L31.3061 40.8981C30.5146 42.7777 28.6738 44 26.6343 44V44C23.0091 44 20.5557 40.3051 21.9625 36.9639L27 25" stroke="#333" stroke-width="1"/><circle cx="35" cy="18" r="9" fill="none" stroke="#333" stroke-width="1"/></svg>
                        Fen za kosu
                    </div>
                    @endif
                </div>
            </div>
            <div class="w-1/3">
                <div x-data="calendar" x-init="[initDates(), getNoOfDays(), fillTakenDates()]" x-cloak class="w-11/12 shadow-xl ml-auto">
                    <div class="bg-white rounded-xl shadow p-4 ">
                        <p class="text-2xl font-semibold mb-3">{{$apartment->price}}€ <span class="text-lg font-light">nocenje</span> </p>
                        <div class="flex justify-between items-center mb-2">
                            <div>
                                <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                            </div>
                            <div>
                                <button 
                                    type="button"
                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                    @click="month--; getNoOfDays()">
                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                    </svg>  
                                </button>
                                <button 
                                    type="button"
                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full" 
                                    @click="month++; getNoOfDays()">
                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>                                      
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-wrap mb-3 -mx-1">
                            <template x-for="(day, index) in DAYS" :key="index">  
                                <div style="width: 14.26%" class="px-1">
                                    <div
                                        x-text="day" 
                                        class="text-gray-800 font-light text-center text-xs">
                                    </div>
                                </div>
                            </template>
                        </div>
                        <div class="flex flex-wrap -mx-1" x-init="$watch('takenDays', value => fillTakenDates())">
                            <template x-for="blankday in blankdays">
                                <div 
                                    style="width: 14.28%"
                                    class="text-center border border-transparent text-sm" 
                                ></div>
                            </template>   
                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">   
                                <div style="width: 14.28%" class="p-2 mb-1 flex justify-center">
                                    <button
                                        @click="setSelectedDate(date)"
                                        x-text="date"
                                        class="text-center rounded-full transition ease-in-out duration-100 px-2 py-1"
                                        :class="!selected ? 
                                            { 'bg-blue-500 text-white opacity-100': isToday(date), 'text-gray-700 hover:bg-blue-200': !isToday(date), 'bg-green-700 text-white': isSelected(date), 'opacity-50 cursor-default': isBeforeToday(date), 'bg-red-600 text-white hover:bg-red-600 opacity-50': isDateTaken(date) } 
                                            : 
                                            { 'bg-green-700 text-white hover:bg-green-800': isInSelected(date), 'bg-red-600 text-white hover:bg-red-600 opacity-50': isDateTaken(date),'opacity-50 cursor-default': isBeforeToday(date), 'text-gray-700 hover:bg-blue-200': !isToday(date), 'bg-green-700 text-white border border-black hover:bg-green-800': isSelected(date), 'bg-blue-500 text-white opacity-100': isToday(date)}"    
                                        :disabled="isDateTaken(date)"
                                        ></button>
                                </div>
                            </template>
                        </div>
                    </div>
                    <template x-if="bothSelected">
                        <div class="flex flex-col justify-center -mt-3 text-lg bg-white rounded-b-xl">
                            @auth
                            <hr>
                            <p class="text-center mt-3">Izabrani datumi: </p>
                            <div class="flex my-3 justify-center">
                                <p x-text="new Date(selectedDates[0]).toLocaleDateString()"></p>
                                <p class="px-2">-</p>
                                <p x-text="new Date(selectedDates[1]).toLocaleDateString()"></p>
                            </div>
                            <div class="p-2">
                                <button @click="$wire.addTakenDates()" class="rounded bg-red-600 border w-full border-black text-white p-2">Dodaj zauzete datume</button>
                            </div>
                            @endauth
                            @guest
                            <hr>
                            <p class="text-center mt-3">Izabrani datumi: </p>
                            <div class="flex my-3 justify-center">
                                <p x-text="new Date(selectedDates[0]).toLocaleDateString()"></p>
                                <p class="px-2">-</p>
                                <p x-text="new Date(selectedDates[1]).toLocaleDateString()"></p>
                            </div>
                            <div class="flex justify-center mb-3">
                                <p>Cena:</p>
                                <p x-text="{{$apartment->price}} * getDays()" class="pl-2"></p>
                                <p>€</p>
                            </div>
                            @endguest
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-3">
        <div class="w-2/3">
        
        </div>
    </div>
    <script>
        const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        const DAYS = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

        var getDaysArray = function(start, end) {
            for(var arr=[],dt=new Date(start); dt<=new Date(end); dt.setDate(dt.getDate()+1)){
                arr.push(new Date(dt));
            }
            return arr;
        };

        document.addEventListener('alpine:init', () => {
            Alpine.data('calendar', () => ({
                selected: false,
                bothSelected: false,
                availableDates: [],
                lastAvailableDate: '',
                taken: false,
                selectedDates: @entangle('selectedDates'),
                month: '',
                year: '',
                no_of_days: [],
                blankdays: [],
                takenDays: @entangle('takenDates'),
                allTakenDates: [],
                allSelectedDates: [],
                
                fillTakenDates(){
                    this.allTakenDates = [];
                    let daysInJson = this.takenDays.length > 0 ? JSON.parse(this.takenDays) : [];
                    for(let i = 0; i < daysInJson.length; i+=2){
                        this.allTakenDates.push.apply(this.allTakenDates, getDaysArray(new Date(daysInJson[i]), new Date(daysInJson[i+1])))
                    }
                    this.allTakenDates.sort(function(a,b){return a.getTime() - b.getTime()});
                    this.selectedDates = [];
                    this.bothSelected = false;
                    this.allSelectedDates = [];
                },
                initDates(){
                    let today = new Date();
                    this.month = today.getMonth();
                    this.year = today.getFullYear();
                },
                isToday(date) {
                    let today = new Date();
                    let d = new Date(this.year, this.month, date);
                    return today.toDateString() === d.toDateString();
                },
                isBeforeToday(date){
                    let today = new Date();
                    let passedDate = new Date(this.year, this.month, date);
                    return today >= passedDate;
                },
                getNoOfDays() {
                    if(this.month > 11){
                        this.month = 0;
                        this.year++;
                    }
                    else if(this.month < 0){
                        this.month = 11;
                        this.year--;
                    }
                    let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();
                    let dayOfWeek = new Date(this.year, this.month).getDay();
                    dayOfWeek > 0 ? dayOfWeek -= 1 : dayOfWeek += 6;
                    let blankdaysArray = [];
                    for ( var i=1; i <= dayOfWeek; i++) {
                        blankdaysArray.push(i);
                    }

                    let daysArray = [];
                    for ( var i=1; i <= daysInMonth; i++) {
                        daysArray.push(i);
                    }

                    this.blankdays = blankdaysArray;
                    this.no_of_days = daysArray;
                },
                getDateFromDay(date){
                    let fullDate = new Date(this.year, this.month, date);
                    return fullDate;
                },
                isDateTaken(date){
                    return this.allTakenDates.find(
                        loopDate => loopDate.getTime() === this.getDateFromDay(date).getTime(),
                    );
                },
                setSelectedDate(date){
                    if(!this.isBeforeToday(date) && !this.isDateTaken(date)){
                        this.bothSelected = false;
                        let convertedDate = this.getDateFromDay(date).toISOString();
                        if(this.selectedDates.length > 1){
                            this.selectedDates = [];
                            this.allSelectedDates = [];
                            this.lastAvailableDate = '';
                            this.selectedDates.push(convertedDate);
                            this.fillSelectedDates();
                            this.selected = true;
                            this.findLastSelectableDate();
                        } 
                        else{
                            if(this.selectedDates[0] > convertedDate){
                                this.selectedDates[0] = convertedDate;
                            }
                            else {
                                if(convertedDate > this.lastAvailableDate && this.lastAvailableDate !== ''){
                                    this.selectedDates[0] = convertedDate;
                                    this.findLastSelectableDate();
                                }
                                else{
                                    this.selectedDates.push(convertedDate);    
                                }
                            }
                            this.fillSelectedDates();
                            this.selected = true;
                            this.findLastSelectableDate();
                        }
                        if(this.selectedDates.length === 2){
                            this.bothSelected = true;
                        }
                    }
                },
                isSelected(date){
                    return this.selectedDates.find(
                        loopDate => new Date(loopDate).getTime() === this.getDateFromDay(date).getTime(),
                    );
                },
                isInSelected(date){
                    return this.allSelectedDates.find(
                        loopDate => loopDate.getTime() === this.getDateFromDay(date).getTime(),
                    );
                },
                fillSelectedDates(){
                    this.allSelectedDates.push.apply(this.allSelectedDates, getDaysArray(new Date(this.selectedDates[0]), new Date(this.selectedDates[1])))
                },
                findLastSelectableDate(){
                    for(let i = 0; i < this.allTakenDates.length; i++){
                        if(this.allTakenDates[i].getTime() > new Date(this.selectedDates[0]).getTime()) {
                            this.lastAvailableDate = this.allTakenDates[i].toISOString();
                            break;
                        }
                        else if(i === this.allTakenDates.length - 1){
                            this.lastAvailableDate = new Date('2030', '11', '31').toISOString();
                            break;
                        }
                    }
                },
                getDays(){
                    let oneDay = 24 * 60 * 60 * 1000;
                    return Math.round(Math.abs((new Date(this.selectedDates[1]) - new Date(this.selectedDates[0])) / oneDay)) + 1;
                }
            }))
        })
      </script>
</div>      