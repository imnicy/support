<?php

namespace Nicy\Support\Contracts;

interface Arrayable
{
    /**
     * Get the instance as an array
     *
     * @return array
     */
    public function toArray();
}