<?php

namespace App\Http\Livewire\Admin;

use App\Enums\Roles;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        return view('livewire.admin.users', [
            'users' => User::where('role_id', Roles::USER)->when($this->search !== '', fn ($q) => $q->where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->orWhere('phone', 'like', '%' . $this->search . '%'))->paginate(10)
        ]);
    }
}
