<?php declare(strict_types=1);

namespace Macademy\Minerva\Model;

use Magento\Framework\Model\AbstractModel;

class Faq extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel\Faq::class);
    }
}
