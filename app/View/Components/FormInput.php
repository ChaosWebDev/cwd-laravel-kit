<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public function __construct(public string $name, public ?string $id, public ?string $model, public ?string $label)
    {
        $this->id ??= $this->name;
        $this->model ??= $this->name;
        $this->label ??= ucwords(str_replace('_', ' ', $name));
    }

    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
