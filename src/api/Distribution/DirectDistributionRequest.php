<?php


namespace leqee\CMBFirmBankSDK\api\Distribution;


use leqee\CMBFirmBankSDK\api\Basement\BaseRequest;
use leqee\CMBFirmBankSDK\api\Distribution\component\SDKATDRQXComponent;
use leqee\CMBFirmBankSDK\api\Distribution\component\SDKATSRQXComponent;

/**
 * Class DirectDistributionRequest
 * @package leqee\CMBFirmBankSDK\api\Distribution
 * 直接代发代扣
 * @version 5.37.0 - 4.2
 */
class DirectDistributionRequest extends BaseRequest
{
    /**
     * DirectDistributionRequest constructor.
     * @param string $loginName
     * @param SDKATSRQXComponent $distributionRequest
     */
    public function __construct(string $loginName, SDKATSRQXComponent $distributionRequest)
    {
        parent::__construct($loginName, 'AgentRequest');
        $this->appendComponent($distributionRequest);
    }

    /**
     * @note 直接代发代扣明细输入 1..6000 条
     * @param SDKATDRQXComponent $distributionDetail
     * @return DirectDistributionRequest
     */
    public function addDistributionDetail(SDKATDRQXComponent $distributionDetail){
        $this->appendComponent($distributionDetail);
        return $this;
    }
}