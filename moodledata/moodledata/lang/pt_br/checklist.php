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
 * Strings for component 'checklist', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   checklist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomments'] = 'Adicionar comentários';
$string['additem'] = 'Adicionar';
$string['additemalt'] = 'Adicionar um novo item à lista';
$string['additemhere'] = 'Inserir um novo item após este';
$string['addownitems'] = 'Adicionar os seus próprios itens';
$string['addownitems-stop'] = 'Parar de adicionar seus próprios itens';
$string['allowmodulelinks'] = 'Permitir links para módulos';
$string['anygrade'] = 'Qualquer';
$string['autopopulate'] = 'Mostrar módulos do curso no checklist';
$string['autopopulate_help'] = 'Isto irá adicionar automaticamente ao checklist  todos os recursos e atividades no curso atual.<br />
Este checklist será atualizado automaticamente ao abrir a sua página de configurações.<br />
Itens podem ser ocultos, clicando no ícone ao lado deles.<br />
Para remover os itens acrescentados automaticamente, mude esta opção de volta para "Não", e clique no "Remover itens do curso" nas configurações.';
$string['autoupdate'] = 'Verificar ao completar os módulos';
$string['autoupdate_help'] = 'Isso verificará automaticamente os itens em sua lista quando você completar a atividade relevante no curso. <br />
\'Completando\' uma atividade varia de uma atividade para outra - \'visualizar\' um recurso, \'submeter\' um questionário ou tarefa, \'postar\' em um fórum ou participar de um bate-papo, etc. <br />
Se o rastreamento de conclusão é ligado para uma determinada atividade, que será usada para assinalar fora do item na lista <br />
Para obter detalhes sobre exatamente o que causa uma atividade a ser marcada como \'completa\', pergunte ao seu administrador do site para procurar no arquivo
\'mod/checklist/autoupdate.php\'<br />
Nota: pode demorar um pouco para a atividade do aluno ser refletida em sua lista de verificação (ao usar o acompanhamento de conclusão)';
$string['autoupdatenote'] = 'É a marca \'aluno\' que é atualizada automaticamente - sem atualizações será exibida para listas \'Professor apenas\'';
$string['autoupdatewarning_both'] = 'Há itens desta lista que serão atualizados automaticamente (como os alunos completam a atividade relacionada). No entanto, como essa é uma lista \'aluno e professor\', as barras de progresso não serão atualizadas até que um professor concorde com as marcas dadas.';
$string['autoupdatewarning_student'] = 'Há itens desta lista, que serão automaticamente atualizados (como, por exemplo, quando os alunos completam a atividade relacionada).';
$string['autoupdatewarning_teacher'] = 'Atualização automática foi ligado para esta lista, mas estas marcas não serão exibidas como somente marcas \'professor\' são mostradas.';
$string['calendardescription'] = 'Este evento foi acrescentado pela lista de progresso: {$a}';
$string['canceledititem'] = 'Cancelar';
$string['changetextcolour'] = 'Prox&iacute;ma cor de texto';
$string['checkeditemsdeleted'] = 'verificando itens deletado';
$string['checklist'] = 'Lista de progresso';
$string['checklist:addinstance'] = 'Adicionar um novo checklist';
$string['checklistautoupdate'] = 'Permitir a atualização automática de checklists';
$string['checklist:edit'] = 'Criando e editando a checklists';
$string['checklist:emailoncomplete'] = 'Receber emails ao concluir';
$string['checklistfor'] = 'Checklist para';
$string['checklistintro'] = 'Introdução';
$string['checklist:preview'] = 'Visualizar a Lista de progresso';
$string['checklistsettings'] = 'Configurações';
$string['checklist:updatelocked'] = 'Atualizar marcas de checklists bloqueados';
$string['checklist:updateother'] = 'Atualizar marcas de checklists de estudantes';
$string['checklist:updateown'] = 'Atualize as marcas do seu checklist';
$string['checklist:viewmenteereports'] = 'Ver apenas o progresso do aprendiz';
$string['checklist:viewreports'] = 'Vizualisar progresso dos estudantes';
$string['checks'] = 'Checar marcas';
$string['comments'] = 'Comentários';
$string['completionpercent'] = 'Porcentagem dos itens que devem ser marcados:';
$string['completionpercentgroup'] = 'Requer itens marcados';
$string['configchecklistautoupdate'] = 'Antes de permitir isso, você deve fazer algumas alterações no código do núcleo do Moodle, por favor, consulte mod / lista de verificação / README.txt para mais detalhes';
$string['configshowcompletemymoodle'] = 'Se isso for desmarcado, então Listas de Verificação completadas serão ocultas da página \'My Moodle\'';
$string['configshowmymoodle'] = 'Se isso for desmarcado, então as atividades de Lista de Verificação (com barras de progresso) não aparecerão mais na página \'My Moodle\'';
$string['configshowupdateablemymoodle'] = 'Se isso for checado, então apenas Listas de Verificação atualizáveis serão mostradas da página \'My Moodle\'.';
$string['confirmdeleteitem'] = 'Tem certeza que deseja apagar permanentemente este item lista?';
$string['deleteitem'] = 'Excluir este item';
$string['duedatesoncalendar'] = 'Adicionar datas de vencimento para o calendário';
$string['edit'] = 'Editar checklist';
$string['editchecks'] = 'Editar marcações';
$string['editdatesstart'] = 'Editar datas';
$string['editdatesstop'] = 'Parar edição das datas';
$string['edititem'] = 'Editar este item';
$string['emailoncomplete'] = 'Email ao concluir o checklist:';
$string['emailoncompletebody'] = 'Usuário {$a->user} concluiu o checklist \'{$a->checklist}\' no curso \'{$a->coursename}\' . Veja o checklist aqui:';
$string['emailoncompletebodyown'] = 'Concluiu o checklist  \'{$a->checklist}\' no curso \'{$a->coursename}. Veja o checklist aqui:';
$string['emailoncomplete_help'] = 'Quando uma lista de verificação é completada, um e-mail de notificação será enviado: para o aluno que completá-la, para todos os professores no curso ou para ambos.
<br />
Um administrador pode controlar quem recebe esse e-mail usando a capacidade \'mod:checklist/emailoncomplete\' - por padrão todos os professores e professores não-editores possuem essa capacidade.';
$string['emailoncompletesubject'] = 'Usuário {$a->user} concluiu o checklist \'{$a->checklist}';
$string['emailoncompletesubjectown'] = 'Concluiu o checklist {$a->checklist}';
$string['eventchecklistcomplete'] = 'Lista de verificação completada';
$string['eventeditpageviewed'] = 'Editar página visualizada';
$string['eventreportviewed'] = 'Relatório visto';
$string['eventstudentchecksupdated'] = 'Checagens de aluno atualizadas';
$string['eventteacherchecksupdated'] = 'Checagens de professor atualizados';
$string['export'] = 'Exportar itens';
$string['forceupdate'] = 'Atualizar marcas para todos os itens automáticos';
$string['gradetocomplete'] = 'Nota para concluir:';
$string['guestsno'] = 'Você não tem permissão para ver este checklist';
$string['headingitem'] = 'Este iten é um cabeçalho - não terá uma caixa de seleção ao lado';
$string['import'] = 'Importar itens';
$string['importfile'] = 'Escolhe arquivo para importar';
$string['importfromcourse'] = 'Todo curso';
$string['importfromsection'] = 'Seção atual';
$string['indentitem'] = 'Recuar item';
$string['itemcomplete'] = 'Concluído';
$string['items'] = 'Itens do checklist';
$string['linktomodule'] = 'Link para este módulo';
$string['lockteachermarks'] = 'Bloquear marcas do professor';
$string['lockteachermarks_help'] = 'Quando essa configuração é habilitada, uma vez que um professor salvou uma marca \'Sim\', eles não serão capazes de alterá-lo. Usuários com a capacidade \'mod/checklist:updatelocked\' ainda serão capazes de mudar a marca.';
$string['lockteachermarkswarning'] = 'Nota: Uma vez que você tenha salvado essas marcas, você não será capaz de alterar nenhuma marca \'Sim\'.';
$string['modulename'] = 'Checklist';
$string['modulename_help'] = 'Um "Checklist" permite criar uma lista de progresso a partir dos recursos e atividades existentes no curso.';
$string['modulenameplural'] = 'Listas de progresso';
$string['moveitemdown'] = 'Mover item para baixo';
$string['moveitemup'] = 'Mover item para cima';
$string['noitems'] = 'N&atilde;o h&aacute; itens na lista';
$string['optionalhide'] = 'Ocultar itens opcionais';
$string['optionalitem'] = 'Este item é opcional';
$string['optionalshow'] = 'Mostrar itens opcionais';
$string['percentcomplete'] = 'Itens requeridos';
$string['percentcompleteall'] = 'Todos os itens';
$string['pluginadministration'] = 'Configuração do checklist';
$string['pluginname'] = 'Checklist';
$string['preview'] = 'Visualizar';
$string['progress'] = 'Progresso';
$string['removeauto'] = 'Remover itens do curso';
$string['report'] = 'Ver Progresso';
$string['reporttablesummary'] = 'Quadro com os itens na lista que cada aluno tenha concluído';
$string['requireditem'] = 'Este item é necessário - deve ser preenchido';
$string['resetchecklistprogress'] = 'Resetar progresso da lista e itens do usuário';
$string['savechecks'] = 'Salvar';
$string['showcompletemymoodle'] = 'Mostra Checklists concluídos na "Minha página inicial"';
$string['showfulldetails'] = 'Mostrar detalhes';
$string['showmymoodle'] = 'Mostrar checklists no "Meu Moodle"';
$string['showprogressbars'] = 'Mostrar barras de progresso';
$string['showupdateablemymoodle'] = 'Mostrar apenas listas atualizáveis no "Meu Moodle"';
$string['teacheralongsidecheck'] = 'Aluno e professor';
$string['teachercomments'] = 'Professores podem adicionar comentários';
$string['teacherdate'] = 'Data o professor atualizou este item por último';
$string['teacheredit'] = 'Atualizações por';
$string['teacherid'] = 'O professor que atualizou a marca por último';
$string['teachermarkno'] = 'Professor afirma que n&atilde;o foi conclu&iacute;do este';
$string['teachermarkundecided'] = 'Professor ainda n&atilde;o marcou esta';
$string['teachermarkyes'] = 'Professor confirma item finalizado';
$string['teachernoteditcheck'] = 'Somente alunos';
$string['teacheroverwritecheck'] = 'Somente professores';
$string['theme'] = 'Tema da lista de progresso';
$string['togglecolumn'] = 'Coluna de alternância';
$string['toggledates'] = 'Mude exibição de nomes e datas';
$string['togglerow'] = 'Linha de alternância';
$string['unindentitem'] = 'Des-recuar item';
$string['updatecompletescore'] = 'Salvar notas de conclusão';
$string['updateitem'] = 'Atualizar';
$string['userdate'] = 'Última data o usuário atualizou este item';
$string['useritemsallowed'] = 'O usu&aacute;rio pode adicionar seus pr&oacute;prios itens';
$string['useritemsdeleted'] = 'Itens de usu&aacute;rio exclu&iacute;do';
$string['view'] = 'Ver lista de verifica&ccedil;&atilde;o';
$string['viewall'] = 'Ver todos os progressos';
$string['viewallcancel'] = 'Cancelar';
$string['viewallsave'] = 'Salvar';
$string['viewsinglereport'] = 'Ver o progresso deste usu&aacute;rio';
$string['viewsingleupdate'] = 'Atualizar o progresso deste usuário';
$string['yesnooverride'] = 'Sim, não pode sobrepor';
$string['yesoverride'] = 'Sim, pode sobrepor';
