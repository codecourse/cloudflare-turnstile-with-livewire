<?php

namespace App\Livewire;

use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;
use RyanChandler\LaravelCloudflareTurnstile\Rules\Turnstile;

class NewsletterIndex extends Component
{
    public string $email = '';

    public string $turnstileResponse = '';

    public function rules()
    {
        return [
            'email' => 'required|email',
            'turnstileResponse' => ['required', Rule::turnstile()]
        ];
    }

    public function messages()
    {
        return [
            'turnstileResponse.required' => '...',
            Turnstile::class => 'Invalid turnstile response'
        ];
    }

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
