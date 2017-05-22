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
 * Strings for component 'workshopallocation_scheduled', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   workshopallocation_scheduled
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['currentstatus'] = 'Estado atual';
$string['currentstatusexecution'] = 'Estado';
$string['currentstatusexecution1'] = 'Executado em {$a->datetime}';
$string['currentstatusexecution2'] = 'A ser executado novamente em {$a->datetime}';
$string['currentstatusexecution3'] = 'A ser executado em {$a->datetime}';
$string['currentstatusexecution4'] = 'Aguardando execução';
$string['currentstatusnext'] = 'Próxima execução';
$string['currentstatusnext_help'] = 'Em alguns casos, a alocação é programada para ser executada automaticamente novamente mesmo que já tenha sido executada. Isso pode acontecer se o prazo dos envios tiver sido prorrogada, por exemplo.';
$string['currentstatusreset'] = 'Reconfigurar';
$string['currentstatusreset_help'] = 'Salvando o formulário com essa caixa de seleção marcada resultará na redefinição do estado atual. Toda a informação sobre a execução anterior será removida para que a alocação possa ser executada novamente (se estiver marcado acima).';
$string['currentstatusresetinfo'] = 'Marque a caixa e salve o formulário para reconfigurar o resultado da execução';
$string['currentstatusresult'] = 'Resultado da execução recente';
$string['enablescheduled'] = 'Habilitar alocação programada';
$string['enablescheduledinfo'] = 'Alocar automaticamente os envios ao final da fase de submissão';
$string['pluginname'] = 'Alocação programada';
$string['randomallocationsettings'] = 'Configurações de alocação';
$string['randomallocationsettings_help'] = 'Os parâmetros para o método de alocação aleatória são definidos aqui. Eles serão usados pelo plugin de alocação aleatória para a alocação real de envios.';
$string['resultdisabled'] = 'Alocação programada desabilitada';
$string['resultenabled'] = 'Alocação programada habilitada';
$string['resultexecuted'] = 'Sucesso';
$string['resultfailed'] = 'Não é possível alocar envios automaticamente';
$string['resultfailedconfig'] = 'Alocação programada configurada incorretamente';
$string['resultfaileddeadline'] = 'Workshop não tem o prazo de envios definido';
$string['resultfailedphase'] = 'Workshop não está em fase de envios';
$string['resultvoid'] = 'Nenhum envio foi alocado';
$string['resultvoiddeadline'] = 'Não depois do prazo submissões ainda';
$string['resultvoidexecuted'] = 'A alocação já foi executada';
$string['scheduledallocationsettings'] = 'Configurações de alocação programada';
$string['scheduledallocationsettings_help'] = 'Se ativado, o método de alocação programada alocará os envios automaticamente para a avaliação no final da fase de envio. O fim da fase pode ser definido na configuração \'Prazo de envio\' do workshop.

Internamente, o método de alocação aleatória é executado com os parâmetros pré-definidos nesse formulário. Isso significa que a alocação programada funciona como se o próprio professor tenha executado a alocação aleatória ao final da fase de envio utilizando as definições de alocação abaixo.

Note que a alocação programada NÃO é executada se você colocar manualmente o workshop na fase de avaliação antes do prazo de envios. Você tem que alocar envios você mesmo nesse caso. O método de alocação programada é particularmente útil quando utilizado conjuntamente com o recurso de alteração de fase automática.';
$string['setup'] = 'Configure alocação programada';
