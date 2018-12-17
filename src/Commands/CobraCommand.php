<?php

namespace Pantheon\SWP\Commands;

use Pantheon\Terminus\Commands\Site\SiteCommand;
use Pantheon\Terminus\Commands\TerminusCommand;
use Pantheon\Terminus\Site\SiteAwareInterface;
use Pantheon\Terminus\Collections\Sites;
use Pantheon\Terminus\Models\Site;

class SwpCommand extends SiteCommand
{

	private $args = false;
	private $assoc_args;

    /**
     * Main functions.
     *
     * @command site:cobra
     *
     * @since 1.0.0
     */
    public function cobra($args=false,$assoc_args=array())
    {

        // 	Load helpers.
        $this->load_helpers();

        // 	Initiate helpers.
        $this->initiate_helpers();

        // 	Parse arguments.
        $this->assoc_args = $assoc_args;

        if ($args){
	        $args = $this->parse_arguments($args);
        }

        // 	Work.
        $this->forge($args);

    }

    /**
     * Brew commands here.
     *
     * @since 1.0.0
     */
    private function parse_arguments($args=false)
    {

    	//	Parse arguments here.
    	$this->args = $args;

    }

    /**
     * Brew commands here.
     *
     * @since 1.0.0
     */
    private function forge($args=false)
    {

    	//	Write commands here.

    }

    /**
     * Initiate supporting classes.
     *
     * @since 1.0.0
     */
    private function initiate_helpers()
    {

    	//	Initiate helpers here.

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
