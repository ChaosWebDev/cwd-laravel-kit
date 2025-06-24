<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Password extends Component
{
    public $eyeId;

    public function __construct(public string $name, public ?string $id, public ?string $model, public ?string $label)
    {
        $this->id ??= $this->name;
        $this->model ??= $this->name;
        $this->label ??= ucwords(str_replace('_', ' ', $name));
        $this->eyeId = "password_{ $id }_eye";
    }

    public function render(): View|Closure|string
    {
        return view('components.form.password');
    }
}
