<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdmissionStatusNotification;

class AdmissionStatusService
{
    public function handleStatusUpdate(User $user, string $newStatus): void
    {
        $message = $this->getStatusMessage($newStatus);

        // Send Notification (Email/SMS/etc.)
        Notification::send($user, new AdmissionStatusNotification($newStatus, $message));

        // Log the event
        Log::info("Admission status updated", [
            'user_id' => $user->id,
            'status' => $newStatus,
            'message' => $message,
        ]);
    }

    public function getStatusMessage(string $status): string
    {
        return match ($status) {
            'approved' => 'Your admission is approved.',
            'rejected' => 'Unfortunately, your admission was rejected.',
            'pending' => 'Your admission is still under review.',
            default => 'No status available.',
        };
    }
}
