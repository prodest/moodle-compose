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
 * Strings for component 'antivirus_clamav', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV falhou. A mensagem de erro foi {$a}. Eis o resultado do ClamAV:';
$string['clamfailureonupload'] = 'Na falha do ClamAV';
$string['configclamactlikevirus'] = 'Tratar arquivos como vírus';
$string['configclamdonothing'] = 'Tratar arquivos como seguros';
$string['configclamfailureonupload'] = 'Se você configurou o Clam para escanear arquivos anexados e ele está configurado incorretamente ou falha ao executar por alguma razão desconhecida, como ele deveria comportar? Se você escolher \'Tratar arquivos como vírus\', eles serão movidos para a área de quarentena ou excluídos. Se você escolher \'Tratar arquivos como seguros\', eles serão movidos para o diretório de destino normalmente. Em ambos os casos, os administradores receberão um alerta de que o Clam falhou. Se você escolher \'Tratar arquivos como vírus\' e for alguma razão o Clam falha ao executar (geralmente porque você informou um caminho inválido para o Clam), TODOS os arquivos anexados serão movidos para a área de quarentena ou excluídos. Tenha cuidado com esta configuração.';
$string['invalidpathtoclam'] = 'Moodle está configurado para ativar o Clam durante o upload de arquivos, mas o percurso indicado para o acesso de Clam AV, {$a}, não é válido.';
$string['pathtoclam'] = 'Caminho do ClamAV';
$string['pluginname'] = 'Antivírus ClamAV';
$string['quarantinedir'] = 'Diretório de quarentena';
$string['runningmethodcommandline'] = 'Linha de comando';
$string['unknownerror'] = 'Erro desconhecido com Clam.';
