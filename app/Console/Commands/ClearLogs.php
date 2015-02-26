<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ClearLogs extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'clear:logs';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Clears the /storage/logs/laravel.log file.';

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
	public function fire()
	{
		$f = @fopen(storage_path() . '/logs/laravel.log', 'r+');
		if ($f !== false) {
		    ftruncate($f, 0);
		    fclose($f);
		}		
		$this->line('The laravel.log file was cleared!');
	}

}
