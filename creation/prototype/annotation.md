### Prototye

### Problema

Especificar os tipos de objetos a serem criados usando uma instância-protótipo e criar novos objetos pela cópia desse protótipo.

### Aplicabilidade

- Quando as classes a instanciar forem especificadas em tempo de execução, por exemplo, por carga dinâmica;
- Para evitar a construção de uma hierarquia de classes de fábricas paralela à hierarquia de classes de produto;
- Quando as instâncias de uma classe puderem ter uma dentre poucas combinações diferentes de estados. Pode ser mais conveniente instalar um número correspondente de protótipos e cloná-los, ao invés de instanciar a classe manualmente, cada vez com um estado apropriado;


### Definição

O objetivo desse padrão é definir alguns objetos que servem como uma instância de protótipo, clonada para a criação de novos objetos.
Diferente dos demais padrões de criação, o Prototype utiliza o próprio objeto para criar as novas instâncias em vez de usar classes auxiliares para fazer isso.
Este padrão é indicado principalmente quando se quer cópias exatas de um objeto, incluindo seus atributos.
Assim, temos um custo muito menor de memória do que instanciar o mesmo objeto muitas vezes e, em cada uma dessas vezes, setar exatamente os mesmos valores em suas propriedades.
Aliás, também é interessante sue uso nos casos em que temos poucas variáções.
Ainda assim, teríamos um ganho na perfomance.

- Prototype (protótipo): uma classe abstrata que define a interface com os métodos que a permitem se autoclonar.
- Concrete Prototype (protótipo concreto): classe concreta que implementa a interface Prototype.
- Client (cliente): classe responsável por criar os objetos de protótipo e cloná-los por meio de seus métodos.
