<?php
/**
 * Celebros
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish correct extension functionality.
 * If you wish to customize it, please contact Celebros.
 *
 ******************************************************************************
 * @category    Celebros
 * @package     Celebros_ConflictFixer
 */
namespace Celebros\ConflictFixer\Block\Theme\Html;

class Pager extends \Celebros\ConversionPro\Block\Theme\Html\Pager
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Celebros\ConversionPro\Helper\Data $helper,
        \Celebros\ConversionPro\Helper\Search $searchHelper,
        array $data = []
    ) {
        $this->toolbar = $toolbar;
        parent::__construct($context, $helper, $searchHelper, $data);       
    }
}