<?php
/*
** Zabbix
** Copyright (C) 2001-2021 Zabbix SIA
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
** This program is distributed in the hope that it will be useful,
** but WITHOUT ANY WARRANTY; without even the implied warranty of
** MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
** GNU General Public License for more details.
**
** You should have received a copy of the GNU General Public License
** along with this program; if not, write to the Free Software
** Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
**/


class CDiv extends CTag {

	public function __construct($items = null) {
		parent::__construct('div', true);

		$this->addItem($items);
	}

	public function setWidth($value) {
		$this->addStyle('width: '.$value.'px;');

		return $this;
	}

	public function setAdaptiveWidth($value) {
		$this->addStyle('max-width: '.$value.'px;');
		$this->addStyle('width: 100%;');

		return $this;
	}
}