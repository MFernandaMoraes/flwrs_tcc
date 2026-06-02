<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Flwrs · Admin Console</title>
    <!-- Google Fonts + smooth base -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100;14..32,200;14..32,300;14..32,400;14..32,500;14..32,600&display=swap" rel="stylesheet">
    <!-- Font Awesome 6 (free icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        background-color: #fefaf5;        /* base neutra quente */
        font-family: 'Inter', sans-serif;
        color: #2a2a2a;
        line-height: 1.4;
      }

      .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 2rem;
      }

      /* ===== HEADER ===== */
      header {
        padding: 2rem 0 1.2rem 0;
        border-bottom: 1px solid rgba(183, 164, 160, 0.15);
      }

      .header-flex {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
      }

      .logo-area {
        display: flex;
        align-items: baseline;
        gap: 0.5rem;
      }

      .logo-word {
        font-size: 2rem;
        font-weight: 300;
        letter-spacing: 2px;
        color: #4f4a45;
        text-transform: lowercase;
      }

      .logo-word strong {
        font-weight: 500;
        color: #c0859d;       /* tom rosado suave */
      }

      .tagline-header {
        font-size: 0.75rem;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #b2a19b;
        border-left: 1px solid #f7d5e7;
        padding-left: 0.8rem;
        margin-left: 0.3rem;
        font-weight: 300;
      }

      /* menu baseado no estilo home */
      .nav-menu {
        display: flex;
        gap: 2.5rem;
        font-size: 0.9rem;
        font-weight: 400;
        text-transform: uppercase;
        letter-spacing: 1.2px;
      }

      .nav-menu a {
        text-decoration: none;
        color: #5e5a55;
        transition: color 0.2s;
        font-size: 0.85rem;
        border-bottom: 1px solid transparent;
        padding-bottom: 4px;
      }

      .nav-menu a:hover {
        color: #c06f8b;
        border-bottom-color: #f7d5e7;
      }

      /* badge admin indicador */
      .admin-badge {
        background: #deef6e;
        padding: 0.3rem 1rem;
        border-radius: 40px;
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 1px;
        color: #3f3a35;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
      }

      /* dashboard hero (estilo minimal admin) */
      .admin-hero {
        background: linear-gradient(125deg, #fefaf5 0%, #faf2ed 100%);
        margin: 2rem 0 1rem 0;
        border-radius: 42px;
        padding: 2rem 2rem;
        box-shadow: 0 12px 24px -12px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(247, 213, 231, 0.5);
      }

      .admin-greeting h2 {
        font-size: 1.8rem;
        font-weight: 320;
        color: #3f3a35;
      }
      .admin-greeting h2 span {
        color: #c68b9f;
        font-weight: 450;
        background: linear-gradient(120deg, #f7d5e7 0%, #f7d5e7 40%, transparent 80%);
        background-repeat: no-repeat;
        background-size: 100% 0.3em;
        background-position: bottom;
      }
      .stats-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.8rem;
        margin-top: 2rem;
      }
      .stat-card {
        background: #ffffffd9;
        backdrop-filter: blur(2px);
        border-radius: 28px;
        padding: 1.4rem 1.2rem;
        border: 1px solid rgba(247, 213, 231, 0.6);
        transition: all 0.2s;
        box-shadow: 0 4px 12px rgba(0,0,0,0.02);
      }
      .stat-card:hover {
        border-color: #deef6e;
        transform: translateY(-3px);
      }
      .stat-title {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #b4849a;
        font-weight: 500;
        margin-bottom: 0.5rem;
      }
      .stat-number {
        font-size: 2.5rem;
        font-weight: 400;
        color: #4f4a45;
        letter-spacing: -1px;
      }
      .stat-unit {
        font-size: 1rem;
        font-weight: 300;
        color: #b2a19b;
      }
      .stat-trend {
        font-size: 0.75rem;
        margin-top: 0.6rem;
        color: #8faa7c;
      }

      /* Tabela de pedidos / gestão */
      .section-title {
        font-size: 1.6rem;
        font-weight: 320;
        color: #4f4a45;
        margin: 2.5rem 0 1.2rem 0;
        border-left: 5px solid #deef6e;
        padding-left: 1rem;
      }
      .orders-table-wrapper {
        overflow-x: auto;
        background: #ffffffd9;
        backdrop-filter: blur(2px);
        border-radius: 28px;
        border: 1px solid rgba(183, 164, 160, 0.15);
        margin-bottom: 2rem;
        box-shadow: 0 8px 20px -10px rgba(0,0,0,0.03);
      }
      .orders-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9rem;
      }
      .orders-table th {
        text-align: left;
        padding: 1.2rem 1.2rem;
        background-color: #fef5ef;
        font-weight: 500;
        color: #6f5b52;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.75rem;
        border-bottom: 1px solid #f0daea;
      }
      .orders-table td {
        padding: 1rem 1.2rem;
        border-bottom: 1px solid #f7eae3;
        color: #5a4e47;
      }
      .status-badge {
        background: #b2e4b3;
        color: #2e472f;
        padding: 0.25rem 0.8rem;
        border-radius: 30px;
        font-size: 0.75rem;
        font-weight: 500;
        display: inline-block;
      }
      .status-pending {
        background: #ffe4cf;
        color: #b45f3b;
      }
      .action-btn {
        background: transparent;
        border: 1px solid #f7d5e7;
        padding: 0.3rem 0.8rem;
        border-radius: 30px;
        font-size: 0.7rem;
        cursor: pointer;
        transition: 0.2s;
        font-family: 'Inter', sans-serif;
        color: #855e73;
        margin-right: 0.3rem;
      }
      .action-btn:hover {
        background: #deef6e;
        border-color: #c5d45c;
        color: #2d2d2d;
      }

      /* cards de gestão rápida (mesmo estilo dos destaques da home) */
      .admin-actions {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        margin: 2rem 0 3rem 0;
      }
      .admin-card {
        background: #ffffffd9;
        backdrop-filter: blur(2px);
        border-radius: 32px 16px 32px 16px;
        padding: 2rem 1.5rem;
        box-shadow: 0 8px 18px -8px rgba(0, 0, 0, 0.05);
        border: 1px solid rgba(247, 213, 231, 0.5);
        transition: all 0.2s;
      }
      .admin-card:hover {
        border-color: #deef6e;
        box-shadow: 0 20px 30px -15px #f7d5e7;
      }
      .card-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #b4849a;
      }
      .admin-card h3 {
        font-size: 1.4rem;
        font-weight: 350;
        margin-bottom: 0.8rem;
        color: #b4849a;
      }
      .admin-card p {
        color: #6f645c;
        font-weight: 300;
        font-size: 0.95rem;
        margin-bottom: 1.5rem;
      }
      .card-link {
        text-decoration: none;
        font-size: 0.8rem;
        text-transform: uppercase;
        color: #4a6b4b;
        background: #b2e4b3;
        padding: 0.4rem 1rem;
        border-radius: 30px;
        letter-spacing: 0.8px;
        border: 1px solid transparent;
        display: inline-block;
        cursor: pointer;
      }
      .card-link:hover {
        background: #deef6e;
        color: #2e472f;
      }

      /* mini modal / toast estilo */
      .toast-msg {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        background: #4f4a45;
        color: #fefaf5;
        padding: 0.8rem 1.5rem;
        border-radius: 50px;
        font-size: 0.85rem;
        backdrop-filter: blur(8px);
        background: #3f3a35e6;
        z-index: 1000;
        transition: all 0.2s;
        font-weight: 400;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      }

      footer {
        text-align: center;
        padding: 2rem 0 3rem 0;
        color: #a48d84;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-top: 2rem;
        border-top: 1px solid #f0daea;
      }
      footer span {
        color: #91b691;
        font-weight: 400;
      }

      @media (max-width: 900px) {
        .admin-actions {
          grid-template-columns: 1fr;
        }
        .stats-cards {
          grid-template-columns: 1fr;
        }
        .header-flex {
          flex-direction: column;
          gap: 1.2rem;
        }
        .nav-menu {
          flex-wrap: wrap;
          justify-content: center;
          gap: 1.2rem;
        }
        .container {
          padding: 0 1.2rem;
        }
        .admin-hero {
          padding: 1.5rem;
        }
      }
    </style>
