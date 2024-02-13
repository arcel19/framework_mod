<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    private string $template;
    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function render(string $template)
    {
        $this->template = $template;
        include "{$this->basePath}/{$template}";
    }
}
