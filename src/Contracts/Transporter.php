<?php

declare(strict_types=1);

namespace OpenAI\Contracts;

use OpenAI\Exceptions\ErrorException;
use OpenAI\Exceptions\TransporterException;
use OpenAI\Exceptions\UnserializableResponse;
use OpenAI\ValueObjects\Transporter\Payload;

/**
 * @internal
 */
interface Transporter
{
    /**
     * Sends a request to a server.
     **
     * @return array<array-key, mixed>
     *
     * @throws ErrorException|UnserializableResponse|TransporterException
     */
    public function request(Payload $payload): array;

    /**
     * Sends a content request to a server.
     **
     *
     * @throws ErrorException|UnserializableResponse|TransporterException
     */
    public function requestContent(Payload $payload): string;
}