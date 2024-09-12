<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class NewsletterIndex extends Component
{
    #[Rule('required')]
    public string $email = '';

    public string $turnstileResponse;

    public function submit()
    {
        $this->validate();

        dd('Subscribe');
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.newsletter-index');
    }
}
