<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyLaunchTemplateDefaultVersion
 *
 * @method string getLaunchTemplateName()
 * @method string getResourceOwnerId()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getDefaultVersionNumber()
 */
class ModifyLaunchTemplateDefaultVersionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Ecs',
            '2014-05-26',
            'ModifyLaunchTemplateDefaultVersion',
            'ecs'
        );
    }

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function setLaunchTemplateName($launchTemplateName)
    {
        $this->requestParameters['LaunchTemplateName'] = $launchTemplateName;
        $this->queryParameters['LaunchTemplateName'] = $launchTemplateName;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->requestParameters['LaunchTemplateId'] = $launchTemplateId;
        $this->queryParameters['LaunchTemplateId'] = $launchTemplateId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $defaultVersionNumber
     *
     * @return $this
     */
    public function setDefaultVersionNumber($defaultVersionNumber)
    {
        $this->requestParameters['DefaultVersionNumber'] = $defaultVersionNumber;
        $this->queryParameters['DefaultVersionNumber'] = $defaultVersionNumber;

        return $this;
    }
}
