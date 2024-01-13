<?php

namespace Tasawk\Starter\Commands;

use Illuminate\Console\Command;

class StarterCommand extends Command
{
    public $signature = 'starter';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
