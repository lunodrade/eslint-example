
# eslint-example
Exemplo de configuração de projeto usando eslint-prettier
 
O objetivo é forçar e ao mesmo tempo ajudar o desenvolvedor a seguir padrões de códigos.
 
Para PHP: [PSR-2](https://www.php-fig.org/psr/psr-2/)
Para Javascript [Google Standard](https://google.github.io/styleguide/javascriptguide.xml)

## Configuração base (uma vez por PC)

* Utilize o [Visual Code](https://code.visualstudio.com/download)
* Dentro do Visual Code, instale as seguintes extensões:
  * [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)
  * [Eslint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
  * [PHP Code Sniffer](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs)
* Vá até o diretório que fica as extensões do Visual Code
	* Windows: `%USERPROFILE%\.vscode\extensions`
	* Linux: `$HOME/.vscode/extensions`
* E execute o seguinte código (na diretório mostrado acima):
	* `npm install @prettier/plugin-php`
* Após isso vá nos Settings do Visual Code e insira as seguintes linhas:
```json
  "files.eol": "\n",
  "files.insertFinalNewline": true,
  "phpcs.standard": "PSR2",
  "phpcs.executablePath": ".\\vendor\\bin\\phpcs",
  "editor.formatOnSave": true,
  "files.associations": {
    "blade": "html",
    ".blade.php": "html"
  },
  "editor.defaultFormatter": "esbenp.prettier-vscode",
  "eslint.autoFixOnSave": true,
  "eslint.alwaysShowStatus": true,
  "eslint.provideLintTask": true,

  "prettier.singleQuote": true
```
* Pronto! Agora durante a edição do arquivo serão mostrado os erros que estiverem fora do padrão daquela linguagem. E ao salvar o arquivo, o próprio Visual Code tentará corrigir tudo que for possível, seguindo o padrão.

## Configuração extendida (uma vez por projeto)

Para cada novo projeto criado, e somente uma vez dentro dele, é necessário instalar o Eslint local e iniciar a configuração dele (que cria o arquivo `.eslintrc.json` no root do projeto). Para isso, basta executar dentro do root da pasta do projeto:
```
$ npm install --save-dev eslint
$ .\\node_modules\\.bin\\eslint --init
```
Ao digitar essa segunda linha, no terminal irá aparecendo várias opções. Basicamente selecione as seguintes:
```
> To check syntax, find problems, and enforce code style
> *A opção mais de acordo com o javascript no momento, ou a terceira opção*
> *A opção mais de acordo com o framework no momento, ou a terceira opção*
> *Selecione com `espaço` pra marcar os locais que o JS irá rodar*
> Use a popular style guide
> Google (https://github.com/google/eslint-config-google)
> JSON

? Would you like to install them now with npm? (Y/n)
→ RESPONDA COM Y
```
