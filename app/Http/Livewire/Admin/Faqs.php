<?php

namespace App\Http\Livewire\Admin;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Faqs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.faqs', [
            'faqs' => Faq::paginate(10)
        ]);
    }
}
