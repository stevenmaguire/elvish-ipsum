<?php namespace Stevenmaguire\ElvishIpsum;

use Illuminate\Support\Facades\Facade;

class ElvishFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Stevenmaguire\ElvishIpsum\GenerateInterface';
    }
}
