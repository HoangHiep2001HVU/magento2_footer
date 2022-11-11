<?php
namespace HoangHiep\ModuleCustom\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Cms\Block\Block as cmsBlock;
 
class Copyright extends Template
{
    public $cms;
    protected $_copyright;
 
    public function __construct(Template\Context $context,cmsBlock $cmsblock)
    {
        $this->cmsblock = $cmsblock;
        parent::__construct($context);
    }
 
    public function getCmsBlock($idBlock)
    {
        $cmsblock = $this->cmsblock->setBlockId($idBlock)->toHtml();
        return $cmsblock;
    }

    public function getCopyright()
    {
        if (!$this->_copyright) {
            $this->_copyright = $this->_scopeConfig->getValue(
                'design/footer/copyright',
                \Magento\Store\Model\ScopeInterface::SCOPE_STORE
            );
        }
        return __($this->_copyright);
    }
}