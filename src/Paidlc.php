<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateCodeSourceRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateDataSourceRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\DeleteTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetCodeSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetDataSourceResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobMetricsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodEventsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetPodLogsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\GetTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListCodeSourcesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListCodeSourcesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListDataSourcesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListDataSourcesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListEcsSpecsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListImagesRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListImagesResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListJobsShrinkRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\ListTensorboardsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StartTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopJobsRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopJobsResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\StopTensorboardResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateJobRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateJobResponse;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardRequest;
use AlibabaCloud\SDK\Paidlc\V20201203\Models\UpdateTensorboardResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Paidlc extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_signatureAlgorithm = 'v2';
        $this->_endpointRule       = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('pai-dlc', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param CreateCodeSourceRequest $request
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createCodeSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateCodeSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateCodeSourceResponse
     */
    public function createCodeSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeBranch)) {
            $body['CodeBranch'] = $request->codeBranch;
        }
        if (!Utils::isUnset($request->codeRepo)) {
            $body['CodeRepo'] = $request->codeRepo;
        }
        if (!Utils::isUnset($request->codeRepoAccessToken)) {
            $body['CodeRepoAccessToken'] = $request->codeRepoAccessToken;
        }
        if (!Utils::isUnset($request->codeRepoUserName)) {
            $body['CodeRepoUserName'] = $request->codeRepoUserName;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->mountPath)) {
            $body['MountPath'] = $request->mountPath;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateCodeSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateDataSourceRequest $request
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSource($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createDataSourceWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateDataSourceRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return CreateDataSourceResponse
     */
    public function createDataSourceWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endpoint)) {
            $body['Endpoint'] = $request->endpoint;
        }
        if (!Utils::isUnset($request->fileSystemId)) {
            $body['FileSystemId'] = $request->fileSystemId;
        }
        if (!Utils::isUnset($request->mountPath)) {
            $body['MountPath'] = $request->mountPath;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->path)) {
            $body['Path'] = $request->path;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateDataSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createJobWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->codeSource)) {
            $body['CodeSource'] = $request->codeSource;
        }
        if (!Utils::isUnset($request->dataSources)) {
            $body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->debuggerConfigContent)) {
            $body['DebuggerConfigContent'] = $request->debuggerConfigContent;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->elasticSpec)) {
            $body['ElasticSpec'] = $request->elasticSpec;
        }
        if (!Utils::isUnset($request->envs)) {
            $body['Envs'] = $request->envs;
        }
        if (!Utils::isUnset($request->jobMaxRunningTimeMinutes)) {
            $body['JobMaxRunningTimeMinutes'] = $request->jobMaxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->jobSpecs)) {
            $body['JobSpecs'] = $request->jobSpecs;
        }
        if (!Utils::isUnset($request->jobType)) {
            $body['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $body['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->settings)) {
            $body['Settings'] = $request->settings;
        }
        if (!Utils::isUnset($request->thirdpartyLibDir)) {
            $body['ThirdpartyLibDir'] = $request->thirdpartyLibDir;
        }
        if (!Utils::isUnset($request->thirdpartyLibs)) {
            $body['ThirdpartyLibs'] = $request->thirdpartyLibs;
        }
        if (!Utils::isUnset($request->userCommand)) {
            $body['UserCommand'] = $request->userCommand;
        }
        if (!Utils::isUnset($request->userVpc)) {
            $body['UserVpc'] = $request->userVpc;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateTensorboardRequest $request
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboard($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->createTensorboardWithOptions($request, $headers, $runtime);
    }

    /**
     * @param CreateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return CreateTensorboardResponse
     */
    public function createTensorboardWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $body['DataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->dataSourceType)) {
            $body['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->dataSources)) {
            $body['DataSources'] = $request->dataSources;
        }
        if (!Utils::isUnset($request->displayName)) {
            $body['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            $body['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->options)) {
            $body['Options'] = $request->options;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $body['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $body['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->summaryPath)) {
            $body['SummaryPath'] = $request->summaryPath;
        }
        if (!Utils::isUnset($request->summaryRelativePath)) {
            $body['SummaryRelativePath'] = $request->summaryRelativePath;
        }
        if (!Utils::isUnset($request->uri)) {
            $body['Uri'] = $request->uri;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $body['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return CreateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $CodeSourceId
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteCodeSourceResponse
     */
    public function deleteCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $CodeSourceId = OpenApiUtilClient::getEncodeParam($CodeSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteCodeSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . $CodeSourceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $DataSourceId
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSource($DataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteDataSourceWithOptions($DataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $DataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteDataSourceResponse
     */
    public function deleteDataSourceWithOptions($DataSourceId, $headers, $runtime)
    {
        $DataSourceId = OpenApiUtilClient::getEncodeParam($DataSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteDataSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources/' . $DataSourceId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return DeleteJobResponse
     */
    public function deleteJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return DeleteJobResponse
     */
    public function deleteJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'DeleteJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param DeleteJobsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobIds)) {
            $body['JobIds'] = $request->jobIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DeleteJobs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/batch/jobs/delete',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $TensorboardId
     * @param DeleteTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return DeleteTensorboardResponse
     */
    public function deleteTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . $TensorboardId . '',
            'method'      => 'DELETE',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return DeleteTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $CodeSourceId
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSource($CodeSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getCodeSourceWithOptions($CodeSourceId, $headers, $runtime);
    }

    /**
     * @param string         $CodeSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetCodeSourceResponse
     */
    public function getCodeSourceWithOptions($CodeSourceId, $headers, $runtime)
    {
        $CodeSourceId = OpenApiUtilClient::getEncodeParam($CodeSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetCodeSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources/' . $CodeSourceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetCodeSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $DataSourceId
     *
     * @return GetDataSourceResponse
     */
    public function getDataSource($DataSourceId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getDataSourceWithOptions($DataSourceId, $headers, $runtime);
    }

    /**
     * @param string         $DataSourceId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetDataSourceResponse
     */
    public function getDataSourceWithOptions($DataSourceId, $headers, $runtime)
    {
        $DataSourceId = OpenApiUtilClient::getEncodeParam($DataSourceId);
        $req          = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetDataSource',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources/' . $DataSourceId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetDataSourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return GetJobResponse
     */
    public function getJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return GetJobResponse
     */
    public function getJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'GetJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     *
     * @return GetJobEventsResponse
     */
    public function getJobEvents($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobEventsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @param string              $JobId
     * @param GetJobEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetJobEventsResponse
     */
    public function getJobEventsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            $query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobEvents',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetrics($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getJobMetricsWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @param string               $JobId
     * @param GetJobMetricsRequest $request
     * @param string[]             $headers
     * @param RuntimeOptions       $runtime
     *
     * @return GetJobMetricsResponse
     */
    public function getJobMetricsWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->metricType)) {
            $query['MetricType'] = $request->metricType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeStep)) {
            $query['TimeStep'] = $request->timeStep;
        }
        if (!Utils::isUnset($request->token)) {
            $query['Token'] = $request->token;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetJobMetrics',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '/metrics',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetJobMetricsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     *
     * @return GetPodEventsResponse
     */
    public function getPodEvents($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @param string              $JobId
     * @param string              $PodId
     * @param GetPodEventsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetPodEventsResponse
     */
    public function getPodEventsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $PodId = OpenApiUtilClient::getEncodeParam($PodId);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxEventsNum)) {
            $query['MaxEventsNum'] = $request->maxEventsNum;
        }
        if (!Utils::isUnset($request->podUid)) {
            $query['PodUid'] = $request->podUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPodEvents',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '/pods/' . $PodId . '/events',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPodEventsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogs($JobId, $PodId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime);
    }

    /**
     * @param string            $JobId
     * @param string            $PodId
     * @param GetPodLogsRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return GetPodLogsResponse
     */
    public function getPodLogsWithOptions($JobId, $PodId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $PodId = OpenApiUtilClient::getEncodeParam($PodId);
        $query = [];
        if (!Utils::isUnset($request->downloadToFile)) {
            $query['DownloadToFile'] = $request->downloadToFile;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->maxLines)) {
            $query['MaxLines'] = $request->maxLines;
        }
        if (!Utils::isUnset($request->podUid)) {
            $query['PodUid'] = $request->podUid;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPodLogs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '/pods/' . $PodId . '/logs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetPodLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                $TensorboardId
     * @param GetTensorboardRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetTensorboardResponse
     */
    public function getTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->jodId)) {
            $query['JodId'] = $request->jodId;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . $TensorboardId . '',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListCodeSourcesRequest $request
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listCodeSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListCodeSourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListCodeSourcesResponse
     */
    public function listCodeSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListCodeSources',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/codesources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListCodeSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListDataSourcesRequest $request
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSources($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listDataSourcesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListDataSourcesRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return ListDataSourcesResponse
     */
    public function listDataSourcesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceType)) {
            $query['DataSourceType'] = $request->dataSourceType;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListDataSources',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/datasources',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListDataSourcesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListEcsSpecsRequest $request
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listEcsSpecsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListEcsSpecsRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return ListEcsSpecsResponse
     */
    public function listEcsSpecsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListEcsSpecs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/ecsspecs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListEcsSpecsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListImagesRequest $request
     *
     * @return ListImagesResponse
     */
    public function listImages($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listImagesWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListImagesRequest $request
     * @param string[]          $headers
     * @param RuntimeOptions    $runtime
     *
     * @return ListImagesResponse
     */
    public function listImagesWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->acceleratorType)) {
            $query['AcceleratorType'] = $request->acceleratorType;
        }
        if (!Utils::isUnset($request->framework)) {
            $query['Framework'] = $request->framework;
        }
        if (!Utils::isUnset($request->imageProviderType)) {
            $query['ImageProviderType'] = $request->imageProviderType;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListImages',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/images',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListImagesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListJobsRequest $tmpReq
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($tmpReq, $headers, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ListJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->tags)) {
            $request->tagsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->tags, 'Tags', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->businessUserId)) {
            $query['BusinessUserId'] = $request->businessUserId;
        }
        if (!Utils::isUnset($request->caller)) {
            $query['Caller'] = $request->caller;
        }
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->fromAllWorkspaces)) {
            $query['FromAllWorkspaces'] = $request->fromAllWorkspaces;
        }
        if (!Utils::isUnset($request->jobType)) {
            $query['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->pipelineId)) {
            $query['PipelineId'] = $request->pipelineId;
        }
        if (!Utils::isUnset($request->resourceId)) {
            $query['ResourceId'] = $request->resourceId;
        }
        if (!Utils::isUnset($request->showOwn)) {
            $query['ShowOwn'] = $request->showOwn;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tagsShrink)) {
            $query['Tags'] = $request->tagsShrink;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListJobs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListTensorboardsRequest $request
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboards($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->listTensorboardsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param ListTensorboardsRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return ListTensorboardsResponse
     */
    public function listTensorboardsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->displayName)) {
            $query['DisplayName'] = $request->displayName;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->order)) {
            $query['Order'] = $request->order;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sortBy)) {
            $query['SortBy'] = $request->sortBy;
        }
        if (!Utils::isUnset($request->sourceId)) {
            $query['SourceId'] = $request->sourceId;
        }
        if (!Utils::isUnset($request->sourceType)) {
            $query['SourceType'] = $request->sourceType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tensorboardId)) {
            $query['TensorboardId'] = $request->tensorboardId;
        }
        if (!Utils::isUnset($request->verbose)) {
            $query['Verbose'] = $request->verbose;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListTensorboards',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return ListTensorboardsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                  $TensorboardId
     * @param StartTensorboardRequest $request
     * @param string[]                $headers
     * @param RuntimeOptions          $runtime
     *
     * @return StartTensorboardResponse
     */
    public function startTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StartTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . $TensorboardId . '/start',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StartTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string $JobId
     *
     * @return StopJobResponse
     */
    public function stopJob($JobId)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobWithOptions($JobId, $headers, $runtime);
    }

    /**
     * @param string         $JobId
     * @param string[]       $headers
     * @param RuntimeOptions $runtime
     *
     * @return StopJobResponse
     */
    public function stopJobWithOptions($JobId, $headers, $runtime)
    {
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $req   = new OpenApiRequest([
            'headers' => $headers,
        ]);
        $params = new Params([
            'action'      => 'StopJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '/stop',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param StopJobsRequest $request
     *
     * @return StopJobsResponse
     */
    public function stopJobs($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopJobsWithOptions($request, $headers, $runtime);
    }

    /**
     * @param StopJobsRequest $request
     * @param string[]        $headers
     * @param RuntimeOptions  $runtime
     *
     * @return StopJobsResponse
     */
    public function stopJobsWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->jobIds)) {
            $body['JobIds'] = $request->jobIds;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'StopJobs',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/batch/jobs/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                 $TensorboardId
     * @param StopTensorboardRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return StopTensorboardResponse
     */
    public function stopTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . $TensorboardId . '/stop',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return StopTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string           $JobId
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($JobId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateJobWithOptions($JobId, $request, $headers, $runtime);
    }

    /**
     * @param string           $JobId
     * @param UpdateJobRequest $request
     * @param string[]         $headers
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($JobId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $JobId = OpenApiUtilClient::getEncodeParam($JobId);
        $body  = [];
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'body'    => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'UpdateJob',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/jobs/' . $JobId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboard($TensorboardId, $request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime);
    }

    /**
     * @param string                   $TensorboardId
     * @param UpdateTensorboardRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return UpdateTensorboardResponse
     */
    public function updateTensorboardWithOptions($TensorboardId, $request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $TensorboardId = OpenApiUtilClient::getEncodeParam($TensorboardId);
        $query         = [];
        if (!Utils::isUnset($request->maxRunningTimeMinutes)) {
            $query['MaxRunningTimeMinutes'] = $request->maxRunningTimeMinutes;
        }
        if (!Utils::isUnset($request->workspaceId)) {
            $query['WorkspaceId'] = $request->workspaceId;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateTensorboard',
            'version'     => '2020-12-03',
            'protocol'    => 'HTTPS',
            'pathname'    => '/api/v1/tensorboards/' . $TensorboardId . '',
            'method'      => 'PUT',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateTensorboardResponse::fromMap($this->callApi($params, $req, $runtime));
    }
}
