# teste-backend
Repositório usado para o teste de back-end do Núcleo de Tecnologia Multimídia.

## O que?
End-point em um API que gere a taxa (média) de ex-alunos do SENAI que continuam estudando por estado e também a taxa nacional.

O resultado (body) do end-point deve ser um JSON exatamente igual a estrutura abaixo:
```json
{
  "regionals": [
    {"description": "AC", "average": 23.30},
    {"description": "AL", "average": 61.00},
    {"description": "AP", "average": 30.10},
    {"description": "AM", "average": 56.30},
    ...
  ],
  "national": 47.50
}
```
[[Link para o arquivo completo](data.json)]

## Como?
1. Capture o total de ex-alunos que estão estudando (number='a.').
2. Divida pelo o total de ex-alunos.
3. Multiple por 100.

## Dados de entrada
Arquivo SQL contendo tabelas e inserts para popular.

[[Link para o arquivo](desafio.sql)]

## Instruções?
1. Você está livre para escolher (ou não) qualquer framework back-end.
2. Apesar de fornecemos inserts e um modelo er para para um banco mysql, você está livre para usar outro banco, desde que você converta o dado fornecido para a sua necessidade.
3. Envie seu código back-end através de um forker desse repositório github ou enviar por tudo email. Lembrando que temos preferência pelo o uso do github e iremos levar isso consideração na hora de avaliar.
4. Você tem uma semana (7 dias) para a finalização do teste, a partir da data de envio do e-mail.
5. Se não conseguir finalizar os testes, não se preocupe, envie a sua solução no estágio de desenvolvimento que estiver.

## Dicionario de dados
students - É a tabela que armazenar os ex-alunos do SENAI

questions - É a tabela que armazenar as perguntas que foram feitas aos alunos.

alternatives - É a tabela que armazenar as alternativas para as perguntas que foram feitas aos alunos.

answers - É a tabela que armazenar as respostas de cada aluno para cada pergunta.
