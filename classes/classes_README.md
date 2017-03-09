Aqui serão as classes do projeto. Está dividido no padrão **MVC** onde:
- As classes relacionadas as regras de negócio ficam agrupadas no 'Modelo'.
- As classes relacionadas a interface com o usuário ficam na 'view'.
- As classes para o controle ficam no 'controle'.
- As classes para a comuniucação com o banco ficam na 'DAO' 

**Boas Práticas**
- O controle faz a ligação entre o modelo e a view! Não realizar a ligação direta
entre o a view e o modelo sem passar pelo controle