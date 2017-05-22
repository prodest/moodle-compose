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
 * Strings for component 'recommend', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   recommend
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptrecommendation'] = 'Aceitar';
$string['addquestion'] = 'Adicionar questão';
$string['addrequest'] = 'Pedir recomendação';
$string['allrequests'] = 'Todos os pedidos';
$string['areyousure_delete_request'] = 'Você tem certeza de que deseja excluir completamente esse pedido de recomendação?';
$string['areyousure_reject_recommendation'] = 'Você tem certeza de que deseja rejeitar essa recomendação?';
$string['completiononlyaccepted'] = 'Contar somente recomendações aceitas';
$string['completionrequired'] = 'Número mínimo de recomendações concluídas:';
$string['editquestion'] = 'Editar questão';
$string['editquestions'] = 'Editar questões';
$string['error_cannotdeleterequest'] = 'Desculpe, este pedido não pode ser excluído';
$string['error_emailduplicated'] = 'Endereço de e-mail duplicado';
$string['error_emailmissing'] = 'E-mail para essa recomendação não está especificado';
$string['error_emailnotvalid'] = 'Endereço de e-mail não é válido';
$string['error_emailused'] = 'Pedido para este e-mail já foi enviado';
$string['error_questionnotfound'] = 'Questão não encontrada';
$string['error_recommendationsubmitted'] = 'Esta recomendação já está submetida';
$string['error_requestnotfound'] = 'Desculpe, mas não foi possível encontrar este pedido de recomendação';
$string['eventquestioncreated'] = 'Questão de recomendação criada';
$string['eventquestiondeleted'] = 'Questão de recomendação excluída';
$string['eventquestionupdated'] = 'Questão de recomendação atualizada';
$string['eventrequestaccepted'] = 'Recomendação aceita';
$string['eventrequestcompleted'] = 'Recomendação concluída';
$string['eventrequestcreated'] = 'Pedido de recomendação criado';
$string['eventrequestdeclined'] = 'Pedido de recomendação rejeitado';
$string['eventrequestdeleted'] = 'Pedido de recomendação excluído';
$string['eventrequestrejected'] = 'Recomendação rejeitada';
$string['labelcontents'] = 'Conteúdo';
$string['maxrequests'] = 'Máximo de pedidos permitido';
$string['maxrequests_help'] = 'É permitido enviar o número máximo de solicitações de um participante.
É razoável definir este valor baixo para incentivar os participantes a pré-confirmar com a pessoa recomendável e impedi-los de enviar em massa grande quantidade de pedidos.
Entretanto circunstâncias diferentes podem impedir pessoa recomendável de preencher o formulário e participante deve ser autorizado a enviar mais solicitações do que o número solicitado de recomendações';
$string['messageprovider:completed'] = 'Notificação de recomendação concluída para avaliadores';
$string['messageprovider:statuschanged'] = 'Notificação de alteração de status do pedido de recomendação';
$string['modulename'] = 'Pedido de recomendação';
$string['modulename_help'] = 'Esse módulo permite que os participantes solicitem recomendações.
Pessoa recomendável não precisa se registrar no site. O avaliador é capaz de visualizar recomendações, aceitar ou recusá-los.';
$string['modulenameplural'] = 'Pedidos de recomendação';
$string['norequests'] = 'Nenhum pedido de recomendação criado';
$string['notificationcompleted_body'] = 'Caro(a) {$a->recipient},

Nova recomendação foi concluída em {$a->site} e agora está esperando ser aceita.

Participante: {$a->participant}
Nome da pessoa recomendável: {$a->name}

Para visualizar recomendação, siga o link:
{$a->link}

Se precisar de ajuda, por favor, entre em contato com o administrador do site,
{$a->admin}';
$string['notificationcompleted_short'] = 'Nova recomendação';
$string['notificationcompleted_subject'] = '{$a->courseshortname}: {$a->modulename}: Nova recomendação';
$string['notificationstatuschanged_body'] = 'Caro(a) {$a->recipient},

Isso é uma notificação sobre a alteração no status da recomendação que você solicitou.
Nome da pessoa recomendável: {$a->name}
E-mail: {$a->email}
Novo status: <b>{$a->status}</b>

Para visualizar todos os seus pedidos de recomendação, siga o link:
{$a->link}

