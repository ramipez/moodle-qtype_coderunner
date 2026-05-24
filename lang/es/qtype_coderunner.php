<?php
// This file is part of CodeRunner - http://coderunner.org.nz/
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_coderunner', language 'es'
 *
 * @package   qtype_coderunner
 * @copyright Richard Lobb 2012-2023
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'CodeRunner';
$string['pluginnameadding'] = 'Agregando una pregunta CodeRunner';
$string['pluginnameediting'] = 'Editando una pregunta CodeRunner';
$string['pluginnamesummary'] = 'CodeRunner: ejecuta codigo enviado por estudiantes en un sandbox';

$string['addingcoderunner'] = 'Agregando una nueva pregunta CodeRunner';
$string['editingcoderunner'] = 'Editando una pregunta CodeRunner';

$string['coderunnertype'] = 'Tipo de pregunta';
$string['coderunnertype_help'] = 'Seleccione el lenguaje de programacion y el tipo de pregunta. Una vez seleccionado, puede ver los detalles en el panel de detalles del tipo de pregunta.';
$string['questiontypedetails'] = 'Detalles del tipo de pregunta';
$string['answerprompt'] = 'Respuesta:';
$string['answer'] = 'Respuesta';
$string['testcases'] = 'Casos de prueba';
$string['testcode'] = 'Codigo de prueba';
$string['expected'] = 'Salida esperada';
$string['stdin'] = 'Entrada estandar';
$string['allok'] = 'Todos los tests pasaron';
$string['run_failed'] = 'Fallo al ejecutar las pruebas';

$string['graphhelp'] = '- Doble clic en un espacio en blanco para crear un nuevo nodo/estado.
- Clic en una arista/nodo y luego tecla Supr para eliminarlo.
- Doble clic en un nodo existente para marcarlo, por ejemplo como estado de aceptacion en FSM.
- Doble clic de nuevo para desmarcarlo.
- Clic y arrastrar para mover un nodo.
- Shift + clic dentro de un nodo y arrastrar a otro para crear una arista.
- Shift + clic en un espacio en blanco y arrastrar a un nodo para crear la arista de inicio (solo FSM).
- Clic y arrastrar una arista para cambiar su curvatura.
- Clic en una arista/nodo para editar su texto.
- Escribir _ seguido de un digito lo convierte en subindice.
- Escribir \\lambda crea el simbolo lambda.
- Escribir \\epsilon crea el simbolo epsilon (y tambien \\alpha, \\beta, etc).
- Ctrl+z para deshacer y Ctrl+y o Ctrl+Shift+z para rehacer.';

$string['qtype_directed_graph'] = '<p>Tipo de pregunta en python3 para que el estudiante dibuje un grafo dirigido que cumpla una especificacion.</p>';
$string['qtype_undirected_graph'] = '<p>Tipo de pregunta en python3 para que el estudiante dibuje un grafo no dirigido que cumpla una especificacion.</p>';
$string['qtype_pushdown_automaton'] = '<p>Tipo de pregunta en python3 para que el estudiante dibuje un automata con pila (PDA) usando Graph UI en modo FSM.</p>
<h4>Etiquetas de aristas</h4>
<p>Use etiquetas con formato <code>r,s/abc</code>, donde <code>r</code> es el simbolo leido de la entrada, <code>s</code> es el simbolo leido del tope de la pila y <code>abc</code> es la palabra que se escribe en la pila. Use <code>lambda</code> para lectura/pop/push vacios. Ejemplos: <code>a,#/A#</code>, <code>b,A/lambda</code>, <code>lambda,#/#</code>.</p>
<h4>Funciones auxiliares del template</h4>
<p>El template expone <code>transitions</code>, <code>start_states</code>, <code>accept_states</code>, <code>accepts(word)</code> y <code>expect_accept(word, expected)</code> para el codigo de pruebas.</p>
<h4>Parámetros del template</h4>
<p><b>acceptance_mode</b>: <i>final_state</i>, <i>empty_stack</i> o <i>both</i>. <b>epsilon_symbol</b>: por defecto <i>lambda</i>. <b>bottom_marker</b>: por defecto <i>#</i>.</p>';
