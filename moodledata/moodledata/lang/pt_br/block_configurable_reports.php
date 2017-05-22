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
 * Strings for component 'block_configurable_reports', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   block_configurable_reports
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Mensagens da Atividade';
$string['activityview'] = 'Visualizações da Atividade';
$string['addreport'] = 'Adicionar relatório';
$string['anyone'] = 'Qualquer pessoa';
$string['anyone_summary'] = 'Qualquer usuário no Campus será capaz de ver este relatório';
$string['availablemarks'] = 'Marcas disponíveis';
$string['average'] = 'Média';
$string['badconditionexpr'] = 'Expressão de condição incorreta';
$string['badsize'] = 'Tamanho incorreto, ele deve estar em % ou px';
$string['badtablewidth'] = 'Largura incorreta, ele deve estar em % ou valor absoluto';
$string['bar'] = 'Barra';
$string['barsummary'] = 'Gráfico de barra';
$string['blockname'] = 'Relatórios configuráveis';
$string['calcs'] = 'Cálculos';
$string['categories'] = 'Categorias';
$string['categoryfield'] = 'Campos das Categorias';
$string['categoryfieldorder'] = 'Ordenar Campos das Categorias';
$string['ccoursefield'] = 'Condição do campo Curso';
$string['cellalign'] = 'Alinhamento da célula';
$string['cellsize'] = 'Tamanho da célula';
$string['cellwrap'] = 'Moldura da célula';
$string['column'] = 'Coluna';
$string['columnandcellproperties'] = 'Propriedades das colunas e das células';
$string['columncalculations'] = 'Cálculos da coluna';
$string['columns'] = 'Colunas';
$string['comp_calcs'] = 'Cálculos';
$string['comp_calcs_help'] = '<p>Aqui você pode adicionar cálculos de colunas, exemplo: média de usuários inscritos em um cursos</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_calculations'] = 'Cálculos';
$string['comp_calculations_help'] = '<p>Aqui você pode adicionar cálculos para as colunas, i.e: média de usuários inscritos em cursos</p>';
$string['comp_columns'] = 'Colunas';
$string['comp_columns_help'] = '<p>Aqui você pode escolher diferentes colunas do seu relatório dependendo do tipo do relatório</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_conditions'] = 'Condições';
$string['comp_conditions_help'] = '<p>Aqui você pode definir as condições (exemplo: apenas cursos desta categoria, apenas usuários da Espanha, etc.. </p>

<p>Você pode adicionar expressões lógicas caso use mais de uma condição.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_customsql'] = 'Personalizar SQL';
$string['comp_customsql_help'] = '<p>Adicione uma consulta SQL. Não use o prefixo do banco do moodle $CFG->prefix no lugar use "prefix_" sem aspas</p>
<p>Exemplo: SELECT * FROM prefix_course</p>

<p>Você encontra vários Relatórios SQL aqui: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">relatórios ad-hoc contribuídos</a></p>

<p>Este bloco suporta Tim Hunt\'s CustomSQL Queries Reports, você pode usar qualquer consulta.</p>

<p>Lembre-se de adicionar um "Filtro de tempo" Caso você esteja usando um relatório com time tokens. </p>

<p>Para uso de filtros, veja: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial de Como Criar um Relatório SQL</a></p>';
$string['comp_filters'] = 'Filtros';
$string['comp_filters_help'] = '<p>Aqui você pode escolher quais filtros serão exibidos</p>

<p>Um filtro permite o usuário escolher colunas do relatório para filtrar os resultados</p>

<p>Para uso de filtros caso seu relatório seja SQL, veja: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Tutorial de Como Criar um Relatório SQL</a></p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['componenthelp'] = 'Ajuda do componente';
$string['comp_ordering'] = 'Ordenação';
$string['comp_ordering_help'] = '<p>Aqui você pode escolher como ordenar os resultados do relatório usando campos e direções</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_permissions'] = 'Permissões';
$string['comp_permissions_help'] = '<p>Aqui você pode escolher quem pode visualizar um relatório.</p>

<p>Você pode adicionar uma expressão lógica para calcular a permissão final caso você esteja usando mais de uma condição.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_plot'] = 'Plotar';
$string['comp_plot_help'] = '<p>Aqui você pode adicionar gráficos ao seu relatório baseado nas colunas e valores do relatório</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['comp_template'] = 'Modelo';
$string['comp_template_help'] = '<p>Você pode modificar o layout do relatório criando um template</p>

