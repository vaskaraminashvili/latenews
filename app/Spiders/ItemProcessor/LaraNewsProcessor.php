<?php

namespace App\Spiders\ItemProcessor;


use RoachPHP\ItemPipeline\ItemInterface;
use RoachPHP\ItemPipeline\Processors\ItemProcessorInterface;

class LaraNewsProcessor implements ItemProcessorInterface
{
    public function processItem(ItemInterface $item): ItemInterface
    {
        // Convert the item to an array for saving
        $data = $item->all();

//        $first = $data[0]['img'];

        return $item; // Pass the item to the next pipeline stage
    }

    public function configure(array $options): void
    {
        // TODO: Implement configure() method.
    }
}