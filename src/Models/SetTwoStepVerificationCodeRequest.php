<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

/**
 * A 6-digit pin you wish to use for two-step authentication.
 */
class SetTwoStepVerificationCodeRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $pin;

    /**
     * @param string $pin
     */
    public function __construct(string $pin)
    {
        $this->pin = $pin;
    }

    /**
     * Returns Pin.
     */
    public function getPin(): string
    {
        return $this->pin;
    }

    /**
     * Sets Pin.
     *
     * @required
     * @maps pin
     */
    public function setPin(string $pin): void
    {
        $this->pin = $pin;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['pin'] = $this->pin;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
