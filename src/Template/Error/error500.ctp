<?php
use Cake\Core\Configure;

$this->layout = 'error';
$this->assign('title', 'เกิดข้อผิดพลาด | Bestland');

$homeUrl = defined('HOME_URL') ? HOME_URL : '/';
?>
<style>
    .se {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        animation: fadeUp 0.7s ease both;
    }

    .se-code {
        margin: 0;
        font-size: clamp(3rem, 10vw, 4.5rem);
        font-weight: 700;
        line-height: 0.95;
        color: var(--bl-blue);
    }

    .se-title {
        margin: 0.85rem 0 0.55rem;
        font-size: clamp(1.25rem, 3.5vw, 1.7rem);
        font-weight: 600;
    }

    .se-desc {
        margin: 0 auto;
        max-width: 26rem;
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.7;
        color: var(--bl-muted);
    }

    .se-actions {
        margin-top: 1.75rem;
    }

    .se-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 2.85rem;
        padding: 0.65rem 1.35rem;
        border-radius: 999px;
        font-family: inherit;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        color: #fff;
        background: linear-gradient(145deg, var(--bl-red), var(--bl-red-dark));
        box-shadow: 0 10px 24px rgba(224, 26, 51, 0.28);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .se-btn:hover {
        transform: translateY(-2px);
        color: #fff;
        box-shadow: 0 14px 28px rgba(224, 26, 51, 0.36);
    }

    .se-debug {
        margin-top: 1.75rem;
        text-align: left;
        padding: 1rem 1.1rem;
        border-radius: 0.85rem;
        background: rgba(26, 35, 50, 0.04);
        border: 1px solid var(--bl-line);
        font-size: 0.82rem;
        color: var(--bl-muted);
    }
</style>

<div class="se">
    <p class="se-code">500</p>
    <h1 class="se-title">เกิดข้อผิดพลาดภายในระบบ</h1>
    <p class="se-desc">ขออภัย ระบบทำงานผิดพลาดชั่วคราว กรุณาลองใหม่อีกครั้งในภายหลัง</p>

    <div class="se-actions">
        <a class="se-btn" href="<?= h($homeUrl) ?>">กลับหน้าหลัก</a>
    </div>

    <?php if (Configure::read('debug')) : ?>
        <div class="se-debug">
            <strong>Debug:</strong> <?= h($message) ?>
        </div>
    <?php endif; ?>
</div>
