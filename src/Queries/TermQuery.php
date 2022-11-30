<?php

namespace Spatie\ElasticsearchQueryBuilder\Queries;

class TermQuery implements Query
{
    protected string $field;

    protected $value;

    public static function create(string $field, $value): static
    {
        return new self($field, $value);
    }

    public function __construct(string $field, $value)
    {
        $this->field = $field;
        $this->value = $value;
    }

    public function toArray(): array
    {
        return [
            'term' => [
                $this->field => $this->value,
            ],
        ];
    }
}
