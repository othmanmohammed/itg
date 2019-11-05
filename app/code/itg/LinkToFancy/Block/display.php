<?php
namespace itg\LinkToFancy\Block;
class Display extends \Magento\Framework\View\Element\Template
{
	public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	{
		parent::__construct($context);
	}

	public function toLink()
	{
		return __('Click here to get a Pop Up');
	}
}

