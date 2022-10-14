<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('News')
                     ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Events')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Programs and Initiatives')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Submissions')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('FAQ')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Library')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Service Provided Level Survey')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Customer Satisfaction Survey')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Voting')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Slider')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Recruitments')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Services')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Brochures')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Electronic Social Sharing')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Projects')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Administration')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Open Data')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('About Organization')
                    ->icon('heroicon-o-briefcase'),
                NavigationGroup::make()
                    ->label('Newsletter Subscriptions')
                    ->icon('heroicon-o-briefcase'),
            ]);
        });
            
            
        

    }
}