Se precisar de ajuda, por favor, entre em contato com o administrador do site,
{$a->admin}';
$string['notificationstatuschanged_short'] = '{$a->courseshortname}: {$a->modulename}: Status de seu pedido de recomendação foi alterado';
$string['notificationstatuschanged_subject'] = 'Status de seu pedido de recomendação foi alterado';
$string['options'] = 'Opções';
$string['options_help'] = 'Especificar uma opção por linha, prefixar cada linha com o peso e / sinal. Todos os pesos devem ser diferentes, por exemplo:<br><pre>1/Ruim<br>3/Bom<br>5/Excelente</pre>';
$string['pluginadministration'] = 'Administração do pedido de recomendação';
$string['pluginname'] = 'Pedido de recomendação';
$string['prefillwith'] = 'Preencher com:';
$string['preview'] = 'Pré-visualizar recomendação';
$string['question'] = 'Questão';
$string['questiontype'] = 'Tipo';
$string['recommend:accept'] = 'Aceitar e rejeitar recomendações concluídas';
$string['recommend:addinstance'] = 'Adicionar uma nova atividade de pedido de Recomendação';
$string['recommendationaccepted'] = 'Recomendação aceita';
$string['recommendationfor'] = 'Recomendação para {$a}';
$string['recommendationrejected'] = 'Recomendação rejeitada';
$string['recommendationtitle'] = 'Recomendação {$a}';
$string['recommendatorname'] = 'Nome da pessoa recomendável';
$string['recommend:delete'] = 'Excluir qualquer pedido ou recomendação';
$string['recommend:editquestions'] = 'Editar questões na recomendação';
$string['recommendname'] = 'Nome';
$string['recommendname_help'] = 'Nome da atividade como exibido na página do curso. Não mostrado à pessoa recomendável.';
$string['recommend:request'] = 'Solicitar nova recomendação';
$string['recommend:viewdetails'] = 'Visualizar os detalhes da recomendação (solicitada e concluída)';
$string['rejectrecommendation'] = 'Rejeitar';
$string['requestdeleted'] = 'Pedido foi excluído';
$string['requestinstructions'] = 'Utilize esse formulário para enviar pedidos para até {$a} pessoas que seriam capazes de recomendá-lo.
Cada pessoa recomendável receberá um e-mail com um link para um formulário de recomendação online.
Seja cauteloso ao preencher esse formulário. Após o pedido de recomendação ser enviado, você não será capaz de fazer nenhuma alteração.';
$string['requestinstructionsmult'] = 'Você não precisa enviar todos os pedidos de uma só vez. Você pode voltar a enviar pedidos adicionais a qualquer momento.';
$string['requestscreated'] = 'Pedido(s) de recomendação criado(s).';
$string['requestssettings'] = 'Configurações de pedidos';
$string['requesttemplatebody'] = 'Caro(a){NAME}

{PARTICIPANT} lhe pediu uma recomendação em {SITE}.
Para preencher o formulário de recomendação online, favor seguir o link:
{LINK}

Se precisar de ajuda, favor entrar em contato com o administrador do site,
{ADMIN}';
$string['requesttemplatesubject'] = 'Formulário de pedido de recomendação {SITE}';
$string['requiredrecommendgroup'] = 'Recomendações recebidas';
$string['requiredrecommendgroup_help'] = 'Se a configuração "Contar somente recomendações aceitas" não está verificada, recomendações concluídas que ainda não foram revisadas pelo professor serão contadas. Entretanto, se mais tarde a recomendação concluída tornar-se rejeitada pelo professor, a atividade concluída poderá tornar-se incompleta de novo.';
$string['selectquestiontype'] = 'Selecionar tipo de questão';
$string['status'] = 'Status';
$string['status1'] = 'Pedido de recomendação enviado';
$string['status2'] = 'Pedido de recomendação rejeitado';
$string['status3'] = 'Recomendação concluída';
$string['status4'] = 'Recomendação rejeitada';
$string['status5'] = 'Recomendação aceita';
$string['suredeletequestion'] = 'Você tem certeza de que deseja excluir essa questão? Todas as respostas para essa questão nas recomendações existentes serão também excluídas';
$string['thanksforrecommendation'] = 'Obrigado, sua recomendação foi processada.';
$string['timecompleted'] = 'Concluído';
$string['timerequested'] = 'Solicitado';
$string['typelabel'] = 'Texto explicativo sem controle de entrada';
$string['typeradio'] = 'Coleção de botões de rádio';
$string['typetextarea'] = 'Texto multilinhas com editor';
$string['typetextfield'] = 'Campo de texto de linha única';
$string['yourrecommendations'] = 'Suas recomendações';
