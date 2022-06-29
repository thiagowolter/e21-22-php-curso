# SPRINT 03 - Banco de dados Relacional

## 29/06

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

-![FK](/img/1p1.JPG) <br>

#### 1:N - Relacionamento um para muitos

-![FK](/img/1pN.JPG) <br>

#### M:N - Relacionamento muitos para muitos

-![FK](/img/MpN.JPG) <br>

#### Auto Relacionamento

-![FK](/img/auto.JPG) <br>





