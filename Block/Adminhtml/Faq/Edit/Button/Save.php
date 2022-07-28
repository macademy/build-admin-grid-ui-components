<?php declare(strict_types=1);

namespace Macademy\Minerva\Block\Adminhtml\Faq\Edit\Button;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class Save implements ButtonProviderInterface
{
    public function getButtonData()
    {
        return [
            'label' => __('Save'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => [
                    'button' => [
                        'event' => 'save',
                    ],
                ],
            ],
        ];
    }
}
