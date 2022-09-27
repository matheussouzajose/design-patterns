### Façade

### Problema

Fornecer uma inteface unificada para um conjunto de interfaces em um subsistema.
Façade define uma interface de nível mais  alto que torna o subsistema mais fácil de ser usado.

### Aplicabilidade

- você desejar fornecer uma interface simples para um subsistema complexo. Os subsistemas se tornam mais complexos à medida que evoluem. A maioria dos padrões, quando aplicados, resulta em mais e menores classes. Isso torna o subsistema mais reutilizável e mais fácil de customizar, porém, também, se torna mais difícil de usar para os clientes que não precisam customizá-lo.
Uma fachada pode fornecer, por comportamento-padrão, uma visão simples do sistema, que é boa o suficiente para a maioria dos clientes. Somente os clientes que demandarem maior customização necessitarão olhar além da fachada;
- existirem muitas dependências entre clientes e classes de implementação de uma abstração. Ao introduzir uma fachada para desacoplar o subsistema dos clientes e de outros subsistemas, estar-se-á promovendo a independência e portabilidade dos subsistemas;

### Definição

Facade (ou em português "fachada") pode ser definido como uma fachada arquitetural de um sistema, ou seja, uma pequena parte do ssitema que serve como camada para outras partes da aplicação. Quando precisamos user esses subsistemas, trabalhamos diretamente em contato com a fachada;

- Facade (fachada): representação da fachada responsável por abstrair as classes de subsistemas. Geralmente, esta camada é construída sobre uma única classe.
- Classes de subsistemas e módulos/bibliotecas: são todas as classes das quais um facade faz uso. São as classes cujas operações se quer simplificar.

