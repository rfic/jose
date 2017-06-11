<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Checker;

use Assert\Assertion;
use Jose\Object\JWS;

final class IssuedAtChecker implements ClaimCheckerInterface
{
    /**
     * {@inheritdoc}
     */
    public function checkClaim(JWS $jwt): array
    {
        if (!$jwt->hasClaim('iat')) {
            return [];
        }

        $iat = (int) $jwt->getClaim('iat');
        Assertion::lessOrEqualThan($iat, time(), 'The JWT is issued in the future.');

        return ['iat'];
    }
}
