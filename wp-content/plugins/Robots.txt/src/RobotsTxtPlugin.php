<?php namespace RobotsTxt;

use Premmerce\SDK\V2\FileManager\FileManager;
use RobotsTxt\Admin\Admin;
use RobotsTxt\Frontend\Frontend;

/**
 * Class RobotsTxtPlugin
 *
 * @package RobotsTxt
 */
class  RobotsTxtPlugin
{

    /**
     * @var FileManager
     */
    private $fileManager;

    /**
     * RobotsTxtPlugin constructor.
     *
     * @param string $mainFile
     */
    public function __construct($mainFile)
    {
        $this->fileManager = new FileManager($mainFile);
        add_action('plugins_loaded', [$this, 'loadTextDomain']);
    }

    /**
     * Run plugin part
     */
    public function run()
    {
        if (is_admin()) {
            new Admin($this->fileManager);
        } else {
            new Frontend($this->fileManager);
        }
    }

    /**
     * Load plugin translations
     */
    public function loadTextDomain()
    {
        $name = $this->fileManager->getPluginName();
        load_plugin_textdomain('robots', false, $name . '/languages/');
    }

    /**
     * Fired when the plugin is activated
     */
    public function activate()
    {
        $fileName = "{$_SERVER['DOCUMENT_ROOT']}/robots.txt";
        if (file_exists($fileName) && !get_option('robotsOptions')) {
            $file = file_get_contents($fileName);
            add_option('robotsOptions', $file);
            add_option('robotsEditorOptions', get_current_user_id());
        }
    }

    /**
     * Fired when the plugin is deactivated
     */
    public function deactivate()
    {
        delete_option(Admin::OPTIONS);
    }

    /**
     * Fired during plugin uninstall
     */
    public static function uninstall()
    {
        delete_option(Admin::OPTIONS);
    }
}

