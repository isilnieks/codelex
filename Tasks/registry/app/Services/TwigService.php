<?php

namespace App\Services;

use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

class TwigService
{
    public FilesystemLoader $loader;
    public Environment $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($this->loader, [
            'debug' => true]);
        $this->twig->addExtension(new DebugExtension());
    }


}
