<?php

namespace App\Observers;

use App\Models\Models;

class ModelObserver
{
    public function saved(Models $models): void
    {
        app(Elastic::class)->index($models);
    }

    /**
     * Handle the Models "deleted" event.
     */
    public function deleted(Models $models): void
    {
        app(abstract: Elastic::class)->delete($models);
    }
}
