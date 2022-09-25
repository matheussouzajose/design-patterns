### Bridge

### Problema

Desaclopar uma abstração da sua implementação, de modo que as duas possam variar independentemente.

### Aplicabilidade

- desejar evitar um vínculo permanente entre uma abstração e sua implementação, isso pode ocorrer, por exemplo, quando a implementação dese ser selecionada ou alterada em tempo de execuação;
- tanto as abstrações como suas implementações tiverem de ser extensíveis por meio de subclasses. Neste caso, o padrão Bridge permite combinar as diferentes abstrações e implementações e estendê-las independentemente;
- mudanças na implementação de uma abstração não puderem ter impacto sobre os clientes, ou seja, quando o código dos mesmos não puder se recompilado;
- (C++) você desejar ocultar completamente a implementação de uma abstração dos clientes. Em C++, a representação de uma classe é visível na interface da classe;
- desejar compartilhar uma implementação entre múltiplos objetos (talvez usando a contagem de referências) e este fato deve estar oculto do cliente;
