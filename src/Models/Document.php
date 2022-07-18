<?php

declare(strict_types=1);

/*
 * WhatsAppCloudAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace WhatsAppCloudAPILib\Models;

use stdClass;

class Document implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $link;

    /**
     * @var string|null
     */
    private $caption;

    /**
     * @var string|null
     */
    private $filename;

    /**
     * Returns Id.
     * It is the media object ID. Required when you are not using a link.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * It is the media object ID. Required when you are not using a link.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

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
     * Returns Caption.
     * Describes the specified document media.
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * Sets Caption.
     * Describes the specified document media.
     *
     * @maps caption
     */
    public function setCaption(?string $caption): void
    {
        $this->caption = $caption;
    }

    /**
     * Returns Filename.
     * Describes the filename for the specific document.
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * Sets Filename.
     * Describes the filename for the specific document.
     *
     * @maps filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
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
        if (isset($this->id)) {
            $json['id']       = $this->id;
        }
        if (isset($this->link)) {
            $json['link']     = $this->link;
        }
        if (isset($this->caption)) {
            $json['caption']  = $this->caption;
        }
        if (isset($this->filename)) {
            $json['filename'] = $this->filename;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
