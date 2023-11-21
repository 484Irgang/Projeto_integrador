# Sistema Educacional de Gestão Acadêmica

# Participantes:
* Documentação:
  - Gabriel Lazarini Ramos;
  - Hellen Caroline Vicchietti;
  - Helison Ramos;
* Protótipo:
  - Tomaz Lima;
  - Ícaro Quimaia;
  - Erick Neri;
* Codificação:
  - Guilherme Irgang;
 

# Instrução de uso para testes:
 * Acesse o sistema clicando <a href="https://projetointegrador.up.railway.app">AQUI</a>
 * Dados para login:
   - Email: teste@outlook.com;
   -  Senha: 12345678.
 * Observações importantes: O provedor virtual escolhido foi o <a href="https://railway.app">Railway</a> para fazer o deploy da aplicação, o provedor forneceu serviços de servidor e banco de dados mas por um tempo limitado de créditos para teste e que não durará muito tempo, por esse motivo o sistema poderá não estar funcionando se a data escolhida para analisar e testar o trabalho for muito distante após a entrega do mesmo.




## 1. Visão Geral
O Sistema Educacional de Gestão Acadêmica tem como objetivo facilitar a administração de atividades acadêmicas em uma instituição de ensino. Ele oferece funcionalidades relacionadas ao lançamento de notas, alocação em disciplinas, faturamento e pagamento, e checagem de notas, atendendo às necessidades de professores, fornecedores e alunos.
## 2. Funcionalidades Principais
  * Cadastro de login para usuário e administrador;
  * Autenticação de usuário e administrador;
  * Impressão dos dados em uma tela responsiva e dinâmica.


 ## 3. Dados Utilizados 
 * Professor:
   - Dados de autenticação (login, senha).
   - Dados pessoais (nome, ID).
 * Aluno:
   - Dados de autenticação (login, senha).
   - Dados pessoais (nome, ID).

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
O Sistema Educacional de Gestão Acadêmica é distribuído sob uma licença de código aberto para promover a colaboração e a transparência no desenvolvimento. A escolha da licença é uma consideração importante para definir como outros podem usar, modificar e distribuir o software. Neste caso, recomenda-se a utilização de uma licença amplamente reconhecida, como a **Licença MIT**: 
   * Licença MIT:
     - Permite o uso, modificação, distribuição e sublicenciamento, tanto para fins comerciais quanto não comerciais.
     - Exige a inclusão do aviso de copyright e a renúncia de responsabilidade nas cópias ou partes substanciais do software.
## 9. Contribuições ao Projeto
O projeto incentiva ativamente a contribuição da comunidade para melhorar e expandir suas funcionalidades. Aqui estão algumas diretrizes e práticas relacionadas a contribuições:
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

## 10. Recursos futuros do Projeto
  * Lançamento de Notas:
        - Permite que professores autenticados insiram e validem notas para alunos em disciplinas específicas.
        - Oferece a capacidade de cancelar o lançamento de notas.
  * Alocação em Disciplinas:
        - Permite que professores escolham disciplinas que desejam ministrar, selecionem turmas disponíveis e sejam alocados para lecionar.
  * Checagem de Notas:
        - Permite que alunos autenticados acessem suas notas em disciplinas específicas.
        - Informa sobre a disponibilidade ou ausência de notas.
  * Faturamento e Pagamento:
        - Permite fornecedores autenticados acessarem funcionalidades de faturamento.
        - Possibilita a seleção de faturas pendentes, confirmação dos detalhes e registro de pagamento.
        - Inclui a capacidade de cancelar faturas.
  * Correção e interação por AI:
        - Utilização de inteligência artificial para auxiliar no acompanhamento das atividades
        dos alunos, bem como geração de tarefas com um estudo de respostas considerando os erros
        em atividades anteriores, para gerar um relatório ao professor com estatísticas dos erros
        e acertos de cada aluno. Facilitando o entendimento do corpo docente sobre a progressão de
        cada aluno.


 
Ela fornece uma visão abrangente do Sistema Educacional de Gestão Acadêmica, delineando suas principais funcionalidades, dados manipulados e a infraestrutura tecnológica subjacente. Ao adotar a linguagem de programação PHP, o banco de dados MySQL e ferramentas adicionais como HTML, CSS e JavaScript, o sistema busca oferecer uma experiência interativa e eficiente para professores, alunos e fornecedores.

A arquitetura do sistema, baseada no modelo MVC, e as considerações de segurança destacam o compromisso com a organização, manutenção e proteção adequada dos dados sensíveis dos usuários. O desenvolvimento iterativo, testes regulares de segurança e a documentação contínua demonstram a busca por qualidade e durabilidade no ciclo de vida do projeto.

A escolha da Licença MIT reflete a abertura do projeto à colaboração e transparência, permitindo seu uso em contextos comerciais e não comerciais, com requisitos claros de atribuição.

As diretrizes para contribuições incentivam ativamente a participação da comunidade, estabelecendo práticas claras desde a hospedagem pública do código até a revisão de código e o agradecimento aos contribuidores. Essas práticas visam criar um ambiente colaborativo, inclusivo e inovador ao redor do projeto, promovendo a transparência e a evolução contínua.

Em síntese, esta documentação serve como um guia robusto para o desenvolvimento do Sistema Educacional de Gestão Acadêmica, alinhado com as melhores práticas de desenvolvimento, segurança e colaboração. A sua atualização contínua é fundamental para refletir as mudanças no projeto, garantindo que os usuários e colaboradores estejam sempre bem informados e alinhados com as decisões mais recentes.

Essas práticas ajudam a criar um ecossistema saudável ao redor do projeto, incentivando contribuições valiosas da comunidade e promovendo a transparência e a inovação contínua.

Esta documentação serve como um guia inicial para o desenvolvimento do Sistema Educacional de Gestão Acadêmica, proporcionando uma visão geral das funcionalidades, tecnologias utilizadas e considerações importantes para o sucesso do projeto. Certifique-se de atualizar esta documentação conforme o projeto evolui e novas decisões são tomadas.
