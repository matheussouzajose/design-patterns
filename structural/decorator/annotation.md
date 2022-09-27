### Decorator

### Problema

Dinamicamente, agregar responsabilidades a um objeto. Os decorators fornecem uma alternatica flexível ao uso de subclasses para extensão de funcionalidades.

### Aplicabilidade

- para acrescentar responsabilidades a objetos individuais de forma dinâmica e transparente, ou seja, sem afetar outros objetos;
- para responsabilidades que podem ser removidas;
- quando a extensão através de uso de subclasses não é prática. Às vezes, um grande número de extensões independentes é possível e isso poderia produzir uma explosão de subclasses para suportar cada combinação. Ou a definição de uma classe pode estar oculta ou não estar disponível para a utilização de subclasses;

### Definição

O padrão de projeto Decorator, também conhecido como wrapper, permite adicionar a um objeto comportamentos de forma dinâmica, agregando fucionalidades ou responsabilidades adicionais a ele.
Ao contrário do uso da herança, em que são definidos comportamentos a classes, o Decorator permite permite adicionar esses comportamentos a objetos em tempo de execução, o que torna a aplicação muito dinâmica, permitindo mais flexibilidade a seus atributos e métodos.

- Component (component): é a interface que será implementada, tanto pelos decoradores quanto pelos componentes concretos. Ela garantirá que ambas as classes tenham uma compatibilidade de métodos para o funcionamento das decorações.
- Concrete Component (componente concreto): é o componente do sistema que receberá as decorações, nele serão adicionados funcionalidades, comportamento e estados extra. Esses componentes são considerados a classe base do nosso sistema que serão alterados.
- Decorator (decorador): é a interface ou classe abstrata que serve de contrato para os decoradores concretos implementarem, garantindo a compatibilidade para as decorações.
- Concrete Decorator (decorador concreto): são as implementações concretas dos decoradores. Elas contêm as funcionalidades extra a serem agregadas ao componente principal.

