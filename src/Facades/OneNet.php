<?php
namespace Onenet\Laravel\Facades;
use Illuminate\Support\Facades\Facade;

class OneNet extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'onenet';
    }
}
