<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartment;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Apartments extends Component
{
    use WithPagination;

    public $search = '';
    public $sortDirection = 'asc';
    public $sortField = 'title';
    public $sort;

    public function sortBy(){
        $sorting = explode('|', $this->sort);
        $this->sortField = $sorting[0];
        $this->sortDirection = $sorting[1];

    }

    public function deleteApartment($apartment_id){
        $apartment = Apartment::find($apartment_id);
        foreach(json_decode($apartment->image->name) as $image){
            if(file_exists(public_path('storage/images/'.$image))){
                unlink(public_path('storage/images/'.$image));
            }
        }
        $apartment->image->delete();
        $apartment->delete();
    }

    public function render()
    {
        return view('livewire.apartments', [
            'apartments' =>  Apartment::where('title', 'like', "%$this->search%")
                                        ->orWhere('location', 'like', "%$this->search%")
                                        ->orderBy($this->sortField, $this->sortDirection)
                                        ->paginate(10)
        ])->layout('livewire.layouts.app');
    }
}
