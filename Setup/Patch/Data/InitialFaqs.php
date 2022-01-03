<?php declare(strict_types=1);

namespace Macademy\Minerva\Setup\Patch\Data;

use Macademy\Minerva\Model\ResourceModel\Faq;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class InitialFaqs implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    protected $moduleDataSetup;

    /** @var ResourceConnection */
    protected $resource;

    /**
     * InitialFaqs constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param ResourceConnection $resource
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        ResourceConnection $resource
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->resource = $resource;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply(): self
    {
        $connection = $this->resource->getConnection();
        $data = [
            [
                'question' => 'What is your best selling item?',
                'answer' => 'The item you buy!',
                'is_published' => 1,
            ],
            [
                'question' => 'What is your customer support number?',
                'answer' => '212-867-5309. Ask for Jenny!',
                'is_published' => 1,
            ],
            [
                'question' => 'When will I get my order?',
                'answer' => 'When it gets delivered, silly!',
                'is_published' => 0,
            ],
        ];
        $connection->insertMultiple(Faq::MAIN_TABLE, $data);

        return $this;
    }
}
