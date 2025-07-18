<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境停止进程（只统计由环境停止操作触发的应用数量）
 *
 * @method integer getApplicationNumNeedToStop() 获取需要停止的应用数量
 * @method void setApplicationNumNeedToStop(integer $ApplicationNumNeedToStop) 设置需要停止的应用数量
 * @method integer getStoppedApplicationNum() 获取已经停止的应用数量
 * @method void setStoppedApplicationNum(integer $StoppedApplicationNum) 设置已经停止的应用数量
 * @method integer getStopFailedApplicationNum() 获取停止失败的应用数量
 * @method void setStopFailedApplicationNum(integer $StopFailedApplicationNum) 设置停止失败的应用数量
 */
class TemEnvironmentStoppingStatus extends AbstractModel
{
    /**
     * @var integer 需要停止的应用数量
     */
    public $ApplicationNumNeedToStop;

    /**
     * @var integer 已经停止的应用数量
     */
    public $StoppedApplicationNum;

    /**
     * @var integer 停止失败的应用数量
     */
    public $StopFailedApplicationNum;

    /**
     * @param integer $ApplicationNumNeedToStop 需要停止的应用数量
     * @param integer $StoppedApplicationNum 已经停止的应用数量
     * @param integer $StopFailedApplicationNum 停止失败的应用数量
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ApplicationNumNeedToStop",$param) and $param["ApplicationNumNeedToStop"] !== null) {
            $this->ApplicationNumNeedToStop = $param["ApplicationNumNeedToStop"];
        }

        if (array_key_exists("StoppedApplicationNum",$param) and $param["StoppedApplicationNum"] !== null) {
            $this->StoppedApplicationNum = $param["StoppedApplicationNum"];
        }

        if (array_key_exists("StopFailedApplicationNum",$param) and $param["StopFailedApplicationNum"] !== null) {
            $this->StopFailedApplicationNum = $param["StopFailedApplicationNum"];
        }
    }
}
