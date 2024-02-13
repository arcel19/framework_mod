<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
    private string $template;
    public function __construct(  string $basePath)
    {
        $this->basePath = $basePath;
    }

    public function render(string $template , array $data = [])
    {
        $this->template = $template;
        extract($data, EXTR_SKIP);


        // ob_start();

        include "{$this->basePath}/{$template}";

        // $output = ob_get_contents();

        // ob_end_clean();
        // return $output;
    }
}
