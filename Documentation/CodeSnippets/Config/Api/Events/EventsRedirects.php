<?php

return [
    [
        'action' => 'createPhpClassDocs',
        'class' => TYPO3\CMS\Redirects\Event\RedirectWasHitEvent::class,
        'targetFileName' => 'CodeSnippets/Events/Redirects/RedirectWasHitEvent.rst.txt',
        'withCode' => false,
    ],
    [
        'action' => 'createPhpClassDocs',
        'class' => TYPO3\CMS\Redirects\Event\SlugRedirectChangeItemCreatedEvent::class,
        'targetFileName' => 'CodeSnippets/Events/Redirects/SlugRedirectChangeItemCreatedEvent.rst.txt',
        'withCode' => false,
    ],
];
