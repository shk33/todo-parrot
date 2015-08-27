<?php

namespace todoparrot\Console\Commands;

use Illuminate\Console\Command;
use todoparrot\Todolist;

class SlugTodolists extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'slug:todolists';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the slugs for existing todolists model in databses';

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
     * @return mixed
     */
    public function handle()
    {
        $lists = Todolist::all();
        foreach ($lists as $list) {
            $list->resluggify();
            $list->save();
        }
    }
}
