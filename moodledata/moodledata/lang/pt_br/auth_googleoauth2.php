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
 * Strings for component 'auth_googleoauth2', language 'pt_br', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_googleoauth2
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid_key'] = 'Chave do aplicativo Dropbox';
$string['auth_dropboxclientsecret_key'] = 'Segredo do aplicativo Dropbox';
$string['auth_facebookclientid_key'] = 'ID do aplicativo do Facebook';
$string['auth_facebookclientsecret_key'] = 'Segredo do aplicativo do Facebook';
$string['auth_githubclientid_key'] = 'ID de cliente Github';
$string['auth_githubclientsecret_key'] = 'Segredo de cliente Github';
$string['auth_googleclientid_key'] = 'ID de cliente Google';
$string['auth_googleclientsecret_key'] = 'Segredo de cliente Google';
$string['auth_googleipinfodbkey_key'] = 'Chave IPinfoDB';
$string['auth_googleoauth2description'] = 'Permitir que um usuário se ligue ao site com um fornecedor de autenticação externa: Google/Facebook.
A primeira vez que o usuário se ligar ao fornecedor de autenticação, uma nova conta é criada.
<b>Deve</b> desmarcar a opção Prevenir criação de conta (configuração de administrador: authpreventaccountcreation ) ao autenticar.';
$string['auth_googlesettings'] = 'Configurações';
$string['auth_googleuserprefix'] = 'A identificação do usuário (username) irá começar com este prefixo. Num site básico você não precisa mudar isto.';
$string['auth_googleuserprefix_key'] = 'Prefixo da identificação do usuário';
$string['auth_sign-in_with'] = 'Acessar com {$a->providername}';
$string['couldnotauthenticate'] = 'A autenticação falhou - Por favor, tente acessar novamente.';
$string['couldnotauthenticateuserlogin'] = 'Erro de método de autenticação.<br/>
Por favor, tente acessar utilizando sua identificação de usuário e senha.<br/><br/>
<a href="{$a->loginpage}">Tentar novamente</a>.<br/>
<a href="{$a->forgotpass}">Esqueceu a senha</a>?';
$string['couldnotgetgoogleaccesstoken'] = 'O provedor de autenticação nos comunicou um erro. Por favor, tente acessar novamente.';
$string['emailaddressmustbeverified'] = 'O seu endereço de email não foi verificado pelo método de autenticação que você escolheu. É possível que você tenha esquecido de clicam em um link "verificar meu endereço de email" que o Google ou o Facebook devem ter enviado a você durante a assinatura daqueles serviços.';
$string['faileduserdetails'] = 'O site conectou-se com sucesso ao fornecedor selecionado mas não conseguiu recuperar os seus dados de usuário. Se estiver usando o Google, verifique se o administrador do site ativou Google+ API no console de desenvolvimento do Google. É a razão mais comum para este erro.';
$string['moreproviderlink'] = 'Acesse com outro serviço.';
$string['noaccountyet'] = 'Você nao tem permissão de acessar o site ainda. Por favor, contate seu administrador e peça para ativar sua conta.';
$string['oauth2displaybuttons'] = 'Mostrar botões na página de login';
$string['othermoodle'] = 'Outras autenticações do Moodle';
$string['pluginname'] = 'Oauth2';
$string['signinwithanaccount'] = 'Fazer login com {$a}';
$string['stattitle'] = 'Estatísticas de acesso para os últimos {$a->periodindays} dias (iniciando do momento de instalação ou atualização do plugin)';
$string['supportmaintenance'] = 'Para incentivar a manutenção deste plugin, for favor, acesse <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2">página de plugins do Moodle.org</a> e clique em "Adicionar aos meus favoritos". Muito obrigado!';
$string['unknownfirstname'] = 'Primeiro nome desconhecido';
$string['unknownlastname'] = 'Sobrenome desconhecido';
