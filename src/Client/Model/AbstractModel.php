<?php
/**
 * Created by PhpStorm.
 * User: darkwind
 * Date: 18-6-7
 * Time: 下午2:49
 */

namespace Activiti\Client\Model;


class AbstractModel
{
    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }
}