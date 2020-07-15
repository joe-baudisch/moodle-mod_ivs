<?php
/*************************************************************************
 *
 * GHOSTTHINKER CONFIDENTIAL
 * __________________
 *
 *  2006 - 2017 Ghostthinker GmbH
 *  All Rights Reserved.
 *
 * NOTICE:  All information contained herein is, and remains
 * the property of Ghostthinker GmbH and its suppliers,
 * if any.  The intellectual and technical concepts contained
 * herein are proprietary to Ghostthinker GmbH
 * and its suppliers and may be covered by German and Foreign Patents,
 * patents in process, and are protected by trade secret or copyright law.
 * Dissemination of this information or reproduction of this material
 * is strictly forbidden unless prior written permission is obtained
 * from Ghostthinker GmbH.
 */

/**
 * Defines the view event.
 *
 * @package    mod_ivs
 * @copyright 2017 Ghostthinker GmbH <info@ghostthinker.de>
 * @license   All Rights Reserved.
 */

namespace mod_ivs\event;

defined('MOODLE_INTERNAL') || die();

/**
 * The mod_ivs instance viewed event class
 *
 * If the view mode needs to be stored as well, you may need to
 * override methods get_url() and get_legacy_log_data(), too.
 *
 * @package    mod_ivs
 * @copyright 2017 Ghostthinker GmbH <info@ghostthinker.de>
 * @license   All Rights Reserved.
 */
class course_module_viewed extends \core\event\course_module_viewed {

    /**
     * Initialize the event
     */
    protected function init() {
        $this->data['objecttable'] = 'ivs';
        parent::init();
    }
}
