<?php
/**
 * This is NOT a freeware, use is subject to license terms
 * @copyright Copyright (c) 2010-2099 Jinan Larva Information Technology Co., Ltd.
 * @link http://www.larva.com.cn/
 * @license http://www.larva.com.cn/license/
 */

namespace Larva\UMeng\Notifications\Messages;

use Larva\UMeng\Notifications\Http\Client;
use Larva\UMeng\Notifications\UMeng;

/**
 * IOS消息
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class IOSMessage extends BaseMessage
{
    /**
     * 推送结果
     * @return array
     */
    public function send()
    {
        /** @var Client $push * */
        $push = UMeng::ios();
        return $push->send($this->jsonBody);
    }

    /**
     * 设置APS参数
     * @param string $key
     * @param string|array $value
     * @return IOSMessage
     */
    public function setAPS($key, $value)
    {
        $this->jsonBody['payload']['aps'][$key] = $value;
        return $this;
    }
}