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

```
:     CPF        : NOME   : IDADE :<br>
: 123.456.678-44 : Thiago : 20    :<br>
: 333.444.555.55 : Arthur : 11    :<br>
```

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

## 06/07
## MODULO 3
<br> <br>

### **SQL**

 - Linguagem de comunicacao com o Banco de dados
 - Sql = Structured Query Language

 - Criar e Modificar
    - Banco de dados;
    - Tabelas;
    - Permissoes de Acesso;
    - Registrar dados; <Br>
 - Gerenciar transações: confirmar ou desfazer;


### Organização do SQL

![FK](/img/orgsql.JPG) <br>

### DDL CREATE:

 - DDL Data Definition Language ou Linguagem de Definição de Dados.

 - Criamos uma estrutura pela ide adp https://app.quickdatabasediagrams.com/#/d/vRiRrt

 #### Instruções geradas automaticamente para MYSQL:

```
CREATE TABLE `PESSOAS` ( 
    `ID` INT  NOT NULL , 
    `CPF` TEXT  NOT NULL , 
    `NOME` TEXT  NOT NULL , 
    `IDADE` INT  NOT NULL , 
    PRIMARY KEY (`ID` ) 
);
```

#### Versão SQL:

```
CREATE TABLE PESSOAS (
    ID INTEGER PRIMARY KEY AUTOINCREMENT, 
    CPF TEXT, 
    NOME TEXT NOT NULL, 
    IDADE INTEGER 
)
```
<br><br>

### DML INSERT:

- SQL INSERT INTO 

- CPF, NOME, IDADE

```
INSERT INTO PESSOAS(CPF, NOME, IDADE) 
VALUES                                  
    ('123.456.789-00', 'ADRIANO MACHADO', 47), 
    ('233.567.789-01', 'KARINA MACHADO', 45); 
```

### Criação de tabela

 - Criação do arquivo [PESSOAS.SQL](/exercicios/sql/mod3/PESSOAS.SQL) no formato SQL. <br> <br>

### SQLITE

 - Instalar o sqlite3 (sqlite.org)

```
sqlite3 Modulo3.db
sqlite> .read pessoas.sql # este comando, iniciado com . (ponto) é um comando do SQlite. 
sqlite> .schema PESSOAS
```

### DQL SELECT:

```
SELECT * 
FROM PESSOAS; 
```

### DML UPTADE:

```
UPDATE PESSOAS 
    SET SALARIO=10.00 
    WHERE ID=2 ;
``` 
Este é o modo correto (acima)
```
UPDATE PESSOAS 
    SET SALARIO=10.00 ;
```
    
Nesta condição acima alteramos todos os registros da base, pois esquemos de colocar o WHERE.
Devemos ter muito cuidado com isso!

### DML DELETE:

```
SELECT * FROM PESSOAS WHERE ID = 2; 
DELETE   FROM PESSOAS WHERE ID = 2; 
```
<BR>

## 11/06

## MODULO 4

<BR>

- Criação do Arquivo [modulo4.sql](/exercicios/sql/mod4/modulo4.SQL);

### SELECT DISTINCT

```
SELECT DISTINCT (PESSOAS_NOME)
FROM PESSOAS;
```
[QUERY.SQL](/exercicios/sql/mod4/query.sql);

### SELECT WHERE

```
1 = 1 
1 <> 2 ou 1 != 2 
1 < 2 
2 > 1
```

```
SELECT PESSOAS_NOME FROM PESSOAS 
WHERE PESSOAS_IDADE < 20;

SELECT PESSOAS_IDADE FROM PESSOAS 
WHERE PESSOAS_NOME = 'Thiago Wolter';
```

### OPERADORES LOGICOS

```
: IN      : Retorna 1 se o valor testado estiver na lista 
: LIKE    : Retorna 1 se o valor testado coincidir com o padrão passado 
: AND     : Retorna 1 se as duas expressoes testadas forem 1 
: OR      : Retorna 1 se uma das duas expressoes testadas forem 1 
: BETWEEN : Retorna 1 se o valor testado estiver no intervalo passado
```

```
SELECT * FROM PESSOAS WHERE PESSOAS_IDADE IN (20,40);
SELECT * FROM PESSOAS WHERE PESSOAS_NOME LIKE '%Thiag%';
SELECT * FROM PESSOAS WHERE PESSOAS_NOME LIKE '%Thiag%' AND PESSOAS_IDADE = 21;
SELECT * FROM PESSOAS WHERE PESSOAS_NOME LIKE '%Thiag%' OR PESSOAS_NOME LIKE '%Joa%';
SELECT * FROM PESSOAS WHERE PESSOAS_IDADE BETWEEN 20 AND 25;
```

### ORDER BY

```
SELECT PESSOAS_IDADE, PESSOAS_NOME FROM PESSOAS ORDER BY PESSOAS_IDADE, PESSOAS_NOME;

ADICIONAR AO FINAL: 
DESC -> PARA MOSTRAR NA DESCENDENTE.
```

### FUNCOES EMBUTIDAS

```
select avg(pessoa_idade) from pessoas; 

select min(pessoa_idade) from pessoas; 

select max(pessoa_idade) from pessoas;

select sum(pessoa_idade) from pessoas;

select count(*) from pessoas; 
```

### GROUP BY

```
SELECT PESSOAS_IDADE, COUNT(PESSOAS_NOME) FROM PESSOAS GROUP BY PESSOAS_IDADE;
```

### JUNÇÕES

```
SELECT 
    CIDADES.CIDADES_NOME, 
    PESSOAS.PESSOAS_NOME,
    PESSOAS.PESSOAS_IDADE
FROM    
    PESSOAS,CIDADES
WHERE 
    PESSOAS.PESSOAS_CIDADES_ID = CIDADES.CIDADES_ID;
```







