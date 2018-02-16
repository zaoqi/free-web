//  Copyright (C) 2018  Zaoqi

//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU Affero General Public License as published
//  by the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.

//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU Affero General Public License for more details.

//  You should have received a copy of the GNU Affero General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
(function(){

var main=function(){

console.log('!');
var tbl_1_row_1_input = document.getElementById('tbl_1_row_1_input');
if(tbl_1_row_1_input==null) {
	setTimeout(main, 0);
} else {
	console.log(tbl_1_row_1_input.check);
}


};

setTimeout(main, 0);

});
