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
 * Strings for component 'local_usertours', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   local_usertours
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ações';
$string['appliesto'] = 'Aplica a';
$string['backdrop'] = 'Mostrar com cortina de fundo';
$string['backdrop_help'] = 'Você pode usar uma cortina de fundo para destacar a parte da página que você está apontando.

Nota: Cortinas de fundo não são compatíveis com algumas partes da página, como por exemplo a barra de navegação.';
$string['block'] = 'Bloco';
$string['block_named'] = 'Bloco chamado \'{$a}';
$string['bottom'] = 'Abaixo';
$string['confirmstepremovalquestion'] = 'Você tem certeza de que deseja remover este passo?';
$string['confirmstepremovaltitle'] = 'Confirme remoção de passo';
$string['confirmtourremovalquestion'] = 'Você tem certeza de que deseja remover este tour?';
$string['confirmtourremovaltitle'] = 'Confirme remoção de tour';
$string['content'] = 'Conteúdo';
$string['content_help'] = 'Este é o conteúdo do passo.
Você pode inserir o conteúdo nos seguintes formatos:
<dl>
    <dt>Texto simples</dt>
    <dd>Um texto simples de descrição</dd>
    <dt>Moodle MultiLang</dt>
    <dd>Uma string que use o formato do Moodle MultiLang</dd>
    <dt>Uma string traduzida do Moodle</dt>
    <dd>Um valor encontrado em um arquivo de idioma padrão do Moodle no identificador de formato, componente</dd>
</dl>';
$string['cssselector'] = 'Seletor de CSS';
$string['defaultvalue'] = 'Padrão ({$a})';
$string['delay'] = 'Atraso antes de mostrar o passo';
$string['delay_help'] = 'Você pode opcionalmente escolher adicionar um atraso antes do passo ser exibido.

Esse atraso é em milisegundos.';
$string['description'] = 'Descrição';
$string['done'] = 'Pronto';
$string['editstep'] = 'Editando "{$a}"';
$string['enabled'] = 'Habilitado';
$string['endtour'] = 'Fim do tour';
$string['exporttour'] = 'Exportar tour';
$string['importtour'] = 'Importar tour';
$string['left'] = 'Esquerda';
$string['movestepdown'] = 'Mover passo para baixo';
$string['movestepup'] = 'Mover passo para cima';
$string['movetourdown'] = 'Mover tour para baixo';
$string['movetourup'] = 'Mover tour para cima';
$string['name'] = 'Nome';
$string['newstep'] = 'Novo passo';
$string['newtour'] = 'Criar um novo tour';
$string['next'] = 'Próximo';
$string['orphan'] = 'Mostrar se o alvo não é encontrado';
$string['orphan_help'] = 'Mostrar o passo se o alvo não poderia ser encontrado na página.';
$string['pathmatch'] = 'Aplicar ao URL equivalente';
$string['pathmatch_help'] = 'Tours serão exibidos em qualquer página das quais os URLs equivalem a este valor.

Você pode usar o caractere % como uma carta branca para significar qualquer coisa.
Alguns exemplos de valores incluem:

* /my/% - para equivaler ao Painel
* /course/view.php?id=2 - para equivaler um curso específico
* /mod/forum/view.php% - para equivaler à lista de discussão do fórum
* /user/profile.php% - para equivaler à página de perfil do usuário';
$string['pausetour'] = 'Pausar';
$string['placement'] = 'Localização';
$string['placement_help'] = 'Você pode colocar um passo acima, abaixo, à esquerda ou à direita do alvo.

As melhores opções são acima ou abaixo já que esses se ajustam melhor para exibição em dispositivos móveis.';
$string['pluginname'] = 'Tours de Usuário';
$string['reflex'] = 'Mover no clique';
$string['reflex_help'] = 'Mover para o próximo passo quando o alvo é clicado.';
$string['resettouronpage'] = 'Reiniciar tour de usuário nesta página';
$string['resumetour'] = 'Continuar';
$string['right'] = 'Direita';
$string['select_block'] = 'Selecionar um bloco';
$string['selector_defaulttitle'] = 'Coloque um título descritivo';
$string['selectordisplayname'] = 'Um seletor de CSS equivalendo \'{$a}';
$string['select_targettype'] = 'Cada passo é associado com uma parte da página que você deve escolher. Para fazer isso mais fácil, há vários tipos de alvos para diferentes tipos de conteúdos de página.
<dl>
    <dt>Bloco</dt>
    <dd>Exibir o próximo passo para o primeiro bloco equivalente do tipo na página</dd>
    <dt>Seletor</dt>
    <dd>Seletores de CSS são um meio poderoso que te permite selecionar diferentes partes da página baseado nos metadados construídos dentro da página</dd>
    <dt>Exibir no meio da página</dt>
    <dd>Ao invés de associar o passo com uma parte específica da página você pode tê-lo exibido no meio da página.</dd>
</dl>';
$string['selecttype'] = 'Selecionar tipo de passo';
$string['sharedtourslink'] = 'Repositório de Tours';
$string['skip'] = 'Pular';
$string['target'] = 'Alvo';
$string['target_block'] = 'Bloco';
$string['target_selector'] = 'Seletor';
$string['target_selector_targetvalue'] = 'Seletores de CSS';
$string['target_selector_targetvalue_help'] = 'Você pode usar um "Seletor de CSS" para definir alvos em quase qualquer elemento da página.

Seletores de CSS são muito poderosos e você pode facilmente encontrar partes da página desenvolvendo o seletor gradualmente.

Mozilla provê uma [documentação muito boa](https://developer.mozilla.org/en/docs/Web/Guide/CSS/Getting_started/Selectors) para seletores que podem ajudá-lo a desenvolver seus seletores.

Você também vai achar as ferramantas de desenvolvimento do seu navegador extremamente úteis na criação desses seletores:

* [Google Chrome](https://developer.chrome.com/devtools#dom-and-styles)
* [Mozilla Firefox](https://developer.mozilla.org/en-US/docs/Tools/DOM_Property_Viewer)
* [Microsoft Edge](https://developer.microsoft.com/en-us/microsoft-edge/platform/documentation/f12-devtools-guide/)
* [Apple Safari](https://developer.apple.com/library/iad/documentation/AppleApplications/Conceptual/Safari_Developer_Guide/ResourcesandtheDOM/ResourcesandtheDOM.html#//apple_ref/doc/uid/TP40007874-CH3-SW1)';
$string['targettype'] = 'Tipo de alvo';
$string['target_unattached'] = 'Exibir no meio da página';
$string['title'] = 'Título';
$string['title_help'] = 'Este é o título mostrado no início do passo.
Você pode inserir o título nos seguintes formatos:
<dl>
    <dt>Texto simples</dt>
    <dd>Um texto simples de descrição</dd>
    <dt>Moodle MultiLang</dt>
    <dd>Uma string que use o formato do Moodle MultiLang</dd>
    <dt>Uma string traduzida do Moodle</dt>
    <dd>Um valor encontrado em um arquivo de idioma padrão do Moodle no identificador de formato, componente</dd>
</dl>';
$string['top'] = 'Acima';
$string['tourconfig'] = 'Arquivo de configuração do tour para importar';
$string['tourlist_explanation'] = 'Você pode criar quantos tours você quiser e ativá-los para diferentes partes do Moodle. Apenas um tour pode ser criado por página.';
$string['tours'] = 'Tours';
$string['usertours'] = 'Tours de usuário';
$string['viewtour_info'] = 'Este é o tour \'{$a->tourname}\'. Ele aplica ao trajeto \'{$a->path}\'.';
