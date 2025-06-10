        <article>
           
            <div class="container-menu">
                <div class="menu" id="Cadastro">
                    <a href="#"><img src="img/cadastro.png" alt=""><h3>Cadastrar</h3></a>
                    <div class="dropdown" id="Container-cadastro">
                        <a href="CadastroFuncionarios.html">Cadastrar Funcionários</a>
                        <a href="CadastroVacinas.php">Cadastrar Vacinas</a>
                        
                    </div>
                </div>

                <div class="menu">
                    <a href="consultar.php" id="Consulta"><img src="img/vacina.png" alt=""><h3>Consultar Vacinas</h3></a>
                </div>

                <div class="menu">
                    <a href="MarcarVacinas.html" id="Lancamento"><img src="img/hospital.png" alt=""><h3>Marcar Vacinas</h3></a>
                </div>

                <div class="menu">
                    <a href="#"><img src="img/suporte.png" alt=""><h3>Suporte</h3></a>
                </div>
            </div>  
        </article>

<style>

.dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    border: 1px solid #ccc;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    width: 220px;
    flex-direction: column;
    z-index: 100;
}

.dropdown a {
    padding: 10px;
    display: block;
    color: black;
    text-decoration: none; /* para remover sublinhado */
    font-size: 14px;
}

.menu {
    position: relative;
}

.dropdown a:hover {
    background-color: #f0f0f0;
}

.container-menu {
    display: flex;
    gap: 20px;
}

article{
    background-color:  #D3D3D3;
    height: 85vh;
    width: 220px;
    display: flex;
    justify-content: center;
    align-items: center;
 }

 .container-menu{
    height: 100%;
    display: grid;
    justify-content: space-between;
    align-items: center;
    
 }


 .menu img{
    margin-top: 20px;
    width: 25%;  
    margin-left: auto;
    margin-right: auto;  
 }

 .menu a{
    display: grid;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    color: #1F1C1C;
 }

 .menu h3{
    display: flex;
    justify-content: center;
 }
</style>