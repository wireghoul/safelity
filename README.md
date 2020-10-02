safelity
=================================================
Secure programming library for PHP, written as a proof of concept by Eldar "Wireghoul" Marcussen - http://www.justanotherhacker.com. Developed as part of my presentation at GIDS on [codified security](https://wurreka.com/ict/virtual-conference/web/session/codified-security).

Concept
---------------------------------------
The idea was to write a library that allows developers to write secure code that is reasonably similar to how they would write code otherwise whilst ensuring that the code only executes the intended functionality without the need for input validation or encoding of special characters. In order to ensure that this could be done some limitations were introduced. The following requirements/objectives were set:

 * PHP
 * Linux
 * Web based usage
 * Small adjustment for developers
 * No need for input validation
 * Auditable

This library was inspired by a number of posts/opinions, but the following deserve a special mention:
  * Making wrong code look wrong - <https://www.joelonsoftware.com/2005/05/11/making-wrong-code-look-wrong/>
  * Anti if campaign - <https://francescocirillo.com/pages/anti-if-campaign>
  * c2 wiki - <https://wiki.c2.com/>

