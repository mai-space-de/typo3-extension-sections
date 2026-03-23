.. include:: /Includes.rst.txt

.. _introduction:

============
Introduction
============

What does it do?
================

The **Maispace Sections** extension provides a simple way to create structured
content sections for your TYPO3 website. It leverages the power of
`b13/container <https://github.com/b13/container>`__ to define reusable section
containers that editors can fill with content elements in the TYPO3 backend.

Combined with the `Visual Editor <https://github.com/FriendsOfTYPO3/visual-editor>`__,
editors get an intuitive interface for building page layouts from predefined
section types — without touching any template code.

Features
========

*  **Section containers** — Register content containers that group related content
   elements into logical sections (hero, text-image, cards, testimonials, etc.)

*  **Visual Editor integration** — Editors can place and arrange sections visually
   in the TYPO3 backend using the Visual Editor module

*  **TypoScript-driven rendering** — Section output is controlled entirely via
   TypoScript and Fluid templates, keeping business logic in version-controlled
   configuration files

*  **No JavaScript build step required** — Pure server-side PHP and TypoScript;
   no Node.js toolchain needed

*  **TYPO3 13.4 LTS ready** — Fully compatible with the current TYPO3 long-term
   support release

Requirements
============

*  PHP 8.2 or later
*  TYPO3 CMS 13.4 LTS
*  `b13/container <https://packagist.org/packages/b13/container>`__ ^3.0
*  `friendsoftypo3/visual-editor <https://packagist.org/packages/friendsoftypo3/visual-editor>`__ ^1.0
