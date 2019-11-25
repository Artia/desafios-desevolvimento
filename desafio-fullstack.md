# Sobre o Grupo EUAX
Se você chegou a esta pagina e não sabe do que se trata entre entre no nosso site e conheça um pouco mais sobre o [Grupo EUAX](https://grupoeuax.com.br/carreira/) e depois volte aqui para participar de nosso desafio para Web Developer.

# Desafio Web Developer
Olá, você acaba de ser contratado como desenvolverdor em uma grande empresa e começa a receber seus primeiros projetos para trabalhar. Sua empresa não usa o ARTIA como solução para acompanhamento de projetos e tarefas então como você precisa ter uma visibilidade melhor das suas atividades resolve desenvolver uma solução para acompanhar suas entregas.

## Problema

Você precisa cria um cadastro de projetos com a data de inicio e data final para a entrega, esse projeto pode ter 1 ou N atividades que tambem precisam ser cadastradas com as datas de inicio e data de fim. Após ter feito todos os cadastros precisamos saber quantos % do projetos ja temos finalizados e tambem se o projeto tera atrasos ou não.
Para saber o % de andamento do projeto deve ser considerado o número de atividades finalizadas e quantidade de atividades ainda sem finalizar.
Para saber se o projeto terá atraso considere a maior data final das atividades e compare com a data final do projeto, se for maior que a data final projeto terminara com atrasos. Abaixo segue exemplo das tabelas para cadastros.

#### Tabela Projetos
| Campo           | Tipo    | Obrigatório  |
| :-------------- | :-----: | -----------: |
| Nome do Projeto | Texto   | Sim          |
| Data Início     | Data    | Sim          |
| Data de fim     | Data    | Sim          |

#### Tabela Atividades
| Campo             | Tipo    | Obrigatório  |
| :--------------   | :-----: | -----------: |
| ID do Projeto     | Inteiro | Sim          |
| Nome da Atividade | Texto   | Sim          |
| Data Início       | Data    | Sim          |
| Data de fim       | Data    | Sim          |
| Finalizada?       | Boolean | Não          |

## Exemplos

#### Exemplo 1

| ID Projeto | Nome Projeto | Data Inicio | Data Fim   | % Completo | Atrasado |
| :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
| 1          | Projeto 1    | 01/01/2019  | 31/01/2019 | 50%        | Não      |

| ID Atividade | ID Projeto | Nome Atividade | Data Inicio | Data Fim   | Finalizada? |
| :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
| 1          | 1            | Atividade 1    | 06/01/2019  | 15/01/2019 | Sim                 |
| 2          | 1            | Atividade 2    | 16/01/2019  | 31/01/2019 | Não                 |

#### Exemplo 2

| ID Projeto | Nome Projeto | Data Inicio | Data Fim   | % Completo | Atrasado |
| :--------- | :----------: | ----------: | ---------: | ---------: | -------: |
| 2          | Projeto 2    | 01/02/2019  | 28/02/2019 | 0%         | Sim      |

| ID Atividade | ID Projeto | Nome Atividade | Data Inicio | Data Fim   | Finalizada? |
| :---------- | :---------: | -------------: | ----------: | ---------: | ----------: |
| 1          | 2            | Atividade 1    | 01/02/2019  | 10/02/2019 | Não                 |
| 2          | 2            | Atividade 2    | 11/02/2019  | 20/02/2019 | Não                 |
| 3          | 2            | Atividade 3    | 21/02/2019  | 02/03/2019 | Não                 |

## Avaliação
No arquivo README do projeto explique o funcionamento e quais tecnologias foram utilizadas para implementação do desafio.
* Use sua criatividade e conhecimentos para montar as telas de cadastros e listagens
* Use a linguagem e tecnologias que se sentir avontade, em nossa conversa repassaremos os pontos abordados na solução
* Mantenha um código limpo e organizado, isso contará bastante
* Será avaliado apenas o cadastro e listagem dos projetos e atividades mas caso queira trabalhar com edição e exclusão tambem contará pontos extras

## Observações
Caso não consiga completar o desafio ou enfrente qualquer dificuldade, nos envie mesmo assim pois seu esforço tambem será avaliado na entrega

Boa sorte
