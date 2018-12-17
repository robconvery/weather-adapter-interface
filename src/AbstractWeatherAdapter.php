<?php
/**
 * Class AbstractWeatherAdapter
 *
 * @package Robertconvery\WeatherAdapter
 * @author robconvery <robconvery@me.com>
 */

namespace Robertconvery\WeatherAdapter;

use Illuminate\Support\Collection;

abstract class AbstractWeatherAdapter
{

    /**
     * Append a forecast to the list of forecasts
     * @param AbstractWeatherAdapter $adapter
     * @return mixed
     */
    abstract public function attach(AbstractWeatherAdapter $adapter);

    /**
     * @return Collection
     */
    abstract public function forecasts(): Collection;

    /**
     * @return string
     */
    abstract public function location(): string;

    /**
     * @return Carbon
     */
    abstract public function datetime(): Carbon;

    /**
     * @return string
     */
    abstract public function main(): string;

    /**
     * @return string
     */
    abstract public function description(): string;

    /**
     * @return int
     */
    abstract public function temperature(): int;

    /**
     * @return int
     */
    abstract public function temperatureMin(): int;

    /**
     * @return int
     */
    abstract public function temperatureMax(): int;
}
