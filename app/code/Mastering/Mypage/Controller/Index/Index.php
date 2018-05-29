<?php
/**
 * Created by PhpStorm.
 * User: iambatman
 * Date: 20.05.18
 * Time: 14:28
 */

namespace Mastering\Mypage\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
class Index extends Action
{
    public function execute()
    {
//        /** @var \Magento\Framework\Controller\Result\Raw  $result */
//        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
//        $result->setContents('Hello World!');
//        return $result;
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}