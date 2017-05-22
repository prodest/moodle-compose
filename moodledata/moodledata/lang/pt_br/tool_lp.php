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
 * Strings for component 'tool_lp', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_lp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['activities'] = 'Atividades';
$string['addcohorts'] = 'Adicionar coortes';
$string['addcohortstosync'] = 'Adicionar coortes à sincronização';
$string['addcompetency'] = 'Adicionar competência';
$string['addcoursecompetencies'] = 'Adicionar competências ao curso';
$string['addcrossreferencedcompetency'] = 'Adicionar competência referenciada';
$string['addingcompetencywillresetparentrule'] = 'Adicionando uma nova competência irá cancelar a regra configurada em \'{$a}\'. Você quer continuar?';
$string['addnewcompetency'] = 'Adicionar uma nova competência';
$string['addnewcompetencyframework'] = 'Adicionar uma nova estrutura de competência';
$string['addnewplan'] = 'Adicionar novo plano de aprendizagem';
$string['addnewtemplate'] = 'Adicionar novo modelo de plano de aprendizagem';
$string['addnewuserevidence'] = 'Adicionar nova evidência';
$string['addtemplatecompetencies'] = 'Adicionar competências ao modelo de plano de aprendizagem';
$string['aisrequired'] = '\'{$a}\' é requerido';
$string['aplanswerecreated'] = '{$a} planos de aprendizagem foram criados.';
$string['aplanswerecreatedmoremayrequiresync'] = '{$a} planos de aprendizagem foram criados; mais serão criados durante a próxima sincronização.';
$string['assigncohorts'] = 'Atribuir coortes';
$string['averageproficiencyrate'] = 'A taxa média de proficiência para planos de aprendizagens concluídos baseados nesse modelo é \'{$a}\' %';
$string['cancelreviewrequest'] = 'Cancelar solicitação de revisão';
$string['cannotaddrules'] = 'Esta competência não pode ser configurada.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Novos planos de aprendizagem não puderam ser criados. O prazo do modelo expirou ou está perto de expirar.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Novos planos de aprendizagem não podem ser criados enquanto este modelo está oculto.';
$string['category'] = 'Categoria';
$string['chooserating'] = 'Escolha uma avaliação...';
$string['cohortssyncedtotemplate'] = 'Coortes sincronizados para este modelo de aprendizagem';
$string['competenciesforframework'] = 'Competências para {$a}';
$string['competenciesmostoftennotproficient'] = 'Competências mais frequentemente improficiente em planos de aprendizado concluídos';
$string['competenciesmostoftennotproficientincourse'] = 'Competências mais frequentemente improficiente neste curso';
$string['competencycannotbedeleted'] = 'A competência \'{$a}\' não pode ser excluída';
$string['competencycreated'] = 'Competência criada';
$string['competencycrossreferencedcompetencies'] = '{$a} competências referenciada';
$string['competencyframework'] = 'Estrutura de competência';
$string['competencyframeworkcreated'] = 'Estrutura de competência criada.';
$string['competencyframeworkname'] = 'Nome';
$string['competencyframeworkroot'] = 'Sem pai (competência nível superior)';
$string['competencyframeworks'] = 'Estruturas de competência';
$string['competencyframeworksrepository'] = 'Repositório de estruturas de competência';
$string['competencyframeworkupdated'] = 'Estruturas de competência criadas.';
$string['competencyoutcome_complete'] = 'Marque como concluído';
$string['competencyoutcome_evidence'] = 'Anexar uma evidência';
$string['competencyoutcome_none'] = 'Nada';
$string['competencyoutcome_recommend'] = 'Recomende a competência';
$string['competencypicker'] = 'Seletor de competências';
$string['competencyrule'] = 'Regra de competência';
$string['competencyupdated'] = 'Competência atualizada';
$string['completeplan'] = 'Conclua esse plano de aprendizagem';
$string['completeplanconfirm'] = 'Colocar o plano de aprendizagem \'{$a}\' para concluído? Se sim, o estado atual de todas as competências dos usuários será gravado e o plano será somente leitura.';
$string['configurecoursecompetencysettings'] = 'Configurar competências do curso';
$string['configurescale'] = 'Configurar escalas';
$string['coursecompetencies'] = 'Competências do curso';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Avaliações de competência neste curso não afetam os planos de aprendizagem.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Avaliações de competência neste curso são atualizadas imediatamente nos planos de aprendizagem.';
$string['coursecompetencyratingsquestion'] = 'Quando uma competência do curso é avaliada, a avaliação atualiza a competência nos planos de aprendizagem ou é apenas aplicada ao curso?';
$string['coursesusingthiscompetency'] = 'Cursos vinculados a esta competência';
$string['coveragesummary'] = '{$a->competenciescoveredcount} de {$a->competenciescount} competências estão abordadas ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Criar planos de aprendizagem';
$string['createplans'] = 'Criar planos de aprendizagem';
$string['crossreferencedcompetencies'] = 'Competências referenciadas';
$string['default'] = 'Padrão';
$string['deletecompetency'] = 'Excluir competência \'{$a}\'?';
$string['deletecompetencyframework'] = 'Excluir estrutura de competência {$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Excluir competência {$a}\'? Isto também removerá a regra configurada para seu pai.';
$string['deleteplan'] = 'Excluir plano de aprendizagem \'{$a}\'?';
$string['deleteplans'] = 'Excluir os planos de aprendizagem';
$string['deletetemplate'] = 'Excluir o modelo de plano de aprendizagem \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Este modelo tem planos de aprendizagem associados. Você tem que indicar como proceder com estes planos.';
$string['deletethisplan'] = 'Excluir este plano de aprendizagem';
$string['deletethisuserevidence'] = 'Excluir esta evidência';
$string['deleteuserevidence'] = 'Excluir a evidência de aprendizagem prévia {$a}\'?';
$string['description'] = 'Descrição';
$string['duedate'] = 'Prazo';
$string['duedate_help'] = 'A data em que um plano de aprendizado deve estar concluído.';
$string['editcompetency'] = 'Editar competência';
$string['editcompetencyframework'] = 'Editar estrutura de competência';
$string['editplan'] = 'Editar plano de aprendizagem';
$string['editrating'] = 'Editar avaliação';
$string['edittemplate'] = 'Editar modelo de plano de aprendizagem';
$string['editthisplan'] = 'Editar este plano de aprendizagem';
$string['editthisuserevidence'] = 'Editar esta evidência';
$string['edituserevidence'] = 'Editar evidência';
$string['evidence'] = 'Evidência';
$string['findcourses'] = 'Procurar cursos';
$string['frameworkcannotbedeleted'] = 'A estrutura de competência \'{$a}\' não pode ser excluída';
$string['hidden'] = 'Oculto';
$string['hiddenhint'] = '(oculto)';
$string['idnumber'] = 'Número de identificação';
$string['inheritfromframework'] = 'Herdar da estrutura de competência (padrão)';
$string['itemstoadd'] = 'Itens para adicionar';
$string['jumptocompetency'] = 'Pular para competência';
$string['jumptouser'] = 'Pular para usuário';
$string['learningplancompetencies'] = 'Competências do plano de aprendizagem';
$string['learningplans'] = 'Planos de aprendizagem';
$string['levela'] = 'Nível {$a}';
$string['linkcompetencies'] = 'Vincular competências';
$string['linkcompetency'] = 'Vincular competência';
$string['linkedcompetencies'] = 'Competências vinculadas';
$string['linkedcourses'] = 'Cursos vinculados';
$string['linkedcourseslist'] = 'Cursos vinculados:';
$string['listcompetencyframeworkscaption'] = 'Lista de estruturas de competências';
$string['listofevidence'] = 'Lista de evidências';
$string['listplanscaption'] = 'Lista de planos de aprendizagem';
$string['listtemplatescaption'] = 'Lista de modelos de planos de aprendizagem';
$string['loading'] = 'Carregando...';
$string['locatecompetency'] = 'Localizar competência';
$string['managecompetenciesandframeworks'] = 'Gerenciar competências e estruturas';
$string['modcompetencies'] = 'Competências do curso';
$string['modcompetencies_help'] = 'Competências do curso vinculadas a esta atividade.';
$string['move'] = 'Mover';
$string['movecompetency'] = 'Mover competências';
$string['movecompetencyafter'] = 'Mover competência após \'{$a}\'';
$string['movecompetencyframework'] = 'Mover estrutura de competência';
$string['movecompetencytochildofselfwillresetrules'] = 'Mover a competência removerá sua própria regra e as regras configuradas para seus pais e destino. Você quer continuar?';
$string['movecompetencywillresetrules'] = 'Mover a competência irá remover as regras configuradas para seus pais e destino. Você quer continuar?';
$string['moveframeworkafter'] = 'Mover estrutura de competência após \'{$a}\'';
$string['movetonewparent'] = 'Realocar';
$string['myplans'] = 'Meus planos de aprendizagem';
$string['nfiles'] = '{$a} arquivo(s)';
$string['noactivities'] = 'Sem atividades';
$string['nocompetencies'] = 'Nenhuma competência foi criada para esta estrutura.';
$string['nocompetenciesincourse'] = 'Nenhuma competência foi vinculada a este curso.';
$string['nocompetenciesinevidence'] = 'Nenhuma competência foi vinculada a esta evidência.';
$string['nocompetenciesinlearningplan'] = 'Nenhuma competência foi vinculada a este plano de aprendizagem.';
$string['nocompetenciesintemplate'] = 'Nenhuma competência foi vinculada a este modelo de plano de aprendizagem.';
$string['nocompetencyframeworks'] = 'Nenhuma estrutura de competência foi criada ainda.';
$string['nocompetencyselected'] = 'Nenhuma competência selecionada';
$string['nocrossreferencedcompetencies'] = 'Nenhuma outra competência foi referenciada a esta competência.';
$string['noevidence'] = 'Nenhuma evidência';
$string['nofiles'] = 'Nenhum arquivo';
$string['nolinkedcourses'] = 'Nenhum curso está vinculado a essa competência';
$string['noparticipants'] = 'Nenhum participante encontrado.';
$string['noplanswerecreated'] = 'Nenhum plano de aprendizagem foi criado.';
$string['notemplates'] = 'Nenhum modelo de plano de aprendizagem foi criado ainda.';
$string['nourl'] = 'Nenhuma URL';
$string['nouserevidence'] = 'Nenhuma evidência de aprendizagem prévia foi adicionada ainda.';
$string['nouserplans'] = 'Nenhum plano de aprendizagem foi criado ainda.';
$string['oneplanwascreated'] = 'Um plano de aprendizagem foi criado';
$string['outcome'] = 'Resultado';
$string['parentcompetency'] = 'Pai';
$string['parentcompetency_edit'] = 'Editar pai';
$string['parentcompetency_help'] = 'Define o pai sob o qual a competência foi adicionada. Pode ser ou outra competência dentro da mesma estrutura ou a raiz da estrutura de competência para uma competência de nível superior.';
$string['path'] = 'Caminho:';
$string['planapprove'] = 'Ativar';
$string['plancompleted'] = 'Plano de aprendizagem concluído';
$string['plancreated'] = 'Plano de aprendizagem criado';
$string['plandescription'] = 'Descrição';
$string['planname'] = 'Nome';
$string['plantemplate'] = 'Selecione modelo de plano de aprendizagem';
$string['plantemplate_help'] = 'Um plano de aprendizagem criado de um modelo conterá uma lista de competências que equivalem ao modelo. Atualizações ao modelo serão refletidas em quaisquer planos criados a partir daquele modelo.';
$string['planunapprove'] = 'Retornar a rascunho';
$string['planupdated'] = 'Plano de aprendizagem atualizado';
$string['pluginname'] = 'Planos de aprendizagem';
$string['points'] = 'Pontos';
$string['pointsgivenfor'] = 'Pontos dados para \'{$a}\'';
$string['proficient'] = 'Proficiente';
$string['progress'] = 'Progresso';
$string['rate'] = 'Avaliar';
$string['ratecomment'] = 'Notas da evidência';
$string['rating'] = 'Avaliação';
$string['ratingaffectsonlycourse'] = 'Avaliar uma competência somente atualiza a competência neste curso';
$string['ratingaffectsuserplans'] = 'Avaliar uma competência também atualiza a competência em todos os planos de aprendizagem';
$string['reopenplan'] = 'Reabrir este plano de aprendizagem';
$string['reopenplanconfirm'] = 'Reabrir o plano de aprendizagem \'{$a}\'? Em caso afirmativo, o status das competências dos usuários que foram registradas no momento em que o plano foi concluído anteriormente será excluído e o plano se tornará ativo novamente.';
$string['requestreview'] = 'Solicitar revisão';
$string['reviewer'] = 'Revisor';
$string['reviewstatus'] = 'Estado da revisão';
$string['savechanges'] = 'Guardar mudanças';
$string['scale'] = 'Escala';
$string['scale_help'] = 'Uma escala determina como a proficiência será medida em uma competência. Depois de selecionar uma escala, necessita configuração.

