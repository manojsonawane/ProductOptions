<?php
/**
 * Atwix
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Atwix Mod
 * @package     Atwix_ProductOptions
 * @author      Atwix Core Team
 * @copyright   Copyright (c) 2013 Atwix (http://www.atwix.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/* /app/code/local/Atwix/ProductOptions/Model/Observer.php */
class Atwix_ProductOptions_Model_Observer
{
    /**
     * Checks if needed collection catched and passes it to Storage Model to store options
     * @param $observer
     * @return $this
     */
    public function storeAttributes($observer)
    {
        $collection = $observer->getCollection();
        if ($collection instanceof Mage_Catalog_Model_Resource_Product_Type_Configurable_Product_Collection)
        {
            $storageModel = Mage::getSingleton('atwix_productoptions/storage');
            $storageModel->storeData($collection);
        }
        return $this;
    }
}