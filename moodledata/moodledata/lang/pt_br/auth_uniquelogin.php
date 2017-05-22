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
 * Strings for component 'auth_uniquelogin', language 'pt_br', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_uniquelogin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aplly_to_admin'] = 'Aplicar aos Administradores';
$string['aplly_to_teacher'] = 'Aplicar aos Professores';
$string['auth_uniquelogerror'] = 'Já existe uma sessão ativa. Não é possível iniciar outra!';
$string['auth_uniquelogindescription'] = 'Este módulo garante que cada usuário só tem uma sessão ativa.<br /><br />Cada vez que um usuário faz um login bem sucedido, todas as outras sessões pertencentes a este usuário serão terminadas.<br><br /><div style="font-weight: bold;">Nota: Para que este módulo funcione, todas as sessões têm de ser armazenadas na base de dados. Essa configuração é definida em <a href="settings.php?section=sessionhandling">Sessões.</a></div><br />';
$string['auth_uniquelogintitle'] = 'Login Único';
$string['configaplly_to_admin'] = 'Aplicar a restrição de Login Único quando o usuário tem o papel de Administrador do sistema.';
$string['pluginname'] = 'Login Único';
