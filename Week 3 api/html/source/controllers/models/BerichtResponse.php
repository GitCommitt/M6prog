<?php

class BerichtResponse
{
    public int $idbericht;
    public string $content;
    public string $sender;

    public function __construct(
        int $idbericht,
        string $content,
        string $sender

    ){
        $this->idbericht = $idbericht;
        $this->content = $content;
        $this->sender = $sender;
    }
}

