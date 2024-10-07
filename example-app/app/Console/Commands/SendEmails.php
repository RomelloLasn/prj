<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\Isolatable;
use App\Models\User;

class SendEmails extends Command implements Isolatable
{
    protected $signature = 'mail:send {user}';
    protected $description = 'Send an email to the specified user';

    public function handle()
    {
        $user = User::find($this->argument('user'));

        if (!$user) {
            $this->error('User not found.');
            return 1; // Error code
        }

        // Simulate sending an email
        $this->info("Sending email to: {$user->name}!");

        return 0; // Success code
    }
}
