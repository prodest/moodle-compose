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
 * Strings for component 'customcert', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   customcert
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcertpage'] = 'Adicionar outra página no certificado';
$string['addelement'] = 'Adicionar elemento';
$string['awardedto'] = 'Concedido a';
$string['code'] = 'Código';
$string['copy'] = 'Cópia';
$string['coursetimereq'] = 'Minutos necessários no curso';
$string['coursetimereq_help'] = 'Digite aqui a quantidade mínima de tempo, em minutos, que um estudante deve estar conectado ao curso antes de receber o certificado.';
$string['createtemplate'] = 'Criar modelo';
$string['customcert:addinstance'] = 'Adicionar um  novo certificado personalizado';
$string['customcert:manage'] = 'Gerenciar um certificado personalizado';
$string['customcertreport'] = 'Relatório de certificado personalizado';
$string['customcert:verifycertificate'] = 'Verificar um certificado';
$string['customcert:view'] = 'Exibir um certificado personalizado';
$string['customcert:viewallcertificates'] = 'Ver todos os certificados';
$string['deletecertpage'] = 'Remover página do certificado';
$string['deleteconfirm'] = 'Remover confirmação';
$string['deleteelement'] = 'Remover elemento';
$string['deleteelementconfirm'] = 'Tem certeza que deseja excluir este elemento?';
$string['deletepageconfirm'] = 'Tem certeza que deseja excluir esta página do certificado?';
$string['deletetemplateconfirm'] = 'Tem certeza que deseja excluir este modelo?';
$string['description'] = 'Descrição';
$string['editcustomcert'] = 'Editar certificado personalizado';
$string['editelement'] = 'Editar elemento';
$string['edittemplate'] = 'Editar modelo';
$string['elementname'] = 'Nome do elemento';
$string['elementname_help'] = 'Este será o nome usado para identificar este elemento durante a edição de um certificado personalizado. Por exemplo, você pode ter várias imagens em uma
página e distinguir entre elas rapidamente na edição do certificado.
Nota: isso não será exibido no PDF.';
$string['elements'] = 'Elementos';
$string['elements_help'] = 'Esta é a lista de elementos que serão exibidos no certificado.
Por favor note: Os elementos são apresentados nesta ordem. A ordem pode ser alterada usando as setas ao lado de cada elemento.';
$string['elementwidth'] = 'Largura';
$string['elementwidth_help'] = 'Especifique a largura do elemento. \'0\' significa que não há qualquer restrição de largura.';
$string['font'] = 'Fonte';
$string['fontcolour'] = 'Cor';
$string['fontcolour_help'] = 'A cor da fonte.';
$string['font_help'] = 'A fonte usada ao gerar este elemento.';
$string['fontsize'] = 'Tamanho';
$string['fontsize_help'] = 'O tamanho da fonte em pontos.';
$string['getcustomcert'] = 'Obtenha seu certificado personalizado';
$string['height'] = 'Altura';
$string['height_help'] = 'Esta é a altura do certificado de PDF em mm. Para referência o papel A4 tem 297 milímetros de altura e o carta tem 279 milímetros de altura.';
$string['invalidcolour'] = 'Cor inválida escolhida, digite um nome válido de cor HTML, ou uma de seis dígitos, ou a cor hexadecimal de três dígitos.';
$string['invalidelementwidth'] = 'Por favor insira um número positivo.';
$string['invalidheight'] = 'A altura tem que ser um número válido maior que 0.';
$string['invalidmargin'] = 'A margem tem que ser um número válido maior que 0.';
$string['invalidposition'] = 'Por favor selecione um número positivo para a posição {$a}.';
$string['invalidwidth'] = 'A largura tem que ser um número válido maior do que 0.';
$string['issued'] = 'Emitido';
$string['landscape'] = 'Paisagem';
$string['leftmargin'] = 'Margem esquerda';
$string['leftmargin_help'] = 'Esta é a margem esquerda do certificado PDF em mm.';
$string['load'] = 'Carregar';
$string['loadtemplate'] = 'Carregar modelo';
$string['loadtemplatemsg'] = 'Tem certeza de que deseja carregar esse modelo? Isto irá remover todas as páginas e os elementos existentes para este certificado.';
$string['managetemplates'] = 'Gerenciar modelos';
$string['managetemplatesdesc'] = 'Este link irá levá-lo para uma nova tela onde você será capaz de gerenciar modelos usados por atividades de certificado personalizado em cursos.';
$string['modify'] = 'Modificar';
$string['modulename'] = 'Certificado personalizado';
$string['modulename_help'] = 'Este módulo permite a geração dinâmica de certificados PDF.';
$string['modulenameplural'] = 'Certificados personalizados';
$string['name'] = 'Nome';
$string['nocustomcerts'] = 'Não há certificados para este curso';
$string['noimage'] = 'Nenhuma imagem';
$string['notemplates'] = 'Nenhum modelo';
$string['notissued'] = 'Não emitido';
$string['options'] = 'Opções';
$string['page'] = 'Página {$a}';
$string['pluginadministration'] = 'Administração de certificado personalizado';
$string['pluginname'] = 'Certificado personalizado';
$string['portrait'] = 'Retrato';
$string['print'] = 'Imprimir';
$string['rearrangeelements'] = 'Reposicionar elementos';
$string['rearrangeelementsheading'] = 'Arrastar e soltar elementos para alterar o local onde eles estão posicionados no certificado.';
$string['receiveddate'] = 'Data de recebimento';
$string['refpoint'] = 'A localização do ponto de referência';
$string['refpoint_help'] = 'O ponto de referência é a localização de um elemento a partir da qual são determinadas as suas coordenadas x e y. É indicado pelo "+" que aparece no centro ou cantos do elemento.';
$string['replacetemplate'] = 'Substituir';
$string['rightmargin'] = 'Margem direita';
$string['rightmargin_help'] = 'Esta é a margem direita do certificado PDF em mm.';
$string['save'] = 'Salvar';
$string['saveandclose'] = 'Salvar e fechar';
$string['saveandcontinue'] = 'Salvar e continuar';
$string['savechangespreview'] = 'Salvar as alterações e pré-visualizar';
$string['savetemplate'] = 'Salvar modelo';
$string['search:activity'] = 'Certificado personalizado - informações de atividade';
$string['setprotection'] = 'Configurar proteção';
$string['setprotection_help'] = 'Escolha as ações que você deseja impedir que os usuários realizem neste certificado.';
$string['summaryofissue'] = 'Resumo de emissão';
$string['templatename'] = 'Nome do modelo';
$string['templatenameexists'] = 'Este nome de modelo está atualmente em uso, escolha outro.';
$string['topcenter'] = 'Centro';
$string['topleft'] = 'Superior esquerdo';
$string['topright'] = 'Superior direito';
$string['type'] = 'Tipo';
$string['uploadimage'] = 'Carregar imagem';
$string['uploadimagedesc'] = 'Este link irá levá-lo para uma nova tela onde você será capaz de fazer upload de imagens. Imagens carregadas usando este método estarão disponíveis em todo o seu site para todos os usuários que são capazes de criar um certificado personalizado.';
$string['viewcustomcertissues'] = 'Ver {$a} certificados emitidos personalizados';
$string['width'] = 'Largura';
$string['width_help'] = 'Esta é a largura do certificado de PDF em mm. Para referência o papel A4 tem 210 milímetros de largura e carta tem 216 milímetros de largura.';
