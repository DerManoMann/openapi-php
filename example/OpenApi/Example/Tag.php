<?php

namespace OpenApi\Example;

use OpenApi\Attributes\Media\Schema;

class Tag
{
    #[Schema(type: "integer", format: "int64")]
    public ?int $id;

    public ?string $name;
}
