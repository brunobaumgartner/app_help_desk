Sistema de cadastro de chamados de manutenção.

O sistema não faz uso de nenhum tipo de banco de dados. 
Como alternativa eu fiz com que os dados dos chamados sejam salvos no arquivo "arquivo.dd" que esta localizado no caminho "Server/model/arquivo.dd".

Como medida de segurança é recomendando de na hora da implementação se coloque a pasta Server fora dos arquivos publicos (Pasta htdocs) e redirecionar os requere dos arquivos da pasta controller para o local correto.

E por fim tem que alterar o diretório da função fopen para o local do arquivo.dd