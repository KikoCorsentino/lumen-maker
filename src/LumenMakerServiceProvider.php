<?php

namespace KikoCorsentino\LumenMaker;

use Illuminate\Support\ServiceProvider;

use KikoCorsentino\LumenMaker\Commands\ControllerMakerCommand;
use KikoCorsentino\LumenMaker\Commands\ModelMakerCommand;


class LumenMakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->commands(ControllerMakerCommand::class);
        $this->commands(ModelMakerCommand::class);
    }
}
