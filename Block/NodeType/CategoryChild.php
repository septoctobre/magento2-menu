<?php

namespace Snowdog\Menu\Block\NodeType;

class CategoryChild extends Category
{
    /**
     * @var string
     */
    protected $defaultTemplate = 'menu/node_type/category_child.phtml';

    /**
     * @var string
     */
    protected $nodeType = 'category_child';

    /**
     * @return array
     */
    public function getNodeCacheKeyInfo()
    {
        $info = [
            'module_' . $this->getRequest()->getModuleName(),
            'controller_' . $this->getRequest()->getControllerName(),
            'route_' . $this->getRequest()->getRouteName(),
            'action_' . $this->getRequest()->getActionName()
        ];

        $category = $this->getCurrentCategory();
        if ($category) {
            $info[] = 'category-child_' . $category->getId();
        }

        return $info;
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getLabel()
    {
        return __("Category Child");
    }
}
