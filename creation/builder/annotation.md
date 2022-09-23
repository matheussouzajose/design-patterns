## Builder

### Problema
Separar a construção de um objeto complexo de sua representação de modo que o mesmo processo de construção possa criar diferentes representações.

### Aplicabilidade

- O algoritmo para criação de um objeto complexo deve ser independente das partes que compõem o objeto e de como elas são montadas.
- O processo de criação de construção deve permitir diferentes representações para o objeto que é construído.

### Definição

O padrão de Builder tem como objetivo simplificar a construção de objetos complexos, abstraindo essa complexidade
por meio de classes específicas. Geralmente, temos complexidade na construção de um objeto quando ele possui um número
muito grande de propriedades. Ele separa a construção desses objetos de suas representações, de mode que seja possível predefini-las.
O padrão Builder encapsula a criação de objetos, ocultando os detalhes de sua criação e diminuindo o acoplamento do código.
Seu foco é a divisão de responsabilidades na construção de um objeto, definindo os passos que são executados.

### Elementos que compõem o Builder

- Product (produto): é o objetivo complexo construído pelo builder.
- Builder (construtor): é uma interface que serve como contrato para a construção das partes do nosso objeto Product.
- Concrete Builder (construtor concreto): a implementação concreta que constrói o Product de acordo com os dados especificados nela.
- Director: é a classe responsável por definir a construção dos objetos utilizando a interface Builder.

