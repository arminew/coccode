<?php

namespace VisualComposer\Modules\Editors\Settings;

use VisualComposer\Framework\Container;
use VisualComposer\Framework\Illuminate\Support\Module;
use VisualComposer\Helpers\Request;
use VisualComposer\Helpers\Frontend;
use VisualComposer\Helpers\Traits\EventsFilters;
use VisualComposer\Helpers\Traits\WpFiltersActions;

if (!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}

/**
 * Class TitleController
 * @package VisualComposer\Modules\Editors\Settings
 */
class TitleController extends Container implements Module
{
    use EventsFilters;
    use WpFiltersActions;

    protected $titleRemoveClosure = null;

    public function __construct()
    {
        if (vcvenv('VCV_PAGE_TITLE_FE')) {
            $this->titleRemoveClosure = $this->wpAddFilter(
                'the_title',
                'titleRemove'
            );

            //remove the filer before menu title render
            $this->wpAddFilter(
                'wp_nav_menu_args',
                'removeTitleFilter'
            );

            //add the filter back after the menu title is rendered
            $this->wpAddFilter(
                'wp_nav_menu_items',
                'addTitleFilter'
            );
            $this->addFilter('vcv:frontend:head:extraOutput', 'outputTitle');
            $this->addFilter('vcv:dataAjax:setData', 'setPageTitle');
        }
    }

    protected function removeTitleFilter($args)
    {
        $this->wpRemoveFilter('the_title', $this->titleRemoveClosure);

        return $args;
    }

    protected function addTitleFilter($item)
    {
        // callback must be same as defined in constructor in wpAddFilter
        add_filter(
            'the_title',
            $this->titleRemoveClosure,
            10,
            2
        );

        return $item;
    }

    protected function setPageTitle($response, $payload, Request $requestHelper, Frontend $frontendHelper)
    {
        $sourceId = $payload['sourceId'];
        $post = get_post($sourceId);
        if (is_object($post)) {
            if ($frontendHelper->isPreview()) {
                $preview = wp_get_post_autosave($sourceId);
                if (is_object($preview)) {
                    $sourceId = $preview->ID;
                    $post = $preview;
                }
            }
            $pageTitle = $requestHelper->input('vcv-page-title');
            $pageTitleDisabled = $requestHelper->input('vcv-page-title-disabled', false);
            if ($requestHelper->exists('vcv-page-title') && !$pageTitle) {
                $pageTitleDisabled = true;
            }
            if ($post && $requestHelper->exists('vcv-page-title')) {
                // @codingStandardsIgnoreLine
                $post->post_title = $pageTitle;
                update_metadata('post', $sourceId, '_' . VCV_PREFIX . 'pageTitleDisabled', $pageTitleDisabled);
                //temporarily disable (can break preview page and content if not removed)
                remove_filter('content_save_pre', 'wp_filter_post_kses');
                remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
                wp_update_post($post);
                //bring it back once you're done posting
                add_filter('content_save_pre', 'wp_filter_post_kses');
                add_filter('content_filtered_save_pre', 'wp_filter_post_kses');
            }
        }

        return $response;
    }

    protected function outputTitle($response, $payload)
    {
        global $post;
        $postMeta = get_post_meta($post->ID, '_' . VCV_PREFIX . 'pageTitleDisabled', true);

        return array_merge(
            $response,
            [
                vcview(
                    'partials/constant-script',
                    [
                        'key' => 'VCV_PAGE_TITLE',
                        'value' => [
                            // @codingStandardsIgnoreLine
                            'current' => $post ? $post->post_title : '',
                            'disabled' => $postMeta || false,
                        ],
                    ]
                ),
            ]
        );
    }

    /**
     * @param $title
     * @param $postId integer - id of the page/post
     *
     * @return string
     */
    protected function titleRemove($title, $postId)
    {
        if (!is_admin()) {
            $frontendHelper = vchelper('Frontend');
            $requestHelper = vchelper('Request');
            $post = get_post($postId);
            if ($frontendHelper->isPreview()) {
                $preview = wp_get_post_autosave($post->ID);
                if (is_object($preview)) {
                    $post = $preview;
                }
            }
            if ($post) {
                $disableMeta = get_post_meta($post->ID, '_' . VCV_PREFIX . 'pageTitleDisabled', true);
                // Add entry title only for correct Page Editable
                if ($frontendHelper->isPageEditable() && intval($requestHelper->input('vcv-source-id')) === $postId) {
                    $title = '<vcvtitle>' . $title . '</vcvtitle>';
                } else {
                    if ($disableMeta) {
                        $title = '';
                    }
                }
            }
        }

        return $title;
    }
}