<p>Sobre criação de templates, veja os marcadores de substituição que você pode usar no cabeçalho, rodapé e para cada registro do relatório usando os botões de ajuda ou a informação disponível na página.</p>

<p>Ajuda: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Documentação do plugin</a></p>';
$string['conditionexpr'] = 'Condição';
$string['conditionexpr_conditions'] = 'Condição';
$string['conditionexpr_conditions_help'] = '<p>Você pode combinar condições usando expressões lógicas</p>

<p>Insira uma expressão lógica válida com estes operadores: and, or.</p>';
$string['conditionexprhelp'] = 'Insira uma condição válida exemplo: (c1 and c2) or (c4 and c3)';
$string['conditionexpr_permissions'] = 'Condição';
$string['conditionexpr_permissions_help'] = '<p>Você pode combinar condições usando expressões lógicas</p>

<p>Insira uma expressão lógica válida com estes operadores: and, or.</p>';
$string['conditions'] = 'Condições';
$string['configurable_reports:addinstance'] = 'Adicionar um novo bloco de relatórios configuráveis';
$string['configurable_reports:manageownreports'] = 'Gerenciar seus próprios relatórios';
$string['configurable_reports:managereports'] = 'Gerenciar relatórios';
$string['configurable_reports:managesqlreports'] = 'Gerenciar relatórios SQL';
$string['configurable_reports:myaddinstance'] = 'Adicione um novo bloco do configurable reports ao Painel';
$string['configurable_reports:viewreports'] = 'Visualizar relatórios';
$string['confirmdeletereport'] = 'Tem certeza de que deseja excluir esta mensagem?';
$string['coursecategories'] = 'Filtrar categoria do curso';
$string['coursecategory'] = 'Curso na categoria';
$string['coursechild'] = 'Cursos que são filhos de';
$string['coursededicationtime'] = 'Tempo de dedicação ao curso';
$string['coursefield'] = 'Campo Curso';
$string['coursefieldorder'] = 'Ordenar Campo Curso';
$string['coursemodules'] = 'Módulo do Curso';
$string['courseparent'] = 'Cursos cujo pai é';
$string['courses'] = 'Cursos';
$string['coursestats'] = 'Estatísticas de Curso';
$string['cron'] = 'Executar automaticamente todos os dias';
$string['crondescription'] = 'Marcar essa consulta para executar cada dia (à noite)';
$string['cron_help'] = 'Marcar essa consulta para executar cada dia (à noite)';
$string['crrepository'] = 'Repositório de Relatórios';
$string['crrepositoryinfo'] = 'Repositório remoto compartilhado com relatórios exemplo completamente funcionais (Nome do dono da conta no Github + barra + nome do repositório)';
$string['currentreportcourse'] = 'Curso do relatório atual';
$string['currentreportcourse_summary'] = 'O curso no qual o relatório foi criado';
$string['currentuser'] = 'Usuário atual';
$string['currentusercourses'] = 'Cursos inscritos do usuário atual';
$string['currentusercourses_summary'] = 'Lista dos cursos de usuários atuais (apenas cursos visíveis)';
$string['currentuserfinalgrade'] = 'Nota final do usuário atual no curso';
$string['currentuserfinalgrade_summary'] = 'Esta coluna mostra a nota final do usuário atual';
$string['currentuser_summary'] = 'O usuário que está visualizando o relatório';
$string['cuserfield'] = 'Condição do campo usuário';
$string['custom'] = 'Personalizado';
$string['customdateformat'] = 'Formato de data personalizado';
$string['customsql'] = 'SQL personalizado';
$string['datatables'] = 'Habilitar a biblioteca JS DataTables';
$string['datatables_emptytable'] = 'Sem dados disponíveis na tabela';
$string['datatables_first'] = 'Primeiro';
$string['datatablesinfo'] = 'A biblioteca JS DataTable (ordenação de colunas, cabeçalho fixo, procura,paginação...)';
$string['datatables_info'] = 'Mostrando _START_ à _END_ de _TOTAL_ registros';
$string['datatables_infoempty'] = 'Mostrando 0 à 0 de 0 registros';
$string['datatables_infofiltered'] = '(filtrado de _MAX_total registros)';
$string['datatables_last'] = 'Último';
$string['datatables_lengthmenu'] = 'Mostrar _MENU_ registros';
$string['datatables_loadingrecords'] = 'Carregando...';
$string['datatables_next'] = 'Próximo';
$string['datatables_previous'] = 'Anterior';
$string['datatables_processing'] = 'Processando...';
$string['datatables_search'] = 'Procurar:';
$string['datatables_sortascending'] = ': ative para ordenar as colunas por ordem crescente';
$string['datatables_sortdescending'] = ': ative para ordenar as colunas por ordem decrescente';
$string['datatables_zerorecords'] = 'Nenhum registro foi encontrado';
$string['date'] = 'Data';
$string['dateformat'] = 'Formato de data';
$string['dbhost'] = 'DB Hostname';
$string['dbhostinfo'] = 'Hostname do Banco de Dados remoto (no qual iremos executar nossas consultas SQL)';
$string['dbname'] = 'DB nome';
$string['dbnameinfo'] = 'Nome do Banco de Dados remoto (no qual iremos executar nossas consultas SQL)';
$string['dbpass'] = 'DB senha';
$string['dbpassinfo'] = 'Senha do Bando de Dados remoto (para o usuário acima)';
$string['dbuser'] = 'nome de usuário no BD';
$string['dbuserinfo'] = 'Nome de usuário no Banco de Dados remoto(deve ter privilégio de  SELECT no BD acima)';
$string['decimals'] = 'Número de casas decimais';
$string['direction'] = 'Direção';
$string['disabled'] = 'Desabilitado';
$string['displayglobalreports'] = 'Mostrar relatórios globais';
$string['displayreportslist'] = 'Mostrar a lista de relatórios no corpo do bloco';
$string['donotshowtime'] = 'Não mostrar informação de data';
$string['download'] = 'Baixar';
$string['downloadreport'] = 'Baixar relatório';
$string['email_message'] = 'Mensagem';
$string['email_send'] = 'Enviar';
$string['email_subject'] = 'Assunto';
$string['enabled'] = 'Habilitado';
$string['enableglobal'] = 'Este é um relatório global (acessível de qualquer curso)';
$string['enablejsordering'] = 'Ativar ordenação por JavaScript';
$string['enablejspagination'] = 'Ativar paginação por JavaScript';
$string['endtime'] = 'Data final';
$string['enrolledstudents'] = 'Estudantes inscritos';
$string['error_field'] = 'Campo não permitido';
$string['error_operator'] = 'Operador não permitido';
$string['error_value_expected_integer'] = 'Valor inteiro esperado';
$string['excludedeletedusers'] = 'Não mostrar usuários excluídos (apenas para relatórios SQL)';
$string['executeat'] = 'Executar em';
$string['executeatinfo'] = 'O CRON do moodle vai executar consultas SQL agendadas depois da hora selecionada. Uma vez a cada 24h';
$string['export_csv'] = 'Exportar em formato CSV';
$string['export_ods'] = 'Exportar em formato ODS';
$string['exportoptions'] = 'Opções de exportação';
$string['exportreport'] = 'Exportar relatório';
$string['export_xls'] = 'Exportar em formato XLS';
$string['fcoursefield'] = 'Filtrar Campo Curso';
$string['field'] = 'Campo';
$string['filter'] = 'Filtrar';
$string['filter_all'] = 'Todos';
$string['filter_apply'] = 'Aplicar';
$string['filtercategories'] = 'Filtrar categorias';
$string['filtercategories_summary'] = 'Filtrar por categoria';
$string['filtercoursecategories'] = 'Filtrar categoria de curso';
$string['filtercoursecategories_summary'] = 'Filtrar cursos por qualquer categoria pai';
$string['filtercoursemodules'] = 'Módulo do curso';
$string['filtercoursemodules_summary'] = 'Filtrar módulos do curso';
$string['filtercourses'] = 'Cursos';
$string['filtercourses_summary'] = 'Este filtro mostra uma lista de cursos . Apenas um curso pode ser selecionado de cada vez';
$string['filterenrolledstudents'] = 'Alunos inscritos no curso';
$string['filterenrolledstudents_summary'] = 'Filtrar um usuário (por ID) do curso matriculado';
$string['filterrole'] = 'papel';
$string['filterrole_summary'] = 'Sistema de Filtro de Papeis (Professor, Estudante, ...)';
$string['filters'] = 'Filtros';
$string['filter_searchtext'] = 'Procurar texto';
$string['filter_searchtext_summary'] = 'Filtrar texto livre';
$string['filtersemester'] = 'Semestre (Hebraico)';
$string['filtersemester_list'] = 'Outono, Primavera , Primavera C, seminário';
$string['filtersemester_summary'] = 'Permite filtrar semestres anteriores (em hebraico, por exemplo, primeiro semestre, segundo semestre)';
$string['filterstartendtime_summary'] = 'Filtrar data de início / fim';
$string['filtersubcategories'] = 'Categoria (Incluir sub-categorias)';
$string['filtersubcategories_summary'] = 'Usar: %%FILTER_CATEGORIES:mdl_course_category.path%%';
$string['filteruser'] = 'Curso atual do usuário';
$string['filterusers'] = 'Usuário do sistema';
$string['filterusers_summary'] = 'Filtrar um usuário (por ID) da lista de usuário do sistema';
$string['filteruser_summary'] = 'Filtrar um usuário (por ID) de usuários atuais do curso';
$string['filteryearhebrew'] = 'Ano (Hebraico)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'Filtro está usando anos em Hebraico (תשעג,...)';
$string['filteryearnumeric'] = 'Ano (numérico)';
$string['filteryearnumeric_summary'] = 'Filtro está usando anos numéricos (2013,...)';
$string['filteryears'] = 'Ano (numérico)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filtrar por ano (representação numérica, 2012...)';
$string['finalgradeincurrentcourse'] = 'Nota final do curso atual';
$string['fixeddate'] = 'Data fixa';
$string['footer'] = 'Rodapé';
$string['forcemidnight'] = 'Forçar meia noite';
$string['fsearchuserfield'] = 'Caixa de busca do campo Usuário';
$string['fuserfield'] = 'Filtrar Campo Usuário';
$string['global'] = 'Relatório Global';
$string['global_help'] = 'Relatório global pode ser acessado de qualquer curso na plataforma bastando colocar &courseid=MY_COURSE_ID na URL do relatório';
$string['globalstatsshouldbeenabled'] = 'Estatísticas do site deve estar habilitada. Vá para Administração -> Servidor -> Estatísticas';
$string['groupseries'] = 'Séries de grupo';
$string['groupvalues'] = 'Agrupar valores iguais (soma)';
$string['head_color'] = 'Cor de fundo do gráfico';
$string['head_data'] = 'Dados do Gráfico';
$string['header'] = 'Cabeçalho';
$string['head_size'] = 'Tamanho do gráfico';
$string['height'] = 'Altura';
$string['importfromrepository'] = 'Importar relatório a partir do repositório';
$string['importreport'] = 'Importar relatório';
$string['includesubcats'] = 'incluir sub-categorias';
$string['jsordering'] = 'Ordenação por JavaScript';
$string['jsordering_help'] = 'Ordenação por JavaScript permite ordenar as tabelas do relatório sem recarregar a página';
$string['label_field'] = 'Campo Rótulo';
$string['label_field_help'] = 'O campo que dá nomes para as coisas representadas no gráfico';
$string['lastexecutiontime'] = 'Tempo de execução = {$a} (segundos)';
$string['legacylognotenabled'] = 'Logs legados devem estar ativados.
Vá para Administração do Site / Plugins / Logging / Gerenciar locais de armazenamento de log
Ative o Log legado e dentro das configurações do log, ative Dados de log legado';
$string['limitcategories'] = 'Limitar categorias em um gráfico';
$string['line'] = 'Gráfico de linha';
$string['linesummary'] = 'Um gráfico de linha com várias séries de dados';
$string['listofsqlreports'] = 'Aperte F11 quando o cursor estiver no editor para alternar a tela cheia. O botão Esc também pode ser usado para sair da edição de tela cheia.<br/><br/><a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Lista de relatórios SQL contribuídos</a>';
$string['managereports'] = 'Gerenciar relatórios';
$string['max'] = 'Máximo';
$string['min'] = 'Mínimo';
$string['missingcolumn'] = 'Uma coluna é necessária';
$string['module'] = 'Módulo';
$string['newreport'] = 'Novo relatório';
$string['nocalcsyet'] = 'Ainda não há cálculos';
$string['nocolumnsyet'] = 'Ainda não há colunas';
$string['noconditionsyet'] = 'Ainda não há condições';
$string['noexplicitprefix'] = 'Sem prefixo explícito';
$string['nofiltersyet'] = 'Ainda não há filtros';
$string['nofilteryet'] = 'Ainda não há filtros';
$string['noorderingyet'] = 'Sem ordenação até agora';
$string['nopermissionsyet'] = 'Ainda não há permissões';
$string['noplotyet'] = 'Sem gráficos até agora';
$string['norecordsfound'] = 'Nenhum registro foi encontrado';
$string['noreportsavailable'] = 'Não há relatórios disponíveis';
$string['norowsreturned'] = 'Não há linhas retornadas';
$string['nosemicolon'] = 'Nenhuma vírgula';
$string['notallowedwords'] = 'Palavras não permitidas';
$string['operator'] = 'Operador';
$string['ordering'] = 'Ordenação';
$string['others'] = 'Outros';
$string['pagination'] = 'Paginação';
$string['pagination_help'] = 'Número de registros mostrados em cada página. Zero significa que não há número de páginas';
$string['parentcategory'] = 'Categoria pai';
$string['permissions'] = 'Permissões';
$string['pie'] = 'Pizza';
$string['pieareaname'] = 'Nome';
$string['pieareavalue'] = 'Valor';
$string['piesummary'] = 'Um gráfico de pizza';
$string['plot'] = 'Plotar - Gráficos';
$string['pluginname'] = 'Configurable  Reports';
$string['previousdays'] = 'Dias anteriores';
$string['previousend'] = 'Final anterior';
$string['previousstart'] = 'Início anterior';
$string['printreport'] = 'Imprimir relatório';
$string['puserfield'] = 'Valor do campo Usuário';
$string['puserfield_summary'] = 'Usuário com o valor selecionado no campo selecionado';
$string['queryfailed'] = 'Consulta falhou <code><pre>{$a}</pre></code>';
$string['querysql'] = 'Consulta SQL';
$string['remote'] = 'Executar no db remoto';
$string['remotedescription'] = 'Você deseja executar esta consulta no BD remoto?';
$string['remote_help'] = 'Você deseja executar esta consulta no BD remoto?';
$string['remotequerysql'] = 'Consulta SQL';
$string['report'] = 'Relatório';
$string['reportcategories'] = '1) Escolha uma categoria de relatórios remotos';
$string['report_categories'] = 'Relatório de categorias';
$string['reportcolumn'] = 'Outra coluna do relatório';
$string['report_courses'] = 'Relatório de cursos';
$string['reportcreated'] = 'Relatório criado com sucesso';
$string['reportlimit'] = 'Limite de linhas do relatório';
$string['reportlimitinfo'] = 'Limita o número de linhas que são exibidas no relatório (O padrão são 5000 linhas. É recomendável ter um limite de forma a evitar que usuários sobrecarreguem o Banco de Dados)';
$string['reports'] = 'Relatórios';
$string['reportscapabilities'] = 'Permissões do relatório';
$string['reportscapabilities_summary'] = 'Usuários com a permissão moodle/site:viewreports ativa';
$string['reportsincategory'] = '2) Escolha um relatório da lista';
$string['report_sql'] = 'Relatório SQL';
$string['reporttable'] = 'Tabela do relatório';
$string['reporttable_help'] = '<p>Esta é a largura da tabela que vai mostrar os resultados.</p>

