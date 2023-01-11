<?php

namespace App\Http\Livewire\Admin;

use App\Models\Subscription;
use Livewire\Component;
use Livewire\WithPagination;

class Subscriptions extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search = '';

    public function render()
    {
        return view('livewire.admin.subscriptions', [
            'subscriptions' => Subscription::with(['user', 'package'])->when($this->search !== '', fn ($q) => $q->where('id', $this->search)->orWhereHas('user', fn ($query) => $query->where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')))->latest()->paginate(10)
        ]);
    }
}
