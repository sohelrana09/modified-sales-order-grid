<?php
namespace SR\ModifiedSalesOrderGrid\Ui\Component\Listing\Sales;

class Columns extends \Magento\Ui\Component\Listing\Columns
{
    /**
     * Prepare component configuration
     *
     * @return void
     */
    public function prepare()
    {
        $config = $this->getData('config');
        if(isset($config['component'])) {
            $config['component'] = 'SR_ModifiedSalesOrderGrid/js/grid/listing';
        }
        $this->setData('config', (array)$config);

        parent::prepare();
    }
}