<p>Se você usar um template esta opção não possui efeito</p>';
$string['reporttableui'] = 'Interface da tabela do relatório';
$string['reporttableuiinfo'] = 'Mostra a tabela do relatório como: HTML table com scroll, jQuery com ordenação de colunas Ou biblioteca Javascript DataTables (Column sort, fixed header, search, paging...)';
$string['report_timeline'] = 'Relatório de timeline';
$string['report_users'] = 'Relatório de Usuário';
$string['repository'] = 'Repositório de relatórios';
$string['repository_help'] = 'Você pode importar relatórios exemplo de um repositório público.

Por favor, tenha em mente que existe um limite diário de chamadas ao repositório.

Se a conexão ao repositório não estiver funcionando, você pode baixar manualmente aqui <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> um relatório e então importá-lo usando a função "Importar relatório" abaixo';
$string['role'] = 'Papel';
$string['roleincourse'] = 'Usuário com o papel selecionado no curso do relatório atual';
$string['roleusersn'] = 'Número de usuários com o papel...';
$string['searchtext'] = 'Busca de texto';
$string['semester'] = 'Semestre (Hebraico)';
$string['serieid'] = 'Coluna da série';
$string['sessionlimittime'] = 'Limite entre cliques (em minutos)';
$string['sessionlimittime_help'] = 'O limite entre cliques define se dois cliques são parte da mesma sessão ou não';
$string['setcourseid'] = 'Determinar courseid';
$string['sharedsqlrepository'] = 'Repositório SQL compartilhado';
$string['sharedsqlrepositoryinfo'] = 'Nome do dono da conta no Github + barra + nome do repositório';
$string['sqlsecurity'] = 'Segurança SQL';
$string['sqlsecurityinfo'] = 'Desabilitar execução de consultas SQL com inserções';
$string['sqlsyntaxhighlight'] = 'Ressaltar sintaxe SQL';
$string['sqlsyntaxhighlightinfo'] = 'Ressaltar sintaxe SQL no editor de código (biblioteca JS CodeMirror)';
$string['startendtime'] = 'Filtro de data inicial/final';
$string['starttime'] = 'Data inicial';
$string['stat'] = 'Estatísticas';
$string['statsactiveenrolments'] = 'Inscrições ativas (Na ultima semana)';
$string['statslogins'] = 'Logins na plataforma';
$string['statstotalenrolments'] = 'Total de inscrições';
$string['student'] = 'Estudante';
$string['subcategories'] = 'Categoria (Inclui sub categorias)';
$string['sum'] = 'Soma';
$string['tablealign'] = 'Alinhamento de tabela';
$string['tablecellpadding'] = 'Preenchimento entre células da tabela';
$string['tablecellspacing'] = 'Espaçamento entre células da tabela';
$string['tableclass'] = 'Classe da tabela';
$string['tablewidth'] = 'Largura da tabela';
$string['template'] = 'Template';
$string['template_marks'] = 'Marcadores de template';
$string['template_marks_help'] = '<p>Você pode usar qualquer um dos marcadores de substituição abaixo :</p>

