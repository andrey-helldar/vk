<?php

namespace Helldar\Vk\Facade;

class Database extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'database';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = [
        'getChairs',
        'getCities',
        'getCitiesById',
        'getCountries',
        'getCountriesById',
        'getFaculties',
        'getRegions',
        'getSchoolClasses',
        'getSchools',
        'getStreetsById',
        'getUniversities',
    ];
}
