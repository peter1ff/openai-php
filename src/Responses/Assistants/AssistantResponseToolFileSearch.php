<?php

namespace OpenAI\Responses\Assistants;

use OpenAI\Contracts\ResponseContract;
use OpenAI\Responses\Concerns\ArrayAccessible;
use OpenAI\Testing\Responses\Concerns\Fakeable;

final class AssistantResponseToolFileSearch implements ResponseContract
{
    use ArrayAccessible;

    use Fakeable;

    private function __construct(public string $type,)
    {
    }

    /**
     * Acts as static factory, and returns a new Response instance.
     *
     * @param  array{type: 'retrieval'}  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            $attributes['type'],
        );
    }

    public function toArray(): array
    {
        return [
            'type' => $this->type,
        ];
    }
}
