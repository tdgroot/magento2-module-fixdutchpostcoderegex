<?php

namespace Timpack\FixDutchPostCodeRegex\Model\Directory\Country\Postcode\Config;


class Plugin
{
    /**
     * @param \Magento\Directory\Model\Country\Postcode\Config $subject
     * @param array                                            $result
     *
     * @return array
     */
    public function afterGetPostCodes(\Magento\Directory\Model\Country\Postcode\Config $subject, array $result)
    {
        $result['NL']['pattern_1'] = [
            'example' => '1234 AB',
            'pattern' => '^[0-9]{4}\s?[a-zA-Z]{2}$'
        ];

        return $result;
    }
}