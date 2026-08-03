<?php

namespace App\Livewire;

use App\Models\PrivacyConsent;
use Illuminate\Http\Request;
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

    private function acceptanceData(Request $request): array
    {
        return [
            'ip_address' => realUserIp($request),
            'user_agent' => (string) ($request->userAgent() ?? 'unknown'),
            'uuid' => Uuid::uuid4()->toString(),
        ];
    }

    public function decline()
    {
        Cookie::queue(Cookie::forget('accepted_consent_date'));
        $this->isAccepted = false;

        $data = $this->acceptanceData(request());
        $this->storeAcceptance($data['ip_address'], $data['user_agent'], $data['uuid'], false);
    }

    public function accept()
    {
        // Collect user identifiers with proxy-aware IP resolution.
        $data = $this->acceptanceData(request());
        $ipAddress = $data['ip_address'];
        $userAgent = $data['user_agent'];
        $uuid = $data['uuid'];

        Cookie::queue('accepted_consent_date', $uuid, 365 * 24 * 60); // Set cookie for 1 year
        $this->isAccepted = true;
        $this->storeAcceptance($ipAddress, $userAgent, $uuid, true);
    }

    public function storeAcceptance(string $ipAddress, string $userAgent, string $uuid, bool $status = false): void
    {
        // Store the acceptance in the database or log file
        PrivacyConsent::create(['ip_address' => $ipAddress, 'user_agent' => $userAgent, 'uuid' => $uuid, 'status' => $status, 'accepted_at' => $status ? now() : null]);
    }
}
