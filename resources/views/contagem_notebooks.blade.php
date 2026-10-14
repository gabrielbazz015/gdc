<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Contagem dos Notebooks - GDC</title>


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

        /* =========================
           GERAL
        ========================= */

        html {
            scroll-behavior: smooth;
        }

        body {

            min-height: 100vh;

            margin: 0;

            color: #212529;

            /*
            FUNDO DA SALA SESI
            */

            background-image:
                linear-gradient(
                    rgba(10, 20, 45, 0.48),
                    rgba(10, 20, 45, 0.48)
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

            background: transparent !important;

            border-bottom: none;

            box-shadow: none;

            padding-top: 15px;

            padding-bottom: 15px;

        }


        .logo-gdc {

            height: 55px;

            width: auto;

            object-fit: contain;

            display: block;

        }


        .nav-link-gdc {

            color: white;

            font-size: 14px;

            font-weight: 600;

            text-decoration: none;

            transition: 0.2s ease;

            text-shadow:
                0 2px 6px rgba(0, 0, 0, 0.65);

        }


        .nav-link-gdc:hover {

            color: #ddd8ff;

        }


        /* =========================
           CABEÇALHO
        ========================= */

        .page-header {

            margin-top: 45px;

            margin-bottom: 35px;

        }


        .title-icon {

            width: 58px;

            height: 58px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            background: rgba(255, 255, 255, 0.92);

            color: #6355e8;

            border-radius: 16px;

            font-size: 27px;

            margin-bottom: 15px;

            box-shadow:
                0 7px 18px rgba(0, 0, 0, 0.20);

        }


        .page-title {

            font-size: 32px;

            font-weight: 800;

            color: white;

            margin-bottom: 8px;

            text-shadow:
                0 3px 10px rgba(0, 0, 0, 0.65);

        }


        .page-subtitle {

            color: white;

            margin-bottom: 0;

            font-size: 15px;

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.65);

        }


        /* =========================
           CARDS GDC
        ========================= */

        .gdc-card {

            background: rgba(255, 255, 255, 0.95);

            backdrop-filter: blur(8px);

            border: 1px solid rgba(255, 255, 255, 0.65);

            border-radius: 18px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.20);

        }


        /* =========================
           CARDS DE RESUMO
        ========================= */

        .summary-card {

            position: relative;

            overflow: hidden;

            transition: 0.2s ease;

        }


        .summary-card:hover {

            transform: translateY(-3px);

            box-shadow:
                0 15px 30px rgba(0, 0, 0, 0.25);

        }


        .summary-icon {

            width: 48px;

            height: 48px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 13px;

            background: rgba(99, 85, 232, 0.10);

            color: #6355e8;

            font-size: 22px;

            margin-bottom: 15px;

        }


        .summary-number {

            font-size: 34px;

            font-weight: 800;

            color: #6355e8;

            line-height: 1;

        }


        .summary-label {

            color: #777;

            font-size: 13px;

            font-weight: 600;

        }


        /* =========================
           CARRINHOS
        ========================= */

        .cart-card {

            border: 1px solid #e9e9ef;

            border-radius: 15px;

            background: rgba(255, 255, 255, 0.96);

            transition: 0.2s ease;

        }


        .cart-card:hover {

            border-color: #d9d5ff;

            transform: translateY(-2px);

            box-shadow:
                0 8px 20px rgba(0, 0, 0, 0.08);

        }


        .cart-icon {

            width: 45px;

            height: 45px;

            border-radius: 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(99, 85, 232, 0.10);

            color: #6355e8;

            font-size: 20px;

        }


        .cart-name {

            font-weight: 750;

            color: #222;

        }


        .cart-info {

            font-size: 12px;

            color: #888;

        }


        /* =========================
           CABEÇALHO DOS CARDS
        ========================= */

        .card-header-gdc {

            padding: 24px 28px;

            border-bottom: 1px solid #eeeeF2;

        }


        .card-title-gdc {

            font-size: 20px;

            font-weight: 750;

            color: #222;

            margin-bottom: 5px;

        }


        .card-subtitle-gdc {

            font-size: 13px;

            color: #888;

            margin-bottom: 0;

        }


        /* =========================
           TABELA
        ========================= */

        .table-container {

            overflow: hidden;

            border: 1px solid #eeeeF2;

            border-radius: 14px;

        }


        .table {

            margin-bottom: 0;

        }


        .table thead th {

            background: #f8f8fb;

            color: #555;

            font-size: 12px;

            font-weight: 750;

            text-transform: uppercase;

            letter-spacing: 0.4px;

            border-bottom: 1px solid #e8e8ee;

            padding: 15px;

            white-space: nowrap;

        }


        .table tbody td {

            padding: 16px 15px;

            font-size: 14px;

            color: #444;

            border-color: #eeeeF2;

        }


        .table-hover tbody tr:hover {

            background-color: #fafaff;

        }


        /* =========================
           BADGES
        ========================= */

        .status-badge {

            padding: 7px 11px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: 700;

        }


        /* =========================
           BOTÃO
        ========================= */

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
                0 7px 18px rgba(99, 85, 232, 0.25);

            transition: all 0.2s ease;

        }


        .btn-gdc:hover {

            background: linear-gradient(
                135deg,
                #5749d7,
                #695dde
            );

            color: white;

            transform: translateY(-1px);

            box-shadow:
                0 10px 23px rgba(99, 85, 232, 0.35);

        }


        /* =========================
           RESPONSIVO
        ========================= */

        @media (max-width: 768px) {

            .logo-gdc {

                height: 48px;

            }


            .navbar-links {

                gap: 15px !important;

            }


            .nav-link-gdc {

                font-size: 13px;

            }


            .page-title {

                font-size: 26px;

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

            <div
                class="d-flex align-items-center justify-content-between w-100"
            >


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

                <div
                    class="d-flex align-items-center gap-4 navbar-links"
                >

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


                    <a
                        href="{{ route('reclame.aqui') }}"
                        class="nav-link-gdc"
                    >

                        <i class="bi bi-chat-left-text me-1"></i>

                        Reclame Aqui

                    </a>

                </div>

            </div>

        </div>

    </nav>



    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main class="container pb-5">


        <!-- =========================
             CABEÇALHO
        ========================= -->

        <div class="page-header text-center">

            <div class="title-icon">

                <i class="bi bi-laptop"></i>

            </div>


            <h1 class="page-title">

                Contagem dos Notebooks

            </h1>


            <p class="page-subtitle">

                Consulte a quantidade e o status dos notebooks
                cadastrados no sistema.

            </p>

        </div>



        <!-- =========================
             CARRINHOS
        ========================= -->

        <div class="gdc-card mb-5">


            <div class="card-header-gdc">

                <h2 class="card-title-gdc">

                    <i class="bi bi-cart3 me-2 text-primary"></i>

                    Notebooks cadastrados

                </h2>


                <p class="card-subtitle-gdc">

                    Quantidade de notebooks registrada em cada carrinho.

                </p>

            </div>



            <div class="p-4">

                <div class="row g-3">


                    @foreach($carrinhos as $carrinho)


                        <div class="col-md-4">

                            <div class="cart-card p-4 h-100">


                                <!-- ÍCONE -->

                                <div class="cart-icon mb-3">

                                    <i class="bi bi-cart3"></i>

                                </div>


                                <!-- IDENTIFICAÇÃO -->

                                <div class="cart-name mb-1">

                                    {{ $carrinho->identificacao }}

                                </div>


                                <!-- LOCALIZAÇÃO -->

                                <div class="cart-info mb-3">

                                    <i class="bi bi-geo-alt me-1"></i>

                                    {{ $carrinho->localizacao }}

                                </div>


                                <!-- QUANTIDADE -->

                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >

                                    <span class="cart-info">

                                        Notebooks cadastrados

                                    </span>


                                    <strong class="text-primary fs-5">

                                        {{ $carrinho->quantidade_notebooks }}

                                    </strong>

                                </div>


                                <!-- STATUS -->

                                <div class="mt-3">

                                    @if($carrinho->quantidade_notebooks > 0)

                                        <span class="badge bg-success">

                                            <i
                                                class="bi bi-check-circle me-1"
                                            ></i>

                                            Disponível

                                        </span>

                                    @else

                                        <span class="badge bg-danger">

                                            <i
                                                class="bi bi-x-circle me-1"
                                            ></i>

                                            Sem notebooks

                                        </span>

                                    @endif

                                </div>


                                <!-- BARRA -->

                                <div
                                    class="progress mt-3"
                                    style="height: 7px;"
                                >

                                    <div
                                        class="progress-bar"
                                        role="progressbar"
                                        style="
                                            width: 100%;
                                            background: #6355e8;
                                        "
                                    ></div>

                                </div>


                            </div>

                        </div>


                    @endforeach


                </div>

            </div>

        </div>



        <!-- =========================
             LISTA DE NOTEBOOKS
        ========================= -->

        <div class="gdc-card">


            <div class="card-header-gdc">


                <div
                    class="d-flex justify-content-between align-items-center flex-wrap gap-2"
                >


                    <div>

                        <h2 class="card-title-gdc">

                            <i
                                class="bi bi-list-ul me-2 text-primary"
                            ></i>

                            Notebooks cadastrados

                        </h2>


                        <p class="card-subtitle-gdc">

                            Informações atualizadas diretamente
                            do banco de dados.

                        </p>

                    </div>


                    <!-- CONTADOR -->

                    <span
                        class="badge bg-light text-dark border px-3 py-2"
                    >

                        <i class="bi bi-database me-1"></i>

                        {{ $total }} registro(s)

                    </span>


                </div>

            </div>



            <div class="p-4">


                <div class="table-responsive table-container">


                    <table class="table table-hover align-middle">


                        <thead>

                            <tr>

                                <th>
                                    #
                                </th>

                                <th>
                                    Patrimônio
                                </th>

                                <th>
                                    Modelo
                                </th>

                                <th>
                                    Carrinho
                                </th>

                                <th>
                                    Status
                                </th>

                            </tr>

                        </thead>


                        <tbody>


                            @forelse($notebooks as $notebook)


                                <tr>


                                    <!-- ID -->

                                    <td class="fw-semibold">

                                        {{ $notebook->id }}

                                    </td>


                                    <!-- PATRIMÔNIO -->

                                    <td>

                                        <span class="fw-semibold">

                                            {{ $notebook->patrimonio }}

                                        </span>

                                    </td>


                                    <!-- MODELO -->

                                    <td>

                                        {{ $notebook->modelo }}

                                    </td>


                                    <!-- CARRINHO -->

                                    <td>

                                        <span
                                            class="badge bg-light text-dark border"
                                        >

                                            <i
                                                class="bi bi-cart3 me-1"
                                            ></i>

                                            Carrinho
                                            {{ $notebook->id_carrinho }}

                                        </span>

                                    </td>


                                    <!-- STATUS -->

                                    <td>


                                        @if($notebook->status == 'disponivel')


                                            <span
                                                class="badge bg-success status-badge"
                                            >

                                                <i
                                                    class="bi bi-check-circle me-1"
                                                ></i>

                                                Disponível

                                            </span>


                                        @elseif($notebook->status == 'em_uso')


                                            <span
                                                class="badge bg-danger status-badge"
                                            >

                                                <i
                                                    class="bi bi-arrow-left-right me-1"
                                                ></i>

                                                Em uso

                                            </span>


                                        @else


                                            <span
                                                class="badge bg-secondary status-badge"
                                            >

                                                {{ ucfirst($notebook->status) }}

                                            </span>


                                        @endif


                                    </td>


                                </tr>


                            @empty


                                <tr>

                                    <td
                                        colspan="5"
                                        class="text-center py-5"
                                    >

                                        <i
                                            class="bi bi-laptop"
                                            style="
                                                font-size: 40px;
                                                color: #aaa;
                                            "
                                        ></i>


                                        <h6 class="fw-bold mt-3">

                                            Nenhum notebook cadastrado

                                        </h6>


                                        <p class="text-secondary mb-0">

                                            Não existem notebooks
                                            registrados no sistema.

                                        </p>

                                    </td>

                                </tr>


                            @endforelse


                        </tbody>


                    </table>


                </div>

            </div>

        </div>



        <!-- =========================
             BOTÃO
        ========================= -->

        <div class="text-center mt-4 mb-5">

            <a
                href="{{ route('emprestimo') }}"
                class="btn btn-gdc px-5"
            >

                <i class="bi bi-calendar-plus me-2"></i>

                Solicitar Empréstimo

            </a>

        </div>


    </main>



    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>


</body>

</html>
