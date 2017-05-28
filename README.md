# Projeto moodle para o portal oportunidades.es.gov.br 

## Projeto 
O governo do estado através da SECTI (Secretaria da Ciência, Tecnologia, Inovação e Educação Profissional) desenvolveu juntamente com a Prodest (Instituto de Tecnologia da Informação e Comunicação do Espírito Santo), uma implantação e customização de uma plataforma AVA (Ambiente virtual de Aprendizagem).

O objetivo é o portal de Oportunidades do governo do Estado.

[link do portal](http://online.oportunidades.es.gov.br/)

## Como usar:
- na pasta moodledata, copie o stage.sql para moodle.sql
- crie uma pasta com permissão de escrita geral (chmod a+wr) dentro de moodledata chamado moodledata
- na raiz do projeto execute o docker-compose
- crie no seus hosts uma referencia para 'dev.oportunidades.es.gov.br' apontando para localhost (127.0.0.1)
- copie o arquivo /moodledata/moodle/config.php.prd para /moodledata/moodle/config.php
```bash
	cp config.php.prd config.php
```
- execute o docker-compose com comando:
```bash
	docker-compose up -d
```
- entre na url (dev.oportunidades.es.gov.br)


## Trocando url antes de instalar

Caso queira colocar outra url, inclusive url local, como "localhost" ou 
"localhost:8080", basta fazer esses passos:

- antes de executar o primeiro passo da instrução de uso, vá na pasta onde está o arquivo stage.sql e execute o comando:
```bash
sed -e 's/dev.oportunidades.es.gov.br/<minha url>/g' stage.sql > sql/moodle.sql
```
- execute todos os passos da instrução de uso, e quando estiver com o seu config.php, altere o config.php:

de:

```php
$CFG->wwwroot   = 'http://dev.oportunidades.es.gov.br';
```
para:

```php
$CFG->wwwroot   = 'http://<minha url>';
```

Uma vez instalado, a troca de url devem serem feitas conforme instruções do próprio [mooodle](https://docs.moodle.org/33/en/Moodle_migration):


## Contribuições

- Qualquer correção ou observação devem ser feitas por [pull-requests](https://blog.da2k.com.br/2015/02/04/git-e-github-do-clone-ao-pull-request/), e utilizem o canal de [issues](https://github.com/prodest/moodle-compose/issues) para relatar problemas.

