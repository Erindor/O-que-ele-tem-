#Como usar o git

##O que é o GitHub
Github é utilizado para hospedar seus projetos pessoais e compartilhar com outras pessoas que desejam contribuir com ele. Além disso você poderá contribuir com outros projetos no GitHub.


##Começando no GIT
**1 -** Crie uma conta no http://github.com
**2 -** Entre no respositório oficial do nosso projeto: https://github.com/Erindor/O-que-ele-tem- e clique em FORK, isso irá copiar todos os arquivos para o seu próprio repositório.

![Fork](/tutorial/1.png)

**3 -** Faça o download e instale https://desktop.github.com/

**4 -** Entre com sua conta do github no programa.

**5 -** Clique no símbolo de mais que se encontra no canto superior esquerdo, vá em 'Clone', escolha o repositório que deseja clonar e confirme. Escolha uma pasta que deseja fazer o download dos arquivos.

![Clonar](/tutorial/2.png)

**6 -** Espere finalizar o download.....

![Finalizando](/tutorial/3.png)

##Branch
**7 -** Crie um novo 'Branch' para desenvolvimento. O que é um Branch? Branch é como se fosse uma cópia dos arquivos originais onde você poderá alterar todo o código sem alterar no original. Por exemplo, temos um projeto que já está tudo funcionando, mas você deseja adicionar uma nova funcionalidade mas não quer alterar o projeto original, então você cria um novo Branch, faz todos os testes nele, e quando terminar unirá o código deste Brach com o original. 

Uma boa prática é que o branch **master** fique apenas com o código original. Então... vamos utilizar o branch chamado "Desenvolvimento" e faremos todas as alterações nele.

Para criar um Branch, basta clicar no simbolo acima, dar um nome e escolher de onde fárá as cópias dos arquivos. Como no repositório original já existe um branch chamado desenvolvimento, basta trocar do branch master(padrão) para o desenvolvimento.

CLIQUE NA SETA E ESCOLHA 'DESENVOLVIMENTO'

![Trocar Branch](/tutorial/5.png)

**8 -** Agora vamos alterar algum arquivo do código (FINALMENTE!!!). Vá nas pasta onde você fez o download do repositório. Dentro da pasta 'doc' crie um novo arquivo TXT com seu nome e email.

![Criando novo arquivo](/tutorial/6.png)

Quando você fizer qualquer alteração, no programa do GITHUB, no menu CHANGES na parte superior ficará com um novo símbolo, significando que voce alterou algum arquivo do repositório.

![Alteração](/tutorial/7.png)

Quando clicar neste momento verá todos os arquivos alterados (arquivos deletados, modificadosm ou alterados).

![Arquivos alterados](/tutorial/8.png)

Se clicar no arquivo verá as linhas do arquivo alterdas...

![Arquivos alterados](/tutorial/9.png)

Você apenas alterou os arquivos localmente, precisa enviar para o repositório online do GitHub, para isso você precisa fazer um COMMIT

##Dando commit
**9 -** Commit é quando você irá salvar as alterações dos arquivos. Você pode dar commit em vários arquivos de uma só vez. **Uma boa prática é colocar uma mensagem curta do que foi aquela alteração, e se for mais de um arquivo que eles tenham relação entre si, pois quando outra pessoa visualizar ela já saberá o que foi aquela alteração. Você também poderá voltar na situação do código antes do commit a qualquer momento, caso descubra algum bug etc.**

Para isso clique no checkbox nos arquivos que deseja dar commit. Abaixo coloque uma msg o que se referem aqueles arquivos, em seguida clique em 'Commit'. **Observe em qual branch fará as alterações - faremos no desenvolvimento"

![Commit](/tutorial/10.png)

**10 -** Agora devemos enviar online. Basta clicar em 'SYNC', isso irá o download dos arquivos online e enviará seus arquivos locais para o respositório online.

##Push (enviando suas alterações)
![Sincronizar](/tutorial/11.png)

**11 -** Se for no seu repositório online verá que seu arquivo já está lá.

![](/tutorial/12.png)

##Pull Request (solicitando alterações no repositório oficial)
Seu arquivo está no seu repositório pessoal, mas não está no repositório oficial ainda (aquele que você fez FORK no começo). Para estar no ofial você deve fazer um "Pull Request", seria solicitar para o repositório oficial aceitar suas alterações. Basta clicar em "Pull Request" no canto superior direito.

Adicione uma mensagem para o repositório oficial saber quais são as alterações.

**Observe a faixa AMARELA!!! Você poderá unir o seu Branch 'desenvolvimento' com o seu branch 'master', mas queremos unir o suas alterações com o respositório OFICIAL, então escolha 'Erindor/desenvolvimento'.**

**Veja que, em azul, a setinha irá subir, ou seja, está unindo com o oficial**

Clique em SEND PULL REQUEST

**12 -** Clique em 'View it on GitHub'

Observe que no repositório oficial você está solicitando para que no branch desenvolvimento aceite suas alterações. Poderá ser aceitado, ou recusado.

![Confirmando pull request](/tutorial/13.png)

##Atualiando seu repositório local
**13 -** OK.... você enviou suas alterações, outras pessoas farão atualização no repositório original e você deverá manter o seus arquivos locais sempre atualizados. **Lembre-se primeiro envie commite suas alterações para depois atualizar com o original, se não dará conflito e você poderá perder o que iria commitar.

Escolha o BRANCH que deseja atualizar (cor verde), neste caso irei atualizar do branch desenvolvimento oficial. Basta clicar em "Update from ...." (cor vermelha), ele automaticamente atualizará o repositório local com as alterações. Depois clique em SYN (azul) para atualizar o seu repositório online.

![Atualizando](/tutorial/14.png)

PRONTINHO.

Isso é o que precisam saber para utilizar o GIT, existem inúmeros tutoriais na internet. O git tbm pode ser usado em linhas de comando.

