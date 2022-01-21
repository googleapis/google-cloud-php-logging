<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to ListLogs.
 *
 * Generated from protobuf message <code>google.logging.v2.ListLogsRequest</code>
 */
class ListLogsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name that owns the logs:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The resource name that owns the logs:
     *   projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   organization/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     * To support legacy queries, it could also be:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>repeated string resource_names = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name that owns the logs:
     *               "projects/[PROJECT_ID]"
     *               "organizations/[ORGANIZATION_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]"
     *               "folders/[FOLDER_ID]"
     *     @type int $page_size
     *           Optional. The maximum number of results to return from this request.
     *           Non-positive values are ignored.  The presence of `nextPageToken` in the
     *           response indicates that more results might be available.
     *     @type string $page_token
     *           Optional. If present, then retrieve the next batch of results from the
     *           preceding call to this method.  `pageToken` must be the value of
     *           `nextPageToken` from the previous response.  The values of other method
     *           parameters should be identical to those in the previous call.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_names
     *           Optional. The resource name that owns the logs:
     *             projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *             organization/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *             billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *             folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *           To support legacy queries, it could also be:
     *               "projects/[PROJECT_ID]"
     *               "organizations/[ORGANIZATION_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]"
     *               "folders/[FOLDER_ID]"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name that owns the logs:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name that owns the logs:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of results to return from this request.
     * Non-positive values are ignored.  The presence of `nextPageToken` in the
     * response indicates that more results might be available.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. If present, then retrieve the next batch of results from the
     * preceding call to this method.  `pageToken` must be the value of
     * `nextPageToken` from the previous response.  The values of other method
     * parameters should be identical to those in the previous call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The resource name that owns the logs:
     *   projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   organization/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     * To support legacy queries, it could also be:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>repeated string resource_names = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceNames()
    {
        return $this->resource_names;
    }

    /**
     * Optional. The resource name that owns the logs:
     *   projects/[PROJECT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   organization/[ORGANIZATION_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   billingAccounts/[BILLING_ACCOUNT_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     *   folders/[FOLDER_ID]/locations/[LOCATION_ID]/buckets/[BUCKET_ID]/views/[VIEW_ID]
     * To support legacy queries, it could also be:
     *     "projects/[PROJECT_ID]"
     *     "organizations/[ORGANIZATION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]"
     *     "folders/[FOLDER_ID]"
     *
     * Generated from protobuf field <code>repeated string resource_names = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_names = $arr;

        return $this;
    }

}

