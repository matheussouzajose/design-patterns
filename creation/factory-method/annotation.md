### Factory Method

### Problema

Definir uma interface para criar um objeto, mas deixar as subclasses decidirem que classe instanciar. O Factory Method permite adiar a instanciação para subclases.
### Aplicabilidade

- Uma classe não pode antecipar a classe de objetos que devem criar;
- Uma classe quer que suas subclasses especifiquem os objetos que criam;
- Classes delegam responsabilidade para uma dentre várias subclasses auxiliares, e você quer localizar o conhecimentos de qual subclasse auxiliar que é delegada;

### Definição

O objetivo desse padrão Factory Method é encapsular a criação e os objetos de um sistema. Isso ocorre por meio de outros objetos chamados de fábricas
(referência à fábrica de objetos), cuja responsabilidade é apenas criar as instâncias.
No padrão Factory Method, temos uma interface que define um contrato para os objetos a serem criados pelas fábricas, que seriam nossos produtos finais.
Também temos uma interface que define como nossas classes-fábrica deverão ser construídas.

- Product (produto abstrato): define uma interface de objetos que será criada pelo nosso método-fábrica que estará no Concrete Creator
- Concrete Product (produto concreto): é o produto concreto que implementa a inteface Product. Trata-se do produto final que será criado pelas fábricas.
- Creator (criador abstrato): é a interface que define contrato de todas as nossas fábricas.
- Concrete Creator (criador concreto): é a classe concreta que implementa nossa interface Creator, ela representa a fábrica de objetos de cada produto.
