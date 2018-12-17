<?php declare(strict_types=1);
/**
 * Interface WeatherAdapterInterface
 */

namespace Robertconvery\WeatherAdapterInterface;

use Carbon\Carbon;
use Illuminate\Support\Collection;

interface WeatherAdapterInterface
{
    /**
     * Append a forecast to the list of forecasts
     * @param WeatherAdapterInterface $adapter
     * @return mixed
     */
    public function attach(WeatherAdapterInterface $adapter);

    /**
     * @return Collection
     */
    public function forecasts(): Collection;

    /**
     * @return string
     */
    public function location(): string;

    /**
     * @return Carbon
     */
    public function datetime(): Carbon;

    /**
     * @return string
     */
    public function main(): string;

    /**
     * @return string
     */
    public function description(): string;

    /**
     * @return int
     */
    public function temperature(): int;

    /**
     * @return int
     */
    public function temperatureMin(): int;

    /**
     * @return int
     */
    public function temperatureMax(): int;
}
