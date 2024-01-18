<?php

namespace OscarWeijman\IconPicker\Commands;

use Illuminate\Console\Command;

class IconPickerCommand extends Command
{
    public $signature = 'iconpicker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
