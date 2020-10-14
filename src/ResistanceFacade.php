<?php

namespace Impact\Resistance;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Impact\Resistance\Skeleton\SkeletonClass
 */
class ResistanceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'resistance';
    }
}
