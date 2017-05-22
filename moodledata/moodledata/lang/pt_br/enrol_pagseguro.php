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
 * Strings for component 'enrol_pagseguro', language 'pt_br', branch 'MOODLE_32_STABLE'
 *
 * @package   enrol_pagseguro
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Atribuir papel';
$string['businessemail'] = 'Email PagSeguro';
$string['businessemail_desc'] = 'O email da sua conta PagSeguro';
$string['businesstoken'] = 'Token PagSeguro';
$string['businesstoken_desc'] = 'O token da sua conta PagSeguro';
$string['cost'] = 'Informe o valor';
$string['costerror'] = 'O valor da inscrição por extenso';
$string['costorkey'] = 'Por favor, escolha um dos seguintes métodos de inscrição.';
$string['currency'] = 'Moeda';
$string['currency_desc'] = 'Moeda do Brasil: Real';
$string['defaultrole'] = 'Atribuir como função padrão';
$string['defaultrole_desc'] = 'Escolha um papel que deve ser atribuído aos usuários durante as matrículas do PagSeguro';
$string['enrolenddate'] = 'Data final';
$string['enrolenddate_help'] = 'Se ativado, os usuários poderão ser inscritos somente até esta data.';
$string['enrolenddaterror'] = 'A data final de matrícula não pode ser anterior à data de início';
$string['enrolperiod'] = 'Duração de inscrições';
$string['enrolperiod_desc'] = 'Comprimento padrão de tempo que a inscrição é válida (em segundos). Se definido como zero, a duração de inscrição será ilimitada por padrão.';
$string['enrolperiod_help'] = 'Período em que a matrícula é válida, a partir do momento em que o usuário está inscrito. Se desativada, a duração de inscrição será ilimitado.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se ativado, os usuários podem se inscrever a partir desta data em diante somente.';
$string['error:unauthorized'] = 'Este provedor não é autorizado a usar a API PagSeguro';
$string['mailadmins'] = 'Notificar o administrador';
$string['mailstudents'] = 'Notificar os alunos';
$string['mailteachers'] = 'Notificar os professores';
$string['messageprovider:pagseguro_enrolment'] = 'Mensagens de inscrição PagSeguro';
$string['nocost'] = 'Não há nenhum custo associado com a inscrição neste curso!';
$string['pagseguroaccepted'] = 'Pagamentos PagSeguro aceitos';
$string['pagseguro:config'] = 'Configurar instâncias de inscrição do PagSeguro';
$string['pagseguro:manage'] = 'Gerenciar usuários inscritos';
$string['pagseguro:unenrol'] = 'Desmatricular usuários do curso';
$string['pagseguro:unenrolself'] = 'Desmatricular-se do curso';
$string['paymentrequired'] = 'Você deve efetuar um pagamento de {$a->currency} {$a->cost} pelo PagSeguro para acessar este curso.';
$string['pluginname'] = 'PagSeguro';
$string['pluginname_desc'] = 'O módulo PagSeguro permite você definir cursos pagos. Se o custo de qualquer curso for zero, então os estudantes não serão solicitados a pagar. Existe um valor padrão para o site inteiro, mas você poderá definir valores individuais para os cursos. O valor do curso irá sobrepor o valor padrão do site.';
$string['sendpaymentbutton'] = 'Enviar o pagamento via PagSeguro';
$string['status'] = 'Permitir inscrições PagSeguro';
$string['status_desc'] = 'Permitir que os usuários usem o PagSeguro para inscrever-se em um curso por padrão.';
$string['unenrolselfconfirm'] = 'Você deseja realmente cancelar sua matrícula do curso "{$a}"?';
