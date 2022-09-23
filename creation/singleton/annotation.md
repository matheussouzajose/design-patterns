### Singleton

### Problema

Garantir que uma classe tenha somente uma instância e fornecer um ponto global de acesso para a mesma

### Aplicabilidade

- for preciso haver apenas uma instância de uma classe, e essa instância tiver que dar acesso aos clientes através de um ponto bem conhecido;
- a única instância tiver de ser extrensível através de subclasses, possibilitando aos clientes usarem uma instância estendida sem alterar o seu código;

### Definição

O singleton tem a finalidade de garantir esse controle, de gerenciar o número de instâncias criada para uma determinada classe,
e também centraliazar a criação de objetos em um único ponto de acesso global (que pode ser acessada de qualquer parte do sistema).

Existem diversos exemplos pela internet de implementações do Singleton, em que classe princinpal controla a instância de outras classes. Porém isso não garante o real controle de instâncias
de uma classe, já que um desenvolvedor desavisado poderá ingorar a classe Singleton (que controla a criação das instâncias) e criar
novos objetos, seja por não ter conhecimento de sua existência ou não querer utilizá-la.
O correto é que a classe que segue esse padrão de projeto controle a criação de suas próprias instâncias dela de outra forma.
A forma de limitar a criação de novas instâncias da própria classe varia de linguagem para linguagem
