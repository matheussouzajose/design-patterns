### Flyweight

### Problema

Usar compartilhamento para suportar eficientemente grandes quantidades de objetos de granularidade fina.

### Aplicabilidade

- A eficiência do padrão Flyweight depende muito de como e onde ele é usado. Aplique o padrão Flyweigth quando todas as condições a seguir forem verdaderias:
- uma aolicação utiliza um grande número de objetos;
- os custos de armazenamento são altos por causa da grande quantidade de objetos;
- a maioria dos estados de objetos podem ser substituídos por relativamente poucos objetos compartilhados, uma vrz que estados extrínsecos são removidos;
- a aplicação não depende da identidade dos objetos. Uma vez que objetos Flyweights podem ser compartilhados, testes de identidade produzirão o valor verdadeiro para objetos conceitualmente distintos;
