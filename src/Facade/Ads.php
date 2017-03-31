<?php

namespace Helldar\Vk\Facade;

class Ads extends BaseFacade
{
    /**
     * @var string
     */
    protected $section = 'ads';

    /**
     * Available methods.
     *
     * @var array
     */
    protected $methods = array(
        'addOfficeUsers',
        'checkLink',
        'createAds',
        'createCampaigns',
        'createClients',
        'createTargetGroup',
        'deleteAds',
        'deleteCampaigns',
        'deleteClients',
        'deleteTargetGroup',
        'getAccounts',
        'getAds',
        'getAdsLayout',
        'getAdsTargeting',
        'getBudget',
        'getCampaigns',
        'getCategories',
        'getClients',
        'getDemographics',
        'getFloodStats',
        'getOfficeUsers',
        'getPostsReach',
        'getRejectionReason',
        'getStatistics',
        'getSuggestions',
        'getTargetGroups',
        'getTargetingStats',
        'getUploadURL',
        'getVideoUploadURL',
        'importTargetContacts',
        'removeOfficeUsers',
        'updateAds',
        'updateCampaigns',
        'updateClients',
        'updateTargetGroup',
    );
}
