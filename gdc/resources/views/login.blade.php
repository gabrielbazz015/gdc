<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - GDC</title>


    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <style>

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }


        /* =========================
           FUNDO
        ========================= */

        .login-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;

            background-image:
                linear-gradient(
                    rgba(10, 20, 45, 0.52),
                    rgba(10, 20, 45, 0.52)
                ),
                url("{{ asset('images/fundo-sesi.png') }}");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-gdc {
            padding: 20px 40px;
            position: relative;
            z-index: 10;
            background: transparent;
        }

        .nav-link-gdc {
            color: rgba(255, 255, 255, 0.95);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .5px;
            transition: .2s;

            text-shadow:
                0 2px 6px rgba(0, 0, 0, 0.65);
        }

        .nav-link-gdc:hover {
            color: white;
            opacity: .75;
        }


        /* =========================
           LOGO
        ========================= */

        .logo-gdc {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-gdc img {
            height: 60px;
            width: auto;
            object-fit: contain;
            display: block;

            filter:
                drop-shadow(
                    0 5px 15px rgba(0, 0, 0, .35)
                );
        }


        /* =========================
           ÁREA CENTRAL
        ========================= */

        .login-area {
            flex: 1;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 40px 20px 70px;
        }


        /* =========================
           CARD
        ========================= */

        .login-card {
            width: 100%;
            max-width: 430px;

            background: rgba(255, 255, 255, .97);

            border: none;
            border-radius: 24px;

            box-shadow:
                0 25px 70px rgba(0, 0, 0, .30);

            overflow: hidden;
        }

        .card-top {
            height: 7px;

            background:
                linear-gradient(
                    90deg,
                    #6355e8,
                    #8d82ff
                );
        }

        .card-content {
            padding: 38px;
        }


        /* =========================
           TÍTULO
        ========================= */

        .titulo {
            font-size: 27px;
            font-weight: 800;
            color: #20202a;
            margin-bottom: 6px;
        }

        .subtitulo {
            color: #777;
            font-size: 14px;
            margin-bottom: 30px;
        }


        /* =========================
           CAMPOS
        ========================= */

        .campo-label {
            font-size: 13px;
            font-weight: 700;
            color: #383842;
            margin-bottom: 8px;
        }

        .input-group-gdc {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;

            transform: translateY(-50%);

            color: #777;

            z-index: 5;

            font-size: 17px;
        }

        .form-control-gdc {
            width: 100%;
            height: 52px;

            border: 1px solid #dedee6;
            border-radius: 12px;

            padding-left: 45px;

            font-size: 14px;

            transition: .2s;

            background: #fafafd;
        }

        .form-control-gdc:focus {
            border-color: #6355e8;

            box-shadow:
                0 0 0 4px rgba(99, 85, 232, .12);

            background: white;

            outline: none;
        }


        /* =========================
           OPÇÕES
        ========================= */

        .login-options {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-bottom: 25px;
        }

        .form-check-label {
            font-size: 12px;
            color: #777;
        }

        .form-check-input:checked {
            background-color: #6355e8;
            border-color: #6355e8;
        }

        .forgot-link {
            color: #6355e8;
            text-decoration: none;

            font-size: 12px;
            font-weight: 600;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }


        /* =========================
           BOTÃO
        ========================= */

        .btn-gdc {
            width: 100%;
            height: 52px;

            border: none;
            border-radius: 12px;

            background:
                linear-gradient(
                    135deg,
                    #6355e8,
                    #776bea
                );

            color: white;

            font-size: 15px;
            font-weight: 700;

            transition: .2s;

            box-shadow:
                0 8px 20px rgba(99, 85, 232, .25);
        }

        .btn-gdc:hover {
            transform: translateY(-2px);

            box-shadow:
                0 12px 25px rgba(99, 85, 232, .35);

            color: white;
        }


        /* =========================
           DIVISOR
        ========================= */

        .divider {
            display: flex;
            align-items: center;

            gap: 12px;

            margin: 25px 0;

            color: #aaa;

            font-size: 11px;
        }

        .divider::before,
        .divider::after {
            content: "";

            flex: 1;

            height: 1px;

            background: #e5e5e9;
        }


        /* =========================
           CADASTRO
        ========================= */

        .register-text {
            text-align: center;

            color: #777;

            font-size: 13px;

            margin-bottom: 0;
        }

        .register-link {
            color: #6355e8;

            font-weight: 700;

            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }


        /* =========================
           FOOTER
        ========================= */

        .card-footer-gdc {
            background: #f7f7fa;

            border-top: 1px solid #eeeeF2;

            padding: 14px;

            text-align: center;

            font-size: 11px;

            color: #999;
        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 600px) {

            .navbar-gdc {
                padding: 18px 20px;
            }

            .logo-gdc img {
                height: 45px;
            }

            .login-area {
                padding: 25px 15px 50px;
            }

            .card-content {
                padding: 28px 23px;
            }

            .titulo {
                font-size: 24px;
            }

        }

    </style>

</head>


<body>

<div class="login-container">


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar-gdc">

        <div class="d-flex justify-content-between align-items-center">


            <!-- VOLTAR -->

            <a
                href="{{ route('home') }}"
                class="nav-link-gdc"
            >

                <i class="bi bi-arrow-left me-1"></i>

                VOLTAR

            </a>


            <!-- LOGO GDC -->

            <a
                href="{{ route('home') }}"
                class="logo-gdc"
            >

                <img
                    src="{{ asset('images/gdc.png') }}"
                    alt="Logo GDC"
                >

            </a>


            <!-- RECLAME AQUI -->

            <a
                href="{{ route('reclame.aqui') }}"
                class="nav-link-gdc"
            >

                RECLAME AQUI

            </a>


        </div>

    </nav>



    <!-- =========================
         LOGIN
    ========================= -->

    <main class="login-area">


        <div class="login-card">


            <div class="card-top"></div>


            <div class="card-content">


                <div class="text-center">

                    <h1 class="titulo">
                        Bem-vindo de volta
                    </h1>

                    <p class="subtitulo">
                        Entre na sua conta para acessar o GDC.
                    </p>

                </div>


                <!-- =========================
                     ERROS
                ========================= -->

                @if ($errors->any())

                    <div class="alert alert-danger small">

                        <strong>
                            Não foi possível entrar:
                        </strong>

                        <div class="mt-1">
                            {{ $errors->first() }}
                        </div>

                    </div>

                @endif


                <!-- =========================
                     MENSAGEM DE CADASTRO
                ========================= -->

                @if (session('sucesso'))

                    <div class="alert alert-success small">

                        <i class="bi bi-check-circle me-1"></i>

                        {{ session('sucesso') }}

                    </div>

                @endif


                <!-- =========================
                     FORMULÁRIO
                ========================= -->

                <form
                    action="{{ route('login.autenticar') }}"
                    method="POST"
                >

                    @csrf


                    <!-- EMAIL -->

                    <div class="mb-4">

                        <label
                            for="email"
                            class="campo-label"
                        >

                            E-mail

                        </label>


                        <div class="input-group-gdc">

                            <i class="bi bi-envelope input-icon"></i>


                            <input
                                type="email"
                                class="form-control-gdc"
                                id="email"
                                name="email"
                                placeholder="Digite seu e-mail"
                                value="{{ old('email') }}"
                                required
                            >

                        </div>

                    </div>



                    <!-- SENHA -->

                    <div class="mb-3">

                        <label
                            for="senha"
                            class="campo-label"
                        >

                            Senha

                        </label>


                        <div class="input-group-gdc">

                            <i class="bi bi-lock input-icon"></i>


                            <input
                                type="password"
                                class="form-control-gdc"
                                id="senha"
                                name="senha"
                                placeholder="Digite sua senha"
                                required
                            >

                        </div>

                    </div>



                    <!-- OPÇÕES -->

                    <div class="login-options">


                        <div class="form-check">

                            <input
                                class="form-check-input"
                                type="checkbox"
                                id="manterLogado"
                            >


                            <label
                                class="form-check-label"
                                for="manterLogado"
                            >

                                Manter conectado

                            </label>

                        </div>


                        <a
                            href="#"
                            class="forgot-link"
                        >

                            Esqueceu a senha?

                        </a>


                    </div>



                    <!-- BOTÃO -->

                    <button
                        type="submit"
                        class="btn-gdc"
                    >

                        <i class="bi bi-box-arrow-in-right me-2"></i>

                        Entrar no GDC

                    </button>


                </form>



                <!-- =========================
                     DIVISOR
                ========================= -->

                <div class="divider">

                    OU

                </div>



                <!-- =========================
                     CADASTRO
                ========================= -->

                <p class="register-text">

                    Ainda não possui uma conta?


                    <a
                        href="{{ route('cadastro') }}"
                        class="register-link"
                    >

                        Criar conta

                    </a>

                </p>


            </div>



            <!-- FOOTER -->

            <div class="card-footer-gdc">

                GDC • Gerenciamento de Carrinho

            </div>


        </div>


    </main>


</div>


</body>

</html>
