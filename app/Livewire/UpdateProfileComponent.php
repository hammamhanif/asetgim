<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateProfileComponent extends Component
{
    public $name, $email, $username;
    protected $rules = [
        'name' => 'required|min:6',
        'username' => 'required|min:6|',
        'email' => 'required|email:dns|'
    ];

    public function submit()
    {
        $this->validate();

        $data = auth()->user();

        $data->name = $this->name;
        if ($this->email !== $data->email) {
            $data->email = $this->email;
        }
        if ($this->email !== $data->email) {
            $data->email = $this->email;
        }
        $data->save();
        session()->flash('success', 'Profil berhasil diperbarui.');
    }

    public function mount()
    {
        $data = auth()->user();
        $this->name = $data->name;
        $this->username = $data->username;
        $this->email = $data->email;
    }

    public function render()
    {
        return view('livewire.update-profile-component');
    }
}
