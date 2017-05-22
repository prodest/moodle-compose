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
 * Strings for component 'enrol_lti', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   enrol_lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Nota: Recomenda-se que a configuração de administração do site \'Permitir incorporação de "frame"\' esteja habilitada, para que as ferramentas sejam exibidas dentro de um "frame" ao invés de uma nova janela.';
$string['authltimustbeenabled'] = 'Nota: Esse plugin requer que o plugin de autenticação LTI também esteja habilitado.';
$string['cartridgeurl'] = 'URL do pacote';
$string['couldnotestablishproxy'] = 'Não foi possível estabelecer proxy com o consumidor.';
$string['enrolenddate'] = 'Data de término';
$string['enrolenddateerror'] = 'A data de término da inscrição não pode ser anterior à data de início';
$string['enrolenddate_help'] = 'Se habilitado, os usuários podem acessar até essa data, somente.';
$string['enrolisdisabled'] = 'O plugin \'Publicar como ferramenta LTI\' está desabilitado.';
$string['enrolmentfinished'] = 'Inscrição concluída.';
$string['enrolmentnotstarted'] = 'A inscrição ainda não foi iniciada.';
$string['enrolperiod'] = 'Duração da inscrição';
$string['enrolperiod_help'] = 'Duração na qual a inscrição é válida, começando com o momento em que o usuário se inscreve no sistema remoto. Se desabilitada, a duração da inscrição será ilimitada.';
$string['enrolstartdate'] = 'Data de início';
$string['enrolstartdate_help'] = 'Se habilitado, os usuários só poderão acessar a partir dessa data.';
$string['failedrequest'] = 'Falha na solicitação. Motivo: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Para acessar a ferramenta, por favor, utilize o "link" abaixo.';
$string['gradesync'] = 'Sincronização de notas';
$string['gradesync_help'] = 'Se as notas por meio da ferramenta são enviadas para o sistema remoto (consumidor LTI).';
$string['incorrecttoken'] = 'O "token" estava incorreto. Por favor, verifique a URL e tente novamente, ou entre em contato com o administrador dessa ferramenta.';
$string['invalidrequest'] = 'Solicitação inválida';
$string['invalidtoolconsumer'] = 'Ferramenta de consumidor inválida.';
$string['launchdetails'] = 'Detalhes do lançamento';
$string['launchdetails_help'] = 'Um pacote URL (também chamado de URL de configuração) mais uma senha são necessários para configurar a ferramenta.';
$string['lti:config'] = 'Configurar instâncias \'Publicar como ferramenta LTI\'';
$string['lti:unenrol'] = 'Desinscrever usuários do curso';
$string['maxenrolled'] = 'Máximo de usuários inscritos';
$string['maxenrolled_help'] = 'O número máximo de usuários remotos que podem acessar a ferramenta. Se definido como zero, o número de usuários inscritos é ilimitado.';
$string['maxenrolledreached'] = 'O número máximo de usuários remotos autorizados a acessar a ferramenta foi alcançado.';
$string['membersync'] = 'Sincronização de usuário';
$string['membersync_help'] = 'Se uma tarefa agendada sincroniza os usuários inscritos no sistema remoto com inscrições nesse curso, criando uma conta para cada usuário remoto, de acordo com a necessidade, e inscrevendo ou desinscrevendo-os como requerido.

Se configurado como não, no momento em que um usuário remoto acessa a ferramenta, uma conta será criada para ele e este será automaticamente inscrito.';
$string['membersyncmode'] = 'Modo de sincronização de usuário';
$string['membersyncmodeenrolandunenrol'] = 'Inscrever novos e desinscrever usuários ausentes';
$string['membersyncmodeenrolnew'] = 'Inscrever novos usuários';
$string['membersyncmode_help'] = 'Se os usuários remotos devem ser inscritos e/ou desinscritos deste curso';
$string['membersyncmodeunenrolmissing'] = 'Desinscrever usuários ausentes';
$string['notoolsprovided'] = 'Nenhuma ferramenta fornecida';
$string['opentool'] = 'Ferramenta aberta';
$string['pluginname'] = 'Publicar como ferramenta LTI';
$string['pluginname_desc'] = 'O plugin \'Publicar como ferramenta LTI\', juntamente com o plugin de autenticação LTI, permite que usuários remotos acessem cursos e atividades selecionadas. Em outras palavras, o Moodle funciona como um provedor de ferramentas LTI.';
$string['registration'] = 'Registro de ferramentas publicadas';
$string['registrationurl'] = 'Registro de URL';
$string['registrationurl_help'] = 'Se um registro de URL (também chamado de URL de proxy) for usado, a ferramenta será automaticamente configurada.';
$string['remotesystem'] = 'Sistema remoto';
$string['requirecompletion'] = 'Requerer curso ou conclusão da atividade antes da sincronização de notas';
$string['returnurlnotset'] = 'A URL de retorno não foi definida.';
$string['roleinstructor'] = 'Papel do professor';
$string['roleinstructor_help'] = 'O papel atribuído na ferramenta ao professor remoto.';
$string['rolelearner'] = 'Papel do estudante';
$string['rolelearner_help'] = 'O papel atribuído na ferramenta ao estudante remoto.';
$string['secret'] = 'Segredo';
$string['secret_help'] = 'Uma sequência de caracteres que é compartilhada com o sistema remoto (consumidor LTI) para prover acesso à ferramenta.';
$string['sharedexternaltools'] = 'Publicado como ferramentas LTI';
$string['successfulregistration'] = 'Registro bem-sucedido';
$string['tasksyncgrades'] = 'Publicar como ferramenta LTI de sincronização de notas';
$string['tasksyncmembers'] = 'Publicar como ferramenta LTI de sincronização de usuários';
$string['toolsprovided'] = 'Ferramentas publicadas';
$string['toolsprovided_help'] = 'Uma ferramenta pode ser compartilhada com outro site fornecendo detalhes de lançamento ou uma URL de registro.';
$string['tooltobeprovided'] = 'Ferramenta a ser publicada';
$string['toolurl'] = 'Ferramenta de URL';
$string['userdefaultvalues'] = 'Valores padrão do usuário';
