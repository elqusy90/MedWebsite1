<?php


class Collection
{
    protected array $items;

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function sum($key)
    {
        return array_sum(array_column($this->items, $key));
    }
}


class VideosCollection extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}
class Video
{
    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$videos = new VideosCollection([
    new Video('video1', 100),
    new Video('video2', 200),
    new Video('video3', 300),
]);

echo $videos->length();



