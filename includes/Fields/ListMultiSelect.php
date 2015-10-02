<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Fields_MultiselectList
 */
class NF_Fields_ListMultiselect extends NF_Abstracts_List
{
    protected $_name = 'multiselectlist';

    protected $_nicename = 'Mulit-Select';

    protected $_group = 'standard_fields';

    public function __construct()
    {
        parent::__construct();

        $this->_nicename = __( 'Multi-Select', Ninja_Forms::TEXTDOMAIN );
    }
}
