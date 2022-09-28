## Chain of responsability

### Problema

Evitar o acoplamento do remetente de uma solicitação ao seu receptor, ao dar a mais de um objeto a oportunidade de tratar a solicitação.
Encadear os objetos receptores, passando a solicitação ao longo da cadeia até que um objeto a trate.

### Aplicabilidade

- mais de um objeto pode tratar uma solicitação e o objeto que a tratará não conhecido a priori. O objeto que trata a solicitação deve ser escolhido automaticamente;
- você quer emitir uma solicitação para um dentre vários objetos, sem especificar explicitamente o receptor;
- o conjunto de objetos que pode tratar uma solicitação deveria ser especificado dinamicamente
