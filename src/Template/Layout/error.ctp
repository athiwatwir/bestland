<!DOCTYPE html>
<html lang="th">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= h($this->fetch('title') ?: 'ไม่พบหน้าที่ต้องการ | Bestland') ?></title>
    <?= $this->Html->meta('icon') ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <style>
        :root {
            --bl-red: #e01a33;
            --bl-red-dark: #c0152a;
            --bl-blue: #0d479b;
            --bl-ink: #1a2332;
            --bl-muted: #5c6b7a;
            --bl-cream: #f7f4ef;
            --bl-line: rgba(26, 35, 50, 0.08);
        }

        *, *::before, *::after { box-sizing: border-box; }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Prompt', sans-serif;
            color: var(--bl-ink);
            background: var(--bl-cream);
        }

        body {
            min-height: 100vh;
            min-height: 100dvh;
            overflow-x: hidden;
        }

        .error-shell {
            position: relative;
            width: 100%;
            min-height: 100vh;
            min-height: 100dvh;
            display: grid;
            place-items: center;
            padding: 2rem 1.25rem 3.5rem;
            isolation: isolate;
        }

        .error-bg {
            position: absolute;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(ellipse 80% 55% at 15% 10%, rgba(224, 26, 51, 0.12), transparent 55%),
                radial-gradient(ellipse 70% 50% at 90% 85%, rgba(13, 71, 155, 0.14), transparent 50%),
                linear-gradient(165deg, #faf8f4 0%, #eef2f7 48%, #f5efe8 100%);
        }

        .error-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            opacity: 0.35;
            background-image:
                linear-gradient(rgba(26, 35, 50, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(26, 35, 50, 0.04) 1px, transparent 1px);
            background-size: 48px 48px;
            mask-image: radial-gradient(ellipse 70% 60% at 50% 40%, #000 20%, transparent 75%);
        }

        .error-card {
            width: 100%;
            max-width: 560px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .error-header {
            margin-bottom: 1.5rem;
            animation: fadeDown 0.7s ease both;
        }

        .error-brand {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            text-decoration: none;
            color: var(--bl-ink);
        }

        .error-brand-mark {
            width: 2.4rem;
            height: 2.4rem;
            border-radius: 0.65rem;
            background: linear-gradient(145deg, var(--bl-red), var(--bl-red-dark));
            color: #fff;
            font-weight: 700;
            font-size: 1.05rem;
            display: grid;
            place-items: center;
            box-shadow: 0 8px 20px rgba(224, 26, 51, 0.28);
            flex-shrink: 0;
        }

        .error-brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.15;
            text-align: left;
        }

        .error-brand-text strong {
            font-size: 1.05rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .error-brand-text span {
            font-size: 0.72rem;
            color: var(--bl-muted);
            font-weight: 400;
        }

        .error-main {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .error-footer {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 1rem;
            text-align: center;
            font-size: 0.8rem;
            color: var(--bl-muted);
            pointer-events: none;
            animation: fadeIn 0.8s 0.35s ease both;
        }

        @keyframes fadeDown {
            from { opacity: 0; transform: translateY(-12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes floatSoft {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-8px); }
        }

        @keyframes pulseGlow {
            0%, 100% { opacity: 0.55; transform: scale(1); }
            50% { opacity: 0.9; transform: scale(1.06); }
        }
    </style>
</head>
<body>
    <div class="error-shell">
        <div class="error-bg" aria-hidden="true"></div>

        <div class="error-card">
            <header class="error-header">
                <a class="error-brand" href="<?= h(defined('HOME_URL') ? HOME_URL : '/') ?>">
                    <span class="error-brand-mark">B</span>
                    <span class="error-brand-text">
                        <strong>Bestland</strong>
                        <span>เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง</span>
                    </span>
                </a>
            </header>

            <main class="error-main">
                <?= $this->fetch('content') ?>
            </main>
        </div>

        <footer class="error-footer">
            © <?= date('Y') ?> บริษัท เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง จำกัด
        </footer>
    </div>
    <?= $this->fetch('script') ?>
</body>
</html>
