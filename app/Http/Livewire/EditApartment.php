<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Apartment;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;
use Carbon\Carbon;

class EditApartment extends Component
{
    use WithFileUploads;

    public Apartment $apartment;

    public $images;
    public $moreImages;
    public $form = [
        'title' => '',
        'desc' => '',
        'price' => '',
        'location' => '',
        'beds' => '',
        'bedrooms' => '',
        'wifi' => '',
        'hairdryer' => '',
        'heating' => '',
        'ac' => '',
        'hot_tub' => '',
        'smoking' => '',
        'balcony' => '',
        'smoke_detector' => '',
        'pets' => '',
        'coffee_maker' => ''
    ];
    public $extensions = ['png', 'jpg', 'jpeg'];

    public function mount(){
        foreach($this->form as $key=>$value){
            $this->form[$key] = $this->apartment->$key;
        }
        $this->images = json_decode($this->apartment->image->name);
    }

    public function updatedMoreImages(){
        if (count($this->images) + count($this->moreImages) > 30) {
            return session()->flash('message', 'Najvise 30 slika je dozvoljeno');
        }
        else{
            $this->images = array_merge($this->images, $this->moreImages);
            $this->moreImages = '';
        }
    }

    public function removeImage($index)
    {
        array_splice($this->images, $index, 1);
    }

    public function saveChanges(){
        $this->validate([
            'form.title' => 'required|max:100',
            'form.desc' => 'required|max:250',
            'form.price' => 'required|gte:1',
            'form.location' => 'required|max:250',
            'form.beds' => 'required|gte:1|lte:20',
            'form.bedrooms' => 'required|gte:1|lte:20',
            'images' => 'required|min:5|max:30'
        ]);

        for($i = 0; $i < count($this->images); $i++){
            if(gettype($this->images[$i]) !== 'string'){
                if($this->images[$i]->getSize() > 4194304) return session()->flash('message', 'Slika ne sme da ima vise od 4MB!');
                $file_name_exploded = explode('.', $this->images[$i]->getClientOriginalName());
                if(!in_array($file_name_exploded[count($file_name_exploded)-1], $this->extensions)) return session()->flash('message', 'Slike moraju biti png, jpg ili jpeg tipa!');
                $file_name = Carbon::now()->timestamp . $this->images[$i]->getClientOriginalName();
                if(in_array($file_name, $this->images)) $file_name = '(Copy)' . $file_name;
                $this->images[$i]->storeAs('public/images/'.$this->apartment->id, $file_name);
                $this->images[$i] = $file_name;
            }
        }
    
        $this->apartment->image->name = json_encode($this->images);
        $this->apartment->image->save();
        foreach($this->form as $key=>$value){
            $this->apartment->$key = $this->form[$key];
        }
        $this->apartment->save();
        return redirect()->route('show-apartment', $this->apartment->id);
    }

    public function render()
    {
        return view('livewire.edit-apartment')->layout('livewire.layouts.app');
    }
}