<ul>
<li>##reportname## - Para incluir o nome do relatório</li>
<li>##reportsummary## - Para incluir o sumário do relatório</li>
<li>##graphs## - Para incluir os gráficos</li>
<li>##exportoptions## - Para incluir as opções de importação</li>
<li>##calculationstable## - Para incluir a tabela de cálculos</li>
<li>##pagination## - Para incluir a paginação</li>

</ul>';
$string['templaterecord'] = 'Template do registro';
$string['timeinterval'] = 'Intervalo de tempo';
$string['timeline'] = 'Linha do tempo';
$string['timemode'] = 'Modo tempo';
$string['totalrecords'] = 'Total de registros = {$a->totalrecords}';
$string['type'] = 'Tipo do Relatório';
$string['typeofreport'] = 'Tipo do Relatório';
$string['typeofreport_help'] = 'Escolha o tipo do relatório que você quer criar. Por questões de segurança, Relatórios SQL requerem uma capacidade adicional';
$string['user'] = 'Usuário do curso (id)';
$string['usercompletion'] = 'Situação de conclusão do curso do usuário';
$string['usercompletionsummary'] = 'Situação de conclusão do curso';
$string['userfield'] = 'Campo do perfil de usuário';
$string['userfieldorder'] = 'Ordenação do campo Usuário';
$string['usermodactions'] = 'Ações do modulo do usuário';
$string['usermodoutline'] = 'Estatísticas gerais do modulo do usuário';
$string['users'] = 'Usuário do sistema (id)';
$string['usersincohorts'] = 'Usuários que são membros de um ou mais coortes';
$string['usersincohorts_summary'] = 'Apenas usuários que são membros dos coortes selecionados';
$string['usersincoursereport'] = 'Qualquer usuário no curso do relatório atual';
$string['usersincoursereport_summary'] = 'Qualquer usuário no curso do relatório atual';
$string['usersincurrentcourse'] = 'Usuários no curso do relatório atual';
$string['usersincurrentcourse_summary'] = 'Usuários com o(s) papel(papéis) selecionado(s) no curso do relatório';
$string['userstats'] = 'Estatísticas de Usuários';
$string['value'] = 'Valor';
$string['value_fields'] = 'Campos do valor';
$string['value_fields_help'] = 'Campos que serão representados no gráfico. Ctrl+clique (Cmd+clique no Mac) seleciona múltiplos campos. Se você selecionar o rótulo ou um campo com valor não numérico ele será ignorado';
$string['viewreport'] = 'Ver relatório';
$string['width'] = 'Largura';
$string['xandynotequal'] = 'Eixo X e Eixo Y precisam ser diferentes';
$string['xaxis'] = 'Eixo X';
$string['yaxis'] = 'Eixo Y';
$string['yearhebrew'] = 'Ano (Hebraico)';
$string['yearnumeric'] = 'Ano (Numérico)';
$string['years'] = 'Ano (Numérico)';
$string['youmustselectarole'] = 'É obrigatório selecionar um papel';
