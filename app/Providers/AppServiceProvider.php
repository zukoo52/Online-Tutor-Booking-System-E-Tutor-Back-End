<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use Modules\TutorJobManagement\app\Repositaries\TutorJobImplementations;
use Modules\TutorJobManagement\app\Repositaries\TutorJobInterface;

use Modules\UserManagement\app\Repositaries\UserImplementations;
use Modules\UserManagement\app\Repositaries\UserInterface;

use Modules\SubjectManagement\app\Repositaries\SubjectImplementations;
use Modules\SubjectManagement\app\Repositaries\SubjectInterface;

use Modules\ReviewManagement\app\Repositaries\ReviewImplementations;
use Modules\ReviewManagement\app\Repositaries\ReviewInterface;

use Modules\BidProposalManagement\app\Repositaries\BidProposalImplementations;
use Modules\BidProposalManagement\app\Repositaries\BidProposalInterface;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {

        $this->app->bind(UserInterface::class, UserImplementations::class);
        $this->app->bind(TutorJobInterface::class, TutorJobImplementations::class);
        $this->app->bind(SubjectInterface::class, SubjectImplementations::class);
        $this->app->bind(ReviewInterface::class, ReviewImplementations::class);
        $this->app->bind(BidProposalInterface::class, BidProposalImplementations::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