</head>
<body>

<div class="container">
    <header>
        <div class="header-flex">
            <div class="logo-area">
                <div class="logo-word"><strong>Flwrs</strong> studio</div>
                <div class="tagline-header">admin · cultivate</div>
            </div>
            <div class="nav-menu">
                <a href="#">dashboard</a>
                <a href="#">pedidos</a>
                <a href="#">estoque</a>
                <a href="#">clientes</a>
                <a href="#">configurações</a>
            </div>
            <div class="admin-badge">
                <i class="fas fa-seedling" style="font-size: 0.75rem;"></i> master access
            </div>
        </div>
    </header>

    <!-- admin overview hero (estilo adaptado da home) -->
    <div class="admin-hero">
        <div class="admin-greeting">
            <h2>Olá, <span>gestor floral</span> 🌸<br> Bem-vindo ao painel Flwrs.</h2>
            <div class="hero-sub" style="margin-top: 0.8rem; border-left-color: #deef6e; max-width: 480px;">
                <p>Gerencie pedidos, atualize o catálogo e acompanhe os arranjos com amor e precisão.</p>
            </div>
        </div>
        <div class="stats-cards">
            <div class="stat-card">
                <div class="stat-title"><i class="far fa-calendar-alt"></i> pedidos esse mês</div>
                <div class="stat-number">147 <span class="stat-unit">un.</span></div>
                <div class="stat-trend"><i class="fas fa-arrow-up" style="color:#88aa6e;"></i> +12% em relação à semana anterior</div>
            </div>
            <div class="stat-card">
                <div class="stat-title"><i class="fas fa-boxes"></i> estoque ativo</div>
                <div class="stat-number">34 <span class="stat-unit">variedades</span></div>
                <div class="stat-trend">rosas · eucalipto · lírios</div>
            </div>
            <div class="stat-card">
                <div class="stat-title"><i class="fas fa-users"></i> clientes fiéis</div>
                <div class="stat-number">892 <span class="stat-unit">+</span></div>
                <div class="stat-trend">última compra nos últimos 30 dias</div>
            </div>
        </div>
    </div>

    <!-- Tabela de pedidos recentes (gestão de admin) -->
    <div class="section-title">
        <i class="fas fa-truck" style="margin-right: 10px; color:#b4849a;"></i> Pedidos em andamento
    </div>
    <div class="orders-table-wrapper">
        <table class="orders-table">
            <thead>
                <tr><th>ID Pedido</th><th>Cliente</th><th>Arranjo</th><th>Valor</th><th>Status</th><th>Ações</th></tr>
            </thead>
            <tbody id="orders-tbody">
                <!-- dados dinâmicos com js para simular gestão -->
                <tr><td>#FL-1024</td><td>Ana Beatriz</td><td>Buquê "Camélia Rosé"</td><td>R$ 189,00</td><td><span class="status-badge">Entregue</span></td><td><button class="action-btn" data-order="FL-1024">Detalhes</button></td></tr>
                <tr><td>#FL-1025</td><td>Carlos Mendes</td><td>Arranjo "Campo Suave"</td><td>R$ 275,00</td><td><span class="status-badge status-pending">Preparando</span></td><td><button class="action-btn" data-order="FL-1025">Atualizar</button></td></tr>
                <tr><td>#FL-1026</td><td>Larissa Fialho</td><td>Cesta "Jardim Secreto"</td><td>R$ 342,00</td><td><span class="status-badge">Enviado</span></td><td><button class="action-btn" data-order="FL-1026">Acompanhar</button></td></tr>
                <tr><td>#FL-1027</td><td>Rafaela Costa</td><td>Rosas do Amor (12 un)</td><td>R$ 129,90</td><td><span class="status-badge status-pending">Pendente</span></td><td><button class="action-btn" data-order="FL-1027">Processar</button></td></tr>
                <tr><td>#FL-1028</td><td>Juliana Tavares</td><td>Orquídea Exótica</td><td>R$ 415,00</td><td><span class="status-badge">Entregue</span></td><td><button class="action-btn" data-order="FL-1028">Nota fiscal</button></td></tr>
            </tbody>
        </table>
    </div>

    <!-- Grid de ações rápidas (espelhando os destaques da home com estilo admin) -->
    <div class="section-title">
        <i class="fas fa-magic" style="margin-right: 8px;"></i> Gestão rápida · florescer
    </div>
    <div class="admin-actions">
        <div class="admin-card">
            <div class="card-icon"><i class="fas fa-plus-circle"></i></div>
            <h3>Novo arranjo</h3>
            <p>Adicione composições florais, defina preços, descrição e estoque. Atualize o catálogo da loja.</p>
            <div class="card-link" id="addArrangementBtn"><i class="fas fa-leaf"></i>Cadastrar produto</div>
        </div>
        <div class="admin-card">
            <div class="card-icon"><i class="fas fa-truck-fast"></i></div>
            <h3>Logística & entregas</h3>
            <p>Acompanhe rotas, altere status de envio e notifique clientes automaticamente.</p>
            <div class="card-link" id="deliveryBtn"><i class="fas fa-shipping-fast"></i> Gerenciar entregas</div>
        </div>
        <div class="admin-card">
            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
            <h3>Relatórios</h3>
            <p>Exporte métricas de vendas, produtos mais amados e fluxo de caixa.</p>
            <div class="card-link" id="reportBtn"><i class="fas fa-download"></i> Gerar relatório</div>
        </div>
    </div>

    <!-- Simulação de seção de clientes recentes / mensagens (com toque da home) -->
    <div class="sobre-preview" style="margin-top: 0.5rem; background: #fefaf5; border-top: 2px dashed #b2e4b3; border-bottom: 2px dashed #deef6e;">
        <div style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: center;">
            <div style="flex:1">
                <h4 style="font-size: 1.7rem; font-weight: 300; color:#3d3d3d;">Feedbacks <strong style="color:#b65f82;">recentes</strong></h4>
                <p style="color:#6f625a; margin-bottom: 0.5rem;">“O buquê chegou no timing perfeito, flores fresquíssimas. Administração nota 10!” — Camila R.</p>
                <p style="color:#6f625a;">“Adorei a experiência de compra, entrega rápida e cuidado nos detalhes. Flwrs é amor.” — Mateus S.</p>
                <div class="card-link" style="margin-top: 1rem; display: inline-block; background:#f7d5e7; color:#5e424f;" id="msgBtn">✉️ Responder mensagens</div>
            </div>
            <div style="flex:0.8; background:#f7d5e7; border-radius: 70% 30% 60% 40% / 40% 60% 30% 70%; min-height: 170px; display: flex; align-items: center; justify-content: center; background: linear-gradient(145deg, #deef6e, #b2e4b3, #f7d5e7); background-size: 180% 180%;">
                <span style="background:#fefaf5e0; padding: 1rem 2rem; border-radius: 50px; font-size: 1rem;">🌸 gratidão</span>
            </div>
        </div>
    </div>
</div>

<footer>
    <span>Flwrs studio</span> · cuidado botânico · admin dashboard v1.0<br>
    <p>Flwrs — <span>“Flowers that feel like felling”</span> — pequenos gestos, memórias eternas</p>
</footer>

<!-- toast container -->
<div id="toastMsg" style="position: fixed; bottom: 20px; right: 20px; z-index: 2000;"></div>

<script src="js/admin.js"></script>
</body>
</html>