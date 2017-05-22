<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'availability_stash', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   availability_stash
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['condition'] = 'condição';
$string['description'] = 'Requer um objeto do esconderijo do usuário para ganhar acesso.';
$string['exactly'] = 'exatamente';
$string['lessthan'] = 'menos que';
$string['morethan'] = 'mais que';
$string['object'] = 'objeto';
$string['objectnnotrequiredtogetaccess'] = 'Não existe {$a->condition} {$a->quantity}x \'{$a->object}\' no seu esconderijo.';
$string['objectnrequiredtogetaccess'] = 'Existe {$a->condition} {$a->quantity}x \'{$a->object}\' no seu esconderijo.';
$string['pluginname'] = 'Disponibilidade do esconderijo';
$string['quantity'] = 'quantidade';
$string['theirstashcontains'] = 'Seus esconderijos contém {$a->conditions} {$a->quantity} {$a->objects}';
$string['title'] = 'Objeto do esconderijo';
$string['unknowncondition'] = '[Condição desconhecida]';
$string['unknownobject'] = '[Objeto desconhecido]';
$string['youhavegota'] = 'Você tem \'{$a->object}';
$string['youhavegotlessthanna'] = 'Você tem menos que {$a->quantity}x \'{$a->object}';
$string['youhavegotmorethanna'] = 'Você tem mais que {$a->quantity}x \'{$a->object}';
$string['youhavegotna'] = 'Você tem {$a->quantity}x \'{$a->object}';
$string['youhaventgota'] = 'Você não tem \'{$a->object}';
$string['youhaventgotanya'] = 'Você não tem nenhum  \'{$a->object}';
$string['youhaventgotlessthanna'] = 'Você não tem menos que {$a->quantity}x \'{$a->object}';
$string['youhaventgotmorethanna'] = 'Você não tem mais que {$a->quantity}x \'{$a->object}';
$string['youhaventgotna'] = 'Você não tem {$a->quantity}x \'{$a->object}';
