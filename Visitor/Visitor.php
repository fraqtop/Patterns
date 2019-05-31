<?php


namespace Visitor;


abstract class Visitor
{
    abstract public function visitProcessor(Processor $processor);
    abstract public function visitVideoCard(VideoCard $videoCard);
    abstract public function visitRAM(RAM $ram);
}