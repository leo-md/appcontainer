# App Container 

![Badge em Desenvolvimento](http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge)

Aplicação web para gerenciamento portuário de containers


## Proposta AppContainer 

São requisitos funcionais da aplicação: 
1. Crud de Contêiner <br>
1.1. Cliente <br>
1.2. Número do contêiner (4 letras e 7 números. Ex: TEST1234567)  <br>
1.3. Tipo: 20 / 40  <br>
1.4. Status: Cheio / Vazio  <br>
1.5. Categoria: Importação / Exportação  <br>
2. Crud de Movimentações  <br>
2.1. Tipo de Movimentação (embarque, descarga, gate in, gate out, reposicionamento, pesagem, scanner)  <br>
2.2. Data e Hora do Início  <br>
2.3. Data e Hora do Fim  <br>
3. Relatório com o total de movimentações agrupadas por cliente e tipo de movimentação.  <br>
3.1. No final do relatório deverá conter um sumário com o total de importação / exportação.  <br>
Premissas para todos os artefatos:  <br>
● O leiaute dos controles de manutenção dos dados não precisa ser de um CRUD padrão. Pode sentir-se à vontade para criar mecanismos de interação mais criativos e funcionais. <br>
● Validações  <br>
● Ordenações  <br>
● Filtros <br>



## Recomendações

Tendo em vista que o sistema está sendo desenvolvido em linguagem de programação PHP, a parte lógica da aplicação roda a nível de servidor. Nesse sentido é recomendado a utilização de um servidor de desenvolvimento Xampp.

A aplicação também utiliza um banco de dados MySQL como base. O script da criação de toda a estrutura do banco de dados, bem como as inserções iniciais, está disponível na pasta 'assets'.

