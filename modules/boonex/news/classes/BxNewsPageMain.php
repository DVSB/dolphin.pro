<?php
/**
 * Copyright (c) BoonEx Pty Limited - http://www.boonex.com/
 * CC-BY License - http://creativecommons.org/licenses/by/3.0/
 */

bx_import('BxDolTextPageMain');

class BxNewsPageMain extends BxDolTextPageMain
{
    function BxNewsPageMain(&$oObject)
    {
        parent::BxDolTextPageMain('news_home', $oObject);
    }
}
