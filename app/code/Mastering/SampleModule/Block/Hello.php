<?php

namespace Mastering\SampleModule\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    private $_productCollectionFactory;
    protected $_imageBuilder;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Block\Product\ImageBuilder $_imageBuilder,
        array $data = []
    )

    {
        $this->_productCollectionFactory = $productCollectionFactory;
        $this->_imageBuilder=$_imageBuilder;
        parent::__construct($context, $data);
    }

    public function getItems()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        return $collection;
    }
    public function getImage($product, $imageId, $attributes = [])
    {
        return $this->_imageBuilder->setProduct($product)
            ->setImageId($imageId)
            ->setAttributes($attributes)
            ->create();
    }
}
