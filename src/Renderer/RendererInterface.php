<?php

namespace Vanare\BehatCucumberJsonFormatter\Renderer;

interface RendererInterface
{
    /**
     * Renders the internal array representation of the JSON result.
     */
    public function render();

    /**
     * Returns the JSON result as array or string representation.
     *
     * @param bool $asString
     * @return array|string
     */
    public function getResult($asString);
}
