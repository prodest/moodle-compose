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
 * Strings for component 'block_stash', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   block_stash
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additem'] = 'Adicionar um item';
$string['addnewdrop'] = 'Adicionar nova localização';
$string['addtoinventory'] = 'Adicionar um item ao inventário.';
$string['aftercreatinglocationhelp'] = 'Depois que você criar o item e a localização, você precisa adicionar um trecho de código ao seu curso para que o item seja exibido. Depois de customizar como o item vai ser exibido para seus estudantes, copie o trecho de código abaixo e cole-o em seu conteúdo, na descrição de uma atividade, por exemplo.';
$string['appearance'] = 'Aparência';
$string['backtostart'] = 'Voltar para a tela principal';
$string['buttontext'] = 'Texto do botão';
$string['copypaste'] = 'Copie e cole isto em um editor em diferentes atividades pelo seu curso.';
$string['deletedrop'] = 'Excluir {$a}';
$string['deleteitem'] = 'Excluir {$a}';
$string['dropa'] = 'Localização \'{a}';
$string['dropname'] = 'Localização';
$string['dropname_help'] = 'O nome da localização somente é útil para sua organização, ele não será exibido aos estudantes.';
$string['drops'] = 'Localizações';
$string['drops_help'] = '<p>Localizações são locais onde os seus itens estão no <em>mundo virtual</em>. Sem uma <em>localização</em> um item não pode ser pego por um estudante.</p>
<p>Localizações vem com algumas opções, incluindo o número de vezes que um único estudante pode pegá-los, e como eles reaparecerão depois se serem pegos.</p>
<p>Por exemplo, seus estudantes precisam de um <em>item chave</em> para acessar uma atividade, você provavelmente irá definir de forma que seus estudantes somente consigam pega-lo uma vez naquela localização.</p>
<p>Porém se eles precisam de <em>5 moedas</em> para acessar outra, você deveria definir para que a moeda reaparecesse diariamente para encorajar eles a visitarem o curso todo dia.</p>
<p>Note que itens não aparecem magicamente no seu curso, você deve adicionar um código especial a seu conteúdo para que o item seja exibido.</p>';
$string['dropslist'] = 'Lista de localizações';
$string['dropsnippet'] = 'Trecho de código para \'{a}';
$string['dropsummary'] = 'Resumo das localizações';
$string['edit'] = 'Alterar';
$string['editdrop'] = 'Alterar localização \'{a}';
$string['edititem'] = 'Alterar item \'{a}';
$string['eginthecastle'] = 'Por exemplo: no castelo';
$string['eventitemacquired'] = 'Um item foi adquirido.';
$string['filterstashnotactive'] = 'O plugin filtro foi instalado mas não foi ativado para este curso. Visite <a href="{$a->activeurl}" target="_blank">esta página</a> para habilita-lo neste curso.';
$string['filterstashnotenabled'] = 'O plugin filtro foi instalado mas não foi <a href="{$a->enableurl}" target="_blank">habilitado</a>.';
$string['filterstashnotinstalled'] = 'Nós recomendamos que você instale e habilite o <a href="{$a->installurl}" target="_blank">plugin filtro para Stash</a>. Ele torna mais fácil e confiável o uso dos trechos de código.';
$string['image'] = 'Imagem';
$string['imageandbutton'] = 'Imagem e botão';
$string['item'] = 'Item';
$string['itemdetail'] = 'Detalhes';
$string['itemdetail_help'] = 'Detalhes sobre o item.';
$string['itemimage'] = 'Imagem';
$string['itemimage_help'] = 'Esta imagem será utilizada para exibir o item. O tamanho recomendado é 100x100 pixels.';
$string['itemname'] = 'Nome do item';
$string['itemname_help'] = 'O nome do item, ele será exibido para os estudantes.';
$string['items'] = 'Itens';
$string['itemslist'] = 'Lista de itens';
$string['locations'] = 'Localizações';
$string['maxnumber'] = 'Valor máximo coletável';
$string['maxpickup'] = 'Suprimentos';
$string['maxpickup_help'] = 'O número de vezes que um item pode ser pego por cada estudante nesta localização. Por exemplo, se você definir isto para \'1\', o item somente estará disponível uma vez por estudante. Se você definir \'5\', cada estudante pode adquirir o item 5 cinco vezes nesta localização. Um valor diferente de \'1\' é melhor usado em combinação com o \'Intervalo de coleta\'.';
$string['navdrops'] = 'Localizações';
$string['navinventory'] = 'Itens escondidos';
$string['navitems'] = 'Itens';
$string['navreport'] = 'Relatório';
$string['none'] = 'Nenhum';
$string['number'] = 'Número';
$string['pickupa'] = 'Pegar \'{a}';
$string['pickupinterval'] = 'Intervalo de coleta';
$string['pickupinterval_help'] = 'Isto define o tempo necessário para que o item reapareça para estudantes que já pegaram este item. Por exemplo, se você criou um item \'biscoito\', você pode definir o intervalo de coleta para 24 horas para simular o tempo que leva para o padeiro assar outro. É importante notar que estudantes não são afetados pela coleta de outros estudantes. Esta configuração não tem efeito quando \'';
$string['pluginname'] = 'Esconderijo';
$string['quantity'] = 'Quantidade';
$string['reallydeletedrop'] = 'Você tem certeza de que quer deletar esta localização?';
$string['reallydeleteitem'] = 'Você tem certeza de que quer deletar este item?';
$string['reallyresetstashof'] = 'Você tem certeza de quer resetar completamente o esconderijo de {a}?';
$string['report'] = 'Relatório';
$string['resetstashof'] = 'Resetar o esconderijo de {a}';
$string['saveandnext'] = 'Salvar e próximo';
$string['savechanges'] = 'Salvar alterações';
$string['settings'] = 'Configurações';
$string['setup'] = 'Configurar';
$string['snippet'] = 'Trecho de código';
$string['stash'] = 'Esconderijo';
$string['stash:acquireitems'] = 'Usuário é capaz de adquirir itens';
$string['stash:addinstance'] = 'Adicionar o bloco a uma página';
$string['stashdisabled'] = 'O esconderijo não está habilitado. O bloco foi adicionado ao curso?';
$string['stash:view'] = 'Visualizar o esconderijo e seu conteúdo';
$string['text'] = 'Texto';
$string['thedrophasbeendeleted'] = 'A localização \'{a}\' foi excluída';
$string['theitemhasbeendeleted'] = 'O item \'{a}\' foi excluído';
$string['thestashofhasbeenreset'] = 'O esconderijo de {a} foi resetado';
$string['unlimited'] = 'Ilimitado';
$string['whataredrops'] = 'O que são localizações?';
$string['whatisadrophelp'] = 'Uma localização é um local onde você pretende exibir seu item.';
$string['whatisthisthing'] = 'O que é isto? Estou certo que você pode achar um uso para ele!';
$string['whatsnext'] = 'Qual é o próximo?';
$string['whatsthis'] = 'O que é isto?';
$string['yourinventoryisempty'] = 'Seu inventário está vazio.';
