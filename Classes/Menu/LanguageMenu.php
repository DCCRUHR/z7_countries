<?php

declare(strict_types=1);

namespace Zeroseven\Countries\Menu;

use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use Zeroseven\Countries\Service\CountryService;

class LanguageMenu extends AbstractMenu
{
    public function render(): array
    {
        $menu = [];

        foreach ($this->site->getLanguages() as $language) {
            $menu[$language->getLanguageId()] = $this->getLanguageMenuItem($language);

            foreach (CountryService::getCountriesByLanguageUid($language->getLanguageId()) as $country) {
                DebuggerUtility::var_dump($country);die();
                if ($country->isEnabled()) {
                    $menu[$language->getLanguageId()]->addCountryItem($this->getCountryMenuItem($language, $country));
                }
            }
        }

        return $menu;
    }
}
