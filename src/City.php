<?php

namespace MenaraSolutions\Geographer;

/**
 * Class City
 * @package MenaraSolutions\Geographer
 */
class City extends Divisible
{
    /**
     * @var string
     */
    protected $memberClass = null;

    /**
     * @var string
     */
    protected $parentClass = State::class;

    /**
     * @return string
     */
    protected function getStoragePath()
    {
        // TODO: Implement getStoragePath() method.
    }

    /**
     * Unique code
     *
     * @return string|int
     */
    public function getCode()
    {
        // TODO: Implement getCode() method.
    }

}