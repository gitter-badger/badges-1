<?php

namespace Midnite81\Badges\Tests\Type;

use Midnite81\Badges\Type\BadgeType;
use Midnite81\Badges\Type\Build;

class BuildTest extends BaseBadgeType
{
    /**
     * Get instance of class
     *
     * @param $attributes
     * @return BadgeType
     * @throws \Midnite81\Badges\Exceptions\RequiredAttributeNotPassed
     */
    protected function getInstance($attributes = null)
    {
        $attributes = (! empty($attributes) && is_array($attributes)) ? $attributes : $this->attributes;
        return new Build($attributes);
    }

    /**
     * Get factory instance of class
     *
     * @param $attributes
     * @return BadgeType
     * @throws \Midnite81\Badges\Exceptions\RequiredAttributeNotPassed
     */
    protected function getFactoryInstance($attributes = null)
    {
        $attributes = (! empty($attributes) && is_array($attributes)) ? $attributes : $this->attributes;
        return Build::create($attributes);
    }
}