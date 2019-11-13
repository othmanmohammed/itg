<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\CatalogLazyLoad\Plugin\Block\Product;

use Magento\Catalog\Block\Product\Image;
use MagePal\CatalogLazyLoad\Helper\Data;

/**
 * Class ImagePlugin
 * @package MagePal\CatalogLazyLoad\Plugin\Block\Product
 */
class ImagePlugin
{
    /** @var Data */
    protected $helper;

    /**
     * @param Data $helper
     */
    public function __construct(
        Data $helper
    ) {
        $this->helper = $helper;
    }

    /**
     * @param Image $subject
     * @param \Closure $proceed
     * @return mixed
     */
    public function aroundToHtml(Image $subject, \Closure $proceed)
    {
        if ($this->helper->isEnabled() && $this->helper->applyLazyLoad()) {
            $orgImageUrl = $subject->getImageUrl();
            $subject->setImageUrl('');

            $customAttributes = trim(
                $subject->getCustomAttributes() . 'magepal-data-original'
            );

            $subject->setCustomAttributes($customAttributes);

            $result = $proceed();

            $find = [
                'img class="',
                'magepal-data-original'
            ];

            $replace = [
                'img class="lazy swatch-option-loading ',
                sprintf(' data-original="%s"', $orgImageUrl),
            ];

            return str_replace($find, $replace, $result);
        } else {
            return $proceed();
        }
    }
}
