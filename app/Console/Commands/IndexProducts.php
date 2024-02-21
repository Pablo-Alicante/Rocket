<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use Elastic\Elasticsearch\Response\Elasticsearch;
use Exception;

// use Elasticsearch;


class IndexProducts extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:index-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::all();

foreach ($products as $product) {
    try {
        Elasticsearch::index([
            'id' => $product->id,
            'index' => 'posts',
            'body' => [
                'title' => $post->title,
                'content' => $post->content
            ]
        ]);
    } catch (Exception $e) {
        $this->info($e->getMessage());
    }
}

$this->info("Posts were successfully indexed");
    }
}
