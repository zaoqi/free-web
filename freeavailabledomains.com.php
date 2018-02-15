<?php
//    Copyright (C) 2018  Zaoqi

//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as published
//    by the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.

//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.

//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.

function send_post($url, $data) {
	$options = array(
		'http' => array(
			'method' => 'POST',
			'header' => 'Content-type:application/x-www-form-urlencoded',
			'content' => http_build_query($data)));
	return file_get_contents($url, false, stream_context_create($options));}
function signup($email, $username, $password) {
	$singupstr=file_get_contents('http://freeavailabledomains.com/en/auth/signup/');
	//if($singupstr==false) ...
	preg_match("/name='csrfmiddlewaretoken' value='([^']*)'/", $singupstr, $matches);
	$csrfmiddlewaretoken=$matches[1];
	$data=array(
		'csrfmiddlewaretoken' => $csrfmiddlewaretoken,
		'username' => $username,
		'password1' => $password,
		'password2' => $password,
		'email' => $email);
	return send_post('http://freeavailabledomains.com/en/auth/signup/?next=/en/powerdns/', $data);}
// PHP Warning:  file_get_contents(http://freeavailabledomains.com/en/auth/signup/?next=/en/powerdns/): failed to open stream: HTTP request failed! HTTP/1.1 403 FORBIDDEN
// in freeavailabledomains.com.php on line 23
var_dump(signup('euhfbuqwe@gmail.com', 'ie3fbi3bud', '2iu34f2uy43f'));
