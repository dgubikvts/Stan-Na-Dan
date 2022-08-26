<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartment;


class ShowApartment extends Component
{
    public Apartment $apartment;

    public $selectedDates = ['asd', 'asd'];

    public $takenDates = '';

    public function addTakenDates(){
        if($this->selectedDates){
            $this->apartment->takenDates ?
                $this->apartment->takenDates = json_encode(array_merge(json_decode($this->apartment->takenDates, true), $this->selectedDates))
                :
                $this->apartment->takenDates = json_encode($this->selectedDates);
            $this->apartment->save();
        }
    }

    public function render()
    {
        if($this->apartment->takenDates) $this->takenDates = $this->apartment->takenDates;
        return view('livewire.show-apartment')->layout('livewire.layouts.app');
    }
}