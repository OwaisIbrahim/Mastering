<?php

namespace Mastering\SampleModule\Model\ResourceModel\Item\Grid;

use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;

class GridCollection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    private $logger;

    public function __construct(
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        $mainTable = 'mastering_sample_item',
        $resourceModel = 'Mastering\SampleModule\Model\ResourceModel\Item'
    ) {
        $this->logger = $logger;
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $mainTable,
            $resourceModel
        );
        $this->logger->debug('ITEM ADDED');
    }
}
