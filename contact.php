<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario\CSS/formulario.css">
    <title>Contatos</title>
</head>
<body>

   <div class="campo">
    <h1 id="titulos">Cadastro de Desenvolvimento de Projetos de Hardware e Software</h1>
    <p id="subtitulos"><strong>Complete suas Informações</strong></p>
    <br>
   </div>
    
   <form>
    <fieldset class="grupo">
        <div class="campo">
            <label for="nome"><strong>Nome</strong></label>
            <input type="text" name="Nome" id="Nome" required>
        </div>

        <div class="campo">
            <label for="sobrenome"><strong>SobreNome</strong></label>
            <input type="text" name="SobreNome" id="SobreNome" required>
        </div><br>
    </fieldset>
    
    <div class="campo">
        <label for="email"><strong>Email</strong></label>
        <input type="email" name="email" id="email" required>
    </div><br>

    <div class="campo">
        <label><strong>Qual Expercialização Desenvolve?</strong></label>
        <label>
            <input type="radio" name="devweb" value="frontend" checked>Front-end
        </label>
        <label>
            <input type="radio" name="devweb" value="backend">Back-end
        </label>
        <label>
            <input type="radio" name="devweb" value="fullstack">Fullstack
        </label>
    </div><br>
    <div class="campo">
        <label for="senioridade"><strong>Senioridade</strong></label>
        <select id="senioridade">
            <option selected disabled value="">Selecione</option>
            <option>Junior</option>
            <option>Pleneo</option>
            <option>Senio</option>
        </select>    
    </div>

    <fieldset class="grupo">
        <div id="check">
            <label><strong>Selecione as Tecnologia Utilizada:</strong></label><br><br>
            <input type="checkbox" id="tecnologia1" name="tecnologia1" value="HTML"> 
            <label for="tecnologia1">HTML</label>
            <input type="checkbox" id="tecnologia2" name="tecnologia2" value="CSS">
            <label for="tecnologia2">CSS</label>
            <input type="checkbox" id="tecnologia3" name="tecnologia3" value="JavaScript">
            <label for="tecnologia3">JavaScript</label>
            <input type="checkbox" id="tecnologia4" name="tecnologia4" value="PHP">
            <label for="tecnologia4">PHP</label>
            <input type="checkbox" id="tecnologia5" name="tecnologia5" value="C#"> 
            <label for="tecnologia5">C#</label>
            <input type="checkbox" id="tecnologia6" name="tecnologia6" value="Python"> 
            <label for="tecnologia6">Python</label>
            <input type="checkbox" id="tecnologia7" name="tecnologia7" value="Java"> 
            <label for="tecnologia7">Java</label>
            <input type="checkbox" id="tecnologia8" name="tecnologia8" value="Banco de Dados MYSQL"> 
            <label for="tecnologia8">Banco de Dados MYSQL</label>
            <input type="checkbox" id="tecnologia9" name="tecnologia9" value="Tecnico Hardware"> 
            <label for="tecnologia9">Tecnico Hardware</label>
        </div>
    </fieldset>

    <div class="campo">
        <br>
        <label><strong>Fale um pouco da sua Experiência:</strong></label>
        <textarea row="6" style="width: 26em;" id="experiência" name="experiencia"></textarea>
    </div>

    <button type="submit">Concluído</button>

   </form>

</body>
</html>