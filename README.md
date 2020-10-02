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

PoC
---------------------------------------
Security claims should not be made lightly, a challenge to hack the library was made public on the internet. While the challenge is no longer hosted example scripts are provided in the `poc/` directory and you can try to hack them yourself:
```bash
cd poc/
php -S 0:8000
```
The challenge files are now accessible via <http://localhost:8000/> in your browser.

Usage of the library can also be audited by running `./audit.sh <directory>` from the command line.

Inspiration
---------------------------------------
This library was inspired by a number of posts/opinions, but the following deserve a special mention:
  * Making wrong code look wrong - <https://www.joelonsoftware.com/2005/05/11/making-wrong-code-look-wrong/>
  * Anti if campaign - <https://francescocirillo.com/pages/anti-if-campaign>
  * c2 wiki - <https://wiki.c2.com/>

