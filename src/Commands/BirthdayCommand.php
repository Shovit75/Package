<?php

namespace Shovit75\Birthday\Commands;

use Illuminate\Console\Command;

class BirthdayCommand extends Command
{
    public $signature = 'birthday';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
