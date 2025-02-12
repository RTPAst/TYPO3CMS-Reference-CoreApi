..  include:: /Includes.rst.txt
..  index:: Events; AfterRecordSummaryForLocalizationEvent
..  _AfterRecordSummaryForLocalizationEvent:

======================================
AfterRecordSummaryForLocalizationEvent
======================================

..  versionadded:: 12.0

The PSR-14 event
:php:`\TYPO3\CMS\Backend\Controller\Event\AfterRecordSummaryForLocalizationEvent`
is fired in the
:php:`\TYPO3\CMS\Backend\Controller\Page\RecordSummaryForLocalization` class
and allows extensions to modify the payload of the :php:`JsonResponse`.


Example
=======

Registration of the event listener in the extension's :file:`Services.yaml`:

..  literalinclude:: _AfterRecordSummaryForLocalizationEvent/_Services.yaml
    :language: yaml
    :caption: EXT:my_extension/Configuration/Services.yaml

Read :ref:`how to configure dependency injection in extensions <dependency-injection-in-extensions>`.

The corresponding event listener class:

..  literalinclude:: _AfterRecordSummaryForLocalizationEvent/_MyEventListener.php
    :language: php
    :caption: EXT:my_extension/Classes/Backend/EventListener/MyEventListener.php

API
===

..  include:: /CodeSnippets/Events/Backend/AfterRecordSummaryForLocalizationEvent.rst.txt
