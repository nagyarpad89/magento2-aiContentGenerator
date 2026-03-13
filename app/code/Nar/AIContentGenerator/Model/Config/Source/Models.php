<?php
/**
 * @author Nagy Arpad <arpad.nagy@reea.net>
 * @role Developer
 * @created 3/13/26 12:32 PM
 */
declare(strict_types=1);

namespace Nar\AIContentGenerator\Model\Config\Source;
use Magento\Framework\Option\ArrayInterface;

class Models implements ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'gpt-5', 'label' => __('gpt-5')],
            ['value' => 'gpt-5-mini', 'label' => __('gpt-5-mini')],
            ['value' => 'gpt-4', 'label' => __('gpt-4')],
            ['value' => 'gpt-4o', 'label' => __('gpt-4o')],
            ['value' => 'gpt-4o-mini', 'label' => __('gpt-4o-mini')]
        ];
    }
}
