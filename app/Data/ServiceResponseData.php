<?php

namespace App\Data;

use Spatie\LaravelData\Data;

#[\Spatie\TypeScriptTransformer\Attributes\TypeScript]
class ServiceResponseData extends Data
{
    public function __construct(
        public string $type,
        public string $message,
    ) {}
}
