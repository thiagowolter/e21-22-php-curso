# SPRINT 03 - Banco de dados Relacional

## 29/06

## MODULO 1

### O que é banco de dados?

 Conjunto de informações organizadas em um formato onde os dados possam facilmente:
 - Armazenados
 - Gerenciados
 - Atualizados
 - Recuperados <br>

### Tipos de BD

- Banco de Dados Relacional
- Banco de Dados Não Relacional
<br>

### Estrutura BD

- BDR: Caracterizado pela forma como os dados sao organizados.
- Tabelas respeitam um SCHEMA, que determina como as tabelas devem ser.

:     CPF        : NOME   : IDADE :<br>
: 123.456.678-44 : Thiago : 20    :<br>
: 333.444.555.55 : Arthur : 11    :<br>

 - Tabela == Entidade
 - Coluna == Atributo
 - Linha == Tupla <br>

### Tipos de Dados

 - Text
 - Integer
 - Real
 - null

 Entre outros. Lista dos [tipos de dados](https://www.sqlite.org/datatype3.html) <br>


### Chave primaria

 - Chave Primaria - PK Primary Key

Serve para definir exclusividades dentro de uma tabela. Cada linha é única (exemplo CPF). Em casos, a PK pode ser composta por uma unica coluno, ou também duas.
<br>

Sugere se a criação de um campo ID para cada registro da table (cria uma sequencia automatica).
<br>

A chave primaria deve ser:
- Unica
- Nao pode mudar nunca
- Nao pode ser nula <br>

### Chave estrangeira

- Chave Estrangeira - FK Foreign Key

-![FK](/img/fk.JPG) <br>
 
### Relacionamentos

 - 1:1 - De uma linha de uma tabela com uma linha de outra tabela.
 - 1:N - De uma linha de uma tabela com muitas linhas de outra tabela.
 - M:N - De muitas linhas de uma tabela com muitas linhas de outra tabela. <br>

#### 1:1 - Relacionamento um para um

![FK](/img/1p1.JPG) <br>

#### 1:N - Relacionamento um para muitos

![FK](/img/1pN.JPG) <br>

#### M:N - Relacionamento muitos para muitos

![FK](/img/MpN.JPG) <br>

#### Auto Relacionamento

![FK](/img/auto.JPG) <br> <br> <br>


## 01/07 

## MODULO 2

### Modelo de Dados

- Modelo de dados são formas visuais de mostrar a organização da base. 
- Modelo de dados relacionais são formas visuais de mostrar o organização entre entidades.

![FK](/img/mod.JPG) <br>

### DER

DIAGRAMA DE ENTIDADE E RELACIONAMENTOS DER

- Ferramenta utilizada: QUICK DBD

![FK](/img/de.JPG) 

- Relacionando

![FK](/img/der.JPG) <br>

### Cardinalidades

- 1:1 representa-se com um hifen : -

- 1:N representa-se com maior + hifen :>-

- M:N representa-se com maior + hifen + menor : >-<

![FK](/img/cardi.JPG) <br>

## 04/07

- Realização do Segundo DER

- Realização de prova/atividade de fixação do conteúdo.








