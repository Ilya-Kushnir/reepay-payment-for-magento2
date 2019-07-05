<?php

namespace Radarsofthouse\Reepay\Model\Config\Source;

/**
 * Class Paymenticons
 *
 * @package Radarsofthouse\Reepay\Model\Config\Source
 */
class Paymenticons implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Return Reepay payment icons
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'american-express', 'label' => __('American express')],
            ['value' => 'dankort', 'label' => __('Dankort')],
            ['value' => 'diners-club-international', 'label' => __('Diners club international')],
            ['value' => 'discover', 'label' => __('Discover')],
            ['value' => 'forbrugsforeningen', 'label' => __('Forbrugsforeningen')],
            ['value' => 'jcb', 'label' => __('JCB')],
            ['value' => 'maestro', 'label' => __('Maestro')],
            ['value' => 'mastercard', 'label' => __('Mastercard')],
            ['value' => 'mobilepay', 'label' => __('Mobilepay')],
            ['value' => 'unionpay', 'label' => __('Unionpay')],
            ['value' => 'viabill', 'label' => __('Viabill')],
            ['value' => 'visa', 'label' => __('Visa')],
            ['value' => 'visa-electron', 'label' => __('Visa electron')],
            ['value' => 'klarna-pay-later', 'label' => __('Klarna Pay Later')],
            ['value' => 'klarna-pay-now', 'label' => __('Klarna Pay Now')]
        ];
    }
}