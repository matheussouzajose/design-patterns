<?php

namespace Behavioral\Memento\TextEditor;

class Text
{
    protected string $text;

    protected TextCareTaker $textCareTaker;

    public function __construct()
    {
        $this->textCareTaker = new TextCareTaker();
        $this->text = '';
    }

    public function writeText(string $text)
    {
        $this->textCareTaker->addMemento(new TextMemento($this->text));
        $this->text .= $text;
    }

    public function undoWriting()
    {
        $this->text = $this->textCareTaker
            ->returnLastSavedState()
            ->getText();
    }

    public function returnText(): string
    {
        return $this->text;
    }
}
