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
 * Strings for component 'plugin', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   plugin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['availability'] = 'Disponibilidade';
$string['cancelinstallall'] = 'Cancelar novas instalações ({$a})';
$string['cancelinstallhead'] = 'Cancelando a instalação de plugins';
$string['cancelinstallinfo'] = 'Os seguintes plugins não foram totalmente instalados, portanto a sua instalação pode ser cancelada. Para fazê-lo, a pasta de plugins deve ser removida do servidor agora. Certifique-se que é realmente o quer para evitar perda acidental de dados (tais como as suas próprias modificações de código).';
$string['cancelinstallinfodir'] = 'Pasta a ser excluída: {$a}';
$string['cancelinstallone'] = 'Cancelar esta instalação';
$string['cancelupgradeall'] = 'Cancelar atualizações ({$a})';
$string['cancelupgradehead'] = 'Restaurando versões anteriores dos plugins';
$string['cancelupgradeone'] = 'Cancelar esta atualização';
$string['checkforupdates'] = 'Verificar atualizações disponiveis';
$string['checkforupdateslast'] = 'Última verificação feita em {$a}';
$string['dependencyavailable'] = 'Disponível';
$string['dependencyfails'] = 'Falha';
$string['dependencyinstall'] = 'Instalar';
$string['dependencyinstallhead'] = 'Instalando dependências que estão faltando';
$string['dependencyinstallmissing'] = 'Instalar dependências que estão faltando ({$a})';
$string['dependencymissing'] = 'Faltando';
$string['dependencyunavailable'] = 'Indisponível';
$string['dependencyupload'] = 'Enviar';
$string['dependencyuploadmissing'] = 'Upload de arquivos ZIP';
$string['detectedmisplacedplugin'] = 'O plugin "{$a->component}" está incorretamente instalado em "{$a->current}", o local esperado é "{$a->expected}"';
$string['displayname'] = 'Nome do plugin';
$string['err_response_curl'] = 'Não foi possível obter dados das atualizações disponíveis -  erro inesperado do cURL.';
$string['err_response_format_version'] = 'Versão inesperada do formato de resposta. Por favor, tente novamente verificar se há atualizações disponíveis.';
$string['err_response_http_code'] = 'Não foi possível obter dados das atualizações disponíveis - código de resposta HTTP inesperado.';
$string['filterall'] = 'Mostrar todos';
$string['filtercontribonly'] = 'Mostrar apenas plugins de terceiros';
$string['filterupdatesonly'] = 'Mostrar apenas atualizável';
$string['misdepinfoplugin'] = 'Informações do Plugin';
$string['misdepinfoversion'] = 'Informações da Versão';
$string['misdepsavail'] = 'Dependências que estão faltando disponíveis';
$string['misdepsunavail'] = 'Dependências que estão faltando indisponíveis';
$string['misdepsunavaillist'] = 'Nenhuma versão encontrada para cumprir os requisitos de dependência: {$a}.';
$string['misdepsunknownlist'] = 'Ausentes do diretório de plugins: <strong>{$a}</strong>.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Nenhum plugin desse tipo está instalado';
$string['notdownloadable'] = 'Não é possível baixar o pacote';
$string['notdownloadable_help'] = 'Pacote ZIP com a atualização não pode ser baixado automaticamente. Por favor, consulte a página de documentação para obter mais ajuda.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Notas';
$string['notwritable'] = 'Arquivos do plugin não graváveis';
$string['notwritable_help'] = 'Você ativou a implantação automática de atualizações e existe uma atualização disponível para este plugin. No entanto, os arquivos do plugin não são graváveis pelo servidor web, impedindo a instalação automática desta atualização.

