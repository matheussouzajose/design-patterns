## Abstract Factory

### Problema

Criação de conjunto de objetos relacionados ou dependentes sem especificar suas classes concretas.
O cliente da fábrica de abstração não precisa se preocupar como estes objetos ão criados, ele só sabe obtê-los.

### Aplicabilidade
- Um sistema deve ser independente de como seus produtos são criados, compostos ou representados;
- Um sistema deve ser configurado como um produto de uma família de múltiplos produtos;
- Uma família de objetos-produtos for projetada para ser usada em conjunto, e você necessita garantir esta restrição;
- Você quer fornecer uma biblioteca de classes de produtos e quer revelar somente suas interfaces, não suas implementações;
