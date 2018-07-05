<?php

namespace Phunc;

use \Illuminate\Support\Collection;

interface RenderInterface
{
    public function setIn(Collection $collection);
    public function getIn();

    public function render();

    public function setOut(Collection $collection);
    public function getOut();
}