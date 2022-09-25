### Adpter

### Problema

Converter a interface de uma classe em outra interface, esperada pelos clientes. O adpter que classes como o interfaces
incompatíveis em conjunto, o que, de outra forma, seria impossível.

### Aplicabilidade
- você quiser usar uma classe existente, mas sua interface não corresponder a interface que você necessita;
- você quiser criar uma classe reutilizável que coopere com classes não-relacionadas ou não-previstas, ou seja, classes que não necessariamente tenham interfaces compatíveis;
- (somente adaptadores de objetos) você precisa usar variáveis subclasses existentes, porém, for impraticável adaptar essas interfaces criando subclasses para cada uma. Um adaptador de objeto pode adaptar a interface da sua classe-mãe

### Definição

- Adaptee (item adaptado): trata-se de uma interface já existente, da qual o nosso adaptador fará uso.
- Client (cliente): são as classes que farão uso uso do adaptador.
- Target (alvo): define a interface que o nosso cliente vai usar.
- Adapter (adapter): é o adaptador de fato, que implementa da interface de Target, porém, por trás, faz uso do item adaptado (Adaptee) de forma totalmente transparente.
As classes que usam esse adaptador só tem conhecimento de sua interface, mas tem conhecimento da interface do item adaptado.
