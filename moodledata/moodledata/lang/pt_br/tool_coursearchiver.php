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
 * Strings for component 'tool_coursearchiver', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   tool_coursearchiver
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archiveemail'] = 'Enviar Mensagens "Curso será Arquivado"';
$string['archivewarningemailsetting'] = 'Mensagem de Alerta Padrão para Arquivamento do Curso';
$string['archivewarningsubject'] = 'Nota: Cursos serão arquivados em breve.';
$string['back'] = 'Reiniciar';
$string['cannotdeletecoursenotexist'] = 'Não é possível apagar um curso que não existe';
$string['cli_cannot_continue'] = 'Parado: Dados insuficientes para continuar';
$string['cli_question_archive'] = 'Arquivar e apagar estes {$a} cursos?';
$string['confirm'] = 'Continuar';
$string['confirmmessage'] = 'Tem certeza que quer {$a}';
$string['coursearchiver'] = 'Arquivador de Cursos';
$string['coursearchiver_help'] = 'Buscar por cursos utilizando os seguintes critérios: combinar apelido, nome completo, número de identificação, identificação do curso, data de último acesso ao curso, ou *cursos vazios.n
Cursos são exibidos acinzentados se já estiverem ocultos. O nome completo do curso estará tachado se o curso é um *curso vazio.nn
Nota: O último acesso de busca irá somente exibir cursos que foram criados antes da data informada.n
Nota: A quantidade de endereços eletrônicos encontrados pode diferir das mensagens enviadas. Isto têm duas causas.n
1. Um curso que já está oculto não irá enviar uma mensagem para notificar seu(s) responsável(is) se o curso está selecionado para ficar oculto.n
2. Um endereço eletrônico que é exibido em múltiplos cursos será consolidado em uma única mensagem. nn
* cursos vazios são definidos como 0 tarefas, 0 recursos, 0 categorias no livro de notas, e 0 notas no livro de notas.';
