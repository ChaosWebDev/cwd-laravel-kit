<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    public function __construct(
        public ?string $url,
        public ?string $i,
        public string $text
    ) {
        $this->url ??= "#";
    }

    public function render(): View|Closure|string
    {
        return view('components.link');
    }
}
