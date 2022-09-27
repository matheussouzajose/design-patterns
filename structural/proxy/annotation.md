### Proxy

### Problema

Fornece um substituto (surrogate) ou marcador da localização de outro objeto para controlar acesso a esse objeto.

### Aplicabilidade

- um virtual proxy cria objetos caros sob demanda;
- um protection proxy controla acesso ao objeto original. Os proxies de proteção são úteis quando os objetos devem ter diferentes direitos de acesso;
- um smart refernce é um substituto para um simples pointer que executa ações adicionais quando um objeto é acessado. Usos típicos incluem;
  - contar o npuemro de referências para o objeto real, de modo que o mesmo possa ser liberado automaticamente quando não houver mais referências
  - carregar um objeto persistente para a memória quando ele for referenciado pela primeira vez;
  - verificar se o objeto real está bloquado antes de ser acessado, para assegurar que nenhum outro objeto possa mudá-lo;