Você precisa fazer com que o diretório do plugin e todo o seu conteúdo sejam graváveis para poder instalar a atualização disponível automaticamente.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Todos os plugins';
$string['overviewext'] = 'Plugins adicionais';
$string['overviewupdatable'] = 'Atualizações disponíveis';
$string['packagesdebug'] = 'Saída de depuração ativada';
$string['packagesdownloading'] = 'Baixando {$a}';
$string['packagesextracting'] = 'Extraindo {$a}';
$string['packagesvalidating'] = 'Validando {$a}';
$string['packagesvalidatingfailed'] = 'Instalação abortada devido a falha de validação';
$string['packagesvalidatingok'] = 'Validação bem sucedida, a instalação pode continuar';
$string['plugincheckall'] = 'Todos os plugins';
$string['plugincheckattention'] = 'Plugins que requerem atenção';
$string['pluginchecknone'] = 'Não há plugins que requerem sua atenção agora';
$string['pluginchecknotice'] = 'Essa página mostra os plugins que podem requerer sua atenção durante a atualização. Itens destacados incluem novos plugins que serão instalados, plugins com novas versões que serão atualizados e plugins que estão faltando. Plugins de terceiros são destacados se houver uma atualização disponível para eles. Recomenda-se que você verifique se há versões mais recentes do plugins disponíveis e atualizar seu código fonte antes de continuar com esta atualização Moodle.';
$string['plugindisable'] = 'Desabilitar';
$string['plugindisabled'] = 'Desabilitado';
$string['pluginenable'] = 'Habilitar';
$string['pluginenabled'] = 'Habilitado';
$string['release'] = 'Lançamento';
$string['requiredby'] = 'Requerido por: {$a}';
$string['requires'] = 'Requer';
$string['rootdir'] = 'Diretório';
$string['settings'] = 'Configurações';
$string['source'] = 'Fonte';
$string['sourceext'] = 'Adicional';
$string['sourcestd'] = 'Padrão';
$string['status'] = 'Status';
$string['status_delete'] = 'A ser excluído';
$string['status_downgrade'] = 'Versão mais alta já está instalada!';
$string['status_missing'] = 'Está faltando no disco!';
$string['status_new'] = 'A ser instalado';
$string['status_nodb'] = 'Sem banco de dados';
$string['status_upgrade'] = 'A ser atualizado';
$string['status_uptodate'] = 'Instalado';
$string['supportedmoodleversions'] = 'Versões do Moodle suportadas';
$string['systemname'] = 'Identificador';
$string['type_auth'] = 'Método de autenticação';
$string['type_auth_plural'] = 'Plugins de autenticação';
$string['type_availability'] = 'Restrição de disponibilidade';
$string['type_availability_plural'] = 'Restrições de disponibilidade';
$string['type_block'] = 'Bloco';
$string['type_block_plural'] = 'Blocos';
$string['type_cachelock'] = 'Manipulador de bloqueio de cache';
$string['type_cachelock_plural'] = 'Bloqueio manipuladores de cache';
$string['type_cachestore'] = 'Armazenamento de cache';
$string['type_cachestore_plural'] = 'Armazenamentos de cache';
$string['type_calendartype'] = 'Tipo de calendário';
$string['type_calendartype_plural'] = 'Tipo de calendário';
$string['type_coursereport'] = 'Relatório do curso';
$string['type_coursereport_plural'] = 'Relatórios do curso';
$string['type_dataformat'] = 'Formato de dados';
$string['type_dataformat_plural'] = 'Formatos de dados';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Editores';
$string['type_enrol'] = 'Método de inscrição';
$string['type_enrol_plural'] = 'Métodos de inscrição';
$string['type_filter'] = 'Filtro';
$string['type_filter_plural'] = 'Filtros de texto';
$string['type_format'] = 'Formato de curso';
$string['type_format_plural'] = 'Formatos de curso';
$string['type_gradeexport'] = 'Método de exportação de notas';
$string['type_gradeexport_plural'] = 'Métodos de exportação de notas';
$string['type_gradeimport'] = 'Método de importação de notas';
$string['type_gradeimport_plural'] = 'Métodos de importação de notas';
$string['type_gradereport'] = 'Relatório de livro de notas';
$string['type_gradereport_plural'] = 'Relatórios de livro de notas';
$string['type_gradingform'] = 'Método de avaliação avançados';
$string['type_gradingform_plural'] = 'Métodos de avaliação avançados';
$string['type_local'] = 'Plugin local';
$string['type_local_plural'] = 'Plugins locais';
$string['type_media'] = 'Reprodutor de mídia';
$string['type_media_plural'] = 'Reprodutores de mídia';
$string['type_message'] = 'Processador de mensagens';
$string['type_message_plural'] = 'Processadores de mensagens';
$string['type_mnetservice'] = 'Serviço MNet';
$string['type_mnetservice_plural'] = 'Serviços MNet';
$string['type_mod'] = 'Módulo de atividades';
$string['type_mod_plural'] = 'Atividades';
$string['type_plagiarism'] = 'Plugin anti-plágio';
$string['type_plagiarism_plural'] = 'Plugins anti-plágio';
$string['type_portfolio'] = 'Portfólio';
$string['type_portfolio_plural'] = 'Portfólios';
$string['type_profilefield'] = 'Tipo de campo de perfil';
$string['type_profilefield_plural'] = 'Tipos de campo de perfil';
$string['type_qbehaviour'] = 'Comportamento de questão';
$string['type_qbehaviour_plural'] = 'Comportamentos de questão';
$string['type_qformat'] = 'Formato de importação/exportação de questões';
$string['type_qformat_plural'] = 'Formatos de importação/exportação de questões';
$string['type_qtype'] = 'Tipo de questão';
$string['type_qtype_plural'] = 'Tipos de questão';
$string['type_report'] = 'Relatório do site';
$string['type_report_plural'] = 'Relatórios';
$string['type_repository'] = 'Repositório';
$string['type_repository_plural'] = 'Repositórios';
$string['type_search'] = 'Motor de busca';
$string['type_search_plural'] = 'Motores de busca';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temas';
$string['type_tool'] = 'Ferramenta de administração';
$string['type_tool_plural'] = 'Ferramentas de administração';
$string['type_webservice'] = 'Protocolo de webservice';
$string['type_webservice_plural'] = 'Protocolos de webservice';
$string['uninstall'] = 'Desinstalar';
$string['uninstallconfirm'] = 'Você está prestes a desinstalar o plugin <em>{$a->name}</em>. Isto excluirá completamente do banco de dados tudo associado a este plugin, incluindo suas configurações, registros de log, arquivos de usuários gerenciados pelo plugin etc. Não é possível desfazer esta operação, e o Moodle em si não cria nenhum backup de recuperação. Você TEM CERTEZA que deseja continuar?';
$string['uninstalldelete'] = 'Todos os dados associados ao plugin <em>{$a->name}</em> foram excluídos do banco de dados. Para prevenir que o plugin reinstale-se, seu diretório <em>{$a->rootdir}</em> deve ser agora manualmente removido do servidor. O Moodle em si não pode remover o diretório devido a permissões de escrita.';
$string['uninstalldeleteconfirm'] = 'Todos os dados associados ao plugin <em>{$a->name}</em> foram excluídos do banco de dados. Para prevenir que o plugin reinstale-se, seu diretório <em>{$a->rootdir}</em> deve ser removido do servidor. Você deseja remover o diretório do plugin agora?';
$string['uninstalldeleteconfirmexternal'] = 'Parece que a versão atual do plugin foi obtido através do sistema de gerenciamento de código fonte ({$a}). Se você remover a pasta do plugin, você pode perder importantes modificações locais do código. Por favor, esteja seguro que você definitivamente deseja remover a pasta deste plug-in antes de continuar.';
$string['uninstallextraconfirmblock'] = 'Há {$a->instances} instâncias deste bloco.';
$string['uninstallextraconfirmenrol'] = 'Há {$a->enrolments} usuários inscritos.';
$string['uninstallextraconfirmmod'] = 'Há {$a->instances} instâncias desse módulo em {$a->courses} cursos.';
$string['uninstalling'] = 'Desinstalando {$a->name}';
$string['updateavailable'] = 'Há uma nova versão {$a} disponível!';
$string['updateavailable_moreinfo'] = 'Mais informações...';
$string['updateavailable_release'] = 'Versão {$a}';
$string['updatepluginconfirm'] = 'Confirmação de atualização de plugin';
$string['updatepluginconfirmexternal'] = 'Parece que a versão atual do plugin foi obtida através de sistema de gerenciamento de código ({$a}) check-out. Se você instalar esta atualização, você não será mais capaz de obter atualizações de plugins do sistema de gerenciamento de código fonte. Certifique-se de que você definitivamente quer atualizar o plugin antes de continuar.';
$string['updatepluginconfirminfo'] = 'Você está prestes a instalar uma nova versão do <strong>{$a->name}</strong> plugin. Um pacote zip com a versão {$a->version} do plugin será baixado a partir <a href="{$a->url}">{$a->url}</a> e extraído para a sua instalação Moodle para que ele possa atualizar sua instalação.';
$string['updatepluginconfirmwarning'] = 'Por favor, note que o Moodle não irá automaticamente fazer um backup do seu banco de dados antes da atualização. Nós recomendamos que você faça um backup instantâneo completo agora, para lidar com o caso raro em que o novo código tem bugs que fazem o seu site disponível ou mesmo corrompe seu banco de dados. Prossiga por sua conta e risco.';
$string['validationmsg_componentmatch'] = 'Nome completo do plugin';
$string['validationmsg_componentmismatchname'] = 'Incompatibilidade no nome do plugin';
$string['validationmsg_componentmismatchname_help'] = 'Alguns pacotes ZIP, como aqueles gerados pelo Github, podem conter um nome incorreto para o diretório raiz. Você precisa corrigir o nome do diretório raiz para casar com o nome declarado do plugin.';
$string['validationmsg_componentmismatchname_info'] = 'O plugin declara seu nome como \'{$a}\' mas não casa com o nome do diretório raiz.';
$string['validationmsg_componentmismatchtype'] = 'Incompatibilidade de tipo de plugin';
$string['validationmsg_componentmismatchtype_info'] = 'Você selecionou o tipo \'{$a->expected}\' mas o plugin declara seu tipo como \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Arquivo extraído não encontrado';
$string['validationmsg_filesnumber'] = 'Não foram encontrados arquivos suficientes no pacote';
$string['validationmsg_filestatus'] = 'Não foi possível extrair todos os arquivos';
$string['validationmsg_filestatus_info'] = 'A tentativa de extrair o arquivo {$a->file} resultou em erro \'{$a->status}\'.';
$string['validationmsg_foundlangfile'] = 'Arquivo de idioma encontrado';
$string['validationmsglevel_debug'] = 'Debug';
$string['validationmsglevel_error'] = 'Erro';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Aviso';
$string['validationmsg_maturity'] = 'Nível de maturidade declarada';
$string['validationmsg_maturity_help'] = 'O plugin pode declarar seu nível de maturidade. Se o mantenedor considera o plugin estável, o nível de maturidade que ele declarou lerá MATURITY_STABLE. Todos os outros níveis de maturidade (tais como alfa ou beta) deve ser considerado instável e um alerta é gerado.';
$string['validationmsg_missingcomponent'] = 'Plugin não declara seu nome componente';
$string['validationmsg_missingcomponent_help'] = 'Todos os plugins devem fornecer seu nome componente completo através do `$plugin->component` declarado no arquivo version.php.';
$string['validationmsg_missingexpectedlangenfile'] = 'Incompatibilidade no nome do arquivo do idioma inglês';
$string['validationmsg_missingexpectedlangenfile_info'] = 'O tipo de plugin fornecido não contém o arquivo esperado para o idioma inglês {$a}.';
$string['validationmsg_missinglangenfile'] = 'Nenhum arquivo de idioma inglês encontrado';
$string['validationmsg_missinglangenfolder'] = 'Faltando pasta do idioma inglês';
$string['validationmsg_missingversion'] = 'O plugin não declara sua versão';
$string['validationmsg_missingversionphp'] = 'Arquivo version.php não encontrado';
$string['validationmsg_multiplelangenfiles'] = 'Vários arquivos do idioma inglês encontrados';
$string['validationmsg_onedir'] = 'Estrutura inválida do pacote ZIP.';
$string['validationmsg_onedir_help'] = 'O pacote ZIP deve conter apenas um diretório raiz que contém o código do plugin. O nome desse diretório raiz deve coincidir com o nome do plugin.';
$string['validationmsg_pathwritable'] = 'Verificação de acesso de escrita';
$string['validationmsg_pluginversion'] = 'Versão do plugin';
$string['validationmsg_release'] = 'Plugin release';
$string['validationmsg_requiresmoodle'] = 'Versão do Moodle requerida';
$string['validationmsg_rootdir'] = 'Nome do plugin a ser instalado';
$string['validationmsg_rootdir_help'] = 'O nome do diretório raiz no pacote ZIP forma o nome do plugin para ser instalado. Se o nome não estiver correto, você pode querer renomear o diretório raiz do ZIP antes de instalar o plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nome do plugin Inválido';
$string['validationmsg_rootdirinvalid_help'] = 'O nome do diretório raiz no pacote ZIP viola requisitos formais de sintaxe. Alguns pacotes ZIP, tais como os gerados por Github, podem conter um nome de diretório raiz incorreto. É preciso corrigir o nome do diretório raiz para coincidir com o nome do plugin.';
$string['validationmsg_targetexists'] = 'A localização de destino já existe e será removida';
$string['validationmsg_targetexists_help'] = 'O diretório onde o plugin será instalado ainda não deve existir.';
$string['validationmsg_targetnotdir'] = 'Local de destino ocupado por um arquivo';
$string['validationmsg_unknowntype'] = 'Tipo de plugin desconhecido';
$string['validationmsg_versionphpsyntax'] = 'Sintaxe sem suporte detectada no arquivo version.php';
$string['version'] = 'Versão';
$string['versiondb'] = 'Versão atual';
$string['versiondisk'] = 'Nova versão';
