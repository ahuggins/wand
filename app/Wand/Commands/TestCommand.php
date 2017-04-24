<?php

namespace App\Wand\Commands;

use App\SSH;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'view:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(SSH $ssh)
    {
        parent::__construct();
        $this->ssh = $ssh->getSSH();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        dd(env('SSH_USER'), env('SSH_TOKEN_PATH'));
    }
}
