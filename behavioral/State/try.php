<?php
interface WritingState
{
    public function write(string $words);
}
class UpperCase implements WritingState
{
    public function write(string $words)
    {
        echo strtoupper($words);
    }
}
class LowerCase implements WritingState
{
    public function write(string $words)
    {
        echo strtolower($words);
    }
}
class Normal implements WritingState
{
    public function write(string $words)
    {
        echo $words;
    }
}

class TextEditor
{
    protected WritingState $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state): void
    {
        $this->state = $state;
    }

    public function type(string $words)
    {
        $this->state->write($words);
    }
}

$editor = new TextEditor(new Normal());

$editor->type('First line');

$editor->setState(new UpperCase());

$editor->type('Second line');
$editor->type('Third line');

$editor->setState(new LowerCase());

$editor->type('Fourth line');
$editor->type('Fifth line');
