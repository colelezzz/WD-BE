<?php
class IslandContent
{
    public $islandOfPersonalityID;
    public $islandContentID;
    public $name;
    public $longDescription;
    public $color;
    public $image;
    public $content;

    public function __construct($islandOfPersonalityID, $islandContentID, $name, $longDescription, $color, $image, $content)
    {   
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->islandContentID = $islandContentID;
        $this->name = $name;
        $this->longDescription = $longDescription;
        $this->color = $color;
        $this->image = $image;
        $this->content = $content;
    }
}
?>
