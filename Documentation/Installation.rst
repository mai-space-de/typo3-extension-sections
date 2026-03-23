.. include:: /Includes.rst.txt

.. _installation:

============
Installation
============

Requirements
============

*  PHP 8.2 or later
*  TYPO3 CMS 13.4 LTS
*  Composer (recommended)

Composer Installation
=====================

Run the following command in your TYPO3 project root:

.. code-block:: bash

    composer require maispace/mai-sections

This will install the extension together with its PHP dependencies:

*  ``b13/container`` — Content element containers for TYPO3
*  ``friendsoftypo3/visual-editor`` — Visual editing interface for the TYPO3 backend

Activate the Extension
======================

The extension is activated automatically when installed via Composer. If you manage
extensions via the TYPO3 backend, activate ``mai_sections`` in the **Extension Manager**.

Include TypoScript
==================

Include the TypoScript setup in your site's TypoScript template. The recommended way
is to import it directly in your site package:

.. code-block:: typoscript

    @import 'EXT:mai_sections/Configuration/TypoScript/setup.typoscript'

Alternatively, add the import in your root TypoScript template via the
**Include static (from extensions)** field in the sys_template record.
