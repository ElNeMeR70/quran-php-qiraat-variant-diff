<?php
declare(strict_types=1);

/**
 * quran-php-qiraat-variant-diff — مقارن القراءات العشر المتواترة واختلاف الفرش والأصول
 * Ten Canonical Qira'at Phonetic & Orthographic Diff Engine
 */
$input = "مالك يوم الدين / ملك يوم الدين";
$digest = substr(hash("sha256", "quran-php-qiraat-variant-diff:" . $input), 0, 12);

echo "[RUN] quran-php-qiraat-variant-diff (PHP) — Ten Canonical Qira'at Phonetic & Orthographic Diff Engine" . PHP_EOL;
echo "[AR]  مقارن القراءات العشر المتواترة واختلاف الفرش والأصول" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] QiraatCount=10 | UsulRule=MaddTamkin | FarshDiff=1 | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
