<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class Categorysearch extends Component
{
    use WithPagination;

    public $searchTerm = '';

    protected $paginationTheme = 'bootstrap';

    public function updatingSearchTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $categories = Category::where('name', 'like', $searchTerm)
            ->orWhere('description', 'like', $searchTerm)
            ->paginate(3);

        return view('livewire.category-search', ['categories' => $categories]);
    }
}
