<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Reclamação Enviada - GDC</title>


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

        body {
            min-height: 100vh;

            background: #f5f6fa;

            color: #212529;
        }


        /* NAVBAR */

        .navbar-gdc {
            background: #ffffff;

            border-bottom: 1px solid #e9e9ef;

            box-shadow:
                0 2px 12px rgba(0, 0, 0, 0.05);
        }


        .logo-gdc {
            height: 55px;

            width: auto;

            object-fit: contain;

            display: block;
        }


        .nav-link-gdc {
            color: #555;

            font-size: 14px;

            font-weight: 600;

            text-decoration: none;

            transition: 0.2s;
        }


        .nav-link-gdc:hover {
            color: #6355e8;
        }


        /* CONTEÚDO */

        .confirmation-container {
            min-height: calc(100vh - 85px);

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .confirmation-card {
            max-width: 560px;

            width: 100%;

            background: #ffffff;

            border: 1px solid #e9e9ef;

            border-radius: 22px;

            box-shadow:
                0 12px 35px rgba(0, 0, 0, 0.07);
        }


        .success-icon {
            width: 80px;

            height: 80px;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 25px;

            border-radius: 50%;

            background: rgba(25, 135, 84, 0.12);

            color: #198754;

            font-size: 38px;
        }


        .confirmation-title {
            font-size: 30px;

            font-weight: 800;

            color: #222;
        }


        .confirmation-text {
            color: #777;

            font-size: 15px;

            line-height: 1.6;
        }


        .status-box {
            background: #f8f7ff;

            border: 1px solid #e5e2ff;

            border-radius: 12px;

            padding: 15px;

            font-size: 13px;

            color: #666;
        }


        .btn-gdc {
            background: linear-gradient(
                135deg,
                #6355e8,
                #776bea
            );

            border: none;

            color: white;

            min-height: 50px;

            border-radius: 11px;

            font-weight: 700;

            box-shadow:
                0 7px 18px rgba(99, 85, 232, 0.20);

            transition: 0.2s ease;
        }


        .btn-gdc:hover {
            background: linear-gradient(
                135deg,
                #5749d7,
                #695dde
            );

            color: white;

            transform: translateY(-1px);
        }


        @media (max-width: 768px) {

            .logo-gdc {
                height: 48px;
            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-gdc py-3">

    <div class="container">

        <div class="d-flex align-items-center justify-content-between w-100">


            <!-- LOGO -->

            <a
                href="{{ route('home') }}"
                class="text-decoration-none"
            >

                <img
                    src="{{ asset('images/gdc.png') }}"
                    alt="Logo GDC"
                    class="logo-gdc"
                >

            </a>


            <!-- LINKS -->

            <div class="d-flex align-items-center gap-4">


                <a
                    href="{{ route('home') }}"
                    class="nav-link-gdc"
                >

                    <i class="bi bi-house me-1"></i>

                    Home

                </a>


                <a
                    href="{{ route('emprestimo') }}"
                    class="nav-link-gdc"
                >

                    <i class="bi bi-calendar-check me-1"></i>

                    Empréstimo

                </a>


            </div>

        </div>

    </div>

</nav>



<!-- =========================
     CONFIRMAÇÃO
========================= -->

<main class="confirmation-container container py-5">


    <div class="confirmation-card">


        <div class="p-4 p-md-5 text-center">


            <!-- ÍCONE -->

            <div class="success-icon">

                <i class="bi bi-check-lg"></i>

            </div>


            <!-- TÍTULO -->

            <h1 class="confirmation-title mb-3">

                Reclamação enviada!

            </h1>


            <!-- TEXTO -->

            <p class="confirmation-text mb-4">

                Sua reclamação foi registrada com sucesso.
                Nossa equipe poderá analisar o problema informado
                e tomar as providências necessárias.

            </p>


            <!-- STATUS -->

            <div class="status-box mb-4">

                <i class="bi bi-info-circle me-2 text-primary"></i>

                Reclamação registrada no sistema.

            </div>


            <!-- BOTÃO -->

            <a
                href="{{ route('home') }}"
                class="btn btn-gdc w-100"
            >

                <i class="bi bi-house me-2"></i>

                Voltar para o início

            </a>


        </div>

    </div>


</main>


</body>

</html>