* O item selecionado como \'Padrão\'  é a avaliação dada quando a competência é automaticamente concluída.
* O(s) item(ns) selecionados como \'Proficiente\' indica(m) qual(is) valor(es) assinalarão a competência como proficiente quando forem avaliados.';
$string['scalevalue'] = 'Valor da escala';
$string['search'] = 'Procurar...';
$string['selectcohortstosync'] = 'Selecione coortes para sincronizar';
$string['selectcompetencymovetarget'] = 'Selecione uma localização para onde mover esta competência:';
$string['selectedcompetency'] = 'Competência selecionada';
$string['selectuserstocreateplansfor'] = 'Selecione os usuários para criar planos de aprendizagem para';
$string['sendallcompetenciestoreview'] = 'Enviar todas as competências em revisão para evidências de aprendizagem prévia \'{$a}\'';
$string['sendcompetenciestoreview'] = 'Enviar competências para revisão';
$string['shortname'] = 'Nome';
$string['sitedefault'] = '(Padrão do site)';
$string['startreview'] = 'Começar revisão';
$string['state'] = 'Declarar';
$string['status'] = 'Estado';
$string['stopreview'] = 'Terminar revisão';
$string['stopsyncingcohort'] = 'Parar sincronização do coorte';
$string['taxonomies'] = 'Taxonomias';
$string['taxonomy_add_behaviour'] = 'Adicionar comportamento';
$string['taxonomy_add_competency'] = 'Adicionar competência';
$string['taxonomy_add_concept'] = 'Adicionar conceito';
$string['taxonomy_add_domain'] = 'Adicionar domínio';
$string['taxonomy_add_indicator'] = 'Adicionar indicador';
$string['taxonomy_add_level'] = 'Adicionar nível';
$string['taxonomy_add_outcome'] = 'Adicionar resultado';
$string['taxonomy_add_practice'] = 'Adicionar prática';
$string['taxonomy_add_proficiency'] = 'Adicionar proficiência';
$string['taxonomy_add_skill'] = 'Adicionar habilidade';
$string['taxonomy_add_value'] = 'Adicionar valor';
$string['taxonomy_edit_behaviour'] = 'Editar comportamento';
$string['taxonomy_edit_competency'] = 'Editar competência';
$string['taxonomy_edit_concept'] = 'Editar conceito';
$string['taxonomy_edit_domain'] = 'Editar domínio';
$string['taxonomy_edit_indicator'] = 'Editar indicador';
$string['taxonomy_edit_level'] = 'Editar nível';
$string['taxonomy_edit_outcome'] = 'Editar resultado';
$string['taxonomy_edit_practice'] = 'Editar prática';
$string['taxonomy_edit_proficiency'] = 'Editar proficiência';
$string['taxonomy_edit_skill'] = 'Editar habilidade';
$string['taxonomy_edit_value'] = 'Editar valor';
$string['taxonomy_parent_behaviour'] = 'Comportamento pai';
$string['taxonomy_parent_competency'] = 'Competência pai';
$string['taxonomy_parent_concept'] = 'Conceito pai';
$string['taxonomy_parent_domain'] = 'Domínio pai';
$string['taxonomy_parent_indicator'] = 'Indicador pai';
$string['taxonomy_parent_level'] = 'Nível pai';
$string['taxonomy_parent_outcome'] = 'Resultado pai';
$string['taxonomy_parent_practice'] = 'Prática pai';
$string['taxonomy_parent_proficiency'] = 'Proficiência pai';
$string['taxonomy_parent_skill'] = 'Habilidade pai';
$string['taxonomy_parent_value'] = 'Valor pai';
$string['taxonomy_selected_behaviour'] = 'Comportamento selecionado';
$string['taxonomy_selected_competency'] = 'Competência selecionada';
$string['taxonomy_selected_concept'] = 'Conceito selecionado';
$string['taxonomy_selected_domain'] = 'Domínio selecionado';
$string['taxonomy_selected_indicator'] = 'Indicador selecionado';
$string['taxonomy_selected_level'] = 'Nível selecionado';
$string['taxonomy_selected_outcome'] = 'Resultado selecionado';
$string['taxonomy_selected_practice'] = 'Prática selecionada';
$string['taxonomy_selected_proficiency'] = 'Proficiência selecionada';
$string['taxonomy_selected_skill'] = 'Habilidade selecionada';
$string['taxonomy_selected_value'] = 'Valor selecionado';
$string['template'] = 'Modelo de plano de aprendizagem';
$string['templatebased'] = 'Baseado em modelo';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Coortes não serão sincronizados se o prazo do modelo expirou.';
$string['templatecohortnotsyncedwhilehidden'] = 'Coortes não serão sincronizadas enquanto este modelo estiver oculto.';
$string['templatecompetencies'] = 'Competências do modelo de plano de aprendizagem';
$string['templatecreated'] = 'Modelo de plano de aprendizagem criado';
$string['templatename'] = 'Nome';
$string['templates'] = 'Modelo de plano de aprendizagem';
$string['templateupdated'] = 'Modelo de plano de aprendizagem atualizado';
$string['totalrequiredtocomplete'] = 'Total requerido para concluir';
$string['unlinkcompetencycourse'] = 'Desvincular a competência \'{$a}\' do curso?';
$string['unlinkcompetencyplan'] = 'Desvincular a competência \'{$a}\' do plano de aprendizagem?';
$string['unlinkcompetencytemplate'] = 'Desvincular a competência \'{$a}\' do modelo de plano de aprendizagem?';
$string['unlinkplanstemplate'] = 'Desvincular os planos de aprendizagem do seu modelo';
$string['unlinkplantemplate'] = 'Desvincular do modelo de plano de aprendizagem';
$string['unlinkplantemplateconfirm'] = 'Desvincular o plano de aprendizagem \'{$a}\' do seu modelo? Qualquer alteração realizada no modelo não será mais aplicada ao plano. Essa ação não pode ser desfeita.';
$string['uponcoursecompletion'] = 'Após conclusão do curso:';
$string['uponcoursemodulecompletion'] = 'Após conclusão da atividade:';
$string['usercompetencyfrozen'] = 'Este registro está agora congelado. Reflete o estado da competência do usuário quando seu plano de aprendizado foi marcado como concluído.';
$string['userevidence'] = 'Evidência de aprendizagem prévia';
$string['userevidencecreated'] = 'Evidência de aprendizagem prévia criada';
$string['userevidencedescription'] = 'Descrição';
$string['userevidencefiles'] = 'Arquivos';
$string['userevidencename'] = 'Nome';
$string['userevidencesummary'] = 'Sumário';
$string['userevidenceupdated'] = 'Evidência de aprendizagem prévia atualizada';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'A URL deve começar com \'http://\' ou \'https://\'.';
$string['viewdetails'] = 'Ver detalhes';
$string['visible'] = 'Habilitado';
$string['visible_help'] = 'Uma estrutura de competência pode ser oculta enquanto está sendo configurada ou atualizada para uma nova versão.';
$string['when'] = 'Quando';
$string['xcompetencieslinkedoutofy'] = '{$a->x} de {$a->y} competências vinculadas aos cursos';
$string['xcompetenciesproficientoutofy'] = '{$a->x} de {$a->y} competências são proficiêntes';
$string['xcompetenciesproficientoutofyincourse'] = 'Você é proficiente em {$a->x} de {$a->y} competências  neste curso.';
$string['xplanscompletedoutofy'] = '{$a->x} de {$a->y} planos de aprendizagem concluídos para esse modelo';
