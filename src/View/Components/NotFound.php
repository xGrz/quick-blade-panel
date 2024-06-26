<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NotFound extends Component
{
    public function __construct(public ?string $message = null, public int $iconSize = 20)
    {
    }

    public function render(): View
    {
        return view('p::pagination.not-found', [
            'message' => $this->message,
            'iconSize' => $this->iconSize,
        ]);
    }
}
