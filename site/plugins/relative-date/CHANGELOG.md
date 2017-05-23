# Changelog

## [2.0.1](https://github.com/distantnative/relative-date/releases/tag/2.0.1) (2017-03-31)
:arrow_up: Composer updated  
:card_index: License file added   

## [2.0.0](https://github.com/distantnative/relative-date/releases/tag/2.0.0) (2017-03-22)
- Rewritten as wrapper for the [Carbon library](http://carbon.nesbot.com/)


## Version 1.5
- Added a `relativeDate()` helper method
- Enabled relative date for UNIX timestamps
- Added fuzzy expressions for Italian

## Version 1.4
- Added option to use [conjunctions](#conjunctions) (automatically supported in English, German, French, Spanish, Catalan, Swedish)
- Fixed fuzzy expression setting for the Kirbytag
- Further code clean-up

## Version 1.3
- Renamed repository to `relative-date` and restructured files

## Version 1.2
- Added fuzzy expressions for Turkish, Portuguese, Dutch and Finnish
- Bugfixes

## Version 1.1
- Moved plugin logic to relativeTimeDate class
- Improved parameter handling
- Added option to specify a different language as the current
- Systemized and cleaned up language files
- Added language support for time-sensitive and gendered fuzzy expressions (already enabled in French, Spanish, Brazilian Portuguese and Catalan)
- Added support for Catalan
- Added fuzzy expressions for Swedish, Norwegian, Danish, Brazilian Portuguese and Catalan

## Version 1.0
- Rewritten human readable & [fuzzy expression](#fuzzy) logic
- Switched to using DateTime
- Added Romanian support

## Version 0.9
- Added [threshold option](#threshold)
- Complete rewrite [fuzzy expression](#fuzzy) logic, located it to ```site/config/config.php```
- Added Czech, Bulgarian, Chinese, Chinese Taiwan, Danish support
- Improved minor things on Thai translation

## Version 0.8
- Complete rewrite of logic for languages that feature multiple plural forms with specific rule sets (e.g. Russian)
- Fixed Russian localization
- Added support for Norwegian, Polish, Brazilian Portuguese, Finnish, Turkish, Serbian
- Added experimental support for Arabic

## Version 0.7
- Added basic [fuzzy expression support](#fuzzy) 
- Fixed wrong language matching for years
- Code simplifications
