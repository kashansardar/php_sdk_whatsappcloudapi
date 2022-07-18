<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class Video implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $link;

    /**
     * @var string|null
     */
    private $id;

    /**
     * Returns Link.
     * The protocol and URL of the media to be sent. Use only with HTTP/HTTPS URLs. Required when you are
     * not using an uploaded media ID.
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * Sets Link.
     * The protocol and URL of the media to be sent. Use only with HTTP/HTTPS URLs. Required when you are
     * not using an uploaded media ID.
     *
     * @maps link
     */
    public function setLink(?string $link): void
    {
        $this->link = $link;
    }

    /**
     * Returns Id.
     * Required when you are not using a link. The media object ID.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Required when you are not using a link. The media object ID.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
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
        if (isset($this->link)) {
            $json['link'] = $this->link;
        }
        if (isset($this->id)) {
            $json['id']   = $this->id;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
