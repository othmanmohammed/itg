<?php
namespace itg\AddHeaderOrFooter\Block\Onepage;
    use Magento\Framework\View\Element\Template;

    class Success extends \Magento\Checkout\Block\Onepage\Success {

    public function getOrder() 
        {
            $objectManager =\Magento\Framework\App\ObjectManager::getInstance();
            $helper = $objectManager->get('itg\AddHeaderOrFooter\Helper\Data');

            $lastOrderId = $this->getOrderId();

            if (empty($lastOrderId)) 
            {
                return null;
            }
              $orderData = $objectManager->create('Magento\Sales\Model\Order')->loadByIncrementId($this->getOrderId());

            return $orderData;
        }

    }

