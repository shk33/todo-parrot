<?php

namespace todoparrot\Console\Commands;

use Illuminate\Console\Command;

class UpdateCatalog extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'amazon:update';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Update Amazon lists';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct()
  {
      parent::__construct();
  }

  public function getArguments()
  {
    return [
      // ['example', InputArgument::REQUIRED,
      // 'An example argument.'],
    ];
  }

  public function getOptions()
  {
    return[
      // ['example', null, InputOption::VALUE_OPTIONAL,
      // 'An example option.', null],
    ];
  }

  public function fire()
  {

  }

  /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    $this->info("Amazon catalog updated");
  }
}
