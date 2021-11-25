<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ResourceConfig extends Model
{
    /**
     * @description CPU核心数
     *
     * @var string
     */
    public $CPU;

    /**
     * @description GPU核心数
     *
     * @var string
     */
    public $GPU;

    /**
     * @description 显卡类型
     *
     * @var string
     */
    public $GPUType;

    /**
     * @description 内存容量
     *
     * @var string
     */
    public $memory;

    /**
     * @description 共享内存容量
     *
     * @var string
     */
    public $sharedMemory;
    protected $_name = [
        'CPU'          => 'CPU',
        'GPU'          => 'GPU',
        'GPUType'      => 'GPUType',
        'memory'       => 'Memory',
        'sharedMemory' => 'SharedMemory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->sharedMemory) {
            $res['SharedMemory'] = $this->sharedMemory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SharedMemory'])) {
            $model->sharedMemory = $map['SharedMemory'];
        }

        return $model;
    }
}
