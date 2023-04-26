<?php

namespace Mageplaza\HelloWorld\Block;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_filesystem;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Mageplaza\HelloWorld\Model\PostFactory $postFactory,
    ) {
        parent::__construct($context);
        $this->_postFactory = $postFactory;
    }

    public function getResult()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}
