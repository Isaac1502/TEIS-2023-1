<?php

final class Note
{
    public function publish(){
        //publish something on twitter
    }
}

final class StaticNote
{
    public function __construct(private Note $note) {}

    public function publish()
    {
        $this->note->publish();
        //do another thing
    }
}

$note = new StaticNote(new Note());
$note->publish();


?>