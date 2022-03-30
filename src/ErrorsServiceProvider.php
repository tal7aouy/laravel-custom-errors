<?php

namespace Tal7aouy\Errors;

use Illuminate\Support\ServiceProvider;

class ErrorsServiceProvider extends ServiceProvider
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
    $this->publishes([
      __DIR__ . '/publish/errors' => resource_path('views/errors'),
      __DIR__ . '/publish/svg' => public_path('svg'),
    ], 'tal7aouy-errors');
  }
}
