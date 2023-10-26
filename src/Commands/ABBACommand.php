<?php

namespace Aryala7\ABBA\Commands;

use Illuminate\Console\Command;

class ABBACommand extends Command
{
    public $signature = 'abba';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
