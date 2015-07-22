<?php
/**
 * @author Frank Karlitschek <frank@owncloud.org>
 * @author Lukas Reschke <lukas@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */
// We only can count up. The 4. digit is only for the internal patchlevel to trigger DB upgrades
// between betas, final and RCs. This is _not_ the public version number. Reset minor/patchlevel
// when updating major/minor version number.
$OC_Version=array(8, 1, 1, 0);

// The human readable string
$OC_VersionString='8.1.1';

// The ownCloud channel
$OC_Channel='git';

// The build number
$OC_Build='';

