<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 21.05.18
 * Time: 0:04
 */
namespace Mastering\SampleModule\Cron;

use Mastering\SampleModule\Model\ItemFactory;
//use Mastering\SampleModule\Model\Config;

class AddItem
{
    private $itemFactory;

    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }

    public function execute()
    {
        $this->itemFactory->create()
            ->setName('Scheduled item')
            ->setDescription('Created at ' . time())
            ->save();
    }
}