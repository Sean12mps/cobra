<?php

namespace Pantheon\SWP\Commands;

use Pantheon\Terminus\Commands\Site\SiteCommand;
use Pantheon\Terminus\Commands\TerminusCommand;
use Pantheon\Terminus\Site\SiteAwareInterface;
use Pantheon\Terminus\Collections\Sites;
use Pantheon\Terminus\Models\Site;

class SwpCommand extends SiteCommand
{

    /**
     * Main functions.
     *
     * @command site:cobra
     *
     * @since 1.0.0
     */
    public function cobra()
    {

        // 	Load helpers.
        $this->load_helpers();

        // 	Initiate helpers.
        $this->initiate_helpers();

        // 	Work.
        $this->forge();

    }

    /**
     * Brew commands here.
     *
     * @since 1.0.0
     */
    private function forge()
    {
    }

    /**
     * Initiate supporting classes.
     *
     * @since 1.0.0
     */
    private function initiate_helpers()
    {
    }

    /**
     * Load supporting files.
     *
     * @since 1.0.0
     */
    private function load_helpers()
    {

    	// 	WP-cli commands in Pantheon
        require('lib/lib-WPCommand.php');

    }

}
