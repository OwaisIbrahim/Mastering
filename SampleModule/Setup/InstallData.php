<?php
    namespace Mastering\SampleModule\Setup;
    use Magento\Framework\Setup\InstallDataInterface;
    use Magento\Framework\Setup\ModuleContextInterface;
    use Magento\Framework\Setup\ModuleDataSetupInterface;
    use Magento\Framework\DB\Ddl\Table;

    class InstallData implements InstallDataInterface
    {
        public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
        {
            $setup->startSetup();

            $setup->getConnection()->insert(
                $setup->getTable('mastering_sample_item'),
                [
                    'name' => 'Item 1'
                ]
            );
            
            $setup->getConnection()->insert(
                $setup->getTable('mastering_sample_item'),
                [
                    'name' => 'Item 2'
                ]
            );
            
            $setup->endSetup();
        }
    }


    /*
    <?php
    namespace Mastering\SampleModule\Setup;
    use Magento\Framework\Setup\InstallDataInterface;
    use Magento\Framework\Setup\ModuleContextInterface;
    use Magento\Framework\Setup\ModuleDataSetupInterface;
    use Magento\Framework\DB\Ddl\Table;

    class InstallSchema implements InstallSchemaInterface
    {
        public function install(ModuleDataSetupInterface setup, ModuleContextInterface context)
        {
            $setup->startSetup();
            
            $setup->endSetup();
        }
    }
    */