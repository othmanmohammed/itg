<?php
namespace itg\AddHeaderOrFooter\Helper;
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    protected $_request;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Request\Http $request
    ) {
         $this->_request = $request;
        parent::__construct($context);

    }
     public function getConfigValue($value = '') {
        return $this->scopeConfig
                ->getValue($value,\Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    public function getTemplate()
    {
        if ($this->getConfigValue('custom_general/general/active') == 1) {
            $template =  'itg_AddHeaderOrFooter::checkout/success.phtml';
        } else {
            $template = 'Magento_Checkout::success.phtml';
        }

        return $template;
    }
}