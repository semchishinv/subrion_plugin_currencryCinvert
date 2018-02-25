<?php
/******************************************************************************
 *
 * Subrion - open source content management system
 * Copyright (C) 2017 Intelliants, LLC <https://intelliants.com>
 *
 * This file is part of Subrion.
 *
 * Subrion is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Subrion is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Subrion. If not, see <http://www.gnu.org/licenses/>.
 *
 *
 * @link https://subrion.org/
 *
 ******************************************************************************/

if (iaView::REQUEST_JSON == $iaView->getRequestType())
{
    if ('conversion' == $iaCore->requestPath[0]) {
        $output = [];
        $first  = $_POST['first'];
        $second = $_POST['second'];

        $iaCore->factory('util');

        $iaPerson = $iaCore->factoryModule('currency', 'currency');

        $service_url = 'http://apilayer.net/api/live?access_key=df7fd7ce6581e1c9eedf2e76da252f08&currencies='.$first.','.$second.'&source=USD&format=1';
        $curl_response = iaUtil::getPageContent($service_url);
        $decoded = json_decode($curl_response, true);
        $output['result']=$decoded['quotes'];

        $iaView->assign($output);
    }
}

