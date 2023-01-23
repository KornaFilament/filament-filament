<?php

namespace Filament\Navigation;

use Closure;

class MenuItem
{
    protected ?string $color = null;

    protected ?string $icon = null;

    protected ?string $label = null;

    protected ?int $sort = null;

    protected string | Closure | null $url = null;

    final public function __construct()
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public function color(?string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function icon(?string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function label(?string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function sort(?int $sort): static
    {
        $this->sort = $sort;

        return $this;
    }

    public function url(string | Closure | null $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function getSort(): int
    {
        return $this->sort ?? -1;
    }

    public function getUrl(): ?string
    {
        return value($this->url);
    }
}
