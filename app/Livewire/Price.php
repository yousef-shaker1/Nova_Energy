<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Price as price_model;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Price extends Component
{
    use WithPagination, WithFileUploads;
    public $id, $img, $name, $points_required;
    public function render()
    {
        $prices = price_model::paginate(10);
        return view('livewire.price', compact('prices'));
    }

    public function rules(){
        return [
            'img' => 'required|image',
            'name' => 'required|min:2|max:20',
            'points_required' => 'required|numeric',
        ];
    }
    public function updateRules(){
        return [
            'img' => 'nullable',
            'name' => 'nullable|min:2|max:20',
            'points_required' => 'nullable|numeric',
        ];
    }

    public function updated($fields){
        return $this->validateOnly($fields);
    }

    public function savePrice(){
        $validateData = $this->validate();
        $path = $this->img->store('price', 'public');

        price_model::create([
            'img' => $path,
            'name' => $validateData['name'],
            'points_required' => $validateData['points_required'],
        ]);
        session()->flash('success', 'price created Successfully');
        $this->resetInput();
        $this->dispatch('close-modal');
    }

    public function editPrice($id){
        $price = price_model::find($id);
        if($price){
            $this->id = $price->id;
            $this->img = $price->img;
            $this->name = $price->name;
            $this->points_required = $price->points_required;
        } else {
            return redirect()->back();
        }
    }

    public function updatePrice(){
        $validateData = $this->validate($this->updateRules());
        $price = price_model::find($this->id);
        if ($this->img instanceof UploadedFile) {
            // Delete the old image if it exists
            if (!empty($price->img) && Storage::disk('public')->exists($price->img)) {
                Storage::disk('public')->delete($price->img);
            }
    
            // Store the new image
            $path = $this->img->store('price', 'public');
            $price->img = $path;
        }
        
        // Update section name
        $price->name = $validateData["name"];
        $price->points_required = $validateData['points_required'];

        $price->save();
    
        session()->flash('success', 'Price updated Successfully');
        $this->dispatch('close-modal');
    }

    public function closeModal()
    {
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->img = '';
        $this->name = '';
        $this->points_required = '';
    }


    public function loadPriceData($id)
    {
        $price = price_model::find($id);
    
        if ($price) {
            $this->id = $price->id;
            $this->name = $price->name; 
        } else {
            session()->flash('error', 'Price not found.');
        }
    }
    

    public function destroyPrice(){
        $price = price_model::find($this->id);
        if (!empty($price->img) && Storage::disk('public')->exists($price->img)) {
            Storage::disk('public')->delete($price->img);
        }
        $price->delete();
        session()->flash('delete', 'Price deleted Successfully');
        $this->dispatch('close-modal');
    }

}
