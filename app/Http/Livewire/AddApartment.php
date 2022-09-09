<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\Amenity;
use Livewire\Component;
use App\Models\Apartment;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;

class AddApartment extends Component
{
    use WithFileUploads;

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

    public function addApartment(){
        $this->validate([
            'form.title' => 'required|max:100',
            'form.desc' => 'required|max:250',
            'form.price' => 'required|gte:1',
            'form.location' => 'required|max:250',
            'form.beds' => 'required|gte:1|lte:20',
            'form.bedrooms' => 'required|gte:1|lte:20',
            'images' => 'required|min:5|max:30'
        ]);

        foreach($this->images as $image){
            if($image->getSize() > 4194304) return session()->flash('message', 'Slika ne sme da ima vise od 4MB!');
            $file_name_exploded = explode('.', $image->getClientOriginalName());
            if(!in_array($file_name_exploded[count($file_name_exploded)-1], $this->extensions)) return session()->flash('message', 'Slike moraju biti png, jpg ili jpeg tipa!');
        }
        $apartment = Apartment::create([
            'title' => $this->form['title'],
            'desc' => $this->form['desc'],
            'price' => $this->form['price'],
            'location' => $this->form['location'],
            'beds' => $this->form['beds'],
            'bedrooms' => $this->form['bedrooms'],
            'wifi' => $this->form['wifi'],
            'hairdryer' => $this->form['hairdryer'],
            'heating' => $this->form['heating'],
            'ac' => $this->form['ac'],
            'hot_tub' => $this->form['hot_tub'],
            'smoking' => $this->form['smoking'],
            'balcony' => $this->form['balcony'],
            'smoke_detector' => $this->form['smoke_detector'],
            'pets' => $this->form['pets'],
            'coffee_maker' => $this->form['coffee_maker']
        ]);
        $Imgdata = [];
        foreach($this->images as $image){
            $file_name = Carbon::now()->timestamp . $image->getClientOriginalName();
            if(in_array($file_name, $Imgdata)) $file_name = '(Copy)' . $file_name;
            $image->storeAs('public/images/'.$apartment->id, $file_name);
            $Imgdata[] = $file_name;
        }
        Image::create([
            'apartment_id' => $apartment->id, 
            'name' => json_encode($Imgdata)
        ]);
        return redirect()->route('show-apartment', $apartment->id);
    }

    
    public function render()
    {
        return view('livewire.add-apartment');
    }
}
