<?php

namespace Behavioral\Memento\TextEditor;

class TextMemento
{
    protected string $stateText;

    public function __construct(string $stateText)
    {
        $this->stateText = $stateText;
    }

    public function getText(): string
    {
        return $this->stateText;
    }
}
