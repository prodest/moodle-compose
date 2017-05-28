# projeto moodle para o portal oportunidades.es.gov.br 

## projeto 
O governo do estado através da SECTI (Secretaria da Ciência, Tecnologia, Inovação e Educação Profissional) desenvolveu juntamente com a Prodest (Instituto de Tecnologia da Informação e Comunicação do Espírito Santo), uma implantação e customização de uma plataforma AVA (Ambiente virtual de Aprendizagem).

O objetivo é o portal de Oportunidades do governo do Estado.

[link do portal](http://online.oportunidades.es.gov.br/)

## como usar:
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
