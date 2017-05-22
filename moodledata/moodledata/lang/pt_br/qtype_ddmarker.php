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
 * Strings for component 'qtype_ddmarker', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alttext'] = 'Texto alternativo';
$string['answer'] = 'Resposta';
$string['bgimage'] = 'Imagem de fundo';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'A resposta correta é: {$a}';
$string['draggableimage'] = 'Imagem arrastável';
$string['draggableitem'] = 'Item arrastável';
$string['draggableitemheader'] = 'Item arrastável {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastável';
$string['dropbackground'] = 'Imagem de fundo com local para onde arrastar os marcadores';
$string['dropzone'] = 'Área de arrastar e soltar {$a}';
$string['dropzoneheader'] = 'Áreas de arrastar e soltar';
$string['dropzones'] = 'Áreas de arrastar e soltar';
$string['followingarewrong'] = 'Os seguintes marcadores foram colocados na área errada: {$a}.';
$string['followingarewrongandhighlighted'] = 'Os seguintes marcadores foram incorretamente colocados: {$a} . Marcador(es) realçado(s) (é)são agora mostrado(s) com a colocação correta(s) . <br /> Clique no marcador para destacar a área permitida.';
$string['formerror_nobgimage'] = 'Você precisa selecionar uma imagem para usar como plano de fundo para a área de arrastar e soltar.';
$string['formerror_noitemselected'] = 'Você especificou uma área para soltar, mas não escolheu um marcador que deve ser arrastado para essa área.';
$string['formerror_nosemicolons'] = 'Não há ponto e vírgula em sua seqüência de coordenadas. Suas coordenadas para a {$a->shape} deve ser expressa como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Apenas "{$a}" tags são permitidas no rótulo para um marcador.';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor, use apenas números inteiros positivos para especificar coordenadas x, y e / ou largura e altura de formas. Suas coordenadas para a {$a->shape} deve ser expressa como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para uma forma poligonal você precisa especificar pelo menos 3 pontos. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Você digitou as mesmas coordenadas duas vezes. Cada ponto deve ser exclusivo. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'A forma que você definiu sai dos limites da imagem de fundo.';
$string['formerror_toomanysemicolons'] = 'Há também muitas partes separadas por ponto e vírgula para as coordenadas especificadas. Suas coordenadas para a {$a->shape} devem ser expressas como - {$a->coordsstring}.';
$string['infinite'] = 'Infinito';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'Sem texto para etiqueta';
$string['noofdrags'] = 'Número';
$string['pleasedragatleastonemarker'] = 'Sua resposta não está completa, você deve colocar ao menos um marcador na imagem.';
$string['pluginname'] = 'Marcadores "arrasta e solta"';
$string['pluginnameadding'] = 'Adicionando marcadores "arrasta e solta"';
$string['pluginnameediting'] = 'Editar marcadores "arrasta e solta"';
$string['pluginname_help'] = 'Marcadores "arrasta e solta" requerem que o aluno arraste uma etiqueta de texto para dentro da região alvo na imagem de fundo.';
$string['pluginname_link'] = 'question/type/ddmarker';
$string['pluginnamesummary'] = 'Marcadores são arrastados e soltos em cima da imagem de fundo.';
$string['previewareaheader'] = 'Pré-visualizar';
$string['refresh'] = 'Atualizar pré-visualização';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Circular';
$string['shape_circle_coords'] = 'x,y;r (onde x,y são as coordenadas do centro do circulo e r o raio)';
$string['shape_circle_lowercase'] = 'circulo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4... (onde x1 e y1 são as coordenadas do primeiro vértice, x2 e y2 são a coordenada do segundo e assim por adiante. Não há necessidade de repetir as coordenadas para o primeiro vértice para fechar o polígono.)';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Retângulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (onde x e y são as coordenadas do canto superior esquerdo do retângulo e w e h são a largura e altura do retângulo)';
$string['shape_rectangle_lowercase'] = 'retângulo';
$string['showmisplaced'] = 'Destacar regiões alvo que não tiveram o marcador correto informado';
$string['shuffleimages'] = 'Randomizar posições dos marcadores toda vez que é realizada uma nova tentativa de resposta';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Região alvo  {$a}';
$string['ytop'] = 'Topo';
