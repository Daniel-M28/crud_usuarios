<?php

// app/Providers/AuthServiceProvider.php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\CitaPolicy;
use App\Models\Cita;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Cita::class => CitaPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
