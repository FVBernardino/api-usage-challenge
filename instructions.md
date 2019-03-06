# Instruções

Para que seja possível acessar o conteúdo siga os passos abaixo:

1. Rodar o comando **composer install**
1. Rodar o comando **docker-compose up -d**

## Como acessar o serviço?
É possível acessar 3 endpoints com o seguintes serviços: 
- Uma lista de imagens - **http://localhost:8000/api/photos**;
- Uma imagem com base no **id** no formato original - **http://localhost:8000/api/photo/id_photo**;
- Uma imagem com base no **id** em 3 tamanhos: 640x480 - 384x288 - 320x240, além do tamanho original - **http://localhost:8000/api/resize-photo/id_photo**.
