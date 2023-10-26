<?php

namespace Aryala7\ABBA\Commands;

use Illuminate\Console\Command;

class ABBACommand extends Command
{
    public $signature = 'abba:insert';

    public $description = 'insert users to testable users command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
