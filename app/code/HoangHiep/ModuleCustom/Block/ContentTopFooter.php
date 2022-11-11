<?php
namespace HoangHiep\ModuleCustom\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Cms\Block\Block as cmsBlock;
 
class ContentTopFooter extends Template
{
    public $cms;
 
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
}