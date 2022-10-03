<?php

namespace Behavioral\Memento\TextEditor;

class TextCareTaker
{
    protected array $statesText = [];

    public function addMemento(TextMemento $textMemento)
    {
        $this->statesText[] = $textMemento;
    }

    public function returnLastSavedState()
    {
        if (empty($this->statesText)) {
            return null;
        }
        $textMemento = end($this->statesText);
        unset($this->statesText[sizeof($this->statesText) - 1]);

        return $textMemento;
    }
}
