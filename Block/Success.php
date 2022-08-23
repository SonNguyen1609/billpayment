<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Wiki\BillPayment\Block;

/**
 * @method getOrderId
 */
class Success extends \Magento\Checkout\Block\Onepage\Success
{
    protected $_template = 'form.phtml';
}
