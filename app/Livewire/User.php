<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as user_model;

class User extends Component
{
    public $id, $name, $email, $points;
    use WithPagination;
    public function render()
    {
        $users = user_model::where('role', '["user"]')->paginate(10);
        return view('livewire.user', compact('users'));
    }

    public function loadUserData(){
        $user = user_model::find($this->id);

        if ($user) {
            $this->id = $user->id;
            $this->name = $user->name;
        } else {
            session()->flash('delete', 'User not found.');
        }
    }

    public function destroyUser(){
        $user = user_model::find($this->id);
        $user->delete();
        session()->flash('delete', 'User deleted Successfully');
        $this->dispatch('close-modal');
    }

    public function closeModal(){
        $this->resetInput();
    }

    public function resetInput(){
        $this->id = '';
        $this->name = '';
    }
}
