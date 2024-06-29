<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

#[\Spatie\TypeScriptTransformer\Attributes\TypeScript]
class BookData extends Data
{
    public function __construct(
        public string|Optional $id,
        public string $title,
        public string $year,
        public string|Optional $author_id,
        public AuthorData|Optional|string $author,
    ) {}
}
