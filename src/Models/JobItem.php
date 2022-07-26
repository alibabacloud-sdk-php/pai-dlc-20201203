<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem\codeSource;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\JobItem\dataSources;
use AlibabaCloud\Tea\Model;

class JobItem extends Model
{
    /**
     * @var codeSource
     */
    public $codeSource;

    /**
     * @var dataSources[]
     */
    public $dataSources;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $enabledDebugger;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtFailedTime;

    /**
     * @var string
     */
    public $gmtFinishTime;

    /**
     * @var string
     */
    public $gmtRunningTime;

    /**
     * @var string
     */
    public $gmtStoppedTime;

    /**
     * @var string
     */
    public $gmtSubmittedTime;

    /**
     * @var string
     */
    public $gmtSuccessedTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var JobSpec[]
     */
    public $jobSpecs;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceLevel;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var JobSettings
     */
    public $settings;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $thirdpartyLibDir;

    /**
     * @var string[]
     */
    public $thirdpartyLibs;

    /**
     * @var string
     */
    public $userCommand;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'codeSource'       => 'CodeSource',
        'dataSources'      => 'DataSources',
        'displayName'      => 'DisplayName',
        'duration'         => 'Duration',
        'enabledDebugger'  => 'EnabledDebugger',
        'envs'             => 'Envs',
        'gmtCreateTime'    => 'GmtCreateTime',
        'gmtFailedTime'    => 'GmtFailedTime',
        'gmtFinishTime'    => 'GmtFinishTime',
        'gmtRunningTime'   => 'GmtRunningTime',
        'gmtStoppedTime'   => 'GmtStoppedTime',
        'gmtSubmittedTime' => 'GmtSubmittedTime',
        'gmtSuccessedTime' => 'GmtSuccessedTime',
        'jobId'            => 'JobId',
        'jobSpecs'         => 'JobSpecs',
        'jobType'          => 'JobType',
        'priority'         => 'Priority',
        'reasonCode'       => 'ReasonCode',
        'reasonMessage'    => 'ReasonMessage',
        'resourceId'       => 'ResourceId',
        'resourceLevel'    => 'ResourceLevel',
        'resourceName'     => 'ResourceName',
        'settings'         => 'Settings',
        'status'           => 'Status',
        'thirdpartyLibDir' => 'ThirdpartyLibDir',
        'thirdpartyLibs'   => 'ThirdpartyLibs',
        'userCommand'      => 'UserCommand',
        'userId'           => 'UserId',
        'workspaceId'      => 'WorkspaceId',
        'workspaceName'    => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeSource) {
            $res['CodeSource'] = null !== $this->codeSource ? $this->codeSource->toMap() : null;
        }
        if (null !== $this->dataSources) {
            $res['DataSources'] = [];
            if (null !== $this->dataSources && \is_array($this->dataSources)) {
                $n = 0;
                foreach ($this->dataSources as $item) {
                    $res['DataSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->enabledDebugger) {
            $res['EnabledDebugger'] = $this->enabledDebugger;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtFailedTime) {
            $res['GmtFailedTime'] = $this->gmtFailedTime;
        }
        if (null !== $this->gmtFinishTime) {
            $res['GmtFinishTime'] = $this->gmtFinishTime;
        }
        if (null !== $this->gmtRunningTime) {
            $res['GmtRunningTime'] = $this->gmtRunningTime;
        }
        if (null !== $this->gmtStoppedTime) {
            $res['GmtStoppedTime'] = $this->gmtStoppedTime;
        }
        if (null !== $this->gmtSubmittedTime) {
            $res['GmtSubmittedTime'] = $this->gmtSubmittedTime;
        }
        if (null !== $this->gmtSuccessedTime) {
            $res['GmtSuccessedTime'] = $this->gmtSuccessedTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobSpecs) {
            $res['JobSpecs'] = [];
            if (null !== $this->jobSpecs && \is_array($this->jobSpecs)) {
                $n = 0;
                foreach ($this->jobSpecs as $item) {
                    $res['JobSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceLevel) {
            $res['ResourceLevel'] = $this->resourceLevel;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->thirdpartyLibDir) {
            $res['ThirdpartyLibDir'] = $this->thirdpartyLibDir;
        }
        if (null !== $this->thirdpartyLibs) {
            $res['ThirdpartyLibs'] = $this->thirdpartyLibs;
        }
        if (null !== $this->userCommand) {
            $res['UserCommand'] = $this->userCommand;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodeSource'])) {
            $model->codeSource = codeSource::fromMap($map['CodeSource']);
        }
        if (isset($map['DataSources'])) {
            if (!empty($map['DataSources'])) {
                $model->dataSources = [];
                $n                  = 0;
                foreach ($map['DataSources'] as $item) {
                    $model->dataSources[$n++] = null !== $item ? dataSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EnabledDebugger'])) {
            $model->enabledDebugger = $map['EnabledDebugger'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtFailedTime'])) {
            $model->gmtFailedTime = $map['GmtFailedTime'];
        }
        if (isset($map['GmtFinishTime'])) {
            $model->gmtFinishTime = $map['GmtFinishTime'];
        }
        if (isset($map['GmtRunningTime'])) {
            $model->gmtRunningTime = $map['GmtRunningTime'];
        }
        if (isset($map['GmtStoppedTime'])) {
            $model->gmtStoppedTime = $map['GmtStoppedTime'];
        }
        if (isset($map['GmtSubmittedTime'])) {
            $model->gmtSubmittedTime = $map['GmtSubmittedTime'];
        }
        if (isset($map['GmtSuccessedTime'])) {
            $model->gmtSuccessedTime = $map['GmtSuccessedTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobSpecs'])) {
            if (!empty($map['JobSpecs'])) {
                $model->jobSpecs = [];
                $n               = 0;
                foreach ($map['JobSpecs'] as $item) {
                    $model->jobSpecs[$n++] = null !== $item ? JobSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceLevel'])) {
            $model->resourceLevel = $map['ResourceLevel'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Settings'])) {
            $model->settings = JobSettings::fromMap($map['Settings']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ThirdpartyLibDir'])) {
            $model->thirdpartyLibDir = $map['ThirdpartyLibDir'];
        }
        if (isset($map['ThirdpartyLibs'])) {
            if (!empty($map['ThirdpartyLibs'])) {
                $model->thirdpartyLibs = $map['ThirdpartyLibs'];
            }
        }
        if (isset($map['UserCommand'])) {
            $model->userCommand = $map['UserCommand'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
