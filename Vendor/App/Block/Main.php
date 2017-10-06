<?php
namespace Vendor\App\Block;
class Main extends \Magento\Framework\View\Element\Template
{
    function _prepareLayout(){}

    public function show_block() {
        return "Dynamic data <b>". rand(4, 99)."</b>";
    }
}
