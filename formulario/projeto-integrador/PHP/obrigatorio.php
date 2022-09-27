<?php

        //Função para conhecer o nome do botão
         function get_post_action($nome)
            {
                $params = func_get_args();

                foreach ($params as $nome) {
                    if (isset($_POST[$nome])) {
                        return $nome;
                    }
                }
            }

        //Verifica qual dos botões foi clicado, através do seu nome
        switch (get_post_action('button', 'submit', 'publish')) {
            case 'button':
                // Inclui classes
                include_once './PHP/consulta.php';
                include_once './PHP/Conexao.php';

                //Instanciando Objeto
                $cadastro = new cadastro();
                $conexao  = new Conexao();

                //Buscar valores do formulário
                $nome       = $_POST['nome'];
                $email      = $_POST['email'];
                $senha      = $_POST['mensagem'];

                //Setando Objeto (Atribuindo valores ao objeto cadastro)
                $cadastro -> setNome($nome);
                $cadastro -> setEmail($email);
                $cadastro -> setSenha($mensagem);






                // Salvar dados
                $conexao ->saveCadastro($cadastro);

                echo "<script>alert('Cadastro realizado com sucesso! Agora é possível fazer login');</script>";



                break;

            case 'submit':
                
                break;

            case 'publish':
                
                break;

            default:
            
            }

        ?>