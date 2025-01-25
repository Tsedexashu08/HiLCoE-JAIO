<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comment extends Component
{
    public $comment;
    public $username;
    public $profilepicture;
    /**
     * Create a new component instance.
     */
    public function __construct($comment, $username, $profilepicture)
    {
        $this->comment = $comment;
        $this->username = $username;
        $this->profilepicture = $profilepicture;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment');
    }
}
