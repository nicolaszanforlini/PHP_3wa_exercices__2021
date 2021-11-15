<?php

class Url
{
    private string $url;

    public function setUrl($url) {
        $this->url = $url;
    }
    public function redirect($url) {
        header('Location: ' . $this->setUrl($url));
        exit;
    }
}

class Date_
{
    private $format = 'd/m/y';

    public function getDate($date) {
        return new Date($date->format($this->format));
    }
}

class Token
{
    private $max = 10;

    public function token() {
        return random_bytes($this->max);
    }
}
