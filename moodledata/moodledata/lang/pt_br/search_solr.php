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
 * Strings for component 'search_solr', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   search_solr
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['connectionerror'] = 'O servidor Solr especificado não está disponível ou o índice especificado não existe';
$string['connectionsettings'] = 'Configurações de conexão';
$string['errorcreatingschema'] = 'Erro ao criar o esquema Solr: {$a}';
$string['errorvalidatingschema'] = 'Erro ao validar o esquema do Solr: campo {$a->fieldname} não existe. Por favor, <a href="{$a->setupurl}">siga este link</a> para configurar os campos necessários.';
$string['extensionerror'] = 'A extensão do PHP Apache Solr não está instalada. Por favor, verifique a documentação.';
$string['fileindexing'] = 'Habilitar a indexação de arquivos';
$string['fileindexing_help'] = 'Se o seu Solr possuir suporte, esse recurso permite que Moodle envie arquivos para serem indexados.';
$string['fileindexsettings'] = 'Configurações de indexação de arquivos';
$string['maxindexfilekb_help'] = 'Arquivos maiores que esse número de kilobytes não serão incluído na indexação de busca. Se definido como zero, arquivos de qualquer tamanho serão indexados.';
$string['minimumsolr4'] = 'Solr 4.0 é a versão mínima necessária para o Moodle';
$string['missingconfig'] = 'Seu servidor Apache Solr ainda não está configurado no seu Moodle.';
$string['multivaluedfield'] = 'O campo "{$a}" retornou uma matriz em vez de um escalar. Por favor, apague o índice atual, crie um novo e executar setup_schema.php antes dos dados de indexação em Solr.';
$string['nodatafromserver'] = 'Não há dados de servidor';
$string['pluginname'] = 'Solr';
$string['schemasetupfromsolr5'] = 'Sua versão do servidor Solr é menor do que 5,0. Este script só pode definir o esquema se sua versão Solr é 5.0 ou superior. Você precisará configurar manualmente os campos no seu esquema de acordo com search_solrdocument::get_default_fields_definition().';
$string['setupok'] = 'O esquema está pronto para ser utilizado.';
$string['solrhttpconnectionport'] = 'Porta';
$string['solrhttpconnectiontimeout'] = 'Tempo Limite';
$string['solrhttpconnectiontimeout_desc'] = 'O tempo limite de conexão HTTP é o tempo máximo, em segundos, permitido para a operação de transferência de dados HTTP.';
$string['solrindexname'] = 'O nome de índice';
$string['solrinfo'] = 'Solr';
$string['solrsecuremode'] = 'Modo seguro';
$string['solrserverhostname'] = 'Nome do host';
$string['solrserverhostname_desc'] = 'Nome de domínio do servidor Solr.';
$string['solrsetting'] = 'Configurações do Solr';
$string['solrsslcert'] = 'Certificado SSL';
$string['solrsslkey'] = 'Chave SSL';
$string['solrsslkeypassword'] = 'Senha da chave SSL';
