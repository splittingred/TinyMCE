<?php
/**
 * TinyMCE MODx Integration
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * TinyMCE MODx Integration is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * TinyMCE MODx Integration is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * TinyMCE MODx Integration; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package tinymce
 */
/**
 * Resolver to set which_editor to CKEditor
 *
 * @package tinymce
 * @subpackage build
 */
$success= true;
if ($pluginid= $object->get('id')) {
    switch ($options[xPDOTransport::PACKAGE_ACTION]) {
        case xPDOTransport::ACTION_INSTALL:
        case xPDOTransport::ACTION_UPGRADE:
            $object->xpdo->log(xPDO::LOG_LEVEL_INFO,'Attempting to set which_editor setting to TinyMCE.');
            $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'which_editor'));
            if ($setting) {
                $setting->set('value','TinyMCE');
                $setting->save();
            }
            unset($setting);
            $object->xpdo->log(xPDO::LOG_LEVEL_INFO,'Attempting to set use_editor setting to on.');
            $setting = $object->xpdo->getObject('modSystemSetting',array('key' => 'use_editor'));
            if ($setting) {
                $setting->set('value',1);
                $setting->save();
            }
            unset($setting);
            break;
        case xPDOTransport::ACTION_UNINSTALL:
            $success= true;
            break;
    }
}

return $success;