<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notificações - GDC</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>
        body {
            min-height: 100vh;
            background:
                linear-gradient(
                    rgba(20, 20, 45, 0.78),
                    rgba(20, 20, 45, 0.78)
                ),
                url('/images/fundo-sesi.png') center/cover fixed;

            font-family: Arial, sans-serif;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
        }

        .logo {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .page-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .page-header {
            color: white;
            margin-bottom: 30px;
        }

        .page-header h1 {
            font-weight: 700;
        }

        .notification-card {
            background: rgba(255, 255, 255, 0.96);
            border: none;
            border-radius: 18px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transition: 0.2s;
        }

        .notification-card:hover {
            transform: translateY(-2px);
        }

        .notification-icon {
            width: 48px;
            height: 48px;
            border-radius: 14px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 22px;
            flex-shrink: 0;
        }

        .icon-success {
            background: #d1fae5;
            color: #059669;
        }

        .icon-warning {
            background: #fef3c7;
            color: #d97706;
        }

        .icon-info {
            background: #dbeafe;
            color: #2563eb;
        }

        .icon-danger {
            background: #fee2e2;
            color: #dc2626;
        }

        .notification-title {
            font-weight: 700;
            color: #202124;
            margin-bottom: 5px;
        }

        .notification-text {
            color: #666;
            margin-bottom: 5px;
        }

        .notification-date {
            color: #999;
            font-size: 13px;
        }

        .unread {
            border-left: 5px solid #6355e8;
        }

        .badge-counter {
            background: #6355e8;
            font-size: 13px;
            padding: 8px 12px;
            border-radius: 20px;
        }

        .empty-icon {
            font-size: 60px;
            color: #6355e8;
        }

        .btn-gdc {
            background: #6355e8;
            color: white;
            border: none;
        }

        .btn-gdc:hover {
            background: #5145d0;
            color: white;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <a
                href="{{ route('home') }}"
                class="navbar-brand d-flex align-items-center gap-2 text-white fw-bold"
            >
                <img
                    src="/images/gdc2.png"
                    alt="GDC"
                    class="logo"
                >

                GDC
            </a>

            <div class="d-flex align-items-center gap-3">

                <a
                    href="{{ route('home') }}"
                    class="text-white text-decoration-none"
                >
                    <i class="bi bi-house-door me-1"></i>
                    Início
                </a>

                @if (session('usuario_id'))

                    <a
                        href="{{ route('perfil') }}"
                        class="text-white text-decoration-none fw-semibold"
                    >
                        <i class="bi bi-person-circle me-1"></i>
                        {{ session('usuario_nome') }}
                    </a>

                @endif

            </div>

        </div>
    </nav>


    <!-- CONTEÚDO -->
    <main class="page-container">

        <div class="page-header">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>
                    <h1>
                        <i class="bi bi-bell me-2"></i>
                        Notificações
                    </h1>

                    <p class="mb-0 opacity-75">
                        Acompanhe as atualizações dos seus empréstimos.
                    </p>
                </div>

                <span class="badge-counter text-white">
                    3 não lidas
                </span>

            </div>

        </div>


        <!-- NOTIFICAÇÃO 1 -->
        <div class="notification-card unread">

            <div class="d-flex gap-3">

                <div class="notification-icon icon-success">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

                <div class="flex-grow-1">

                    <div class="notification-title">
                        Empréstimo aprovado
                    </div>

                    <div class="notification-text">
                        Sua solicitação do Carrinho 01 foi aprovada pelo responsável.
                    </div>

                    <div class="notification-date">
                        Hoje, 10:32
                    </div>

                </div>

            </div>

        </div>


        <!-- NOTIFICAÇÃO 2 -->
        <div class="notification-card unread">

            <div class="d-flex gap-3">

                <div class="notification-icon icon-warning">
                    <i class="bi bi-clock-fill"></i>
                </div>

                <div class="flex-grow-1">

                    <div class="notification-title">
                        Solicitação aguardando aprovação
                    </div>

                    <div class="notification-text">
                        Sua solicitação do Carrinho 02 ainda está aguardando análise.
                    </div>

                    <div class="notification-date">
                        Hoje, 09:15
                    </div>

                </div>

            </div>

        </div>


        <!-- NOTIFICAÇÃO 3 -->
        <div class="notification-card unread">

            <div class="d-flex gap-3">

                <div class="notification-icon icon-info">
                    <i class="bi bi-info-circle-fill"></i>
                </div>

                <div class="flex-grow-1">

                    <div class="notification-title">
                        Lembrete de devolução
                    </div>

                    <div class="notification-text">
                        Não se esqueça de devolver o carrinho após o término da aula.
                    </div>

                    <div class="notification-date">
                        Ontem, 16:40
                    </div>

                </div>

            </div>

        </div>


        <!-- NOTIFICAÇÃO 4 -->
        <div class="notification-card">

            <div class="d-flex gap-3">

                <div class="notification-icon icon-danger">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                </div>

                <div class="flex-grow-1">

                    <div class="notification-title">
                        Atenção ao equipamento
                    </div>

                    <div class="notification-text">
                        Foi registrado um problema em um notebook do Carrinho 03.
                    </div>

                    <div class="notification-date">
                        06/10/2026, 14:20
                    </div>

                </div>

            </div>

        </div>


        <div class="text-center mt-4">

            <a
                href="{{ route('home') }}"
                class="btn btn-gdc px-4 py-2"
            >
                <i class="bi bi-arrow-left me-2"></i>
                Voltar para o início
            </a>

        </div>

    </main>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>
