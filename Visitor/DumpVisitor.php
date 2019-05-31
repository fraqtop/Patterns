<?php


namespace Visitor;


class DumpVisitor extends Visitor
{
    public function visitProcessor(Processor $processor)
    {
        echo 'processor frequency now is ', $processor->frequency, PHP_EOL;
    }

    public function visitVideoCard(VideoCard $videoCard)
    {
        echo 'card model is ', $videoCard->model, PHP_EOL;
    }

    public function visitRAM(RAM $ram)
    {
        echo 'RAM memory size is ', $ram->memorySize, PHP_EOL;
    }


}