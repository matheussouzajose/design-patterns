## Interpreter

### Problema

Dada uma linguagem, definir uma representação para a sua gramática juntamente com um interpretador que usa a representação para interpretar sentenças dessa linguagem.

### Aplicabilidade

- a gramática é simples. Para gramáticas complexas, a hierarquia de classes para a gramática se torna grande e incontrolável. Em tais casos, ferramentas tais como geradores de analisadores são uma alternativa melhor. Elas podem interpretar expressões sem a construção de árvores sintáticas abstratas, o que pode economizar espaço e, possivelmente, tempo;
- a eficiência não é uma preocupação crítica. Os interpretadores mais eficientes normalmente não são implementados pela interpretação direta de árvores de análise sintática, mas pela sua tradução para uma outra forma. Por exemplo, expressões regulares são freqüentemente transformadas em máquinas de estado. Porém, mesmo assim, o tradutor pode ser implementado pelo padrão Interpreter, sendo o padrão, portanto, ainda aplicável.
