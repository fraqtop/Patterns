<?php


namespace Visitor;


class OverclockVisitor extends Visitor
{
    public function visitProcessor(Processor $processor)
    {
        $processor->frequency += 1000;
    }

    public function visitVideoCard(VideoCard $videoCard)
    {
        $videoCard->model = 'nvidia 1060';
    }

    public function visitRAM(RAM $ram)
    {
        $ram->memorySize *= 4;
    }

}