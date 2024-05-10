![Imagem do meu projeto](.github/tela-principal.png)

<div align="center">
    <img src="https://img.shields.io/github/last-commit/LuanMobile/chatbot-with-ai?display_timestamp=author&style=flat-square&logo=github&labelColor=%235961FF&color=%23333333" alt="Github">
    <img src="https://img.shields.io/github/languages/top/LuanMobile/chatbot-with-ai?style=flat-square&logo=php&labelColor=%23556066&color=%2379A55B">
</div>

Este ChatBot foi contruído com o intuíto de retornar os melhores hotéis de cada cidade do Brasil baseado nos seus feedbacks encontrado na internet.

### Configuração

Para rodar a aplicação localmente, primeiro crie o arquivo <code>.env</code>.

```shell
cp .env.example .env
 ```

Após isso, abra o <code>.env</code> e coloque sua API KEY do Google aqui:

```
GEMINI_API_KEY=
```

Por útlimo, para desfrutar do ChatBot, rode a aplicação

```shell
php artisan serve
 ```
