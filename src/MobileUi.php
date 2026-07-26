<?php

declare(strict_types=1);

namespace Pam\MobileUi;

use Pam\MobileUi\Enum\ThemeMode;
use Pam\MobileUi\Theme\Theme;

/**
 * @deprecated Use {@see PamUI}. Kept as a source-compatible migration bridge.
 */
final class MobileUi
{
    private function __construct()
    {
    }

    public static function mode(ThemeMode $mode): void
    {
        PamUI::mode($mode);
    }

    public static function theme(
        ?Theme $light = null,
        ?Theme $dark = null,
    ): void {
        PamUI::theme($light, $dark);
    }

    public static function systemDark(bool $dark): void
    {
        PamUI::systemDark($dark);
    }

    public static function currentTheme(): Theme
    {
        return PamUI::currentTheme();
    }
}
