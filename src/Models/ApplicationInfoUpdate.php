<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_195dff03d395462ea294bafdba69df3f\Models;

use AlibabaCloud\Tea\Model;

class ApplicationInfoUpdate extends Model
{
    // 应用场景 MINI_APP 小程序 APP 自有app ALL 两种都有
    /**
     * @example ALL
     *
     * @var string
     */
    public $applicationScene;

    // 小程序id
    /**
     * @example 小程序id
     *
     * @var string
     */
    public $tinyAppId;

    // 小程序名称
    /**
     * @example xx小程序
     *
     * @var string
     */
    public $siteName;

    // http://asdasas.com
    /**
     * @example http://asdasas.com
     *
     * @var string
     */
    public $sitUrl;

    // 商户名称。 修改后的商户名称，将同步支付宝代扣签约页面字段展示
    /**
     * @example xx商户
     *
     * @var string
     */
    public $merchantName;

    // 商户服务名称。 修改后的商户服务名称，将同步支付宝代扣签约页面字段展示
    /**
     * @example xx商户服务
     *
     * @var string
     */
    public $merchantServiceName;

    // 商户服务描述。 修改后的商户服务描述，将同步支付宝代扣签约页面字段展示
    /**
     * @example xx服务描述
     *
     * @var string
     */
    public $merchantServiceDesc;

    // 站点信息
    /**
     * @example
     *
     * @var SiteInfo[]
     */
    public $siteInfo;
    protected $_name = [
        'applicationScene'    => 'application_scene',
        'tinyAppId'           => 'tiny_app_id',
        'siteName'            => 'site_name',
        'sitUrl'              => 'sit_url',
        'merchantName'        => 'merchant_name',
        'merchantServiceName' => 'merchant_service_name',
        'merchantServiceDesc' => 'merchant_service_desc',
        'siteInfo'            => 'site_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationScene) {
            $res['application_scene'] = $this->applicationScene;
        }
        if (null !== $this->tinyAppId) {
            $res['tiny_app_id'] = $this->tinyAppId;
        }
        if (null !== $this->siteName) {
            $res['site_name'] = $this->siteName;
        }
        if (null !== $this->sitUrl) {
            $res['sit_url'] = $this->sitUrl;
        }
        if (null !== $this->merchantName) {
            $res['merchant_name'] = $this->merchantName;
        }
        if (null !== $this->merchantServiceName) {
            $res['merchant_service_name'] = $this->merchantServiceName;
        }
        if (null !== $this->merchantServiceDesc) {
            $res['merchant_service_desc'] = $this->merchantServiceDesc;
        }
        if (null !== $this->siteInfo) {
            $res['site_info'] = [];
            if (null !== $this->siteInfo && \is_array($this->siteInfo)) {
                $n = 0;
                foreach ($this->siteInfo as $item) {
                    $res['site_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplicationInfoUpdate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['application_scene'])) {
            $model->applicationScene = $map['application_scene'];
        }
        if (isset($map['tiny_app_id'])) {
            $model->tinyAppId = $map['tiny_app_id'];
        }
        if (isset($map['site_name'])) {
            $model->siteName = $map['site_name'];
        }
        if (isset($map['sit_url'])) {
            $model->sitUrl = $map['sit_url'];
        }
        if (isset($map['merchant_name'])) {
            $model->merchantName = $map['merchant_name'];
        }
        if (isset($map['merchant_service_name'])) {
            $model->merchantServiceName = $map['merchant_service_name'];
        }
        if (isset($map['merchant_service_desc'])) {
            $model->merchantServiceDesc = $map['merchant_service_desc'];
        }
        if (isset($map['site_info'])) {
            if (!empty($map['site_info'])) {
                $model->siteInfo = [];
                $n               = 0;
                foreach ($map['site_info'] as $item) {
                    $model->siteInfo[$n++] = null !== $item ? SiteInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
