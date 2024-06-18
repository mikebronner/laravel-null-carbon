<?php namespace GeneaLabs\LaravelNullCarbon;

use Illuminate\Support\Carbon;

class NullCarbon extends Carbon
{
    public function __toString()
    {
        return '';
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function format(string $format)
    {
        return '';
    }

    public function jsonSerialize()
    {
        return json_encode(null);
    }
}
