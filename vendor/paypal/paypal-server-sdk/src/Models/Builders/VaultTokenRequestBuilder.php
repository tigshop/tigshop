<?php

declare(strict_types=1);

/*
 * PaypalServerSdkLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalServerSdkLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalServerSdkLib\Models\VaultTokenRequest;

/**
 * Builder for model VaultTokenRequest
 *
 * @see VaultTokenRequest
 */
class VaultTokenRequestBuilder
{
    /**
     * @var VaultTokenRequest
     */
    private $instance;

    private function __construct(VaultTokenRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new vault token request Builder object.
     */
    public static function init(string $id, string $type): self
    {
        return new self(new VaultTokenRequest($id, $type));
    }

    /**
     * Initializes a new vault token request object.
     */
    public function build(): VaultTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
