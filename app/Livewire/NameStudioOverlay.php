<?php

namespace App\Livewire;

use App\Models\PrivacyConsent;
use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Ramsey\Uuid\Uuid;

class NameStudioOverlay extends Component
{
    public bool $isAccepted = false;

    public function mount()
    {
        $this->isAccepted = Cookie::get('accepted_consent_date') ? true : false;
    }

    public function render()
    {
        return view('livewire.name-studio-overlay', [
            'isAccepted' => $this->isAccepted
        ]);
    }

    public function accept()
    {
        // collect IP address and user agent
        $ipAddress = request()->ip();
        $userAgent = request()->header('User-Agent');
        $uuid = Uuid::uuid4()->toString();

        Cookie::queue('accepted_consent_date', $uuid, 365 * 24 * 60); // Set cookie for 1 year
        $this->isAccepted = true;
        $this->storeAcceptance($ipAddress, $userAgent, $uuid);
    }

    public function storeAcceptance(string $ipAddress, string $userAgent, string $uuid): void
    {
        // Store the acceptance in the database or log file
        PrivacyConsent::create(['ip_address' => $ipAddress, 'user_agent' => $userAgent, 'uuid' => $uuid, 'status' => true, 'accepted_at' => now()]);
    }
}
