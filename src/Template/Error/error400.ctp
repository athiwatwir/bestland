<?php
use Cake\Core\Configure;

$this->layout = 'error';
$this->assign('title', 'ไม่พบหน้าที่ต้องการ | Bestland');

$homeUrl = defined('HOME_URL') ? HOME_URL : '/';
$searchUrl = '/assets/search/?s=true';
$code = (int)$code;
?>
<style>
    .nf {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .nf-visual {
        position: relative;
        width: min(240px, 65vw);
        margin: 0 auto 1.25rem;
        animation: floatSoft 4.5s ease-in-out infinite;
    }

    .nf-glow {
        position: absolute;
        inset: 18% 10%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(224, 26, 51, 0.22), transparent 70%);
        animation: pulseGlow 3.2s ease-in-out infinite;
        z-index: 0;
    }

    .nf-illustration {
        position: relative;
        z-index: 1;
        width: 100%;
        height: auto;
        display: block;
        filter: drop-shadow(0 18px 28px rgba(26, 35, 50, 0.12));
    }

    .nf-code {
        margin: 0;
        font-size: clamp(3.25rem, 10vw, 4.75rem);
        font-weight: 700;
        line-height: 0.9;
        letter-spacing: -0.04em;
        color: var(--bl-red);
        animation: fadeUp 0.65s ease both;
    }

    .nf-title {
        margin: 0.7rem 0 0.45rem;
        font-size: clamp(1.25rem, 3.5vw, 1.7rem);
        font-weight: 600;
        color: var(--bl-ink);
        animation: fadeUp 0.7s 0.08s ease both;
    }

    .nf-desc {
        margin: 0 auto;
        max-width: 26rem;
        font-size: 0.95rem;
        font-weight: 300;
        line-height: 1.7;
        color: var(--bl-muted);
        animation: fadeUp 0.75s 0.16s ease both;
    }

    .nf-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        justify-content: center;
        margin-top: 1.5rem;
        animation: fadeUp 0.8s 0.24s ease both;
    }

    .nf-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.45rem;
        min-height: 2.85rem;
        padding: 0.65rem 1.35rem;
        border-radius: 999px;
        font-family: inherit;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease, color 0.2s ease;
    }

    .nf-btn:hover {
        transform: translateY(-2px);
    }

    .nf-btn-primary {
        color: #fff;
        background: linear-gradient(145deg, var(--bl-red), var(--bl-red-dark));
        box-shadow: 0 10px 24px rgba(224, 26, 51, 0.28);
    }

    .nf-btn-primary:hover {
        box-shadow: 0 14px 28px rgba(224, 26, 51, 0.36);
        color: #fff;
    }

    .nf-btn-ghost {
        color: var(--bl-blue);
        background: rgba(255, 255, 255, 0.72);
        border: 1px solid rgba(13, 71, 155, 0.22);
        backdrop-filter: blur(6px);
    }

    .nf-btn-ghost:hover {
        background: #fff;
        color: var(--bl-blue);
        box-shadow: 0 10px 22px rgba(13, 71, 155, 0.12);
    }

    .nf-meta {
        margin-top: 1.25rem;
        font-size: 0.78rem;
        color: rgba(92, 107, 122, 0.85);
        word-break: break-all;
        animation: fadeUp 0.85s 0.3s ease both;
    }

    .nf-debug {
        width: 100%;
        margin-top: 1.5rem;
        text-align: left;
        padding: 1rem 1.1rem;
        border-radius: 0.85rem;
        background: rgba(26, 35, 50, 0.04);
        border: 1px solid var(--bl-line);
        font-size: 0.82rem;
        color: var(--bl-muted);
        animation: fadeUp 0.9s 0.35s ease both;
    }

    .nf-debug strong {
        color: var(--bl-ink);
    }
</style>

<div class="nf">
    <div class="nf-visual" aria-hidden="true">
        <div class="nf-glow"></div>
        <svg class="nf-illustration" viewBox="0 0 320 220" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M28 178h264" stroke="#c9d2dc" stroke-width="2" stroke-linecap="round"/>
            <path d="M46 178V112l54-42 54 42v66" fill="#fff" stroke="#1a2332" stroke-width="2.5" stroke-linejoin="round"/>
            <path d="M72 178v-42h56v42" fill="#f0f3f7" stroke="#1a2332" stroke-width="2.5" stroke-linejoin="round"/>
            <rect x="84" y="148" width="14" height="14" rx="2" fill="#0d479b" opacity="0.75"/>
            <rect x="102" y="148" width="14" height="14" rx="2" fill="#0d479b" opacity="0.45"/>
            <path d="M178 178V98l62-36 62 36v80" fill="#fff" stroke="#1a2332" stroke-width="2.5" stroke-linejoin="round" opacity="0.55"/>
            <circle cx="246" cy="74" r="28" fill="#e01a33" opacity="0.12"/>
            <circle cx="246" cy="74" r="18" fill="#fff" stroke="#e01a33" stroke-width="3"/>
            <path d="M238 74h16M246 66v16" stroke="#e01a33" stroke-width="3" stroke-linecap="round"/>
            <path d="M210 178c18-28 42-28 60 0" stroke="#0d479b" stroke-width="2" stroke-linecap="round" opacity="0.35"/>
            <path d="M20 178c24-36 56-36 80 0" stroke="#0d479b" stroke-width="2" stroke-linecap="round" opacity="0.25"/>
        </svg>
    </div>

    <p class="nf-code"><?= $code ?: 404 ?></p>
    <h1 class="nf-title">ไม่พบหน้าที่ต้องการ</h1>
    <p class="nf-desc">
        ขออภัย หน้าที่คุณกำลังมองหาอาจถูกย้าย ลบไปแล้ว<br>
        หรือทรัพย์สินนี้อาจหมดอายุการแสดงผลแล้ว
    </p>

    <div class="nf-actions">
        <a class="nf-btn nf-btn-primary" href="<?= h($homeUrl) ?>">กลับหน้าหลัก</a>
        <a class="nf-btn nf-btn-ghost" href="<?= h($searchUrl) ?>">ค้นหาทรัพย์สิน</a>
    </div>

    <?php if (!empty($url)) : ?>
        <p class="nf-meta">URL: <?= h($url) ?></p>
    <?php endif; ?>

    <?php if (Configure::read('debug')) : ?>
        <div class="nf-debug">
            <strong>Debug:</strong> <?= h($message) ?>
        </div>
    <?php endif; ?>
</div>
