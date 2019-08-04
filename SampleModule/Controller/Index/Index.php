<?php

namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw $result */
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
