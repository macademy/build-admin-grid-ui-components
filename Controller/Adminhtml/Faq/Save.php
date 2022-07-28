<?php declare(strict_types=1);

namespace Macademy\Minerva\Controller\Adminhtml\Faq;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Save extends Action implements HttpPostActionInterface
{
    const ADMIN_RESOURCE = 'Macademy_Minerva::faq_save';

    public function execute()
    {
        // Get the post data

        // Determine if this is a new or existing record

        // If new, build an object with the posted data to save it

        // If existing, load data from database and merge with posted data
        // Not found? Throw exception, display message to user & redirect back

        // Save the data, and tell the user it's been saved
        // If problem saving data, display error message to user

        // On success, redirect back to the admin grid
    }
}
