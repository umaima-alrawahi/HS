<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;



class SeedTestData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mvp:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds test data to the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Post::factory(10)->create();
        return 0;
    }
}
