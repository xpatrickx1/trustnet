<?php namespace RobotsTxt\Admin;

use Premmerce\SDK\V2\FileManager\FileManager;

/**
 * Class Admin
 *
 * @package RobotsTxt\Admin
 */
class Admin
{

    const OPTIONS = 'robotsOptions';
    const OPTIONS_EDITOR = 'robotsEditorOptions';

    /**
     * @var FileManager
     */
    private $fileManager;

    private $options;

    /**
     * Admin constructor.
     *
     * Register menu items and handlers
     *
     * @param FileManager $fileManager
     */
    public function __construct(FileManager $fileManager)
    {

        $this->fileManager = $fileManager;
        $this->registerActions();
    }

    public function registerActions()
    {
        add_action('admin_init', array($this, 'addOptions'), 10);
        add_action('admin_init', array($this, 'registerSettings'), 11);
        add_filter('plugin_action_links_robots/robots.php', array($this, 'PluginActionLinks'));
    }


    public function addOptions()
    {
        $this->options = get_option(self::OPTIONS);
        if (!is_array($this->options)) {
            $this->options = $this->setDefaultOptions();
        }
    }

    public function registerSettings()
    {
        register_setting('reading', self::OPTIONS, array(
            'sanitize_callback' => array($this, 'updateSettings'),
        ));

        add_settings_section('main_settings',
            __('', 'robots'),
            array($this, 'mainSection'),
            'reading');

    }

    public function setDefaultOptions()
    {
        $home_url = home_url();

        if (is_plugin_active('wordpress-seo/wp-seo.php')) {
            $sitemap = $home_url . '/sitemap_index.xml';
        } else {
            $sitemap = $home_url . '/sitemap.xml';
        }
        $user_info = get_userdata(get_option(self::OPTIONS_EDITOR));
        $options = [
            'robotsTxt' => get_option(self::OPTIONS),
            'robotsEditor' => $user_info->user_login
        ];
        update_option(self::OPTIONS, $options);
        update_option(self::OPTIONS_EDITOR, get_current_user_id());
        return $options;
    }


    public function mainSection()
    {
        $this->fileManager->includeTemplate('admin/section/main-settings.php', array(
            'robotsTxt' => $this->getOption('robotsTxt')
        ));
    }

    public function getOption($key, $default = null)
    {
        return isset($this->options[$key]) ? $this->options[$key] : $default;
    }

    public function updateSettings($settings)
    {
        return $settings;
    }

    public function PluginActionLinks($links)
    {
        $action_links = array(
            'settings' => '<a href="' . admin_url('options-reading.php#robotstxt-settings') .
                '" aria-label="' . esc_attr__('Robots.txt', 'robots') .
                '">' . esc_html__('Settings', 'robots') .
                '</a>');

        return array_merge($action_links, $links);
    }


}