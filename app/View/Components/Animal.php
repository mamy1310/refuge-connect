<?php

namespace App\View\Components;

use App\Models\Animal as AnimalModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Animal extends Component
{

    public AnimalModel $animal;

    /**
     * Create a new component instance.
     */
    public function __construct(AnimalModel $animal)
    {
        $this->animal = $animal;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.animal');
    }
}
