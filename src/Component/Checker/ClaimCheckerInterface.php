<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Checker;

/**
 * Interface ClaimCheckerInterface.
 */
interface ClaimCheckerInterface
{
    /**
     * @param $value
     *
     * @throws \InvalidArgumentException
     */
    public function checkClaim($value);

    /**
     * @return string
     */
    public function supportedClaim(): string;
}
