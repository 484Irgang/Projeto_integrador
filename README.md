# Projeto_integrador
Projeto integrador SENAC EAD - Desenvolvimento de sistemas orientado a objeto
# Sistema Educacional de Gestão Acadêmica

## 1. Visão Geral
<div align="justify">
O Sistema Educacional de Gestão Acadêmica tem como objetivo facilitar a administração de atividades acadêmicas em uma instituição de ensino. Ele oferece funcionalidades relacionadas ao lançamento de notas, alocação em disciplinas, faturamento e pagamento, e checagem de notas, atendendo às necessidades de professores, fornecedores e alunos.
</div>

## 2. Funcionalidades Principais
* Lançamento de Notas:
  - Permite que professores autenticados insiram e validem notas para alunos em disciplinas específicas.
  - Oferece a capacidade de cancelar o lançamento de notas.
* Alocação em Disciplinas:
  - Permite que professores escolham disciplinas que desejam ministrar, selecionem turmas disponíveis e sejam alocados para lecionar.
* Faturamento e Pagamento:
  - Permite fornecedores autenticados acessarem funcionalidades de faturamento.
  - Possibilita a seleção de faturas pendentes, confirmação dos detalhes e registro de pagamento.
  - Inclui a capacidade de cancelar faturas.
* Checagem de Notas:
  - Permite que alunos autenticados acessem suas notas em disciplinas específicas.
  - Informa sobre a disponibilidade ou ausência de notas.
 ## 3. Dados Utilizados 
 * Professor:
   - Dados de autenticação (login, senha).
   - Dados pessoais (nome, ID).
 * Aluno:
   - Dados de autenticação (login, senha).
   - Dados pessoais (nome, ID).
 * Fornecedor:
   - Dados de autenticação (login, senha).
   - Dados da empresa (nome, ID).
 * Disciplina:
   - Nome da disciplina.
   - Código da disciplina.
 * Turma:
   - Identificador da turma.
   - Capacidade máxima de alunos.
 * Nota:
   - Valor da nota.
   - Status da nota (válida, inválida, em processamento).
 * Fatura:
   - Número da fatura.
   - Itens da fatura (produtos ou serviços).
   - Status da fatura (pendente, paga, cancelada).
## 4. Tecnologias Utilizadas:
  * Linguagem de Programação:
    - PHP.
  * Banco de Dados:
    - MySQL.
  * Ferramentas Adicionais:
    - HTML, CSS para a interface do usuário.
    - JavaScript para aprimorar a interatividade.
    - Framework PHP (opcional, dependendo da complexidade do projeto).
## 5. Arquitetura do Sistema:
   * Utilizar uma arquitetura MVC (Model-View-Controller) para separação clara de responsabilidades.
   * Implementar uma camada de segurança para proteger dados sensíveis e autenticação de usuários.
## 6. Considerações de Segurança:
   * Implementação de práticas seguras de desenvolvimento para proteção contra injeções SQL e outros ataques.
   * Gerenciamento adequado de permissões de usuário para garantir o acesso apropriado a funcionalidades específicas.
## 7. Desenvolvimento e Manutenção:
   * Adotar metodologias ágeis para desenvolvimento iterativo.
   * Realizar testes regulares de segurança e qualidade.
   * Documentação contínua para facilitar manutenção e desenvolvimento futuro.
## 8. Licença do Projeto
<div align="justify">
O Sistema Educacional de Gestão Acadêmica é distribuído sob uma licença de código aberto para promover a colaboração e a transparência no desenvolvimento. A escolha da licença é uma consideração importante para definir como outros podem usar, modificar e distribuir o software. Neste caso, recomenda-se a utilização de uma licença amplamente reconhecida, como a **Licença MIT**: </div>
  
   * Licença MIT:
     - Permite o uso, modificação, distribuição e sublicenciamento, tanto para fins comerciais quanto não comerciais.

## 9. Contribuições ao Projeto
<div align="justify">
O projeto incentiva ativamente a contribuição da comunidade para melhorar e expandir suas funcionalidades. Aqui estão algumas diretrizes e práticas relacionadas a contribuições: </div>

   * Repositório Público
     - O código-fonte é hospedado em um repositório público (por exemplo, GitHub) para facilitar o acesso e a colaboração.
   * Política de Contribuição
      - Define claramente as regras e os procedimentos para contribuir, incluindo o processo de envio de solicitações de pull (pull requests).
   * Issues e Projetos
      - Utiliza sistemas de rastreamento de issues para gerenciar bugs, melhorias e novos recursos.
      - Projetos são definidos para organizar e priorizar tarefas.
   * Documentação de Contribuição
      - Fornece documentação clara sobre como contribuir, incluindo orientações sobre estrutura de código, boas práticas e fluxo de trabalho.
   * Licença de Contribuições
      - Os contribuidores são solicitados a concordar com a licença do projeto para garantir que suas contribuições sejam compatíveis.
   * Revisão de Código
      - Implementa uma prática de revisão de código para garantir a qualidade e consistência do código.
   * Agradecimento aos Contribuidores
      - Reconhece e agradece ativamente os contribuidores em documentação, README e outras comunicações.
   * Comunidade Ativa
      - Estimula discussões e envolvimento ativo da comunidade por meio de fóruns, listas de e-mails ou outras plataformas.
   * Versão Semântica
      - Adota uma política de versionamento semântico para facilitar a compreensão das mudanças e atualizações.
   * Código de Conduta
      - Estabelece um código de conduta para criar um ambiente colaborativo e inclusivo para todos os participantes.
        
<div align="justify">

Essas práticas ajudam a criar um ecossistema saudável ao redor do projeto, incentivando contribuições valiosas da comunidade e promovendo a transparência e a inovação contínua.

Esta documentação serve como um guia inicial para o desenvolvimento do Sistema Educacional de Gestão Acadêmica, proporcionando uma visão geral das funcionalidades, tecnologias utilizadas e considerações importantes para o sucesso do projeto. Deve-se certificar a atualização deste documento conforme evolução do sistema.

</div>


