<?php

defined('TYPO3_MODE') or die();

// Add static template
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('blog_template', 'Configuration/TypoScript/BlogTemplate/', 'TYPO3 Blog Template');
