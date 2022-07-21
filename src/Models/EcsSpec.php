<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class EcsSpec extends Model
{
    /**
     * @description 加速器类型
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description cpu数量
     *
     * @var int
     */
    public $cpu;

    /**
     * @description gpu数量
     *
     * @var int
     */
    public $gpu;

    /**
     * @description gpu类型
     *
     * @var string
     */
    public $gpuType;

    /**
     * @description 规格类型
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description 是否有库存
     *
     * @var bool
     */
    public $isAvailable;

    /**
     * @description Memory数量
     *
     * @var int
     */
    public $memory;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'cpu'             => 'Cpu',
        'gpu'             => 'Gpu',
        'gpuType'         => 'GpuType',
        'instanceType'    => 'InstanceType',
        'isAvailable'     => 'IsAvailable',
        'memory'          => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->gpu) {
            $res['Gpu'] = $this->gpu;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EcsSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['Gpu'])) {
            $model->gpu = $map['Gpu'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
